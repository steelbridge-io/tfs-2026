const http = require('http');
const { HTMLHint } = require('htmlhint');

const TARGET_HOST = 'localhost';
const TARGET_PORT = 80;
const URLS = [
    '/',
    '/travel/index.html',
    '/adventures/guideservice.html',
    '/adventures/private.html',
    '/schools/schools.html',
    '/camps/index.html',
    '/streamreport.html',
    '/fly-fishing-news'
];

const LINT_RULES = {
    'tag-pair': true,
    'id-unique': true,
    'src-not-empty': true,
    'attr-no-duplication': true,
    'title-tag-required': true
};

async function fetchPage(path, redirectCount = 0) {
    return new Promise((resolve, reject) => {
        const options = {
            hostname: TARGET_HOST,
            port: TARGET_PORT,
            path: path,
            method: 'GET'
        };

        const req = http.request(options, (res) => {
            if (res.statusCode >= 300 && res.statusCode < 400 && res.headers.location) {
                if (redirectCount >= 5) {
                    reject(new Error(`Too many redirects at ${path}`));
                    return;
                }
                try {
                    const redirectUrl = new URL(res.headers.location, `http://${TARGET_HOST}`);
                    fetchPage(redirectUrl.pathname, redirectCount + 1).then(resolve).catch(reject);
                } catch (e) {
                    reject(e);
                }
                return;
            }

            let data = '';
            res.on('data', (chunk) => data += chunk);
            res.on('end', () => {
                if (res.statusCode === 200) {
                    resolve(data);
                } else {
                    reject(new Error(`Failed to fetch ${path}: Status ${res.statusCode}`));
                }
            });
        });

        req.on('error', (e) => reject(e));
        req.end();
    });
}

async function run() {
    console.log('Starting HTML linting crawler...');
    let totalErrors = 0;

    for (const url of URLS) {
        process.stdout.write(`Checking ${url}... `);
        try {
            const html = await fetchPage(url);
            const messages = HTMLHint.verify(html, LINT_RULES);
            if (messages.length === 0) {
                console.log('passed');
            } else {
                console.log(`failed (${messages.length} issues)`);
                messages.forEach(msg => {
                    console.log(`  [${msg.line}:${msg.col}] ${msg.message} (${msg.rule.id})`);
                });
                totalErrors += messages.length;
            }
        } catch (error) {
            console.log(`error: ${error.message}`);
        }
    }

    console.log(`\nLinting complete. Total issues found: ${totalErrors}`);
    process.exit(totalErrors > 0 ? 1 : 0);
}

run();

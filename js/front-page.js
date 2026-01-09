AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

// Wait for DOM to load
document.addEventListener("DOMContentLoaded", function () {
    // Select the scrolly element
    const scrolly = document.getElementById("scrolly");

    if (scrolly) {
        // Delay fade-in and move up after 3 seconds
        setTimeout(() => {
            // Use JavaScript to make the scrolly visible and move it up
            scrolly.style.opacity = "1"; // Fade in
            scrolly.style.transform = "translate(-50%, 0)"; // Move up slightly

            // Add the bounce animation after the fade-in completes
            setTimeout(() => {
                scrolly.classList.add("bouncing");
            }, 1500); // Add bounce after fade-in finishes (1.5s duration)
        }, 3000); // Delay by 3 seconds

        // Add click functionality to the scrolly element
        scrolly.addEventListener("click", function () {
            // Prefer scrolling to the next content section so the carousel is fully out of view
            const nextSection = document.getElementById("front-page-into");

            // Attempt to detect a fixed header to avoid it covering the target
            const header = document.querySelector("header.site-header, .site-header, header");
            let headerHeight = 0;
            if (header) {
                const headerStyles = getComputedStyle(header);
                if (headerStyles.position === "fixed" || headerStyles.position === "sticky") {
                    headerHeight = header.offsetHeight || 0;
                }
            }

            // We want the top of the next section to stop just before the nav.
            // Add a small extra gap so we scroll slightly less than aligning exactly under the header.
            const visualGap = 100; // pixels

            // Custom smooth scrolling with easing for better feel
            const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const duration = prefersReduced ? 0 : 1000; // total scroll should be ~1s

            const clamp = (val, min, max) => Math.max(min, Math.min(max, val));
            // Easing with a bit less sluggish start than cubic to avoid "stuck" feeling
            const easeInOutQuad = (t) => (t < 0.5 ? 2 * t * t : 1 - Math.pow(-2 * t + 2, 2) / 2);

            let isAnimating = false;
            const animateScrollTo = (yTarget) => {
                const startY = window.pageYOffset;
                const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
                const finalY = clamp(yTarget, 0, Math.max(0, maxScroll));

                if (duration === 0) {
                    window.scrollTo(0, finalY);
                    return;
                }

                const distance = finalY - startY;
                let startTime = null;

                // Temporarily disable CSS smooth scrolling to prevent conflicts with custom animation
                const htmlEl = document.documentElement;
                const bodyEl = document.body;
                const prevHtmlScrollBehavior = htmlEl.style.scrollBehavior;
                const prevBodyScrollBehavior = bodyEl.style.scrollBehavior;
                htmlEl.style.scrollBehavior = 'auto';
                bodyEl.style.scrollBehavior = 'auto';
                isAnimating = true;

                function step(timestamp) {
                    if (startTime === null) startTime = timestamp;
                    const elapsed = timestamp - startTime;
                    const progress = clamp(elapsed / duration, 0, 1);
                    const eased = easeInOutQuad(progress);
                    window.scrollTo(0, startY + distance * eased);
                    if (elapsed < duration) {
                        requestAnimationFrame(step);
                    } else {
                        // Restore previous scroll-behavior values
                        htmlEl.style.scrollBehavior = prevHtmlScrollBehavior;
                        bodyEl.style.scrollBehavior = prevBodyScrollBehavior;
                        isAnimating = false;
                    }
                }

                requestAnimationFrame(step);
            };

            if (nextSection) {
                const rect = nextSection.getBoundingClientRect();
                // Add headerHeight plus visualGap so we stop slightly sooner (i.e., section closer to nav)
                const targetY = Math.max(0, rect.top + window.pageYOffset - (headerHeight + visualGap));
                if (!isAnimating) animateScrollTo(targetY);
            } else {
                // Fallback: scroll by one viewport height if the section isn't found
                if (!isAnimating) animateScrollTo(window.pageYOffset + window.innerHeight);
            }
        });
    }
});

/** Typing Effect */
const messages = [
    "This is a typing effect. Can be used to convey who The Fly Shop is.",
];

const phoneNumber = "This is the last part. Maybe display tel: 800-669-3474"; // Final phone number to type

const typingSpeed = 70; // Speed for typing each character
const delayBetweenLines = 1000; // Delay before typing the next line
const delayBeforeStart = 1500; // Delay before typing starts after scrolling into view
const delayBeforeDelete = 1500; // Delay before deleting all text after lines are complete
const typingTarget = document.getElementById("typing-area"); // Typing container

let messageIndex = 0; // Tracks which line/message is being typed
let charIndex = 0; // Tracks the character being typed for current line
let isDeleting = false; // Tracks if we are deleting text at the end
let typingStarted = false; // Prevents re-triggering the typing effect

// Typing effect
function typeEffect() {
    if (!isDeleting) {
        // Append characters to the typing target
        let currentMessage = messages[messageIndex];
        typingTarget.innerHTML = messages
            /*.slice(0, messageIndex)
            .join("<br>") + "<br>" + currentMessage.substring(0, charIndex);*/
                .slice(0, messageIndex)
                .join("<br>") +
            (messageIndex > 0 ? "<br>" : "") +
            currentMessage.substring(0, charIndex);

        charIndex++;

        // If the entire line is typed, move to the next
        if (charIndex > currentMessage.length) {
            messageIndex++;
            if (messageIndex >= messages.length) {
                setTimeout(() => {
                    isDeleting = true;
                    typeEffect();
                }, delayBeforeDelete);
            } else {
                charIndex = 0; // Reset for next message
                setTimeout(typeEffect, delayBetweenLines);
            }
        } else {
            setTimeout(typeEffect, typingSpeed);
        }
    } else {
        // Deleting all text before typing the phone number
        if (typingTarget.innerHTML.length > 0) {
            typingTarget.innerHTML = typingTarget.innerHTML.slice(0, -1); // Remove one character
            setTimeout(typeEffect, typingSpeed / 2); // Deletion speed
        } else {
            // Reset character index and type the phone number
            isDeleting = false;
            charIndex = 0;
            setTimeout(() => typePhoneNumber(), delayBetweenLines);
        }
    }
}

// Typing the phone number after the messages
function typePhoneNumber() {
    let currentText = typingTarget.innerHTML;
    if (charIndex < phoneNumber.length) {
        typingTarget.innerHTML = currentText + phoneNumber[charIndex];
        charIndex++;
        setTimeout(typePhoneNumber, typingSpeed);
    }
}

// Intersection Observer to trigger typing when visible
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !typingStarted) {
                typingStarted = true;
                setTimeout(() => typeEffect(), delayBeforeStart); // Start typing after delay
            }
        });
    },
    {
        threshold: 0.5, // Trigger when 50% of the container is visible
    }
);

// Observe the container
observer.observe(typingTarget.parentElement);
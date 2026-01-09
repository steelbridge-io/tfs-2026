AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

(function () {
    function initCarouselSync({ carouselId, titleId, contentId, readmoreId, accordionId, data }) {
        const carousel = document.getElementById(carouselId);
        if (!carousel) return;

        function updateContent(i) {
            const d = data[i];
            if (!d) return;
            const t = document.getElementById(titleId);
            const c = document.getElementById(contentId);
            const r = document.getElementById(readmoreId);
            if (t) t.innerHTML = d.title || '';
            if (c) c.innerHTML = d.content || '';
            if (r) r.innerHTML = d.readmore || '';
            const acc = document.getElementById(accordionId);
            if (acc) acc.style.display = d.readmore && d.readmore.trim() ? 'block' : 'none';
        }

        carousel.addEventListener('slid.bs.carousel', e => updateContent(e.to));
        carousel.addEventListener('slide.bs.carousel', e => updateContent(e.to));

        const indicators = carousel.querySelectorAll('.carousel-indicators button');
        indicators.forEach((btn, i) => btn.addEventListener('click', () => setTimeout(() => updateContent(i), 100)));

        updateContent(0);
    }

    window.TFS_MultiDest = { initCarouselSync };
})();


document.addEventListener('DOMContentLoaded', function() {

// Additional initialization for existing CTA functionality (if needed)
const expandBtn = document.getElementById('expandCTA');
const closeBtn = document.getElementById('closeCTA');
const ctaTrigger = document.getElementById('cta-trigger');
const formContainer = document.getElementById('cta-form-container');
const triggerArea = document.querySelector('.cta-trigger-area');

// Expand functionality (if CTA elements exist)
if (expandBtn && formContainer) {
    expandBtn.addEventListener('click', function(e) {
        e.preventDefault();

        // Add animation classes
        triggerArea.classList.add('collapsed');
        formContainer.classList.add('expanded');
        expandBtn.classList.add('rotated');

        // Smooth scroll to form after animation
        setTimeout(() => {
            formContainer.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }, 300);
    });
}

// Close functionality (if CTA elements exist)
if (closeBtn && formContainer) {
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();

        // Remove animation classes
        triggerArea.classList.remove('collapsed');
        formContainer.classList.remove('expanded');
        expandBtn.classList.remove('rotated');

        // Smooth scroll back to trigger
        setTimeout(() => {
            ctaTrigger.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }, 300);
    });
}

// Optional: Close CTA on outside click
if (formContainer && expandBtn) {
    document.addEventListener('click', function(e) {
        if (formContainer.classList.contains('expanded') &&
            !formContainer.contains(e.target) &&
            !expandBtn.contains(e.target)) {
            if (closeBtn) closeBtn.click();
        }
    });

    // Optional: Close CTA on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && formContainer.classList.contains('expanded')) {
            if (closeBtn) closeBtn.click();
        }
    });
}
});

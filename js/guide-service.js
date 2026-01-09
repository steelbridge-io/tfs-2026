
AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

/** /Dynamic Hero Overlay Positioning - UPDATED TO FIX STUCK POSITIONING */

/*document.addEventListener('DOMContentLoaded', function () {
    const expandBtn = document.getElementById('expandCTA');
    const closeBTn = document.getElementById('closeCTA');
    const ctaTrigger = document.getElementById('cta-trigger');
    const formContainer = document.getElementById('cta-form-container');
    const triggerArea = document.querySelector('.cta-trigger-area');

    // Expand functionality
    if (expandBtn) {
        expandBtn.addEventListener('click', function (e) {
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

    // Close functionality
    if (closeBTn) {
        closeBTn.addEventListener('click', function (e) {
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

    // Optional: Close on outside click
    document.addEventListener('click', function (e) {
        if (formContainer.classList.contains('expanded') &&
            !formContainer.contains(e.target) &&
            !expandBtn.contains(e.target)) {
            closeBTn.click();
        }
    });

    // Optional: Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && formContainer.classList.contains('expanded')) {
            closeBTn.click();
        }
    });
}); */
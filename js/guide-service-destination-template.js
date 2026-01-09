
AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

/** Dynamic Hero Overlay Positioning - UPDATED TO FIX STUCK POSITIONING
document.addEventListener("DOMContentLoaded", function () {
    let initialPosition = null;
    let isCalculatingInitial = false;

    function calculateInitialPosition() {
        if (isCalculatingInitial) return null;

        isCalculatingInitial = true;

        // Wait for page to be fully loaded and positioned
        setTimeout(() => {
            const belowNavLogo = document.querySelector('#below-nav-logo');
            const heroOverlay = document.querySelector('.hero-overlay');

            if (!belowNavLogo || !heroOverlay) {
                isCalculatingInitial = false;
                return;
            }

            // Ensure we're at the top and logo is in its natural position
            window.scrollTo(0, 0);

            // Wait a bit more for any CSS transitions to complete
            setTimeout(() => {
                const logoRect = belowNavLogo.getBoundingClientRect();
                const logoStyle = window.getComputedStyle(belowNavLogo);
                const isLogoVisible = logoStyle.display !== 'none' &&
                    logoStyle.visibility !== 'hidden' &&
                    logoStyle.opacity !== '0' &&
                    logoRect.height > 0;

                if (isLogoVisible) {
                    const logoBottom = logoRect.bottom;
                    const navbar = document.querySelector('.navbar');
                    const navbarHeight = navbar ? navbar.offsetHeight : 80;
                    const minSpacing = Math.max(navbarHeight * 0.3, 20);
                    const heroTop = logoBottom + minSpacing;
                    const viewportHeight = window.innerHeight;
                    const topPercentage = (heroTop / viewportHeight) * 100;

                    initialPosition = Math.min(topPercentage, 85);
                    console.log('Initial position calculated:', initialPosition + '%');
                }

                isCalculatingInitial = false;
            }, 500);
        }, 100);
    }

    function adjustHeroOverlayPosition() {
        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');

        if (!belowNavLogo || !heroOverlay) {
            return;
        }

        const currentScrollY = window.scrollY;
        console.log('Scroll position:', currentScrollY);

        // Clear all existing positioning first
        heroOverlay.classList.remove('top-50', 'top-lg-50-mw', 'top-lg-60', 'translate-middle', 'translate-middle-x', 'start-50');
        heroOverlay.style.top = '';

        // If we're at or near the top (within first 50px), use initial position
        if (currentScrollY <= 50 && initialPosition !== null) {
            console.log('Using initial position:', initialPosition + '%');
            heroOverlay.style.top = initialPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        // For scrolled positions, check logo visibility
        const logoRect = belowNavLogo.getBoundingClientRect();
        const logoStyle = window.getComputedStyle(belowNavLogo);
        const isLogoVisible = logoStyle.display !== 'none' &&
            logoStyle.visibility !== 'hidden' &&
            logoStyle.opacity !== '0' &&
            logoRect.height > 0;

        console.log('Logo visible:', isLogoVisible);

        if (!isLogoVisible) {
            // Logo is hidden, use fallback position
            const navbar = document.querySelector('.navbar');
            const navbarHeight = navbar ? navbar.offsetHeight : 80;
            const fallbackTop = navbarHeight + 20;
            const viewportHeight = window.innerHeight;
            const topPercentage = (fallbackTop / viewportHeight) * 100;
            const finalPosition = Math.min(topPercentage, 85);

            console.log('Using fallback position:', finalPosition + '%');
            heroOverlay.style.top = finalPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        // Logo is visible, calculate based on its current position
        const logoBottom = logoRect.bottom;
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const minSpacing = Math.max(navbarHeight * 0.3, 20);
        const heroTop = logoBottom + minSpacing;
        const viewportHeight = window.innerHeight;
        const topPercentage = (heroTop / viewportHeight) * 100;
        const finalPosition = Math.min(topPercentage, 85);

        console.log('Using calculated position:', finalPosition + '%');
        heroOverlay.style.top = finalPosition + '%';
        heroOverlay.classList.add('start-50', 'translate-middle-x');
    }

    // Calculate initial position when page loads
    window.addEventListener('load', function() {
        setTimeout(calculateInitialPosition, 500);
    });

    // Also try to calculate it immediately
    setTimeout(calculateInitialPosition, 1000);

    // Enhanced scroll handler with debouncing
    let scrollTimeout;
    let isScrolling = false;

    function handleScroll() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                const currentScrollY = window.scrollY;

                // Clear any pending adjustments
                clearTimeout(scrollTimeout);

                // Immediate adjustment for major scroll changes
                if (Math.abs(currentScrollY - (window.lastScrollY || 0)) > 30) {
                    adjustHeroOverlayPosition();
                }

                // Delayed adjustment to catch CSS transition completions
                scrollTimeout = setTimeout(adjustHeroOverlayPosition, 300);

                window.lastScrollY = currentScrollY;
                isScrolling = false;
            });
            isScrolling = true;
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });

    // Enhanced resize handler
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            // Recalculate initial position on resize
            if (window.scrollY <= 50) {
                calculateInitialPosition();
            }
            adjustHeroOverlayPosition();
        }, 300);
    });

    // Force recalculation when CSS transitions might be complete
    let transitionCheckCount = 0;
    const transitionInterval = setInterval(function() {
        if (window.scrollY <= 50 && initialPosition !== null) {
            adjustHeroOverlayPosition();
        }

        transitionCheckCount++;
        if (transitionCheckCount >= 10) { // 10 * 1000ms = 10 seconds
            clearInterval(transitionInterval);
        }
    }, 1000);
}); ****/

/** /Dynamic Hero Overlay Positioning - UPDATED TO FIX STUCK POSITIONING */

document.addEventListener('DOMContentLoaded', function () {
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
});
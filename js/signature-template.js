AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

   	const handleScrollStages = () => {
		const scrollY = window.scrollY;

		// Remove all stage classes first
		navbar.classList.remove('scroll-stage-1', 'scroll-stage-2', 'scroll-stage-3', 'scrolled');

		// Disable scroll effects on mobile (screens < 992px)
		if (window.innerWidth < 992) { if (scrollY > 50) { navbar.classList.add("scrolled"); }  
			return;
		}

		if (scrollY > 10 && scrollY <= 25) {
            navbar.classList.add('scroll-stage-1');
        } else if (scrollY > 25 && scrollY <= 40) {
            navbar.classList.add('scroll-stage-2');
        } else if (scrollY > 40 && scrollY <= 50) {
            navbar.classList.add('scroll-stage-3');
        } else if (scrollY > 50) {
            navbar.classList.add('scrolled');
        }
    };

    // Use requestAnimationFrame for smooth animation
    let isScrolling = false;
    window.addEventListener("scroll", function() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                handleScrollStages();
                isScrolling = false;
            });
            isScrolling = true;
        }
    });

    // Run on page load
    handleScrollStages();
});

/** Dynamic Hero Overlay Positioning
document.addEventListener("DOMContentLoaded", function () {
    function adjustHeroOverlayPosition() {
        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');

        if (!belowNavLogo || !heroOverlay) {
            return;
        }

        // Get the logo container's position and dimensions
        const logoRect = belowNavLogo.getBoundingClientRect();
        const logoBottom = logoRect.bottom;

        // Calculate minimum spacing (similar to navbar spacing)
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const minSpacing = Math.max(navbarHeight * 0.3, 20); // 30% of navbar height or 20px minimum

        // Calculate the top position for hero overlay
        const heroTop = logoBottom + minSpacing;

        // Convert to percentage or viewport units for responsive behavior
        const viewportHeight = window.innerHeight;
        const topPercentage = (heroTop / viewportHeight) * 100;

        // Apply the calculated position
        // Remove Bootstrap classes that conflict with our positioning
        heroOverlay.classList.remove('top-50', 'top-lg-50-mw', 'top-lg-60');

        // Set custom positioning
        heroOverlay.style.top = `${Math.min(topPercentage, 85)}%`; // Cap at 85% to prevent going off-screen

        // Ensure the overlay remains centered horizontally
        if (!heroOverlay.classList.contains('start-50')) {
            heroOverlay.classList.add('start-50', 'translate-middle-x');
        }
        heroOverlay.classList.remove('translate-middle');
        heroOverlay.classList.add('translate-middle-x');
    }

    // Initial adjustment
    adjustHeroOverlayPosition();

    // Adjust on window resize
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(adjustHeroOverlayPosition, 250);
    });

    // Adjust when images load (in case logo loads after DOM)
    window.addEventListener('load', adjustHeroOverlayPosition);

    // Observe logo changes (for dynamic logo swapping)
    const belowNavLogo = document.querySelector('#below-nav-logo');
    if (belowNavLogo && window.MutationObserver) {
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList' ||
                    (mutation.type === 'attributes' &&
                        (mutation.attributeName === 'src' || mutation.attributeName === 'style'))) {
                    setTimeout(adjustHeroOverlayPosition, 100);
                }
            });
        });

        observer.observe(belowNavLogo, {
            childList: true,
            subtree: true,
            attributes: true,
            attributeFilter: ['src', 'style']
        });
    }
}); ****/
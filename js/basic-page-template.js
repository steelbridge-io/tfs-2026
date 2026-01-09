/**
 * Logo and title h1 positioning
 */
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




/** Dynamic Hero Overlay Positioning - UPDATED TO FIX STUCK POSITIONING */

document.addEventListener("DOMContentLoaded", function () {
    // CACHE INITIAL POSITION: Store the correct position when logo is in natural state
    let initialPosition = null;
    let isCalculatingInitial = false;
    let pendingRaf = null;
    const raf = (fn) => {
        if (pendingRaf) cancelAnimationFrame(pendingRaf);
        pendingRaf = requestAnimationFrame(() => {
            pendingRaf = null;
            fn();
        });
    };

    // Helper: wait for images to be loaded (already-complete counts too)
    function waitForImagesToLoad(images) {
        const list = Array.from(images || []);
        const unloaded = list.filter(img => !(img.complete && img.naturalWidth > 0));
        if (unloaded.length === 0) return Promise.resolve();

        return new Promise(resolve => {
            let remaining = unloaded.length;
            const done = () => {
                remaining -= 1;
                if (remaining <= 0) resolve();
            };
            unloaded.forEach(img => {
                img.addEventListener('load', done, { once: true });
                img.addEventListener('error', done, { once: true });
            });
            // Safety timeout in case an image never fires events
            setTimeout(resolve, 1500);
        });
    }

    // CALCULATE INITIAL POSITION: Ensures we get the correct baseline position

    async function calculateInitialPosition() {
        if (isCalculatingInitial) return null;
        isCalculatingInitial = true;

        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');
        if (!belowNavLogo || !heroOverlay) {
            isCalculatingInitial = false;
            return;
        }

        // Ensure logo images are loaded before measuring
        const logoImgs = belowNavLogo.querySelectorAll('img');
        await waitForImagesToLoad(logoImgs);

        // Ensure hero media is ready enough to be laid out
        const heroMedia = document.querySelector('.travel-template-hero .hero-image img, .travel-template-hero .hero-image video');
        if (heroMedia && heroMedia.tagName === 'IMG') {
            await waitForImagesToLoad([heroMedia]);
        }

        // NOTE: Do not force scroll to top; respect current position
        // window.scrollTo(0, 0); // removed

        // Wait a moment for any CSS layout/paint to settle
        await new Promise(r => setTimeout(r, 50));

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
        }

        isCalculatingInitial = false;
    }

    // MAIN POSITIONING FUNCTION: Enhanced to use cached initial position
    function adjustHeroOverlayPosition() {
        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');

        if (!belowNavLogo || !heroOverlay) return;

        const currentScrollY = window.scrollY;

        // Clear all existing positioning first
        heroOverlay.classList.remove('top-50', 'top-lg-50-mw', 'top-lg-60', 'translate-middle', 'translate-middle-x', 'start-50');
        heroOverlay.style.top = '';

        // Use cached initial when near top and available
        if (currentScrollY <= 50 && initialPosition !== null) {
            heroOverlay.style.top = initialPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        const logoRect = belowNavLogo.getBoundingClientRect();
        const logoStyle = window.getComputedStyle(belowNavLogo);
        const isLogoVisible = logoStyle.display !== 'none' &&
            logoStyle.visibility !== 'hidden' &&
            logoStyle.opacity !== '0' &&
            logoRect.height > 0;

        if (!isLogoVisible) {
            const navbar = document.querySelector('.navbar');
            const navbarHeight = navbar ? navbar.offsetHeight : 80;
            const fallbackTop = navbarHeight + 20;
            const viewportHeight = window.innerHeight;
            const topPercentage = (fallbackTop / viewportHeight) * 100;
            const finalPosition = Math.min(topPercentage, 85);

            heroOverlay.style.top = finalPosition + '%';
            heroOverlay.classList.add('start-50', 'translate-middle-x');
            return;
        }

        const logoBottom = logoRect.bottom;
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const minSpacing = Math.max(navbarHeight * 0.3, 20);
        const heroTop = logoBottom + minSpacing;
        const viewportHeight = window.innerHeight;
        const topPercentage = (heroTop / viewportHeight) * 100;
        const finalPosition = Math.min(topPercentage, 85);

        heroOverlay.style.top = finalPosition + '%';
        heroOverlay.classList.add('start-50', 'translate-middle-x');
    }

    // INITIAL POSITION CALCULATION: Run when page loads and after images are ready
    window.addEventListener('load', function() {
        // After full load, ensure logo/hero are measured accurately
        calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
    });

    // Also try once more shortly after DOM ready
    setTimeout(() => {
        calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
    }, 800);

    // ENHANCED SCROLL HANDLER
    let scrollTimeout;
    let isScrolling = false;

    function handleScroll() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                clearTimeout(scrollTimeout);
                // Immediate adjustment
                adjustHeroOverlayPosition();
                // Follow-up adjustment after transitions
                scrollTimeout = setTimeout(adjustHeroOverlayPosition, 200);
                isScrolling = false;
            });
            isScrolling = true;
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });

    // RESIZE HANDLER
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(async () => {
            if (window.scrollY <= 50) {
                await calculateInitialPosition();
            }
            raf(adjustHeroOverlayPosition);
        }, 150);
    });

    // TRANSITION END: when the below-nav logo transitions (opacity/transform), recalc
    const belowNavLogo = document.querySelector('#below-nav-logo');
    if (belowNavLogo) {
        belowNavLogo.addEventListener('transitionend', async (e) => {
            // Only react to properties that change visibility/position context
            if (['opacity', 'transform'].includes(e.propertyName)) {
                if (window.scrollY <= 50) {
                    await calculateInitialPosition();
                }
                raf(adjustHeroOverlayPosition);
            }
        });
    }

    // MUTATION OBSERVER: Watch for logo changes
    if (belowNavLogo && window.MutationObserver) {
        const observer = new MutationObserver(function(mutations) {
            let shouldRecalc = false;
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList') shouldRecalc = true;
                if (mutation.type === 'attributes' &&
                    (mutation.attributeName === 'src' || mutation.attributeName === 'style' || mutation.attributeName === 'class')) {
                    shouldRecalc = true;
                }
            });
            if (shouldRecalc) {
                setTimeout(async () => {
                    const imgs = belowNavLogo.querySelectorAll('img');
                    await waitForImagesToLoad(imgs);
                    if (window.scrollY <= 50) {
                        await calculateInitialPosition();
                    }
                    raf(adjustHeroOverlayPosition);
                }, 50);
            }
        });

        observer.observe(belowNavLogo, {
            childList: true,
            subtree: true,
            attributes: true,
            attributeFilter: ['src', 'style', 'class']
        });
    }

    // Ensure hero media readiness triggers a recalc too
    const heroImgOrVideo = document.querySelector('.travel-template-hero .hero-image img, .travel-template-hero .hero-image video');
    if (heroImgOrVideo) {
        if (heroImgOrVideo.tagName === 'VIDEO') {
            heroImgOrVideo.addEventListener('loadeddata', () => {
                if (window.scrollY <= 50) {
                    calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
                } else {
                    raf(adjustHeroOverlayPosition);
                }
            }, { once: true });
        } else {
            heroImgOrVideo.addEventListener('load', () => {
                if (window.scrollY <= 50) {
                    calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
                } else {
                    raf(adjustHeroOverlayPosition);
                }
            }, { once: true });
        }
    }
})

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
}); *****/
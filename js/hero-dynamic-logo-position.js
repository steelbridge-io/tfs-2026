/** Dynamic Hero Overlay Positioning - UPDATED WITH RESPONSIVE HARD STOP BELOW 992px */

document.addEventListener("DOMContentLoaded", function () {
    // Match Bootstrap lg breakpoint
    const mq = window.matchMedia('(max-width: 991.98px)');
    const isSmall = () => mq.matches;

    // Helper to reset overlay back to pure Bootstrap centering on small screens
    function resetForSmallScreens() {
        const overlay = document.querySelector('.hero-overlay');
        const title = document.querySelector('.hero-overlay .hero-title');
        if (!overlay) return;

        // Remove JS-applied inline top and classes that could drag it down
        overlay.style.top = '';
        overlay.classList.remove('start-50', 'translate-middle-x', 'hero-overlay-no-transition');
        // Restore Bootstrap’s vertical center
        overlay.classList.add('top-50', 'translate-middle');

        // Ensure title is visible (no JS animation classes)
        if (title) {
            title.classList.remove('hero-title-hidden');
            title.classList.add('hero-title-show');
        }
    }

    // If already small at load, reset and fully disable
    if (isSmall()) {
        resetForSmallScreens();
        return;
    }

    // --- Existing desktop-only logic (unchanged) ---
    let initialPosition = null;
    let isCalculatingInitial = false;
    let pendingRaf = null;
    let hasAppliedFirstPosition = false;

    const DISABLE_TRANSITION_CLASS = 'hero-overlay-no-transition';
    const TITLE_HIDDEN_CLASS = 'hero-title-hidden';
    const TITLE_SHOW_CLASS = 'hero-title-show';

    const raf = (fn) => {
        if (pendingRaf) cancelAnimationFrame(pendingRaf);
        pendingRaf = requestAnimationFrame(() => {
            pendingRaf = null;
            fn();
        });
    };

    function ensureNoTransitionState() {
        const overlay = document.querySelector('.hero-overlay');
        if (overlay && !overlay.classList.contains(DISABLE_TRANSITION_CLASS)) {
            overlay.classList.add(DISABLE_TRANSITION_CLASS);
        }
    }
    function enableTransitions() {
        const overlay = document.querySelector('.hero-overlay');
        if (overlay) overlay.classList.remove(DISABLE_TRANSITION_CLASS);
    }
    function hideTitle() {
        const title = document.querySelector('.hero-overlay .hero-title');
        if (title) {
            title.classList.add(TITLE_HIDDEN_CLASS);
            title.classList.remove(TITLE_SHOW_CLASS);
        }
    }
    function revealTitle() {
        const title = document.querySelector('.hero-overlay .hero-title');
        if (title) {
            requestAnimationFrame(() => {
                title.classList.remove(TITLE_HIDDEN_CLASS);
                title.classList.add(TITLE_SHOW_CLASS);
            });
        }
    }

    // Desktop init
    ensureNoTransitionState();
    hideTitle();

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
            setTimeout(resolve, 1500);
        });
    }

    async function calculateInitialPosition() {
        if (isCalculatingInitial) return null;
        isCalculatingInitial = true;

        const belowNavLogo = document.querySelector('#below-nav-logo');
        const heroOverlay = document.querySelector('.hero-overlay');
        if (!belowNavLogo || !heroOverlay) {
            isCalculatingInitial = false;
            return;
        }

        const logoImgs = belowNavLogo.querySelectorAll('img');
        await waitForImagesToLoad(logoImgs);

        const heroMedia = document.querySelector('.travel-template-hero .hero-image img, .travel-template-hero .hero-image video');
        if (heroMedia && heroMedia.tagName === 'IMG') {
            await waitForImagesToLoad([heroMedia]);
        }

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

    function applyTop(overlay, valuePct, instantaneous) {
        if (instantaneous) ensureNoTransitionState();
        overlay.style.top = valuePct + '%';
        overlay.classList.add('start-50', 'translate-middle-x');
        if (instantaneous) requestAnimationFrame(enableTransitions);
    }

    function adjustHeroOverlayPosition() {
        if (isSmall()) return; // hard stop if resized to small
        const belowNavLogo = document.querySelector('#below-nav-logo');
        const overlay = document.querySelector('.hero-overlay');
        if (!belowNavLogo || !overlay) return;

        if (!overlay.dataset.cleaned) {
            overlay.classList.remove('top-50', 'top-lg-50-mw', 'top-lg-60', 'translate-middle');
            overlay.dataset.cleaned = '1';
        }

        const currentScrollY = window.scrollY;
        const instant = !hasAppliedFirstPosition;

        if (currentScrollY <= 50 && initialPosition !== null) {
            applyTop(overlay, initialPosition, instant);
            hasAppliedFirstPosition = true;
            return;
        }

        const logoRect = belowNavLogo.getBoundingClientRect();
        const style = window.getComputedStyle(belowNavLogo);
        const visible = style.display !== 'none' && style.visibility !== 'hidden' && style.opacity !== '0' && logoRect.height > 0;

        if (!visible) {
            const navbar = document.querySelector('.navbar');
            const navbarHeight = navbar ? navbar.offsetHeight : 80;
            const fallbackTop = navbarHeight + 20;
            const viewportHeight = window.innerHeight;
            const pct = (fallbackTop / viewportHeight) * 100;
            applyTop(overlay, Math.min(pct, 85), instant);
            hasAppliedFirstPosition = true;
            return;
        }

        const logoBottom = logoRect.bottom;
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const minSpacing = Math.max(navbarHeight * 0.3, 20);
        const heroTop = logoBottom + minSpacing;
        const viewportHeight = window.innerHeight;
        const pct = (heroTop / viewportHeight) * 100;
        applyTop(overlay, Math.min(pct, 85), instant);
        hasAppliedFirstPosition = true;
    }

    // Initial sequence
    window.addEventListener('load', function() {
        if (isSmall()) return resetForSmallScreens();
        calculateInitialPosition().then(() => {
            raf(() => {
                adjustHeroOverlayPosition();
                revealTitle();
            });
        });
    });

    setTimeout(() => {
        if (isSmall()) return;
        calculateInitialPosition().then(() => {
            raf(() => {
                adjustHeroOverlayPosition();
                revealTitle();
            });
        });
    }, 800);

    // Scroll updates
    let scrollTimeout, isScrolling = false;
    function handleScroll() {
        if (isSmall()) return;
        if (!isScrolling) {
            requestAnimationFrame(function() {
                clearTimeout(scrollTimeout);
                adjustHeroOverlayPosition();
                scrollTimeout = setTimeout(adjustHeroOverlayPosition, 200);
                isScrolling = false;
            });
            isScrolling = true;
        }
    }
    window.addEventListener('scroll', handleScroll, { passive: true });

    // Resize listener: when crossing to small, immediately reset and stop
    let resizeTimeout;
    function onResize() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            if (isSmall()) {
                resetForSmallScreens();
            } else {
                // back to desktop
                calculateInitialPosition().then(() => raf(adjustHeroOverlayPosition));
            }
        }, 100);
    }
    window.addEventListener('resize', onResize);
    mq.addEventListener ? mq.addEventListener('change', onResize) : mq.addListener(onResize); // Safari fallback

    // Logo transitions/mutations
    const belowNavLogo = document.querySelector('#below-nav-logo');
    if (belowNavLogo) {
        belowNavLogo.addEventListener('transitionend', async (e) => {
            if (isSmall()) return;
            if (['opacity', 'transform'].includes(e.propertyName)) {
                if (window.scrollY <= 50) await calculateInitialPosition();
                raf(adjustHeroOverlayPosition);
            }
        });

        if (window.MutationObserver) {
            const observer = new MutationObserver(mutations => {
                if (isSmall()) return;
                let should = false;
                mutations.forEach(m => {
                    if (m.type === 'childList') should = true;
                    if (m.type === 'attributes' && ['src','style','class'].includes(m.attributeName)) should = true;
                });
                if (should) {
                    setTimeout(async () => {
                        const imgs = belowNavLogo.querySelectorAll('img');
                        await waitForImagesToLoad(imgs);
                        if (window.scrollY <= 50) await calculateInitialPosition();
                        raf(adjustHeroOverlayPosition);
                    }, 50);
                }
            });
            observer.observe(belowNavLogo, { childList: true, subtree: true, attributes: true, attributeFilter: ['src','style','class'] });
        }
    }

    // Hero media readiness
    const heroMedia = document.querySelector('.travel-template-hero .hero-image img, .travel-template-hero .hero-image video');
    if (heroMedia) {
        const handler = () => {
            if (isSmall()) return;
            calculateInitialPosition().then(() => {
                raf(() => {
                    adjustHeroOverlayPosition();
                    revealTitle();
                });
            });
        };
        if (heroMedia.tagName === 'VIDEO') heroMedia.addEventListener('loadeddata', handler, { once: true });
        else heroMedia.addEventListener('load', handler, { once: true });
    }
});
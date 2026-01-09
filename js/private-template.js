AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

document.addEventListener('DOMContentLoaded', function() {
    // Get the modal element
    const modal = document.querySelector('.guide-modal');

    // Add listener for when modal is about to be shown
    if (modal) {
        modal.addEventListener('show.bs.modal', function(event) {
            // Get the element that triggered the modal
            const trigger = event.relatedTarget;

            // Get the slide index from the trigger element
            const slideIndex = trigger.getAttribute('data-bs-slide-to');

            // After modal is fully shown, move carousel to the correct slide
            modal.addEventListener('shown.bs.modal', function() {
                // Get the carousel instance
                const carousel = document.getElementById('guide-carousel');
                if (carousel) {
                    const carouselInstance = bootstrap.Carousel.getOrCreateInstance(carousel);
                    // Go to the specific slide
                    carouselInstance.to(parseInt(slideIndex));
                }
            }, { once: true }); // Only listen once to avoid memory leaks
        });
    }
});

/*** Content Overlay/Modal System ***/
document.addEventListener('DOMContentLoaded', function() {
    // Get all info buttons
    const infoButtons = document.querySelectorAll('.info-button');
    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close-overlay');

    // Function to detect if device is mobile
    function isMobileDevice() {
        return window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Function to create and show modal for mobile
    function showModal(content, title) {
        // Create modal HTML
        const modalHTML = `
            <div class="modal fade content-modal" tabindex="-1" aria-labelledby="contentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contentModalLabel">${title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="travel">${content}</p>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Remove any existing content modal
        const existingModal = document.querySelector('.content-modal');
        if (existingModal) {
            existingModal.remove();
        }

        // Add modal to DOM
        document.body.insertAdjacentHTML('beforeend', modalHTML);

        // Show the modal
        const modal = document.querySelector('.content-modal');
        const bsModal = new bootstrap.Modal(modal);
        bsModal.show();

        // Clean up modal after it's hidden
        modal.addEventListener('hidden.bs.modal', function() {
            modal.remove();
        });
    }

    // Function to show overlay with animation (desktop)
    function showOverlay(overlayId) {
        // Hide all overlays first
        document.querySelectorAll('.content-overlay').forEach(overlay => {
            overlay.classList.remove('visible');

            // After animation completes, set display to none
            setTimeout(() => {
                if (!overlay.classList.contains('visible')) {
                    overlay.style.display = 'none';
                }
            }, 300); // Match this timing with the CSS transition duration
        });

        // Show the selected overlay
        const overlay = document.getElementById(overlayId);
        if (overlay) {
            // First set display to flex so the element is in the DOM
            overlay.style.display = 'flex';

            // Force a reflow before adding the visible class to ensure transition works
            overlay.offsetHeight;

            // Add visible class to trigger the transition
            overlay.classList.add('visible');

            // Scroll to the image container for better visibility
            const imageContainer = overlay.closest('.regional-waters-container');
            if (imageContainer) {
                imageContainer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }
    }

    // Function to hide overlay with animation (desktop)
    function hideOverlay(overlay) {
        if (!overlay) {
            document.querySelectorAll('.content-overlay').forEach(ol => {
                ol.classList.remove('visible');

                // After animation completes, set display to none
                setTimeout(() => {
                    if (!ol.classList.contains('visible')) {
                        ol.style.display = 'none';
                    }
                }, 300); // Match this timing with the CSS transition duration
            });
        } else {
            overlay.classList.remove('visible');

            // After animation completes, set display to none
            setTimeout(() => {
                if (!overlay.classList.contains('visible')) {
                    overlay.style.display = 'none';
                }
            }, 300); // Match this timing with the CSS transition duration
        }
    }

    // Add click event to info buttons
    infoButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetOverlay = this.getAttribute('data-target');
            const buttonText = this.textContent.trim();

            if (isMobileDevice()) {
                // Mobile: Show modal
                const overlay = document.getElementById(targetOverlay);
                if (overlay) {
                    const content = overlay.querySelector('.overlay-content p').innerHTML;
                    const title = overlay.querySelector('.overlay-header h3').textContent;
                    showModal(content, title);
                }
            } else {
                // Desktop: Show overlay
                showOverlay(targetOverlay);
            }
        });
    });

    // Add click event to close buttons (desktop only)
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const overlay = this.closest('.content-overlay');
            hideOverlay(overlay);
        });
    });

    // Close overlay when clicking outside content area (desktop only)
    document.querySelectorAll('.content-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            // If the click is on the overlay itself, not its children
            if (e.target === this && !isMobileDevice()) {
                hideOverlay(this);
            }
        });
    });

    // Add keyboard support (ESC to close) - desktop only
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !isMobileDevice()) {
            hideOverlay();
        }
    });

    // Handle window resize to switch between mobile/desktop behavior
    window.addEventListener('resize', function() {
        // Hide all overlays when switching between mobile/desktop
        document.querySelectorAll('.content-overlay').forEach(overlay => {
            overlay.classList.remove('visible');
            overlay.style.display = 'none';
        });

        // Remove any existing modals
        const existingModal = document.querySelector('.content-modal');
        if (existingModal) {
            existingModal.remove();
        }
    });
});

/** New active background color */
// Add this to your existing JavaScript file
document.addEventListener('DOMContentLoaded', function() {
    // Get all info buttons (in addition to any existing code)
    const infoButtons = document.querySelectorAll('.info-button');

    // Function to detect if device is mobile
    function isMobileDevice() {
        return window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Add button active state handling
    infoButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Only handle active states on desktop
            if (!isMobileDevice()) {
                // Remove active class from all buttons
                infoButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Get target overlay id
                const targetOverlayId = this.getAttribute('data-target');
                const targetOverlay = document.getElementById(targetOverlayId);

                // Add class to overlay header when shown
                if (targetOverlay) {
                    const headerElement = targetOverlay.querySelector('.overlay-header');
                    if (headerElement) {
                        headerElement.classList.add('active-header');
                    }
                }
            }
        });
    });

    // Reset active states when overlay is closed (desktop only)
    const closeButtons = document.querySelectorAll('.close-overlay');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (!isMobileDevice()) {
                // Remove active class from all buttons
                infoButtons.forEach(btn => btn.classList.remove('active'));

                // Remove active class from all headers
                document.querySelectorAll('.overlay-header').forEach(header => {
                    header.classList.remove('active-header');
                });
            }
        });
    });

    // Also remove active states when clicking outside or pressing ESC (desktop only)
    document.querySelectorAll('.content-overlay').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === this && !isMobileDevice()) {
                // Remove active classes
                infoButtons.forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.overlay-header').forEach(header => {
                    header.classList.remove('active-header');
                });
            }
        });
    });

    // Add ESC key handler for active states (desktop only)
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !isMobileDevice()) {
            // Remove active classes
            infoButtons.forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.overlay-header').forEach(header => {
                header.classList.remove('active-header');
            });
        }
    });
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

/** Dynamic Hero Overlay Positioning - UPDATED TO FIX STUCK POSITIONING
document.addEventListener("DOMContentLoaded", function () {
    // CACHE INITIAL POSITION: Store the correct position when logo is in natural state
    let initialPosition = null;
    let isCalculatingInitial = false;

    // CALCULATE INITIAL POSITION: Ensures we get the correct baseline position
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

    // MAIN POSITIONING FUNCTION: Enhanced to use cached initial position
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

        // SCROLL POSITION LOGIC: Use cached initial position when at top
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

    // INITIAL POSITION CALCULATION: Run when page loads
    window.addEventListener('load', function() {
        setTimeout(calculateInitialPosition, 500);
    });

    // Also try to calculate it immediately
    setTimeout(calculateInitialPosition, 1000);

    // ENHANCED SCROLL HANDLER: Improved to handle scroll direction and transitions
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

    // ENHANCED RESIZE HANDLER: Recalculate initial position on resize
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

    // TRANSITION MONITORING: Force recalculation during CSS transitions
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

    // MUTATION OBSERVER: Watch for logo changes (keep existing functionality)
    const belowNavLogo = document.querySelector('#below-nav-logo');
    if (belowNavLogo && window.MutationObserver) {
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList' ||
                    (mutation.type === 'attributes' &&
                        (mutation.attributeName === 'src' || mutation.attributeName === 'style'))) {
                    setTimeout(() => adjustHeroOverlayPosition(), 100);
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

/** /End Dynamic Overlay Positioning */

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

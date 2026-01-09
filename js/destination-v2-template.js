AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

/*** Content Overlay/Modal System for Destination V2 ***/

document.addEventListener('DOMContentLoaded', function() {
    // Get all destination buttons in any destination feature containers
    const destinationButtons = document.querySelectorAll('.btn.destination[data-target]');
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
    function showOverlay(targetId, button) {
        // Hide all readmore-info overlays first
        document.querySelectorAll('.readmore-info').forEach(overlay => {
            overlay.classList.remove('visible');

            // After animation completes, set display to none
            setTimeout(() => {
                if (!overlay.classList.contains('visible')) {
                    overlay.style.display = 'none';
                }
            }, 300); // Match this timing with the CSS transition duration
        });

        // Find the target overlay by ID
        const targetOverlay = document.getElementById(targetId);
        if (targetOverlay) {
            // First set display to flex so the element is in the DOM
            targetOverlay.style.display = 'flex';

            // Force a reflow before adding the visible class to ensure transition works
            targetOverlay.offsetHeight;

            // Add visible class to trigger the transition
            targetOverlay.classList.add('visible');

            // Scroll to the image container for better visibility
            const imageContainer = targetOverlay.closest('.feature-image');
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
            document.querySelectorAll('.readmore-info').forEach(ol => {
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

    // Add click event to destination buttons
    destinationButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior

            const targetId = this.getAttribute('data-target');
            const buttonText = this.textContent.trim();

            if (isMobileDevice()) {
                // Mobile: Show modal
                const targetOverlay = document.getElementById(targetId);
                if (targetOverlay) {
                    const content = targetOverlay.querySelector('.overlay-content').innerHTML;
                    const title = targetOverlay.querySelector('.overlay-header h3').textContent || 'More Details';
                    showModal(content, title);
                }
            } else {
                // Desktop: Show overlay
                showOverlay(targetId, this);
            }
        });
    });

    // Add click event to close buttons (desktop only)
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const overlay = this.closest('.readmore-info');
            hideOverlay(overlay);
        });
    });

    // Close overlay when clicking outside content area (desktop only)
    document.querySelectorAll('.readmore-info').forEach(overlay => {
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
        document.querySelectorAll('.readmore-info').forEach(overlay => {
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


document.addEventListener('DOMContentLoaded', function() {
    // Get all destination buttons with data-target
    const destinationButtons = document.querySelectorAll('.btn.destination[data-target]');

    // Function to detect if device is mobile
    function isMobileDevice() {
        return window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Add button active state handling
    destinationButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior

            // Only handle active states on desktop
            if (!isMobileDevice()) {
                // Remove active class from all buttons
                destinationButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Add class to overlay header when shown
                const targetId = this.getAttribute('data-target');
                const targetOverlay = document.getElementById(targetId);
                if (targetOverlay) {
                    const headerElement = targetOverlay.querySelector('.overlay-header');
                    if (headerElement) {
                        // Remove active-header from all headers first
                        document.querySelectorAll('.overlay-header').forEach(header => {
                            header.classList.remove('active-header');
                        });
                        // Add to current header
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
                destinationButtons.forEach(btn => btn.classList.remove('active'));

                // Remove active class from all headers
                document.querySelectorAll('.overlay-header').forEach(header => {
                    header.classList.remove('active-header');
                });
            }
        });
    });

    // Also remove active states when clicking outside or pressing ESC (desktop only)
    document.querySelectorAll('.readmore-info').forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === this && !isMobileDevice()) {
                // Remove active classes
                destinationButtons.forEach(btn => btn.classList.remove('active'));
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
            destinationButtons.forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.overlay-header').forEach(header => {
                header.classList.remove('active-header');
            });
        }
    });
});


/**
 * Universal Expanding Container System
 * Handles all expanding container functionality with a generic approach
 */

document.addEventListener('DOMContentLoaded', function() {
    // Define all container types and their selectors
    const containerTypes = [
        {
            name: 'seasons',
            rowSelector: '.seasons-row',
            expandBtnSelector: '.seasons-expand-btn',
            closeBtnSelector: '.seasons-row .close-text',
            contentSelector: '.seasons-content',
            readmoreSelector: '.seasons-readmore'
        },
        {
            name: 'getting-there',
            rowSelector: '.getting-there-row',
            expandBtnSelector: '.getting-there-expand-btn',
            closeBtnSelector: '.getting-there-row .close-text',
            contentSelector: '.getting-there-row .feature-content',
            readmoreSelector: '.getting-there-readmore'
        },
        {
            name: 'lodging',
            rowSelector: '.lodging-row',
            expandBtnSelector: '.lodging-expand-btn',
            closeBtnSelector: '.lodging-row .close-text',
            contentSelector: '.lodging-row .feature-content',
            readmoreSelector: '.lodging-readmore'
        },
        {
            name: 'angling',
            rowSelector: '.angling-row',
            expandBtnSelector: '.angling-expand-btn',
            closeBtnSelector: '.angling-row .close-text',
            contentSelector: '.angling-row .feature-content',
            readmoreSelector: '.angling-readmore'
        }
    ];

    // Initialize each container type
    containerTypes.forEach(container => {
        const section = document.querySelector(container.rowSelector);

        if (section) {
            const readMoreBtn = document.querySelector(container.expandBtnSelector);
            const closeBtn = document.querySelector(container.closeBtnSelector);
            const contentElement = document.querySelector(container.contentSelector);
            const readmoreElement = document.querySelector(container.readmoreSelector);

            console.log(`${container.name} elements found:`, {
                section: !!section,
                readMoreBtn: !!readMoreBtn,
                closeBtn: !!closeBtn,
                contentElement: !!contentElement,
                readmoreElement: !!readmoreElement
            });

            function matchHeights() {
                if (contentElement && readmoreElement) {
                    // Get the actual height of the content element
                    const contentHeight = contentElement.offsetHeight;
                    console.log(`Setting ${container.name}-readmore height to:`, contentHeight + 'px');

                    // Set the readmore to exactly the same height
                    readmoreElement.style.height = contentHeight + 'px';
                }
            }

            if (readMoreBtn) {
                readMoreBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log(`Expanding ${container.name} row`);

                    section.classList.add('expanded');

                    // Wait for the transition to complete, then match heights
                    setTimeout(() => {
                        matchHeights();
                    }, 300); // Match the CSS transition duration
                });
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log(`Collapsing ${container.name} row`);

                    // Reset height before collapsing
                    if (readmoreElement) {
                        readmoreElement.style.height = '';
                    }

                    section.classList.remove('expanded');
                });
            }

            // Also match heights on window resize (if expanded)
            window.addEventListener('resize', function() {
                if (section.classList.contains('expanded')) {
                    setTimeout(() => {
                        matchHeights();
                    }, 100);
                }
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
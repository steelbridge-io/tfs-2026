AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});

/*** Content Slide-in Panel System for Destination V3 ***/

document.addEventListener('DOMContentLoaded', function() {
    // Get all destination buttons in any destination feature containers
    const destinationButtons = document.querySelectorAll('.btn.destination[data-target]');
    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close-overlay');

    // Function to detect if device is mobile
    function isMobileDevice() {
        return window.innerWidth <= 768 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    // Function to create backdrop
    function createBackdrop() {
        let backdrop = document.querySelector('.slide-backdrop');
        if (!backdrop) {
            backdrop = document.createElement('div');
            backdrop.className = 'slide-backdrop';
            document.body.appendChild(backdrop);

            // Close panel when clicking backdrop
            backdrop.addEventListener('click', function() {
                hideSlidePanel();
            });
        }
        return backdrop;
    }

    // Function to show slide-in panel (desktop)
    function showSlidePanel(targetId, button) {
        // Hide all slide panels first
        document.querySelectorAll('.readmore-info').forEach(panel => {
            panel.classList.remove('visible');
        });

        // Hide backdrop
        const backdrop = createBackdrop();
        backdrop.classList.remove('visible');

        // Find the target panel by ID
        const targetPanel = document.getElementById(targetId);
        if (targetPanel) {
            // Show backdrop
            setTimeout(() => {
                backdrop.classList.add('visible');
            }, 50);

            // Show the panel with a slight delay for smooth animation
            setTimeout(() => {
                targetPanel.classList.add('visible');
            }, 100);
        }
    }

    // Function to hide slide-in panel (desktop)
    function hideSlidePanel(panel) {
        const backdrop = document.querySelector('.slide-backdrop');

        if (!panel) {
            // Hide all panels
            document.querySelectorAll('.readmore-info').forEach(p => {
                p.classList.remove('visible');
            });
        } else {
            // Hide specific panel
            panel.classList.remove('visible');
        }

        // Hide backdrop
        if (backdrop) {
            backdrop.classList.remove('visible');
        }

        // Remove active states
        destinationButtons.forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.overlay-header').forEach(header => {
            header.classList.remove('active-header');
        });
    }

    // Function to create and show modal for mobile
    function showModal(content, title) {
        // Create modal HTML
        const modalHTML = `
            <div class="modal fade content-modal" tabindex="-1" aria-labelledby="contentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="contentModalLabel">${title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="travel">${content}</div>
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

    // Add click event to destination buttons
    destinationButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior

            const targetId = this.getAttribute('data-target');
            const buttonText = this.textContent.trim();

            if (isMobileDevice()) {
                // Mobile: Show modal instead of slide-in panel
                const targetPanel = document.getElementById(targetId);
                if (targetPanel) {
                    const content = targetPanel.querySelector('.overlay-content').innerHTML;
                    const title = targetPanel.querySelector('.overlay-header h3').textContent || 'More Details';
                    showModal(content, title);
                }
            } else {
                // Desktop: Show slide-in panel
                showSlidePanel(targetId, this);

                // Add active class to clicked button
                destinationButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Add class to panel header when shown
                const targetPanel = document.getElementById(targetId);
                if (targetPanel) {
                    const headerElement = targetPanel.querySelector('.overlay-header');
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

    // Add click event to close buttons (desktop only)
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (!isMobileDevice()) {
                const panel = this.closest('.readmore-info');
                hideSlidePanel(panel);
            }
        });
    });

    // Add keyboard support (ESC to close) - desktop only
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !isMobileDevice()) {
            hideSlidePanel();
        }
    });

    // Handle window resize to switch between mobile/desktop behavior
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Hide all panels when switching between mobile/desktop
            hideSlidePanel();

            // Remove any existing modals
            const existingModal = document.querySelector('.content-modal');
            if (existingModal) {
                existingModal.remove();
            }
        }, 250);
    });

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

/** /End Dynamic Overlay Positioning */
    document.addEventListener('DOMContentLoaded', function () {
    /**
     * Represents the HTML element with the ID 'tabbed-destination-content'.
     * Typically used to interact with a specific section of the web page,
     * often for dynamic updates or event handling.
     *
     * @type {HTMLElement | null}
     */
    const section = document.getElementById('tabbed-destination-content');
    const tabs = document.getElementById('destinationTabs');
    const nav = document.getElementById('site-navigation');
    if (!section || !tabs || !nav) return;

    const getAdminBarHeight = () => {
    const bar = document.getElementById('wpadminbar');
    return bar ? bar.offsetHeight : 0;
};

    // Ensure correct initial state
    nav.classList.remove('nav-hidden-by-tabs');
    tabs.classList.remove('is-pinned');

    // Create a bottom sentinel to detect when we leave the tabbed section
    const bottomSentinel = document.createElement('div');
    bottomSentinel.setAttribute('aria-hidden', 'true');
    bottomSentinel.style.height = '1px';
    section.appendChild(bottomSentinel);

    const updateState = () => {
    const threshold = getAdminBarHeight();
    const topRect = section.getBoundingClientRect();
    const bottomRect = bottomSentinel.getBoundingClientRect();

    const atOrPastTop = topRect.top <= threshold;
    const passedBottom = bottomRect.top <= threshold;

    if (atOrPastTop && !passedBottom) {
    // Inside the tabbed section: tabs pinned, hide nav
    nav.classList.add('nav-hidden-by-tabs');
    tabs.classList.add('is-pinned');
} else {
    // Above or below the tabbed section: show nav, unpin tabs
    nav.classList.remove('nav-hidden-by-tabs');
    tabs.classList.remove('is-pinned');
}
};

    window.addEventListener('scroll', updateState, { passive: true });
    window.addEventListener('resize', updateState, { passive: true });
    window.addEventListener('orientationchange', updateState);

    requestAnimationFrame(updateState);
    setTimeout(updateState, 0);




        // ========== CAROUSEL MODAL INITIALIZATION ==========
        const carouselElement = document.getElementById('travel-carousel');
        const modalElement = document.getElementById('travelTableModal');

        if (carouselElement && modalElement) {
            let targetSlideIndex = 0; // Store the target slide index

            // Use event delegation on document to capture clicks BEFORE Bootstrap
            document.addEventListener('click', function(e) {
                // Check if the clicked element or its parent is a thumbnail link
                const link = e.target.closest('.additional-listing a[href="#travel-carousel"]');

                if (link) {
                    console.log('Link clicked:', link);

                    // Get the slide index
                    const slideIndex = parseInt(link.getAttribute('data-slide-to'));
                    console.log('Slide index:', slideIndex);

                    // Store it for later use
                    targetSlideIndex = slideIndex || 0;
                    console.log('Stored target slide:', targetSlideIndex);
                }
            }, true); // Use capture phase to run before Bootstrap

            // Initialize or get carousel instance
            let carousel = bootstrap.Carousel.getInstance(carouselElement);
            if (!carousel) {
                carousel = new bootstrap.Carousel(carouselElement, {
                    interval: false,
                    wrap: true,
                    keyboard: true,
                    ride: false
                });
            }

            // When modal shows, navigate to the stored slide
            modalElement.addEventListener('shown.bs.modal', function() {
                console.log('Modal shown, navigating to:', targetSlideIndex);
                carousel.to(targetSlideIndex);
            });

            // Reset when modal closes
            modalElement.addEventListener('hidden.bs.modal', function() {
                carousel.pause();
                targetSlideIndex = 0;
            });
        }
        // ========== END CAROUSEL MODAL INITIALIZATION ==========
    });

    // ========== VIDEO HANDLING IN TABBED SECTIONS ==========
    (function initTabbedVideos() {
        const tabsNav = document.getElementById('destinationTabs');
        const tabSection = document.getElementById('tabbed-destination-content');
        if (!tabsNav || !tabSection) return;

        const getAllTabVideos = () => tabSection.querySelectorAll('.tab-pane video');

        function resetVideoToPoster(video) {
            if (!video) return;
            try {
                // Pause and rewind
                video.pause();
                // Some browsers require small try/catch around currentTime when not seekable
                try { video.currentTime = 0; } catch (e) {}

                // Force poster repaint for browsers that show last black frame
                // Prefer a lightweight reload; if a poster exists, load() helps repaint it
                if (video.getAttribute('poster')) {
                    // Safari sometimes needs a load() to repaint the poster
                    video.load();
                }
            } catch (e) {
                // noop
            }
        }

        // Reset to poster when any tab video ends
        getAllTabVideos().forEach(v => {
            v.addEventListener('ended', () => resetVideoToPoster(v));
        });

        // On tab change, pause and reset videos in the tab being hidden
        // and ensure only the active tab can continue playback.
        tabsNav.querySelectorAll('[data-bs-toggle="tab"]').forEach(tabTrigger => {
            tabTrigger.addEventListener('shown.bs.tab', function (e) {
                // Determine active pane
                const targetSelector = e.target.getAttribute('data-bs-target') || e.target.getAttribute('href');
                const activePane = targetSelector ? document.querySelector(targetSelector) : null;

                // Reset all videos not in the active pane
                getAllTabVideos().forEach(v => {
                    if (!activePane || !activePane.contains(v)) {
                        resetVideoToPoster(v);
                    }
                });
            });

            tabTrigger.addEventListener('hidden.bs.tab', function (e) {
                // When a tab is hidden, reset its videos so the poster shows next time
                const hiddenSelector = e.target.getAttribute('data-bs-target') || e.target.getAttribute('href');
                const hiddenPane = hiddenSelector ? document.querySelector(hiddenSelector) : null;
                if (hiddenPane) {
                    hiddenPane.querySelectorAll('video').forEach(v => resetVideoToPoster(v));
                }
            });
        });
    })();
    // ========== END VIDEO HANDLING ==========
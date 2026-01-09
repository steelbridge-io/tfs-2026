AOS.init({
    easing: 'ease',
    duration: 1000,
    once: true,
});
document.addEventListener('DOMContentLoaded', function() {
    // Function to match heights for all report containers
    function matchAllReportHeights() {
        // Get all report containers on the page
        const reportContainers = document.querySelectorAll('.report-container');

        // Loop through each container
        reportContainers.forEach(container => {
            // Find the button and content columns within this specific container
            const buttonColumn = container.querySelector('.report-button');
            const contentColumn = container.querySelector('.report-content');

            // Check if both elements exist in this container
            if (buttonColumn && contentColumn) {
                // Get the height of the button column
                const buttonHeight = buttonColumn.offsetHeight;

                // Set the content column height
                contentColumn.style.height = buttonHeight + 'px';
                contentColumn.style.maxHeight = buttonHeight + 'px';
                contentColumn.style.overflowY = 'auto';
            }
        });
    }

    // Initial height matching
    matchAllReportHeights();

    // Run height adjustment on window resize
    window.addEventListener('resize', matchAllReportHeights);

    // DIRECT METHOD FOR RESET - This should work regardless of Bootstrap version or tab implementation

    // Track the last clicked tab
    let lastClickedTab = null;

    // Intercept all clicks on the page
    document.addEventListener('click', function(event) {
        // Check if the click was on a potential tab trigger
        const clickedElement = event.target.closest('a[data-toggle="tab"], [data-bs-toggle="tab"], .nav-link, button[data-toggle="tab"], li.nav-item a, a.nav-link');

        if (clickedElement) {
            // Store the clicked element
            lastClickedTab = clickedElement;

            // Use setTimeout to allow the tab content to become visible first
            setTimeout(function() {
                // Reset scroll for ALL possible content areas
                document.querySelectorAll('.tab-pane, .tab-content > div, .report-content').forEach(function(content) {
                    if (content && typeof content.scrollTo === 'function') {
                        content.scrollTo(0, 0);
                    } else if (content) {
                        content.scrollTop = 0;
                    }
                });

                // Try to find the specific content for this tab
                const targetId = clickedElement.getAttribute('href') || clickedElement.getAttribute('data-target');
                if (targetId && targetId.startsWith('#')) {
                    const targetContent = document.querySelector(targetId);
                    if (targetContent) {
                        if (typeof targetContent.scrollTo === 'function') {
                            targetContent.scrollTo(0, 0);
                        } else {
                            targetContent.scrollTop = 0;
                        }
                    }
                }

                // Also try parent containers that might be scrollable
                document.querySelectorAll('.report-container').forEach(function(container) {
                    const contentArea = container.querySelector('.report-content');
                    if (contentArea) {
                        if (typeof contentArea.scrollTo === 'function') {
                            contentArea.scrollTo(0, 0);
                        } else {
                            contentArea.scrollTop = 0;
                        }
                    }
                });
            }, 50); // Short delay to ensure content is rendered
        }
    });

    // For Bootstrap modal events (if your tabs are in modals) - using vanilla JS instead of jQuery
    document.addEventListener('shown.bs.modal', function() {
        setTimeout(function() {
            document.querySelectorAll('.report-content').forEach(function(content) {
                content.scrollTop = 0;
            });
        }, 50);
    });

    // Creating a MutationObserver to detect tab changes that may not trigger click events
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' &&
                (mutation.attributeName === 'class' || mutation.attributeName === 'aria-selected')) {
                // A tab state likely changed, reset all scrollable content
                document.querySelectorAll('.report-content').forEach(function(content) {
                    content.scrollTop = 0;
                });
            }
        });
    });

    // Observe all potential tab elements for class changes
    document.querySelectorAll('.nav-link, [role="tab"]').forEach(function(tab) {
        observer.observe(tab, { attributes: true });
    });
});
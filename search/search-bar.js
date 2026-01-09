document.addEventListener('DOMContentLoaded', function() {
    const trigger = document.getElementById('tfs-search-trigger');
    const overlay = document.getElementById('tfs-search-overlay');
    const backdrop = document.getElementById('tfs-search-backdrop');
    const closeBtn = document.getElementById('tfs-search-close');
    const searchInput = overlay.querySelector('input[type="search"]');

    if (trigger && overlay && closeBtn) {
        trigger.addEventListener('click', function() {
            overlay.classList.add('active');
            if (backdrop) backdrop.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
            setTimeout(() => {
                searchInput.focus();
            }, 300);
        });

        const closeSearch = function() {
            overlay.classList.remove('active');
            if (backdrop) backdrop.classList.remove('active');
            document.body.style.overflow = ''; // Restore scrolling
        };

        closeBtn.addEventListener('click', closeSearch);
        
        // Close when clicking anywhere outside the overlay
        document.addEventListener('click', function(e) {
            if (overlay.classList.contains('active')) {
                // If the click is not on the overlay, and not on the trigger, and not inside the overlay
                if (!overlay.contains(e.target) && !trigger.contains(e.target)) {
                    closeSearch();
                }
            }
        });

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                closeSearch();
            }
        });
    }
});

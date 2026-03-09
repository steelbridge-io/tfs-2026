/*document.addEventListener('DOMContentLoaded', function() {
    const trigger = document.getElementById('tfs-search-trigger');
    const overlay = document.getElementById('tfs-search-overlay');
    const backdrop = document.getElementById('tfs-search-backdrop');
    const closeBtn = document.getElementById('tfs-search-close');
    const searchInput = overlay.querySelector('input[type="search"]');

    if (trigger && overlay && closeBtn) {
        const nav = document.getElementById('site-navigation');

        trigger.addEventListener('mouseenter', function() {
            if (nav) nav.classList.add('search-hover');
        });

        trigger.addEventListener('mouseleave', function() {
            if (nav) nav.classList.remove('search-hover');
        });

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
});*/

document.addEventListener('DOMContentLoaded', function() {
    const trigger = document.getElementById('tfs-search-trigger');
    const overlay = document.getElementById('tfs-search-overlay');
    const backdrop = document.getElementById('tfs-search-backdrop');
    const closeBtn = document.getElementById('tfs-search-close');
    const searchInput = overlay ? overlay.querySelector('input[type="search"]') : null;

    // --- Desktop search (existing) ---
    if (trigger && overlay && closeBtn) {
        const nav = document.getElementById('site-navigation');

        trigger.addEventListener('mouseenter', function() {
            if (nav) nav.classList.add('search-hover');
        });

        trigger.addEventListener('mouseleave', function() {
            if (nav) nav.classList.remove('search-hover');
        });

        trigger.addEventListener('click', function() {
            overlay.classList.add('active');
            if (backdrop) backdrop.classList.add('active');
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                if (searchInput) searchInput.focus();
            }, 300);
        });

        const closeSearch = function() {
            overlay.classList.remove('active');
            if (backdrop) backdrop.classList.remove('active');
            document.body.style.overflow = '';
        };

        closeBtn.addEventListener('click', closeSearch);

        document.addEventListener('click', function(e) {
            if (overlay.classList.contains('active')) {
                if (!overlay.contains(e.target) && !trigger.contains(e.target)) {
                    closeSearch();
                }
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                closeSearch();
            }
        });
    }

    // --- Mobile search overlay (new) ---
    const mobileOverlay = document.getElementById('tfs-mobile-search-overlay');
    if (mobileOverlay) {
        const mobileCloseBtn = mobileOverlay.querySelector('.tfs-mobile-search-close');
        const mobileBackdrop = mobileOverlay.querySelector('.tfs-mobile-search-backdrop');
        const mobileInput = mobileOverlay.querySelector('input[type="search"]');

        // Expose a global function so navigation.js can call it
        window.tfsMobileSearchOpen = function() {
            mobileOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                if (mobileInput) mobileInput.focus();
            }, 350);
        };

        window.tfsMobileSearchClose = function() {
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
        };

        if (mobileCloseBtn) {
            mobileCloseBtn.addEventListener('click', window.tfsMobileSearchClose);
        }

        if (mobileBackdrop) {
            mobileBackdrop.addEventListener('click', window.tfsMobileSearchClose);
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileOverlay.classList.contains('active')) {
                window.tfsMobileSearchClose();
            }
        });
    }
});

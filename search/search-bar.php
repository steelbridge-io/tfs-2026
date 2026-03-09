<!-- <div id="tfs-search-container" class="tfs-search-container">
    <div id="tfs-search-backdrop" class="tfs-search-backdrop"></div>
    <div class="container relative">
        <div id="tfs-search-trigger" class="tfs-search-tab">
            <i class="lni lni-search-1"></i>
            <span class="search-label">Click to search</span>
        </div>
        <div id="tfs-search-overlay" class="tfs-search-overlay">
            <div class="container">
<?php /* tfs_professional_search_form(array(
                    'container_class' => 'search-input-group-container',
                    'class' => 'search-input-group',
                    'placeholder' => 'Search the site...',
                ));*/ ?>
                <button type="button" id="tfs-search-close" class="search-close-standalone">
                    <i class="lni lni-close"></i>
                </button>
            </div>
        </div>
    </div>
</div> -->


<div id="tfs-search-container" class="tfs-search-container">
    <div id="tfs-search-backdrop" class="tfs-search-backdrop"></div>
    <div class="container relative">
        <div id="tfs-search-trigger" class="tfs-search-tab">
            <i class="lni lni-search-1"></i>
            <span class="search-label">Click to search</span>
        </div>
        <div id="tfs-search-overlay" class="tfs-search-overlay">
            <div class="container">
                <?php tfs_professional_search_form(array(
                        'container_class' => 'search-input-group-container',
                        'class' => 'search-input-group',
                        'placeholder' => 'Search the site...',
                )); ?>
                <button type="button" id="tfs-search-close" class="search-close-standalone">
                    <i class="lni lni-close"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Search Overlay (independent of navigation) -->
<div id="tfs-mobile-search-overlay" class="tfs-mobile-search-overlay">
    <div class="tfs-mobile-search-backdrop"></div>
    <div class="tfs-mobile-search-content">
        <button type="button" class="tfs-mobile-search-close" aria-label="Close search">
            <i class="lni lni-close"></i>
        </button>
        <?php tfs_professional_search_form(array(
                'container_class' => 'tfs-mobile-search-form-wrap',
                'class' => 'tfs-mobile-search-form',
                'placeholder' => 'Search...',
                'button_text' => 'Search',
                'size' => 'lg',
        )); ?>
    </div>
</div>

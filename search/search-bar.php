<div id="tfs-search-container" class="tfs-search-container">
    <div id="tfs-search-backdrop" class="tfs-search-backdrop"></div>
    <div class="container relative">
        <div id="tfs-search-trigger" class="tfs-search-tab">
            <i class="lni lni-search-1"></i>
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

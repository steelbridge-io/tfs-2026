<?php
// Load admin interface
require_once get_template_directory() . '/front-page/admin-interface.php';

// Load AJAX handlers first
require_once get_template_directory() . '/front-page/front-page-ajax.php';

// Then load settings page that might use those AJAX handlers
require_once get_template_directory() . '/front-page/front-page-settings.php';

// Load dashboard customizer
require_once get_template_directory() . '/front-page/dashboard-customizer.php';

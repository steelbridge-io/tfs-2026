<?php
// Load admin interface
require_once get_template_directory() . '/front-page/admin-interface.php';

// Load AJAX handlers first
require_once get_template_directory() . '/front-page/front-page-ajax.php';

// Load PDF Manager
require_once get_template_directory() . '/front-page/pdf-manager-admin.php';

// Load additional admin features
require_once get_template_directory() . '/front-page/footer-admin.php';
require_once get_template_directory() . '/front-page/page-protection-admin.php';

// Then load settings page that might use those AJAX handlers
require_once get_template_directory() . '/front-page/front-page-settings.php';

// Load dashboard customizer
require_once get_template_directory() . '/front-page/dashboard-customizer.php';

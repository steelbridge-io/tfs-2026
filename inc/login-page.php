<?php


// Change login logo
function tfs_login_logo_one() {
	?>
	<style type="text/css">
     body.login div#login h1 a {
         background-image: url(/wp-content/uploads/img/tfs-admin.png);
         padding: 0 3em 30px 3em;
         background-size: 100%;
         max-width: 100%;
     }
     #login form {
         background-color: #2b343d;

     }
     #login p label {
         color: #f5f5f5;
     }
     #loginform .user-pass-wrap label {
         color: #f5f5f5 !important;
     }
     body.login.login-action-login.wp-core-ui.locale-en-us {
         background-color: #ccc;
     }
     .admin-email__details {
         color: #f5f5f5 !important;
     }
     .login h1.admin-email__heading {
         color: #f5f5f5 !important;
     }
	</style>
<?php
}
add_action( 'login_enqueue_scripts', 'tfs_login_logo_one' );

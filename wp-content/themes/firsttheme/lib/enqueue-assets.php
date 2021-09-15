<?php
    function firsttheme_assets() {
        wp_enqueue_style( 'firsttheme-stylesheet', get_template_directory_uri(  ) . '/dist/assets/css/bundle.css', [], 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'firsttheme_assets');

    function firsttheme_admmin_assets() {
        wp_enqueue_style( 'firsttheme-admin-stylesheet', get_template_directory_uri(  ) . '/dist/assets/css/admin.css', [], 'all' );
    }
    add_action( 'admin_enqueue_scripts', 'firsttheme_admin_assets');
?>
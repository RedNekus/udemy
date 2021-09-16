<?php
    function firsttheme_assets() {
        wp_enqueue_style( 'firsttheme-stylesheet', get_template_directory_uri(  ) . '/dist/assets/css/bundle.css', [], 'all' );
        //wp_enqueue_script('');
        wp_enqueue_script( 'firsttheme-scripts', get_template_directory_uri(  ) . '/dist/assets/js/bundle.js', ['jquery'], '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'firsttheme_assets' );

    function firsttheme_admin_assets() {
        wp_enqueue_style( 'firsttheme-admin-stylesheet', get_template_directory_uri(  ) . '/dist/assets/css/admin.css', [], 'all' );
        wp_enqueue_script( 'firsttheme-admin-scripts', get_template_directory_uri(  ) . '/dist/assets/js/admin.js', [], '1.0.0', true );
    }
    add_action( 'admin_enqueue_scripts', 'firsttheme_admin_assets');
?>
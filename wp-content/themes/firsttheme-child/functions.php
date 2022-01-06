<?php
    add_action('wp_enqueue_scripts', 'firsttheme_child_scripts');

    function firsttheme_child_scripts() {
        wp_enqueue_style('firsttheme-child-styles',
            get_stylesheet_directory_uri() . '/styles.css',
            ['_themename-stylesheet'],
            '1.0.0',
            'all'
        );
    }

    function after_pagination($x) {
        echo "<p>This is test echo! $x<p>";
    }

    function after_pagination2() {
        echo "<p>This is second test echo!</p>";
    }

    add_action( '_themename_after_pagination', 'after_pagination', 2 );
    add_action( '_themename_after_pagination', 'after_pagination2', 1 );

    add_action( 'pre_get_posts', 'function_to_add', 10, 1);

    function function_to_add($query) {
        if( $query->is_main_query() ) {
            $query->set('posts_per_page', 2);
        }
    }

    function no_posts_text($text): string
    {
        return $text . "<br>". esc_html__("No POSTS", '_themename-child');
    }

    add_filter( '_themename_no_posts_text', 'no_posts_text' );

    function filter_title($title): string {
        return 'Filtered ' . $title;
    }
    add_filter('the_title', 'filter_title');
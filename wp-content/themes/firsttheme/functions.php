<?php

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');

function after_pagination() {
    echo "<p>This is test echo!<p>";
}

function after_pagination2() {
    echo "<p>This is second test echo!</p>";
}

add_action( '_themename_after_pagination', 'after_pagination', 2 );
add_action( '_themename_after_pagination', 'after_pagination2', 1 );

add_action( 'pre_get_posts', 'function_to_add');

function function_to_add($query) {
    if( $query->is_main_query() ) {
        $query->set('posts_per_page', 2);
    }
}

function no_posts_text($test){
    return $test . " some add to text";
}

add_filter( '_themename_no_posts_text', 'no_posts_text' );
?>
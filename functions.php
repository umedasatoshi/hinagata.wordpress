<?php

load_theme_textdomain( 'hinagata', get_template_directory() . '/languages' );

add_theme_support( 'title-tag' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ));

add_theme_support( 'responsive-embeds' );

add_theme_support( 'wp-block-styles' );

function add_my_editor_styles() {
   add_theme_support( 'editor-styles' );
   add_editor_style( get_theme_file_uri( '/common/css/style.css'));
}
add_action( 'admin_init', 'add_my_editor_styles' );

if ( ! isset( $content_width ) ) {
    $content_width = 1200;
}
add_theme_support( "post-thumbnails" )

?>	

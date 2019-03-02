<?php
load_theme_textdomain( 'hinagata', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
if ( ! isset( $content_width ) ) {
    $content_width = 1200;
}
add_theme_support( "post-thumbnails" )
?>	
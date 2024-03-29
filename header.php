<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="utf-8">
<meta name="author" content="<?php the_author(); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="keywords" />
<meta property="og:title" content="<?php bloginfo('name'); ?><?php if(!is_home()) { echo ' | '; add_theme_support('title-tag');} ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:url" content="<?php echo esc_url(home_url()) ; ?>">
<meta property="og:image" content="<?php get_template_directory_uri(); ?>/common/img/ogp_default.jpg">
<meta property="image_src" content="<?php get_template_directory_uri(); ?>/common/img/ogp_default.jpg">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php bloginfo('name'); ?><?php if(!is_home()) { echo ' | '; add_theme_support('title-tag');} ?>">
<meta property="og:site_url" content="<?php echo esc_url(home_url()) ; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen,tv" />
<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header">
	<h1><a href="<?php echo esc_url(home_url()) ; ?>"><?php bloginfo('name'); ?></a></h1>
	<p><?php bloginfo('description'); ?></p>
<!-- /#header -->
</header>
<nav id="global-nav">
  <?php 
    wp_nav_menu( array( 
      'theme_location' => 'header-navigation' 
    )); 
  ?>
<!-- /#global-nav -->
</nav>

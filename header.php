<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stony_Brook_Web
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div class="container">
		<nav id="site-navigation" class="main-navigation" role="navigation">        
            <?php $nav_args = array(
            		'theme_location' => 'primary', 
					'menu_id' 		 => 'primary-menu',	
					'menu_class'     => 'nav nav-tabs'	
            ); ?>
			<?php wp_nav_menu( $nav_args  ); ?>
		</nav><!-- #site-navigation -->
</div>

<div class="container">
    <header>
        <div class="row">
            <div class="col-xs-3 header-logo">
                <!-- Logo created at http://www5.flamingtext.com/ -->
                <!-- <img src="img/logo.png" alt="Logo"/> -->
            </div>
        
            <div class="col-xs-9">
                <?php
                if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h1 class="header-title text-right text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                <h1 class="header-title text-right text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php endif; ?>
                
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                <p class="header-tagline text-right text-uppercase"><?php echo $description; /* WPCS: xss ok. */ ?></p>`
                <?php endif; ?>  
            </div>
        </div>
    
    
        <div class="row">
            <div class="col-xs-12">
            <hr class="header-bottom-rule">
			</div>
		</div>
        
        <div class="row">
            <div class="col-xs-12">
           
                <picture>
                <!-- Image via Flick Creative Commons https://www.flickr.com/photos/128629824@N06/26937348141/in/faves-140331223@N05/ -->
                <!-- Image provided by http://tvorbaweb-stranok.sk/kontakt/ -->
                <img class="img-responsive" src=" <?php echo get_template_directory_uri() . '/images/header.jpg' ?>" alt="A picture of HTML code"/> 
                </picture>
            </div>
        </div>
  </header>
 </div>
    
    
    
    
    

	<div id="content" class="">

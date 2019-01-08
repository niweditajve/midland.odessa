<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">


<!-- top bar section -->

<div class="top-bar">
  <div class="container">   
    <div class="col-md-6 col-sm-6 col-xs-12">
              	<?php dynamic_sidebar( 'social_header_content' ); ?>

    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="top-bar-left right-bar pull-right">
       <?php the_social_links();?>
    
      </div>
      
    </div>
  </div>
</div>

<section class=" header-logo-section">
  <div class="container">
    <div class="col-md-6 col-sm-6 col-xs-12">
    	 <?php $header_image = get_header_image();
    if ( ! empty( $header_image ) ) : ?>
    <div class="logo">
    	 <a  class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
  </div>
   <?php endif; ?>
  </div>

     <div class="col-md-6 col-sm-6 col-xs-12">
        <?php dynamic_sidebar( 'main_header_content' ); ?>

     </div>

</div>

</section>


		<header id="masthead" class="site-header" role="banner">
			<div class="container">
			<div class="site-header-main">
				

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

					
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->
</div>
			
		</header><!-- .site-header -->

		<div id="content" class="site-content">

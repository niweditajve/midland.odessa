<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php //language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
 <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
<!--     <link href="<?php //bloginfo('template_url'); ?>/css/owl.carousel.min.css" rel="stylesheet">
 -->
<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
<div id="page" class="site">
	
<header id="header_top" class="header_main">
  <div class="top_bar">
    <div class="container">
      <div class="top_bar_inner">
        <div class="row">
          <div class="col-md-6">
            <?php the_social_links();?>
            
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mid_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <!-- <div class="logo"> <a class="navbar-brand" href="#"> <img src="<?php bloginfo('template_url'); ?>/images/NEW-Clay-Burgess-Logo.png" alt="" class="img-responsive"></a> </div> -->
          <?php $header_image = get_header_image();
    if ( ! empty( $header_image ) ) : ?>
    <div class="logo">
        <a  class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
      </div>
      <?php endif; ?>
        </div>
        <div class="col-sm-9 col-md-9">

        	<?php dynamic_sidebar( 'header_content_widget' ); ?>
         
        </div>
      </div>
    </div>
  </div>
  
<div class="container">
	<div id="masthead" class="site-header custom_navbar	" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</div><!-- #masthead -->
</div>
</header>

	

	<div class="site-content-contain">
		<div id="content" class="">

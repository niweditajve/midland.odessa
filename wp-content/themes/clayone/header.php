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
<html <?php //language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php endif; ?>
	<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min" rel="stylesheet">
   
	<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>

	<header id="header_top" class="header_main">
  <div class="top_bar">
    <div class="container">
      <div class="top_bar_inner">
        <div class="row">
          <div class="col-md-6">
            <ul class="social_icon_top">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="top_login">
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a></li>
              <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> <span>Register</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mid_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="logo"> <a class="navbar-brand" href="#"> <img src="<?php bloginfo('template_url'); ?>/images/NEW-Clay-Burgess-Logo.png" alt="" class="img-responsive"></a> </div>
        </div>
        <div class="col-sm-9 col-md-9">
          <div class="header_info">
            <div class="col-md-3 col-sm-4 col-xs-6 hidden-sm hidden-xs">
              <div class="header_info_box">
                <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                <div class="hd_text_info">
                  <h4 class="uppercase_text">Mail us :</h4>
                  <a href="mailto:info@example.com">info@example.com</a> </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 hidden-sm hidden-xs">
              <div class="header_info_box">
                <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                <div class="hd_text_info">
                  <h4 class="uppercase_text">Call Us:</h4>
                  <a href="tel:+61-1234-5678-9">+00-0000-0000-0</a> </div>
              </div>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-6 hidden-sm hidden-xs">
              <div class="header_info_box">
                <div class="circle_icon"> <i class="fa fa-clock-o" aria-hidden="true"></i> </div>
                <div class="hd_text_info">
                  <h4 class="uppercase_text">8:00 AM - 4:00 PM</h4>
                  <p>Monday to Friday</p>
                  <p>Saturday & Sunday by appointment only</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
    </div>
  </nav>
  
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
							</nav>
						<?php endif; ?>

						
					</div>
				<?php endif; ?>
	</div>
</div>
</header>
<div id="page" class="site">
	<div class="site-inner">
	

		

		<div id="content" class="site-content">

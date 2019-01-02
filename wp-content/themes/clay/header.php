<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php //language_attributes(); ?>>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Fonts -->
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
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
  
  <nav id="navigation_bar" class="navbar navbar-default custom_navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Car Accidents</a></li>
          <li><a href="#">Truck Accidents</a></li>
          <li><a href="#">Practice Areas</a></li>
          <li><a href="#">Office Locations</a></li>
          <li><a href="#">Firm Profile</a></li>
          <li><a href="#">Habla Espanol</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
     
  
  </div>
  </nav>
</header>
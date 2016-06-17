<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php //echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation hidden-xs hidden-sm" role="navigation"> -->
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'moose-frame' ); ?></button> -->
			<!-- <div class="container"> -->
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				
			<!-- </div> -->
		<!-- </nav>#site-navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
  		  <div class="container-fluid">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		    <a class="navbar-brand hide" href="#"><img src="<?php echo $siteLogo_mobile;  ?>" alt=""></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-ex1-collapse">

		    	<div class="logo hidden-sm hidden-xs hidden-md">
		        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $siteLogo_desktop;  ?>" alt=""></a>
		      	</div>
		        <?php
			        wp_nav_menu( array(
			            'theme_location' => 'primary',
			            'depth' => 2,
			            'container' => false,
			            'menu_class' => 'nav navbar-nav navbar-left',
			            'fallback_cb' => 'wp_page_menu',
			            //Process nav menu using our custom nav walker
			            'walker' => new wp_bootstrap_navwalker())
			        );
		        ?>

			     <ul class="top-nav-social navbar-right">
			          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
			          <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
			          <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
			          <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
			          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
			          <li><a href="#"><i class="fa fa-pinterest"></i> </a></li>
			      </ul>      

		    </div><!-- /.navbar-collapse --> 
  		  </div><!-- /.container-fluid -->

		</nav>

	<section id="fp-block-1">

		<article class="block-wrap">
		
			<div class="logo-nav-block container">

				<aside class="col-md-12">
					<div class="logo text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
						<a href="/">
							<img class="img-responsive center-block" src="/wp-content/uploads/2016/06/StephaniRobertsLogo-2.png" alt="">
						</a>
					</div>		
				</aside>
				
			</div> <!-- END OF logo-nav-block -->

			<div class="fp-header-img text-center">
				<a href="#">
					<img class="img-responsive center-block wow zoomIn" src="/wp-content/uploads/2016/06/front-pg-header-img-shorter.png" alt="" data-wow-duration="2s" data-wow-delay="0s">
				</a>
				<aside id="top-header-btn-holder"  class="top-btn-holder wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
					
					<a href="#"  class="btn btn-primary btn-lg hide">Click Here for my FREE<br> Social Media Marketing Guide</a>
					
				</aside>
			</div>		

		</article>

	</section>
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
































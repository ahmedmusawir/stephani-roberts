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
<!--  -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


	<header id="masthead" class="site-header" role="banner">

			<section class="action-bar">
				<div class="social-right pull-right">
				  <ul class="top-nav-social">
			          <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
			          <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
			          <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
			          <li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
			          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
			          <li><a href="#"><i class="fa fa-pinterest"></i> </a></li>
			      </ul>      
				</div>
			</section>


			<section class="container-fluid">
				
				<div class="col-md-4">

					<div class="site-branding">
						<aside class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="center-block" src="/wp-content/uploads/2016/05/KellySotoLogo.png" alt=""></a>
						</aside>		
					</div><!-- .site-branding -->

				</div>

				<div class="col-md-8">

					<nav id="site-navigation">

						<?php ubermenu( 'main' ); ?>
						
					</nav>			
					
				</div>

			</section>

<!-- <section class="frontpage-index-block  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s"> -->

			<aside class="masthead-stripe-block container-fluid">

				<div class="img-holder ">
					
					<figure class="col-md-2 col-sm-3 col-xs-4">
						<img class="img-responsive wow zoomIn" src="/wp-content/uploads/2016/05/model-390-1.jpg" alt="" data-wow-duration="1s" data-wow-delay="0s">
						<!-- <img class="img-responsive" src="http://lorempixel.com/g/200/390/nature/1" alt=""> -->
					</figure>
					
					<figure class="col-md-2 col-sm-3 col-xs-4">
						<img class="img-responsive wow zoomIn" src="/wp-content/uploads/2016/05/model-350-1.jpg" alt="" data-wow-duration="1s" data-wow-delay="0.5s">
						<!-- <img class="img-responsive" src="http://lorempixel.com/g/200/350/nature/2" alt=""> -->
						
					</figure>
																			
					<figure class="col-md-2 col-sm-3 col-xs-4">
						<img class="img-responsive wow zoomIn" src="/wp-content/uploads/2016/05/model-390-2.jpg" alt="" data-wow-duration="1s" data-wow-delay="1s">
						<!-- <img class="img-responsive" src="http://lorempixel.com/g/200/390/nature/3" alt=""> -->
						
					</figure>
					
					<figure class="col-md-2 col-sm-3 col-xs-4 hidden-xs">
						<img class="img-responsive wow zoomIn" src="/wp-content/uploads/2016/05/model-350-2.jpg" alt="" data-wow-duration="1s" data-wow-delay="1.5s">
						<!-- <img class="img-responsive" src="http://lorempixel.com/g/200/350/nature/4" alt=""> -->
						
					</figure>		

					<figure class="col-md-2 col-sm-3 col-xs-4 hidden-sm hidden-xs">
						<img class="img-responsive wow zoomIn" src="/wp-content/uploads/2016/05/model-390-3.jpg" alt="" data-wow-duration="1s" data-wow-delay="2s">
						<!-- <img class="img-responsive" src="http://lorempixel.com/g/200/390/nature/5" alt=""> -->
						
					</figure>		
					
					<figure class="col-md-2 col-sm-3 col-xs-4 hidden-sm hidden-xs">
						<img class="img-responsive wow zoomIn" src="/wp-content/uploads/2016/05/model-350-3.jpg" alt="" data-wow-duration="1s" data-wow-delay="2.5s">
						<!-- <img class="img-responsive" src="http://lorempixel.com/g/200/350/nature/6" alt=""> -->
						
					</figure>		

				</div>

			</aside> <!-- #masthead-stripe-block -->

	</header><!-- #masthead -->


	<section class="top-form-bar">
		<div class="container">
			<article class="form-bar-content-holder">
				<div class="col-md-6">
					<div class="form-bar-left-block">
						<h2 class="form-bar-left-text">Sign Up and Get my POWER PROJECT For Free</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-bar-right-block">
						<div class="form-bar-right-form-holder">
							
							<form class="form-inline" role="form">
								<div class="form-group">
								    <!-- <label for="email">Email address:</label><br /> -->
								    <input type="email" class="form-control" id="email" placeholder="Name:">
								</div>
								<div class="form-group">
								    <!-- <label for="pwd">Password:</label><br /> -->
								    <input type="password" class="form-control" id="pwd" placeholder="Email:">
								</div>
							
								  <button id="submit" type="submit" class="btn btn-default">Submit</button><br />
							</form>

						</div>
					</div>
				</div>				
			</article>
		</div>
	</section>

	<div id="content" class="site-content">

































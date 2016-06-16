<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

?>

<section id="footer">

	<div class="container">
		
		<article class="footer-social">

			<ul class="social">
                <li><a href="#"><i class="fa fa-facebook-square"></i> </a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i> </a></li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i> </a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i> </a></li>
                <li><a href="#"><i class="fa fa-pinterest-square"></i> </a></li>
            </ul>   		
			
		</article>
		<nav class="footer-nav">
			<ul class="nav">
				<li><a href="/">Home</a></li>
				<li><a href="/about-page/">About</a></li>
				<li><a href="/packages/">Packages</a></li>
				<li><a href="/blog/">Blog</a></li>
				<li><a href="contact/">Contact</a></li>
			</ul>
		</nav>

		<p>All Rights Reserved &copy; <?php echo date('Y'); ?> Stephani Roberts.</p>

	</div>
	
</section>


<section id="footer-call-out">
	<div class="call-out center-block">
		<span class="call-out-text">READY TO ATTRACT MORE DREAM CLIENTS? </span>
		<a class="btn btn-success" href="#">CLICK HERE</a>
	</div>
</section>
<?php wp_footer(); ?>

<!-- <div class="footer-container">

	<footer class="footer-main">

		<section class="footer-body  container">

		</section>


		<div id="copyright" class="copyright">
			<p class="text-center">All Rights Reserved Moose Frame &copy; <?php echo date('Y'); ?>. SEO and Development by <a href="www.htmlfivedev.com">HTMLfiveDev.com</a></p>
		</div>

	</footer>
</div>  -->
<!-- FOOTER CONTAINER ENDED -->



	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->



</body>
</html>

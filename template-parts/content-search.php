<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<header class="entry-header">


		<figure class="featured-img-holder">
			<!-- WP - Featured Image Code -->
			<?php if ( has_post_thumbnail() ) : ?> 
				
				<div class=“featured-img“>
					<a href='<?php the_permalink(); ?>' title=““><?php the_post_thumbnail( 'full', array('class' => 'img-responsive'));  ?></a>

				</div>

			<?php endif; ?>
			
		</figure>

	
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php moose_frame_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php moose_frame_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

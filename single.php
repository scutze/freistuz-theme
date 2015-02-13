<?php
/**
 * The template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php 
				$args = wp_parse_args( $args, array(
	        		'prev_text'          => '&larr; %title',
	        		'next_text'          => '%title &rarr;',
	        		'screen_reader_text' => __( 'Post navigation' ),
	    		) );
				the_post_navigation( $args ); 
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<?php get_footer(); ?>
	</div><!-- #primary -->
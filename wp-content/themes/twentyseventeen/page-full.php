<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

/*
 * Template Name: page-full
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<a class="button" href="<?php echo esc_url(home_url('/features')) ?>"
				style="display: block; margin-bottom: 100px;">Features</a>
			<?php
			while (have_posts()):
				the_post();

				get_template_part('template-parts/page/content', 'page');

				// If comments are open or we have at least one comment, load up the comment template.
				// if (comments_open() || get_comments_number()):
				// 	comments_template();
				// endif;
			
			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();

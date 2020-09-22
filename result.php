<?php
/**
 *Template Name: Result
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package projectypo
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<div class="font-result"><?php the_field('font-result'); ?></div>
		<div class="font-description"><?php the_field('font-description'); ?></div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

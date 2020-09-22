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

		<div class="font-result"><?php the_field('font-result'); ?></div>
		<div class="font-description"><?php the_field('font-description'); ?></div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package teamtees
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="page_titel">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
<span>teamtees.co.nz <?php wp_title(); ?></span>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
		</div>
	</div>

</div>

<?php get_footer();

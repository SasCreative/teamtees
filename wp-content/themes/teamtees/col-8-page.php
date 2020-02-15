<?php 
// Template Name: col-8 col-md-10
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
	<div class="row justify-content-center">
		<div class="col-lg-8 col-md-10">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
		</div>
	</div>

</div>

<?php get_footer();
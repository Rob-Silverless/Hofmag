<?php
/**
 * ============== Template Name: Standard Page
 *
 * @package hofmag
 */
get_header();?>

<div class="container cols-sm-24 align-sm-center grid-gap pt10">
	<div class="col">
		<?php the_field('content');?>
	</div>
</div>

<?php get_footer();?>
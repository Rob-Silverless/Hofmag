<?php
/**
 * ============== Template Name: Treated Page
 *
 * @package hofmag
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>



<?php if( have_rows('buy_now_section') ):
    while( have_rows('buy_now_section') ): the_row(); ?>
	<?php get_template_part("template-parts/buy-now-section"); ?>
<?php endwhile; endif;?>

<?php if( have_rows('research_section') ):
    while( have_rows('research_section') ): the_row(); ?>
    	<?php get_template_part("template-parts/research-section"); ?>
<?php endwhile; endif;?>

<?php get_footer();?>
<?php
/**
 * ============== Template Name: Stables - Therapists Page
 *
 * @package hofmag
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<?php if( have_rows('benefits') ):
    while( have_rows('benefits') ): the_row(); ?>
    	<div class="container cols-offset-4-16">
    		<div class="col align-center pb5">
	    		<h4 class="heading heading__lg heading__thin"><?php the_sub_field('title');?></h4>
	    	</div>
	    	<div class="col pb5">
	    		<?php if( have_rows('benefit') ):
    				while( have_rows('benefit') ): the_row(); ?>
    					<div class="container cols-5-19 pb3">
    						<div class="col">

    						</div>
    						<div class="col">
    							<h4 class="heading heading__sm heading__brand-color pb1"><?php the_sub_field('title');?></h4>
    							<div class="">
    								<?php the_sub_field('content');?>
    							</div>
    						</div>
    					</div>
    			<?php endwhile; endif;?>
	    	</div>
    	</div>
<?php endwhile; endif;?>



<?php if( have_rows('buy_now_section') ):
    while( have_rows('buy_now_section') ): the_row(); ?>
	<?php get_template_part("template-parts/buy-now-section"); ?>
<?php endwhile; endif;?>

<?php get_footer();?>
<?php
/**
 * ============== Template Name: Home Page
 *
 * @package hofmag
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<?php if( have_rows('introduction') ):
    while( have_rows('introduction') ): the_row(); ?>
<section class="section section__mid-grey-opacity mr2 ml2 mb2">
	<div class="container cols-14-10">
		<div class="col pt10 pb10">
			<h3 class="heading heading__caps heading__thin heading__lg"><?php the_sub_field('text')?></h3>
		</div>
		<div class="col image-overlap">
			<?php
				$image = get_sub_field('image');
			?>
			<div class="image-overlap__l0 image-overlap__tn50 image-overlap__h130" style="background-image:url(<?php echo esc_url($image['url']); ?>);"></div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>





<?php if( have_rows('trusted_carousel') ):
    while( have_rows('trusted_carousel') ): the_row(); ?>
<section class="section section__light-grey mr2 ml2 mb2 pt5 pb5">
	<div class="container cols-24">
		<div class="col align-center pb5">
			<h3 class="heading heading__caps heading__thin heading__lg"><?php the_sub_field('title')?></h3>
		</div>
	</div>
	<?php if( have_rows('carousel_container') ):
    while( have_rows('carousel_container') ): the_row(); ?>
		<div class="container cols-24">
			<div class="col">
				<div class="owl-carousel owl-theme single-carousel">
					<?php if( have_rows('carousel_sections') ):
						while( have_rows('carousel_sections') ): the_row();?>
						<?php
							$image = get_sub_field('image');
						?>
					<div class="container cols-12">
						<div class="col section section__white pt5 pl5 pr10 pb5">
							<h4 class="heading heading__brand-color heading__md"><?php the_sub_field('title');?></h4>
							<p><?php the_sub_field('content');?></p>
						</div>
						<div class="col bgImage bgImage__cover bgImage__norepeat" style="background-image:url('<?php echo esc_url($image['url']); ?>');"></div>
							
					</div>
					<?php endwhile; endif;?>
				</div>
			</div>
		</div>
	<?php endwhile; endif;?>
</section>
<?php endwhile; endif;?>








<?php if( have_rows('how_section') ):
    while( have_rows('how_section') ): the_row(); ?>
    	<?php
			$image = get_sub_field('image');
		?>
<section class="section mr2 ml2 mb2">
	<div class="container cols-offset-6-12">
		<div class="col align-center pb3">
			<h3 class="heading heading__lg heading__thin"><?php the_sub_field('title');?></h3>
			<div><?php the_sub_field('content');?></div>
		</div>
	</div>
	<div class="align-center pt20 pb5 bgImage bgImage__norepeat bgImage__cover" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
		<a class="button pr3 pl3 pt1 pb1 button__secondary button__color-white button__caps button__hover-text-secondary">Learn More</a>
	</div>
</section>
<?php endwhile; endif;?>





<?php if( have_rows('conditions_section') ):
    while( have_rows('conditions_section') ): the_row(); ?>
<section class="section section__light-grey mr2 ml2 mb2 pt5 pb5">
	<div class="container cols-offset-6-12">
		<div class="col align-center pb3">
			<h3 class="heading heading__lg heading__thin"><?php the_sub_field('title');?></h3>
			<div><?php the_sub_field('content');?></div>
		</div>
	</div>
	<div class="container cols-6 grid-gap">
		<?php if( have_rows('conditions') ):
    		while( have_rows('conditions') ): the_row(); ?>
    		<?php
				$image = get_sub_field('image');
			?>
    		<div class="col align-center">
    			<div>
    				<img src="<?php echo esc_url($image['url']); ?>"/>
    			</div>
    			<h5 class="heading heading__sm heading__thin mt2"><?php the_sub_field('title');?></h5>
    		</div>
    	<?php endwhile; endif;?>
	</div>
	<div class="align-center pt5">
		<a class="button pr3 pl3 pt1 pb1 button__secondary button__color-white button__caps button__hover-primary button__hover-text-white">Learn More</a>
	</div>
</section>
<?php endwhile; endif;?>



<?php if( have_rows('research_section') ):
    while( have_rows('research_section') ): the_row(); ?>
    	<?php
			$image = get_sub_field('image');
		?>
<section class="section section__white mr2 ml2 mb2 pt5 pb5">
	<div class="container cols-offset-12-12 grid-gap">
		<div class="col mb2">
			<img src="<?php echo esc_url($image['url']); ?>" style="max-width:3rem"/>
		</div>
	</div>
	<div class="container cols-4-8-8 grid-gap">
		<div class="col"></div>
		<div class="col align-right">
			<h5 class="heading heading__lg heading__thin heading__alt-color"><?php the_sub_field('title');?></h5>
		</div>
		<div class="col">
			<p class="mt0 primary-color"><?php the_sub_field('content');?></p>
			<a class="button pr3 pl3 pt1 pb1 button__secondary button__color-white button__caps button__hover-primary button__hover-text-white">Learn More</a>
		</div>
	</div>
</section>
<?php endwhile; endif;?>
<?php get_footer();?>

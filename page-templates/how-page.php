<?php
/**
 * ============== Template Name: How it works Page
 *
 * @package hofmag
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<?php if( have_rows('introduction') ):
    while( have_rows('introduction') ): the_row(); ?>
<section class="section section__mid-grey-opacity mr1 ml1 mb1">
	<div class="container cols-14-10 grid-gap">
		<div class="col pt5 pb5 pr1">
			<h5 class="heading heading__caps heading__thin heading__md"><?php the_sub_field('title')?></h5>
			<div>
				<?php the_sub_field('content')?>
			</div>
		</div>
		<div class="col image-overlap">
			<?php
				$image = get_sub_field('image');
			?>
			<div class="image-overlap__l0 image-overlap__tn50 image-overlap__h130 r25" style="background-image:url(<?php echo esc_url($image['url']); ?>);"></div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>



<?php if( have_rows('effective_treatment_section') ):
    while( have_rows('effective_treatment_section') ): the_row(); ?>
<section class="section section__light-grey mr1 ml1 mb1">
	<div class="container pt10 pb3 cols-24 align-center">
		<div class="col">
			<h3 class="heading heading__caps heading__thin heading__lg"><?php the_sub_field('title')?></h3>
		</div>
	</div>
	<div class="container cols-24 pb5">
		<div class="col">
			<?php if( have_rows('content_block') ):
		   		while( have_rows('content_block') ): the_row(); ?>
		   			<?php
						$image = get_sub_field('image');
					?>
		   			<div class="effective-content section section__white mb2">
		   				<div class="effective-content__content pb3 pt3 pr7 pl7">
		   					<h5 class="heading heading__md heading__brand-color"><?php the_sub_field('title')?></h5>
		   					<div><?php the_sub_field('content')?></div>
		   					<div><?php the_sub_field('additional_content')?></div>
		   					<a class="button button__white button__color-primary button__caps button__hover-text-secondary button__hover-white read-more">Read More</a>
		   				</div>
		   				<div class="effective-content__image" style="background-image:url(<?php echo esc_url($image['url']); ?>);"></div>
		   			</div>
		    <?php endwhile; endif;?>
    	</div>
	</div>
</section>

<?php endwhile; endif;?>



<?php if( have_rows('buy_now_section') ):
    while( have_rows('buy_now_section') ): the_row(); ?>
	<?php get_template_part("template-parts/buy-now-section"); ?>
<?php endwhile; endif;?>

<?php get_footer();?>
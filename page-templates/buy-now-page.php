<?php
/**
 * ============== Template Name: Buy Now Page
 *
 * @package hofmag
 */
get_header();?>

<div class="container cols-12 grid-gap pt10">
	<div class="col">
		<?php if( have_rows('buy_now_content') ):
    		while( have_rows('buy_now_content') ): the_row(); ?>
			<h1 class="heading heading__thin font400 pb1"><?php the_sub_field('title');?></h1>
			<h2 class="heading heading__thin font400 heading__sm pb1"><?php the_sub_field('sub_title');?></h2>
			<div>
				<?php the_sub_field('content');?>
			</div>
		<?php endwhile; endif;?>
		<div class="pt1 pb5">
			<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
		</div>
		<div class="pb5">
			<h3 class="heading heading__lg heading__thin pb1">Get in touch</h3>
			<span class="heading heading__brand-color"><?php the_field('company_title', 'options');?></span>
			<p class="mt0"><?php the_field('address', 'options');?></p>
			<div class="heading heading__brand-color heading__thin">
				<span>Tel: </span>
				<a href="tel:<?php the_field('telephone', 'options');?>" class="heading heading__mid-grey heading__thin"><?php the_field('telephone', 'options');?></a>
			</div>
			<div class="heading heading__brand-color heading__thin">
				<span>Email: </span>
				<a href="mailto:<?php the_field('email', 'options');?>" class="heading heading__mid-grey heading__thin"><?php the_field('email', 'options');?></a>
			</div>
			<div class="pt2">
				<?php if( have_rows('social', 'options') ):
	    		while( have_rows('social', 'options') ): the_row(); ?>
	    			<?php
						$icon = get_sub_field('icon');
					?>
					<span class="social pr3">
						<a href="<?php echo the_sub_field('link');?>" title="<?php echo the_sub_field('title');?>" target="_blank"><img src="<?php echo esc_url($icon['url']); ?>"/></a>
					</span>

	    		<?php endwhile; endif;?>
	    	</div>
		</div>
	</div>
	<div class="col">
		<?php
			$image = get_field('buy_it_now_image');
		?>
		<img src="<?php echo esc_url($image['url']); ?>"/>
		<?php if( have_rows('quote') ):
    		while( have_rows('quote') ): the_row(); ?>
			<div class="pt5 pl5 pb5 align-right heading heading__md">
				<?php the_sub_field('quote_content');?>
				<span class="heading heading__thin heading__brand-color heading__caps"><?php the_sub_field('quote_credit');?></span>
			</div>
		<?php endwhile; endif;?>
	</div>
</div>

<?php get_footer();?>
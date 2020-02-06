<?php
	$image = get_sub_field('image');
?>
<section class="section section__white mr1 ml1 mb1 pt5 pb5">
	<div class="container cols-offset-12-12 grid-gap">
		<div class="col mb2">
			<img src="<?php echo esc_url($image['url']); ?>" style="max-width:3rem"/>
		</div>
	</div>
	<div class="container cols-4-8-8 cols-xl-2-10-10 grid-gap">
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
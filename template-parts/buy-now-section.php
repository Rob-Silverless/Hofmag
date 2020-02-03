<?php
	$image = get_sub_field('buy_image');
?>

<section class="section section__light-grey mr1 ml1 mb1 pb5 pt10">
	<div class="container cols-offset-4-16">
		<div class="col align-center">
			<div class="pb2 pt2 pl5 pr5 border border__brand-primary">
				<img src="<?php echo esc_url($image['url']); ?>" class="mt-10 pb2"/>
				<h5 class="heading heading__brand-color heading__lg"><?php the_sub_field('buy_title');?></h5>
				<p><?php the_sub_field('buy_content');?></p>
				<a class="button pr3 pl3 pt1 pb1 button__secondary button__color-white button__caps button__hover-primary button__hover-text-white">Learn More</a>
			</div>
		</div>
	</div>
</section>
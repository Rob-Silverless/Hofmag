<?php
if( get_field('hero_type') == 'image' ):
	$heroImage = get_field('hero_background_image');
elseif ( get_field('hero_type') == 'color' ):
	$heroColor = get_field('hero_background_colour');
endif;?>

<div class="hero mb2 mt2 ml2 mr2 <?php the_field('hero_height');?>" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">

    <div class="container cols-14 pt15 pb5">
		<div class="col">
            <h1 class="heading heading__xl font400">
            	<?php the_field('hero_heading');?>
            </h1>
		</div>
	</div>
	<div class="container cols-24">
		<div class="col heading heading__md font300 col__double-list col__circle-list">
            <?php the_field('hero_copy');?>
		</div>
	</div>

</div><!--hero-->
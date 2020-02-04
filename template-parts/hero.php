<?php
if( get_field('hero_colour_theme') == 'dark' ):
	$theme = "hero__dark";
elseif( get_field('hero_colour_theme') == 'light' ):
	$theme = "hero__light";
endif;?>


<?php
if( get_field('hero_type') == 'image' ):
	$heroImage = get_field('hero_background_image');?>
<div class="hero mb1 mt1 ml1 mr1 <?php the_field('hero_height');?> <?php echo $theme;?>" style="background-image: url(<?php echo $heroImage['url']; ?>);">

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

</div>



<?php elseif ( get_field('hero_type') == 'color' ):
	$heroColor = get_field('hero_background_colour');?>

<div class="hero mb1 mt1 ml1 mr1 <?php the_field('hero_height');?> <?php echo $theme;?>" style="background-color: url(<?php echo $heroColor; ?>);">

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

</div>


<?php
elseif( get_field('hero_type') == 'headingimage' ):
	$heroImage = get_field('hero_background_image');?>

<div class="hero hero__heading-image mb1 mt1 ml1 mr1 align-vert-c <?php the_field('hero_height');?> <?php echo $theme;?>" style="background-image: url(<?php echo $heroImage['url']; ?>);">

    <div class="container cols-12 ">
		<div class="col">
            <h1 class="heading heading__xl font400">
            	<?php the_field('hero_heading');?>
            </h1>
		</div>
	</div>

</div>



<?php
elseif( get_field('hero_type') == 'halfimage' ):
	$heroImage = get_field('hero_background_image');?>

<div class="hero hero__halfimage mb1 mt1 ml1 mr1 <?php the_field('hero_height');?> <?php echo $theme;?>">
	<div class="hero__halfimage__background" style="background-image: url(<?php echo $heroImage['url']; ?>);">
		<div class="hero__halfimage__quote pr3 pb2 heading heading__md align-right">
        	<?php the_field('quote');?>
        	<span class="heading heading__sm heading__light heading__caps font400"><?php the_field('credit');?></span>
        </div>
	</div>
	<div class="container cols-14 ">
		<div class="col hero__halfimage__content pb2 pt2 pr2">
            <h1 class="heading heading__xl heading__grey-color font400">
            	<?php the_field('hero_heading');?>
            </h1>
            <div>
            	<?php the_field('hero_copy');?>
            </div>
		</div>
	</div>
</div>

<?php endif;?>
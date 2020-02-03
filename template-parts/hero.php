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

    <div class="container fullwidth cols-offset-12-12 ">
		<div class="col" style="background-image: url(<?php echo $heroImage['url']; ?>);">
		</div>
	</div>

</div>

<?php endif;?>
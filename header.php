<?php
/**
 * Header
 *
 * @package hofmag
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Hofmag</title>

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap" rel="stylesheet"/> 
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

        <header>
        	<nav id="nav">
		        <div class="container fullwidth grid-gap cols-4-16-4 align-vert-c ">
		            <div class="col pt2 pb2" id="logo">
		                   <?php get_template_part("inc/img/logo"); ?>
		            </div>
		            <div class="col pt2 pb2">
		                <?php
		                wp_nav_menu(array(
		                    'theme_location'  => 'main-menu',
		                    'container_class' => 'mainMenu'
		                ));
		                ?>
		            </div>
		            <div class="col">
		            </div>
		        </div>
	    	</nav>
        </header>

		<main><!--closes in footer.php-->

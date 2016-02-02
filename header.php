<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if ( ! function_exists( '_wp_render_title_tag' ) ) :
			function theme_slug_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
		}
		add_action( 'wp_head', 'theme_slug_render_title' );
		endif;?>
		<meta name="description" content="Draggable Dual-View Slideshow: A Slideshow with two views and content area" />
		<meta name="author" content="Mohamed Safouan Besrour & Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:900,400|Lato:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>css/dragdealer.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>css/component.css" />
  		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
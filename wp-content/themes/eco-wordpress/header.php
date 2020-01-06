<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_v2.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link  href="<?php echo get_template_directory_uri() ?>/js/viewer.js/viewer.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
	<header role="banner">

		<button id="toggleSidebar">
			<span class="" aria-hidden="true"></span>
		</button>
		<nav id="nav-wrapper" role="navigation">
			<?php wp_nav_menu(); ?>
		</nav>
	</header>
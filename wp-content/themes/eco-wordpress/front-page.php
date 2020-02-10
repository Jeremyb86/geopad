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
	<script src="http://code.jquery.com/jquery-3.1.0.slim.min.js"></script>

	<?php wp_head(); ?>
</head>

<body>
	<div class="page-wrapper">

<header role="banner">
		<!-- <button id="toggleSidebar">
			<span class="" aria-hidden="true"></span>
		</button>
		<nav id="nav-wrapper" role="navigation">
			<?php wp_nav_menu(); ?>
		</nav> -->
		<div class="nav_top">
			<img src="/geopad/wp-content/uploads/2020/01/logo_blanc.png">
			<div class="nav_top_right_login">
				 <?php 
				 global $current_user; wp_get_current_user(); 
			
				  if ( is_user_logged_in() ) { 
					  echo $current_user->user_login . " ";
					  echo '<a href="./wp-login.php?action=logout"><img src="/geopad/wp-content/uploads/2020/01/img-compte-2.png"></a>';
					  echo '<a href="./wp-admin/"><img src="/geopad/wp-content/uploads/2020/01/img-compte-1.png"></a>';
					 } 
					  else { 
						echo '<button type="button" class="trigger" id="connexion">';
						  wp_loginout(); 
						echo '</button>';
						} 
				?>
			</div>
		</div>
		<div class="nav_center">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit.
		</div>
		<div class="box_recherche">
			<h3>Rechercher</h3>
			<form name="contact" method="post" action="contact.php">
				<div class="form-group">
					<input type="text" id="localisation" name="localisation" class="form-control" placeholder="Où êtes vous ?" value="" />
				</div>
				<div class="form-left">
					<input type="datetime" id="date" name="date" class="form-control" placeholder="Date & heure" value="" />
				</div>
				<div class="form-right">
					<input type="text" id="service" name="service" class="form-control" placeholder="Service" value="" />
				</div>
				<input type="submit" name="valider" class="btnContact" value="Rechercher" />
            </form>
		</div>
	</header>

    <section >
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	</section>
<?php get_footer(); ?>
<div class="modal-wrapper">
  <div class="modal">
    <div class="head"> <a class="btn-close trigger" href="#"> <i class="fa fa-times" aria-hidden="true"></i> </a> </div>
    <div class="content">
    <?php echo do_shortcode('[ultimatemember form_id="54"]	'); ?>

    </div>
  </div>
</div> 
<script>
$( document ).ready(function() {
  $('.trigger').on('click', function() {
     $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur-it');
     return false;
  });
});
</script>


    
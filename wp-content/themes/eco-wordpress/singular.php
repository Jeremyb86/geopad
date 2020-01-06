<?php get_header(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	</section>
<?php get_footer(); ?>
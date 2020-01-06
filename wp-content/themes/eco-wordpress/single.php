<?php get_header(); ?>
	<section class="post-page actualites">
		<h1><?php the_title(); ?></h1>
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
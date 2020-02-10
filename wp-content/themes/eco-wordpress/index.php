<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<?php global $post; ?>
	<section id="primary" class="content-area actualites">
			<?php 
			global $post;
			
			$my_postid = 83; //This is page id or post id
			$content_post = get_post($my_postid);
			$content = $content_post->post_content;
			echo $content;
			?>
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) : the_post(); ?>
				<article class="post-entry">
					<div class="thumbnail-wrapper">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<?php the_post_thumbnail() ?>
						</a>
					</div>
					<div class="entry-content">
						<h2 class="title">
							<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
						</h2>
						<!-- <div class="date">
							<time datetime="2018-07-13T11:27:29+00:00" class="ab-block-post-grid-date"><?php the_time('j F Y') ?></time>
						</div> -->
						<div class="excerpt">
							<?php the_excerpt() ?>
						</div>
						<a href="<?php the_permalink() ?>" rel="bookmark">Lire la suite</a>
					</div>
				</article>
			<?php endwhile;

		} else {

			// If no content, include the "No posts found" template.
			echo 'NO CONTENT';
		}
		?>

				</div>
			</div>
				</div>
			</div>
		</div>
	</section><!-- .content-area -->

<?php
get_footer();

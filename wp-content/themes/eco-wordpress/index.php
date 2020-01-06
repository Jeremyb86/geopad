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
	<link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">
	<div class="box1">
		<blockquote></blockquote>
		<div class="col1">
		<img src="wp-includes/images/geopad/localisation_2.png"><br>
			Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia quas dolorem repudiandae reiciendis molestias adipisci esse nisi doloribus aperiam vero minima expedita, officiis amet, iusto, similique incidunt enim possimus laboriosam.
		</div>
		<div class="col2">
		<img src="wp-includes/images/geopad/timer.png"><br>
			Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, excepturi aliquam a quia accusantium deserunt, porro iure illum aperiam sunt velit non, doloremque tempore explicabo delectus alias repellat itaque? Ipsam.
		</div>
		<div class="col3">
		<img src="wp-includes/images/geopad/formulaire.png"><br>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero pariatur nesciunt magni distinctio tempora aliquam, fugit qui voluptas eaque corrupti a ut vel soluta mollitia esse quisquam, ad, aut dignissimos!
		</div>
		
	</div>

<?php
get_footer();

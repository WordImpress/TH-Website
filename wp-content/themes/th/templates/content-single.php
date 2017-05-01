<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header>
			<?php
			/**
			 * Featured Image
			 */
			if ( has_post_thumbnail( $post->ID ) ) {
				?>
				<div class="featured-img">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog_featured' ); ?>
					<a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>"><img src="<?php echo $image[0]; ?>" width="810" height="375" alt="<?php echo get_the_title(); ?>"></a>
				</div>
			<?php } ?>


			<?php get_template_part( 'templates/entry-meta' ); ?>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

		<footer>
			<?php
			//get the author profile
			get_template_part( 'templates/widget', 'author-profile' );?>

		</footer>

		<?php comments_template( '/templates/comments.php' ); ?>
	</article>
<?php endwhile; ?>

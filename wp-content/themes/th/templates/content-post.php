<div <?php post_class(); ?>>

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



		<div class="post-content">
			<h2 class="post-title">
				<a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
			</h2>
			<?php get_template_part( 'templates/entry', 'meta' ); ?>

			<?php the_excerpt(); ?>

			<footer class="entry-footer clearfix">

				<ul class="list-inline">
					<li class="first-li">
						<div class="readmore-wrap">
							<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-xs" title="<?php echo get_the_title(); ?>">Read Post</a>
						</div>
					</li>
					<li>
						<div class="comment-number">
							<a href="<?php comments_link(); ?>" title="Click here to leave a comment"><?php comments_number( '0', '1', '%' ); ?> Comments</a>
						</div>
					</li>
					<li><?php the_tags( '<ul class="entry-tags list-inline"><li>', ', </li><li>', '</li></ul>' ); ?></li>
				</ul>


			</footer>

		</div>

	</div>
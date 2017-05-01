<div class="meta-wrap"><ul class="list-inline entry-meta">
	<li>
		<strong>Published on: </strong>
		<time class="published" datetime="<?php echo get_the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time>
	</li>
	<li><strong><?php echo __( 'Author: ', 'th' ); ?></strong>
		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a>
	</li>
	<?php if ( has_category() ) { ?>
		<li class="entry-cats"><strong>Under: </strong><?php the_category( ', ' ); ?></li>
	<?php } ?>

</ul></div>



<?php
/**
 * Archives Template
 */
// The Loop
if ( have_posts() ) : while ( have_posts() ) :

	the_post();

	get_template_part( 'templates/content', 'post' );

endwhile;
endif;

// Reset Post Data
wp_reset_postdata(); ?>

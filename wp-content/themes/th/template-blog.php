<?php
/**
 * Template Name: Blog
 */
?>

<?php $args = array(
	'posts_per_page' => 6
);
// The Query
$wp_query = new WP_Query( $args );

// The Loop
if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) :

	$wp_query->the_post();

	get_template_part( 'templates/content', 'post' );

endwhile;
endif;

// Reset Post Data
wp_reset_postdata(); ?>

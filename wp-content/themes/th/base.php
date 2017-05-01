<?php get_template_part( 'templates/head' ); ?>
<body <?php body_class(); ?>>
<?php if ( is_home() || is_front_page() ) { ?>
	<div id="loading-wrap">
		<div class="loading animated animated-repeat pulse"></div>
	</div>
<?php } ?>
<!--[if lt IE 8]>
<div class="alert alert-warning">
	<?php _e('You are using an <strong>outdated</strong> browser. Please
	<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
</div>
<![endif]-->

<?php
do_action( 'get_header' );

if ( is_front_page() ) {
	//NAV
	get_template_part( 'templates/header-top-navbar' );
	//Homepage Content
	get_template_part( 'templates/content-homepage' );
	//Standard Footer
	get_template_part( 'templates/footer' );

} elseif ( is_page_template( 'template-fran-dev.php' ) || is_page_template( 'template-fran-update.php' ) || is_page_template( 'template-dowhatmatters.php' )|| is_page_template( 'template-bb.php' ) ) {

	include roots_template_path();

} else {

	//NAV
	get_template_part( 'templates/header-top-navbar' );

	get_template_part( 'templates/page', 'header' );

	?>

	<div class="wrap container" role="document">
		<div class="content row">
			<main class="main <?php echo roots_main_class(); ?>" role="main">
				<?php include roots_template_path(); ?>
			</main>
			<!-- /.main -->
			<?php if ( roots_display_sidebar() ) : ?>
				<aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
					<?php include roots_sidebar_path(); ?>
				</aside><!-- /.sidebar -->
			<?php endif; ?>
		</div>
		<!-- /.content -->
	</div>
	<!-- /.wrap -->

	<?php //endif home/frontpage
	get_template_part( 'templates/footer' );
} ?>
</body>
</html>

<?php if ( is_page_template( 'template-blog.php' ) ) { ?>
	<div id="blog-header-wrap" class="page-header">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/th-brainstorm-logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/img/th-brainstorm-logo.png'"><span>Brainstorm</span>
					</h1>

					<p class="sub-heading">&mdash; A Thought &middot; House Publication &mdash;</p>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/th-logo-symbol.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/img/th-logo-symbol.png'" width="60px" height="60px">


				</div>
			</div>
		</div>

	</div>

<?php } elseif ( is_single() || is_archive() ) { ?>

	<div id="single-top-hat">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">
					<a href="<?php echo get_permalink( 10 ); ?>" title="Visit Brainstorm" class="brainstorm-single"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/th-brainstorm-logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/img/th-brainstorm-logo.png'"><span>Brainstorm</span></a>

					<p class="sub-heading">A
						<a href="<?php echo get_bloginfo( 'url' ) ?>">Thought House</a> Publication</p>


				</div>

			</div>
		</div>
	</div>
	<div id="blog-header-wrap" class="page-header single-header">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="entry-title"><?php if ( is_single() ) {
							the_title();
						} else {
							echo roots_title();
						} ?></h1>
					<?php
					$count = $GLOBALS['wp_query']->post_count;
					if ( is_archive() && $count > 1 ) {
						?>

						<p class="sub-heading">- <span><?php echo $count; ?> Articles</span> -</p>

					<?php } ?>

				</div>
			</div>
		</div>

	</div>

<?php } else { ?>
	<div class="page-header">
		<h1>
			<?php echo roots_title(); ?>
		</h1>
	</div>
<?php } ?>

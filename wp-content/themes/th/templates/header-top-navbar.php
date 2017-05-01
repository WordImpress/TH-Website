<header class="banner navbar navbar-default" role="banner">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo home_url(); ?>/"><span><?php bloginfo( 'name' ); ?></span></a>
		</div>

		<button class="lines-button x" type="button" role="button">
			<span class="lines"></span>
		</button>

		<nav class="collapse navbar-collapse" role="navigation">
			<?php
			if ( has_nav_menu( 'primary_navigation' ) ) :
				wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav list-inline' ) );
			endif;
			?>
		</nav>
	</div>
</header>

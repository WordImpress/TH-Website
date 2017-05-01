<?php
/**
 *  Author Profile
 *
 * @description: Displays the author profile on single posts
 */

?>
<div class="author-info clearfix">

	<div class="row">


		<div class="author-avatar author-avatar-single col-sm-2">
			<?php
			//Display Post author Avatar
			$email = get_the_author_meta( 'user_email' );
			echo get_avatar( $email, 100 ); ?>
		</div>

		<div class="author-description author-description-single  col-sm-10">
			<h3>
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author" class="fn"><?php the_author(); ?></a>
			</h3>

			<?php // If a user has filled out their decscription show a bio on their entries
			$bio = get_the_author_meta( 'description' );

			if ( ! empty( $bio ) ) {
				echo wpautop( $bio );
			}
			?>


		</div>


		<?php

		$website = get_the_author_meta( 'user_url' );
		$facebook = get_the_author_meta( 'facebook' );
		$twitter = get_the_author_meta( 'twitter' );
		$googlePlus = get_the_author_meta( 'googleplus' );

		//Only display if fields completed
		if ( ! empty( $website ) || ! empty( $facebook ) || ! empty( $twitter ) ) {
			?>

			<div class="col-sm-2">
				<p class="auto-follow">Follow<br /> <?php echo get_the_author_meta( 'first_name' ); ?></p>
			</div>

			<div class="author-meta col-sm-10">
				<ul class="author-contact list-inline">
					<?php
					//Output List Elements
					if ( ! empty( $facebook ) ) {
						echo "<li class='author-facebook'><a href='" . $facebook . "'  target='_blank' rel='nofollow'><span class='icon icon-facebook'></span></a></li>";
					}
					if ( ! empty( $twitter ) ) {
						echo "<li class='author-twitter'><a href='https://twitter.com/" . $twitter . "' target='_blank' rel='nofollow'><span class='icon icon-twitter'></span></a></li>";
					}
					if ( ! empty( $googlePlus ) ) {
						echo "<li class='author-google'><a href='" . $googlePlus . "' target='_blank' rel='nofollow'><span class='icon icon-google-plus'></span></a></li>";
					}
					if ( ! empty( $website ) ) {
						echo "<li class='author-website'><a href='" . $website . "' target='_blank' rel='nofollow' title='View " . get_the_author_meta( 'first_name' ) . "&rsquo;s Website'><span class='icon icon-link'></span></a></li>";
					} ?>
				</ul>


			</div>
		<?php } ?>
	</div>
</div>
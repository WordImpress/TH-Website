<?php
/**
 * Template Name: Do What Matters
 */
?>
	<div class="dwm-container">

		<div class="dwm-header">
			<div class="th-top">
				<a href="<?php echo get_bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/thought-house-logo-large.png" alt="Thought House" /></a>
			</div>

			<div class="dwn-subheader">
				<h1 class="dwm-h1">Collaboration Matters</h1>
				<p>We are a collaborative marketing agency.<br> Doing what matters requires a lot of teamwork.</p>
			</div>

			<div class="container">
				<div class="dwm-item dwm-item-1">
					<h2 class="dwm-item-title">Project Management</h2>
					<p>Our project managers utilize tools that pipe into your marketing systems or current platform. That means we're both working on the same goal, in the same system. Our current collaboration tools are <a href="http://asana.com" target="_blank">Asana</a> and <a href="http://slack.com" target="_blank">Slack</a>.</p>
				</div>
				<div class="dwm-item dwm-item-2">
					<h2 class="dwm-item-title">Navigating Change</h2>
					<p>We pay close attention to detail and hand craft everything. We are your guide. How? By listening, planning, and thorough market research. This empowers your team to challenge assumptions and to explore new horizons.</p>
				</div>
				<div class="dwm-item dwm-item-3">
					<h2 class="dwm-item-title">Strategic Partners</h2>
					<p>We consider your other vendor suppliers our partners. That means we share strategy, planning documents, and even results with all parties involved in the marketing team. And when we fail, we are accountable to improve the campaign.</p>
				</div>


			</div>
		</div>

		<h3 class="hashtag-intro">See How Others #DoWhatMatters</h3>

		<?php echo do_shortcode( '[ff id="1"]' ); ?>

	</div>

<?php get_template_part( 'templates/footer' ); ?>

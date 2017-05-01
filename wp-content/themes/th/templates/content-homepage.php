<?php
/**
 * Homepage Content
 */
?>

<div class="header-notice">
	<p><em>Your Cost Per Lead Matters:</em> <strong><a href="<?php echo get_permalink(42); ?>">Here's what matters more. &raquo;</a></strong></p>
</div>

<div id="th-home">
<section id="introduction" class="section" data-anchor="thought-house">

	<div class="slide-inner table-wrap">
		<div class="absolute-center">
			<div class="introduction-wrap">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/thought-house-logo-large.png" alt="Thought House" title="Thought House" class="th-main-logo" />

				<h1 class="border-heading border-heading-white all-caps"><span class="we-build-txt">We Build</span>
					<span class="typed-js"></span> <span class="we-build-txt">Together.</span></h1>
			</div>
		</div>

		<span class="arrow-down floating" data-scroll-to="why-we-exist"></span>

	</div>

</section>


<section id="why-we-exist" class="section" data-anchor="why-we-exist" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/slide-2-bg.jpg">

	<div class="slide-heading-wrap">
		<h2 class="border-heading all-caps">Why We Exist</h2>
	</div>

	<div class="slide-inner table-wrap">

		<div class="absolute-center">
			<div class="slide-2-inner">
				<p class="full-screen-text">We navigate the ever changing world, discovering insights that
					<em>inspire</em> and <em>impact</em> your journey.</p>
			</div>
		</div>

	</div>


	<script>

		<?php

		//Slide 2 either will show video or image depending on device
		if ( is_mobile() || !$chrome && !is_mobile()) { ?>

		var bg_img = jQuery( '#why-we-exist' ).data( 'background' );

		//Show Background instead
		jQuery( '#why-we-exist .slide-inner' ).css( {
			'background-image': 'url(' + bg_img + ')'
		} );

		<?php } elseif($chrome) { ?>

		//Show Tubular video
		var options = {
			videoId: 'ab0TSkLe-E0',
			start  : 3
		};
		jQuery( '#why-we-exist' ).tubular( options );

		<?php } ?>
	</script>


</section>


<section class="section" id="we-understand" data-anchor="what-we-understand">

	<div class="slide-heading-wrap">

		<h2 class="border-heading all-caps">What We Understand</h2>

	</div>

	<div class="slide-inner slide-3-inner container">

		<div class="diamond-text-display">
			<div class="table-wrap">
				<div class="absolute-center">
					<p class="reveal-txt full-screen-text"></p>
				</div>
			</div>
		</div>

		<ul class="diamondswrap">
			<li class="item behavior-item">
				<div class="diamond-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/behavior-bg.jpg);">

					<div class="table-wrap">
						<div class="absolute-center">
							<span class="square-outline">Behavior</span>
						</div>
					</div>

					<p class="hidden">The rapid speed of technology, device proliferation and open connectivity have fundamentally shifted how we live. We study these changes using research methods modeled around the best thinkers of our time.</p>
				</div>
			</li>
			<li class="item intent-item">
				<div class="diamond-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/intent-bg.jpg);">

					<div class="table-wrap">
						<div class="absolute-center">
							<span class="square-outline">Intent</span>
						</div>
					</div>


					<p class="hidden">Marketing is not only for selling. Today, brands have a higher calling. Society has the knowledge and resources to do more than buy, buy, buy!  Consumers are empowered and each aspect of their intent should center strategic planning. We never talk at our customers. We build with them.</p>
				</div>
			</li>
			<li class="item funnels-item">
				<div class="diamond-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/funnels-bg.jpg);">
					<div class="table-wrap">
						<div class="absolute-center">
							<span class="square-outline">Funnels</span>
						</div>
					</div>
					<p class="hidden">Top of the funnel, bottom of the funnel, and outside the funnel &ndash; this is what our team understands; however, our thinking goes further. We also consider behavior in your conversion paths and utilize iterative campaign testing to better inform our creative and campaign decision-making.</p>
				</div>
			</li>
			<li class="item design-item">
				<div class="diamond-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/design-bg.jpg);">
					<div class="table-wrap">
						<div class="absolute-center">
							<span class="square-outline">Design</span>
						</div>
					</div>
					<p class="hidden">Constant, iterative, and less-assumptive, we have no shadowy place at our firm where creative directors exist. Our creative process is aggressive in its approach to address an ever fragmented media world that needs more than just a great idea.</p>
				</div>
			</li>
			<li class="item tech-item">
				<div class="diamond-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/technology-bg.jpg);">
					<div class="table-wrap">
						<div class="absolute-center">
							<span class="square-outline">Technology</span>
						</div>
					</div>
					<p class="hidden">Technology empowers us to connect with our customers and if built appropriately, control and manage our Brand growth. We are keen to functional specification documents, development cycles, licensing, versioning, and we're an agnostic guide so there's never a sticky-situation.</p>
				</div>
			</li>
			<li class="item data-item">
				<div class="diamond-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/data-bg.jpg);">
					<div class="table-wrap">
						<div class="absolute-center">
							<span class="square-outline">Data</span>
						</div>
					</div>
					<p class="hidden">Simply put, decisions made with data often accomplish goals more effectively than those without. We use current customer, online behavioral, and business data to model our campaigns against benchmarks from the industries we serve.</p>
				</div>
			</li>
			<li class="item results-item">
				<div class="diamond-inner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/grand-canyon.jpg);">
					<div class="table-wrap">
						<div class="absolute-center">
							<span class="square-outline">Results</span>
						</div>
					</div>
					<p class="hidden">Daily, weekly,monthly &ndash; we study and collaborate on results to generate insights, then repeat. What we share with our clients is not driven by green arrows and the constant fear of being fired. Dont like us--fire us. Nothing we do together will be a quick-fix; that’s not how life works. </p>
				</div>
			</li>
		</ul>
	</div>

</section>

<section class="section" id="the-journey" data-anchor="the-journey" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/slide-3-bg.jpg);">
	<div class="slide-heading-wrap">

		<h2 class="border-heading all-caps">The Journey</h2>

	</div>

	<div class="hexagon-wrap">

		<div class="hexagon-text-display">
			<div class="table-wrap">
				<div class="absolute-center">
					<p class="reveal-txt full-screen-text"></p>
				</div>
			</div>
		</div>


		<div class="hexagon-inner">
			<div class="hexagon hexagon-1">
				<div class="table-wrap">
					<div class="absolute-center">
						<span class="yellow-txt">Discover</span>

						<p class="hidden">How are customers discovering your business and what can we do to compete in the competitive marketplace online and off?</p>
					</div>
				</div>
				<div class="hex-outline"></div>
				<div class="hex-hover"></div>
			</div>
			<div class="hexagon hexagon-2">
				<div class="table-wrap">
					<div class="absolute-center">
						<span class="yellow-txt">Interact</span>

						<p class="hidden">When customers interact with your business, what are they seeking and how can we tell stories that empower self discovery of value and purpose beyond features and benefits?</p>
					</div>
				</div>
				<div class="hex-outline"></div>
				<div class="hex-hover"></div>
			</div>
			<div class="hexagon hexagon-3">
				<div class="table-wrap">
					<div class="absolute-center">
						<span class="yellow-txt">Build</span>

						<p class="hidden">What actions are your customers taking to better shape and build the world from their lens?..... and how can we help your customers empower themselves to build a more enjoyable place?</p>
					</div>
				</div>
				<div class="hex-outline"></div>
				<div class="hex-hover"></div>
			</div>
			<div class="hexagon hexagon-4">
				<div class="table-wrap">
					<div class="absolute-center">
						<span class="yellow-txt">Purchase</span>

						<p class="hidden">Customers are empowered and their moments of truth should matter to you. Often, we begin our research and campaign planning by examining intent in the marketplace. Intent informs the stories we make together and ensures we don't talk at your customers, we build with them.</p>
					</div>
				</div>
				<div class="hex-outline"></div>
				<div class="hex-hover"></div>
			</div>
			<div class="hexagon hexagon-5">
				<div class="table-wrap">
					<div class="absolute-center">
						<span class="yellow-txt">Enjoy</span>

						<p class="hidden">How can we be more useful in our customers life to bring enjoyment to their everyday living?</p>
					</div>
				</div>
				<div class="hex-outline"></div>
				<div class="hex-hover"></div>
			</div>
			<div class="hexagon hexagon-6">
				<div class="table-wrap">
					<div class="absolute-center">
						<span class="yellow-txt">Repeat</span>

						<p class="hidden">How can we build customer loyalty and generate repeat purchase?</p>
					</div>
				</div>
				<div class="hex-outline"></div>
				<div class="hex-hover"></div>
			</div>
		</div>
	</div>


</section>


<section class="section" id="about-th">

	<div class="container">
		<div class="row">
			<div class="top-row clearfix">
				<div class="col-md-8">
					<div class="about-top-left">
						<h3>Thorough, passionate, <em>rigorous</em></h3>

						<p>Thought House exists to be a guide, bringing curiosity and rigor for excellence to generate insights that inspire customers as they discover, interact, build, purchase and enjoy life.</p>
					</div>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/th-logo-symbol.png" alt="Thought House" title="Thought House" class="th-sub-logo" />
				</div>
			</div>
			<div class="bottom-row clearfix">
				<div class="col-md-4">
					<div class="widget">
						<h4 class="border-heading border-heading-white">The Background</h4>

						<p>Jason Knill and Devin Walker founded Thought House to guide our clients and their brands as technology, device proliferation and open connectivity shape an ever-changing world. </p>
					</div>

				</div>

				<div class="col-md-4">
					<div class="widget">
						<h4 class="border-heading border-heading-white">The Team</h4>

						<p>We've formed and are building a world-class team of subject matter experts who care about customers and developing insights. We demand rigor and require you to be customer-centric. If you want to find out more about Thought House contact us below.</p>
					</div>

				</div>

				<div class="col-md-4">
					<div class="widget">
						<h4 class="border-heading border-heading-white">The Approach</h4>

						<p>By way of customer research, creative services, technology development, data analysis, media planning and buying, and content production &ndash; we help you build with customers. </p>
					</div>

				</div>

			</div>
		</div>

	</div>

</section>


<section id="what-people-say" class="section" data-anchor="what-people-say">

	<div class="slide-heading-wrap">

		<h2 class="border-heading all-caps">Industry Ovation</h2>

	</div>

	<div class="table-wrap slide-inner">

		<div class="absolute-center">

			<div class="say-center">
				<blockquote class="full-screen-text">"Thought House was incredibly customer centric as we began our relationship. The focus wasn’t on tactics or retainers and instead on a desire to go deep into why we should be purposeful to our Vet and consumer audiences - that's how I believe we'll grow market share &ndash; focus on my customer."</blockquote>

				<div class="cite-wrap clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/an-logo-circle.png" alt="Thought House client Animal Necessity" title="Thought House client Animal Necessity" class="th-client-logo" />
					<cite><span>Joe Fava, CEO</span><br>
						<span style="text-transform: uppercase;" class="myriad-bold-condensed">Animal Necessity</span></cite>
				</div>

				</di
			</div>

		</div>

</section>


</div>

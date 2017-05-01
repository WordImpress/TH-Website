<!DOCTYPE html>
<html>
<head>
	<title>Ocu-GLO Rx&#0153; | Supporting Canine Eye Health by Animal Necessity</title>
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="assets/css/style.css" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="row header">
	<div class="container">
		<div class="col-xs-12">
			<a href="http://animalnecessity.com/" target="_blank" title="Visit the Animal Necessity website"><img class="logo" src="http://animalnecessity.com/images/logo.png"></a>

			<div class="header-right-side">
				<a href="tel:800-721-1310" title="Call Animal Necessity Today!">800-721-1310</a><br>
				<a href="http://animalnecessity.com/" title="Visit AnimalNecessity.com Today!" target="_blank">animalnecessity.com</a>
			</div>
		</div>
	</div>
</div>

<div class="row hero-div">
	<div class="container">
		<div class="col-lg-5 col-lg-offset-7 col-md-6 col-md-offset-6 col-sm-8 main-cta">
			<div class="hero-box">
				<h1>Discover what makes your dog <span>unique!</span></h1>

				<p class="sub-heading">Learn to master your dog with useful tips and information that will make you a smarter pet owner.</p>
				<ul class="cta-list">
					<li>Breed characteristics and behavior</li>
					<li>Common health issues and concerns</li>
					<li>Nutrition, exercise and grooming tips</li>
					<li>Little known historical facts</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="white-bg">
			<div class="row intro-section">
				<div class="container">
					<div class="col-xs-12">
						<h2 class="content-intro">No two dogs are exactly alike</h2>

						<p class="sub-heading">Find out just how different they are with our online prevention guides</p>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="masonry-container">
							<div class="item w50">
								<div class="hover-wrap">
									<p class="hover-text">Cheerful with a congenial personality, the <strong>Labrador Retriever</strong> loves people, especially children.</p>
								</div>
								<img src="assets/img/wellness-labrador-retriever.jpg" alt="" title="">
							</div>
							<div class="item w50">
								<div class="hover-wrap">
									<p class="hover-text">Muscular with a square jaw, squished-in and wrinkled snout, the <strong>Boxer</strong> is intimidating and lovable at the same time.</p>
								</div>
								<img src="assets/img/wellness-boxer.jpg" alt="" title="">
							</div>
							<div class="item w35">
								<div class="hover-wrap">
									<p class="hover-text">Witty, mischievous with beaucoup smarts, the <strong>Poodle</strong> does not suffer fools gladly.</p>
								</div>
								<img src="assets/img/wellness-poodle.jpg" alt="" title="">
							</div>
							<div class="item w65">
								<div class="hover-wrap">
									<p class="hover-text">Fierce, athletic and loyal, the <strong>German Shepherd</strong> stands out with a unique pose and gets high marks as the premier watch dog.</p>
								</div>
								<img src="assets/img/wellness-shepard.jpg" alt="" title="">
							</div>
							<div class="item w65">
								<div class="hover-wrap">
									<p class="hover-text">Patient, hard-working and forgiving, <strong>"Goldens"</strong> are ideal for search and rescue efforts and for use as service and guide dogs. </p>
								</div>
								<img src="assets/img/wellness-retriever.jpg" alt="" title="">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row e-mail-dog">
				<div class="container">
					<div class="col-md-8 clearfix">
						<div class="email-list">
							<span class="sign-up-headline">Sign Up to Receive a <span class="blue-text">Free Canine Wellness Guide</span></span><br>
							<span class="sign-up-copy"><img class="ocu-glo-email" src="assets/img/ocu-glo-replacer.png"> Rx&#8482 is your dog&#39s prescription for better vison.  An all-natural nutritional supplement formulated with 12 important antioxidants, <img class="ocu-glo-email" src="assets/img/ocu-glo-replacer.png"> Rx&#8482 supports the healthy function of your dog&#39s eyes and helps promote optimal vision.</span>

							<div class="sign-up-form">
								<?php
								//get sign up form
								$newsletter_include = '../landing-pages/newsletter-signup-form.php';
								if(file_exists($newsletter_include)) {
									include( $newsletter_include );
								} else {
									echo '<p class="bg-warning"><strong>NOTICE:</strong> The actual newsletter form will appear once on the live site.</p>';
								}
								 ?>
								<img class="no-spam" src="assets/img/no-spam.png">
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<img class="dog" src="assets/img/dog.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row footer">
	<div class="container">
		<a href="http://animalnecessity.com/" target="_blank" title="Visit the Animal Necessity website"><img class="logo" src="http://animalnecessity.com/images/logo.png"></a>

		<div class="footer-right-side">
			<p class="num"><a href="tel:800-721-1310" title="Call Animal Necessity Today!">800-721-1310</a></p>
			<a href="http://animalnecessity.com/" title="Visit AnimalNecessity.com Today!" target="_blank">animalnecessity.com</a>
		</div>
	</div>
</div>
</body>
</html>
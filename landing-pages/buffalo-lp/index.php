<!DOCTYPE html>
<html>
<head>
	<title>Need A US Address</title>
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
	<link href="assets/css/style.css" type="text/css" rel="stylesheet" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.1/js/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
	<script src="assets/js/jquery.mask.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="row header-row">
	<div class="container">
		<a href="http://www.needausaddress.com/" title="Request more information about Need A US Address opportunities" target="_blank"><img class="logo" src="assets/img/logo.png"></a>
	</div>
</div>

<div class="row hero-div">
	<div class="container">
		<div class="col-xs-4">
			<img class="hero-person" src="assets/img/hero-person.png">
		</div>
		<div class="col-xs-8">
			<div class="text-and-form">
				<div class="loading-img"></div>
				<div class="text-area">
					<img class="form-top-copy" src="assets/img/form-top-copy.png">
					<img class="form-middle-copy" src="assets/img/form-middle-copy.png">
				</div>
				<div class="form-area clearfix">
					<form role="form" class="cta-form" method="post" action="#">
						<div class="left-form-area col-xs-6">
							<div class="form-group">
								<input type="email" name="email" required id="email" class="form-control" placeholder="E-Mail..." tabindex="1">
							</div>
							<div class="form-group">
								<input type="email" name="confirm-email" required id="confirm-email" class="form-control" placeholder="Confirm E-Mail..." tabindex="2">
							</div>
							<img src="assets/img/form-bottom-left-img.png" class="us-canada-flags">
						</div>
						<div class="right-form-area col-xs-6">
							<div class="recaptcha-wrap">
								<?php
								require_once( 'assets/recaptchalib.php' );
								$publickey = "6LcjY_oSAAAAAF0EtCAAfnTuAtA2Ri2_-kceX5nh"; // you got this from the signup page
								echo recaptcha_get_html( $publickey );
								?>
								<div id="captcha-status"></div>
							</div>
							<div class="submit-wrap">
								<input type="submit" class="submit-btn" tabindex="5" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row below-hero-div">
	<div class="container">
		<div class="col-xs-5 ship-your-package">
			<p><span>Ship your packages cross-border,</span> <span>to two of our convienant locations</span></p>
		</div>
		<div class="col-lg-2 shipping-locations">
			<p>Near Peace Bridge:<br>
				266 Elmwood Ave<br>
				Buffalo NY 14222<br>
				Phone: (716) 885-5902</p>
		</div>
		<div class="col-lg-3 shipping-locations">
			<p>Near Lewiston/Queenston Bridge:<br>
				793 Center St,<br>
				Lewiston, NY 14092<br>
				Phone: (716) 405-7116</p>
		</div>
		<div class="col-xs-2 arrow-img">
			<img src="assets/img/arrow.png">
		</div>
	</div>
</div>

<div class="row copy-div">
	<div class="container">
		<div class="col-xs-4">
			<div class="copy-div-left">
				<div class="copy-div-left-info">
					<h2>What we can do for your shipping needs</h2>
					<ul class="check-list">
						<li>With our "package acceptance program" we will accept a delivery for you and hold it until you are able to pick it up.</li>
						<li>We can offer forwarding to Canada via UPS or private courier.</li>
						<li>Our "service" is also available to Canadian residents and businesses.</li>
						<li>You or your business can have a real U.S. street address (not a P.O. Box) for your use.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="copy-div-right">
				<div class="copy-div-right-info">
					<h2>Want To Shop at US Stores Online But Need a US Shipping Address?</h2>

					<p>We have the solution! Being located on the U.S. Canadian border we know first hand the problems consumers outside of the U.S. can have when trying to purchase from U.S. retailers. Many companies will not ship outside the U.S. or when they do the fees involved with shipping, and brokerage fees make the purchase price considerably higher.</p>

					<p>We are located across the US-Canadian Borders</p>

					<p>We started our network of NeedaUSAddress locations to make it easy and convenient for consumers to purchase and ship from retailers wherever they reside.</p>

					<p>Each NeedaUSAddress location prides themselves on offering all consumers to have a safe, convenient and secure U.S. address for their use when they need it.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row social-proof-1-div">
	<div class="container">
		<ul>
			<li><img src="assets/img/we-will.png"></li>
			<li><img src="assets/img/ebay.png"></li>
			<li><img src="assets/img/amazon.png"></li>
			<li><img src="assets/img/best-buy.png"></li>
			<li><img src="assets/img/zappos.png"></li>
			<span class="stretch"></span>
		</ul>
	</div>
</div>


<div class="row circle-img-div">
	<div class="container">
		<div class="circle-img-div-container">
			<img class="circle-img" src="assets/img/circle-img.png">

			<div class="circle-img-div-content clearfix">
				<img class="title-img" src="assets/img/title-img.png">

				<p class="circle-img-copy">All of our NeedaUSAddress locations have the experience and expertise to fulfill your shipping and receiving needs. We offer convenient and secure locations for your deliveries. You'll never have to worry where your packages are going or who is handling your deliveries.<br><br>
					All of our locations are fully insured and have been selected by NeedaUSAddress based on their ability to make your shipping needs their priority and their focus on customer service.<br><br>
					Never again will you have to miss out because a retailer will not ship outside the U.S. or deal with the dreaded brokerage fees.<br><br>
					With our email and text notifications you will know when your items have arrived and where they are from.
					Through NeedaUSAddress site you will have access to all your package information and history. You can also authorize someone else to pick it up, contact us, checkout deals & promotions, browse our other locations and much more.
				</p>
			</div>
		</div>
	</div>
</div>

<div class="row social-proof-2-div">
	<div class="container">
		<ul class="list-inline">
			<li><img src="assets/img/ship-to.png"></li>
			<li><img src="assets/img/rockauto.png"></li>
			<li><img src="assets/img/target.png"></li>
			<li><img src="assets/img/piper.png"></li>
			<li><img src="assets/img/diapers.png"></li>
		</ul>
	</div>
</div>


<div class="row footer-row">
	<div class="container">
		<a href="http://www.needausaddress.com/" title="Request more information about Need A US Address opportunities" target="_blank"><img class="logo" src="assets/img/logo.png"></a>

		<p class="fine-print">
			<span>*</span>Certain restrictions and/or fees may apply. Please see package receiving location for details.<br><br>

			We started our network of NeedaUSAddress locations to make it easy and convenient for consumers to purchase and ship from online retailers wherever they reside. Being located on the U.S. and Canadian border we know first hand the problems consumers outside of the U.S. can have when trying to purchase from online U.S. retailers. Many companies will not ship outside the U.S. or when they do the fees involved with shipping, and brokerage fees make the purchase price considerably higher. Each NeedaUSAddress location prides themselves on offering all consumers a safe, convenient, and secure U.S. address for their use when they need it.
		</p>
	</div>
</div>
</body>
</html>
<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Wing Money</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#b0c025">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#b0c025">

<link rel="stylesheet" href="css/style.css" media="all"/>

<style type="text/css">
	.pace {
		-webkit-pointer-events: none;
		-moz-pointer-events: none;
		-ms-pointer-events: none;
		pointer-events: none;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-ms-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
		background: #ffffff;
	}
	.pace-inactive {
		opacity: 0;
		filter: alpha(opacity=0);
	}
	.pace .pace-progress {
		z-index: 2000;
		position: fixed;
		top: 0;
		right: 100%;
		width: 100%;
		height: 4px;
		background: #00adef;
		
	}
	@media (max-width: 767px) {
		.pace .pace-progress {
		display: none;
		opacity: 0;
		visibility: hidden; }
	}
	.pace-done #main-container { opacity: 1; }
</style>

<!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
<!-- <script src='https://www.google.com/recaptcha/api.js?manual_challenge=false' defer></script>  -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSF9495');</script>
<!-- End Google Tag Manager -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSF9495"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section id="main-container">

	<section id="main-wrapper" class="home-bg">
		<div class="home-header">
			<div class="container">
				<div class="w-logo fl"><img src="images/page_template/logo.png" alt=""></div>
				<!-- <a href="form.php" class="apply-now fr">Watch Video</a> -->
				<div class="wpml-languages enabled">
					<a class="active tooltip" data-tooltip="No translations available for this page">
						<img src="images/en.png" alt="" width="18" height="12">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
					<ul class="wpml-lang-dropdown">
						<li><a href="khmer-home.php"><img src="images/km.png" alt="" width="18" height="12"></a></li>
					</ul>
				</div>

				<div class="clr"></div>
			</div>
		</div>

		<section class="sec-pad null-top null-bot">
			<div class="container">
				<div class="banner-wrap">
					<div class="table-wrap">
						<div class="table-cell">
							<div class="banner-text text-center">
								<!-- <h3 class="animated hiding" data-animation="fadeInUp" data-delay="200">Do you need to...</h3> -->
								<h1 class="animated hiding" data-animation="fadeInUp" data-delay="200">#WingIT <i>to</i> Win MORE!</h1>
								<p class="animated hiding" data-animation="fadeInUp" data-delay="300">Register a Wing Account Rohas and <br> get 15% discount in any of our partner merchants.</p>
								<div class="logo animated hiding" data-animation="fadeInUp" data-delay="400"><a href="" alt=""><img src="images/page_template/wingit.png" alt=""></a></div>

								<div class="text-center animated hiding" data-animation="fadeInUp" data-delay="500">
									<a href="form.php" class="btn click-apply apply-now-button">Apply now</a><br>
									<!-- <a href="#" class="btn btn-ghost">See how it works <i class="fa fa-play" aria-hidden="true"></i></a> -->
								</div>

								<!-- <a href="#layout-2" class="find-out-more">WAIT, I WANT TO KNOW MORE <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php /*
		<section id="layout-1" class="sec-pad null-top">
			<div class="layout-1">
				<div class="container">
					<div class="text-content animated hiding" data-animation="fadeInUp">
						<h3>Get your FREE Wing <br>Account Rohas NOW </h3>
						<h3><strong>#WingIT <i style="font-weight:400;">to</i> Win MORE!</strong></h3>
						<p>Enjoy fast, secure and convenient mobile money services in Cambodia!</p>
						<a href="form.php" class="btn click-apply">CLICK HERE TO APPLY</a>
						<p><a href="#layout-2" class="btn-knowmore">WAIT, I WANT TO KNOW MORE <span class="arrow-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a></p>
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img src="images/page_template/h-graphic1.png" alt="">
						<!-- <div class="cc-circle">
							<h5>Access your account via USSD!</h5>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		*/ ?>

		<section id="layout-2" class="sec-pad">
			<div class="layout-2">
				<div class="container">
					<div class="text-content animated hiding" data-animation="fadeInUp">
						<!-- <span class="arrow-icon block"><i class="fa fa-angle-down" aria-hidden="true"></i></span> -->
						<h3>THERE ARE SO MANY <br>WAYS TO WING IT!</h3>
						<h3><strong>#WingIT <i style="font-weight:400;">to</i> Win MORE!</strong></h3>
						<!-- <div class="logo-inverted">
							<img src="images/page_template/logo-inverted.png" alt="">
						</div> -->
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img src="images/page_template/h-graphic2.png" alt="">
					</div>
					<div class="flexslider-wrapper animated hiding" data-animation="fadeInUp">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="flex-item">
										<h2>Send Money </h2>
										<p><strong>Send Money to friends and family around Cambodia and beyond!</strong></p>
										<p>No matter where you are, you'll be able to send money quickly and safely when you WING IT!</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Phone Top Up</h2>
										<p><strong>Recharge your phone's credits super quick.</strong></p>
										<p>You can load up with your Wing account</p>
										<p><strong>Or</strong></p>
										<p>Through any Wing agent!</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Bills Payment</h2>
										<p><strong>You can make your Bills Payment anywhere using your phone.</strong></p>
										<p>Pay bills with your Wing account</p>
										<p><strong>Or</strong></p>
										<p>With Wing Cash Xpress</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Pay with wing</h2>
										<p><strong>Pay with Wing at restaurants, cinemas, clothes shops, and so much more without cash!</strong></p>
										<p>All you need is a swipe or a tap!</p>
										<p>Instantly pay with Wing at your favorite sellers.</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Online Payment</h2>
										<p><strong>Online Payment lets you conveniently buy a wide variety of products without even leaving your home.</strong></p>
										<p>Wing card holders can use their Wing accounts to buy things online with local companies.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="layout-4" class="sec-pad">
			<div class="layout-2">
				<div class="container">
					<h3>Account Limit <br>&amp; Services Fee</h3>
					<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
						<tr>
							<th style="width:48px;" class="hide-mobile">No.</th>
							<th>Service Type</th>
							<th>Service Name</th>
							<th>Limit/TXN</th>
							<th>Service Fee</th>
						</tr>
						<tr>
							<td rowspan="2" class="text-center hide-mobile"><strong>1</strong></td>
							<td rowspan="2"><strong>Money Transfer</strong></td>
							<td>Wing to Wing</td>
							<td>USD 300</td>
							<td rowspan="8" class="text-center">Follow Standard Fee Charge</td>
						</tr>
						<tr>
							<td>Wing WeiLuy</td>
							<td>USD 100/day</td>
						</tr>
						<tr>
							<td class="text-center hide-mobile"><strong>2</strong></td>
							<td><strong>Airtime Recharge</strong></td>
							<td>Phone Top Up</td>
							<td>USD 3,000</td>
						</tr>
						
						<tr>
							<td rowspan="3" class="text-center hide-mobile"><strong>3</strong></td>
							<td rowspan="3"><strong>Payments</strong></td>
							<td>Bill Payment</td>
							<td>USD 3,000</td>
						</tr>
						<tr>
							<td>Online Payment</td>
							<td>USD 3,000</td>
						</tr>
						<tr>
							<td>Retail Payment</td>
							<td>USD 3,000</td>
						</tr>
						<tr>
							<td rowspan="2" class="text-center hide-mobile"><strong>4</strong></td>
							<td rowspan="2"><strong>Cash In/Out</strong></td>
							<td>Cash In</td>
							<td>Unlimited</td>
						</tr>
						<tr>
							<td>Cash Out</td>
							<td>USD 100/day</td>
						</tr>
						<tr>
							<td class="text-center hide-mobile"><strong>5</strong></td>
							<td colspan="2" ><strong>mWAC Wallet Storage</strong></td>
							<td colspan="2" class="text-center">Unlimited</td>
						</tr>
					</table>
				</div>
			</div>
		</section>

		<section class="sec-pad null-top null-bot">
			<div class="layout-3">
				<div class="layout-3-bg"></div>
				<div class="container">
					<div class="text-content animated hiding" data-animation="fadeInUp">
						<h5>Why wait?</h5>
						<h3>Get your own Wing Account NOW!</h3>
						<h3><strong>#WingIT <i style="font-weight:400;">to</i> Win MORE!</strong></h3>
						<a href="form.php" class="btn click-apply btn-desktop">APPLY FOR FREE!</a>
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img src="images/page_template/h-graphic3.png" alt="">
					</div>
					
					<div class="clr"></div>
					<div class="text-center">
						<a href="form.php" class="btn click-apply btn-mobile">APPLY FOR FREE!</a>
					</div>
				</div>
			</div>
		</section>
	</section>
</section>
<footer>
	<div class="terms-wrap">
		<p class=""><a>&copy; 2017 Wing (Cambodia) Limited Specialised Bank.</a></p>
	</div>
</footer>

<script src="js/needed-scripts.js" ></script>
<script src="js/pace.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<!--<script src="js/ScrollToPlugin.min.js"></script> -->
<script src="js/operators.js" ></script>
<script src="js/materialize.js" ></script>
<script src="js/jquery.appear.js" ></script>
<script src="js/devices.js" ></script>
<script src="js/jquery.flexslider.js" ></script>
<script src="js/select.js" ></script>
<script src="js/plugins.js" ></script>
<script src="js/custom.js" ></script>
<script>
	$('.flexslider').flexslider({
        animation: "slide",
        directionNav: true,
        prevText: "&nbsp;",           //String: Set the text for the "previous" directionNav item
        nextText: "&nbsp;",   
    });
</script>
<!-- <script type="text/javascript">
	function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "js/minified-plugins.js";
		document.body.appendChild(element);
	}
	if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
</script> -->
</body>
</html>
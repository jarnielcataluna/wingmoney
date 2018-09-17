<?php
session_start();

$source = "";
$medium = "";
$campaign = "";

if ($_GET && array_key_exists('utm_source', $_GET)) {
	$source = "?utm_source=".$_GET['utm_source'];
}

if ($_GET && array_key_exists('utm_medium', $_GET)) {
	if ($source == "") {
		$medium = "?utm_medium=".$_GET['utm_medium'];
	} else {
		$medium = "&utm_medium=".$_GET['utm_medium'];
	}
}

if ($_GET && array_key_exists('utm_campaign', $_GET)) {
	if ($source == "" && $medium == "") {
		$campaign = "?utm_campaign=".$_GET['utm_campaign'];
	} else {
		$campaign = "&utm_campaign=".$_GET['utm_campaign'];
	}
}

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
<link rel="stylesheet" href="css/wing-tini.css" media="all"/>

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
})(window,document,'script','dataLayer','GTM-KHPB6M2');</script>
<!-- End Google Tag Manager -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHPB6M2"
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
						<li><a href="index-sendmoney-km.php"><img src="images/km.png" alt="" width="18" height="12"></a></li>
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
								<h1>
									<img src="images/wing-sept/first-image/send.png" alt="">
								</h1>
								<p class="animated hiding" data-animation="fadeInUp" data-delay="300">Send money instantly anytime, anywhere using your phone for as low as ៛400!  </p>
								<br>
								<br>

								<div class="text-center animated hiding" data-animation="fadeInUp" data-delay="500">
									<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply apply-now-button">GET YOUR WING ACCOUNT NOW!</a><br>
									<!-- <a href="#" class="btn btn-ghost">Find out how <br>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</a> -->
								</div>

								<!-- <a href="#layout-2" class="find-out-more">WAIT, I WANT TO KNOW MORE <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		<section id="layout-1" class="sec-pad null-top" style="background: #b2c224;">
			<div class="layout-1">
				<div class="container">
					<div class="text-content animated hiding" data-animation="fadeInUp">
						<h3>Wing gives you flexible options when sending money from your phone to your loved ones anywhere in Cambodia!</h3>
						<!-- <h3><strong>TRANSFER MONEY TINI</strong></h3> -->
						<p>All you need is a Wing account and a Wing Money App! </p>
						<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply">Get YOUR wing account</a>
						<p><a href="#layout-2" class="btn-knowmore">Do all these, TINI! </a></p>
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img class="lazyload" src="images/lazyload.png" data-src="images/wing-sept/second-image/send-money.png" alt="">
						<!-- <img class="lazyload" style="right:0; margin-left: auto; margin-right: auto;" src="images/lazyload.png" data-src="images/temp account.png" alt=""> -->
						<!-- <div class="cc-circle">
							<h5>Access your account via USSD!</h5>
						</div> -->
					</div>
				</div>
			</div>

			<div class="layout-4">
				<div class="container">
					<div class="column-3-wrap">
						<ul>
							<li>
								<figure><img src="images/img-april/sendmoney-1.png" alt=""></figure>
								<p>Send money to your loved ones instantly with a few taps!</p>
							</li>

							<li>
								<figure><img src="images/img-april/sendmoney-2.png" alt=""></figure>
								<p>No need to go to the bank or any remittance centers and fill up any form.</p>
							</li>

							<li>
								<figure><img src="images/img-april/sendmoney-3.png" alt=""></figure>
								<p>Conveniently send money to anyone and let them withdraw money at any 5,000 Wing Cash Xpress in Cambodia</p>
							</li>
						</ul>
						<div class="text-center" style="padding-top: 30px;">
							<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply">Get YOUR wing account</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section id="layout-2" class="sec-pad">
			<div class="layout-2">
				<div class="container">
					<div class="text-content animated hiding" data-animation="fadeInUp">
						<!-- <span class="arrow-icon block"><i class="fa fa-angle-down" aria-hidden="true"></i></span> -->
						
						<!-- <h3><strong>#WingIT <i style="font-weight:400;">to</i> get MORE!</strong></h3> -->
						<!-- <div class="logo-inverted">
							<img src="images/page_template/logo-inverted.png" alt="">
						</div> -->

						<h3 style="text-transform: uppercase;">
							<span style="margin-left: 8px; display: inline-block; vertical-align: middle;"><img src="images/wing-tini/wing-tini.png" style="position: relative; top: -4px;" width="130" alt=""></span>
						Are the things <br> you can do with <span style="margin-left: 8px; display: inline-block; vertical-align: middle;"><img src="images/page_template/logo.png" style="    position: relative; top: -5px;" width="130" alt=""></span></h3>
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img class="lazyload" src="images/lazyload.png" data-src="images/wing-sept/photo-3rd.png" alt="">
					</div>
					<div class="flexslider-wrapper animated hiding" data-animation="fadeInUp">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="flex-item">
										<h2>Send Money </h2>
										<p><strong>Send Money to friends and family around Cambodia!</strong></p>
										<p>No matter where you are, you'll be able to send money quickly and safely using your Wing Account</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Phone Top Up</h2>
										<p><strong>Recharge your phone's credits super quick.</strong></p>
										<p>You can instantly top-up with your Wing account</p>
										<p><strong>Or</strong></p>
										<p>Through any Wing agent!</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Bill Payment</h2>
										<p><strong>You can make your bills payment anytime, anywhere using your mobile phone.</strong></p>
										<p>Pay bills with your Wing account</p>
										<p><strong>Or</strong></p>
										<p>With any Wing agent!</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Pay with wing</h2>
										<p><strong>Wing account lets you conveniently pay with restaurants, cinemas, clothes shop and much more without the need to bring cash or worry about change.</strong></p>
										<p>All you need is a swipe or a tap!</p>
										<p>Instantly pay with Wing at your favorite merchants.</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Online Payment</h2>
										<p><strong>Online Payment lets you conveniently buy a wide variety of products without even leaving your home.</strong></p>
										<p>Purchase with online local companies is just a click away. From movie ticket to license payment you can do it all with Wing Account.</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>Wing Online Mastercard</h2>
										<p><strong>Shop online and offline, book hotels and flights, and transact business internationally.</strong></p>
										<p>Get your very own Mastercard accepted worldwide! <br> It's a self-issuance Mastercard that you can avail quickly.</p>
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
					<h3>Account Limit <!-- <br>&amp; Services Fee --></h3>
					<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
						<tr>
							<th style="width:48px;" class="hide-mobile">No.</th>
							<th>Service Type</th>
							<th>Service Name</th>
							<th>Limit per time</th>
							<th>Limit per day</th>
							<!-- <th>Service Fee</th> -->
						</tr>
						<tr>
							<td rowspan="2" class="text-center hide-mobile"><strong>1</strong></td>
							<td rowspan="2"><strong>Money Transfer</strong></td>
							<td>Wing to Wing</td>
							<td>USD 300</td>
							<td>USD 300</td>
							<!-- <td rowspan="8" class="text-center"><a href="https://www.wingmoney.com/fees/" target="_blank" style="color:#FFFFFF;text-decoration:underline;">Follow Standard Fee Charge</a></td> -->
						</tr>
						<tr>
							<td>Wing WeiLuy</td>
							<td>USD 100</td>
							<td>USD 100</td>
						</tr>
						<tr>
							<td class="text-center hide-mobile"><strong>2</strong></td>
							<td><strong>Airtime Recharge</strong></td>
							<td>Phone Top Up</td>
							<td>USD 50</td>
							<td>USD 3,000</td>
						</tr>
						
						<tr>
							<td rowspan="3" class="text-center hide-mobile"><strong>3</strong></td>
							<td rowspan="3"><strong>Payments</strong></td>
							<td>Bill Payment</td>
							<td>USD 3,000</td>
							<td>USD 3,000</td>
						</tr>
						<tr>
							<td>Online Payment</td>
							<td>USD 3,000</td>
							<td>USD 3,000</td>
						</tr>
						<tr>
							<td>Retail Payment</td>
							<td>USD 3,000</td>
							<td>USD 3,000</td>
						</tr>
						<tr>
							<td rowspan="2" class="text-center hide-mobile"><strong>4</strong></td>
							<td rowspan="2"><strong>Cash In/Out</strong></td>
							<td>Cash In</td>
							<td>USD 6,000</td>
							<td>Unlimited</td>
						</tr>
						<tr>
							<td>Cash Out</td>
							<td>USD 100</td>
							<td>USD 100</td>
						</tr>
						<tr>
							<td class="text-center hide-mobile"><strong>5</strong></td>
							<td colspan="2" ><strong>Wallet Storage</strong></td>
							<td colspan="2" class="text-center">Unlimited</td>
						</tr>
					</table>

					<h3 style="margin-top: 20px;">Fixed Transaction Fees</h3>
					<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;margin-top: 20px;">
						<tr>
							<th>Service</th>
							<th>Fee (KHR)</th>
							<th>Fee (USD)</th>
						</tr>
						<tr>
							<td>Online Payment &amp; Retail Payment</td>
							<td class="bg-white valign" rowspan="4" valign="center">FREE</td>
							<td class="bg-white valign" rowspan="4" valign="center">FREE</td>
						</tr>
						<tr>
							<td>Cash In</td>
						</tr>
						<tr>
							<td>Phone Top Up</td>
						</tr>
						<tr>
							<td>Bill Payment (DIGI, First Finance, KLD, OneTV, PPP, KTH, PPCTV, Manulife, Cambodian Life ...)</td>
						</tr>
						<tr>
							<td>Bill Payment (AEON, Active People's MFI, Mega Leasing Plc, Piphup Thmey MFI)</td>
							<td class="valign">2,000</td>
							<td class="valign">0.5</td>
						</tr>
						<tr>
						<td>Check Balance</td>
							<td class="valign">100</td>
							<td class="valign">0.02</td>
						</tr>
						<tr>
						<td>Change Phone Number</td>
							<td class="valign">1,000</td>
							<td class="valign">0.25</td>
						</tr>
						<tr>
						<td>Change Wallet Currency</td>
							<td class="valign">5,000</td>
							<td class="valign">1.25</td>
						</tr>
					</table>

					<h3 style="margin-top: 20px;">Variable Transaction Fees</h3>
					<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;margin-top: 20px;">
						<tr>
							<th>Service</th>
							<th style="width: 200px;">Amount (KHR)</th>
							<th style="width: 120px; text-align: left;">Fee (KHR)</th>
							<th style="width: 180px;">Amount (USD)</th>
							<th style="width: 120px; text-align: left;">Fee (USD)</th>
						</tr>
						<tr>
							<td class="text-left valign" rowspan="5">Cash Out</td>
							<td>0 - 100,000</td>
							<td>1,100</td>
							<td>0 - 25</td>
							<td>0.28</td>
						</tr>
						<tr>
							<td>100,100 - 200,000</td>
							<td>2,600</td>
							<td>25.01 - 50</td>
							<td>0.65</td>
						</tr>
						<tr>
							<td>200,100 - 400,000</td>
							<td>3,600</td>
							<td>50.01 - 100</td>
							<td>0.90</td>
						</tr>
						<tr>
							<td>400,100 - 2,000,000</td>
							<td>5,200</td>
							<td>100.01 - 500</td>
							<td>1.30</td>
						</tr>
						<tr>
							<td>2,000,100 - 4,000,000</td>
							<td>6,000</td>
							<td>500.01 - 1,000</td>
							<td>1.50</td>
						</tr>
						<tr>
							<td class="text-left valign" rowspan="3">WING-2-WING</td>
							<td>0 - 400,000</td>
							<td>400</td>
							<td>0 - 100</td>
							<td>0.10</td>
						</tr>
						<tr>
							<td>400,100 - 2,000,000</td>
							<td>800</td>
							<td>100.01 - 500</td>
							<td>0.20</td>
						</tr>
						<tr>
							<td>2,000,100 - 4,000,000</td>
							<td>1,200</td>
							<td>500.01 - 1,000</td>
							<td>0.30</td>
						</tr>
						<tr>
							<td class="text-left valign" rowspan="5">Wing Wei Luy</td>
							<td>0 - 100,000</td>
							<td>1,500</td>
							<td>0 - 25</td>
							<td>0.38</td>
						</tr>
						<tr>
							<td>100,100 - 200,000</td>
							<td>3,000</td>
							<td>25.01- 50</td>
							<td>0.75</td>
						</tr>
						<tr>
							<td>200,100 - 400,000</td>
							<td>4,000</td>
							<td>50.01 - 100</td>
							<td>1.00</td>
						</tr>
						<tr>
							<td>400,100 - 2,000,000</td>
							<td>6,000</td>
							<td>100.01 - 500</td>
							<td>1.50</td>
						</tr>
						<tr>
							<td>2,000,100 - 4,000,000</td>
							<td>8,000</td>
							<td>500.01 - 1,000</td>
							<td>2.00</td>
						</tr>

						<tr>
							<td class="text-left valign" rowspan="5">Wei Luy Express</td>
							<td>0 - 100,000</td>
							<td>1,500</td>
							<td>0 - 25</td>
							<td>0.38</td>
						</tr>
						<tr>
							<td>100,100 - 200,000</td>
							<td>3,000</td>
							<td>25.01- 50</td>
							<td>0.75</td>
						</tr>
						<tr>
							<td>200,100 - 400,000</td>
							<td>4,000</td>
							<td>50.01 - 100</td>
							<td>1.00</td>
						</tr>
						<tr>
							<td>400,100 - 2,000,000</td>
							<td>6,000</td>
							<td>100.01 - 500</td>
							<td>1.50</td>
						</tr>
						<tr>
							<td>2,000,100 - 4,000,000</td>
							<td>10,000</td>
							<td>500.01 - 1,000</td>
							<td>2.50</td>
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
						<h3>Get your own<br />Wing Account NOW!</h3>
						<!-- <h3><strong>#WingIT <i style="font-weight:400;">to</i> get MORE!</strong></h3> -->
						<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply btn-desktop">APPLY FOR FREE!</a>
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img class="lazyload" src="images/lazyload.png" data-src="images/wing-tini/h-graphic-3.png" alt="">
					</div>
					
					<div class="clr"></div>
					<div class="text-center">
						<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply btn-mobile">APPLY FOR FREE!</a>
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
<script src="js/lazysizes.min.js" ></script>
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

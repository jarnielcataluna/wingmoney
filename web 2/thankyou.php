<?php session_start(); ?>
<?php if(!isset($_POST['id']) || empty($_POST['id']) || is_null($_POST['id'])){ header('Location: /'); } ?>
<?php
	if (isset($_SESSION['ty'])) :
?>


<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title> Wing Money</title>
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

<!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
</head>
<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MPRR96"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MPRR96');</script>
<!-- End Google Tag Manager -->
<section id="main-container" class="thank-you-page">
	<header>
		<div class="container">
			<div class="logo"><a href="http://www.wingmoney.com/" target="_blank"><img src="images/wing-logo.png" alt=""></a></div>
		</div>
	</header>
	<section id="main-wrapper">
		<div class="section-pad">
			<div class="container">
				<!-- <div class="final-step-wrap">
					<div class="table-wrap">
						<div class="table-content">
							<div class="ty-text text-center">
								<h2>Thank you for applying!</h2>
								<div class="sec-tagline ty-tagline">

									<p>Now you're part of Wing Money. Start exploring Wing Money features and begin your quest to unlock awesome perks!</p>
									<a href="http://www.facebook.com/WINGmoney" target="blank" class="btn btn-orange">Wing It Now!</a>
								</div>
								<div class="download-app">
									<span>Use Wing App Now</span>
									<a href="https://play.google.com/store/apps/details?id=com.wingmoney.wingpay"><img src="images/download-android.png" alt=""></a>
									<a href="https://itunes.apple.com/gb/app/wing-money/id1113286385?mt=8"><img src="images/download-apple.png"></a>
								</div>
								<div class="sec-tagline">
									<p>You will receive a confirmation via the contact information you sent us and follow the next steps in activating your account.</p>
								</div>
								<a href="http://www.wingmoney.com/" class="btn btn-orange">Back to Wing</a>
								<div class="clr"></div>
								<div class="ty-social-media">
									<a href="http://www.facebook.com/WINGmoney" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="https://plus.google.com/109000819204361931521" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									<a href="https://twitter.com/wingcambodia" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="https://www.youtube.com/user/WingCambodia" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
								</div>
								
							</div>
						</div>
					</div>
				</div> -->


				<div class="ty-text text-center">
					<h3 class="co-blue">Thank you for activating your Wing account!</h3>

					<div class="sec-tagline">
						<p style="margin-bottom:8px;"><strong>Your account number was sent via SMS.</strong></p>
						<p>Dial *989# or download the "Wing Money" mobile app to start using your Wing account right now!</p>
					</div>
					<div class="account-number">
						
						<!-- <p id="accountNumber"><?php echo $_POST['accountNum']; ?></p> -->
					</div>
					
					<div class="ty-social-media">
						<h4>Share!</h4>
						<a href="http://www.facebook.com/sharer.php?u=http://devcard.wingmoney.com/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/wing_money/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="http://twitter.com/share?text=An%20Awesome%20Link&url=http://devcard.wingmoney.com/" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
				</div>

				<!-- <div class="other-stuff">
					<h3 class="text-center">Other Stuff You Might Be Interested With:</h3>
					<div class="stuff-col">
						<div class="row">
							<div class="col-md-4 col-xs-6">
								<div class="stuff-wrap">
									<div class="left fl">
										<h5 class="co-blue">Wing Ket Luy</h5>
										<p>Learn more on how you can avail the Wing Ket Luy card</p>
									</div>
									<div class="right fr">
										<div class="s-card-holder">
											<img src="images/wing-ket.png" alt="">
										</div>
										<a href="#" class="btn btn-blue fr">Read More</a>
									</div>
									
								</div>	
							</div>
							<div class="col-md-4 col-xs-6 middle-user">
								<div class="stuff-wrap">
									<img src="images/cell-user-img.jpg" alt="">
								</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<div class="stuff-wrap">
									<p>Read More About:</p>
									<ul class="mainsite-links">
										<li><a href="#">Discount Programs</a></li>
										<li><a href="#">Be an Agent</a></li>
										<li><a href="#">Wing Account Fees</a></li>
										<li><a href="#">Cashing In and Cashing Out</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>

			<div class="promote-mobileapp bg-green">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 text-center">
							<div class="big-app-img">
								<img src="images/wing-mobile-img.png" alt="">
							</div>
							<div class="app-img-info">
								<img style="max-width: 100%;" src="images/wing-mobile-info.png" alt="">
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="p-m-info">
								<h2>No need to wait. You can start using your Wing account now!</h2>
								<p>Manage your Wing account from your smartphone with the Wing mobile app! All of Wing's features at the palm of your hand.</p>
								<div class="download-app-wrap">
									<h4>Download the Wing Money mobile app now!</h4>
									<ul>
										<li>
											<a href="https://play.google.com/store/apps/details?id=com.wingmoney.wingpay" target="blank"><img src="images/app-android.png" alt=""></a>
										</li>
										<li>
											<a href="https://itunes.apple.com/gb/app/wing-money/id1113286385?mt=8" target="blank"><img src="images/app-ios.png" alt=""></a>
										</li>
									</ul>
								</div>
									<ul>
										<li>Send money to other Wing users.</li>
										<li>Top up phone credit</li>
										<li>Pay your bills such as utilities, internet and more</li>
										<li>Generating online payment code.</li>
										<li>Managing your Wing accounts.</li>
										<li>Viewing a Wing Cash Xpress near your current location.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="promote-mobileapp bottom">
					<div class="container text-center">
						<h3 class="sec-title co-blue">Less Hassle, More Features! Start Using Your <br> Wing Account Today!</h3>
						<div class="download-app-wrap">
							<h3>GET IT ON:</h3>
							<ul>
								<li>
									<a href="https://play.google.com/store/apps/details?id=com.wingmoney.wingpay" target="blank"><img src="images/app-android.png" alt=""></a>
								</li>
								<li>
									<a href="https://itunes.apple.com/gb/app/wing-money/id1113286385?mt=8" target="blank"><img src="images/app-ios.png" alt=""></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<footer>
	
	<div class="footer-action">
		<div class="container">
			<h4>Call us at +855 23 999 989 or dial *989# to use Wing.</h4>
		</div>
	</div>

	<div class="widgets_wrapper">
		<div class="container">
			<div class="col-sm-4">
				<h4>Our Company</h4>
				<ul class="menu-company-info">
					<li><a href="https://www.wingmoney.com/about-wing/" target="_blank">About Us</a></li>
					<li><a href="https://www.wingmoney.com/about-wing/work-at-wing/" target="_blank">Careers at Wing</a></li>
					<li><a href="https://www.wingmoney.com/about-wing/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a></li>
					<li><a href="https://www.wingmoney.com/contact-us/" target="_blank">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-sm-4">
				<h4>Contact Us</h4>
				<div class="textwidget">
					<p>Call us on +855 23 999 989</p>
					<p><a href="mailto:care.centre@wingmoney.com">care.centre@wingmoney.com</a></p>
					<p><a href="http://www.wingmoney.com">www.wingmoney.com</a></p>
					<p><a href="http://www.facebook.com/WINGmoney">www.facebook.com/WINGmoney</a></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="footer-logo"><a href="#"><img src="images/footer-logo.png" alt=""></a></div>
				<div class="social-media-item">
					<h4>
						<a href="http://www.facebook.com/WINGmoney" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://plus.google.com/109000819204361931521" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="https://twitter.com/wingcambodia" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://www.youtube.com/user/WingCambodia" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="footer_copy">
		<div class="container">
				<div class="copyright text-center">&copy; 2016 Wing (Cambodia) Limited Specialised Bank.</div>	
		</div>
	</div>
</footer>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script src="js/needed-scripts.js"></script>
<script type="text/javascript">
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

</script>

</body>
</html>
<?php
else:
	$home = 'http://'.$_SERVER['HTTP_HOST'];
	$loc = "Location: ".$home;
	header($loc);
endif;
session_destroy();
?>
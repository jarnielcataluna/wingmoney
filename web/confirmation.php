<?php if(!isset($_POST['id']) || empty($_POST['id']) || is_null($_POST['id'])){ header('Location: /'); } ?>

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

<link rel="stylesheet" href="css/font-awesome.css" media="all"/>
<link rel="stylesheet" href="css/owl.carousel.css" media="all"/>
<link rel="stylesheet" href="css/style.css" media="all"/>

<!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
<script src="js/html5.js"></script>
<script src="js/lib/modernizr-2.8.3.min.js"></script>
<script src="js/pace.min.js"></script>
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
				<div class="final-step-wrap">
					<div class="table-wrap">
						<div class="table-content">
							<div class="final-step text-center">
								<h3 class="co-blue">One final step and you are done!</h3>
								<div class="sec-tagline">
									<p>You will receive a confirmation via the contact information you sent us and follow the next steps in activating your account.</p>
								</div>
								<form class="final-step-form" method="post" action="/exec/validate2.php" >
									<div class="loading-spinner-wrapper" id="app-loader">
								        <span class="loading-spinner">
								          <i class="one"></i>
								          <i class="two"></i>
								          <i class="three"></i>
								        </span>
								    </div>
									<div class="input-wrap">
										<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
										<input type="text" id="verfication-code" name="verification_code"  value="<?php if(isset($_POST['verification_code'])) echo $_POST['verification_code']; ?>" required="required">
										<label for="verfication-code">Enter Verification Code</label>
										<div class="required-tooltip left">
											<p>This confirmation code is required <span>*</span></p>
										</div>
									</div>
									<div class="input-wrap">
										<input type="submit" class="btn btn-orange" name="" value="Submit">
									</div>
								</form>
							</div>
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
<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/jquery-ui.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/parallax.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/devices.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script src="js/script.js"></script>

</body>
</html>

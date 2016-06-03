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
<section id="main-container" class="thank-you-page">
	<header>
		<div class="container">
			<div class="logo"><img src="images/wing-logo.png" alt=""></div>
		</div>
	</header>
	<section id="main-wrapper">
		<div class="section-pad">
			<div class="container">
				<div class="final-step-wrap">
					<div class="final-step text-center">
						<h3 class="co-blue">One final step and you are done!</h3>
						<div class="sec-tagline">
							<p>You will receive a confirmation via the contact information you sent us and follow the next steps in activating your account.</p>
						</div>
						<form class="final-step-form" method="post" action="/exec/validate2.php" novalidate>
							<div class="input-wrap">
								<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
								<input type="text" id="verfication-code" name="verification_code"  required="required">
								<label for="verfication-code">Enter Verification Code</label>
							</div>
							<div class="input-wrap">
								<input type="submit" class="btn btn-orange" name="" value="Submit">
							</div>
						</form>
					</div>
					<div class="ty-text text-center">
						<h2>Thank You for Signing <br> Up with Wing!</h2>
						<div class="sec-tagline">
							<p>You will receive a confirmation via the contact information you sent us and follow the next steps in activating your account.</p>
						</div>
					</div>
				</div>

				<div class="other-stuff">
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
				</div>
			</div>
		</div>
	</section>
</section>
<footer>
	<div class="bg-blue footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="share-this-wrap">
						<label>Share This!</label>
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
				</div>	
				<div class="col-sm-6 text-right">
					<a href="#" class="email-link"><span><img src="images/icon-email.png" alt=""></span>care.centre@wingmoney.com</a>
					<a href="privacy-policy.html" class="privacy-link">Terms &amp; Privacy Policies</a>
				</div>	
			</div>
		</div>
	</div>
</footer>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/jquery-ui.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/devices.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
<script src="js/script.js"></script>
</body>
</html>

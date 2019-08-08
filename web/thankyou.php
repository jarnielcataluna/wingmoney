<?php 

// if (session_status() == PHP_SESSION_ACTIVE) {
// 	session_start();
// }

?>
<?php if(!isset($_POST['id']) || empty($_POST['id']) || is_null($_POST['id'])){ header('Location: /'); } ?>
<?php
	// if (isset($_SESSION['ty'])) :
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

<link rel="stylesheet" href="css/style1.css" media="all"/>

<!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
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

	<section id="main-wrapper" class="thank-bg">

		<header>
			<div class="s-top">
				<!-- <h2>You’ve Just Winged It!</h2> -->
				<h4 style="margin-top:20px;">Thank you for activating your Wing account!</h4>
			</div>
		</header>

		<section class="main-wrapper">
			<div class="container">
				<div class="e-step-box">
					<div class="sec-tagline text-center">
						<h4 style="margin-bottom:8px;"><strong>Your account number was sent via SMS.</strong></h4>
						<p>Dial *989# or download the "Wing Money" mobile app to start using your Wing account right now!</p>
					</div>
				</div>
				
				<section class="other-offer">
					<h4>KNOW MORE ABOUT WING’S <br>AMAZING SERVICES  </h4>
					<div class="text-center">
						<span class="arrow-link"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
					</div>
					<div class="dl-app-wrap">
						<div class="dl-opt-item">

							<?php
								$source = "";
								$medium = "";
								$campaign = "";

								if ($_POST && array_key_exists('source', $_POST)) {
									$source = "?utm_source=".$_POST['source'];
								}

								if ($_POST && array_key_exists('medium', $_POST)) {
									if ($source == "") {
										$medium = "?utm_medium=".$_POST['medium'];
									} else {
										$medium = "&utm_medium=".$_POST['medium'];
									}
								}

								if ($_POST && array_key_exists('campaign', $_POST)) {
									if ($source == "" && $medium == "") {
										$campaign = "?utm_campaign=".$_POST['campaign'];
									} else {
										$campaign = "&utm_campaign=".$_POST['campaign'];
									}
								}
							?>

							<input type="hidden" name="source" id="source" value="<?php if ($_POST && array_key_exists('source', $_POST)): echo $_POST['source']; endif; ?>" />
                            <input type="hidden" name="medium" id="medium" value="<?php if ($_POST && array_key_exists('medium', $_POST)): echo $_POST['medium']; endif; ?>" />
                            <input type="hidden" name="campaign" id="campaign" value="<?php if ($_POST && array_key_exists('campaign', $_POST)): echo $_POST['campaign']; endif; ?>" />

                            <?php
								if ($_COOKIE && array_key_exists('_ga', $_COOKIE)) :
									$gclid = explode('.', $_COOKIE['_ga']);
								endif;
							?>

							<input type="hidden" name="client_id" id="client_id" value="<?php if ($_COOKIE && array_key_exists('_ga', $_COOKIE)) : echo $gclid[2].'.'.$gclid[3]; endif; ?>">

							<div class="dl-img-wrap"><img src="images/page_template/dl-img1.png" alt=""></div>
							<h3>The WING MOBILE APP</h3>
							<p>Install the Wing Money mobile app on your smartphone and access your Wing Account and all Wing Services instantly, anytime and anywhere</p>

							<a href="https://account.wingmoney.com/download.html<?php echo $source.$medium.$campaign; ?>&utm_content=gclid_<?php if ($_COOKIE && array_key_exists('_ga', $_COOKIE)) : echo $gclid[2].'.'.$gclid[3]; endif; ?>" class="dl-app dl-app-ios"><img src="images/page_template/ios.png"></a>
							<a href="https://play.google.com/store/apps/details?id=com.wingmoney.wingpay<?php echo str_replace('?utm_source', '&utm_source', $source).$medium.$campaign; ?>&utm_content=gclid_<?php if ($_COOKIE && array_key_exists('_ga', $_COOKIE)) : echo $gclid[2].'.'.$gclid[3]; endif; ?>" class="dl-app dl-app-android"><img src="images/page_template/dl-app.jpg"></a>

							<br><br>
							<p>or scan the QR Code below <br>to download the app.</p>
							<div id="qrcode"></div>
						</div>
					</div>
				</section>
			</div>

			<section class="latest-promo">
				<div class="container">
					<!-- <h2>Wing Latest News &amp; Promos</h2>
					<div class="news-item-wrap">
						<ul>
							<li>
								<div class="news-item">
									<div class="news-item-wrap"><img src="images/page_template/promo1.jpg" alt=""></div>
									<div class="news-text">
										<h3>Win Bus Ticket Fee to Hometown!</h3>
										<p>Happy Khmer New Year! Now you can win Bus ticket fee to hometown in total 1,000 prize by just transferring money at any Wing Agent nationwide from 01st to 11th April, 2017.</p>
										<a href="#" class="learn-more">Learn More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="news-item">
									<div class="news-item-wrap"><img src="images/page_template/promo1.jpg" alt=""></div>
									<div class="news-text">
										<h3>No fee charge when paying EDC bills with Wing accounts!</h3>
										<p>Phnom Penh: With the commitment to improve the lives of our people through fast, secure and convenient services, </p>
										<a href="#"  class="learn-more">Learn More</a>
									</div>
								</div>
							</li>
						</ul>
					</div> -->
					<div class="ty-footer">
						<a href="https://www.wingmoney.com/">
							<h2>Visit our website</h2>
							<div class="ty-logo">
								<img src="images/page_template/logo.png" alt="">
							</div>
						</a>
					</div>
				</div>
			</section>
		</section>
		
	</section>
</section>
<footer>
</footer>
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script src="js/needed-scripts.js" ></script>
<script src="js/pace.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script src="js/operators.js" ></script>
<script src="js/materialize.js" ></script>
<script src="js/jquery.appear.js" ></script>
<script src="js/devices.js" ></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/select.js" ></script>
<script src="js/plugins.js" ></script>
<script src="js/custom.js" ></script>
<script type="text/javascript" src="js/jquery-qrcode/jquery.qrcode.min.js"></script>

<script>
	var _src = $('#source').val();
	var _med = $('#medium').val();
	var _cam = $('#campaign').val();
	var _gclid = $('#client_id').val();

	var _text = "https://fe5vp.app.goo.gl/?link=https://www.wingmoney.com/home&apn=com.wingmoney.wingpay&afl=https://play.google.com/store/apps/details?id%3Dcom.wingmoney.wingpay%26referrer%3Dutm_source%253D"+_src+"%2526utm_medium%253D"+_med+"%2526utm_campaign%253D"+_cam+"%2526utm_content%253Dgclid_"+_gclid+"&isi=1113286385&ibi=com.wingmoney.app&ifl=https://account.wingmoney.com/download.html?utm_source%3Dwebsite%26utm_medium%3Dbanner%26utm_campaign%3Dweb_to_mobile_app_install&utm_campaign="+_cam+"&utm_medium="+_med+"&utm_source="+_src+"&utm_content=gclid_"+_gclid+"";

	makeQrCode(_text);
	function makeQrCode(string)
	{
		$('#qrcode').qrcode({
			text: string,
			width : 300,
			height : 300
		});
	}

</script>

</body>
</html>
<?php
// else:
// 	$home = 'http://'.$_SERVER['HTTP_HOST'];
// 	$loc = "Location: ".$home;

// 	if (headers_sent()) {
// 	    die('If you are not redirected after a few seconds, please click on <a href="'.$home.'">this link</a>.');
// 	}
// 	else{
// 	    exit(header($loc));
// 	}
// endif;
// session_destroy();
?>

<?php
// ini_set('display_errors', 1);

// if (session_status() == PHP_SESSION_ACTIVE) {
// 	session_start();
// }

// if (isset($_SESSION['confirm'])) :


function fnDecrypt($sValue, $sSecretKey)
{
	return rtrim(
		mcrypt_decrypt(
			MCRYPT_RIJNDAEL_256,
			$sSecretKey,
			base64_decode($sValue),
			MCRYPT_MODE_ECB,
			mcrypt_create_iv(
				mcrypt_get_iv_size(
					MCRYPT_RIJNDAEL_256,
					MCRYPT_MODE_ECB
				),
				MCRYPT_RAND
			)
		), "\0"
	);
}

if(isset($_GET['secret'])){
	$secret = 'cHvp0l5s43v3r';

	$decrypt = fnDecrypt($_GET['secret'], $secret);
	$data = explode($decrypt, '-');
	$_POST['id'] = $data[0];
	$_POST['verification_code'] = $data[1];
}


if(!isset($_POST['id']) || empty($_POST['id']) || is_null($_POST['id'])){ header('Location: /'); }

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

	<section id="main-wrapper" class="thank-bg">

		<header>
			<div class="s-top">
				<h2>នៅបន្តិចទៀត គណនីរបស់អ្នកនឹងរួចរាល់!</h2>
				<h4>លេខ PIN ជាបណ្ណោះអាសន្នបានផ្ញើទៅទូរស័ព្ទដៃរបស់អ្នក។.</h4>
			</div>
		</header>

		<div class="number-exist-wrap">
            <div class="container">
                <p>You have reached the maximum number of attempts to request for resending of PIN.</p>
            </div>
        </div>

		<section class="main-wrapper">
			<div class="container">
				<div class="e-step-box">
					<div class="final-step text-center">
						<form class="final-step-form" method="post" novalidate action="/exec/validate2.php" >
							
						    <div class="verification">
						    	<p>សូមបញ្ចូលលេខកូដដែលបានផ្ញើទៅទូរស័ព្ទរបស់អ្នកដើម្បីបញ្ជាក់៖</p>
							    <p class="resend-info">លេខ PIN បានបញ្ជូលម្តងទៀតដោយជោគជ័យ។</p>
							    <div class="f-sms-wrap">
									<div class="input-wrap no-b-margin">
										<input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
										<input type="password" id="verfication-code" name="verification_code" maxLength="4" value="<?php if(isset($_POST['verification_code'])) echo $_POST['verification_code']; ?>" required="required" onkeypress="return event.charCode >= 48 && event.charCode <= 57">

										<label for="verfication-code">បញ្ចូលលេខ PIN ដើម្បីបញ្ជាក់</label>

										<div class="required-tooltip left">
											<p>តម្រូវឲ្យបំពេញលេខកូដ PIN ជាបណ្តោះអាសន្ន <span>*</span></p>
										</div>
									</div>
									<input type="submit" class="btn btn-orange btn-verfication-code" name="" value="ផ្ទៀង​ផ្ទាត់" id="verifySms" style="margin-top: 15px;">
								</div>
						    </div>

							<div class="create-pin-account" style="display: none;">

								<!-- <h3 class="co-blue">Create your Wing account PIN</h3> -->
								<!-- <div class="loading-spinner-wrapper" id="app-loader">
							        <span class="loading-spinner">
							          <i class="one"></i>
							          <i class="two"></i>
							          <i class="three"></i>
							        </span>
							    </div> -->
							    <input type="hidden" name="language" id="language" value="kh" />
								<div class="input-wrap">
									<input type="password" name="" value="" id="pin-id" minLength="4" maxLength="4" required="required" autocomplete="new-password"/>
									<label for="pin-id">ជ្រើសយកលេខកូដ PIN 4 ខ្ទង់របស់អ្នក</label>
									<div class="required-tooltip left">
										<p>តម្រូវឲ្យបំពេញនៅកន្លែងនេះ <span>*</span></p>
									</div>
								</div>
								<div class="input-wrap">
									<input type="password" name="" value="" id="confirm-pin-id" minLength="4" maxLength="4" required="required" autocomplete="new-password"/>
									<label for="confirm-pin-id">បញ្ជាក់លេខកូដ PIN 4 ខ្ទង់របស់អ្នក</label>
									<div class="required-tooltip left">
										<p>លេខកូដ PIN មិនត្រូវគ្នា<span>*</span></p>
									</div>
								</div>
								<div class="input-wrap btn-wrapper">
									<input type="submit" class="btn btn-green" name="" value="បង្កើតគណនី" id="createAccount">
								</div>
								
								<!-- <div class="input-wrap">
									<input type="submit" class="btn btn-orange" name="" value="Submit">
								</div> -->
							</div>

							<div class="loading-spinner-wrapper" id="app-loader">
                                <span class="loading-spinner">
                                  <i class="one"></i>
                                  <i class="two"></i>
                                  <i class="three"></i>
                                </span>
                            </div>
							<p class="resend-code">មិនទាន់ទទួលបានលេខកូដ PIN មែនទេ? <a href="#" id="resendCode">ផ្ញើលេខកូដ PIN ម្តងទៀត</a></p>
							<p id="timer"></p>
						</form>
					</div>
				</div>
			</div>
		</section>
	</section>
</section>



<footer>
	<!-- 
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
	</div> -->
</footer>
<!-- <script src="js/needed-scripts.js"></script> -->

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
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script src="js/firebase-custom.js"></script>

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

<?php
// else :
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
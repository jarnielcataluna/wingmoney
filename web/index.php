<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<style type="text/css">
	header { background: rgba(255, 255, 255, 0.9); width: 100%; position: fixed; z-index: 9999; -webkit-backface-visibility: hidden; height: 60px; -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1); box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1); background: rgba(176, 192, 36, 0.8) none repeat scroll 0 0; }
	header .logo { xdisplay: none; width: auto; margin: 0 30px 0 20px; padding: 0;}
	header .logo a { margin-left: 25px; display: block; padding: 5px 0; height: 50px; line-height: 50px; }
	header .logo a img { max-height: 35px; width: auto !important; }
	.menu { float: right; text-align: right; }
	.menu ul { float: left; }
	.menu ul:after { content: ''; display: block; float: none; clear: both; }
	.menu ul li { float: left; position: relative;}
	.menu ul li:first-child { padding-left: 0; }
	.menu ul li a { display: block; color: #ffffff; position: relative; padding: 20px 15px; font-size: 15px; font-weight: bold; }
	.menu ul li a .glyphicon { font-size: 13px; }
	.menu ul li a:hover { color: #0098d7;}
	.menu ul li a.menu-highlighted { color: #ffffff !important; }
	.menu ul li a.menu-highlighted:hover { color: #ffffff !important; }
	.menu ul li a.menu-highlighted:hover:before { background: #f89f1b; }
	.menu ul li a.menu-highlighted:before { content: ''; display: block; bottom: 0px; width: 100%; left: 0; position: absolute; height: 100%; background: #f15a29; opacity: 1; -webkit-transition: all, 0.3s, cubic-bezier(0.645, 0.045, 0.355, 1); -moz-transition: all, 0.3s, cubic-bezier(0.645, 0.045, 0.355, 1); -ms-transition: all, 0.3s, cubic-bezier(0.645, 0.045, 0.355, 1); -o-transition: all, 0.3s, cubic-bezier(0.645, 0.045, 0.355, 1); transition: all, 0.3s, cubic-bezier(0.645, 0.045, 0.355, 1); -webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); z-index: -1; }
	.menu ul li.active {}
	.menu ul li.active > a { color: #0098d7;}
	.banner-wrap { height: 650px; position: relative; overflow: visible; width: 100%; z-index: 77; }
	.banner-wrap.jq-section { background: transparent; }
	.banner-wrap .container { position: relative; }
	.banner-wrap .parallax-window { height: 650px; background: transparent; position: relative; width: 100%; }
	.banner-wrap h1 { color: #ffffff; text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); margin-top: 60px; text-transform: uppercase;}
	.banner-wrap h1 span { display: inline-block; line-height: 54px; padding: 0px 5px; background: rgba(0, 174, 239, 0.4); letter-spacing: -1px; }

	


</style>
<link rel="stylesheet" href="css/style.css" media="all"/>
<link rel="stylesheet" href="css/jquery.realperson.css" media="all"/>

<!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
<!-- <script src='https://www.google.com/recaptcha/api.js?manual_challenge=false' defer></script>  -->
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
<section id="main-container">
	<header>
		<div class="column" style="width:98%; margin: 0 auto;">
			<div class="logo fl"><a href="http://www.wingmoney.com/" target="_blank"><img src="images/Wing-Logo-10.png" alt=""></a></div>
			<div class="slogan"><p>Cambodia's leading mobile <br>banking services provider</p></div>
			<div class="header-hamburger"><span></span></div>
			
			<div class="menu">
				<ul>
					<li><a href="http://www.wingmoney.com/" class="wing-btn" target="_blank"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></a></li>
					<li><a href="#features">Wing Account</a></li>
					<li><a href="#wing-services">Wing Services</a>
						<ul>
							<li><a href="#money-transfer-wrap">Money Transfer</a></li>
							<li><a href="#phone-topup">Phone Top Up</a></li>
							<li><a href="#bill-payment-wrap">Bills Payment</a></li>
							<li><a href="#pay-online">Online Payment</a></li>
							<li><a href="#cash-in-out">Cash In &amp; Cash Out</a></li>
						</ul>
					</li>
					
					<li><a href="#how-to-sign" class="menu-highlighted">How to Sign Up</a></li>
					<li><a href="#wing-form-wrap">Register Now</a></li>
					
				</ul>
				<div class="wpml-languages enabled">
					<a class="active tooltip" data-tooltip="No translations available for this page">
						<img src="images/en.png" alt="" width="18" height="12">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
					<ul class="wpml-lang-dropdown">
						<li><a href=""><img src="images/km.png" alt="" width="18" height="12"></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</header>
	<section id="main-wrapper">
		
		<section class="banner-wrap jq-section">
			<div class="parallax-window" data-parallax="scroll" data-image-src="images/banner4.jpg" data-bleed="10" alt=""></div>
			<div class="table-wrap">
				<div class="table-content">
					<div class="container">
						<div class="fl">
							<!-- <div class="logo"><img src="images/wing-logo.png" alt=""></div> -->
							<h1><span>Register for your free Wing</span><br><span>account now to enjoy fast,</span><br><span> secure and convenient</span> <br> <span> mobile money services </span> <br> <span>Cambodia!</span></h1>
						</div>
						<div id="wing-form-wrap"></div>
					</div>
				</div>
			</div>
			<div class="h-s-cursor">
				<a href="#how-to-sign">
					<span>How to Sign Up</span>
					<div class="h-s-c-arrow one bp-rel"></div>
					<div class="clr"></div>
					<div class="h-s-c-arrow two bp-rel"></div>
				</a>
			</div>
		</section>

		<section id="features" class="features bg-green section-pad jq-section">
			<div class="container">
				<div class="wing-form-wrap">
							
					<h3>Get your Free Wing Account with 3 simple steps:</h3>
					<p>1. Sign up with Facebook or fill up this form. <br> 2. Enter the verification code sent via SMS. <br> 3. Create your Wing account PIN and you will get your Wing account number via a SMS.</p>
					<div class="signup-fb">
						<a href="#" class="waves-effect" id="useFacebook"><i class="fa fa-facebook" aria-hidden="true"></i><span>Register using Facebook</span></a>
					</div>
					<?php include 'form.php' ?>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-7">
						<h2 class="sec-title"> What can I do with my Wing account?</h2>
						<div class="feature-tag">
							<p>Send money to your family and friends with a Wing account in a faster, more secure and more convenient way!</p>
							<p>Easily top up you phone credit anytime, anywhere!</p>
							<p>Pay the bills at the comfort of your own home! <br> Buy stuff online such as movie tickets, bus tickets clothes, and more with Wing's online partners!</p>
						</div>
						<div id="wing-services">
							<ul class="">

								<li><a class="icon-small-send" href="#money-transfer-wrap">Money Transfer</a></li>
								<li><a class="icon-small-top" href="#phone-topup">Phone Top Up</a></li>
								<li><a class="icon-small-bill" href="#bill-payment-wrap">Bills Payment</a></li>
								<li><a class="icon-small-online" href="#pay-online">Online Payment</a></li>
								<li><a class="icon-small-cash" href="#cash-in-out">Cash In &amp; Cash Out</a></li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<section id="money-transfer-wrap" class="wing-account section-pad jq-section">
			<div class="container">
				<div class="vimg-holder fl animated hiding" data-animation="zoomIn">
					<img src="images/icon-sendmoney.png" alt="">
				</div>
				<div class="vtext-content fr">
					<h2 class="sec-title text-right animated hiding" data-animation="fadeInUp">Send money to your family and friends everywhere in Cambodia!</h2>
					<div class="sec-tagline text-right animated hiding" data-animation="fadeInUp">
						<p>Send money to another Wing account <br>and experience the easiest, most secure and cheapest money <br>transfer service in Cambodia! Send and received money real-time!</p>
					</div>
					<div class="text-right">
						<a href="https://www.wingmoney.com/personal/transfer-money/" target="_blank" class="btn btn-green btn-small"> Learn More</a>
					</div>
				</div>
				
				<!-- <div class="wing-benifits">
					<ul>
						<li class="animated hiding" data-animation="fadeInUp">
							<div class="wing-benifits-wrap">
								<div class="wing-benifits-img">
									<img src="images/wing-icn-1.png" alt="">
								</div>
								<div class="wing-benifits-info">
									<h3>Get Discounts in <br>Partner Stores</h3>
									<p>Get up to 50% discount on our XX number of store partners nationwide.</p>
								</div>
							</div>
						</li>
						<li class="animated hiding" data-animation="fadeInUp">
							<div class="wing-benifits-wrap">
								<div class="wing-benifits-img">
									<img src="images/wing-icn-2.png" alt="">
								</div>
								<div class="wing-benifits-info">
									<h3>Rebate for Phone <br>Credit Top Up</h3>
									<p>Get automatic 5% rebate when you top up phone credits using your Wing Account.</p>
								</div>
							</div>
						</li>
						<li class="animated hiding" data-animation="fadeInUp">
							<div class="wing-benifits-wrap">
								<div class="wing-benifits-img">
									<img src="images/wing-icn-3.png" alt="">
								</div>
								<div class="wing-benifits-info">
									<h3>Pay Online <br>Local Merchants</h3>
									<p>No credit card? No problem. Pay online using your Wing account hassle free.</p>
								</div>
							</div>
						</li>
					</ul>
				</div> -->
			</div>
		</section>

		<section id="phone-topup" class="bg-blue jq-section">
			<div class="enjoy-discount">
				<div class="container">
					<div class="vimg-holder fr animated hiding" data-animation="zoomIn">
						<img src="images/icon-topup.png" alt="">
					</div>
					<div class="vtext-content fl">
						<h2 class="sec-title text-left animated hiding" data-animation="fadeInUp">Can’t make a call or send<br> SMS? Top up your phone<br> anytime, anywhere!</h2>
						<div class="sec-tagline text-left animated hiding" data-animation="fadeInUp">
							<p>You can easily top up your phone credit anytime, anywhere in Cambodia.</p>
						</div>
						<div class="text-left">
							<a href="https://www.wingmoney.com/personal/phone-top-up/" target="_blank" class="btn btn-green btn-small"> Learn More</a>
						</div>
					</div>
					
					<!-- <div class="row">
						<div class="col-md-8 col-sm-12 ed-text animated hiding" data-animation="fadeInUp">
							<h2 class="sec-title">Enjoy Discounts From <br>Our Store Partners</h2>
							<p>Get exclusive discounts from your favorite stores with your Wing account. Simply show your Wing account confirmation text to our partner merchants to enjoy fine dining, shopping sprees, and so much more at discounted prices.</p>
						</div>
					</div>
					<img class="dis-model animated hiding" data-animation="fadeInUp" src="images/discount-model.jpg" alt=""> -->
				</div>
			</div>
		</section>

		<section id="bill-payment-wrap" class="paybill jq-section">
			<div class="container">
				<div class="vtext-content fr">
					<h2 class="sec-title text-right animated hiding" data-animation="fadeInUp">Pay your bills from<br> the comfort of your<br> own home!</h2>
					<div class="sec-tagline text-right animated hiding" data-animation="fadeInUp">
						<p>Your Wing account provides bills payment services to allow anyone to pay their bills easily through their mobile phones! We have partnered with more than 65 billers including Utilities, Microfinance, Phone Distributors, and more.</p>
					</div>
					<div class="clr"></div>
					<div class="text-right">
						<a href="https://www.wingmoney.com/personal/bill-payment/" target="_blank" class="btn btn-green btn-small"> Learn More</a>
					</div>
				</div>
			</div>
		</section>
		<section id="pay-online" class="section-pad jq-section">
			<div class="container">
				<h2 class="sec-title text-center animated hiding" data-animation="fadeInUp">Always Busy? <br>Make Effortless  Online <br>  Purchases with Your<br> Wing Account</h2>
				<div class="sec-tagline text-center animated hiding" data-animation="fadeInUp">
					<p>Your time is important, so make your life easier by doing your shopping online with your Wing Account. With a few clicks, you can pay for movie tickets or your next travel booking in a short time, all online!</p>

				</div>
				<div class="pay-online-partners text-center animated hiding" data-animation="fadeInUp">
					<h3>Our Online Payment Partners:</h3>
					<ul>
						<li><img src="images/pp1.jpg" alt=""></li>
						<li><img src="images/pp2.jpg" alt=""></li>
						<li><img src="images/pp3.jpg" alt=""></li>
						<li><img src="images/pp4.jpg" alt=""></li>
						<li><img src="images/pp5.jpg" alt=""></li>
						<li><img src="images/pp6.jpg" alt=""></li>
						<li><img src="images/pp7.jpg" alt=""></li>
						<li><img src="images/pp8.jpg" alt=""></li>
						<li><img src="images/pp9.jpg" alt=""></li>
						<li><img src="images/pp10.jpg" alt=""></li>
						<li><img src="images/pp12.jpg" alt=""></li>
						<li><img src="images/pp13.jpg" alt=""></li>
					</ul>
				</div>
				<div class="text-center">
					<a href="https://www.wingmoney.com/personal/online-payment/" target="_blank" class="btn btn-green btn-small"> Learn More</a>
				</div>
			</div>
		</section>

		<section id="cash-in-out" class="section-pad jq-section bg-green">
			<div class="container">
				<div class="vimg-holder fr animated hiding" data-animation="zoomIn">
					<img src="images/icon-cashin.png" alt="">
				</div>
				<div class="vtext-content fl animated hiding" data-animation="fadeInUp">
					<h2 class="sec-title">Cash in and cash out easily when needed!</h2>
					<p>You can cash in and cash out your money easily at any Wing <br>Cash Xpress located in all provinces in Cambodia.</p>
					<a href="WCX-List-by-District-VB.pdf" target="_blank" class="btn btn-blue btn-small"> LEARN MORE</a>
				</div>
				
			</div>
		</section>

		<section id="how-to-sign" class="how-to-sign section-pad jq-section">
			<div class="container">
				<h2 class="sec-title text-center animated hiding" data-animation="fadeInUp">How to Sign Up Online</h2>
				<div class="step-signup">
					<div class="owl-carousel owl-theme animated hiding" data-animation="fadeInUp">
						<div class="step">
							<span class="ss-num"><i>1</i></span>
							<div class="ss-wrap">
								<img src="images/step1.png" alt="">
							</div>
							<div class="wing-benifits-info">
								<h3>Register Online</h3>
								<p>Fill up the form <br>you'll find here.</p>
							</div>
						</div>
						<div class="step">
							<span class="ss-num"><i>2</i></span>
							<div class="ss-wrap">
								<img src="images/step2.png" alt="">
							</div>
							<div class="wing-benifits-info">
								<h3>Receive <br>SMS Notification</h3>
								<p>A temporary PIN <br>will be sent to you via SMS</p>
							</div>
						</div>
						<div class="step">
							<span class="ss-num"><i>3</i></span>
							<div class="ss-wrap">
								<img src="images/step3.png" alt="">
							</div>
							<div class="wing-benifits-info">
								<h3>Finalize <br> Transaction</h3>
								<p>Create your own PIN to access your Wing account</p>
							</div>
						</div>
						<div class="step">
							<span class="ss-num no-border"><i>4</i></span>
							<div class="ss-wrap">
								<img src="images/step4.jpg" alt="">
							</div>
							<div class="wing-benifits-info">
								<h3>Start Using Your <br>Wing Account</h3>
								<p>Download the "Wing Money" mobile app from the App Store for iOS devices or Google Play Store for Andriod devices or USSD (*989#) to use your Wing account.</p>
							</div>
						</div>
					</div>
					
				</div>

				<h2 class="sec-title text-center animated hiding" data-animation="fadeInUp">Activate And Get Your Wing <br>Account Online</h2>
				<div class="sec-tagline text-center animated hiding" data-animation="fadeInUp">
					<p>Your Wing Account can be used either as Wing Card or the Wing App. The choice is yours! All the functions, perks and benefits of having a Wing Account is available to both, it’s all a matter of choice.</p>
				</div>
				<div class="card-and-app">
					<div class="wing-app-box compare-box">
						<div class="wing-box-img">
							<img src="images/wing-mobile-img.png" alt="">
						</div>
						<div class="wing-app-info">
							<h3>Streamline your banking by simply downloading the Wing App to access all of Wing's features.</h3>
							<ul>
								<li> Send money to other Wing users.</li>
								<li>Top up your mobile phones—or even your friend’s!</li>
								<li>Pay your utility and internet bills or donate money to your favoirte charities.</li>
								<li>Generating online payment code.</li>
								<li>Managing your Wing Accounts.</li>
								<li>Viewing a Wing Cash Xpress outlet near your current location.</li>
								<li>Be in full control of your Wing Account!</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="#wing-form-wrap" class="btn btn-orange btn-signup animated hiding" data-animation="fadeInUp">Sign Up Now!</a>
				</div>
			</div>
		</section>
		
		<section id="wing-mobile" class="section-pad jq-section">
			<div class="container">
				<h2 class="sec-title text-center animated hiding" data-animation="fadeInUp">Your Wing Mobile <br>Account</h2>
				<div class="sec-tagline text-center animated hiding" data-animation="fadeInUp">Application and usage of your Wing Money account is easy. It’s all done through your mobile phone. Select one of the items below to learn more about how easy it ease to do transactions using your mobile phone.</div>
				<div class="wing-mobile-menu animated hiding" data-animation="fadeInUp">
					<ul>
						<li class="active"><a href="#money-transfer">Money Transfer</a></li>
						<li><a href="#online-payment">Online Payments</a></li>
						<li><a href="#bill-payment">Bills Payments</a></li>
						<li><a href="#top-up">Phone Top Up</a></li>
					</ul>
				</div>
				<div class="wm-tabs animated hiding" data-animation="fadeInUp">
					<div class="wm-content" id="money-transfer" style="display: block;">
						<div class="row">
							<div class="col-sm-6">
								<div class="wm-content-text">
								<h4>Wing-2-Wing <span>(Account to Account)</span> </h4>
								<p>How to do Wing-2-Wing via your Phone:</p>
								<ul>
									<li>Dial *989#, press send</li>
									<li>Enter "Wing Account Number", press send</li>
									<li>Enter "2. WING-2-WING", press send</li>
									<li>Select "1. Enter Wing #", press send</li>
									<li>Enter "Receiver’s Wing Account #", press send</li>
									<li>Enter amount (USD/KHR), press send</li>
									<li>Enter "PIN", press send</li>
								</ul>
								<p><em>When done, both sender and receiver will instantly receive a notification by SMS.</em></p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="wm-content-text">
									<h4>Wing Wei Luy <span>(Account to Non-Account)</span></h4>
									<p>How to do Wing Wei Luy:</p>
									<ul>
										<li>Dial *989#</li>
										<li>Enter your WING number xxxxxxxx</li>
										<li>Enter 4 [WING WEI LUY]</li>
										<li>Enter amount xxxx</li>
										<li>Enter Recipient Phone #</li>
										<li>Enter PIN xxxx</li>
										<li>Communicate your passcode to the receiver (by phone/SMS)</li>
									</ul>
									<p><em>When done, the receiver will instantly be able to withdraw at any Wing Cash Xpress.</em></p>
								</div>
							</div>
						</div>
					</div>
					<div class="wm-content" id="bill-payment">
						<div class="row">
							<div class="col-sm-6">
								<div class="wm-content-text">
									<h4>How to pay bills via Wing account:</h4>
									<ul>
										<li>Dial *989#,press send</li>
										<li>Enter "Wing account number", press send</li>
										<li>Enter "5. Bill Payment", press send</li>
										<li>Select the Company Type (i.e: select 2. Utilities for EDC Bill or Water Bills, Select 3. Finance for AEON bill, First Finance…etc), Press send</li>
										<li>Choose the Company’s Name (i.e EDC, AEON, first Finance, Manulife, Digi…etc), press send</li>
										<li>Enter Unique ID (i.e: invoice #, Customer ID, account Number…etc), press send</li>
										<li>Enter Amount to pay</li>
										<li>Enter "PIN", press Send</li>
										<li>Success.</li>
									</ul>
									<p><em>You will receive an SMS notification for a successful bill payment.</em></p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="wm-content-text">
									<h4>How to pay bills at Wing Cash Xpress:</h4>
									<ul>
										<li>Bring your bills or invoices to any nearest Wing Cash Xpress (WCX) outlet.</li>
										<li>Tell WCX that you want to pay the bills</li>
										<li>Write down your bill numbers/invoice numbers, amount, and your phone number</li>
										<li>Give money to Wing Cash Xpress (WCX)s</li>
										<li>Get the receipt from Wing Cash Xpress (WCX)</li>
										<li>Check your SMS (an SMS will be sent for transaction confirmation)</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="wm-content" id="online-payment">
						<div class="row">
							<div class="col-sm-6">
								<div class="wm-content-text">
									<h4>How to do online payment</h4>
									<ul>
										<li>Enter “Website address” (i.e: www. L192.com, A-Y Collection, i-quick, Legend, shop 168…etc)</li>
										<li>Register your account on that website if required</li>
										<li>Buy products/movie tickets that you want</li>
										<li>Choose “WING” as payment method</li>
										<li>Choose “Wing” if you use Wing Card</li>
										<li>Enter “Wing account number” and “Payment Code”</li>
										<li>Select “Confirm” to make the payment</li>
										<li>Online payment success</li>
									</ul>
									<p><em>When done, both sender and receiver will instantly receive a notification by SMS.</em></p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="wm-content-text">
									<h4>How to generate payment code by phone:</h4>
									<ul>
										<li>Dial *989#,press send</li>
										<li>Enter “Wing account number”, press send</li>
										<li>Enter “8. Payment”, press send</li>
										<li>Enter “PIN”, press Send</li>
										<li>6-digit payment code is generated. </li>
									</ul>
									<p><em>You can use it for payment online</em></p>
								</div>
							</div>
						</div>
					</div>
					<div class="wm-content" id="top-up">
						<div class="row">
							<div class="col-sm-6">
								<div class="wm-content-text">

									<h4>Phone top up through Wing account</span> </h4>
									<p>How to top up your phone balance via Wing account:</p>
									<ul>
										<li>Dial *989# ,press send</li>
										<li>Enter your WING account number: xxxxxxxx ,press send</li>
										<li>Press 3 to choose Phone Top Up</li>
										<li>Enter the phone number ,press send</li>
										<li>Choose the amount ,press send</li>
										<li>Enter your PIN code: xxxx (SMS notification)</li>
										
									</ul>
									<p><em>And the top-up is done! The receiver of the top-up will instantly receive a notification by SMS.</em></p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="wm-content-text">
									<h4>Other Top Up</h4>
									<p>Other Services:</p>
									<ul>
										<li>One TV (Cable TV credit)</li>
										<li>Y5Net (Internet service)</li>
										<li>Osja game (Credit for playing game)</li>
										<li>Samnang (buy credit for buying online)</li>
										<li>MKS (Internet service)</li>
										<li>I top (internet service)</li>
									</ul>
									<p><em>When done, the receiver will instantly be able to withdraw at any Wing Cash Xpress.</em></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
	</section>
</section>
<footer>
	<a href="#" class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
	
	<div class="footer-action">
		<div class="container">
			<h4>Call us at +855 23 999 989 for more information! <br>To use your Wing account, dial *989# or download the Wing Money app.</h4>
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

<div class="fill-up-correctly">
    <p>Please fill up the form correctly.</p>
</div>

<script src="js/needed-scripts.js" ></script>
<script src="js/operators.js" ></script>
<script src="js/materialize.js" ></script>
<script src="js/jquery.appear.js" ></script>
<script src="js/devices.js" ></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/select.js" ></script>
<script src="js/plugins.js" ></script>
<script src="js/custom.js" ></script>
<script src="js/script.js" ></script>
<script src="js/facebook-custom.js" ></script>
<!--<script type="text/javascript">
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
</script>-->
</body>
</html>

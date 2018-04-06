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
								<h1 class="animated hiding" data-animation="fadeInUp" data-delay="200"><img src="images/wing-tini/wing-tini.png" alt=""></h1>
								<p class="animated hiding" data-animation="fadeInUp" data-delay="300">បញ្ចូលលុយទូរស័ព្ទរបស់អ្នក ឬទូរស័ព្ទរបស់មនុស្សជាទីស្រលាញ់ គ្រប់បណ្តាញកាន់តែងាយស្រួល។  </p>
								<br>
								<br>

								<div class="text-center animated hiding" data-animation="fadeInUp" data-delay="500">
									<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply apply-now-button">បើកគណនីវីងរបស់អ្នកឥឡូវនេះ!</a><br>
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
						<h3>ភ្ជាប់ទំនាក់ទំនង 24 ម៉ោងតាមការបញ្ចូលលុយទូរស័ព្ទពេលណាក៏បាន កន្លែងណាក៏បានតាមចិត្ត។</h3>
						<!-- <h3><strong>TRANSFER MONEY TINI</strong></h3> -->
						<p>នៅចាំអ្វីទៀត? បញ្ចូលលុយទូរស័ព្ទតាមវីងឥឡូវនេះ!</p>
						<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply">បើកគណនីវីងរបស់អ្នកឥឡូវនេះ!</a>
						<!-- <p><a href="#layout-2" class="btn-knowmore">Do all these, TINI! <span class="arrow-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a></p> -->
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img class="lazyload" src="images/lazyload.png" data-src="images/img-april/phonetopup.png" alt="">
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
								<figure><img src="images/img-april/topup1.png" alt=""></figure>
								<p>អស់លុយទូរស័ព្ទមែនទេ? បញ្ចូលលុយទូរស័ព្ទតាមគណនីវីងគ្រប់ពេលវេលា។ មិនចាំបាច់សាច់ប្រាក់សុទ្ធក៏បាន!</p>
							</li>

							<li>
								<figure><img src="images/img-april/topup2.png" alt=""></figure>
								<p>បញ្ចូលលុយទូរស័ព្ទរបស់អ្នកឬទូរស័ព្ទរបស់មនុស្សជាទីស្រលាញ់បានគ្រប់បណ្តាញ ក្នុងចំនួនណាក៏បាន។</p>
							</li>

							<li>
								<figure><img src="images/img-april/topup3.png" alt=""></figure>
								<p>រីករាយជាមួយទឹកប្រាក់ 7% ត្រឡប់មកវិញរាល់ពេលដែលអ្នកបញ្ចូលលុយទូរស័ព្ទតាមវីង។ </p>
							</li>
						</ul>
						<div class="text-center" style="padding-top: 30px;">
							<a href="form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply">បើកគណនីវីងរបស់អ្នកឥឡូវនេះ!</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section id="layout-2" class="sec-pad">
			<div class="layout-2">
				<div class="container">
					<div class="text-content animated hiding" data-animation="fadeInUp">
						<!-- <span class="arrow-icon block"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
						<p>ចង់ដឹងបន្ថែម?</p> -->
						<!-- <h3>ប្រើប្រាស់វីងដើម្បីទទួលបានអត្ថប្រយោជន៍ជាច្រើន!</h3> -->
						<!-- <h3><strong>ប្រើប្រាស់វីងដើម្បីទទួលបាន<br />អត្ថប្រយោជន៍កាន់តែច្រើន!</strong></h3> -->
						<h3 style="text-transform: uppercase;">
							<span style="margin-left: 8px; display: inline-block; vertical-align: middle;"><img src="images/wing-tini/wing-tini.png" style="position: relative; top: -4px;" width="130" alt=""></span>
						គឺជាអ្វីដែលអ្នកអាចធ្វើបានជាមួយ <span style="margin-left: 8px; display: inline-block; vertical-align: middle;"><img src="images/page_template/logo.png" style="    position: relative; top: -5px;" width="130" alt=""></span></h3>
						<!-- <div class="logo-inverted">
							<img src="images/page_template/logo-inverted.png" alt="">
						</div> -->

					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img class="lazyload" src="images/lazyload.png" data-src="images/wing-tini/h-graphic-2.png" alt="">
					</div>
					<div class="flexslider-wrapper animated hiding" data-animation="fadeInUp">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="flex-item">
										<h2>វេរលុយ</h2>
										<p>&nbsp;</p>
										<p><strong>វេរលុយឲ្យមិត្តភក្តិ និងក្រុមគ្រួសារ<br />គ្រប់ទីកន្លែងទូទាំងប្រទេស!</strong>
										<p>មិនថាអ្នកនៅកន្លែងណា អ្នកអាចផ្ញើប្រាក់បានលឿននិងដោយសុវត្ថិភាពពេលអ្នកប្រើគណនីវីង!</p>
									</div>
								</li>

								<!-- <li>
									<div class="flex-item">
										<h2>បញ្ចូលទឹកប្រាក់ទូរស័ព្ទ</h2>
										<p><strong>បញ្ចូលទឹកប្រាក់ទូរស័ព្ទបានរហ័ស</strong></p>
										<p>អ្នកអាចបញ្ចូលទឹកប្រាក់ទូរស័ព្ទតាមគណនីវីង</p>
										<p><strong>ឬ</strong></p>
										<p>តាមភ្នាក់ងារវីង!</p>
									</div>
								</li> -->
								<li>
									<div class="flex-item">
										<h2>បញ្ចូលលុយទូរស័ព្ទ</h2>
										<p><strong>បញ្ចូលលុយទូរស័ព្ទ</strong></p>
										<p>អ្នកអាចបញ្ចូលលុយទូរស័ព្ទតាមគណនីវីង</p>
										<p><strong>ឬ</strong></p>
										<p>តាមភ្នាក់ងារវីង!</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>ការទូទាត់វិក្កយបត្រ</h2>
										<p><strong>ទូទាត់វិក្កយបត្រគ្រប់ទីកន្លែងតាមរយៈទូរស័ព្ទដៃរបស់អ្នក</strong></p>
										<p>ទូទាត់វិក្កយបត្រតាមគណនីវីងលើទូរស័ព្ទដៃរបស់អ្នក</p>
										<p><strong>ឬ</strong></p>
										<p>ន ក់ រវងី !</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>វីងគិតលុយ</h2>
										<p><strong>គណនីវីង ផ្តល់ឲ្យអ្នកនូវភាពងាយស្រួលក្នុងការទូទាត់ជាមួយសេវាកម្មវីងគិតលុយនៅតាមភោជនីយដ្ឋាន រោងភាពយន្ត ហាងលក់សំលៀកបំពាក់ ល ដោយមិនចាំបាច់មានសាច់ប្រាក់!</strong></p>
										<p>អតិថិជនគ្រាន់តែមានកាតវីង​ ឬទូរស័ព្ទដៃដែលភ្ជាប់ជាមួយគណនីវីងតែប៉ុណ្ណោះ</p>
										<p>បង់ប្រាក់ភ្លាមៗជាមួយវីងគិតលុយនៅហាងណាមួយដែលអ្នកពេញចិត្ត</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>ការទូទាត់តាមអ៊ីនធឺណិត</h2>
										<p><strong>សេវាកម្មទូទាត់តាមអ៊ីនធឺណិតអនុញ្ញាតឲ្យអ្នកទិញទំនិញជាច្រើនប្រភេទដោយមិនចំាបាច់ធ្វើដំណើរទៅក្រៅ</strong></p>
										<p>អតិថិជនវីងទាំងអស់អាចប្រើប្រាស់គណនីវីង<br />ដើម្បីទូទាត់តាមអ៊ីនធឺណិតជាមួយក្រុមហ៊ុនក្នុងស្រុក<br />ជាច្រើនប្រកបដោយភាពងាយស្រួល រហ័ស និងមានសុវត្ថិភាព។</p>
									</div>
								</li>
								<li>
									<div class="flex-item">
										<h2>វីងអនឡាញម៉ាស្ទ័រកាត</h2>
										<p><strong>ទិញទំនិញអនឡាញ កក់សណ្ឋាគារ និង សំបុត្រយន្តហោះ និងធ្វើជំនួញជាអន្តរជាតិ។</strong></p>
										<p>សូមទទួលយកម៉ាស្ទ័រកាតដែលទទួលស្គាល់ទូទាំងពិភពលោក!<br />ជាម៉ាស្ទ័រកាតដែលបើកដោយខ្លួនអ្នកផ្ទាល់បានភ្លាមៗ។</p>
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
					<h3>ការកំណត់នៃគណនី</h3>
					<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
						<tr>
							<th style="width:48px;" class="hide-mobile">លេខរៀង</th>
							<th>ប្រភេទសេវា</th>
							<th>ឈ្មោះសេវា</th>
							<th>ចំនួនកំណត់ក្នុងមួយប្រតិបត្តិការ</th>
							<th>ចំនួនកំណត់ក្នុងមួយថ្ងៃ</th>
						</tr>
						<tr>
							<td rowspan="2" class="text-center hide-mobile"><strong>1</strong></td>
							<td rowspan="2"><strong>ផ្ទេរប្រាក់</strong></td>
							<td>វីងទៅវីង</td>
							<td>៣០០​ ដុល្លារ</td>
							<td>៣០០​ ដុល្លារ</td>
						</tr>
						<tr>
							<td>វីងវេរលុយ</td>
							<td>១០០ ដុល្លារ</td>
							<td>១០០ ដុល្លារ</td>
						</tr>
						<tr>
							<td class="text-center hide-mobile"><strong>2</strong></td>
							<td><strong>បញ្ចូលលុយទូរស័ព្ទ</strong></td>
							<td>បញ្ចូលលុយទូរស័ព្ទ</td>
							<td>៥០​ ដុល្លារ</td>
							<td>៣០០០ ដុល្លារ</td>
						</tr>
						
						<tr>
							<td rowspan="3" class="text-center hide-mobile"><strong>3</strong></td>
							<td rowspan="3"><strong>ទូទាត់ចំណាយ</strong></td>
							<td>ទូទាត់វិក្កយបត្រ</td>
							<td>៣០០០ ដុល្លារ</td>
							<td>៣០០០ ដុល្លារ</td>
						</tr>
						<tr>
							<td>ទូទាត់វិក្កយបត្រតាមអនឡាញ</td>
							<td>៣០០០ ដុល្លារ</td>
							<td>៣០០០ ដុល្លារ</td>
						</tr>
						<tr>
							<td>វីងគិតលុយ</td>
							<td>៣០០០ ដុល្លារ</td>
							<td>៣០០០ ដុល្លារ</td>
						</tr>
						<tr>
							<td rowspan="2" class="text-center hide-mobile"><strong>4</strong></td>
							<td rowspan="2"><strong>ដាក់ ឬ ដកប្រាក់</strong></td>
							<td>ដាក់ប្រាក់</td>
							<td>៦០០០ ដុល្លារ</td>
							<td>ឥតកំណត់</td>
						</tr>
						<tr>
							<td>ឥតកំណត់</td>
							<td>១០០ ដុល្លារ</td>
							<td>១០០ ដុល្លារ</td>
						</tr>
						<tr>
							<td class="text-center hide-mobile"><strong>5</strong></td>
							<td colspan="2" >ចំនួនទឹកប្រាក់តម្កល់ទុកក្នុងគណនី</td>
							<td colspan="2" class="text-center">ឥតកំណត់</td>
						</tr>
					</table>

					<h3 style="margin-top: 20px;">តម្លៃសេវាកម្មថេរ</h3>
					<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;margin-top: 20px;">
						<tr>
							<th>សេវាកម្ម</th>
							<th style="width: 120px;">តម្លៃសេវាកម្មជាប្រាក់រៀល</th>
							<th style="width: 120px;">តម្លៃសេវាកម្មជាប្រាក់ដុល្លារ</th>
						</tr>
						<tr>
							<td>ការទូទាត់តាមអ៊ីនធឺណិត ឬ តាមម៉ាស៊ីនវីង</td>
							<td class="bg-white valign" rowspan="4" valign="center">ឥតគិតថ្លៃ</td>
							<td class="bg-white valign" rowspan="4" valign="center">ឥតគិតថ្លៃ</td>
						</tr>
						<tr>
							<td>ដាក់ប្រាក់</td>
						</tr>
						<tr>
							<td>បញ្ចូលលុយទូរស័ព្ទ</td>
						</tr>
						<tr>
							<td>បង់វិក្កយបត្រ(DIGI, First Finance, KLD, OneTV, PPP, KTH, PPCTV, Manulife, Cambodian Life ...)</td>
						</tr>
						<tr>
							<td>បង់វិក្កយបត្រ (AEON, Active People's MFI, Mega Leasing Plc, Piphup Thmey MFI)</td>
							<td class="valign">2,000</td>
							<td class="valign">0.5</td>
						</tr>
						<tr>
							<td>ពិនិត្យទឹកប្រាក់នៅសល់</td>
							<td class="valign">100</td>
							<td class="valign">0.02</td>
						</tr>
						<tr>
							<td>ផ្លាស់ប្តូរលេខទូរស័ព្ទ</td>
							<td class="valign">1,000</td>
							<td class="valign">0.25</td>
						</tr>
						<tr>
							<td>ផ្លាស់ប្តូរប្រភេទគណនី (ខ្មែរ&lt;=&gt;ដុល្លារ)</td>
							<td class="valign">5,000</td>
							<td class="valign">1.25</td>
						</tr>
					</table>

					<h3 style="margin-top: 20px;">តម្លៃសេវាកម្មប្រែប្រួល</h3>
					<table cellspacing="0" cellpadding="0" border="0" style="width: 100%;margin-top: 20px;">
						<tr>
							<th>សេវាកម្ម</th>
							<th style="width: 200px;">ចំនួនទឹកប្រាក់ជាប្រាក់រៀល</th>
							<th style="width: 120px;">តម្លៃសេវាកម្មជាប្រាក់រៀល</th>
							<th style="width: 180px;">ចំនួនទឹកប្រាក់ជាប្រាក់ដុល្លារ</th>
							<th style="width: 120px;">តម្លៃសេវាកម្មជាប្រាក់ដុល្លារ</th>
						</tr>
						<tr>
							<td class="text-left valign" rowspan="5">ដកប្រាក់</td>
							<td>0 - 100,000</td>
							<td>1,600</td>
							<td>0 - 25</td>
							<td>0.40</td>
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
							<td class="text-left valign" rowspan="2">វិក្កយបត្រភ្លើង (ភ្នំពេញ សៀមរាប សីហនុ បាត់ដំបង)</td>
							<td>0 - 100,000</td>
							<td>ឥតគិតថ្លៃ</td>
							<td>0 - 25</td>
							<td>ឥតគិតថ្លៃ</td>
						</tr>
						<tr>
							<td>100,001 ឡើងទៅ</td>
							<td>1,000</td>
							<td>25.01 ឡើងទៅ</td>
							<td>0.25</td>
						</tr>
						<tr>
						<td class="text-left valign" rowspan="2">វិក្កយបត្រទឹក</td>
							<td>0 - 100,000</td>
							<td>ឥតគិតថ្លៃ</td>
							<td>0 - 25</td>
							<td>ឥតគិតថ្លៃ</td>
						</tr>
						<tr>
							<td>100,001 ឡើងទៅ</td>
							<td>1,000</td>
							<td>25.01 ឡើងទៅ</td>
							<td>0.25</td>
						</tr>
						<tr>
							<td class="text-left valign" rowspan="3">វេរលុយពីគណនីវីង ទៅគណនីវីង</td>
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
							<td class="text-left valign" rowspan="5">វីងវេរលុយ</td>
							<td>0 - 100,000</td>
							<td>2,000</td>
							<td>0 - 25</td>
							<td>0.50</td>
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
						<h5>ចាំអីទៀត?</h5>
						<h3>បើកគណនីវីងរបស់អ្នកឥឡូវនេះ​</h3>
						<!-- <h3><strong>ដើម្បីទទួលបានអត្ថប្រយោជន៏<br />កាន់តែច្រើន!</strong></h3> -->

						<a href="khmer-form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply btn-desktop">ស្នើបើកគណនីវីងដោយឥតគិតថ្លៃ</a>
					</div>
					<div class="graphic-wrap animated hiding" data-animation="fadeInUp">
						<img class="lazyload" src="images/lazyload.png" data-src="images/wing-tini/h-graphic-3.png" alt="">
					</div>
					
					<div class="clr"></div>
					<div class="text-center">
						<a href="khmer-form.php<?php echo $source.$medium.$campaign; ?>" class="btn click-apply btn-mobile">ស្នើបើកគណនីវីងដោយឥតគិតថ្លៃ</a>
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

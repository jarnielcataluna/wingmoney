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

    <section id="main-wrapper" class="form-bg">

        <header>
            <div class="logo"><a href="" alt=""><img src="images/page_template/wingit.png" alt=""></a></div>
        </header>

        <section class="main-wrapper">
            <div class="container">
                <div class="e-step-box">
                    <h4>Get A Wing Account Now <span>In Just 3 Easy Steps!</span></h4>
                    <ol>
                        <li>Sign up with Facebook or fill up this form. </li>
                        <li>Enter the verification code sent via SMS. </li>
                        <li>Create your Wing account PIN and you will get your Wing account number via a SMS.</li>
                    </ol>
                </div>
                <div class="account-app-wrap">
                    <h2 class="sec-title text-center">Account Application</h2>
                    <form class="wing-form" method="post" action="exec/validate.php" novalidate>
                        <div class="signup-fb">
                            <a href="#" class="waves-effect" id="useFacebook"><i class="fa fa-facebook" aria-hidden="true"></i><span>Apply Now Using Facebook</span></a>
                        </div>
                        <p class="form-text">Or fill up this form</p>
                        <div class="loading-spinner-wrapper" id="app-loader">
                            <span class="loading-spinner">
                              <i class="one"></i>
                              <i class="two"></i>
                              <i class="three"></i>
                            </span>
                        </div>

                        <input type="hidden" name="fb_uid" id="fb_uid"/>
                        <input type="hidden" name="fb_fname" id="fb_fname"/>
                        <input type="hidden" name="fb_lname" id="fb_lname"/>
                        <input type="hidden" name="fb_email" id="fb_email"/>
                        <input type="hidden" name="fb_profile_pic" id="fb_profile_pic"/>
                        <input type="hidden" name="client_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
                        <input type="hidden" name="client_id" value="<?php echo $_COOKIE['_ga']; ?>" />

                        <div class="loading-spinner-wrapper" id="app-loader">
                            <span class="loading-spinner">
                              <i class="one"></i>
                              <i class="two"></i>
                              <i class="three"></i>
                            </span>
                        </div>
                        <div class="form-row">
                            
                            <div class="input-wrap">
                                <input type="text" id="first-name" name="fname" value="" maxLength="20" required="required" onchange="this.setAttribute('value', this.value);">
                                <label for="first-name">First Name</label>
                                <div class="required-tooltip right">
                                    <p>This field is required <span>*</span></p>
                                </div>
                            </div>
                            <div class="input-wrap">
                                <input type="text" id="last-name" name="lname" value="" maxLength="20" required="required" onchange="this.setAttribute('value', this.value);">
                                <label for="last-name">Family Name</label>
                                <div class="required-tooltip right">
                                    <p>This field is required <span>*</span></p>
                                </div>
                            </div>
                            <div class="input-wrap input-half">
                                <input type="text" id="birthday" name="dob" value="" required="required" readonly>
                                <label for="birthday" id="birthday-label">Date of Birth</label>
                                <div class="required-tooltip left">
                                    <p>This field is required <span>*</span></p>
                                </div>
                            </div>
                            <div class="input-wrap input-half gender">
                                <select class="custom-select" name="gender" id="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                                <div class="required-tooltip right">
                                    <p>This field is required <span>*</span></p>
                                </div>
                            </div>
                            <div class="clr"></div>
                            <div class="input-wrap mobile-num">
                                <input type="tel" id="contact-num" name="contact_num" value=""  maxLength="10" required="required" onchange="this.setAttribute('value', this.value);">
                                <label for="contact-num">Mobile Number</label>
                                <div class="required-tooltip left">
                                    <p>This field is required <span>*</span></p>
                                </div>
                            </div>
                            <div class="input-wrap email-wrapper no-error">
                                <input type="email" id="account-email" name="email" value="" required="required" onchange="this.setAttribute('value', this.value);">
                                <label for="account-email">Email</label>
                                <div class="required-tooltip right">
                                    <p>This field is required <span>*</span></p>
                                </div>
                            </div>
                            
                            <div class="clr"></div>
                            <div class="input-wrap choose-currency">
                                <label>Choose Currency:</label>
                                <div class="custom-radio">
                                    <input type="radio" id="Khmer" name="currency" value="KHR" data-value="KHR">
                                    <label for="Khmer"><span>KHR</span></label>
                                </div>
                                <div class="custom-radio khmer">
                                    <input type="radio" id="usd" name="currency" checked value="USD" data-value="USD">
                                    <label for="usd"><span>USD</span></label>
                                </div>
                                
                            </div>
                            
                            <div class="wing-checkbox terms-condi-wrap">
                                <input type="checkbox" id="terms-checkbox"/>
                                <label for="terms-checkbox">I accept Wing <a href="https://www.wingmoney.com/about-wing/terms-and-conditions/" target="_blank">terms &amp; conditions.</a></label>
                            </div>
                            <div class="input-wrap new-recaptcha-wrap">
                                
                                <div class="new-captcha">
                                    <img src="get_captcha.php" alt="" id="captcha" />
                                    <img src="images/reload.png" width="25" alt="" id="refresh" />
                                    <br clear="all" />
                                </div>
                                    <input name="captchacode" type="text" id="captchacode" value="" placeholder="Type the random letter here..">
                                
                                

                                <div class="required-tooltip left">
                                    <p>Please verify that you are not a robot.<span>*</span></p>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="input-wrap btn-wrapper">
                                    <input type="submit" class="btn btn-orange" name="" value="SUBMIT MY APPLICATION" />
                                    
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </section>
        
    </section>
</section>

<footer>
</footer>
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
<script src="js/jquery.realperson.js" ></script>
<script src="js/custom.js" ></script>
<script src="js/script.js" ></script>
<script src="js/facebook-custom.js" ></script>
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


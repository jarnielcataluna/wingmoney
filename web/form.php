
<form class="wing-form" method="post" action="exec/validate.php" novalidate>
    <input type="hidden" name="fb_uid" id="fb_uid"/>
    <input type="hidden" name="fb_fname" id="fb_fname"/>
    <input type="hidden" name="fb_lname" id="fb_lname"/>
    <input type="hidden" name="fb_email" id="fb_email"/>
    <input type="hidden" name="fb_profile_pic" id="fb_profile_pic"/>
    <input type="hidden" name="client_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
    <input type="hidden" name="client_id" value="<?php echo $_COOKIE['_ga']; ?>" />

    <p class="form-text">Or fill up this form</p>
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
            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i> <!-- +855 --></span>
            <input type="tel" id="contact-num" name="contact_num" value=""  maxLength="10" required="required" onchange="this.setAttribute('value', this.value);">
            <label for="contact-num">Mobile Number</label>
            <div class="required-tooltip left">
                <p>This field is required <span>*</span></p>
            </div>
        </div>
        <div class="input-wrap">
            <input type="email" id="account-email" name="email" value="" required="required" onchange="this.setAttribute('value', this.value);">
            <label for="account-email">Email</label>
            <div class="required-tooltip right">
                <p>This field is required <span>*</span></p>
            </div>
        </div>
        <!-- <div class="input-wrap input-half id-type">
            <select class="custom-select" name="id_type">
                <option value="0">ID type</option>
                <option value="ID_NATIONAL" >NATIONAL ID</option>
                <option value="ID_VOTER">VOTER'S ID</option>
                <option value="ID_EMPLOYEE">EMPLOYEE ID</option>
                <option value="ID_PASSPORT">PASSPORT ID</option>
            </select>
            <div class="required-tooltip left">
                <p>This field is required <span>*</span></p>
            </div>
        </div>
        <div class="input-wrap input-half">
            <input type="text" id="id-number" name="id_number" value="" required="required" onchange="this.setAttribute('value', this.value);">
            <label for="id-number">ID Number</label>
            <div class="required-tooltip right">
                <p>This field is required <span>*</span></p>
            </div>
        </div> -->
        <div class="clr"></div>
        <div class="input-wrap choose-currency">
            <label>Choose Currency:</label>
            <div class="custom-radio">
                <input type="radio" id="usd" name="currency" checked value="USD" data-value="USD">
                <label for="usd"><span></span>USD</label>
            </div>
            <div class="custom-radio">
                <input type="radio" id="Khmer" name="currency" value="KHR" data-value="KHR">
                <label for="Khmer"><span></span>KHR</label>
            </div>
        </div>
        <!-- <div class="input-wrap finding-us">
            <select class="custom-select" name="feedback">
                <option value="0">Where did you find us?</option>
                <option value="Wing Website">Wing Website</option>
                <option value="Google">Google</option>
                <option value="Facebook">Facebook</option>
                <option value="Others">Others</option>
            </select>
            <div class="required-tooltip left">
                <p>This field is required <span>*</span></p>
            </div>
        </div> -->
        <!-- <div class="wing-checkbox">
            <input type="checkbox" id="wing-checkbox"/>
            <label for="wing-checkbox">I want to receive email and sms notification from Wing.</label>
        </div> -->
        <div class="wing-checkbox">
            <input type="checkbox" id="terms-checkbox"/>
            <label for="terms-checkbox">I accept Wing <a href="https://www.wingmoney.com/about-wing/terms-and-conditions/" target="_blank">terms &amp; conditions.</a></label>
        </div>
        <hr>
        <div class="input-wrap g-recaptcha-wrap">
            <div class="g-recaptcha" data-sitekey="6LdSbCUTAAAAAMlZ8GocqbqeZgtERxt1eH4yyewK" data-callback="onSuccessCaptcha"></div>
            <script>
                var onSuccessCaptcha = function(response) {

                    var errorDivs = $('.g-recaptcha-wrap');
                    if (errorDivs.hasClass('error')) {
                        $('.g-recaptcha-wrap').removeClass('error');
                    }
                }
            </script>
            

            <div class="required-tooltip left">
                <p>Please verify that you are not a robot.<span>*</span></p>
            </div>
        </div>
        <div class="text-center">
            <div class="input-wrap btn-wrapper">
                <input type="submit" class="btn btn-orange" name="" value="Register" disabled="disabled" />
                <div class="required-tooltip left">
                    <p>Please check the terms &amp; conditions. <span>*</span></p>
                </div>
            </div>
        </div>

        
    </div>

</form>

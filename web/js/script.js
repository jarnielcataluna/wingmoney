// Initialize Firebase
var config = {
    apiKey: "AIzaSyDx2elBwIOx7X_3YErUUHF9pgXmhXrGSxI",
    authDomain: "wing-money-propelrr.firebaseapp.com",
    databaseURL: "https://wing-money-propelrr.firebaseio.com",
    storageBucket: ""
};
firebase.initializeApp(config);

var database = firebase.database();

function writeUserData(lname, fname, email, contact, gender, id_type, id_number, bday, branch, currency, fb_details) {
    database.ref('leads').push({
        lastname: lname,
        firstname: fname,
        email: email,
        bday: bday,
        contact: contact,
        gender: gender,
        id_type: id_type,
        id_number: id_number,
        currency: currency,
        branch: branch,
        fb_details: fb_details
    });
}

$(document).ready(function(){

    // Initialize Facebook

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '501745020012175',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    $('#useFacebook').click(function(e) {
        e.preventDefault();
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                useFacebook();
            } else {
                FB.login(function(){
                    useFacebook();
                }, {scope: 'publish_actions, email, public_profile, user_birthday, user_location, user_likes, user_education_history, pages_messaging_phone_number'});
            }
        });
    });

    function useFacebook() {
        FB.api('/me', {fields: 'id,first_name,last_name,birthday,gender,about,email,education,bio,devices,hometown,location,likes,work,public_key'}, function(fbResponse) {


            console.log(fbResponse);
            var _fbUid = fbResponse.id;
            var _fname = fbResponse.first_name;
            var _lname = fbResponse.last_name;
            var _birthday = fbResponse.birthday;
            var _email = fbResponse.email;
            var _gender = fbResponse.gender;

            $('#fb_uid').val(_fbUid);
            $('#fb_fname').val(_fname);
            $('#fb_lname').val(_lname);
            $('#fb_email').val(_email);

            $('#last-name').val(_lname);
            $('#first-name').val(_fname);
            $('#birthday').val(_birthday);
            $('#account-email').val(_email);
            if(_gender === 'male'){
                $('#gender').val('M');
                $('#gender').siblings('.custom-select-display').html('Male');
            }else if(_gender === 'female'){
                $('#gender').val('F');
                $('#gender').siblings('.custom-select-display').html('Female');
            }
            $('#email').val(_email);


        });

        FB.api('/me/picture?type=large', function(fbResponse) {
            $('#fb_profile_pic').val(fbResponse.data.url);
        });


    }



        $('input').on('change paste keyup',function(){
            console.log('working');
            if($(this).val().length > 0){
                $(this).closest('.input-wrap').removeClass('error');
            }
        });




    $('.wing-form').submit(function(e){
        $('.input-wrap').addClass('error');
        isvalidate = false;


        if( IsEmail($('#account-email').val() )) {
            $('#account-email').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#last-name').val() == '') {
            $('#last-name').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#first-name').val() == '') {
            $('#first-name').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#id-number').val() == '') {
            $('#id-number').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#birthday').val() == '') {
            $('#birthday').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#contact-num').val() == '') {
            $('#contact-num').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( $('.gender select').val() != '0'){
            $('.gender').removeClass('error');
            isvalidate = true;

        } else {
            isvalidate = false;
        }

        if( $('.select-branch select').val() != '0'){
            $('.select-branch').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( $('.id-type select').val() != '0') {
            $('.id-type').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( isvalidate == true) {
            $('.wing-form-wrap').addClass('overlay');
            var that = $(this),
                url = that.attr('action'),
                type = that.attr('method'),
                page = that.attr('page'),
                data = {};

            that.find('[name]').each(function (index, value) {
                var that = $(this),
                    name = that.attr('name'),
                    value = that.val();
                data[name] = value;
            });

            $.ajax({
                url: url,
                type: type,
                data: data,

                success: function (response) {
                    var data = jQuery.parseJSON(response);
                    //console.log(data);
                    console.log(response);
                    $('.wing-form-wrap').removeClass('overlay');
                    //var fb_details = {};
                    //fb_details.fb_uid = data.fb_uid;
                    //fb_details.fname = data.fb_fname;
                    //fb_details.lname = data.fb_lname;
                    //fb_details.email = data.fb_email;
                    //fb_details.picture = data.fb_profile_pic;
                    //
                    //writeUserData(data.lname, data.fname, data.email, data.contact, data.gender, data.id_type, data.id_number, data.dob, data.store_branch, data.currency, fb_details);
                    //$('.wing-form-wrap').addClass('remove');
                    window.location.assign('thankyou.php?id=' + btoa())
                }
            });

            return false;
        } else {
            e.preventDefault();
        }
    })
});


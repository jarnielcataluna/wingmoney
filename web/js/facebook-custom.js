window.fbAsyncInit = function() {
    FB.init({
        appId      : '236260280081948',
        xfbml      : true,
        version    : 'v2.6'
    });
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).on('click', '#useFacebook', function(e) {
    e.preventDefault();
    console.log('test by elwin');
    FB.getLoginStatus(function(response) {
        console.log('two');
        if (response.status === 'connected') {
            useFacebook();
            //$('#birthday-label').css({'opacity' : 0});
        } else if (response.status === 'not_authorized') {
            console.log('not_authorized');
            FB.login(function(){
                useFacebook();
                console.log('test by case 2');
               // $('#birthday-label').css({'opacity' : 0});
            }, {scope: 'publish_actions, email, public_profile, user_birthday, user_location, user_likes, user_education_history, pages_messaging_phone_number'});
        } else {
            console.log('test else');
            

            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
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
        console.log(fbResponse.data.url);
    });


}

// Initialize Firebase
var config = {
    apiKey: "AIzaSyCGlkjuXIbRKSb5GHsi8JUZP6YGAxTUAsI",
    authDomain: "propelrr-wing-money.firebaseapp.com",
    databaseURL: "https://propelrr-wing-money.firebaseio.com",
    storageBucket: ""
};
firebase.initializeApp(config);

$(document).ready(function(){
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

        console.log(isvalidate);

        if( isvalidate == true) {
            return true;
        } else {
            e.preventDefault();
        }
    })
});


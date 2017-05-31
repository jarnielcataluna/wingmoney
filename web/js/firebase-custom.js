//Initialize Firebase
// var config = {
//     apiKey: "AIzaSyDx2elBwIOx7X_3YErUUHF9pgXmhXrGSxI",
//     authDomain: "wing-money-propelrr.firebaseapp.com",
//     databaseURL: "https://wing-money-propelrr.firebaseio.com",
//     storageBucket: ""
// };
// firebase.initializeApp(config);

// var database = firebase.database();

$(window).load(function(){

    $('#verifySms').click(function(e) {
        e.preventDefault();
        $('.input-wrap').addClass('error');
        isvalidate = false;

        if (!$('#verfication-code').val() == "") {
            $('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if ($('#verfication-code').val().length >= 4) {
            if (isvalidate == true) {
                $('.final-step').addClass('overlay');
                $.ajax({
                    url: "/exec/verify-sms.php",
                    type: "POST",
                    data: {
                        code: $('#verfication-code').val(),
                        id: $('input[name=id]').val()
                    },
                    success: function(data) {

                        if (data == $('input[name=id]').val()) {
                            $('.final-step').removeClass('overlay');
                            $('.verification').hide();
                            $('.create-pin-account').slideDown(500);
                        } else {
                            alert('Invalid code. Please input the correct verification code sent to your mobile.');
                            $('.final-step').removeClass('overlay');
                        }
                    }
                });
            }
        }
    });

    $('#resendCode').click(function(e) {
        e.preventDefault();

        $('.final-step').addClass('overlay');
        $.ajax({
            url: "/exec/resend-code.php",
            type: "POST",
            data: {
                id: $('input[name=id]').val()
            },
            success: function(data) {
                $('.final-step').removeClass('overlay');
                console.log(data);

                var _data = jQuery.parseJSON(data);

                if (_data.error == 1) {
                    $('.number-exist-wrap').addClass('active');
                    setTimeout(function(){
                        $('.number-exist-wrap').removeClass('active');
                    }, 6000);
                } else {
                    $('.resend-info').css({'opacity' : '1'});
                }            
            }
        });
    });

    // Verification Field
    $('.final-step-form').submit(function(e){
        e.preventDefault();
        $('.input-wrap').addClass('error');
        isvalidate = false;

        if( !$('#verfication-code').val() == '') {
            $('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#verfication-code').val() == '' &&  isvalidate == true) {
            $('.final-step').addClass('overlay');

            var that = $(this),
                url = that.attr('action'),
                type = that.attr('method'),
                data = {};

            that.find('[name]').each(function (index, value) {
                var that = $(this),
                    name = that.attr('name'),
                    value = that.val();
                data[name] = value;
            });

            $.ajax({
                url: "/exec/verify-sms.php",
                type: "POST",
                data: {
                    code: $('#verfication-code').val(),
                    id: $('input[name=id]').val()
                },
                success: function(data) {
                    var res = jQuery.parseJSON(data);

                    if (!res.error) {
                        $('.final-step-form').slideUp(300);
                        $('.create-pin-account').slideDown(500);
                    } else {
                        $('.final-step').removeClass('overlay');
                        var errorOutput = $('#verfication-code').closest('.input-wrap');
                        errorOutput.find('.required-tooltip p').html(res.error);
                        errorOutput.addClass('error');
                    }
                }
            });

            e.preventDefault();
            return false;

        } else {
            e.preventDefault();
            return false;
        }

    });

    //PIN and CONFIRM PIN
    $('#createAccount').click(function(e){
        e.preventDefault();

        $('.final-step').addClass('overlay');

        $('#pin-id').closest('.input-wrap').addClass('error');
        isvalidate = false;

        if( $('#pin-id').val() != '' && $('#pin-id').val().length == 4) {
            $('#pin-id').closest('.input-wrap').removeClass('error');

            if($('#confirm-pin-id').val() == $('#pin-id').val() ) {
                isvalidate = true;
                $('#confirm-pin-id').closest('.input-wrap').removeClass('error');
            } else {
                $('#confirm-pin-id').closest('.input-wrap').addClass('error');
                $('.final-step').removeClass('overlay');
                isvalidate = false;
            }
        }

        if(  $('#pin-id').val() != '' && isvalidate == true ) {

            $.ajax({
                url: "/exec/validate2.php",
                type: "POST",
                data: {
                    id: $('input[name=id]').val(),
                    pin: $('#pin-id').val()
                },
                success: function(response) {
                    var data = jQuery.parseJSON(response);
                    if(!data.error){
                        var accountNum = data.leads_info.contact;
                        $('.final-step').removeClass('overlay');
                        // database.ref('leads').child(data.id).set(data);

                        var confLang = $('.create-pin-account #language').val();

                        if (confLang == "kh") {

                            var f = document.createElement("form");
                            f.setAttribute('method',"post");
                            f.setAttribute('action',"khmer-thankyou.php");
                            f.setAttribute('id',"redirect-form");

                            var i = document.createElement("input"); //input element, text
                            i.setAttribute('type',"hidden");
                            i.setAttribute('name',"id");
                            i.setAttribute('value', data.id);
                            f.appendChild(i);

                            var a = document.createElement("input");
                            a.setAttribute('type', "hidden");
                            a.setAttribute('name', "accountNum");
                            a.setAttribute('value', accountNum);
                            f.appendChild(a);

                        } else {
                            var f = document.createElement("form");
                            f.setAttribute('method',"post");
                            f.setAttribute('action',"thankyou.php");
                            f.setAttribute('id',"redirect-form");

                            var i = document.createElement("input"); //input element, text
                            i.setAttribute('type',"hidden");
                            i.setAttribute('name',"id");
                            i.setAttribute('value', data.id);
                            f.appendChild(i);

                            var a = document.createElement("input");
                            a.setAttribute('type', "hidden");
                            a.setAttribute('name', "accountNum");
                            a.setAttribute('value', accountNum);
                            f.appendChild(a);
                        }

                        document.getElementsByTagName('body')[0].appendChild(f);

                        $('#redirect-form').submit();
                    }else{
                        $('.final-step').removeClass('overlay');
                        var errorOutput = $('#pin-id').closest('.input-wrap');
                        errorOutput.find('.required-tooltip p').html(data.error);
                        errorOutput.addClass('error');
                    }
                }
            });

            return false;
        } else {
            e.preventDefault();
            $('.final-step').removeClass('overlay');
        }
    });
});
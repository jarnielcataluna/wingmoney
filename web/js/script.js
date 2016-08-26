$(document).ready(function(){

    // $('input').on('change paste keyup',function(){
    //     if($(this).val().length > 0){
    //          $(this).closest('.input-wrap').removeClass('error');
    //     }
    // });

    function isNumber(number) {
        var numberValid = /^\+(?:[0-9]●?){6,14}[0-9]$/;

        return numberValid.test(number);
    }


    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $('#wing-checkbox').change(function(){

        if($(this).is(':checked')) {
            $('.wing-form input[type="submit"]').removeAttr('disabled');
            $('.btn-wrapper').find('.required-tooltip').remove();

        } else {
            $('.wing-form input[type="submit"]').attr('disabled', true);
            $('.btn-wrapper').append('<div class="required-tooltip left"><p>Please check the tick box. <span>*</span></p></div>')
        }

    });


    var isSeries = false;
    $('#contact-num').keyup(function(){
        checkSeries($(this));
    });

    $('#contact-num').change(function(){
        checkSeries($(this));
    });

    $('#contact-num').blur(function(){
        checkSeries($(this));
    });

    function checkSeries(elem){
        elem.closest('.input-wrap').removeClass('error');
        var val = elem.val();
        var len = elem.val().length;
        if(len > 0){
            if(val.substr(0,1) != '0'){
                val = '0' + val;
                elem.val(val);
            }

            if(len > 4){
                var series = val.substr(0,5);
                if(jQuery.inArray( series, operatorNumbers ) != -1){
                    isSeries = true;

                }else{
                    var test = elem.closest('.input-wrap').find('.required-tooltip.left').find('p')
                    test.html('Invalid mobile prefix');
                    elem.closest('.input-wrap').addClass('error');
                    console.log('test');
                    isSeries = false;
                }
            }
        }
    }

    function isPhoneAvailable(phone){
        $.ajax({
            url: "/exec/verify-phone.php",
            type: "POST",
            data: {
                contact: phone
            },
            success: function(data) {
                var res = JSON.parse(data);
                console.log(res);
                return res.error_code;
            }
        });
    }

    $('input[name=currency]').val('USD');

    $('input[name=currency]').change(function(){
        var val = $('input[name=currency]:checked').val();
        $(this).val(val);
    });

    $('.wing-form').submit(function(e){
        e.preventDefault();
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

        // if( !$('#id-number').val() == '') {
        //     $('#id-number').closest('.input-wrap').removeClass('error');
        //     isvalidate = true;
        // } else {
        //     isvalidate = false;
        // }

        if( !$('#birthday').val() == '') {
            $('#birthday').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if(isSeries){
            if( $('#contact-num').val() != '' && isNumber( '+855' + $('#contact-num').val() ) && $('#contact-num').val().length >= 9 ){
                $('#contact-num').closest('.input-wrap').removeClass('error');
                isvalidate = true;
            } else {
                $('#contact-num').closest('.required-tooltip.left p').html('This field is required <span>*</span>');
                isvalidate = false;
            }
        }else{
            var cNum =  $('#contact-num');
            cNum.closest('.input-wrap').addClass('error');
            cNum.closest('.required-tooltip.left p').html('Invalid mobile prefix');
            isvalidate = false
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

        if( $('.finding-us select').val() != '0'){
            $('.finding-us').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        // if( $('.id-type select').val() != '0') {
        //     $('.id-type').removeClass('error');
        //     isvalidate = true;
        // } else {
        //     isvalidate = false;
        // }

        if(grecaptcha.getResponse().length === 0) {
            isvalidate = false;
        } else {

            $('.g-recaptcha-wrap').removeClass('error');
            isvalidate = true;
        }


        if(isSeries && grecaptcha.getResponse().length !== 0 && $('.gender select').val() != '0' && $('.gender select').val() != '0' &&  !$('#contact-num').val() == '' && !$('#birthday').val() == '' && !$('#first-name').val() == '' &&  !$('#last-name').val() == '' && IsEmail($('#account-email').val()) && isNumber( '+855' + $('#contact-num').val() ) && $('#contact-num').val().length == 8 && $('.finding-us select').val() != '0' &&  isvalidate == true) {
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

            var available = isPhoneAvailable($('#contact-num').val());
            console.log(available);

            if (available == 'WA500') {
                isvalidate = true;

                $.ajax({
                    url: url,
                    type: type,
                    data: data,

                    success: function (response) {
                        var data = jQuery.parseJSON(response);
                        $('.wing-form-wrap').addClass('remove');

                        var f = document.createElement("form");
                        f.setAttribute('method',"post");
                        f.setAttribute('action',"confirmation.php");
                        f.setAttribute('id',"redirect-form");

                        var i = document.createElement("input"); //input element, text
                        i.setAttribute('type',"hidden");
                        i.setAttribute('name',"id");
                        i.setAttribute('value', data.id);
                        f.appendChild(i);
                        document.getElementsByTagName('body')[0].appendChild(f);

                        $('#redirect-form').submit();
                    }
                });
            } else {
                isvalidate = false;
                alert('Wing Account already exists. Please register another phone number.');
            }

            return false;
        } else {
            e.preventDefault();
        }
    });


});


$(document).ready(function(){

    $('input').on('change paste keyup',function(){
        console.log('working');
        if($(this).val().length > 0){
             $(this).closest('.input-wrap').removeClass('error');
        }
    });

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
            console.log('checkbox');
        } else {
            $('.wing-form input[type="submit"]').attr('disabled', true);
        }

    });

    $('input[name=currency]').val('USD');

    $('input[name=currency]').change(function(){
        var val = $('input[name=currency]:checked').val();
        $(this).val(val)
        alert(val);
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

        if( $('#contact-num').val() != '' && isNumber( '+855' + $('#contact-num').val() ) && $('#contact-num').val().length == 8 ){
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

        if( $('.finding-us select').val() != '0'){
            $('.finding-us').removeClass('error');
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




        if( $('.gender select').val() != '0' && $('.id-type select').val() != '0' && $('.gender select').val() != '0' &&  !$('#contact-num').val() == '' && !$('#birthday').val() == '' && !$('#id-number').val() == '' && !$('#first-name').val() == '' &&  !$('#last-name').val() == '' && IsEmail($('#account-email').val()) && isNumber( '+855' + $('#contact-num').val() ) && $('#contact-num').val().length == 8 && $('.finding-us select').val() != '0' &&  isvalidate == true) {
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

            return false;
        } else {
            e.preventDefault();
        }
    });


});


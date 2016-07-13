//Initialize Firebase
var config = {
    apiKey: "AIzaSyDx2elBwIOx7X_3YErUUHF9pgXmhXrGSxI",
    authDomain: "wing-money-propelrr.firebaseapp.com",
    databaseURL: "https://wing-money-propelrr.firebaseio.com",
    storageBucket: ""
};
firebase.initializeApp(config);

var database = firebase.database();


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
        $('.final-step-form').addClass('overlay');

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
            url: url,
            type: type,
            data: data,

            success: function (response) {
                var data = jQuery.parseJSON(response);
                if(!data.error){
                    $('.final-step-form').removeClass('overlay');
                    database.ref('leads').child(data.id).set(data);
                    var f = document.createElement("form");
                    f.setAttribute('method',"post");
                    f.setAttribute('action',"thankyou.php");
                    f.setAttribute('id',"redirect-form");

                    var i = document.createElement("input"); //input element, text
                    i.setAttribute('type',"hidden");
                    i.setAttribute('name',"id");
                    i.setAttribute('value', data.id);
                    f.appendChild(i);
                    document.getElementsByTagName('body')[0].appendChild(f);

                    $('#redirect-form').submit();
                }else{
                    $('.final-step-form').removeClass('overlay');
                    var errorOutput = $('#verfication-code').closest('.input-wrap');
                    errorOutput.find('.required-tooltip p').html(data.error);
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
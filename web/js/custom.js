function resize() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	
	// STICKY FOOTER
	var footerHeight = $('footer').outerHeight();
	var footerTop = (footerHeight) * -1
	$('footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});
}

$(window).resize(function() {
	resize();
});

$(document).ready(function() {
	resize();
    initCustomForm();

    $( "#birthday" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1945:2009',
        defaultDate: '01/01/1980'
    });

    if($('html').hasClass('desktop')) {
        $('.animated').appear(function() {
            var element = $(this);
            var animation = element.data('animation');
            var animationDelay = element.data('delay');
            if(animationDelay) {
              setTimeout(function(){
                  element.addClass( animation + " visible" );
                  element.removeClass('hiding');
              }, animationDelay);
            } else {
              element.addClass( animation + " visible" );
              element.removeClass('hiding');
            }               
        }, {accY: -90});

    } else {
        $('.hiding').css({'opacity' : 1});
    }

    $('.store-partners .owl-carousel').owlCarousel({
        loop:true,
        margin:1,
        dots: true,
        nav: true,
        pullDrag: false,
        responsive:{
            0:{
                items:1
            },
            430:{
                items:2
            },
            580:{
                items:5
            },
            767:{
                items:6
            },
            992:{
                items:7
            },
            1200:{
                items:9
            }
        }
    });

    $('.wing-mobile-menu ul li a').click(function(e){
        e.preventDefault();
        var _this = $(this).attr('href');
        $('.wing-mobile-menu ul li').removeClass('active');
        $(this).parent('li').addClass('active');
        $('.wm-content').stop(true, false).slideUp(300);
        $(_this).stop(true, false).slideDown(300);

    });

    $('.menu ul li a').click(function(e){
        var $this = $(this),
        $targetDiv = $($this.attr('href'));
        
        $('.nav-left ul li').removeClass('active');
        $('.menu ul li').removeClass('active');
        $this.parent().addClass('active');
        scrollToDiv($targetDiv,0);
        return false;
    });

    $('.input-wrap input, .input-wrap select').focus(function(){
        $(this).closest('.input-wrap').removeClass('error');
    });


});

$(window).load(function() {
	resize();

});

$(window).scroll(function() {
    updateNav();
});

// preloader once done
Pace.on('done', function() {
	// totally hide the preloader especially for IE
	setTimeout(function() {
		$('.pace-inactive').hide();
	}, 500);
});

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function scrollToDiv(element){
    var offset = element.offset();
    var offsetTop = offset.top;
    var totalScroll = offsetTop;
    var headerH = $('header').outerHeight(false);
    $('body,html').animate({
        scrollTop: totalScroll - headerH
    }, 500);
}

function updateNav() {
    var wH = window.innerHeight ? window.innerHeight : $(window).height(),
        headerH = $('header').outerHeight(false),
        curPos = $(window).scrollTop() + headerH,
        currentHash,
        subMenu = $('.menu'),
        liItems = subMenu.find('li');


    $('.jq-section').each(function(i, v){
        if($(this).offset().top <= curPos){
            currentHash = liItems.find('a[href="#'+$(this).attr('id')+'"]');

            liItems.children('a').parent('li').removeClass('active');
            currentHash.parent('li').addClass('active');
        }

    });
}

function initCustomForm() {
    $('select.custom-select').each(function() {
        $(this).wrap('<div class="custom-select-wrapper" />');
        $(this).before('<div class="custom-select-display" />');
        $(this).change(function() {
            $(this).siblings('.custom-select-display').text( $(this).find('option:selected').text() );
        });
        $(this).keyup(function() {
            $(this).siblings('.custom-select-display').text( $(this).find('option:selected').text() );
        });
        $(this).change();
    });
}
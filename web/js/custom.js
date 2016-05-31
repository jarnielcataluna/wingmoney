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

    if($('#birthday').length > 0 ){
        $('#birthday').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1945:2009',
            defaultDate: '01/01/1980'
        });
    }
    

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

        if($('.header-hamburger').is(':visible')) {
            $('.menu ul li').removeClass('is-open');
            $('.menu').hide();
            $('.header-hamburger').removeClass('active');
        }
        $this.parent().addClass('active');
        scrollToDiv($targetDiv,0);
        return false;
    });

    $('.input-wrap input, .input-wrap select').focus(function(){
        $(this).closest('.input-wrap').removeClass('error');
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

        console.log(isvalidate);

        if( isvalidate == true) {
            return true;
        } else {
            e.preventDefault();
        }
    })



    $('.header-hamburger').click(function(){
        var _this = $(this);
            $('.menu ul li').removeClass('is-open');
        

            if (_this.hasClass('active')) {

                $('.menu').hide();
                
                $('.menu ul li').removeClass('is-open');
                setTimeout(function(){
                    _this.removeClass('active');
                }, 400);
                

            } else {

                    
                $('.menu').stop(true, false).slideDown(300);

                $('.menu ul li').each(function(index){
                    var _this = $(this);
                    setTimeout(function(){
                        _this.addClass('is-open');
                    }, 100 + (index * 100));

                });
                setTimeout(function(){
                    _this.addClass('active');
                }, 100 + ($('.menu ul li').size() * 100));
            }
        

        
        
    });

    
});

$(window).load(function() {
	resize();

});

$(window).scroll(function() {
    updateNav();
   
});

$(window).on("load resize scroll",function(e){
    scrollParallax();
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

function scrollParallax() {

    if ( $('html').hasClass('desktop') && $(window).width() > 991 ) {

        var sT = $(window).scrollTop();
        var total = Math.round(-sT*0.20) - 300;

        $('.wing-form-wrap').css({'top': total  });
        $('.banner-text').css('top', Math.round(sT*0.20));
    }

    
}

function scrollToDiv(element){
    var offset = element.offset();
    var offsetTop = offset.top;
    var totalScroll = offsetTop;
    var headerH = $('header').outerHeight(false);
    $('body, html').animate({
        scrollTop: totalScroll - headerH + 1
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
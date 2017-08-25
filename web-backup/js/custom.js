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
    finalwrapHeight();
});

$(document).ready(function() {
	resize();
    initCustomForm();
    finalwrapHeight();

    isBusy = false;

    setTimeout(function() {
        $('.wing-form-wrap').addClass('scale');
    }, 500);

    $('.back-to-top').click(function(e){
        e.preventDefault();

        $("html, body").animate({ scrollTop: "0" } , 1000);
    });

    if($('#birthday').length > 0 ){
        $('#birthday').datepicker({
            minDate: new Date(1980,1-1,1), maxDate:'-13Y',
            changeMonth: true,
            changeYear: true,
            yearRange: '-80:-13',
            defaultDate: '01/01/1980',
            onSelect: function(dateText, inst) {
                console.log(dateText);
                this.setAttribute('value', this.value);
                $("input[value='']:not(:checkbox,:button):visible:empty:first").focus();

                
            }
        });
    }


    $('.custom-select').focusout(function(){    
        $(this).closest('.custom-select-wrapper').removeClass('focus');
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

    if($('.store-partners .owl-carousel').length > 0) {

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
    }

    $('.step-signup .owl-carousel').owlCarousel({
        loop:false,
        margin:1,
        dots: true,
        nav: true,
        pullDrag: false,
        responsive:{
            0:{
                items:1
            },
            430:{
                items:1
            },
            580:{
                items:1
            },
            768:{
                items:4
            },
            992:{
                items:4
            },
            1200:{
                items:4
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

    $('.menu ul li a:not(".wing-btn"), .btn-apply, .btn-signup, .h-s-cursor a, #wing-services ul li a').click(function(e){
        e.preventDefault();
        var __this = $(this),
        $targetDiv = $(__this.attr('href'));
        
        $('.nav-left ul li').removeClass('active');
        $('.menu ul li').removeClass('active');


        //window.history.pushState({}, '', $(this).attr('href').split('#')[1]);

        if($('.header-hamburger').is(':visible')) {
            $('.menu ul li').removeClass('is-open');
            $('.menu').hide();
            $('.header-hamburger').removeClass('active');
        }
        __this.parent().addClass('active');
        scrollToDiv($targetDiv,0);

    });

    $('.input-wrap input, .input-wrap select').focus(function(){
        $(this).closest('.input-wrap').removeClass('error');
        $('.fill-up-correctly').removeClass('is-open');
    });

    $('.wing-form input:not(:checkbox,:button)').bind("change paste keyup", function(e) {    
        if(e.keyCode == 13) { 
            if($("input[value='']:not(:checkbox,:button):visible:empty:first").length > 0) {
                
                $("input[value='']:not(:checkbox,:button):visible:empty:first").focus();
            } else {

                $(".wing-form select").each(function(index){
                    var  lengthEmpty = $(this).val();
                    
                    if(parseInt(lengthEmpty) == 0) {
                        $(this).simulate('mousedown');
                         return false; 
                        $.simulate;
                    }
                    
                
                });
            }
        }
   });


    $('.gender select').change(function(){

        if($(this).val() !="0") {
            
            $('.gender').find('.custom-select-display').css({'color' : '#000'});

            if($("input[value='']:not(:checkbox,:button):visible:empty:first").length > 0) {
                $("input[value='']:not(:checkbox,:button):visible:empty:first").focus();
            } else {
                $(".wing-form select").each(function(){
                    var  lengthEmpty = $(this).val();
                    
                    if(parseInt(lengthEmpty) == 0) {
                        $(this).simulate('mousedown');
                        $(this).closest('.custom-select-wrapper').addClass('focus');
                        console.log($(this));
                        return false; 
                    }
                });
            }

            
        } else {
            $('.gender').find('.custom-select-display').css({'color' : '#8d8d8d'});
        }


    });

    $('.id-type select').change(function(){

        if($(this).val() !="0") {
            $('.id-type').find('.custom-select-display').css({'color' : '#000'});
            if($("input[value='']:not(:checkbox,:button):visible:empty:first").length > 0) {

                $("input[value='']:not(:checkbox,:button):visible:empty:first").focus();
            } else {
                $(".wing-form select").each(function(){
                    var  lengthEmpty = $(this).val();
                    
                    if(parseInt(lengthEmpty) == 0) {
                        $(this).simulate('mousedown');
                        $(this).closest('.custom-select-wrapper').addClass('focus');
                        console.log($(this));
                         return false; 
                    }
                });
            }
        } else {
            console.log('test');
            $('.id-type').find('.custom-select-display').css({'color' : '#8d8d8d'});
            $('#id-number').focus();
        }
    });

    $('.finding-us select').change(function(){

        if($(this).val() !="0") {
            $('.finding-us').find('.custom-select-display').css({'color' : '#000'});
            if($("input[value='']:not(:checkbox,:button):visible:empty:first").length > 0) {
                
                $("input[value='']:not(:checkbox,:button):visible:empty:first").focus();
            } else {
                $(".wing-form select").each(function(){
                    var  lengthEmpty = $(this).val();
                    
                    if(parseInt(lengthEmpty) == 0) {
                        $(this).simulate('mousedown');
                        $(this).closest('.custom-select-wrapper').addClass('focus');
                        console.log($(this));
                         return false; 
                    }
                });
            }
        } else {
            console.log('test');
            $('.finding-us').find('.custom-select-display').css({'color' : '#8d8d8d'});
        }
    });

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

    $('.wpml-languages').mouseenter(function(){
        $(this).find('.wpml-lang-dropdown').css({'display' : 'block'});
    });

    $('.wpml-languages').mouseleave(function(){
        $(this).find('.wpml-lang-dropdown').css({'display' : 'none'});
    });

    

     $('img#refresh').click(function() {  

        if( isBusy == false) {
            isBusy = true;
            $('img#refresh').addClass('active');
            setTimeout(function(){
                $('img#refresh').removeClass('active');
                isBusy = false;
            }, 300);
            change_captcha();
            

        }
    });

});

$(window).load(function() {
	resize();
    finalwrapHeight();

    

    $('.wing-form-wrap').show();
    setTimeout(function() {
        $('.wing-form-wrap').addClass('scale');
    }, 500);

    // $('#defaultReal').realperson({ 
    //     length: 4,
    //     includeNumbers: true,
    //     hashName : {defaultReal}
    // });

    // refresh captcha
   
     
    

});

$(window).scroll(function() {
    updateNav();
   
});

$(window).on("load resize scroll",function(e){
    scrollParallax();
});

function change_captcha() {
    document.getElementById('captcha').src="/get_captcha.php?rnd=" + Math.random();
}


function scrollParallax() {

    if ( $('html').hasClass('desktop') && $(window).width() > 991 ) {

        var sT = $(window).scrollTop();
        var total = Math.round(-sT*0.20) - 320;

        $('.wing-form-wrap').css({'top': total  });
        $('.banner-text').css('top', Math.round(sT*0.20));
    }
    
}

function addParameterToURL(param){
    _url = location.href;
    _url += (_url.split('?')[1] ? '&':'?') + param;
    return _url;
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

function finalwrapHeight() {

    var wH = $(window).height();
    var hH = $('header').outerHeight(false);
    var totalH = wH - hH;
    $('.final-step-wrap').css({'height' : totalH});
}
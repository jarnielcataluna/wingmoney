//var isScrollingAllowed = true;
var win = $(window);
var doc = $(document);

//get all elements with class and get the biggest box
function get_biggest(elements){
    var biggest_height = 0;
    for ( var i = 0; i < elements.length ; i++ ){
        var element_height = $(elements[i]).height();
        //compare the height, if bigger, assign to variable
        if(element_height > biggest_height ) biggest_height = element_height;
    }
    return biggest_height;
}

function resize() {
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    // STICKY FOOTER
    var headerHeight = $('header').outerHeight();
    var footerHeight = $('footer').outerHeight();
    var footerTop = (footerHeight) * -1
    $('footer').css({marginTop: footerTop});
    $('#main-wrapper').css({paddingBottom: footerHeight});

    // for vertically middle content
    $('.bp-middle').each(function() {
        var bpMiddleHeight = $(this).outerHeight() / 2 * - 1;
        $(this).css({marginTop: bpMiddleHeight});
    });

    // for equalizer
    $('.classname').css({minHeight: 0});
      var ClassName = get_biggest($('.classname'));
      $('.classname').css({minHeight: ClassName});
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

function pageInitAnim() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    if (/android/i.test(userAgent)) {
        $('.hiding').removeClass('hiding').css('opacity','0');
        $('.animated').each(function() {
            var element = $(this);
            TweenMax.to(element, .3, { opacity: 1, ease: Expo.easeInOut});
        });
    } else {
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

// SMOOTH SCROLL
// function smoothScroll() {
//     var scrollTime = 1;
//     var scrollDistance = 150;

//     $(window).on("mousewheel DOMMouseScroll", function(event) {
//         event.preventDefault();
//         if (isScrollingAllowed) {

//             // var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
//             var delta = ( Math.abs(event.originalEvent.wheelDelta) < 120 ? event.originalEvent.wheelDelta / 6 : event.originalEvent.wheelDelta / 120 ) || -event.originalEvent.detail;
//             var scrollTop = win.scrollTop();
//             var finalScroll = scrollTop - parseInt(delta * scrollDistance);

//             TweenMax.to(win, scrollTime, {
//                 scrollTo: { y: finalScroll, autoKill: true },
//                 ease: Power1.easeOut,
//                 autoKill: true,
//                 overwrite: 5
//             });
//         }
//     });

// }


$(window).resize(function() {
	resize();
});

$(document).ready(function() {
	resize();

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
            minDate: new Date(1940,1-1,1), maxDate:'-13Y',
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
                //$("input[value='']:not(:checkbox,:button):visible:empty:first").focus();
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

    $('.wing-form-wrap').show();
    setTimeout(function() {
        $('.wing-form-wrap').addClass('scale');
    }, 500);

    // preloader once done
    Pace.on('done', function() {
        // totally hide the preloader especially for IE
        setTimeout(function() {
            $('.pace-inactive').hide();
            pageInitAnim();
            //smoothScroll();
            initCustomForm();
            

            if (Modernizr.touch) {
                $('html').addClass('bp-touch');
            }

            $('.find-out-more').click(function(e){
                e.preventDefault();

            });

            $('.find-out-more, .btn-knowmore').click(function(e){
                e.preventDefault();
                var __this = $(this),
                $targetDiv = $(__this.attr('href'));
                
                scrollToDiv($targetDiv,0);

            });

        }, 500);

    });

});

$(window).scroll(function() {
    //updateNav();
   
});

$(window).on("load resize scroll",function(e){
    //scrollParallax();
});

function change_captcha() {
    document.getElementById('captcha').src="/get_captcha.php?rnd=" + Math.random();
}

function addParameterToURL(param){
    _url = location.href;
    _url += (_url.split('?')[1] ? '&':'?') + param;
    return _url;
}




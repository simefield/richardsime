$(document).ready(function() {

/*
    // window width widget (for development purposes)
    // $(function(){
    //     windowResize();
    // });
    // $(window).resize(function(){
    //     windowResize();
    // });
    // function windowResize(){
    //     window.winWidth = $(window).width();
    //     $('p#temp_window_width').html(window.winWidth + ' : ');
    // }
*/


    // animate nav
    function showNav(){
        $('#mask_desktop').hide();
        $('nav').addClass('reveal');
    }
    function hideNav(){
        $('nav').removeClass('reveal');
    }


    // cookie functions
    function createCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        }
        else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
    }
    function getCookie(c_name) {
        if (document.cookie.length > 0) {
            c_start = document.cookie.indexOf(c_name + "=");
            if (c_start != -1) {
                c_start = c_start + c_name.length + 1;
                c_end = document.cookie.indexOf(";", c_start);
                if (c_end == -1) {
                    c_end = document.cookie.length;
                }
            return unescape(document.cookie.substring(c_start, c_end));
            }
        }
        return "";
    }
    function eraseCookie(name) {
        createCookie(name,"",-1);
    }

    // Desktop splash screen for first time visitors (no cookie)
    if (!Modernizr.touch){
        if (document.cookie.indexOf("maskDesktopCookie") >= 0) {
            showNav();
        } else {
            $('#mask_desktop').css({"opacity": 1});
            setTimeout(function(){
                $('#mask_desktop').addClass('fade_out');
                $(document).on('webkitTransitionEnd transitionend', '#mask_desktop', showNav);
            }, 3000);
            createCookie('maskDesktopCookie', '', 28);
        }
    // is touch...
    } else {
        showNav();
    }

    
    // ensure web app mode doesn't open page links in safari
    $(document).on("click","nav a",function(b){
        b.preventDefault();
        location.href=$(b.target).attr("href")
    });


    // add a 'current' slide class
    $('.slide:nth-child(1)').addClass('current');


    // set height of #slides to first slide height. ensure page has rendered first
    function setSlideHeight() {
        var slideHeight = $('.slide.current').height();
        $('#slides').height(slideHeight);
    }
    $(window).bind("load", function() {
        setSlideHeight();
    });
    $(document).on('orientationchange', setSlideHeight, false); 


    // add a current bullet class
    $('.bullet:nth-child(1)').addClass('selected');


/*
    // CSS scroll to page top
    // http://mitgux.com/smooth-scroll-to-top-using-css3-animations
    // Define the variables
    var easing, e, pos;

    $(function(){
          
        // Get the click event
        //$("#go-top").on("click", function(){
        $(".go-top-sets li").on("click", function(){
            // Get the class
            //easing= $(this).attr("class");
            e= "cubic-bezier(0.000, 0.000, 0.580, 1.000)"; // ease-out: http://matthewlein.com/ceaser/

            // Get the scroll pos
            pos= $(window).scrollTop();

            // Set the body top margin
            $("body").css({
                "margin-top": -pos+"px",
                "overflow-y": "scroll", // This property is posed for fix the blink of the window width change 
                // '-webkit-transform': '',
                // 'transform': ''
            });

            // Make the scroll handle on the position 0
            pos = $(window).scrollTop(70);

            // Add the transition property to the body element
            $("body").css("transition", "all 1s "+e);

            // Apply the scroll effects
            $("body").css("margin-top", "0");
            //$('body').css({'margin-top': + pos + 'px' , '-webkit-transform': 'translate3d(0,0,0)', 'transform': 'translate3d(0,0,0)'});


            // Wait until the transition end
            $("body").on("webkitTransitionEnd transitionend msTransitionEnd oTransitionEnd", function(){
                // Remove the transition property
                $("body").css("transition", "none");
            });
        });

    });
*/


    // touch sliding panels
    // http://mobile.smashingmagazine.com/2012/06/21/play-with-hardware-accelerated-css/
    $(function () {

        var sliding = startClientX = startClientY = startPixelOffset = pixelOffset = currentSlide = 0,
        
        slideCount = $('.slide').length;

        $(document).on('mousedown touchstart', 'body', slideStart);
        $(document).on('mousemove touchmove', 'body', slide);
        $(document).on('mouseup touchend', 'body', slideEnd);

        // implement left/right arrow keys for slides
        $(document).keydown(function(e){
            if (e.keyCode == 37) { // left arrow key
                // set dummy values: if pO is greater than sPO slides animate to the right, and vice-versa
                pixelOffset = 1;
                startPixelOffset = 0;
            }
            if (e.keyCode == 39) { // right arrow key
                pixelOffset = 0;
                startPixelOffset = 1;
            }
            sliding = 2;
            slideEnd();
        });

        // disable dragging images in browsers
        $(document).on('mousedown', 'img', function(obj) {
            return false;
        });
        
        $('.slide').each(function (i) {
            $('#bullets').append('<li class="bullet"></li>');

        });
        updateBullets();

        function slideStart(event) {
            if (event.originalEvent.touches)
                event = event.originalEvent.touches[0];
            if (sliding == 0) {
                sliding = 1;
                startClientX = event.clientX;
                startClientY = event.clientY;
            }
        }

        function slide(event) {

            //mouse registers, but not touch
            // var xMovement = Math.abs(event.clientX - startClientX);
            // var yMovement = Math.abs(event.clientY - startClientY);

            var xMovement = yMovement = 0;
            if (event.originalEvent.touches) {// mobile only
                //touch registers, but not mouse
                xMovement = Math.abs(event.originalEvent.touches[0].clientX - startClientX);
                yMovement = Math.abs(event.originalEvent.touches[0].clientY - startClientY);
                // constrain to either horizontal slide or vertical scroll
            }

            if(yMovement <= xMovement) { // scrolling horizontally
                event.preventDefault();
                //hideNav();
                
                if (event.originalEvent.touches) 
                    event = event.originalEvent.touches[0];
                    var deltaSlideX = event.clientX - startClientX;
                
                if (sliding == 1 && deltaSlideX != 0) {
                    sliding = 2;
                    startPixelOffset = pixelOffset;
                }
                if (sliding == 2) {
                    var touchPixelRatio = 1;
                    if ((currentSlide == 0 && event.clientX > startClientX) || (currentSlide == slideCount - 1 && event.clientX < startClientX))
                    touchPixelRatio = 3;
                    pixelOffset = startPixelOffset + deltaSlideX / touchPixelRatio;
                    $('#slides').css({'-webkit-transform': 'translate3d(' + pixelOffset + 'px,0,0)', 'transform': 'translate3d(' + pixelOffset + 'px,0,0)'}).removeClass();
                }
            } else { // scrolling vertically
                sliding = 0;
            }
        }

        function slideEnd(event) {
            if (sliding == 2) {
                sliding = 0;
                currentSlide = pixelOffset < startPixelOffset ? currentSlide + 1 : currentSlide - 1;
                currentSlide = Math.min(Math.max(currentSlide, 0), slideCount - 1);
                pixelOffset = currentSlide * -$('#wrapper').width();
                //$('#temp').remove(); // this was slowing down every animation after the first. seems better to collect style declarations in the head than take a hit to the smoothness
                $('<style id="temp">#slides.animate{-webkit-transform:translate3d(' + pixelOffset + 'px,0,0); transform:translate3d(' + pixelOffset + 'px,0,0)}</style>').appendTo('head');
                $('#slides').addClass('animate').css({'-webkit-transform': '', 'transform': ''});
                // functions to call at end of slide transition
                $(document).on('webkitTransitionEnd transitionend', '#slides', transEnd);
            }
        }

        function transEnd(event) {
            // ensure transitionend only fires once
            $(document).off('webkitTransitionEnd transitionend', '#slides');
            
            //if (event.propertyName === "-webkit-transform" || event.propertyName === "transform") {
            
            var pause = 0;
            // scroll page to top of slide
            var headerHeight = $('header').height() + 1; // 1px for container border
            if(window.pageYOffset > headerHeight) {
                pause = 250;
                $.scroll(headerHeight); // zepto.scroll.js
                // or use css method: http://mitgux.com/smooth-scroll-to-top-using-css3-animations
            }

            setTimeout(function(){
                // add a clas of 'current' to slide
                $('.slide').removeClass('current');
                $('.slide:nth-child(' + (currentSlide + 1) + ')').addClass('current');
                // set #slides height to current child's slide height
                var currentSlideHeight = $('.slide.current').height();
                $('.slide.current').height(currentSlideHeight);
                $('#slides').height(currentSlideHeight);
                // update bullets
                updateBullets();
            }, pause);

        }

        function updateBullets() {
            // remove the selected class from each bullet and set it to the current one
            $('.bullet').removeClass('selected');
            $('.bullet:nth-child(' + (currentSlide + 1) + ')').addClass('selected');
        }
       
    });



});


/*
if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
    $.get('./about.php', function(response){
        $('.about_me section#container').append(response);
    });
    $('.about_me section > div.about_me').remove();
}
*/




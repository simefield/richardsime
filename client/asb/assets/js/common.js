// // When ready...
$(document).ready(function() {


    // window width widget (for development purposes)
    $(function(){
        windowResize();
    });
    $(window).resize(function(){
        windowResize();
    });
    function windowResize(){
        window.winWidth = $(window).width();
        $('.js-temp-window-width').html(window.winWidth + ' : ');
    }




    $('.dropdown-toggle').dropdown();

});

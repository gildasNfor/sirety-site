// Init any navigation here.
(function($) {
    $(document).on('click', '.hamburger', function() {
        let hamburger = $(this);
        let navbar = $('.navbar');
        //let stopScroll = $('html');
        hamburger.toggleClass('is-active');
        navbar.toggleClass('is-active');
        //stopScroll.toggleClass('stop-scroll');
    });
    $(document).on('click', '.sub-menu > a', function() {
        $(this).parent('.sub-menu').toggleClass('sub-menu--active');
    });
    $(document).on('click', '.navbar__lng > a', function() {
        $('.lng__holder').toggleClass('lng__active');
    });

    // $(".sub-menu > a").hover(function(){
    //     $(this).parent('.sub-menu').addClass('sub-menu--active');
    //     }, function(){
    //         $(this).parent('.sub-menu').removeClass('sub-menu--active');
    // });

})(jQuery); 
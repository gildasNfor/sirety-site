// Init any slider here.
(function($) {
    $('.trusted-by-slider').slick({
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 600,
		    autoplay: true,
        autoplaySpeed: 6000,
        variableWidth: false,
        appendArrows: $('.js-trusted-by-arrow'),
        prevArrow: '<div class="trusted-by--arrow trusted-by--left"></div>',
        nextArrow: '<div class="trusted-by--arrow trusted-by--right"></div>',
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToScroll: 2,
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 651,
              settings: {
                slidesToScroll: 3,
                slidesToShow: 3,
                vertical: true,
                verticalSwiping: false
              }
            }
        ]
    });

    // Team Slider
    $('.js-team-slider').slick({
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 6000,
        responsive: [
          {
            breakpoint: 1025,
            settings: {
              slidesToScroll: 2,
              slidesToShow: 2,
            }
          }
        ]
    });

    // Team Slider Mobile
    let teamSlider = $(".js-team-slider-mobile");
    if (teamSlider.length > 0) { 
      let slider = $(".js-team-slider-controls-mobile");
	    let prevArrow = slider.find(".js-prev");
	    let nextArrow = slider.find(".js-next");
	    $('.js-team-slider-mobile').slick({
		    slidesToShow: 1,
        slidesToScroll: 1,
		    arrows: true,
		    prevArrow: prevArrow,
		    nextArrow: nextArrow,
        speed: 600,
		    autoplay: true,
        autoplaySpeed: 6000,
        variableWidth: false,
		    rows: 4,
		    slidesPerRow: 1,
	    });
    $(window).resize(function(){
      $('.js-team-slider-mobile')[0].slick.refresh(); 
      $('.js-team-slider')[0].slick.refresh(); 
    });
  }

})(jQuery); 
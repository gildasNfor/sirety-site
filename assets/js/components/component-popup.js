// Init any popup here.
(function($) {
    $(document).on("click", ".js-popup", function() {
        $('.popup--section').removeClass('hide-popup');
        $('.popup--section').addClass('show-popup');
    });
    $(document).on("click", ".close-btn", function() {
        $('.popup--section').addClass('hide-popup');
        $('.popup--section').removeClass('show-popup');
    });
}(jQuery));
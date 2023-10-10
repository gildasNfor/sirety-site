// Init any language translate here.
(function($) {
    // if (localStorage.getItem('screenModeNightTokenState') == 'night') {
    //     $("body").addClass("night");
    //   }
    //   if (localStorage.getItem('screenModeNightTokenState') == 'day') {
    //     $("body").addClass("day");
    //   }

    //   $('.day').click(function() {
    //     localStorage.setItem('screenModeNightTokenState', 'day');
    //     $("body").removeClass("night");
    //     $('.switcher p.active').removeClass('active');
    //     $(this).addClass('active');
    //   });
    //   $(".night").click(function() {
    //     localStorage.setItem('screenModeNightTokenState', 'night');
    //     $("body").addClass("night");
    //     $('.switcher p.active').removeClass('active');
    //     $(this).addClass('active');
    //   });

    // $('.ger-lng').on('click', function(){
    //     $("body").sessionStorage.setItem( 'lang', 'ger' );
    // });


    // if ('sessionStorage' in window && typeof sessionStorage === 'object') {
    //     $(document).ready(function() {
    //         // Set the class if greyscale is set
    //         // Note that localStorage saves everything as strings
    //         if (sessionStorage["germany-site"] === "1") {
    //             $('body').addClass('germany-site');
    //         }
    //         if (sessionStorage["french-site"] === "2") {
    //             $('body').addClass('french-site');
    //         }
    //         // Register click listener for the button
    //         $('.ger-lng').click(function() {
    //             // Toggle greyscale on and off
    //             if (sessionStorage["germany-site"] !== "1") {
    //                 $('body').addClass('germany-site');
    //                 sessionStorage["germany-site"] = "1";
    //             }
    //             if (sessionStorage["french-site"] === "2") {
    //                 $('body').removeClass('french-site');
    //                 sessionStorage["french-site"] = "0"; 
    //             }
    //         }); // - button click
            
    //         // Register click listener for the button
    //         $('.fre-lng').click(function() {
    //             // Toggle greyscale on and off
    //             if (sessionStorage["french-site"] !== "2") {
    //                 $('body').addClass('french-site');
    //                 sessionStorage["french-site"] = "2";
    //             }
    //             if (sessionStorage["germany-site"] === "1") {
    //                 $('body').removeClass('germany-site');
    //                 sessionStorage["germany-site"] = "0"; 
    //             }
    //         }); // - button click
    //     }); // - doc ready
    // }

    $('.js-eng').on('click', function(){
        $("body").addClass('eng-site');
        $('body').removeClass('french-site');
        $('body').removeClass('germany-site');
    });
    $('.js-ger').on('click', function(){
        $("body").removeClass('eng-site');
        $('body').removeClass('french-site');
        $('body').addClass('germany-site');
    });
    $('.js-fre').on('click', function(){
        $("body").removeClass('eng-site');
        $('body').addClass('french-site');
        $('body').removeClass('germany-site');
    });



})(jQuery); 
// Init any language translate here.
;(function ($) {
  if ("sessionStorage" in window && typeof sessionStorage === "object") {
    $(document).ready(function () {
      // Set the class if greyscale is set
      // Note that localStorage saves everything as strings
      if (sessionStorage["germany-site"] === "1") {
        $("body").addClass("germany-site")
      }
      if (sessionStorage["french-site"] === "2") {
        $("body").addClass("french-site")
      }
      if (sessionStorage["eng-site"] === "3") {
        $("body").addClass("eng-site")
      }
      // Register click listener for the button
      $(".js-ger").click(function () {
        // Toggle greyscale on and off
        if (sessionStorage["germany-site"] !== "1") {
          $("body").addClass("germany-site")
          sessionStorage["germany-site"] = "1"
        }
        if (sessionStorage["french-site"] === "2") {
          $("body").removeClass("french-site")
          sessionStorage["french-site"] = "0"
        }
        if (sessionStorage["eng-site"] === "3") {
          $("body").removeClass("eng-site")
          sessionStorage["eng-site"] = "0"
        }
      }) // - button click

      // Register click listener for the button
      $(".js-fre").click(function () {
        // Toggle greyscale on and off
        if (sessionStorage["french-site"] !== "2") {
          $("body").addClass("french-site")
          sessionStorage["french-site"] = "2"
        }
        if (sessionStorage["germany-site"] === "1") {
          $("body").removeClass("germany-site")
          sessionStorage["germany-site"] = "0"
        }
        if (sessionStorage["eng-site"] === "3") {
          $("body").removeClass("eng-site")
          sessionStorage["eng-site"] = "0"
        }
      }) // - button click

      // Register click listener for the button
      $(".js-eng").click(function () {
        // Toggle greyscale on and off
        if (sessionStorage["eng-site"] !== "3") {
          $("body").addClass("eng-site")
          sessionStorage["eng-site"] = "3"
        }
        if (sessionStorage["germany-site"] === "1") {
          $("body").removeClass("germany-site")
          sessionStorage["germany-site"] = "0"
        }
        if (sessionStorage["french-site"] === "2") {
          $("body").removeClass("french-site")
          sessionStorage["french-site"] = "0"
        }
      }) // - button click
    }) // - doc ready
  }

  $(document).ready(function () {
    if ($("body").hasClass("french-site")) {
      $("body").removeClass("eng-site")
      let text = $(".select-dropdown dd ul li a.js-fre").html()
      $(".select-dropdown dt a span").html(text)
    }
    if ($("body").hasClass("germany-site")) {
      $("body").removeClass("eng-site")
      let text = $(".select-dropdown dd ul li a.js-ger").html()
      $(".select-dropdown dt a span").html(text)
    }
  })

  // $('.js-eng').on('click', function(){
  //     $("body").addClass('eng-site');
  //     $('body').removeClass('french-site');
  //     $('body').removeClass('germany-site');
  // });
  // $('.js-ger').on('click', function(){
  //     $("body").removeClass('eng-site');
  //     $('body').removeClass('french-site');
  //     $('body').addClass('germany-site');
  // });
  // $('.js-fre').on('click', function(){
  //     $("body").removeClass('eng-site');
  //     $('body').addClass('french-site');
  //     $('body').removeClass('germany-site');
  // });

  $(document).ready(function () {
    $(".navbar__lng").removeClass("onload-hide")
  })
})(jQuery)

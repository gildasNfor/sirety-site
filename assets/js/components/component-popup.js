// Init any popup here.
;(function ($) {
  // $(document).on("click", ".js-popup", function () {
  //   $(".popup--section").removeClass("hide-popup")
  //   $(".popup--section").addClass("show-popup")
  // })
  $(document).on("click", ".close-btn", function () {
    $(".popup--section").addClass("hide-popup")
    $(".popup--section").removeClass("show-popup")
  })
  $(document).on("click", ".js-popup-crm", function () {
    $(".crm").removeClass("hide-popup")
    $(".crm").addClass("show-popup")
  })

  $(document).on("click", ".js-popup-fo", function () {
    $(".fo").removeClass("hide-popup")
    $(".fo").addClass("show-popup")
  })

  $(document).on("click", ".js-popup-laundry-fr", function () {
    $(".laundry-fr").removeClass("hide-popup")
    $(".laundry-fr").addClass("show-popup")
  })

  $(document).on("click", ".js-popup-hk", function () {
    $(".hk").removeClass("hide-popup")
    $(".hk").addClass("show-popup")
  })

  $(document).on("click", ".js-popup-rms", function () {
    $(".rms").removeClass("hide-popup")
    $(".rms").addClass("show-popup")
  })

  $(document).on("click", ".js-popup-acc", function () {
    $(".acc").removeClass("hide-popup")
    $(".acc").addClass("show-popup")
  })

  $(document).on("click", ".js-popup-stock", function () {
    $(".stock").removeClass("hide-popup")
    $(".stock").addClass("show-popup")
  })

  $(document).on("click", ".js-popup-sales", function () {
    $(".sales").removeClass("hide-popup")
    $(".sales").addClass("show-popup")
  })
})(jQuery)

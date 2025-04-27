(function ($) {
  "use strict";

  jQuery(document).ready(function () {
    $(".menu_show").on("click", function () {
      $(".mobile_side_menu").toggleClass("on");
      $("body").toggleClass("overflow-hidden");
    });
    $(".close_menu").on("click", function () {
      $(".mobile_side_menu").toggleClass("on");
      $("body").toggleClass("overflow-hidden");
    });

    $(".mobile_nav .menu-item-has-children > a").each(function () {
      $(this).after(
        '<button class="expend_menu"><i class="ri-arrow-down-s-fill"></i></button>'
      );
    });
    $(".expend_menu").on("click", function () {
      $(this).next(".sub-menu").toggleClass("expend");
    });

    $(".news-carousel222").slick({
      dots: true,
      arrows: false,
      infinite: true,
      autoplay: true,
      speed: 300,
      slidesToShow: 1,
    });
    $(".blog-slider").slick({
      dots: true,
      arrows: false,
      infinite: true,
      autoplay: true,
      speed: 300,
      slidesToShow: 1,
    });

    $(".news-carousel").slick({
      dots: false,
      infinite: true,
      autoplay: true,
      arrows: true,
      speed: 300,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });

    $(".brands").slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 6,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
      ],
    });

    // filter open
    $(".filter-title").on("click", function (e) {
      $(".filter-list").removeClass("h-full");
      $(this).siblings().toggleClass("h-full");
    });

    // scroll top
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $(".scroll-top").addClass("top");
      } else {
        $(".scroll-top").removeClass("top");
      }
    });
    $(".scroll-top").click(function () {
      $("html, body").animate({ scrollTop: 0 }, 500);
    });
  }); //document ready

  // search product

  $(document).on("click", function (e) {
    if ($(e.target).attr("class") != "search_product") {
      $(".search_result").hide();
      $(".search_product").find(".search_result").empty();
    }
  });

  $(".min_cart").on("click", function () {
    $(".mincart_wrap").toggleClass("on");
  });
  $(".cart_close").on("click", function () {
    $(".mincart_wrap").toggleClass("on");
  });
  // sticky sidebar
  jQuery(document).ready(function ($) {
    $(".main-sidebar.isSticky .elementor-widget-wrap").each(function () {
      if ($(this).find(".sticky-col").length === 0) {
        var $widgets = $(this).children(".elementor-widget");
        if ($widgets.length > 0) {
          $widgets.wrapAll('<div class="sticky-col"></div>');
        }
      }
    });
  });
})(jQuery);

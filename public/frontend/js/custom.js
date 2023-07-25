

jQuery(function ($) {
  "use strict";

  /* star Wow */
  new WOW().init();

  //

  

  //slider

  var swiper = new Swiper(".swiper-container", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    autoplay: {
      delay: 8000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  
  var swiper = new Swiper('.swiper-container2', {
    slidesPerView: 2,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    centeredSlides: false,
    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,
    autoplay: {
      delay: 5000
    },
    breakpoints: {
      1280: {
        slidesPerView: 2
      },
      800: {
        slidesPerView: 2
      },
      640: {
        slidesPerView: 1
      },
      400: {
        slidesPerView: 1
      },
      200: {
        slidesPerView: 1
      }
    },
  });

    
  var swiper = new Swiper('.swiper-container3', {
    slidesPerView: 6,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    centeredSlides: false,
    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,
    autoplay: {
      delay: 5000
    },
    breakpoints: {
      1280: {
        slidesPerView: 6
      },
      800: {
        slidesPerView: 4
      },
      640: {
        slidesPerView: 2
      },
      400: {
        slidesPerView: 2
      },
      200: {
        slidesPerView: 1
      }
    },
  });

   var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });


  $(document).ready(function () {
    $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none",
    });
  });

  $("#iframe").fancybox({
    'type': 'iframe'
  });

  

}); /* end js*/

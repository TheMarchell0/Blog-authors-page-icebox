document.addEventListener("DOMContentLoaded", function () {
  var popularSwiper = new Swiper(".popular-swiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,

      renderBullet: function (index, className) {
        return (
          '<span role="button" class="' +
          className +
          '">' +
          (index + 1) +
          "</span>"
        );
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    threshold: 1,
    watchSlidesVisibility: true,
    preloadImages: false,
    lazy: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 8,
        slidesPerColumn: 1,
        slidesPerColumnFill: "column",
      },

      768: {
        slidesPerView: 2,
        slidesPerColumn: 2,
        slidesPerGroup: 2,
        spaceBetween: 20,
        slidesPerColumnFill: "row",
      },
    },
    on: {
      init: function () {
        document.querySelector(".loadflex").classList.remove("loadflex");
      },
    },
  });
});

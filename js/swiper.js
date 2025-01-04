"use strict";

var slider2 = new Swiper(".swiper", {
  loop: true,
  initialSlide: 0,
  centeredSlides: true,
  spaceBetween: 24,
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    767: {
      slidesPerView: 2,
      centeredSlides: true,
    },
  },
});



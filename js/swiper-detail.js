"use strict";

const swiperSlides = document.getElementsByClassName("swiper-slide");
const breakPoint = 500; // ブレークポイントを設定
let swiper;
let swiperBool;

window.addEventListener(
  "load",
  () => {
    if (breakPoint < window.innerWidth) {
      swiperBool = false;
    } else {
      createSwiper();
      swiperBool = true;
    }
  },
  false
);

window.addEventListener(
  "resize",
  () => {
    if (breakPoint < window.innerWidth && swiperBool) {
      swiper.destroy(false, true);
      swiperBool = false;
    } else if (breakPoint >= window.innerWidth && !swiperBool) {
      createSwiper();
      swiperBool = true;
    }
  },
  false
);

const createSwiper = () => {
  swiper = new Swiper(".swiper", {
    loop: false, // ループさせる
    spaceBetween: 20,
    slidesPerView: 1.2,
    speed: 1500, // 少しゆっくり(デフォルトは300)
    // ページネーション
    pagination: {
      el: ".swiper-pagination",
      clickable: true, // クリック可能にする
    },
    // 前後の矢印
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
};

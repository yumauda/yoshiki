"use strict";

// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
  gsap.fromTo(
    ".js-news-title",
    {
      opacity: 0,
      x: -30,
    
    },
    {
      duration: 1.5,
      opacity: 1,
      x: 0,
      stagger: 0.15,
      scrollTrigger: {
        trigger: ".p-top-news",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-achieve-title",
    {
      opacity: 0,
      y: 70,
    
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".p-top-achieve",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-choose-title",
    {
      opacity: 0,
      x: -30,
    
    },
    {
      duration: 1.5,
      opacity: 1,
      x: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-top-choose",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-choose-cards",
    {
      opacity: 0,
      y: 75,
      clipPath: "inset(100% 0% 0% 0%)",
    },
    {
      duration: 0.5,
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-top-choose__lists",
        start: "0% 50%",
      },
      /* ease: "power3.out", */
    }
  );
  gsap.fromTo(
    ".js-room-title",
    {
      opacity: 0,
      x: -30,
    },
    {
      duration: 1.5,
      opacity: 1,
      x: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-top-room",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-room-cards",
    {
      opacity: 0,
      y: 30,
      clipPath: "inset(0% 100% 0% 0%)",
    },
    {
      duration: 0.5,
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-top-room__lists",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-recruit-title",
    {
      opacity: 0,
      x: 100,
    },
    {
      duration: 1.5,
      opacity: 1,
      x: 0,
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".p-top-recruit",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
  
  gsap.fromTo(
    ".js-top-future",
    {
      opacity: 0,
    },
    {
      duration: 1.5,
      opacity: 1,
      scrollTrigger: {
        trigger: ".p-top-future",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
});

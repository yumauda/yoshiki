"use strict";

// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
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
  )
  gsap.fromTo(
    ".js-choose-cards",
    {
      opacity: 0,
      y: 30,
    },
    {
      duration: 1.5,
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-top-choose__lists",
        start: "0% 50%",
      },
      ease: "power3.out",
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
    },
    {
      duration: 1.5,
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
      x: -30,
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

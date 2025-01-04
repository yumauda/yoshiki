"use strict";

// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
  gsap.fromTo(
    ".js-search-title",
    {
      opacity: 0,
      x: -50,
    
    },
    {
      duration: 1.5,
      opacity: 1,
      x: 0,
      stagger: 0.15,
      delay: 0.6,
      scrollTrigger: {
        trigger: ".p-search",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  
  gsap.fromTo(
    ".js-search-cards",
    {
      opacity: 0,
      y: 75,
      clipPath: "inset(100% 0% 0% 0%)",
    },
    {
      duration: 0.5,
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
      delay: 0.8,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-search",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  
  gsap.fromTo(
    ".js-block-cards",
    {
      opacity: 0,
      y: 30,
      clipPath: "inset(0% 0% 100% 0%)",
    },
    {
      duration: 0.5,
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-block--white",
        start: "0% 70%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-consistent",
    {
      opacity: 0,
      y: 30,
      clipPath: "inset(0% 0% 100% 0%)",
    },
    {
      duration: 0.5,
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".js-consistent-timing",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  
});

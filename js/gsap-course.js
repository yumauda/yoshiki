"use strict";

// Then, once the page loads...
window.addEventListener("DOMContentLoaded", function () {
  gsap.fromTo(
    ".js-course-title",
    {
      opacity: 0,
      x: -30,
    
    },
    {
      duration: 1.5,
      delay: 0.5,
      opacity: 1,
      x: 0,
      stagger: 0.15,
      scrollTrigger: {
        trigger: ".p-course",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  
  
  gsap.fromTo(
    ".js-course-cards",
    {
      opacity: 0,
      y: 40,
      clipPath: "inset(100% 0% 0% 0%)",
    },
    {
      duration: 0.5,
      delay: 0.7,
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: ".p-course",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  gsap.fromTo(
    ".js-elementary-table",
    {
      opacity: 0,
      y: 40,
      clipPath: "inset(100% 0% 0% 0%)",
    },
    {
      duration: 0.5,
      clipPath: "inset(0% 0% 0% 0%)",
      opacity: 1,
      y: 0,
      stagger: 0.3,
      scrollTrigger: {
        trigger: "#elementary",
        start: "0% 50%",
      },
      ease: "power3.out",
    }
  );
  
  
});

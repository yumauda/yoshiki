jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  $("#zipcode1").on("blur", function () {
    AjaxZip3.zip2addr("zipcode1", "", "address1", "address1");
  });
  /* var topBtn = $(".p-totop");
  topBtn.hide();

  function handleScroll() {
    if ($(window).width() >= 768) {
      $(window).on("scroll", function () {
        if ($(this).scrollTop() > 70) {
          topBtn.fadeIn();
        } else {
          topBtn.fadeOut();
        }
      });
    } else {
      $(window).off("scroll");
      topBtn.hide();
    }
  } */

  /*   handleScroll(); */

  // ウィンドウのリサイズ時に再評価
  /* $(window).resize(function () {
    handleScroll();
  }); */
  $(document).ready(function ($) {
    $(".p-submit__cancel").on("click", function () {
      $(".p-submit").addClass("fade-out");
    });
  });
  var topBtn = $(".p-totop");
  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });
  $(".p-course__pageLink-link").click(function (e) {
    e.preventDefault(); // Prevent the default anchor click behavior

    var targetId = $(this).attr("href"); // Get the href attribute value
    var targetElement = $(targetId); // Find the target element by ID

    if (targetElement.length) {
      $("html, body").animate(
        {
          scrollTop: targetElement.offset().top - 100,
        },
        300, // Duration of the animation
        "swing" // Easing function
      );
    }
  });

  $("#drawer a[href]").on("click", function (event) {
    $(".p-drawer-icon").trigger("click");
  });
});

jQuery(document).ready(function ($) {
  $(".p-drawer-icon").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("is-active");
    $(".p-drawer-content").toggleClass("is-active");
    $(".p-drawer-background").toggleClass("is-active");

    // テキストの切り替え
    if ($(this).hasClass("is-active")) {
      $(".p-drawer-icon__text").text("閉じる");
    } else {
      $(".p-drawer-icon__text").text("メニュー");
    }

    return false;
  });
});

jQuery(document).ready(function ($) {
  $(".p-drawer-icon").on("click", function () {
    $("body").toggleClass("drawer-open");
  });
});
window.addEventListener("scroll", function () {
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  var element = document.querySelector(".p-floating");

  if (window.innerWidth <= 768) {
    // 768px以下のデバイスでのみ動作
    if (scrollPosition > 200) {
      element.style.opacity = "1";
      element.style.visibility = "visible";
    } else {
      element.style.opacity = "0";
      element.style.visibility = "hidden";
    }
  }
});

let scrollPosition = 0;

window.onload = function () {
  document.body.classList.add("fade-in");
};

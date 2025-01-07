jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  $("#zipcode1").on("blur", function () {
    AjaxZip3.zip2addr("zipcode1", "", "address1", "address1");
  });
  var topBtn = $(".p-totop");
  topBtn.hide();

  // 関数を定義して、PC時のみスクロールイベントを設定
  function handleScroll() {
    if ($(window).width() >= 768) {
      // PC時の条件
      $(window).on("scroll", function () {
        if ($(this).scrollTop() > 70) {
          topBtn.fadeIn();
        } else {
          topBtn.fadeOut();
        }
      });
    } else {
      // スクロールイベントを解除してボタンを非表示
      $(window).off("scroll");
      topBtn.hide();
    }
  }

  // 初期化時に実行
  handleScroll();

  // ウィンドウのリサイズ時に再評価
  $(window).resize(function () {
    handleScroll();
  });
  $(document).ready(function ($) {
    $(".p-submit__cancel").on("click", function () {
      $(".p-submit").addClass("fade-out");
    });
  });
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

  $("#drawer a[href]").on("click", function (event) {
    $(".p-drawer-icon").trigger("click");
  });

/*   let scrollPosition = 0;  */

  /* $(window).on("scroll", function () {
    var scrollTop = $(this).scrollTop();

 
    var windowWidth = $(this).width();

    if (windowWidth <= 767 && scrollTop >= 200) {
      $(".p-floating").addClass("is-active");
      scrollPosition = scrollTop;
    } else {
      $(".p-floating").removeClass("is-active");
    }
  }); */
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

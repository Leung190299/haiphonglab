jQuery(function ($) {
  var clickEvent = "ontouchstart" in window ? "touchstart" : "click";

  let $window = $(window),
    $body = $("body");



  function counterNumber() {
    var run = false;
    if (!$body.hasClass("page-template-home-page")) {
      return;
    }

    $window.scroll(function () {
      var top = $(".conso").offset().top - window.innerHeight;

      if (run || $window.scrollTop() <= top) {
        return;
      }

      $(".count").each(function () {
        $(this)
          .prop("Counter", 0)
          .animate(
            {
              Counter: $(this).text(),
            },
            {
              duration: 4000,
              easing: "swing",
              step: function (now) {
                $(this).text(Math.ceil(now));
              },
            }
          );
      });

      run = true;
    });
  }

  function popupForm() {
    $(".home-banner-form").magnificPopup({
      type: "inline",
      preloader: false,
      modal: true,
    });
    $(".home-doitac-form").magnificPopup({
      type: "inline",
      preloader: false,
      modal: true,
    });
    $(".publisher-banner__btn").magnificPopup({
      type: "inline",
      preloader: false,
      modal: true,
    });
    $(".advertiser-banner__btn").magnificPopup({
      type: "inline",
      preloader: false,
      modal: true,
    });

    $(document).on("click", ".popup-modal-dismiss", function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });
  }

  function toggleMenu() {
    const nav = document.querySelector(".header__inner");
    if (!nav) {
      return;
    }
    const $menu = $(".header__inner");
    const button = document.querySelector(".menu-toggle");

    $(document).mouseup((e) => {
      if (!$menu.is(e.target) && $menu.has(e.target).length === 0) {
        // ... nor a descendant of the container
        $menu.removeClass("is-open");
      }
    });
    button.addEventListener("click", () => {
      nav.classList.toggle("is-open");
    });
  }

  function tabTransfer() {
    $(".banner-qc__tabs-item").click(function () {
      let tab_id = $(this).attr("data-tab");
      let id = $(this).attr("data-id");

      $(".banner-qc__tabs-item").removeClass("active");
      $(".banner-qc__inner").removeClass("active");

      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
      $(".banner-qc__item").removeClass("active-desc");

      $(`#tab-name${id}_0`).addClass("active-desc");
      $(`.tab-name${id}_0`).addClass("active-desc");
    });

    $(".tab-name").click(function () {
      let tab_id = $(this).attr("data-tab");
      $(".tab-name").removeClass("active-desc");
      $(".banner-qc__item").removeClass("active-desc");

      $(this).addClass("active-desc");
      $("#" + tab_id).addClass("active-desc");
    });

    $(".casestudy__tab").click(function () {
      let tab_id = $(this).attr("data-tab");
      $(".casestudy__tab").removeClass("active");
      $(".casestudy__item").removeClass("active");

      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
    });
  }

  function runAnimation() {
    let wow = new WOW({
      boxClass: "wow",
      animateClass: "animate__animated",
    });
    wow.init();
  }
  function zoomAnimation() {
    $(".img_zoomAnimation")
      .on("click", function () {
        $(this).find("img").css({ transform: "scale(1.6)", transition: ".5s" });
      })
      .on("mouseout", function () {
        $(this).find("img").css({ transform: "scale(1)", transition: ".5s" });
      })
      .on("mousemove", function (e) {
        $(this)
          .find("img")
          .css({
            "transform-origin":
              ((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
              "% " +
              ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
              "%",
            transition: "0s",
          });
      });
  }

  // runAnimation();
  // counterNumber();
  // popupForm();
  // toggleMenu();
  // tabTransfer();
  // zoomAnimation();
});

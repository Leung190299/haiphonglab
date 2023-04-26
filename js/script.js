jQuery(function ($) {
  var clickEvent = "ontouchstart" in window ? "touchstart" : "click";

  let $window = $(window),
    $body = $("body");

  function slickSlide() {
    $(".homeBanner").slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      cssEase: "linear",
      autoplay: true,
      autoplaySpeed: 3000,
    });
    $(".homeService_body").slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      cssEase: "linear",
      autoplay: true,
      autoplaySpeed: 3000,
      nextArrow: `<button class="nextArrow"> <svg width="35px" height="35px" viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#000000"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]"></path></g></g></g></svg> </button>`,
      prevArrow: `<button class="prevArrow"><svg width="35px" height="35px" viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Dribbble-Light-Preview" transform="translate(-345.000000, -6679.000000)" fill="#000000"><g id="icons" transform="translate(56.000000, 160.000000)"><path d="M299.633777,6519.29231 L299.633777,6519.29231 C299.228878,6518.90256 298.573377,6518.90256 298.169513,6519.29231 L289.606572,6527.55587 C288.797809,6528.33636 288.797809,6529.60253 289.606572,6530.38301 L298.231646,6538.70754 C298.632403,6539.09329 299.27962,6539.09828 299.685554,6538.71753 L299.685554,6538.71753 C300.100809,6538.32879 300.104951,6537.68821 299.696945,6537.29347 L291.802968,6529.67648 C291.398069,6529.28574 291.398069,6528.65315 291.802968,6528.26241 L299.633777,6520.70538 C300.038676,6520.31563 300.038676,6519.68305 299.633777,6519.29231" id="arrow_left-[#335]"></path></g></g></g></svg> </button>`,
    });
  }

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

  slickSlide();
  // runAnimation();
  // counterNumber();
  // popupForm();
  // toggleMenu();
  // tabTransfer();
  // zoomAnimation();
});

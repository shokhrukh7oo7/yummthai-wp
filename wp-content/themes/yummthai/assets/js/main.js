$(document).ready(function () {
  new Swiper(".swiper", {
    pagination: { el: ".swiper-pagination", clickable: !0 },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: !0,
  });
  $(".unauthorized-btn").on("click", function (n) {
    n.stopPropagation();
    n = $(this).data("target");
    $(n).toggleClass("active");
  }),
    $(window).on("click", function () {
      $(".hidden-panel").removeClass("active");
    }),
    $(".hidden-panel").on("click", function (n) {
      n.stopPropagation();
    }),
    $(".hidden-panel .no-link").on("click", function (n) {
      n.preventDefault(),
        $("#modalLogin").modal("show"),
        $(".hidden-panel").removeClass("active");
    }),
    $(".navigation-bar ul li a").on("click", function (n) {
      n.preventDefault();
      n = $(this.getAttribute("href"));
      n.length &&
        ($("html, body").animate({ scrollTop: n.offset().top }, 200),
        $(".navigation-bar ul li a").removeClass("active"),
        $(this).addClass("active"));
    });
});




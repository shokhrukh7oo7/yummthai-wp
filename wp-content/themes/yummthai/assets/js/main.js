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


// Фильтрация для пагинации
// document.addEventListener("DOMContentLoaded", function () {
//     const categoryButtons = document.querySelectorAll(".category span");

//     categoryButtons.forEach(button => {
//         button.addEventListener("click", function () {
//             const selectedCategory = this.getAttribute("data-filter");

//             window.location.href = `?category=${selectedCategory}`;
//         });
//     });
// });

// document.addEventListener('DOMContentLoaded', function () {
//     const categorySpans = document.querySelectorAll('.category span');

//     categorySpans.forEach(span => {
//         span.addEventListener('click', function (event) {
//             event.preventDefault(); 

//             categorySpans.forEach(item => item.classList.remove('active'));

//             this.classList.add('active');

//             const selectedCategory = this.getAttribute('data-filter');
//             console.log("Clicked:", selectedCategory); 

//             document.querySelectorAll('.news .item, .news .item-top').forEach(post => {
//                 if (selectedCategory === 'all' || post.getAttribute('data-category') === selectedCategory) {
//                     post.style.display = 'block';
//                 } else {
//                     post.style.display = 'none';
//                 }
//             });
//         });
//     });
// });




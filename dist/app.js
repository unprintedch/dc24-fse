(() => {
  // src/js/scripts.js
  document.addEventListener("DOMContentLoaded", function() {
    var mySwiper = new Swiper(".swiper-container", {
      loop: true,
      lazy: true,
      spaceBetween: 50,
      navigation: {
        nextEl: ".dc-button-next",
        prevEl: ".dc-button-prev"
      }
    });
  });
})();

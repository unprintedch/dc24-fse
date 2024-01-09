// // import Swiper bundle with all modules installed
// import Swiper from 'swiper';

// // import styles bundle
// import 'swiper/css';
// // init Swiper:
document.addEventListener('DOMContentLoaded', function () {
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
       loop: true,
       lazy: true,
       spaceBetween: 50,

        // If you need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        // },
        // Navigation arrows
        navigation: {
            nextEl: '.dc-button-next',
            prevEl: '.dc-button-prev',
        },
    });
});
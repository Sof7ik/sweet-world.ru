let mainpageTopSlider = null;

function initSlider()
{
    mainpageTopSlider = new Swiper(".swiper.mainpage-top-slider", {
        speed: 500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        loop: true,
        grabCursor: true,

        pagination: {
            el: '.swiper-pagination.mainpage-top-slider__pagination',
            type: 'bullets',
            clickable: true,
        },
    })
}

document.addEventListener("DOMContentLoaded", e => {
    initSlider();
})
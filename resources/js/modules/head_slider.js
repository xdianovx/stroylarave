import Swiper from "swiper";

export const head_slider = () => {
    const swiper = new Swiper(".head-slider", {
        slidesPerView: "auto",
        spaceBetween: 30,
        speed: 1000,
        loop: true,
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
    });
};

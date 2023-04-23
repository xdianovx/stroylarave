import Swiper from "swiper";

export const features_slider = () => {
    const swiper = new Swiper(".features-slider", {
        slidesPerView: "auto",
        spaceBetween: 30,
        speed: 1000,
        loop: true,
    });
};

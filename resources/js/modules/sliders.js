import Swiper from "swiper";

export const projectSliderSection = () => {
    const projectSlider = new Swiper(".project-slider-section", {
        speed: 300,
        loop: true,
        spaceBetween: 32,
    });
};

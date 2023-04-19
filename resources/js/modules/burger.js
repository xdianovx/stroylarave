import { gsap } from "gsap";

const burgerBtn = document.querySelector(".burger");

export const burger = () => {
    if (!burgerBtn) return;

    const tl = gsap.timeline();
    const topLine = burgerBtn.querySelector(".top");
    const bottomLine = burgerBtn.querySelector(".bottom");

    const hoverOn = () => {};

    const hoverOff = () => {};

    burgerBtn.addEventListener("mouseover", hoverOn);

    burgerBtn.addEventListener("mouseout", hoverOff);
};

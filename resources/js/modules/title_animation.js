import { Power1, Power2, Power3, gsap } from "gsap";

export const title_animation = () => {
    const lines = document.querySelectorAll(".h1 > div");
    if (!lines) return;
    const tl = gsap.timeline();

    gsap.from(lines, {
        y: 150,
        autoAlpha: 0,
        // ease: Power2.easeInOut,
        skewY: 1,
        stagger: 0.2,
    });
};

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/all";

export const footer = () => {
    gsap.registerPlugin(ScrollTrigger);

    let end;
    if (window.innerWidth <= 1000) {
        end = "+=95%";
    } else if (window.innerWidth <= 720) {
        end = "+=50%";
    } else {
        end = "+=74%";
    }

    gsap.set(".footer-wrap", { yPercent: -100 });

    const uncover = gsap.timeline({ paused: true });

    uncover.to(".footer-wrap", { yPercent: 0, ease: "none" });

    ScrollTrigger.create({
        trigger: ".footer-wrap",
        start: "bottom bottom",
        end: end,
        animation: uncover,
        scrub: 0.5,
    });
};

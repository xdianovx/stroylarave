import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/all";

export const life_scroll_section = () => {
    gsap.registerPlugin(ScrollTrigger);
    let sections = gsap.utils.toArray(".section-life-panel");
    const section = document.querySelector(".section-life-panel");
    if (!section) return;

    gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: "#parallaxwrapper",
            pin: true,
            scrub: 1,
            end: () =>
                "+=" + document.querySelector("#parallaxwrapper").offsetWidth,
        },
    });

    sections.forEach((sct, i) => {
        ScrollTrigger.create({
            trigger: sct,
            start: () =>
                "top top-=" +
                (sct.offsetLeft - window.innerWidth / 2) *
                    (document.querySelector("#parallaxwrapper").offsetWidth /
                        (sct.offsetWidth * (sections.length - 1))),
            end: () =>
                "+=" +
                sct.offsetWidth *
                    (document.querySelector("#parallaxwrapper").offsetWidth /
                        (sct.offsetWidth * (sections.length - 1))),
            toggleClass: { targets: sct, className: "active" },
            invalidateOnRefresh: true,
        });

        const objects = sct.querySelectorAll(".object");

        objects.forEach((obj, i) => {
            //console.log( obj.getAttribute('attr-gsap-xpercent') )
            //console.log(sct.offsetLeft + obj.offsetLeft)

            const moveObject = gsap.to(obj, {
                ease: "none",
                xPercent: () => {
                    return obj.getAttribute("attr-gsap-xpercent");
                },
            });

            ScrollTrigger.create({
                trigger: obj,
                start: () =>
                    "top top-=" +
                    (sct.offsetLeft + obj.offsetLeft - window.innerWidth / 2) *
                        (document.querySelector("#parallaxwrapper")
                            .offsetWidth /
                            (sct.offsetWidth * (sections.length - 1))),
                end: () =>
                    "+=" +
                    sct.offsetWidth *
                        (document.querySelector("#parallaxwrapper")
                            .offsetWidth /
                            (sct.offsetWidth * (sections.length - 1))),
                //toggleClass: {targets: sct, className: "active"},
                animation: moveObject,
                scrub: 1,
                invalidateOnRefresh: true,
            });
        });
    });
};

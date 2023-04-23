import { Expo, gsap } from "gsap";

export const num_section = () => {
    let navLinks = gsap.utils.toArray(".num-item"),
        imgWrap = document.querySelector(".nav-item-wrapper"),
        imgItem = document.querySelector(".num-item-reveal");

    const items = document.querySelectorAll(".num-item");
    const winWidth = window.innerWidth;
    let right;
    let top;
    if (window.innerWidth <= 1240) {
        right = 80;
        top = "-250%";
    } else {
        right = 200;
        top = "-120%";
    }

    const t = gsap.fromTo(
        ".num-item-reveal",
        {
            immediateRender: false,
            rotation: 10,
        },
        {
            rotation: -10,
            paused: true,
        }
    );

    items.forEach((el, index) => {
        const image = el.querySelector(".num-item-reveal");
        const list = el.querySelector(".text");

        el.addEventListener("mouseenter", (e) => {
            gsap.to(image, {
                autoAlpha: 1,
                top: top,

                right: right,
                transform: "rotateZ(4deg)",
            });
        });
        el.addEventListener("mouseleave", (e) => {
            gsap.to(image, { autoAlpha: 0, top: "200%" });
        });

        // el.addEventListener("mousemove", (e) => {
        //     const depth = 2;
        //     const moveX = (e.pageX - window.innerWidth / 20000) / depth;
        //     console.log(moveX);
        //     // const moveY = (e.pageY - window.innerHeight / 20000) / depth;
        //     index++;

        //     gsap.to(image, {
        //         x: moveX,
        //         // y: moveY,
        //     });
        // });
    });
};

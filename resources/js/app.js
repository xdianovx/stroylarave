import "./bootstrap";
import { burger } from "./modules/burger";
import "../../node_modules/mouse-follower/src/scss/index.scss";
import "swiper/css/bundle";

import { mouse } from "./modules/mouse";

import { title_animation } from "./modules/title_animation";
import { projectSliderSection } from "./modules/sliders";
import { offers_screen } from "./modules/offers_screen";
import { num_section } from "./modules/num_section";
import { life_scroll_section } from "./modules/life_scroll_section";
import { marquee } from "./modules/marquee";
import { footer } from "./modules/footer";
import { preloader } from "./modules/preloadper";
import { head_slider } from "./modules/head_slider";
import { features_slider } from "./modules/features_slider";

burger();
title_animation();
mouse();
projectSliderSection();
offers_screen();
num_section();
life_scroll_section();
marquee();
footer();
preloader();
head_slider();
features_slider();

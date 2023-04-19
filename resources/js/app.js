import "./bootstrap";
import { burger } from "./modules/burger";
import "../../node_modules/mouse-follower/src/scss/index.scss";
import "swiper/css/bundle";

import { mouse } from "./modules/mouse";
import { test } from "./modules/test";
import { title_animation } from "./modules/title_animation";
import { projectSliderSection } from "./modules/sliders";

test();
burger();
title_animation();
mouse();
projectSliderSection();

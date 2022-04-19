import Swiper, { Navigation } from "swiper";
Swiper.use([Navigation]);

import "swiper/swiper-bundle.min.css";
import "swiper/swiper.min.css";

const init = function () {
    let $slider = $(".swiper");
    
    if ($slider.length) {
        new Swiper(".swiper", {
            loop: true,
            observer: true,
            slidesPerView: 1,
            spaceBetween: 20,
            observeParents: true,
            direction: "horizontal",
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },            
        });
    }
};

export default init;
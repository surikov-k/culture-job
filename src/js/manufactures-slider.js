import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

export function initManufacturesSlider() {
  const slider = document.querySelector('.manufactures-slider');
  if (!slider) {
    return;
  }

  const swiper = new Swiper('.swiper', {
    modules: [Navigation, Pagination],
        slidesPerView: 5,
        spaceBetween: 20,
    pagination: {
      el: '.manufactures-slider__pagination',
      type: 'bullets',
    },
    navigation: {
      nextEl: '.manufactures-slider__control--next',
      prevEl: '.manufactures-slider__control--prev',
    },
    grabCursor: true,
    breakpoints: {
      360: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 20
      },
      1500: {
        slidesPerView: 5,
        spaceBetween: 20
      }
    }
  });

}



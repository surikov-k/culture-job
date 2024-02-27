import 'vite/modulepreload-polyfill'

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import './scss/style.scss';

import { initMobileMenuToggle } from './js/mobile-menu-toggle';
import { initManufacturesSlider } from './js/manufactures-slider';
import { initAnswersList } from './js/answers-list';
import { processCallbackForm, savePhoneHandler } from './js/callback-form';

document.addEventListener("DOMContentLoaded", () => {
  initMobileMenuToggle();
  initManufacturesSlider();
  initAnswersList()
  processCallbackForm();
  savePhoneHandler();
});

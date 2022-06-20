import {
  gsap
} from "gsap";
import ScrollTrigger from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

gsap.to('#about', {
  scrollTrigger: {
    trigger: '#about',
    toggleClass: 'js-active',
    start: 'top 0',
    once:true
  }
});
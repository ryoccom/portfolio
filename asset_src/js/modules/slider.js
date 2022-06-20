import Splide from '@splidejs/splide';

const splide = new Splide('.splide', {
    type: 'loop',
    autoplay: true,
    pagination: false,
});

const sliderDetails = document.querySelectorAll(".works__detail ul li");

splide.on( 'move', function ( newIndex ) {
    for (var i = 0; i <  sliderDetails.length; i++) {
        sliderDetails[i].classList.remove("js-show");
        sliderDetails[newIndex].classList.add("js-show");
    }
});


splide.mount();
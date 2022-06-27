import Splide from '@splidejs/splide';

$(document).ajaxComplete(function() {
    const splide = new Splide('.splide', {
        type: 'loop',
        autoplay: true,
        pagination: false,
    });
    
    
    splide.on( 'move', function ( newIndex ) {
        const sliderDetails = document.querySelectorAll(".works__detail ul li");
        for (var i = 0; i <  sliderDetails.length; i++) {
            sliderDetails[i].classList.remove("js-show");
            sliderDetails[newIndex].classList.add("js-show");
        }
    });
    splide.mount();

    const sliderDetails = document.querySelectorAll(".works__detail ul li");
    for (var i = 0; i <  sliderDetails.length; i++) {
        sliderDetails[0].classList.add("js-show");
     }
});

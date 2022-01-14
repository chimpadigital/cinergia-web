$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    stagePadding: 400,
    loop: true,
    margin: 40,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: false,
    responsive:{
        0:{
            items: 1,
            stagePadding: 100,
        },
        600:{
            items: 1
        },
        1000:{
            items: 1
        }
      }
    })
});
$(document).ready(function(){
  $('.burger').click(function() {
    $('.nav-menu').toggleClass("open-menu");
    $('.menu-list').toggleClass("list-open");
  });
  $('.owl-carousel').owlCarousel({
    stagePadding: 400,
    loop: true,
    margin: 40,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: false,
    responsive: {
        0: {
            items: 1,
            stagePadding: 0,
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
      }
    });
});

$('#owl-carousel-premios').owlCarousel({
  stagePadding: 400,
  loop: true,
  margin: 40,
  autoplay: true,
  autoplayTimeout: 3000,
  dots: false,
  responsive: {
    0: {
        items: 1,
        stagePadding: 0,
    },
    1000: {
        items: 2
    }
  }
});

wow = new WOW(
  {
      offset: 150,
  }
)
wow.init();

var rellax = new Rellax('.rellax');
//Ready to write some functions!
$(document).ready(function(){
    $('.toast').toast('show');
    $('.hero-slider').slick({
        dots: false,
        arrows: false,
        // autoplay: true,
        autoplaySpeed: 5000,
        adaptiveHeight: true,
        responsive: [
            {
              breakpoint: 576,
              settings: {
                dots: false
              }
            }
          ]
    });
    $('.recent-champions').slick({
        dots: false,
        arrows: true,
        slidesToShow: 4,
        // slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 5000,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1300,
                settings: {
                  slidesToShow: 4,
                  infinite: true,
                  arrows: false,
                  dots: true
                }
              },
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 3,
                infinite: true,
                arrows: false,
                dots: true
              }
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 2,
                arrows: false,
                dots: true
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                arrows: false,
                dots: true
              }
            }
          ]
    });
})

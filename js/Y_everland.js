$(function(){
    $('#Y_v_slide').slick({
      slide: '',
      centerMode: true,
      slidesToShow: 3,
      slideToScroll: 1,
      arrows: false,
      draggable: true,
      dots: false,
      pauseOnHover: true,
      autoplay : true,
      infinite: true,
      responsive: [
        {
          breakpoint: 350,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 400,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 500,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 2
          }
        }
      ]
    });
});
$(document).ready(function(){
    $('.bg').css({ height: ($(window).height()) +'px' });
    // applyNavigation(); 
    $(window).resize(function(){
      $('.bg').css({ height: ($(window).height()) +'px' });
    });
    // $('#myTimeline').verticalTimeline({
    //   startLeft: false,
    //   alternate: true,
    //   animate: "fade",
    //   arrows: false
    // });


    var timelineSwiper = new Swiper('.timeline .swiper-container', {
      direction: 'vertical',
      loop: false,
      speed: 1600,
      pagination: {
        el: '.swiper-pagination',
        clickakble: true,
        renderBullet: function (index, className) {
          var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
          return '<span class="' + className + '">' + year + '</span>';
        },
      },
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      breakpoints: {
        768: {
          direction: 'horizontal',
        }
      }
    });

});

// Code By Webdevtrick ( https://webdevtrick.com )
var timelineSwiper = new Swiper ('.timeline .swiper-container', {
  direction: 'vertical',
  loop: false,
  speed: 1600,
  pagination: '.swiper-pagination',
  paginationBulletRender: function (swiper, index, className) {
    var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
    return '<span class="' + className + '">' + year + '</span>';
  },
  paginationClickable: true,
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
  breakpoints: {
    768: {
      direction: 'horizontal',
    }
  }
});
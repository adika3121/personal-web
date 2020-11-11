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
    


});

document.addEventListener('scroll', function (e) {
  var top  = window.pageYOffset + window.innerHeight,
  triggerElement = document.getElementById('sectionSkill'),
  triggerPosition = triggerElement.offsetTop + 150;
      isVisible = top > triggerPosition;

   if (isVisible) {
     var info = document.getElementsByClassName('info');
     for (i = 0; i < info.length; i++) {
        info[i].classList.add('animate')
      }

      var progressline = document.getElementsByClassName('progress-line');
      for (i = 0; i < progressline.length; i++) {
        progressline[i].classList.add('animate')
      }

      
   }
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
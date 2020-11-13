$(document).ready(function(){
    $('.bg').css({ height: ($(window).height()) +'px' });
    // applyNavigation(); 
    $(window).resize(function(){
      $('.bg').css({ height: ($(window).height()) +'px' });
    });
    AOS.init();
    var typed = new Typed('#typed', {
      stringsElement: '#typed-strings',
      typeSpeed: 20,
      backSpeed: 20,
      startDelay: 1000,
      loop: true,
      loopCount: Infinity,
    });

    var floating_button = $('.btn-float');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 150) {
        floating_button.addClass('show');
      } else {
        floating_button.removeClass('show');
      }
    });

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
  
  var typed = new typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 20,
    backSpeed: 20,
    startDelay: 1000,
    loop: true,
    loopCount: Infinity,
  });

      
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
(function ($) {
  "use strict";

  // Preloader (if the #preloader div exists)
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(200).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 60) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 60) {
    $('#header').addClass('header-scrolled');
  }

  

})(jQuery);
   
    const current = document.querySelector('#current_image');
const imgs = document.querySelectorAll('.imags img');
const opacity = 0.6;
// set opacity to first image
imgs[0].style.opacity = opacity;
imgs.forEach( imgs => 
   imgs.addEventListener('click', imgclick));

function imgclick(e){
    
    // rest opacity
    imgs.forEach(img => (img.style.opacity = 1));
    
    // change current image src
     current.src = e.target.src
    //add fadin class
    current.classList.add('fade-in');
    
    // set time out
    setTimeout(() => current.classList.remove('fade-in'), 500);
    //c chnage opacity
    
    e.target.style.opacity = opacity;
}
  

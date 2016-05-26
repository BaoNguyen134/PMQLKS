(function($){
"use strict";
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space
$('.slider').slider({full_width: true});
// Pause slider
$('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');
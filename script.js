$('document').ready(function(){

  // Slider
  var width = 720;
  var animationSpeed = 1000;
  var pause = 3000;
  var currentSlide = 1;

  var $slider = $('#slider');
  var $slideContainer = $slider.find('.slides');
  var $slides = $slideContainer.find('.slide');

  var interval = setInterval(function slideRight(){
    $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function slideRight(){
      currentSlide++;
        if(currentSlide === $slides.length) {
          currentSlide = 1;
          $slideContainer.css('margin-left', 0);
        }
      }
    )
  }, pause);

});

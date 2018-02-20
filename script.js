$('document').ready(function(){

setInterval(slideRight, 3000);
  currentslide = 0;

function slideRight(){
  var width = 700;
  var animationSpeed = 2000;
  var slideCount = ($('#slider .slides > li').length);

  $('#firstslide').animate({'margin-left': '-='+width}, animationSpeed);
  currentslide++;
  returntoFirst(slideCount, currentslide);
}

function returntoFirst(slideCount, currentslide){
  clearInterval(slideRight);
  
  if(currentslide == slideCount){
    $('#firstslide').css({'margin-left': 0});
    currentslide = 0;
  }
}

});

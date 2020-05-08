
  $(function() {

 var $carousel = $('.main-carousel').flickity({
});

 $('.carousel-fwd').on( 'click', function() {
  $carousel.flickity('next');
});
// next
$('.carousel-rwd').on( 'click', function() {
  $carousel.flickity('previous');
});


  $(".lets-have-fun").click(function() { 
    $(".bottom-wrapper").toggleClass("top-200");
    $(".top-wrapper").toggleClass("top--100");
    $(".age-decider").hide();
    $("body").removeClass("no-overflow");
    $(".age-wrapper").delay(300).fadeOut(300);
    
  });

   $(".menu-full-caller").click(function() { 
      $(".menu-full").toggleClass("top-20px");
      $(".carousel-wrapper").toggleClass("blurry");
      $(".menu-alternate").toggleClass("opacity-0");
    
  });

      $(".folder-caller").click(function() { 
      $(".tips-wrapper").toggleClass("tip-visible");
    
  });

   $(".go-away-kids").mouseover(function(){
      $(".age-wrapper").addClass("blurry");
      }).mouseout(function(){
      $(".age-wrapper").removeClass("blurry");   
 
});

    $(".menu-blur-caller").mouseover(function(){
      $(".menu-full").addClass("blurry");
      $(".carousel-wrapper").removeClass("blurry");
      }).mouseout(function(){
      $(".menu-full").removeClass("blurry");
      $(".carousel-wrapper").toggleClass("blurry");   
 
});

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});
      



});

  $(document).ready(function() {
    $("#loading").delay(1800).fadeOut(200);
});


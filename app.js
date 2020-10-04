$(document).ready(function(){
  $(window).scroll(function() {
        if ($(this).scrollTop() < screen.height-150) {
          $('.navbar').css("background-color", "rgba(1, 92, 146,0.3)");
          $('.navbar').css("transition", "all .5s");
        } else {
          $('.navbar').css("background-color", "#015C92");
          $('.navbar').css("transition", "all .5s");
        }
      });
});

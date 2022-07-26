// JavaScript Document
$(document).ready(function(){
    "use strict";
$(document).on('click','.nav-link', function(event) {
    event.preventDefault();
    var target = "#" + this.getAttribute('data-target');
    // -130 for navbar-fixed otherwise you can use 0 instead
    var top = $(target).offset().top - 100;
    $('html, body').animate({
        scrollTop: top
    }, 3000);
});

$("#testimonials").owlCarousel({
  slideSpeed: 500,
  autoPlay : 7000,
  paginationSpeed: 500,
  singleItem: true,
  pagination : true,
  transitionStyle : "backSlide"
});

/*-----------------------------------------------------------------------------------*/
/* MENU (For fixed Navbar for both blue and orange version)
/*-----------------------------------------------------------------------------------*/



var previousScroll = 0;
  $(window).scroll(function(){

    var scroll = $(window).scrollTop();
      if (scroll > 80 && scroll < previousScroll) {
        $(".navbar-bg").css("background" , "#fff");
        $(".navbar-bg").css("box-shadow","0 20px 30px rgba(0,0,0,.15)");
        $('#my_image').attr('class','logo2');
        $('#my_image').css('margin-right','20px');
        $('#navMenu').attr('class','navbar navbar-expand-lg navbar-light navbar-bg fixed-top top-nav-collapse');
        $('#main-slider').css("padding-top", "150px");

        function myFunction(x) {
            if (x.matches) { // If media query matches
                $('#my_image').css('margin-left','0vw');
            } else {
                $('#my_image').css('margin-left','80px');
            }
          }

          var x = window.matchMedia("(max-width: 991px)")
          myFunction(x)

      }

      else{
          $(".navbar-bg").css("background" , "none");
          $(".navbar-bg").css("box-shadow","none");
          $('#navMenu').attr('class','navbar navbar-expand-lg');
          $('#my_image').attr('class','logo');
          $('#my_image').css('margin-left','0');
          $('#my_image').css('margin-right','0');
          $('#main-slider').css("padding-top", "10px");
      }
	  previousScroll = scroll;

});
  /*****************************************************
  *
  * Flex Slider
  *
  *****************************************************/
   $(function() {
    $('.material-card > .mc-btn-action').click(function () {
        var card = $(this).parent('.material-card');
        var icon = $(this).children('i');
        icon.addClass('fa-spin-fast');

        if (card.hasClass('mc-active')) {
            card.removeClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fa-arrow-left')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-bars');

            }, 800);
        } else {
            card.addClass('mc-active');

            window.setTimeout(function() {
                icon
                    .removeClass('fa-bars')
                    .removeClass('fa-spin-fast')
                    .addClass('fa-arrow-left');

            }, 800);
        }
    });
});
});




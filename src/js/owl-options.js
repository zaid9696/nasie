$(document).ready(function(){

    $(".owl-one").owlCarousel({
       
       
        autoplay:true,
        autoplayTimeout:6500,
        autoplayHoverPause:true,
        loop:true,
        items:1,
        dots:true,
        nav: false,

        
  
    });

    $(".owl-two").owlCarousel({
       
       
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        loop:true,
        items:3,
        nav:false,
        dots:false,
      
       responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false

        },
        1000:{
            items:3,
        }

    }
    });


  });



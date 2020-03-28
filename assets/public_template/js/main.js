/*

Template:  Theme Name
Author: author name
Version: 1
Design and Developed by: BM Rafiq + Masud Rana
NOTE: If you have any note put here. 

*/
/*================================================
[  Table of contents  ]
================================================
	01. jQuery MeanMenu
	02. wow js active
	03. scrollUp jquery active
	04. slick carousel 

 
======================================
[ End table content ]
======================================*/


(function($) {
    "use strict";



/*------------------------------------------------
      Top menu stick
     -------------------------------------------------- */
    // var sticky_menu = $("#sticky-header");
    // var pos = sticky_menu.position();
    // if (sticky_menu.length) {
    //     var windowpos = sticky_menu.top;
    //     $(window).on('scroll', function() {
    //         var windowpos = $(window).scrollTop();
    //         if (windowpos > pos.top) {
    //             sticky_menu.addClass("sticky");
    //         } else {
    //             sticky_menu.removeClass("sticky");
    //         }
    //     });
    // }

  //---------------------------------------------
  //Nivo slider
  //---------------------------------------------
  $('#ensign-nivoslider').nivoSlider({
    effect: 'random',
    slices: 15,
    boxCols: 8,
    boxRows: 4,
    animSpeed: 500,
    pauseTime: 5000,
    startSlide: 0,
    directionNav: true,
    controlNavThumbs: true,
    pauseOnHover: false,
    manualAdvance: true,
  });

  /*-------------------------------------------
  02. wow js active
  --------------------------------------------- */
  new WOW().init();

  /*-------------------------------------------
  03. scrollUp jquery active
  --------------------------------------------- */
  $.scrollUp({
    scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
  });


  /*-------------------------------------------
  04. slick carousel 
  --------------------------------------------- */
  $('.your-class').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
  });


    /*************************
          tooltip
    *************************/
    $('[data-toggle="tooltip"]').tooltip();

  /*----------------------------
   treeview active
  ------------------------------ */  
  $("#cat-treeview ul").treeview({
    animated: "fast",
    collapsed: true,
    unique: true,
    persist: "cookie"
  });

/*---------------------
5. countdown
--------------------- */
    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
      });
    }); 
    
  /*----------------------------
  Testimonial List owl active
  ------------------------------ */  
  $(".testimonial-list").owlCarousel({
    autoPlay: false, 
    slideSpeed:2000,
    pagination:true,
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    navigation:false,  
    items : 1,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [991,1],
    itemsTablet: [767,1],
    itemsMobile: [479,1]
  });

  /*----------------------------
  owl active Deal products 
  ------------------------------ */  
  $(".brand-list").owlCarousel({
    autoPlay: false, 
    slideSpeed:2000,
    pagination:false,
    navigation:false,   
    items : 5,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [991,3],
    itemsTablet: [767,2],
    itemsMobile: [479,1]
  });
 
 

 
/*----------------------------
 price-slider active
------------------------------ */  
    $( "#slider-range" ).slider({
     range: true,
     min: 0,
     max: 999,
     values: [ 60, 750 ],
     slide: function( event, ui ) {
    $( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
     }
    });
    $( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
     " - £" + $( "#slider-range" ).slider( "values", 1 ) );  
   
  /*---------------------
  venobox
  --------------------- */
  $('.venobox').venobox(); 

  
  /*----------------------------
  jQuery MeanMenu
  ------------------------------ */
  jQuery('nav#dropdown').meanmenu();  
 
/*----------------------------
  Input Plus Minus Button
------------------------------ */ 
    $(".cart-plus-minus-box").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
    });
  
  
})(jQuery);

  $(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
      $('#sticky-header').addClass("sticky");
    }
    else{
      $('#sticky-header').removeClass("sticky");
    }
  });
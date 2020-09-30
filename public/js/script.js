jQuery(function($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $('#tagsidebar a').each(function() {
     if (this.href === path) {
      $(this).children('.tagbox').addClass('active');
       
     }

   
   })
//    $([document.documentElement, document.body ]).animate({
//     scrollTop: $(".active").offset().top
// }, 2000);

var element = $(".active");
$('#tagsidebar').animate({ scrollTop: element.offset().top}, 500);

  
   });

   AOS.init();
/**
 * Achievements Counter
 * @author Bozena Zawilinska
 */

jQuery(document).ready(function($) {
     $(window).scroll(function() {
   var hT = $('#s4').offset().top,
       hH = $('#s4').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)){
     
       $('.value').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
        });
   }
});
});


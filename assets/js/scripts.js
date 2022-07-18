function menu_open_nav() {
	document.getElementById("mySidenav").style.top ="0";
}
function menu_close_nav() {
 	document.getElementById("mySidenav").style.top = "-110%";
}

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
   	});
});

(function( $ ) {
	jQuery(window).load(function() {
	    jQuery("#status").fadeOut();
	    jQuery("#preloader").delay(1000).fadeOut("slow");
	})
	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});
		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});
	$(document).ready(function(){
		$(".product-cat").hide();
	    $("button.product-btn").click(function(){
	        $(".product-cat").toggle();
	    });
	});
})( jQuery );

/* New Addition */

jQuery(document).ready(function($) {

    $('body').on('click', '.icon-list li', function(){
        var icon_class = $(this).find('i').attr('class');
        $(this).addClass('icon-active').siblings().removeClass('icon-active');
        $(this).parent('.icon-list').prev('.selected-icon').children('i').attr('class','').addClass(icon_class);
        $(this).parent('.icon-list').next('input').val(icon_class).trigger('change');
    });

    $('body').on('click', '.selected-icon', function(){
        $(this).next().slideToggle();
    });

    $(".socialInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".icon-list li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

/* New Addition */
/* scripts from tset javascript file*/

var date=require();
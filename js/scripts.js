$(function(){

    $('body').fadeIn(500);

	$(".scroll-down").click(function() {
   	$('html, body').animate({
        scrollTop: $(".main").offset().top
   	}, 1000);
	});

	if ($('#back-to-top').length) {
	    var scrollTrigger = 750, // px
	        backToTop = function () {
					var scrollTop = $(window).scrollTop();
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 750);
	    });
	}

	$('.mobile').on('click', function() {
		if($('.navigation-bar').hasClass('solid')) {
			$('.navigation-bar ul, .header-text, .scroll-down').fadeToggle(250);
			$('.navigation-bar').removeClass('solid');
			$('.mobile i.fa').removeClass('fa-times').addClass('fa-bars');
		} else {
			$('.navigation-bar ul, .header-text, .scroll-down').fadeToggle(250);
			$('.navigation-bar').addClass('solid');
			$('.mobile i.fa').removeClass('fa-bars').addClass('fa-times');
		}
	});

});
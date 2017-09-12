jQuery(document).ready(function($) {		
			// Work hover		
			$('.portfolio-area li').hover(
			function() {			
				$(this).find('.work-caption').stop().fadeTo(900, 1);
				$('.zoom', this).stop().animate({left:'42%'},{queue:false,duration:380});
				$('.link', this).stop().animate({right:'42%'},{queue:false,duration:380});
				return false; 
			},
			function() {
				$(this).find('.work-caption').stop().fadeTo(900, 0);
				$('.zoom', this).stop().animate({left:'0'},{queue:false,duration:300});
				$('.link', this).stop().animate({right:'0'},{queue:false,duration:300});
				return false; 
			}
		)
})(jQuery);	
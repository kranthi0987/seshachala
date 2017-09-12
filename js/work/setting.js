
jQuery(document).ready(function($){

if (jQuery().quicksand) {

 	// Clone applications to get a second collection
	var $data = $(".portfolio-area").clone();
	
	//NOTE: Only filter on the main portfolio page, not on the subcategory pages
	$('.filter li').click(function(e) {
		$(".filter li").removeClass("active");	
		// Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
		var filterClass=$(this).attr('class').split(' ').slice(-1)[0];
		
		if (filterClass == 'all') {
			var $filteredData = $data.find('.portfolio-item');
		} else {
			var $filteredData = $data.find('.portfolio-item[data-type=' + filterClass + ']');
		}
		$(".portfolio-area").quicksand($filteredData, {
			duration: 600,
			adjustHeight: 'auto'
		}, function () {
		
			// Work hover		
			$(".work-caption").css({'opacity':'0','filter':'alpha(opacity=0)'});
			$('.zoom').css({'left':'0'});
			$('.link').css({'right':'0'});
			$('.portfolio-area li').hover(
				function() {			
					$(this).find('.work-caption').stop().fadeTo(900, 1);
					$('.zoom', this).stop().animate({left:'42%'},{queue:false,duration:580});
					$('.link', this).stop().animate({right:'42%'},{queue:false,duration:580});
					return false; 
				},
				function() {
					$(this).find('.work-caption').stop().fadeTo(900, 0);
					$('.zoom', this).stop().animate({left:'0'},{queue:false,duration:580});
					$('.link', this).stop().animate({right:'0'},{queue:false,duration:580});
					return false; 
				}
			)
			
			// Image zoom
			$("a[data-pretty^='prettyPhoto']").prettyPhoto();
				
			$(".video:first a[data-pretty^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
			$(".video:gt(0) a[data-pretty^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
			});		
			
		$(this).addClass("active"); 			
		return false;
	});
	
}//if quicksand

});
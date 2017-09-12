$(function() {



$('a.lookroom').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);
		//alert($target);
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 700, 'swing', function () {
	        window.location.hash = target;
			
			$($target).click();
	    });
	    
		
	    
		//alert($target);
	    
	    });

$('a#move').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);
	    //alert($target);
		$('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 700, 'swing', function () {
	        window.location.hash = target;
	    });
	});
        
        
});
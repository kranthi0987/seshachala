$(document).ready(function(){ 
	

		$("#dropdown1,#dropdown2,#dropdown3").hide();

		$('.icon-nav1').click(function(){
			$("#dropdown2,#dropdown3").hide();
			$("#dropdown1").slideToggle();
			return false; 
		});

		$('.icon-nav2').click(function(){
			$("#dropdown1,#dropdown3").hide();
			$("#dropdown2").slideToggle();
			return false; 
		});	
		
		$('.icon-nav3').click(function(){
			$("#dropdown1,#dropdown2").hide();
			$("#dropdown3").slideToggle();
			return false; 
		});			
});

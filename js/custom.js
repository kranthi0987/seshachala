$(document).ready(function($) {

		//Navi hover
		$('ul.nav li.dropdown').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
		});
	
		// tooltip
		$('.tooltips').tooltip({
		  selector: "a[data-tooltips='tooltip']"
		})

		// Contact
		$("#dropdown-contact").hide();

		$('.contact a').click(function(){
			$("#dropdown-contact").slideToggle();
			return false; 
		});
		
		$('.contact-close').click(function(){
			$("#dropdown-contact").slideToggle("normal")
		});
				
		// Hidden	
		$(".logo-hover, .team-frame, .detail-person, .team-profile").css({'opacity':'0','filter':'alpha(opacity=0)'});
		$(".avatar-wrapp").css({'opacity':'0.3','filter':'alpha(opacity=30)'});
		
		// Client logo hover	
		$('.client-list a').hover(
			function() {
				$(this).find('.logo-hover').stop().fadeTo(900, 1);
				$(this).find('.client-logo').stop().fadeTo(900, 0);
			},
			function() {
				$(this).find('.logo-hover').stop().fadeTo(900, 0);
				$(this).find('.client-logo').stop().fadeTo(900, 1);
			}
		)
		
		// Team hover		
		$('.team-list li').hover(
			function() {			
				$(this).find('.team-frame').stop().fadeTo(900, 0.5);
				$(this).find('.avatar-wrapp').stop().fadeTo(900, 1);
				$(this).find('.detail-person').stop().fadeTo(900, 1);
			},
			function() {
				$(this).find('.team-frame').stop().fadeTo(900, 0);
				$(this).find('.avatar-wrapp').stop().fadeTo(900, 0.3);
				$(this).find('.detail-person').stop().fadeTo(900, 0);
			}
		)

		$('.team-image-wrapper').hover(
			function() {
				$(this).find('.team-profile').stop().fadeTo(800, 1);
			},
			function() {
				$(this).find('.team-profile').stop().fadeTo(800, 0);
			}
		)		
		
})
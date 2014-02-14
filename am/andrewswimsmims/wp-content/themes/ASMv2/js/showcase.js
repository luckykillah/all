$(document).ready( function() {
    $('.widget-area').click(function() {
		window.location = $("#" + $(this).attr('id') + " a:first-child").attr('href');
	});
	
	$('.widget-area').hover(
		function () {
			$(this).addClass('hover');
		}, 
		function () {
			$(this).removeClass('hover');
		}
	);
});


$("#toTop").click(function(){
	window.scroll(0,0);
});



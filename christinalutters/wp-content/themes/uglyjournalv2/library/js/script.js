$(document).ready(function() {
	//hide commenting
	$('#cancel-comment-reply').hide();
	$('#respond .formcontainer').hide();
	$('#respond h3').click(function(){
		$('#cancel-comment-reply').slideToggle();
		$('.formcontainer').slideToggle();
	});
	//hide archives/search
	$('#main_footer #primary').hide();
	$('#show_archives').click(function(){
		$('#main_footer #primary').slideToggle();
		$(this).toggleClass('open');
		return false;
	});


});
//$('#word-1').hide(); 
$('#word-2,#word-3,.third').hide(); 


$('document').ready(function(){
	$('#word-1').fadeOut(800, function(){ 
		$('#word-2').show().fadeOut(800, function(){ 
			$('#word-3').show().fadeOut(800, 
				function(){
					$('#word-1, #word-2, #word-3').fadeIn(800, function(){
						$('#words').animate({ 'top': '50','font-size': '50px' }, 800, function(){
    						$('.third').fadeIn();
  					});	
				}); 	
			});
		});
	});
});




















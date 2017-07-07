$(document).ready(function(){
	$(document).on('click','[id^="eventRow"]',function() {
		var id = $(this).attr("value");
		$('#div-events').fadeOut('slow', function(){
			$('#div-events').load('content/eventsContent.php?id='+id).fadeIn('slow');
		});		
		$(document).scrollTop( $("#div-events").offset().top-222); 
	});
});
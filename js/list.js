$(document).ready(function(){
	$(document).on('click','[id^="listRow"]',function() {
		var id = $(this).attr("value");
		$('#div-list').fadeOut('slow', function(){
			$('#div-list').load('content/listContent.php?id='+id).fadeIn('slow');
		});		
		$(document).scrollTop( $("#div-list").offset().top-222); 
	});
});
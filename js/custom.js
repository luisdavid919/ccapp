// alert("Hola mundo");
$(document).ready(function(){
	$("#fcontacto").submit(function( event ){
		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: 'envio.php',
			data: $(this).serialize(),
			success: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
			}
		});

		return false;
	});
});
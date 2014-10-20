$(document).ready(function($) {

	$("#boton1").click(function(event) {
		
		$.post('EnviarCuponCompleto.php',$("#formCupon").serialize(), function(data, textStatus, xhr) {

			$("#msg").show(data);
			$("#formulario").hide(500);
			$("#botonera").show(500);


			/*optional stuff to do after success */
		});

	});
	$("#boton2").click(function(event) {

		$(location).attr('href','ImprimirCV.php');
		/* Act on the event */
	});
	
});
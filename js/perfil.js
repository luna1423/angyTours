jQuery(document).ready(function($) {

	datos();
	

	$("#commit").click(function() {

		$(".confirm").confirm({
    		text: "Esta seguro de cambiar su informacion",
    		title: "Confirmacion de cambio",
    		confirm: function(button) {

    			$.post('perfiles.php', $("#perfil").serialize(), function(data, textStatus, xhr) {

    				$("#contenedor1").hide();
    				
    				$("#datos0").hide();
    				$("#datos1").html(data);

			/*optional stuff to do after success */
		});
        // do something
    		},
   			 cancel: function(button) {
        // do something
    		},
		    confirmButton: "Si, Cambiar",
		    cancelButton: "No",
		    post: true
		});
	});


		
});
	

function datos() {



	$.ajax({
		url: '../php/perfiles.php',
		type: 'GET',
		dataType: 'json',
		data: {id: $("#usr").val()},
	})
	.done(function(h) {
		console.log("success");
		$.each(h, function(index,value) {

			

				$("#id").val(value.NombreIdUsuario);	
				$("#nombre").val(value.Nombre);				
				$("#pass").val(value.Contrasena);	
				$("#correo").val(value.Correo);	
				$("#telefono").val(value.Telefono);	
					
				
				 /* iterate through array or object */
			});
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}
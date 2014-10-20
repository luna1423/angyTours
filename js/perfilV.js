jQuery(document).ready(function($) {

	datos();

	$(".btn_editar").click(function(event) {

		alert("hola mundo");
		/* Act on the event */
	});
	

	$("#commit").click(function() {

		$.post('../../php/perfilesV.php', $("#perfil").serialize(), function(data, textStatus, xhr) {


    				$(".modal-body").hide();
    				
    				$("#datos0").hide();
    				$("#datos1").html(data);

			/*optional stuff to do after success */
		});

		// $(".confirm").confirm({
  //   		text: "Esta seguro de cambiar su informacion",
  //   		title: "Confirmacion de cambio",
  //   		confirm: function(button) {

    			
  //       // do something
  //   		},
  //  			 cancel: function(button) {
  //       // do something
  //   		},
		//     confirmButton: "Si, Cambiar",
		//     cancelButton: "No",
		//     post: true
		// });
	});


		
});
	

function datos() {



	$.ajax({
		url: '../../php/perfilesV.php',
		type: 'GET',
		dataType: 'json',
		data: {id: $("#usr").val()},
	})
	.done(function(h) {
		console.log("success");
		$.each(h, function(index,value) {

			

				$("#idusuarios").val(value.NombreIDViajero);	
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
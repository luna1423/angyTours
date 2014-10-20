$(document).ready(function($) {



	tablaCupones();


	$('#sgl').click(function(e){

		$("#pax").html($("#datos_sgl").html());
		// $('#pax').html($('#datos_sgl'));		
		
	});

	$('#doble').click(function(e){

			$("#pax").html($("#datos_doble").html());
			
		
	});
	
	$('.enviar').click(function(e){

		$.post('TablasCupones.php', $("#cupon1").serialize(), function(data, textStatus, xhr) {
			/*optional stuff to do after success */
		});
		location.reload();
		

		$('#cupon1').each(function(){
						this.reset();

					});
		

			
		
	});
	$("#agregarCV").click(function(e) {

		 if($("#claveConfirmacion").val().length < 1 || $("#confirmadoPor").val().length < 1 ) {  
	        alert("No se permiten Campos vacios");  
	        return false;  
    }  



		$.post('TablasCupones.php', $("#form_claves").serialize(), function(data, textStatus, xhr) {

			$("#agregarCV").attr("disabled","disabled");
			$('#form_claves').each (function(){
			  this.reset();
			});
			/*optional stuff to do after success */
		});

		
	});
	$("#btn_rooming").click(function(event) {

		var FolioGrupo = $("#FolioGrupo").val();

		window.open('ImprimirRooming.php?FolioGrupo='+FolioGrupo, '_blank');
		/* Act on the event */
	});

	
});
function tablaCupones()
{
		$("#lista_Tablas tbody").empty();

	$.ajax({
		url: 'TablasCupones.php',		
		dataType: 'json',
		data: {FolioGrupo: $("#FolioGrupo").val()},
	})
	.done(function(h) {
		

		$.each( h,function(index,value) {


				$("#lista_Tablas tbody").append('<tr><td>'+value.Numero+'</td><td>'+value.NombreTitular+'</td><td>'+value.Acompa+'</td><td>'+value.Menores+'</td><td>'+value.Tipo+'</td><td>'+value.Observaciones+'</td><td><button data-id="'+value.Numero+'" class="btn btn-info btn_imprimir">Descargar</button>  <button data-id="'+value.Numero+'" class="btn btn-success btn_borrar">Borrar</button></td></tr>');
				
				
				 /* iterate through array or object */
			});
			$(".btn_imprimir").click(function(event) {

				var a = $(this).attr('data-id');

				window.open('ImprimirCG.php?folio='+a, '_blank');

				
				/* Act on the event */
			});
			$(".btn_borrar").click(function() {

				$.ajax({
					url: 'TablasCupones.php',
					type: 'GET',
					dataType: 'json',
					data: {eliminar:1,
						FolioGrupo: $("#FolioGrupo").val(),
							Numero: $(this).attr('data-id')
							 },
				})
					.done(function() {	

						
							tablaCupones();
							 /* iterate through array or object */
						


							
				
					console.log("success");
					})
					
			

			
		});
		console.log("success");
	})
	
	
}
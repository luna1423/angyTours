$(document).ready(function($) {

	comboCategorias();
	comboPromociones();
		
		//Script del scroll
		$(window).scroll(function () {
	      
	      		console.log($(window).scrollTop())
			    if ($(window).scrollTop() > 608) {
			      $('#nav_bar').addClass('navbar-fixed-top');
			      $('#botonera').addClass('moverNav');
			      $("#figuraNav").fadeIn(500);


			    }
			    if ($(window).scrollTop() < 609) {
			      $('#nav_bar').removeClass('navbar-fixed-top');
			      $('#botonera').removeClass('moverNav');
			      $("#figuraNav").hide();
	    		}
	  		});

		$('#nav_bar #botonera li>a').click(function(){
		  var link = $(this).attr('href');
		  $("html, body").animate({scrollTop: $(link).offset().top}, "slow");
		  return false;
		});
	
		$("#idEstado").change(function() 
		{
			$("#hotel").empty();
			$("#cargando").show();		

			$.ajax({
				url: 'php/estados.php',
				type: 'GET',
				dataType: 'json',
				data:{foliocatalogo:$("#idEstado").val()}
				})

			.done(function(data){
				$.each(data, function(index, value) {
					$("#hotel").append('<option value="'+value.foliocatalogo+'">'+value.nombrehotel+'</option>');
				});
				$("#cargando").hide();
				$("#mostrarHotel").show();

				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});

			
		});

		$("#btn_enviar").click(function(event) {

			$("#btn_enviar").attr("disabled", "disabled");

			$.ajax({
				url: 'php/contenidoHotel.php',
				type: 'GET',
				dataType: 'json',
				data: {foliocatalogo: $("#hotel").val()}
				
			})
			.done(function(data) {
				$.each(data, function(index, val) {
					$("#nombreHotel").html('<h2 class="bg-secundary">'+val.nombrehotel+'</h2>');
					$("#contenido_hotel").html('<p>"'+val.descripcion+'"</p>');
					$("#img_hotel").html('<img class="img_hotel" src="'+val.imagen+'" alt="" />');
					$("#btn_enviar").removeAttr("disabled");
					
				});
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});

});

function comboPromociones()
{
	//$(".combo").empty();
	$.ajax({

			url:"php/bPromociones.php",
			dataType:'json',
			method:'GET',

			}).done(function(data){
				
				$.each(data, function(index, val) {
					$(".promos").append('<div class="capasPromociones"><h3 class="bg-primary titPromocion">'
						+val.nombre+'</h3><div class="contenidoPromocion"><p><span class="datosPromocion">Fecha de viaje</span>: Del '
						+val.fechainiciop+' al '
						+val.fechafinalp+'</p><p><span class="datosPromocion">Precio de Promoción</span>: '
						+val.precio+'</p><p>'
						+val.descripcion+'</p><img class="imagenesPromociones" src="'+val.imagen
						+'"/></div><div id="btnMasInfo">'+val.btnpaypal+'</div></div>');
				});
			
			
			});
}

function comboCategorias()
{
	$(".combo").empty();
	$.ajax({

			url:"php/estados.php",
			dataType:'json',
			method:'GET',


			}).done(function(h){


				
				$("#idEstado").append('<option value="-1">Seleccione un estado</option>');
				
				$.each(h, function(index,value) {
					

				$("#idEstado").append('<option value="'+value.FolioEstado+'">'+value.estado+'</option>');
				
			});
			
			
			});
}

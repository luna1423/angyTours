$(document).ready(function($) {

	comboCategorias();
	comboPromociones();

		//Script del scroll
		$(window).scroll(function () {
	      
	      		console.log($(window).scrollTop())
			    if ($(window).scrollTop() > 1) {
			      $('#nav_bar').addClass('navbar-fixed-top');
			      $('#botonera').addClass('moverNav');
			      $("#figuraNav").fadeIn(500);


			    }
			    if ($(window).scrollTop() < 2) {
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
			$("#mostrarHotel").show();
			$("#hotel").empty();

			$.ajax({
				url: '../../php/estados.php',
				type: 'GET',
				dataType: 'json',
				data:{foliocatalogo:$("#idEstado").val()}
				})

			.done(function(data){
				$.each(data, function(index, value) {
					$("#hotel").append('<option value="'+value.foliocatalogo+'">'+value.nombrehotel+'</option>');
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

		$("#btn_enviar").click(function(event) {

			$("#btn_enviar").attr("disabled", "disabled");

			$.ajax({
				url: '../../php/contenidoHotel.php',
				type: 'GET',
				dataType: 'json',
				data: {foliocatalogo: $("#hotel").val()}
				
			})
			.done(function(data) {
				$.each(data, function(index, val) {
					$("#nombreHotel").html('<h2 class="bg-secundary">'+val.nombrehotel+'</h2>');
					$("#contenido_hotel").html('<p>"'+val.descripcion+'"</p>');
					$("#img_hotel").html('<img class="img_hotel" src=../../'+val.imagen+' alt="" />');
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

		$('#fecha').datepicker({
        defaultDate:"+1w",
        changeMonth: true,
        numberOfMonths:2,
        dateFormat: 'dd/mm/yy',
        minDate:new Date(),
        onClose: function( selectedDate){
            $("#fechaFinal").datepicker("option", "minDate", selectedDate );
        }
    })

    $('#fechaFinal').datepicker({
        defaultDate:"+1w",
        changeMonth: true,
        numberOfMonths:2,
        dateFormat: 'dd/mm/yy',
        onClose: function( selectedDate){
            $("#fecha").datepicker("option", "maxDate", selectedDate );
        }
    })

     $("#grid_cupones").kendoGrid({
                      filterable:true, /* FILTRADO */
            sortable:true,      

            selectable:true,
             height: 430,
            filterable: {
				name: "FilterMenu",
				extra: true, // turns on/off the second filter option
				messages: {
					info: "Buscar :", // sets the text on top of the filter menu
					filter: "CustomFilter", // sets the text for the "Filter" button
					clear: "Limpiar", // sets the text for the "Clear" button
					
					// when filtering boolean numbers
					isTrue: "custom is true", // sets the text for "isTrue" radio button
					isFalse: "custom is false", // sets the text for "isFalse" radio button
					
					//changes the text of the "And" and "Or" of the filter menu
					and: "CustomAnd",
					or: "CustomOr"
				}},

            groupable: {
				messages: {
					empty: "Arrastra una columna para filtar el contenido de la tabla"
				}
			},
            
            pageable: true,
            
            pageable:{      /* PAGINADO DE 5 EN 5  */
              pageSizes:5
            },
             dataSource: {
                            type: "json",
                            transport: {
                                 read: function (options) {
                                $.ajax({
                                    url: "../../php/ctrl_Viajero.php?Cupon="+$("#idViajero").val(),
                                    dataType: "json",

                                    success: function (result) {
                                        options.success(result);
                                       
                                        
                                        


                                    }
                                });

                            },
                            
                            },
                            batch: true,
                           
                            pageSize: 5

                           
                        },

                       
			   
                        toolbar: "Cupones Viajero",

                        columns:[    
                            
          {
          field:"Folio",
          title:"#",
                      width:"50px",
          
          },
          {
            field:"Plan",
            title:"Plan",
            width:"200px",
          },
          {
            field:"Fecha",
            title:"Fecha",
            width:"100px",
          },
          {
            field:"Clave",
            title:"Clave",
            width:"90px",
            
          },
          {
            field:"Hotel",
            title:"Hotel",
            
          },
          
          
          {
            field:"Acciones",
            template: '<button class="btn_imprimir_cupon btn btn-default" data-id=#: Folio # >Imprimir Cupón </button>',width:"150px",
            
          }
           
           ],
           /*sin resultados*/
           
          
           /*sin resultados*/


           
           
        
                    
                });
$('body').on('click','.btn_imprimir_cupon',
    function(e){     

    var a = $(this).attr('data-id');

    alert(a);
    if (a == 0) {alert("No tiene cupones Disponibles")} else{ $(location).attr('href','../../php/ImprimirViajeroC.php?FolioCupon='+$(this).attr('data-id'));};

     
    })

});

function comboPromociones()
{
	//$(".combo").empty();
	$.ajax({

			url:"../../php/bPromociones.php",
			dataType:'json',
			method:'GET',

			}).done(function(data){
				
				$.each(data, function(index, val) {
					$(".promos").append('<div class="capasPromociones"><h3 class="bg-primary titPromocion">'
						+val.nombre+'</h3><div class="contenidoPromocion"><p><span class="datosPromocion">Fecha de viaje</span>: Del '
						+val.fechainiciop+' al '
						+val.fechafinalp+'</p><p><span class="datosPromocion">Precio de Promoción</span>: '
						+val.precio+'</p><p>'
						+val.descripcion+'</p><img class="imagenesPromociones" src=../../'+val.imagen
						+'></div><div id="btnMasInfo">'+val.btnpaypal+'</div></div>');
				});
			
			
			});
}

function comboCategorias()
{
	$(".combo").empty();
	$.ajax({

			url:"../../php/estados.php",
			dataType:'json',
			method:'GET',


			}).done(function(h){

				
				$("#idEstado").append('<option value="-1">Seleccione un estado</option>');
				
				$.each(h, function(index,value) {

				$("#idEstado").append('<option value="'+value.FolioEstado+'">'+value.estado+'</option>');
				
			});
			
			
			});
}

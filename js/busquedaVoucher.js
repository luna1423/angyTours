$(document).ready(function (){

	$("#btn_VerVoucher").click(function(event){

		$("#grid_Voucher").show();

		$("#grid_Voucher").kendoGrid({
                    	filterable:true, /* FILTRADO */
						sortable:true,						
						selectable:true,
						
						pageable:{      /* PAGINADO DE 5 EN 5  */
							pageSizes:5
						},
                        dataSource: {
                            type: "json",
                            transport: {
                                 read: function (options) {
                                $.ajax({
                                    url: "../../../php/verVoucher.php",
                                    dataType: "json",
                                    success: function (result) {
                                        options.success(result);
                                    }
                                });

                            },
                            
                            },
                            batch: true,
                            schema: {
                       type: 'json',
                       model: {
                           id: "OrderId",
                           fields: {
                               Folio: { type: "string" },
                               Concepto: { type: "string" },
                               FechaSalida: { type: "string" },
                               FechaRetorno: { type: "string" },
                               Monto: { type: "string" },
                               Descripcion: { type: "string" }
                           
                              }
                            }
                         },
                            pageSize: 5
                        },
                        height: 430,
                        filterable: true,
                        groupable: true,
                        sortable: true,
                        pageable: true,
                        columns:[
					
					{
						field:"Concepto",
						title:"Concepto",
						width:"90px"
					},
					{
						field:"FechaSalida",
						title:"FechaSalida",
						width:"90px"

					},
					{
						field:"FechaRetorno",
						title:"FechaRetorno",
						width:"90px"

						
					},
					{
						field:"Monto",
						title:"Monto",
						width:"90px"

						
					},
					{
						field:"Descripcion",
						title:"Descripcion",
						
					},
					{
						field:"Imagen",
						title:"Imagen",
						hidden:true,
					},
					 {
					 	title: "Acciones", 

					 	template: '<button class="btn_VerImagen btn btn-default" data-id=#: Imagen # >Ver Voucher</button>',width:"100px"
					 	

					 	/*template: '<button class="btn_VerImagen btn btn-default" data-id=#: Folio # >Ver Voucher</button>',width:"100px"*/
					 }
					 ],			
                    
                });
	});

$('body').on('click','.btn_VerImagen',
    function(e){ 

    var a = $(this).attr('data-id');


    if (a == 0) {alert("No tiene Voucher Disponibles")} else{

    	window.open('../../../'+a, '_blank');

    	

      /*$(location).attr('href','../../../php/vouchers.php?folio='+$(this).attr('data-id'));
      window.open('../../../php/vouchers.php?folio='+$(this).attr('data-id'), '_blank');*/
    }     

    })
});
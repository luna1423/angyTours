	$(document).ready(function () {

		$("#btn_Pendientes").click(function(event) {

			$("#grid_Pendientes_Grupo").hide();

			$("#grid_Pendientes").show();

			$("#grid_Pendientes").kendoGrid({
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
                                    url: "../../../php/pruebaKendo.php?Pendiente=1",
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
                               Vendedor: { type: "string" },
                               Cliente: { type: "string" },
                               Importe: { type: "string" },
                               Fecha: { type: "string" },
                               Acciones: { type: "string" }
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
					field:"Folio",
					title:"Folio",
					
					},
					{
						field:"Vendedor",
						title:"Vendedor"
					},
					{
						field:"Cliente",
						title:"Cliente"
					},
					{
						field:"Importe",
						title:"Importe",
						
					},
					{
						field:"Fecha",
						title:"Fecha",
						
					},
					 {
					 	title: "Acciones", 
					 	template: '<button class="btnEditar btn btn-default" data-id=#: Folio # >Realizar Voucher de pago </button>',width:"100px"
					 }
					 ],
					 
				
                    
                });
			/* Act on the event */
		});
	$("#btn_Pendientes_Grupos").click(function(event) {



			$("#grid_Pendientes").hide();

			$("#grid_Pendientes_Grupo").show();

			$("#grid_Pendientes_Grupo").kendoGrid({
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
                                    url: "../../../php/pruebaKendo.php?Pendiente_Grupo=1",
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
                               Vendedor: { type: "string" },
                               Cliente: { type: "string" },
                               Importe: { type: "string" },
                               Fecha: { type: "string" },
                               Acciones: { type: "string" }
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
					field:"Folio",
					title:"Folio",
					
					},
					{
						field:"Vendedor",
						title:"Vendedor"
					},
					{
						field:"Cliente",
						title:"Cliente"
					},
					{
						field:"Importe",
						title:"Importe",
						
					},
					{
						field:"Fecha",
						title:"Fecha",
						
					},
					{
					 	title: "Acciones", 
					 	template: '<button class="btn_EnviarGrupo btn btn-default" data-id=#: Folio # >Realizar Voucher de pago </button>',width:"100px"
					 }
					 
					 ],
					 
				
                    
                });
	});

	$("#btn_Cerrados").click(function(event) {

		$("#grid_Cerrados_Grupo").hide();

			$("#grid_Cerrados").show();

			 $("#grid_Cerrados").kendoGrid({
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
                                    url: "../../../php/pruebaKendo.php?Cerrado=1",
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
                               Vendedor: { type: "string" },
                               Cliente: { type: "string" },
                               Importe: { type: "string" },
                               Fecha: { type: "string" },
                               Acciones: { type: "string" }
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
					field:"Folio",
					title:"Folio",
					
					},
					{
						field:"Vendedor",
						title:"Vendedor"
					},
					{
						field:"Cliente",
						title:"Cliente"
					},
					{
						field:"Importe",
						title:"Importe",
						
					},
					{
						field:"Fecha",
						title:"Fecha",
						
					}
					 
					 ],
					 
				
                    
                });

		/* Act on the event */
	});
	$("#btn_Cerrados_Grupo").click(function(event) {

		$("#grid_Cerrados").hide();

			$("#grid_Cerrados_Grupo").show();

			$("#grid_Cerrados_Grupo").kendoGrid({
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
                                    url: "../../../php/pruebaKendo.php?Cerrado_Grupo=1",
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
                               Vendedor: { type: "string" },
                               Cliente: { type: "string" },
                               Importe: { type: "string" },
                               Fecha: { type: "string" },
                               Acciones: { type: "string" }
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
					field:"Folio",
					title:"Folio",
					
					},
					{
						field:"Vendedor",
						title:"Vendedor"
					},
					{
						field:"Cliente",
						title:"Cliente"
					},
					{
						field:"Importe",
						title:"Importe",
						
					},
					{
						field:"Fecha",
						title:"Fecha",
						
					}
					 
					 ],
					 
				
                    
                });

		/* Act on the event */
	});
                    
	
	
	
	
	
// selectedItem has EntityVersionId and the rest of your model

	$('body').on('click','.btnEditar',
		function(e){
		var a = $(this).attr('data-id');

  
    if (a == 0) {alert("No tiene cupones Disponibles")} else{			

			$(location).attr('href','../../../php/PagoVenta.php?folio='+$(this).attr('data-id'));
		}

		})
	$('body').on('click','.btn_EnviarGrupo',
		function(e){		
		var a = $(this).attr('data-id');

 
    if (a == 0) {alert("No tiene cupones Disponibles")} else{	

			$(location).attr('href','../../../php/PagoVentaG.php?folio='+$(this).attr('data-id'));
		}
		})


 });

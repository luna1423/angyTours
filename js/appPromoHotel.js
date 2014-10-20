$(document).ready(function() {
	 $("#grid_admin_promo").kendoGrid({
                      filterable:true, /* FILTRADO */
            sortable:true,            
            selectable:true,
            
            pageable:{      /* PAGINADO DE 5 EN 5  */
              pageSizes:8
            },
                        dataSource: {
                            type: "json",
                            transport: {
                                 read: function (options) {
                                $.ajax({
                                    url: "../../../php/ctrl_promo_hotel.php?promo=1",
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
                               Nombre: { type: "string" },
                               FechaI: { type: "string" },
                               FechaF: { type: "string" },
                               Precio: { type: "string" },
                               Acciones: { type: "string" }
                              }
                            }
                         },
                            pageSize: 8
                        },
                        height: 430,
                        filterable: true,
                        groupable: true,
                        sortable: true,
                        pageable: true,
                        columns:[
          {
          field:"Folio",
          title:"#",
          width:"30px",
          
          },
          {
            field:"Nombre",
            title:"Nombre de la promo",
            width:"180px",
          },
          {
            field:"FechaI",
            title:"Fecha Inicio",
            width:"100px",
          },
          {
            field:"FechaF",
            title:"Fecha Final",
            width:"100px",
            
          },{
            field:"Precio",
            title:"Precio",
            width:"100px",
            
          },
         
           {
            field:"Actualizar",
            template: '<button class="btn_actualizar btn btn-default" data-id=#: Folio # >Actualizar </button>',width:"100px"
            
          },
            {
            field:"Borrar",
            template: '<button class="btn_borrar btn btn-default" data-id=#: Folio # >Borrar </button>',width:"100px"
            
          },
           
           
           ],


           
           
        
                    
                });

$('body').on('click','.btn_nombre',
    function(e){      

      $(location).attr('href','../../../php/catalogoP.php?folio='+$(this).attr('data-id'));

    })
$('body').on('click','.btn_actualizar',
    function(e){      

      $(location).attr('href','../../../php/actualizarP.php?folio2='+$(this).attr('data-id'));
      
    })
$('body').on('click','.btn_borrar',
    function(e){      

      $(location).attr('href','../../../php/borrarP.php?folio3='+$(this).attr('data-id'));
      
    })
$("#grid_admin_hotel").kendoGrid({
                      filterable:true, /* FILTRADO */
            sortable:true,            
            selectable:true,
            
            pageable:{      /* PAGINADO DE 5 EN 5  */
              pageSizes:8
            },
                        dataSource: {
                            type: "json",
                            transport: {
                                 read: function (options) {
                                $.ajax({
                                    url: "../../../php/ctrl_promo_hotel.php?hotel=1",
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
                               
                               Nombre: { type: "string" },
                               FechaI: { type: "string" },
                               FechaF: { type: "string" },
                               Precio: { type: "string" },
                               Acciones: { type: "string" }
                              }
                            }
                         },
                            pageSize: 8
                        },
                        height: 430,
                        filterable: true,
                        groupable: true,
                        sortable: true,
                        pageable: true,
                        columns:[
          {
          field:"Folio",
          title:"#",
          width:"30px",
          hidden:true,
          
          },
          {
            field:"Nombre",
            title:"Nombre del Hotel",
            width:"180px",
          },
         {
            field:"Estado",
            title:"Estado",
            width:"100px",
            
          },
         {
            field:"Aciones",
            template: '<button class="btn_nombreH btn btn-default" data-id=#: Folio # >+ Detalles </button>',width:"100px"
            
          },
           {
            field:"Aciones",
            template: '<button class="btn_actualizarH btn btn-default" data-id=#: Folio # >Actualizar </button>',width:"100px"
            
          },
            {
            field:"Aciones",
            template: '<button class="btn_borrarH btn btn-default" data-id=#: Folio # >Borrar </button>',width:"100px"
            
          },
           
           
           ],


           
           
        
                    
                });
$('body').on('click','.btn_nombreH',
    function(e){      

      $(location).attr('href','../../../php/catalogo.php?folio='+$(this).attr('data-id'));

    })
$('body').on('click','.btn_actualizarH',
    function(e){      

      $(location).attr('href','../../../php/actualizar.php?folio2='+$(this).attr('data-id'));
      
    })
$('body').on('click','.btn_borrarH',
    function(e){      

      $(location).attr('href','../../../php/borrar.php?folio3='+$(this).attr('data-id'));
      
    })
});
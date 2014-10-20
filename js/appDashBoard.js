$(document).ready(function($) {
  var FolioGrupo;
  var log = $("#tipo").val();

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

    $('#fechaB').datepicker({
        defaultDate:"+1w",
        changeMonth: true,
        numberOfMonths:2,
        dateFormat: 'yy/mm/dd',
        onClose: function( selectedDate){
            $("#fechaFinalB").datepicker("option", "minDate", selectedDate );
        }
    })

    $('#fechaFinalB').datepicker({
        defaultDate:"+1w",
        changeMonth: true,
        numberOfMonths:2,
        dateFormat: 'yy/mm/dd',
        onClose: function( selectedDate){
            $("#fechaB").datepicker("option", "maxDate", selectedDate );
        }
    })

    $('#fechaInicioG').datepicker({
        defaultDate:"+1w",
        changeMonth: true,
        numberOfMonths:2,
        dateFormat: 'yy/mm/dd',
        onClose: function( selectedDate){
            $("#fechaFinalG").datepicker("option", "minDate", selectedDate );
        }
    })

    $('#fechaFinalG').datepicker({
        defaultDate:"+1w",
        changeMonth: true,
        numberOfMonths:2,
        dateFormat: 'yy/mm/dd',
        onClose: function( selectedDate){
            $("#fechaFinalG").datepicker("option", "maxDate", selectedDate );
        }
    })

    $( "#dialogo" ).dialog({
      autoOpen: false,
      show: {
        effect: "fade",
        duration: 100
      },
      hide: {
        effect: "fade",
        duration: 100
      }
    });

    $( "#opener" ).click(function(){
      $( "#dialogo" ).dialog( "open" );
    });

    $("#btn_buscar").click(function(event) {
       
      $("#dialogo").dialog("close");        

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
                                    url: "../../../php/Control_Tablas.php",
                                    type:"POST",
                                    dataType: "json",
                                    data:{idViajero: $("#id").val(),
                                    Abono:"1"},
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
                               Saldo: { type: "string" },
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
            field:"Estatus",
            title:"Estatus"
          },
           {
            field:"Importe",
            title:"Importe",
            
          },
          {
            field:"Saldo",
            title:"Saldo"
          },
         
          {
            field:"Fecha",
            title:"Fecha de Compra",
            
          },
          {
            title: "Acciones", 
            template: '<button class="btn_abonar btn btn-default" data-id=#: Folio # >Abonar </button>',width:"100px"
           }

           
           ],


           
           
        
                    
                });
        /* Act on the event */
    });
 $("#btn_buscar_borrar").click(function(event) {
       
      $("#dialogo").dialog("close");        
        

       $("#grid_venta_borrar").kendoGrid({
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
                                    url: "../../../php/Control_Tablas.php",
                                    type:"POST",
                                    dataType: "json",
                                    data:{idViajero: $("#id").val(),
                                    Abono:"1"},
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
                               Saldo: { type: "string" },
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
            field:"Estatus",
            title:"Estatus"
          },
           {
            field:"Importe",
            title:"Importe",
            
          },
          {
            field:"Saldo",
            title:"Saldo"
          },
         
          {
            field:"Fecha",
            title:"Fecha de Compra",
            
          },
          {
            title: "Acciones", 
            template: '<button class="btn_abonar_borrar btn btn-default" data-id=#: Folio # >Borrar </button>',width:"100px"
           }

           
           ],


           
           
        
                    
                });
        /* Act on the event */
    });
$("#btn_buscar_grupo").click(function(event) {
       
      $("#dialogo").dialog("close");        
        

       $("#grid_grupo_abonar").kendoGrid({
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
                                    url: "../../../php/Control_Tablas.php",
                                    type:"POST",
                                    dataType: "json",
                                    data:{idViajero: $("#id").val(),
                                    Abono:"1",
                                    AbonoGrupo:"1"},
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
                               Saldo: { type: "string" },
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
            field:"Estatus",
            title:"Estatus"
          },
           {
            field:"Importe",
            title:"Importe",
            
          },
          {
            field:"Saldo",
            title:"Saldo"
          },
         
          {
            field:"Fecha",
            title:"Fecha de Compra",
            
          },
          {
            title: "Acciones", 
            template: '<button class="btn_grupo_abonar_accion btn btn-default" data-id=#: Folio # >Abonar </button>',width:"100px"
           }

           
           ],


           
           
        
                    
                });
        /* Act on the event */
    });
$("#btn_borrar_grupo").click(function(event) {
       
      $("#dialogo").dialog("close");        
        

       $("#grid_grupo_borrar").kendoGrid({
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
                                    url: "../../../php/Control_Tablas.php",
                                    type:"POST",
                                    dataType: "json",
                                    data:{idViajero: $("#id").val(),
                                    Abono:"1",
                                    AbonoGrupo:"1"},
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
                               Saldo: { type: "string" },
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
            field:"Estatus",
            title:"Estatus"
          },
           {
            field:"Importe",
            title:"Importe",
            
          },
          {
            field:"Saldo",
            title:"Saldo"
          },
         
          {
            field:"Fecha",
            title:"Fecha de Compra",
            
          },
          {
            title: "Acciones", 
            template: '<button class="btn_grupo_borrar_accion btn btn-default" data-id=#: Folio # >Borrar </button>',width:"100px"
           }

           
           ],


           
           
        
                    
                });
        /* Act on the event */
    });
$("#btn_cupon_grupo").click(function(event) {
       
      $("#dialogo").dialog("close");        
        

       $("#grid_grupo_cupon").kendoGrid({
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
                                    url: "../../../php/Control_Tablas.php",
                                    type:"POST",
                                    dataType: "json",
                                    data:{idViajero: $("#id").val(),
                                    Abono:"1",
                                    addCupon:"1"},
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
                               Saldo: { type: "string" },
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
            field:"Estatus",
            title:"Estatus"
          },
           {
            field:"Importe",
            title:"Importe",
            
          },
          {
            field:"Saldo",
            title:"Saldo"
          },
         
          {
            field:"Fecha",
            title:"Fecha de Compra",
            
          },
          {
            title: "Acciones", 
            template: '<button class="btn_grupo_cupon_accion btn btn-default" data-id=#: Folio # > agregar pasajeros </button><button class="btn_grupo_cupon_accion_datos btn btn-default" data-id=#: Folio # > agregar claves </button>',width:"100px"
           }

           
           ],


           
           
        
                    
                });
        /* Act on the event */
    });
/*Seccion de cupones ventas*/
$("#btn_buscar_venta_cupon").click(function(event) {

       
      $("#dialogo").dialog("close");        
        

       $("#grid_grupo_cupon").kendoGrid({
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
                                    url: "../../../php/Control_Tablas.php",
                                    type:"POST",
                                    dataType: "json",
                                    data:{idViajero: $("#id").val(),
                                    busqueda_cupon:"1"},
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
                               Saldo: { type: "string" },
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
            field:"Estatus",
            title:"Estatus"
          },
           {
            field:"Importe",
            title:"Importe",
            
          },
          {
            field:"Saldo",
            title:"Saldo"
          },
         
          {
            field:"Fecha",
            title:"Fecha de Compra",
            
          },
          {
            title: "Acciones", 
            template: '<button class="btn_generar_cupon_venta btn btn-default" data-id=#: Folio # > Generar Cupón </button>',width:"100px"
           }

           
           ],


           
           
        
                    
                });
        /* Act on the event */
    });


$('body').on('click','.btn_generar_cupon_venta',
    function(e){     

    var a = $(this).attr('data-id');

   
    if (a == 0) {alert("No tiene ventas Disponibles")} else{ 

      $(location).attr('href','../../../php/cupones.php?folio='+$(this).attr('data-id'));
    }
    })



/* fin Seccion de cupones ventas*/

$('body').on('click','.btn_abonar',
    function(e){      

      var a = $(this).attr('data-id');

  
    if (a == 0) {alert("No tiene ventas Disponibles")} else{

      $(location).attr('href','../../../php/EnviarAbono.php?folio='+$(this).attr('data-id'));
    }
    })
$('body').on('click','.btn_abonar_borrar',
    function(e){      

      var a = $(this).attr('data-id');

   
    if (a == 0) {alert("No tiene ventas Disponibles")} else{

      $(location).attr('href','../../../php/AccionBorrarVenta.php?folio='+$(this).attr('data-id'));
    }
    })
$('body').on('click','.btn_grupo_abonar_accion',
    function(e){    
    var a = $(this).attr('data-id');

   
    if (a == 0) {alert("No tiene ventas Disponibles")} else{  

      $(location).attr('href','../../../php/EnviarAbonoGrupo.php?folio='+$(this).attr('data-id'));
    }
    })
$('body').on('click','.btn_grupo_borrar_accion',
    function(e){  
    var a = $(this).attr('data-id');

 
    if (a == 0) {alert("No tiene ventas Disponibles")} else{    

      $(location).attr('href','../../../php/AccionBorrarGrupo.php?folio='+$(this).attr('data-id'));
    }
    })
$('body').on('click','.btn_grupo_cupon_accion',
    function(e){      
      var a = $(this).attr('data-id');

   
    if (a == 0) {alert("No tiene ventas Disponibles")} else{

      $(location).attr('href','../../../php/AgregarCuponesGrupo.php?folio='+$(this).attr('data-id'));
    }
    })
$('body').on('click','.btn_grupo_cupon_accion_datos',
    function(e){      
      var a = $(this).attr('data-id');

   
    if (a == 0) {alert("No tiene ventas Disponibles")} else{

      $(location).attr('href','../../../php/AgregarClavesCuponesGrupo.php?folio='+$(this).attr('data-id'));
    }
    })
$('body').on('click','.btn_grupo_cupon_imprimir_accion',
    function(e){      
      var a = $(this).attr('data-id');


    if (a == 0) {alert("No tiene ventas Disponibles")} else{

      $(location).attr('href','../../../php/ImprimirCuponesGrupo.php?folio='+$(this).attr('data-id'));
    }
    })
$("#btn_regresar").click(function(event) {

  $(location).attr('href','../Usuarios/'+log+'/DashBoard/DPagos.php');

  /* Act on the event */
});

  

    
})
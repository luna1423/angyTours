$(document).ready(function() {
  $("#btn_Cerrados").click(function(event) {

    $("#bitacora_Grupo").hide();
    $("#dateG").hide();

      $("#bitacora_Venta").show();
      $("#dateV").show();

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

    $("#bitacora_Venta").hide();
    $("#dateV").hide();

      $("#bitacora_Grupo").show();
      $("#dateG").show();

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
                               Folio: { type: "string",
                                },
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
  
  $("#btn_Calcular").click(function(event) {

    
    $.ajax({
      url: '../../../php/control_Fechas.php',
      type: 'POST',
      dataType: 'json',
      data: {calcular:"1",fecha: $('#fechaB').val(),fechaFinal :$('#fechaFinalB').val(),},
    })
    .done(function(h) {
      
      $.each(h,function(index,value) {

        $("#ResultadosV").html("<p class='marcoBitacora'>"+value.Ventas+"</p>");
        

         $("#btn_imprimirReporte").show();
      });
      

      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    

    
    /* Act on the event */
  });
  $("#btn_Calcular_Grupo").click(function(event) {

    $.ajax({
      url: '../../../php/control_Fechas.php',
      type: 'POST',
      dataType: 'json',
      data: {calcularG:"2",fecha: $('#fechaInicioG').val(),fechaFinal :$('#fechaFinalG').val(),},
    })
    .done(function(h) {
      
      $.each(h,function(index,value) {

        $("#ResultadosVG").html("<p class='marcoBitacora'>"+value.Ventas+"</p>");
         $("#btn_imprimirReporteF").show();


       
        
         /* iterate through array or object */
      });
  });
    });
 
   


});
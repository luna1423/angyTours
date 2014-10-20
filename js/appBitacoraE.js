$(document).ready(function() {
  

    

       $("#grid_Egresos").kendoGrid({
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
                                    url: "../../../php/pruebaKendo.php?Egreso=1",
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
          title:"#",
          width:"30px",
          
          },
          {
            field:"Vendedor",
            title:"Vendedor",
            width:"180px",
          },
          {
            field:"Cliente",
            title:"Cliente",
            width:"180px",
          },
          {
            field:"Importe",
            title:"Importe",
            width:"100px",
            
          },{
            field:"Neto",
            title:"Neto",
            width:"100px",
            
          },
          {
            field:"Fecha",
            title:"Fecha",
            width:"80px",
            
          },{
            field:"Tipo",
            title:"Tipo",
            
          }
           
           ],


           
           
        
                    
                });

    /* Act on the event */
  
  $("#btn_Calcular").click(function(event) {

    
    $.ajax({
      url: '../../../php/control_Fechas.php',
      type: 'POST',
      dataType: 'json',
      data: {calcularE:"1",fecha: $('#fechaB').val(),fechaFinal :$('#fechaFinalB').val(),},
    })
    .done(function(h) {
      
      $.each(h,function(index,value) {

        $("#ResultadosV").html("<p class='marcoBitacora'>"+value.Ventas+"</p>");
         $("#btn_imprimirReporte").show();


       
        
         /* iterate through array or object */
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
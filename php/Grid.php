<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/kendo.common.min.css">
  <link rel="stylesheet" type="text/css" href="../css/kendo.default.min.css">
</head>
<body>
  <div id="grid" style="width:700px; height:455px; border: 2px red solid;"></div>

  <script src="../js/jquery-1.11.0.min.js"></script>
  <script src="../js/kendo.all.min.js"></script>
  <script src="../js/kendo.all.min.js"></script>
  <script src="../js/kendo.culture.es-MX.min.js"></script>


    <script type="text/javascript">
                kendo.culture("es-MX");
                $(document).ready(function () {
                    $("#grid").kendoGrid({
                      filterable:true, /* FILTRADO */
                      sortable:true,
                      pageable:{      /* PAGINADO DE 5 EN 5  */
                        pageSizes:5
                      },
                        dataSource: {
                            type: "json",
                            transport: {
                                 read: function (options) {
                                $.ajax({
                                    url: "pruebaKendo.php",
                                    dataType: "json",
                                    success: function (result) {
                                        options.success(result);
                                    }
                                });
                            },
                            batch: true,
                            schema: {
                       type: 'json',
                       model: {
                           id: "OrderId",
                           fields: {
                               id: { type: "string" },
                               fechaA: { type: "string" },
                               henEmp: { type: "string" },
                               hSaEmp: { type: "string" },
                              
                              }
                            }
                         },
                            
                        },
                        height: 430,
                        filterable: true,
                        groupable: true,
                        sortable: true,
                        pageable: true,
                        columns: [{
                            field: "id",
                            title: "OrderId",
                            width: 140
                        }, {
                            field: "fechaA",
                            title: "ProductId",
                            width: 190
                        }, {
                            field: "henEmp",
                            title: "UnitPrice"
                        }, {
                            field: "hSaEmp",
                            width: 110
                        }, {
                            field: "Discount",
                            width: 110
                        }]
                    }});
                });
            </script>
            </script>

  </script>
</body>
</html>



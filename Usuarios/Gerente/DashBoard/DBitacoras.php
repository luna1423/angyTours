<?php 
  session_start();
  if($_SESSION['logged'] == 'yes')
  {
?>
<!doctype html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de Administración</title>

<link rel="stylesheet" type="text/css" href="../../../css/960.css" />
<link rel="stylesheet" type="text/css" href="../../../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../../../css/text.css" />
<link rel="stylesheet" type="text/css" href="../../../css/green.css" />

<link rel="stylesheet" type="text/css" href="../../../css/kendo.common.min.css">
<link rel="stylesheet" type="text/css" href="../../../css/kendo.default.min.css">
<link rel="stylesheet" href="../../../css/ui-lightness/jquery-ui-1.10.4.css">

<link rel="shortcut icon" href="../../../imagenes/iconoAngy.ico" />

<script src="../../../js/jquery-2.0.2.min.js"></script>
<script src="../../../js/jquery-ui-1.10.4.js"></script> 
<script src="../../../jquery-ui-1.10.4.custom\development-bundle\ui\i18n\jquery.ui.datepicker-es.js"></script>
<script src="../../../js/appDashBoard.js"></script>

</head>

<body>

<!-- WRAPPER START -->
<div class="container_16" id="wrapper"> 

    <!--LOGO-->
  <div class="grid_8" id="logo">Panel de administración</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
    <div id="user_tools"><span> Bienvenido <?php echo $_SESSION["user"]; ?>  |  <a href="../../../php/Desconectarse.php">Desconectarse</a>  |  <a href="../../../php/Perfil.php">Editar Perfil</a></span></div>
    </div>

<!-- USER TOOLS END -->    
<div class="grid_16" id="header">

<!-- MENU START -->
<div id="menu">
  <ul class="group" id="menu_group_main">

        <li class="item first" id="three"><a href="DVentas.php" class="main"><span class="outer"><span class="inner venta">Ventas</span></span></a></li>

        <li class="item middle" id="two"><a href="DGrupo.php" class="main"><span class="outer"><span class="inner grupo">Grupos</span></span></a></li>    
        
        <li class="item middle" id="four"><a href="DPagos.php" class="main"><span class="outer"><span class="inner pagos">Pagos</span></span></a></li>
        
        <li class="item middle" id="four"><a href="DPromociones.php" class="main"><span class="outer"><span class="inner promociones">Promociones</span></span></a></li>
        
        <li class="item middle" id="eight"><a href="DCatalogo.php" class="main"><span class="outer"><span class="inner catalogo">Admin. Catálogo</span></span></a></li>

        <li class="item middle" id="two"><a href="DRegistrar.php" class="main"><span class="outer"><span class="inner registrar">Agregar Usuario</span></span></a></li>

        <li class="item last" id="two"><a href="DBitacoras.php" class="main current"><span class="outer"><span class="inner bitacora">Bitácoras</span></span></a></li>
<a target="_blank" href="../manual.html"><img src="../../../img/ayuda-min.png"></a>
    </ul>
</div>
<!-- MENU END -->
</div>


<div class="grid_16">

<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="DBitacoras.php" class="current"><span>Ingresos</span></a></li>
                      <li><a href="DBEgresos.php"><span>Egresos</span></a></li>
          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="bitacora">Ingresos</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
		<div class="portlet">
            <div class="portlet-header"><img src="../../../images/icons/chart_bar.gif" width="16" height="16" alt="Reports" /> Consultar los ingresos de la Agencia </div>
            <div class="portlet-content" style="width:850px;">
            <!--THIS IS A PLACEHOLDER FOR FLOT - Report & Graphs -->
            <div id="placeholder">

            <button id="btn_Cerrados">Ventas Finalizadas</button>
            <button id="btn_Cerrados_Grupo">Grupos Finalizados</button>

            <div id="bitacora_Venta">
            
            <div id="dateV" style="display:none;">
            <div id="grid_Cerrados"  style="width:600px; height:455px; "></div>
            <div class="fechasyResultados">
                  <form action="../../../php/ReporteBitacora.php" method="GET" class="moverForm">
                    <label for="">Fecha Inicio Venta</label><input type="text" name="fechaInicio" id="fechaB"> 
                    <label for="">Fecha Final Venta</label><input type="text" name="fechaFinal" id="fechaFinalB">
                    <button id="btn_Calcular" type="button">Calcular</button>
                    <button id="btn_imprimirReporte" type="submit" style="display: none;">Imprimir Reporte</button>     
                  </form>
                  <div id="ResultadosV"></div>
                  <div id="ResultadosVN"></div>
            </div>
            </div>
                           
                     
            </div>
            <div id="bitacora_Grupo">
            
            <div id="dateG" style="display:none;">

            <div id="grid_Cerrados_Grupo"  style="width:600px; height:455px;"></div>

            <div class="fechasyResultados">
              <form action="../../../php/ReporteBitacoraG.php" method="GET" class="moverForm">
                <label for="">Fecha Inicio Grupos</label><input type="text" name="fechaInicio" id="fechaInicioG">
                <label for="">Fecha Final Grupos</label> <input type="text" name="fechaFinal" id="fechaFinalG">
                <button id="btn_Calcular_Grupo" type="button">Calcular</button>
                <button id="btn_imprimirReporteF" type="submit" style="display:none;">Imprimir Reporte</button>     
              </form>

              <div id="resultadoG"></div>
              <div id="ResultadosVG"> </div>

            </div>
            </div>
            
                      
            </div>
 

            </div>
            </div>
        </div> 
      </div>      
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Angy Tours Dash Board Panel</div>
<!-- FOOTER END -->
 <script src="../../../js/kendo.culture.es-MX.min.js"></script>
  <script src="../../../js/kendo.all.min.js"></script> 
  <script src="../../../js/appBitacora.js"></script> 
</body>
</html>


<?php 
  }else{
    echo '<script language="javascript">alert("No se ha iniciado ninguna sesión");
      window.location.href="../../Html/index.html";
      </script>';   
}
 ?>
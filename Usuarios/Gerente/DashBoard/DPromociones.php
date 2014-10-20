<?php 
  session_start();
require_once '../../../php/Conexion.php';
require_once '../../../php/Biblioteca.php';
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
<link rel="stylesheet" type="text/css" href="../../../css/EVerificar.css" />

<link rel="stylesheet" href="../../../css/kendo.common.min.css">
  <link rel="stylesheet" href="../../../css/kendo.default.min.css">

<link rel="stylesheet" href="../../../css/ui-lightness/jquery-ui-1.10.4.css">

<link rel="shortcut icon" href="../../../imagenes/iconoAngy.ico" />

<script src="../../../js/jquery-2.0.2.min.js"></script>
<script src="../../../js/jquery-ui-1.10.4.js"></script> 
<script src="../../../jquery-ui-1.10.4.custom\development-bundle\ui\i18n\jquery.ui.datepicker-es.js"></script>
<script src="../../../js/kendo.web.min.js"></script>
<script src="../../../js/appDashBoard.js"></script>
<script src="../../../js/appPrecio.js"></script>

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
        
        <li class="item middle" id="four"><a href="DPromociones.php" class="main current"><span class="outer"><span class="inner promociones">Promociones</span></span></a></li>
        
        <li class="item middle" id="eight"><a href="DCatalogo.php" class="main"><span class="outer"><span class="inner catalogo">Admin. Catálogo</span></span></a></li>

        <li class="item middle" id="two"><a href="DRegistrar.php" class="main"><span class="outer"><span class="inner registrar">Agregar Usuario</span></span></a></li>

        <li class="item last" id="two"><a href="DBitacoras.php" class="main"><span class="outer"><span class="inner bitacora">Bitácoras</span></span></a></li>
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
                      <li><a href="DPromociones.php" class="current"><span>Nueva Promoción</span></a></li>
                      <li><a href="DPrAdministrar.php"><span>Administrar Promoción</span></a></li>
                      
          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="promocion">Nueva Promoción</h1>
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
            <div class="portlet-header"><img src="../../../images/icons/chart_bar.gif" width="16" height="16" alt="Reports" /> Registrar nueva Promoción </div>
            <div class="portlet-content" style="width:850px;">
            <!--THIS IS A PLACEHOLDER FOR FLOT - Report & Graphs -->

            <div id="placeholder">

              <div>
                <form action="../../../php/enviarPromocion.php " method = "post" enctype="multipart/form-data" id="formulario">

                  <div id="seccionIzquierda">
                    <label for="">Nombre de la promoción:</label><input style="width:260px;" type= "text" name = "nombre" /><br /> 
                    <label for="">Fecha de inicio de la promoción:</label><input type="text" id="fecha" name="fechainiciop">
                    <br />
                    <label for="">Fecha de terminacion de la promoción:</label><input type="text" id="fechaFinal" name="fechafinalp">
                    <br />
                    <label for="">Precio:</label><input id="currency" type="number" value="0" min="0" max="1000000" name="precio" required/><br /><br />
                    <label for="">Subir imagen del hotel:</label><input type= "FILE" name = "imagen" />
                  </div>

                  <div id="seccionDerecha">
                    <label for="">Descripción:</label><textarea name = "descripcion" id="texto" cols="56" rows="10"></textarea><br />
                    <label for="">Botón de PayPal:</label><textarea name = "btnpaypal" id="btnpaypal" cols="56" rows="10"></textarea><br />
                                        
                    <div id="botonDerecha">
                      <button style="width:100px; height:50px;"> <img src="../../../imagenes/promocion.png" alt=""  type="submit" id="imgBoton"><span class="enviar"> Agregar </span></button>
                    </div>
                  </div>

                </form>

      
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
</body>
</html>

<?php 
  }else{
    echo '<script language="javascript">alert("No se ha iniciado ninguna sesión");
      window.location.href="../../Html/index.html";
      </script>';   
}
 ?>
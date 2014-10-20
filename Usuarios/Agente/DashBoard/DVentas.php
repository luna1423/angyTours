<?php
session_start();
require_once '../../../php/Conexion.php';
$conexion = conectarse();
$IdUsuario =$_SESSION["id"];
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

<script type="text/javascript">
  $(function (){

    $('#cliente').autocomplete({
      source : '../../../php/buscarPersona.php',
      select : function(event, ui){
        $('#resultados').html(
          
          '<strong>Nombre: </strong>' + ui.item.value + '<br />' +
          '<strong>Telefono: </strong>' + ui.item.telefono + '<br />' +
          '<strong>Email: </strong>' + ui.item.correo + '<br />'           
        )
         $("#idVi").val(ui.item.id);
      }
      });
  });
  </script>

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
        <li class="item first" id="three"><a href="DVentas.php" class="main current"><span class="outer"><span class="inner venta">Ventas</span></span></a></li>

        <li class="item middle" id="two"><a href="DGrupo.php" class="main"><span class="outer"><span class="inner grupo">Grupos</span></span></a></li>    
        
        <li class="item middle" id="four"><a href="DPagos.php" class="main"><span class="outer"><span class="inner pagos">Pagos</span></span></a></li>
        
        <li class="item middle" id="four"><a href="DPromociones.php" class="main"><span class="outer"><span class="inner promociones">Promociones</span></span></a></li>
        
        <li class="item middle" id="eight"><a href="DCatalogo.php" class="main"><span class="outer"><span class="inner catalogo">Admin. Catálogo</span></span></a></li>

        <li class="item last" id="two"><a href="DRegistrar.php" class="main"><span class="outer"><span class="inner registrar">Agregar Usuario</span></span></a></li>
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
                      <li><a href="DVentas.php" class="current"><span>Nueva Venta</span></a></li>
                      <li><a href="DVAbono.php"><span>Nuevo Abono</span></a></li>
                      <li><a href="DVCupones.php"><span>Cupones</span></a></li>
          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="ventas">Nueva Venta</h1>
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
            <div class="portlet-header"><img src="../../../images/icons/chart_bar.gif" width="16" height="16" alt="Reports" /> Ingresar Nueva Venta </div>
            <div class="portlet-content" style="width:850px;">
            <!--THIS IS A PLACEHOLDER FOR FLOT - Report & Graphs -->
            <div id="placeholder"> 

            <div id="formulario">
              <form action="../../../php/AccionVenta.php" method = "post">    
        
                <div id="seccionIzquierda">
                  <label for="">Pagado por (cliente):</label><input style="width:260px;" type= "text" name = "cliente" id="cliente" required  /><br /><br /> 
                  <input type="hidden" id="idVi" name="idViajero" >
                  <label for="">Total de la Venta:</label><input id="currency" type="number" value="0" min="0" max="1000000" name="total" required/><br /><br />
                  <br />        
                  <label for="">Importe de la venta (letras):</label><input style="width:260px;" type= "text" name = "importe"required  />
                </div>         
                <div id="seccionDerecha">
                  <div id="seccionFechas">
                    <div id="fechaE"><label for="">Fecha Entrada: </label>
                      <input type="text" id="fecha" name="FechaInn"></div><br>
                        <div id="fechaS"><label for="">Fecha Salida: </label>
                          <input type="text" id="fechaFinal" name="FechaOut"></div><br>
                </div>
                <div id="seccionVerificar">
                  <div id="resultados"></div> 
                </div>                
                  <label for="">Descripción:</label><textarea name="descripcion" id="texto" cols="60" rows="10"></textarea><br><br>
                  
                  <div id="botonDerecha">
                    <button style="width:150px; height:50px;"> <img src="../../../imagenes/enviar.png" alt=""  type="submit" id="imgBoton"> <span class="enviar">Registrar</span> </button>
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
<?php 
  session_start();
  require_once '../../../php/Conexion.php';
  require_once '../../../php/Biblioteca.php';
  if($_SESSION['logged'] == 'yes')
  {
?>
<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel de Administración</title>

<link rel="stylesheet" type="text/css" href="../../../css/960.css" />
<link rel="stylesheet" type="text/css" href="../../../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../../../css/text.css" />
<link rel="stylesheet" type="text/css" href="../../../css/green.css" />
<link rel="stylesheet" type="text/css" href="../../../css/EVerificar.css" />

<link type="text/css" href="../../../css/smoothness/ui.css" rel="stylesheet" />

<link rel="shortcut icon" href="../../../imagenes\iconoAngy.ico" />

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
        
        <li class="item middle" id="eight"><a href="DCatalogo.php" class="main current"><span class="outer"><span class="inner catalogo">Admin. Catálogo</span></span></a></li>

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
                      <li><a href="DCatalogo.php" class="current"><span>Nuevo Hotel</span></a></li>
                      
          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="catalogos">Nuevo Hotel</h1>
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
            <div class="portlet-header"><img src="../../../images/icons/chart_bar.gif" width="16" height="16" alt="Reports" /> Registrar Nuevo Hotel </div>
            <div class="portlet-content" style="width:850px;">
            <!--THIS IS A PLACEHOLDER FOR FLOT - Report & Graphs -->
            <div id="placeholder">

               <div>
                  <form action="../../../php/enviarCatalogo.php " method = "post" enctype="multipart/form-data" id="formulario">

                    <div id="seccionIzquierda">
                      <label for="">Nombre del Hotel: </label><input style="width:260px;" type= "text" name = "nombre" /><br /> 
                      <label for="">Dirección: </label><input style="width:260px;" type= "text" name = "direccion" /><br />
                      <label for="">Teléfono: </label><input style="width:260px;" type= "text" name = "telefono" /><br />
                      
                      <br />
                      <select name="estado" id="Estados">
                              <option value="1">Riviera Maya</option>
                              <option value="2">Cd. de México</option>
                              <option value="3">Guadalajara</option>
                              <option value="4">Puebla</option>
                              <option value="5">San Cristobal de las Casas</option>
                              <option value="6">León Guanajuato</option>
                              <option value="7">Monterrey</option>
                              <option value="8">Mérida</option>
                              <option value="9">San Luis Potosí</option>
                              <option value="10">Aguas Calientes</option>
                              <option value="11">Acapulco</option>
                              <option value="12">Cancún</option>
                              <option value="13">Morelia</option>
                              <option value="14">Tuxtla Gutierrez</option>
                              <option value="15">Cozumel</option>
                              <option value="16">Xalapa</option>
                              <option value="17">Playa del Carmen</option>
                              <option value="18">Mexicali</option>
                              <option value="19">Tulum</option>
                              <option value="20">Campeche</option>
                              <option value="21">Villa Hermosa</option>
                              <option value="22">Comitán</option>
                              
                              </select>
                              <br /><br />

                      <label for="">Seleccione una imagen del hotel: </label><input type= "FILE" name = "imagen" />

                    </div>

                    <div id="seccionDerecha">

                      <label for="">Descripción: </label><textarea name = "descripcion" id="texto" cols="55" rows="10"></textarea><br />
                      
                      <div id="botonDerecha">
                        <button style="width:150px; height:50px;"> <img src="../../../imagenes/catalogo.png" alt=""  type="submit" id="imgBoton"> <span class="enviar"> Agregar </span> </button>
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
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
        
        <li class="item middle" id="eight"><a href="DCatalogo.php" class="main"><span class="outer"><span class="inner catalogo">Admin. Catálogo</span></span></a></li>

        <li class="item last" id="two"><a href="DRegistrar.php" class="main current"><span class="outer"><span class="inner registrar">Agregar Usuario</span></span></a></li>
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
                      <li><a href="DRegistrar.php" class="current"><span>Registrar Cliente</span></a></li>
          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="registrar">Registrar Cliente</h1>
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
            <div class="portlet-header"><img src="../../../images/icons/chart_bar.gif" width="16" height="16" alt="Reports" /> Registrar un Cliente nuevo </div>
            <div class="portlet-content" style="width:850px;">
            <!--THIS IS A PLACEHOLDER FOR FLOT - Report & Graphs -->
            <div id="formulario">

              <form action="../../../php/RegistrarEmergente.php" method="POST" autocomplete="on">

                <div id="seccionIzquierdaR">                 
                  <label for="username" class="uname" > Nombre de Usuario: </label>
                  <input type="text" class="form-control" name="usuario" placeholder="Usuario" style="width:260px;" required>
                                
                  <label for="username" class="uname" > Nombre Personal: </label>
                  <input type="text" class="form-control" placeholder="Nombre Personal" name="nombre" style="width:260px;" required>
                                
                  <label for="password" class="youpasswd" > Contraseña: </label>
                  <input type="password" class="form-control" placeholder="Contraseña" name="pass" style="width:260px;" required> 
                </div>

                <div id="seccionDerechaR">                
                  <label for="username" class="uname"> Teléfono Personal: </label>
                  <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" style="width:260px;" required maxlength="10">
                                
                  <label for="username" class="uname" > Correo Electrónico: </label>
                  <input type="email" class="form-control" placeholder="Email" name="correo" style="width:260px;" required>
                               
                  <label for="username" class="uname"> Dirección: </label>
                  <input type="text" class="form-control" placeholder="Dirección" name="direccion" style="width:260px;" required><br><br>
                  
                  <div id="botonDerecha">
                    <button style="width:150px; height:50px;"> <img src="../../../imagenes/enviar.png" alt=""  type="submit" id="imgBoton"> <span class="enviar">Registrar</span> </button>
                  </div>
                </div>                
              </form> 

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
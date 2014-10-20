<?php 
	session_start();
	if($_SESSION['logged'] == 'yes')
	{
		$usuario = $_SESSION['user'];
		$idViajero = $_SESSION['id'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Viajero Angy Tours</title>

	<link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/normalize.css">
	<link rel="stylesheet" href="../../css/EViajero.css">
	<link rel="stylesheet" href="../../css/ui-lightness/jquery-ui-1.10.4.css">
	
	<link rel="stylesheet" href="../../css/kendo.common.min.css">
	<link rel="stylesheet" href="../../css/kendo.default.min.css">

	<link href='http://fonts.googleapis.com/css?family=Delius+Swash+Caps' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="../../imagenes/iconoAngy.ico" />
	

</head>

<body>

<header>

	<nav id="nav_bar">
    	<div id="imagenIzquierda">
    		<a href="#">
    			<figure id="figuraNav" style="display: none;">
					<img src="../../imagenes/Angy.png" alt="">
				</figure></a>
		</div>

		<div id="botoneraDerecha">

			<ul id="botonera">
				<li><a href="#inicio"><figcaption class="palmeraImagen"><img src="../../palmeritas.png" alt=""></figcaption><strong> Inicio </strong> </a></li>
				<li class="dropdown">
	  				<a data-toggle="dropdown" href="#">
	  					<figcaption class="palmeraImagen">
	  						<img src="../../palmeritas.png" alt="">
	  					</figcaption>   					
	    				<strong>Servicios</strong><span class="caret"></span>
	  				</a>
	  				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	    				<li><a href="#catalogo"><strong> Catálogo </strong></a></li>
						<li><a href="#promociones"><strong> Promociones </strong></a></li>
	  				</ul>
	  			</li>
	  			<li class="dropdown">
	  				<a data-toggle="dropdown" href="#">
	  					<figcaption class="palmeraImagen">
	  						<img src="../../palmeritas.png" alt="">
	  					</figcaption>   					
	    				<strong>Pagos</strong><span class="caret"></span>
	  				</a>
	  				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	    				<li><a href="#cupones"><strong>Cupones</strong></a></li> 
						<li><a href="#pagosV"><strong>Pagos Voucher</strong></a></li>
	  				</ul>
	  			</li>

	  			<li class="dropdown">
	  				<a data-toggle="dropdown" href="#">
	  					<figcaption class="palmeraImagen">
	  						<img src="../../palmeritas.png" alt="">
	  					</figcaption>   					
	    				<strong>Usuario</strong><span class="caret"></span>
	  				</a>
	  				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	    				<li><a href="../../php/Desconectarse.php"><strong>Desconectarse</strong></a></li>
						<li><a data-toggle="modal" data-target="#editPerfil" id="btnEditarPerfil" class="btn_editar"><strong>Editar Perfil</strong></a></li>
	  				</ul>
	  			</li>
				
			</ul>
		</div>

	</nav>
</header>

<section>


	<figure class="separador">
			<img id="inicio" src="../../imagenes/Separador2.png" alt="">
	</figure>

	<!-- ************************************************
					SECCIÓN INICIO 
	***************************************************-->

	<article id="articuloInicio" style="padding-top:50px;">
		
			<div id="textoInicio">

				<h2 id="tituloInicio" class="colorLetras" type="hidden">Inicio</h2><br>
		
					<h3>¡Bienvenido <?php echo $usuario ?>!</h3>  <br><br>

					<p>
					En esta página ofrecemos nuestros servicios como asesores de viajes nacionales, con calidad y confianza, resultado de nuestros años de experiencia diseñando recorridos de acuerdo al presupuesto y necesidades de nuestros clientes. <br><br>

					Contamos con servicio de hotelería para estancias de placer, negocios, convenciones, salidas escolares, viajes religiosos, etc. Por otro lado ofrecemos servicios de transporte, guías, entradas a parques nacionales, etc. <br><br>

					Acérquese y consulte sin compromiso, diseñaremos sus viajes a su <span class="colorLetras">satisfacción</span>.
			 		</p>
			</div>
		
		</article>


	<!-- ************************************************
					SECCIÓN CATÁLOGO
	***************************************************-->

	<figure class="separador">
		<img id="catalogo" src="../../imagenes/Separador2.png" alt="">
	</figure>
	
	<article id="articuloCatalogo" style="height:500px; padding-top:50px;">

		<h2 id="tituloCatalogo" class="colorLetras titulosArticulos">Catálogo</h2>
		
		<div id="box3" class="caja">

			<form id="frmCombos" class="form-horizontal" role="form">

				<label for="nombre">Estado : </label>
				<select name="idEstado" class="combo form-control" id="idEstado"></select><br><br>

					<div id="mostrarHotel" style="display:none;">
						<label for="hotel">Hotel:</label>
						<select name="hotel" class="form-control" id="hotel"></select><br><br>							
						<input type="button" value="Ver Hotel" id="btn_enviar">
					</div>

			</form>
									
		</div>
			
		<div id="informacionHotel">
			<div id="nombreHotel"></div>
			<div id="img_hotel"></div>
			<div id="contenido_hotel"></div>			
		</div>

	</article>
	
	<!-- ************************************************
					SECCIÓN PROMOCIONES
	***************************************************-->
	
	<figure class="separador">
			<img id="promociones" src="../../imagenes/Separador2.png" alt="">
	</figure>

	<article id="articuloPromociones" style="padding-top:50px;">

		<h2 id="tituloPromociones" class="colorLetras titulosArticulos">Promociones</h2>

		<figure style="text-align: right;">
			<img src="../../imagenes/logotipo_paypal_seguridad.png" alt="">
		</figure>
		
		<div class="promos">
		</div>

	</article>

	<!-- ************************************************
					SECCIÓN CUPÓN
	***************************************************-->
	
	<figure class="separador">
		<img id="cupones" src="../../imagenes/Separador2.png" alt="">
	</figure>

	<input type="Hidden" id="idViajero"value="<?php echo $idViajero ?>">

	<article id="articuloCupones" style="padding-top:50px;">


		<h2 id="tituloCupones" class="colorLetras titulosArticulos">Cupones</h2><br>
			 <div id="grid_cupones" style="width:800px; height:455px; margin: 0 auto; "></div>
	</article>

	<!-- ************************************************
					SECCIÓN PAGOS VOUCHER
	***************************************************-->
	
	<figure class="separador">
		<img id="pagosV" src="../../imagenes/Separador2.png" alt="">
	</figure>

	<article id="articuloPagosV" style="padding-top:50px; height: 500px;">

		<h2 id="tituloPagosV" class="colorLetras titulosArticulos">Subir Voucher</h2><br>

		<p class="ajustarTexto">En esta sección podrá subir (Escaneado) el voucher que se le entregó cuando realizó el pago
			en el banco, con lo cual, se podrá confirmar la venta realizada y liberación de su correspondiente
			cupón de viaje. Llene el siguiente formulario y, cuando un administrador haya checado su voucher, se 
			liberará su cupón de viaje. Para comenzar el llenado, favor de dar click en el botón presentado a 
			continuación.</p> <br><br>

		<div class="btnDerecha">
			<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#subirVaucher" id="btnSubirVaucher">
        		Subir Voucher
      		</button>
      	</div>

      		<div class="modal fade" id="subirVaucher">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title">Confirmación de Compra</h4>
			      </div>
			      <div class="modal-body">
			         	<form action="../../php/enviarVoucher.php" method="POST" autocomplete="on" class="form-horizontal" role="form" enctype="multipart/form-data"> 
	                                                         
	                        <label for="concepto">Concepto de Venta:</label>
	                        <select name="concepto" id="concepto" class="form-control" required>

                              <option value="reservacion">Reservación</option>
                              <option value="transporte">Transporte</option>
                              <option value="reserYTrans">Ambos</option>

                            </select>	                        
	                        <label for="">Fecha de Salida: </label>
                     		<input type="text" id="fecha" name="FechaSalida" class="form-control">
                        	<label for="">Fecha de Retorno: </label>
                          	<input type="text" id="fechaFinal" name="FechaRetorno" class="form-control">

                          	<label for="">Total de la Venta:</label>
                          	<input id="currency" class="form-control" type="number" value="0" min="0" max="1000000" name="total" required/><br>

                          	<label for="">Descripción:</label>
                          	<textarea name="descripcion" id="texto" class="form-control" cols="60" rows="5"></textarea>
	                        
	                        <label for="">Subir imagen del voucher: </label>
	                        <input type= "FILE" name="voucher"/> 

	                        <div class="modal-footer">
			        			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        			<button type="submit" class="btn btn-success">Subir Voucher</button>
			      			</div>
	                                
	                    </form>
			      </div>
		      
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

	</article>

	<div class="modal fade" id="editPerfil">
	<div class="modal-dialog">
	    <div class="modal-content">
		      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="datos0">Editar Perfil</h4>
			        <h4 class="modal-title" id="datos1"></h4>
			        
			      </div>
			     
			      <div class="modal-body">
			      
			         	<form action="#" autocomplete="on" class="form-horizontal" role="form" id="perfil">
              				<input type="hidden" value="<?php echo $idViajero; ?>" name="usr" id="usr">

			                  <label for="username" class="" > Nombre de Usuario: </label>
			                  <input type="text" class="form-control" name="usuario" id="idusuarios" required><br>
			                                
			                  <label for="username" class="uname" > Nombre Personal: </label>
			                  <input type="text" class="form-control" placeholder="Nombre Personal" name="nombre" id="nombre" required><br>
			                                
			                  <label for="password" class="youpasswd" > Contraseña: </label>
			                  <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass" required><br> 
			               

			                  <label for="username" class="uname"> Teléfono Personal: </label>
			                  <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" id="telefono" required maxlength="10"><br>
			                                
			                  <label for="username" class="uname" > Correo Electrónico: </label>
			                  <input type="email" class="form-control" placeholder="Email" name="correo" id="correo" required>
			                  <br><br>
								
							<div class="modal-footer">
			        			<button type="button" class="btn btn-default" data-dismiss="modal">Regresar</button>
			        			<button type="button" class="btn btn-success" id="commit">Modificar</button>
			      			</div>
                                  
              			</form>
			      </div>
		      
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

	
	
</section>



<script src="../../js/jquery-2.0.2.min.js"></script>
<script src="../../js/jquery-ui-1.10.4.js"></script>
<script src="../../bootstrap311/js/bootstrap.min.js"></script>
<script src="../../js/kendo.web.min.js"></script>
<script src="../../jquery-ui-1.10.4.custom/development-bundle/ui/i18n/jquery.ui.datepicker-es.js"></script>
<script src="../../js/appViajero.js"></script>
<script src="../../js/appPrecio.js"></script>
<script src="../../js/modernizr.js"></script>
<script src="../../js/jquery.confirm.min.js"></script>
 <script src="../../js/perfilV.js"></script>


</body>
</html>
<?php 
}else{
	echo '<script language="javascript">alert("No se ha iniciado ninguna sesion");
		window.location.href="../../index.html";
		</script>'; 	
}
 ?>
<?php 
session_start();
require_once 'Conexion.php';
require_once 'Biblioteca.php';
$conexion = conectarse();
$IdUsuario =$_SESSION["id"];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
	<!-- <link rel="stylesheet" href="../css/busqueda.css"> -->
	<link rel="stylesheet" href="../jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css">

	<script type="text/javascript">
	$(function (){

		$('#cliente').autocomplete({
			source : 'ajx.php',
			select : function(event, ui){
				$('#resultados').html(
					
					'<h2>Verificar Datos</h2>' +
					'<strong>Nombre: </strong>' + ui.item.value + '<br />' +
					'<strong>Telefono: </strong>' + ui.item.telefono + '<br />'	+
					'<strong>Email: </strong>' + ui.item.email + '<br />' 
					
				)
				 $("#id").val(ui.item.idViajero);
			}
			});

	});
	</script>
</head>
<body>
		
				
				<form action="" method="post"> 

		<label for="numeroFolio">Numero de Folio </label><input type="text" name="numeroFolio">
		<label for="nombrePax">Nombre del Titular de la Venta </label> <input type="text" name="cliente" id="cliente"><br>
		idViajero<input type="text" id="id" name="id"> <br>
		<input type="text" id="correo" name="correo"> <br>
		<input type="text" id="telefono" name="telefono"> <br>
		
		<input type="submit" value="buscar">
		<a href="../usuarios/Gerente/Gerente.php">regresar al menu</a>s

		</form>

		<div id="resultados" align="center">

		<?php 
		if($_SESSION['logged'] == 'yes')
{
	
		if(isset($_POST["cliente"]))
		{
			$numeroFolio = $_POST["numeroFolio"];
			$cliente =$_POST["cliente"];
			$idViajero =$_POST["id"];
			
		   $sql = "SELECT * FROM `venta` WHERE idViajero = '$idViajero' or FolioVta = '$numeroFolio'";
			$resultado= @mysql_query($sql) or die(mysql_error());

			?>
			 <table>
			 <tr>Cliente: <?php echo $cliente;?> </tr>
			 <tr>
		    <td>Cliente</td><td>Cantidad</td><td>Estatus</td><td>Fecha de Compra</td><td>Abonar</td>
		  </tr>
			<?php 

				while ($datos = @mysql_fetch_assoc($resultado) ){
		  //ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo


							  $FolioVta = $datos["FolioVta"];
							  $idcli = $datos['idViajero'];
							  $cantidadt = $datos['CantidadTotal'];
							  $saldo = $datos['Saldo'];
							  $fecha = $datos["FechaCompra"];
							  $estatus= $datos["Estatus"];
							  

							   ?>

							  
		  <tr>
		    <td><?php echo $idcli ?></td><td><?php echo $cantidadt ?></td><td><?php echo $estatus ?></td><td><?php echo $fecha ?></td><td><?php echo "<a href=\"EnviarAbono.php?folio=".$FolioVta."\">Abonar </a>"; ?></td>
		  </tr>
		 
		


							   <?php

				  
				  }
}

		 ?>


		  	</table>
		

		<table></table>


</body>
</html>
<?php 

cerrar($conexion);


 
	}else{
		echo '<script language="javascript">alert("No se ha iniciado ninguna sesión");
			window.location.href="../../Html/index.html";
			</script>'; 	
}
?>

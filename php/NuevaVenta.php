<?php 
session_start();
if($_SESSION['logged'] == 'yes')
{
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
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
	<form action="AccionVenta.php" method = "post" >		
				
				<label for="">Pagado por (cliente):</label><input type= "text" name = "cliente" id="cliente" required  /><br />	
				<!-- Nombre de Usuario<input type="text" name="IDViajero"id="IDViajero"> -->
				id Viajero<input type="text" id= "id" name="idViajero" readonly>
				<label for="">Total de la Venta:</label><input type= "text" name = "total"required  id="total"/><br />				
				<label for="">Importe (letras)</label><input type= "text" name = "importe"required  /><br />			    
			    <label for="">Descripcion</label><textarea name="descripcion" id="texto" cols="30" rows="10"></textarea><br />
			    Fecha de viaje: <input type="date" name="fechaViaje">
			    

	<input type= "submit" value="Aceptar"/>		

	<div id="resultados" align="center">	
</form>
</body>
</html>
<?php 
	}else{
		echo '<script language="javascript">alert("No se ha iniciado ninguna sesión");
			window.location.href="../";
			</script>'; 	
}
 ?>
<!-- Codigo Html -->


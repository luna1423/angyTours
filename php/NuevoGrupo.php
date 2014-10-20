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
	<!-- <link rel="stylesheet" href="../css/busqueda.css"> -->
	<link rel="stylesheet" href="../jquery-ui-1.10.4.custom/css/smoothness/jquery-ui-1.10.4.custom.css">

	<script type="text/javascript">
	$(function (){


		$('#opm').autocomplete({
			source: ['Ruta Maya Travel','Record Operadora','Forever Travel','Paraiso Maya','Maketch']
			});

		$('#cliente').autocomplete({
			source : 'ajx.php',
			select : function(event, ui){
				$('#resultados').html(
					
					'<h2>Verificar Datos</h2>' +
					'<strong>Nombre: </strong>' + ui.item.value + '<br />' +
					'<strong>Telefono: </strong>' + ui.item.telefono + '<br />'	+
					'<strong>Email: </strong>' + ui.item.email + '<br />'+
					'<strong>Id Viajero: </strong>' + ui.item.idViajero + '<br />' 
					
				)
				 $("#id").val(ui.item.idViajero);
			}
			});

	});
	
	</script>

</head>
<body>
	<form action="AccionGrupo.php" method = "post" align="center" >		
				
				<label for="">Nombre del titutar de Grupo:</label><input type= "text" name = "cliente" id="cliente" required  /><br />	
				<label for="">Nombre del grupo:</label><input type= "text" name = "NombreGrupo" id="NombreGrupo" required  /><br />	
				<!-- Nombre de Usuario<input type="text" name="IDViajero"id="IDViajero"> -->
				id Viajero<input type="text" id= "id" name="idViajero">
				<label for="">Total de la Venta:</label><input type= "text" name = "total"required  id="total"/><br />				
				<label for="">Importe (letras)</label><input type= "text" name = "importe"required  /><br />
				<div id="desc">
			    <label for="" id="textito">Descripcion</label><textarea name="descripcion" id="texto" cols="30" rows="10"></textarea><br />
			    </div>
			    Hotel: <input type="text" name="idHotel">			    
			    Fecha Entrada: <input type="date" name="FechaInn"><br>
			    Fecha Salida: <input type="date" name="FechaOut"><br>
			    Operadora Mayorista: <input type="text" name="opm" id="opm"><br>
			    

	<input type= "submit" value="Aceptar"/>		

	<a href="../Usuarios/Gerente/Gerente.php"> Regresar</a>

	<div id="resultados" align="center"></div>	
</form>
</body>
</html>
<?php 
	}else{
		echo '<script language="javascript">alert("No se ha iniciado ninguna sesión");
			window.location.href="../../Html/index.html";
			</script>'; 	
}
 ?>
 <style>
#desc #textito,#desc #texto
{
	/*border: 2px red solid;*/
	vertical-align: text-top;
	/*text-align: middle;*/
}


 </style>
<!-- Codigo Html -->


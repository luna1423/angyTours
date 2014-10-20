<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="" method="post">
	Estado <input type="text" name="estado">
	<input type="submit" value="Enviar">
	</form>
</body>
</html>

<?php  
require_once 'Conexion.php';
$conexion = conectarse();

if (isset($_POST["estado"])) {


$estado = $_POST["estado"];

$sql = "INSERT INTO hotelestado(estado) VALUES ('$estado') ";
$resultado= mysql_query($sql) or die(mysql_error());
	# code...
} else {

	echo mysql_error();
	# code...
}




?>
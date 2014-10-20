<?php
session_start();
require_once '../php/Conexion.php';
require_once '../php/Biblioteca.php';

$conexion = conectarse();

$sql = "SELECT * FROM `promociones`";

$resultado= @mysql_query($sql) or die(mysql_error());

while ($datos = @mysql_fetch_assoc($resultado) )
{
	$folio = $datos['foliopromo'];
	$folio2 = $datos['foliopromo'];
	$folio3 = $datos['foliopromo'];
	$nombre = $datos['nombre'];

  	echo "<a href=\"catalogoP.php?folio=".$folio."\">$nombre</a>";
  	echo "<a href=\"actualizarP.php?folio2=".$folio2."\">Actualizar</a> <br><br>";
  	echo "<a href=\"borrarP.php?folio3=".$folio3."\">Borrar</a> <br><br>";

}
cerrar($conexion);
?>


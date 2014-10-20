<?php
session_start();
require_once 'Conexion.php';
require_once 'Biblioteca.php';

$conexion = conectarse();

$sql = "SELECT * FROM `catalogo1`";

$resultado = @mysql_query($sql) or die(mysql_error());

while ($datos = @mysql_fetch_assoc($resultado) )
{
	$folio = $datos['foliocatalogo'];
	$folio2= $datos['foliocatalogo'];
	$folio3= $datos['foliocatalogo'];
	$nombre = $datos['nombrehotel'];

  	echo "<a href=\"catalogo.php?folio=".$folio."\"> $nombre</a> <br><br>";	
  	echo "<a href=\"actualizar.php?folio2=".$folio2."\">actualizar</a> <br><br>";
  	echo "<a href=\"borrar.php?folio3=".$folio3."\"> Borrar</a> <br><br>";		
}
cerrar($conexion);
?>

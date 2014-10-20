<?php  
require_once 'Conexion.php';
require_once 'Biblioteca.php';
$conexion = conectarse();

$nombret = $_POST["NombreT"];
$nombrea = $_POST["NombreA"];

$menor1 = $_POST["Menor1"];
$menor2 = $_POST["Menor2"];
$TipoHab = $_POST["TipoHab"];
$obs = $_POST["Obs"];
$numeroH=$_POST["numeroH"];
$FolioGrupo=$_POST["FolioGrupo"];

$nombre = $menor1." / ".$menor2;



$sql = "INSERT INTO `ava`.`cuponesgrupo` (`FolioCupon`, `FolioGrupo`, `NumeroHab`, `NombreTitular`, `NombreA`, `Menores`, `Observaciones`, `TipoHab`) 
VALUES (NULL,'$FolioGrupo','$numeroH','$nombret','$nombrea','$nombre','$obs','$TipoHab')";
$resultado = mysql_query($sql) or die(mysql_error());



cerrar($conexion);
 ?>
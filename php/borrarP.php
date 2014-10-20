<?php 
require_once '../php/Conexion.php';
require_once '../php/Biblioteca.php';
$conexion = conectarse();

@$folio = $_GET['folio3'];

$sql = "DELETE FROM `promociones` WHERE `promociones`.`foliopromo` = $folio;";

if (consultaSQL($sql,$conexion))
				{								
					echo utf8_decode('<script language="javascript">alert("Se ha eliminado la promocion");
					window.location.href="javascript:history.back(1)";
					</script>'); 
				}
				else 
				{
					echo mysql_error();	
				}
?>
<?php 
require_once '../php/Conexion.php';
require_once '../php/Biblioteca.php';
$conexion = conectarse();

@$folio = $_GET['folio3'];

$sql1 = "DELETE FROM `catalogo1` WHERE `catalogo1`.`foliocatalogo` = $folio;";
$sql2 = "DELETE FROM `catalogo2` WHERE `catalogo2`.`foliocatalogo` = $folio;";
$sql3 = "DELETE FROM `catalogo3` WHERE `catalogo3`.`foliocatalogo` = $folio;";
$sql4 = "DELETE FROM `catalogo4` WHERE `catalogo4`.`foliocatalogo` = $folio;";



if (consultaSQL($sql1,$conexion))
	{								
		echo '<script language="javascript">alert("El hotel fue borrado correctamente.");
		window.location.href="javascript:history.back(1)";
		</script>'; 
	}
	else 
	{
		echo mysql_error();	
	}
if (consultaSQL($sql2,$conexion))
   {								
	   echo '<script language="javascript">alert("El hotel fue borrado correctamente.");
	   window.location.href="javascript:history.back(1)";
	   </script>'; 
   }
   else 
   {
	echo mysql_error();	
   }
if (consultaSQL($sql3,$conexion))
   {								
	   echo '<script language="javascript">alert("El hotel fue borrado correctamente.");
	   window.location.href="javascript:history.back(1)";
	   </script>'; 
   }
   else 
   {
	   echo mysql_error();	
   }
if (consultaSQL($sql4,$conexion))
   {								
	   echo '<script language="javascript">alert("El hotel fue borrado correctamente.");
	   window.location.href="javascript:history.back(1)";
	   </script>'; 
   }
   else 
   {
	   echo mysql_error();	
   }
?>
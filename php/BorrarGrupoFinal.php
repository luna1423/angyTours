<?php 
session_start();
require_once 'Conexion.php';
require_once 'Biblioteca.php';
$conexion = conectarse();
// $FolioGrupo = $_SESSION["auxFolioGrupo"];
$cobrador = $_SESSION['id'];
if($_SESSION['logged'] == 'yes')
{

	$FolioGrupo = $_GET["folio"];
	$tipo = "Grupo";



	$sql = "DELETE FROM `ventagrupo` WHERE FolioGrupo = '$FolioGrupo'";

	if (consultaSQL($sql,$conexion)) {

		$sql = "DELETE FROM `abonargrupo` WHERE FolioGrupo = '$FolioGrupo'";

		if (consultaSQL($sql,$conexion)) {

		$sql = "DELETE FROM `pagov` WHERE ((FolioVenta = '$FolioGrupo') and (Tipo = '$tipo'))";

		$result = mysql_query($sql) or die (mysql_error($sql));

					echo '<script language="javascript">alert("El Grupo se ha Eliminado");
							window.history.go(-2);
							</script>'; 	
		
		# code...
					} else {
						echo mysql_error();


						# code...
					}

		
		
		# code...
	} else {
		echo mysql_error();


		# code...
	}
	



	cerrar($conexion);
 
 
 }else{
	
	echo '<script language="javascript">alert("No se ha iniciado ninguna sesion");
		window.location.href="../index.html";
		</script>'; 
}
 ?>
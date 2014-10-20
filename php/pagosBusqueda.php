<?php 
require_once 'Conexion.php';

$conexion=conectarse();


switch ($_SERVER['REQUEST_METHOD']) {
	
	case 'GET':

	if (isset($_GET["Pendiente"])) {

		$sql = "SELECT * FROM Venta WHERE EstatusP = 'Pendiente'";

		# code...
	} 
	if (isset($_GET["Cerrado"])) {

		$sql = "SELECT * FROM Venta WHERE EstatusP = 'Cerrado'";

		# code...
	} 
	if (isset($_GET["Ingreso"])) {

		$sql = "SELECT * FROM Venta,ventagrupo";

		# code...
	} 
	if (isset($_GET["Egreso"])) {

		$sql = "SELECT * FROM pagov";

		# code...
	} 	

				$result=mysql_query($sql);

				while ($row=mysql_fetch_assoc($result)) {

					$data[]=$row;
					
				}
				echo json_encode($data);

				
					
		break;
	
	default:
		# code...
		break;
}
cerrar($conexion);
 ?>
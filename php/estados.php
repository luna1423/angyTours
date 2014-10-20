<?php 
require_once 'Conexion.php';

$conexion=conectarse();

sleep(3);

switch ($_SERVER['REQUEST_METHOD']) {
	
	case 'GET':

			if (isset($_GET["foliocatalogo"])) {
				$sql="SELECT * FROM catalogo1 WHERE idEstado=".$_GET["foliocatalogo"]."";
				# code...
			} else {
				$sql="SELECT * FROM hotelestado ORDER BY estado ASC";
				# code...
			}
				

				$result=mysql_query($sql);
				while ($row=mysql_fetch_assoc($result)) {

					$data[]=$row;
					# code...
				}
				echo json_encode($data);
					# code...
		break;
	
	default:
		# code...
		break;
}
cerrar($conexion);
 ?>
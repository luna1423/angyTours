<?php 
require_once 'Conexion.php';

$conexion=conectarse();

	



switch ($_SERVER['REQUEST_METHOD']) {
	
	case 'GET':

			if (isset($_GET["Cupon"])) {

				$sql = "SELECT 
				folioVtacup as Folio,
				Plancup as Plan,
				FechaEmicup as Fecha,
				CalveConcup as Clave,
				`catalogo1`.`nombrehotel` as Hotel

				FROM cuponcompleto
				LEFT JOIN catalogo1 ON (`cuponcompleto`.`FolioHotel` = `catalogo1`.`foliocatalogo`) 
				WHERE idViajero = '".$_GET["Cupon"]."'

				ORDER BY FechaEmicup DESC LIMIT 0, 30";
			}
					# code...
					
				$result=mysql_query($sql,$conexion);
				$validar=mysql_num_rows($result);

				if ($validar != 0) {

					while ($row=mysql_fetch_assoc($result)) {
					$data[]=$row;
						}
					echo json_encode($data);
					// echo $data;

					# code...
				} else {

					$data[] = array("Folio"=>"",'Plan'=>"",'Fecha'=>"",'Clave'=>"",'Hotel'=>"No hay cupones diponibles",'Accion'=>"");


					// $data["Plan"] = "0";
					// $data["Fecha"] = "0";
					// $data["Clave"] = "0";
					// $data["Hotel"] = "0";
					echo json_encode($data);
					// echo $data;
					# code...
				}
		break;

		
	
	default:
		# code...
		break;
}
cerrar($conexion);
 ?>
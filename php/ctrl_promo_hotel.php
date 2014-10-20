<?php 
require_once 'Conexion.php';

$conexion=conectarse();


switch ($_SERVER['REQUEST_METHOD']) {
	
	case 'GET':

	
  if (isset($_GET["promo"])) {
  	# code...
 
  
                
                $sql = "SELECT foliopromo as Folio, nombre as Nombre, fechainiciop as FechaI, fechafinalp as FechaF, precio as Precio  FROM promociones";

                
                  }
                  if (isset($_GET["hotel"])) {
  	# code...
 
  
                $sql = "SELECT  foliocatalogo as Folio,nombrehotel as Nombre, `hotelestado`.`estado` as Estado FROM `catalogo1` LEFT JOIN hotelestado ON `catalogo1`.`idEstado` = `hotelestado`.`FolioEstado`";
                // $sql = "SELECT foliopromo as Folio, nombre as Nombre, fechainiciop as FechaI, fechafinalp as FechaF, precio as Precio  FROM promociones";

                
                  }
                             
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

					$data[] = array("Folio"=>"",'Nombre'=>"No hay datos registrados",'Accion'=>"");


					// $data["Plan"] = "0";
					// $data["Fecha"] = "0";
					// $data["Clave"] = "0";
					// $data["Hotel"] = "0";
					echo json_encode($data);
					// echo $data;
					# code...
				}

				// $result=mysql_query($sql);

				

				// 	while ($row=mysql_fetch_assoc($result)) {

				// 			$data[]=$row;
							
				// 		}

				// 		echo json_encode($data);



				
					
		break;
	
	default:
		# code...
		break;
}
cerrar($conexion);
 ?>

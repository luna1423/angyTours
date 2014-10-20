<?php 
require_once 'Conexion.php';
$conexion=conectarse();

$sql = "SELECT `idViajero` as id, `Nombre` as label,  `Nombre` as value, `Correo` as correo, `Telefono` as telefono FROM `cliente`
where `Nombre` LIKE '%".$_GET["term"]."%' OR `Telefono` LIKE '%".$_GET["term"]."%';";
		

				$result=mysql_query($sql);

				while ($row=mysql_fetch_assoc($result)) {

					$data[]=$row;
					
				}
				echo json_encode($data);

cerrar($conexion);
 ?>
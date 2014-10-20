<?php
require_once 'Conexion.php';

$conexion = conectarse();

switch ($_SERVER['REQUEST_METHOD'])
{
	case 'GET':

	$sql = "SELECT folioVoucher as Folio, concepto as Concepto, fechaSalida as FechaSalida, fechaRetorno as FechaRetorno,
	total as Monto, descripcion as Descripcion, imagen as Imagen  FROM `voucher`";


				$result=mysql_query($sql,$conexion);
				$validar=mysql_num_rows($result);

				if ($validar != 0) {

					while ($row=mysql_fetch_assoc($result)) {
					$data[]=$row;
						}
					echo json_encode($data);
				
				} else {

					$data[] = array("Folio"=>"",'Importe'=>"",'Fecha'=>"",'Estatus'=>"",'Descripcion'=>"No existen Vouchers",'Accion'=>"");


					
					echo json_encode($data);
					
				}	

		break;
}
/*$resultado= @mysql_query($sql) or die(mysql_error());

while ($datos = @mysql_fetch_assoc($resultado) )
{
	$folio = $datos['folioVoucher'];
	$nombre = $datos['nombre'];

  	echo "<a href=\"vouchers.php?folio=".$folio."\">$nombre</a><br>";

}
*/
cerrar($conexion);
?>
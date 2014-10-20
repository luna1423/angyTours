<?php 
require_once '../php/Conexion.php';
$conexion=conectarse();

$sql = "SELECT `catalogo1`.`foliocatalogo` as id, `catalogo1`.`nombrehotel`as label, `catalogo1`.`nombrehotel` as value , `catalogo2`.`direccion` as direccion , `catalogo3`.`telefono` as telefono FROM catalogo1 LEFT JOIN catalogo2 ON `catalogo1`.`foliocatalogo`=`catalogo2`.foliocatalogo
LEFT JOIN catalogo3 ON `catalogo3`.`foliocatalogo`=`catalogo2`.`foliocatalogo`
where `catalogo1`.`nombrehotel` LIKE '%".$_GET["term"]."%';";
		

				$result=mysql_query($sql);

				while ($row=mysql_fetch_assoc($result)) {

					$data[]=$row;
					
				}
				echo json_encode($data);

cerrar($conexion);
 ?>
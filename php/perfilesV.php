<?php 
require_once 'Conexion.php';

$conexion=conectarse();


switch ($_SERVER['REQUEST_METHOD']) {
	
	case 'GET':

	if (isset($_GET["id"])) {

		$sql= "SELECT * FROM cliente WHERE `IdViajero` = ".$_GET["id"]."";		
		# code...
	}



				$result=mysql_query($sql) or die(mysql_error());
				
					while ($row=mysql_fetch_assoc($result)) {
					$data[]=$row;
						}
					echo json_encode($data);	
				
				
				
					
		break;
	case 'POST':

	if (isset($_POST["usuario"])) {

		$sql = "UPDATE `cliente` SET 
		
		`NombreIDViajero`='".$_POST["usuario"]."',
		`Correo`='".$_POST["correo"]."',
		`Nombre`='".$_POST["nombre"]."',
		`Contrasena`='".$_POST["pass"]."',
		`Telefono`='".$_POST["telefono"]."' WHERE IdViajero = '".$_POST["usr"]."'";
		# code...
	}

	// $result = mysql_query($sql) or die(mysql_error());

	if (mysql_query($sql)) {

		echo "Datos agregados correctamente";
		# code...
	}else 
	{
		mysql_error();
		// echo "Ocurrio un error, vuelve a intentar mas tarde";
	}


	break;
	default:
		# code...
		break;
}
cerrar($conexion);
 ?>
<?php 
require_once 'Conexion.php';
require_once 'Biblioteca.php';

$conexion = conectarse();
//Insertar

if(isset($_POST["usuario"]))
{
	$usuario =$_POST["usuario"];
	$nombre =$_POST["nombre"];
	$pass=$_POST["pass"];
	$telefono1=$_POST["telefono"];
	$correo=$_POST["correo"];
	$direccion=$_POST["direccion"];


	$caracteres = Array("(",")","-"); 
	$telefono = str_replace($caracteres,"",$telefono1); 

	$qValidar = mysql_query("SELECT * FROM Cliente WHERE NombreIDViajero = '$usuario' or Correo = '$correo'" ,$conexion);

	$resultado = mysql_num_rows($qValidar);

	
	if ($resultado!=0)
	{

		echo '<script language="javascript">alert("El usuario, Telefono o correo electronico ya se encuentra registrado");
		window.window.history.go(-1);
		</script>'; 
		
	} else {

				$sql = "INSERT INTO `cliente`(`idViajero`, `Direccion`, `NombreIDViajero`, `Correo`, `Contrasena`, `Telefono`, `Nombre`, `FechaA`) VALUES (NULL, '$direccion', '$usuario','$correo','$pass','$telefono','$nombre',NOW())";
	
							
				if (consultaSQL($sql,$conexion))
				{
					
					echo '<script language="javascript">alert("El usuario se ha registrado correctamente");
					window.window.history.go(-1);
					</script>'; 
				}
				else 
				{
					header("AgregarAgente.php");		
				}
			}
}	

cerrar($conexion);

?>
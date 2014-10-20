<?php
session_start();
require_once 'Conexion.php';
require_once 'Biblioteca.php';
$conexion = conectarse();
$id = $_POST["id"];
$pass = $_POST["pass"];

$sql="SELECT * FROM cliente WHERE  NombreIDViajero ='$id' AND contrasena='$pass'" ; 

$query = mysql_query($sql);

$aux = "SELECT * FROM cliente WHERE NombreIDViajero = '$id'";


$tabla=consultaArray($aux, $conexion);

// echo $sql;
foreach($tabla as $renglon)
{	
	$nombre=$renglon["Nombre"];
	@$tipo=$renglon["Tipo"];
	$usuario = $renglon["NombreIDViajero"];
	@$idUsuario = $renglon["idUsuario"];
	$idViajero = $renglon["idViajero"];
}


	if ($existe=@mysql_fetch_object($query)) {
	$_SESSION['logged'] = 'yes';
	$_SESSION['user'] = $nombre;
	$_SESSION['tipo'] = $tipo;
	$_SESSION['usuario']=$usuario;
	$_SESSION['id']=$idViajero;
	// echo '<script language="javascript">alert("Logueado como Viajero");
	// 						window.location.href="../index.html";
	// 						</script>'; 
	echo '<script>window.location="../Usuarios/Viajero/TViajero.php"</script>';
	// 
	} 
	 else {
					$sql="SELECT * FROM usuarios WHERE  NombreIdUsuario ='$id' AND contrasena='$pass'" ; 

					$query = mysql_query($sql);

					$aux = "SELECT * FROM usuarios WHERE NombreIdUsuario = '$id'";


					$tabla=consultaArray($aux, $conexion);

					// echo $sql;

					foreach($tabla as $renglon)
					{	
						$idUsuario = $renglon["IdUsuario"];
						$usuario = $renglon["NombreIdUsuario"];
						$nombre=$renglon["Nombre"];
						$tipo=$renglon["Tipo"];
						
						
					}


						if ($existe=@mysql_fetch_object($query)) {
						$_SESSION['logged'] = 'yes';
						$_SESSION['user'] = $nombre;
						$_SESSION['tipo'] = $tipo;
						$_SESSION['usuario']=$usuario;
						$_SESSION['id']=$idUsuario;

						if ($tipo == "Agente") {
							# code...
							echo '<script>window.location="../Usuarios/Agente/DashBoard/DVentas.php"</script>';
						} else {
							# code...
							echo '<script>window.location="../Usuarios/Gerente/DashBoard/DVentas.php"</script>';
						}
						

						echo '<script language="javascript">alert("Logueado como Gerente o Aventas");
							window.location.href="../index.html";
							</script>'; 
						// echo '<script>window.location="../PHP/ViajeroPHP/IViajero.php"</script>';
						// // 
						} 
						else {
						
						
					}
	
	echo '<script language="javascript">alert("Usario o Password Incorrecto");
		window.location.href="../";
		</script>'; 
 }?>
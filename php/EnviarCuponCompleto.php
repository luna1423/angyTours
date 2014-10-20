<?php 
session_start();
require_once 'Conexion.php';
require_once 'Biblioteca.php';
$foliovta=$_SESSION["auxFolioVta"];
$idViajero=$_SESSION["auxIdViajero"];
$conexion = conectarse();
if(isset($_POST["idhotel"]))
{
	$folioHotel = $_POST["idhotel"];
	$titular = $_POST["titular"];
	$acompanante = $_POST["acompanante"];
	$adultos = $_POST["adultos"];
	$menores = $_POST["menores"];
	$fechaLLegada = $_POST["fechaLLegada"];	
	$fechaSalida = $_POST["fechaSalida"];	
	$Plan = $_POST["Plan"];
	$opm = $_POST["opm"];
	$ResConP = $_POST["ResConP"];
	$atencion = $_POST["atencion"];
	$FdeE = $_POST["FdeE"];
	$clave = $_POST["clave"];
	$otras = $_POST["otras"];

	$_SESSION["auxFolioHotel"]=$folioHotel;	


				$sql = "INSERT INTO `cuponcompleto` (`folioVtacup`, `folioVenta`, `folioHotel`, `IdViajero`, `Acompanantecup`, `Adultoscup`, `Menorescup`, `Llegadacup`, `Salidacup`, `Plancup`, `OPMcup`, `Reservacup`, `Atencion`, `FechaEmicup`, `CalveConcup`, `Observacionescup`) 
				VALUES (NULL, '$foliovta', '$folioHotel', '$idViajero', '$acompanante', '$adultos', '$menores', '$fechaLLegada', '$fechaSalida', '$Plan', '$opm', '$ResConP', '$atencion', '$FdeE', '$clave', '$otras');";

				if (consultaSQL($sql,$conexion))
				{								
					echo '<script language="javascript">alert("Cupón Generado Satisfactoriamente");
					window.location.href="ImprimirCV.php";
					</script>'; 
				}
				else 
				{
					echo mysql_error();	
				}
}	
cerrar($conexion);
?>
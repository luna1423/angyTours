<?php 
// probar biblioteca
require_once 'baseConexion.php';
require_once 'boblio.php';
require('fpdf.php');
class PDF extends FPDF
{
function Header()
{}
function Footer()
{}

}

$conexion = conectarse();
//Insertar

if(isset($_POST["Titular"]))
{
	// $Titular =$_POST["Titular"];
	// $matricula =$_POST["matricula"];
	$matricula = $_POST["matricula"];
	$nombre = $_POST["nombre"];
	$paterno = $_POST["paterno"];
	$Titular = $_POST["Titular"];
	$acompanante = $_POST["acompanante"];
	$adultos = $_POST["adultos"];
	$menores = $_POST["menores"];
	$fechaLLegada = $_POST["fechaLLegada"];
	$tiempoINN = $_POST["tiempoINN"];
	$fechaSalida = $_POST["fechaSalida"];
	$tiempoOUT = $_POST["tiempoOUT"];
	$plan = $_POST["Plan"];

	$opm = $_POST["opm"];
	$ResConP = $_POST["ResConP"];
	$atencion = $_POST["atencion"];
	$opm = $_POST["opm"];
	// $FdeE = $_POST["FdeE"];
	$clave = $_POST["clave"];
	$otras = $_POST["otras"];

	// $validar = "SELECT * FROM usuario WHERE usuario = '$usuario'";
	// $qValidar = mysql_query("SELECT * FROM usuario WHERE usuario = '$usuario'",$conexion);

	// $resultado = mysql_num_rows($qValidar);

	
	// if ($resultado!=0)
	// {

	// 	echo '<script language="javascript">alert("El usuario ya se encuentra registrado");
	// 	window.location.href="../Html/Tinicio.html";
	// 	</script>'; 
		
	// } else {
	
				$sql = "INSERT INTO `a1775510_Agencia`.`cupon` (`folio`, `nombreV`, `nombreH`, `fecha`) 
				VALUES (NULL, '$Titular', '$matricula',now())";
			
				if (consultaSQL($sql,$conexion))
				{
					

					$rs = mysql_query("SELECT @@identity AS id");
					if ($row = mysql_fetch_row($rs)) {
					$id = trim($row[0]);
					}

					$fechita = mysql_query("SELECT `fecha` FROM `cupon` WHERE folio = $id");
					if($fech = mysql_fetch_row($fechita))
					{
					$FdeE = $fech[0];
					}
					// echo $id;
					$pdf=new FPDF();
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',12);
					$pdf->SetFillColor(152,253,147);
					$pdf->setY(50);
					$pdf->setY(60);
					$pdf->Cell(180,10,"Folio de Venta ".$id,2,1,'R');

					// Parte de arriba fehca de emision y clave de confirmacion
					$pdf->Cell(110,10,utf8_decode("Fecha de Emisión: ").$FdeE,2,0,'L',true);
					$pdf->Cell(80,10,utf8_decode("Clave de Confirmación : ").$clave,2,1,'L',true);
					$pdf->setY(80);

					$pdf->Cell(150,10,"Hotel :".$matricula.utf8_decode("                                     Dirección : ").$nombre,2,2,'L');
					$pdf->Cell(80,10,utf8_decode("Dirección : ").$nombre.utf8_decode("                 Teléfono:").$paterno,2,2,'L');
					// $pdf->Cell(80,10,"Telefono: ".$paterno,1,1,'L');

					$pdf->Cell(80,10,"Titular :".$Titular."                                                            2do Pasajero :".$acompanante,2,1,'L');
					// $pdf->Cell(80,10,"2do Pasajero :".$acompanante,2,1,'L');
					$pdf->Cell(80,10,"Adultos :".$adultos."      Menores :".$menores,2,1,'L');
					// $pdf->Cell(80,10,"Menores :".$menores,2,1,'L');
					$pdf->Cell(180,10,"Fecha de Llegada : ".$fechaLLegada."                                        Check Inn: ".$tiempoINN,2,1,'L',true);
					// $pdf->Cell(80,10,"Check Inn: ".$tiempoINN,2,1,'L');
					$pdf->Cell(180,10,"Fecha de Salida : ".$fechaSalida."                                          Check Out :".$tiempoOUT,2,1,'L',true);
					// $pdf->Cell(80,10,"Check Out :".$tiempoOUT,2,1,'L');


					$pdf->Cell(80,10,"Plan : ".$plan,2,1,'L');

					// Datos de la operadora y observaciones
					$pdf->Cell(80,10,"Operadora Mayorista: ".$opm."                                     Reserva confirmada por: ".$ResConP,2,1,'L');
					// $pdf->Cell(80,10,"Reserva confirmada por: ".$ResConP,2,1,'L');
					// $pdf->Cell(80,10,"A la Atencion de : ".$atencion,2,1,'L');
					// $pdf->Cell(80,10,"Fecha de Emision: ".$FdeE,2,1,'L');
					// $pdf->Cell(80,10,"Clave de Confirmacion : ".$clave,2,1,'L');
					$pdf->Cell(80,10,"Observaciones: ".$otras,2,1,'L');

					$pdf->Output();

					
					// echo '<script language="javascript">alert("El usuario se ha registrado correctamente");
					// window.location.href="../Html/Tinicio.html";
					// </script>'; 
				}
				else 
				{
					header("AgregarAgente.php");		
				}
			}	

cerrar($conexion);

?>
<?php 
require('fpdf.php');
class PDF extends FPDF
{
function Header()
{
		$this->SetFont("Arial", "B", 15); //tipo de letra
    //titulo del encabezado
    $this->Cell(0,10,'GARABATOS LINUX - PDF CON ENCABEZADO Y PIE DE PAGINA',1,0,'C');
    $this->Ln(12); //salto de linea      	
}
function Footer()
{
	$this->SetY(-10);

	$this->SetFont('Arial','I',8);

	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}




					$pdf=new FPDF();
					$pdf->AliasNbPages();
					$pdf->AddPage();
					$pdf->SetFont('Arial','B',12);
					$pdf->SetFillColor(152,253,147);
					$pdf->setY(50);
					$pdf->setY(60);
					// $pdf->Cell(180,10,"Folio de Venta ".$FolioVta,2,1,'R');

					// Parte de arriba fehca de emision y clave de confirmacion
					// $pdf->Cell(110,10,utf8_decode("Fecha de Emisión: ").$FdeE,2,0,'L',true);
					// $pdf->Cell(80,10,utf8_decode("Clave de Confirmación : ").$clave,2,1,'L',true);
					// $pdf->setY(80);

					// $pdf->Cell(150,10,"Hotel :".$matricula.utf8_decode("                                     Dirección : ").$nombre,2,2,'L');
					// $pdf->Cell(80,10,utf8_decode("Dirección : ").$nombre.utf8_decode("                 Teléfono:").$paterno,2,2,'L');
					// // $pdf->Cell(80,10,"Telefono: ".$paterno,1,1,'L');

					// $pdf->Cell(80,10,"Titular :".$Titular."                                                            2do Pasajero :".$acompanante,2,1,'L');
					// // $pdf->Cell(80,10,"2do Pasajero :".$acompanante,2,1,'L');
					// $pdf->Cell(80,10,"Adultos :".$adultos."      Menores :".$menores,2,1,'L');
					// // $pdf->Cell(80,10,"Menores :".$menores,2,1,'L');
					// $pdf->Cell(180,10,"Fecha de Llegada : ".$fechaLLegada."                                        Check Inn: ".$tiempoINN,2,1,'L',true);
					// // $pdf->Cell(80,10,"Check Inn: ".$tiempoINN,2,1,'L');
					// $pdf->Cell(180,10,"Fecha de Salida : ".$fechaSalida."                                          Check Out :".$tiempoOUT,2,1,'L',true);
					// // $pdf->Cell(80,10,"Check Out :".$tiempoOUT,2,1,'L');


					// $pdf->Cell(80,10,"Plan : ".$plan,2,1,'L');

					// // Datos de la operadora y observaciones
					// $pdf->Cell(80,10,"Operadora Mayorista: ".$opm."                                     Reserva confirmada por: ".$ResConP,2,1,'L');
					// // $pdf->Cell(80,10,"Reserva confirmada por: ".$ResConP,2,1,'L');
					// // $pdf->Cell(80,10,"A la Atencion de : ".$atencion,2,1,'L');
					// // $pdf->Cell(80,10,"Fecha de Emision: ".$FdeE,2,1,'L');
					// // $pdf->Cell(80,10,"Clave de Confirmacion : ".$clave,2,1,'L');
					// $pdf->Cell(80,10,"Observaciones: ".$otras,2,1,'L');

					$pdf->Output();

					
					// echo '<script language="javascript">alert("El usuario se ha registrado correctamente");
					// window.location.href="../Html/Tinicio.html";
					// </script>'; 
				


 cerrar($conexion);
 ?>
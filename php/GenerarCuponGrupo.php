<?php
session_start(); 

$FolioGrupo = $_SESSION["FolioGrupo"];
require_once 'Conexion.php';
require_once 'Biblioteca.php';
require('../fpdf/fpdf.php');
$conexion = conectarse();

class PDF extends FPDF
{


// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
	function SetCol($col)
{
    // Establecer la posición de una columna dada
    $this->col = $col;
    $x = 10+$col*65;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}
function ChapterBody($file)
{
    // Abrir fichero de texto
    $txt = file_get_contents($file);
    // Fuente
    $this->SetFont('Times','',12);
    // Imprimir texto en una columna de 6 cm de ancho
    $this->MultiCell(60,5,$txt);
    $this->Ln();
    // Cita en itálica
    $this->SetFont('','I');
    $this->Cell(0,5,'(fin del extracto)');
    // Volver a la primera columna
    $this->SetCol(0);
}
}
$sql = "SELECT * FROM ventagrupo WHERE FolioGrupo = '$FolioGrupo'";

$resultado= @mysql_query($sql) or die(mysql_error());

						while ($datos = @mysql_fetch_assoc($resultado) ){

								$FolioGrupo = $datos['FolioGrupo'];
								$idViajero = $datos['idViajero'];
								$FechaIn = $datos['FechaIn'];
								$FechaOut = $datos['FechaOut'];
								$NombreGrupo = $datos['NombreGrupo'];
								$Descripcion = $datos['Descripcion'];
								$CostoTotal = $datos['CostoTotal'];
								// $CantidadVariable = $datos['CantidadVariable'];
								$CantLetras = $datos['CantLetras'];
								$Saldo = $datos['Saldo'];
								$FechaCompra = $datos['FechaCompra'];
								$IdUsuario = $datos['IdUsuario'];
								$OperadoraMay = $datos['OperadoraMay'];
								$estatus = $datos['Estatus'];
							}


							$sql = "SELECT * FROM cliente WHERE idViajero = '$idViajero'";

						$resultado= @mysql_query($sql) or die(mysql_error());

						while ($datos = @mysql_fetch_assoc($resultado) ){

								$nombre = $datos["Nombre"];
								
							}
							$sql = "SELECT * FROM usuarios WHERE IdUsuario = '$IdUsuario'";

						$resultado= @mysql_query($sql) or die(mysql_error());

						while ($datos = @mysql_fetch_assoc($resultado) ){

								$nombreU = $datos["Nombre"];
								
							}

$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

					$pdf = new PDF();
					// $pdf->AliasNbPages();
					$pdf->AddPage();
					$pdf->Image('../imagenes/logo.jpg',40,8,33);
					// Arial bold 15
					$pdf->SetFont('Arial','B',8);
					// Movernos a la derecha
					$pdf->SetY(4);
					$pdf->Cell(80);

					// Título
					$pdf->Cell(60,5,'Angytours',0,2,'C');
					$pdf->Cell(60,5,'Calle 59J # 565 X 110 y 112 Col Bojorquez',0,2,'C');
					$pdf->Cell(60,5,'Tel: (999)9-12-28-95 | Cel: (044)99-92-44-54-14',0,2,'C');
					$pdf->Cell(60,5,'Correo: angeviajes@hotmail.com',0,2,'C');
					$pdf->Cell(60,5,'RFC: PELA620129L36',0,2,'C');
					$pdf->SetFont('Arial','',10);
					$pdf->SetY(35);
					$pdf->SetX(140);
					$pdf->Cell(40,8,utf8_decode("Fecha: ").utf8_decode($dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ),0,1);
					$pdf->SetY(45);
					$pdf->SetX(20);					
					$pdf->Cell(130,8,utf8_decode("Cliente : ").utf8_decode($nombre),1,0);
					$pdf->Cell(30,8,utf8_decode("Folio : ").$FolioGrupo,1,1);
					$pdf->SetX(20);				
					$pdf->Cell(60,8,utf8_decode("Cantidad : ").$CostoTotal,1,0,'L');
					$pdf->MultiCell(100,8,utf8_decode("Importe Letras : ").$CantLetras,1,'L');					
					$pdf->SetX(20);
					$pdf->MultiCell(160,5,utf8_decode("Descripción : ").utf8_decode($Descripcion),1,'L');					
					$pdf->SetX(20);
					$pdf->Cell(100,14,utf8_decode("Le atendio : ").utf8_decode($nombreU),1,0);
					$pdf->Cell(60,14,utf8_decode("Firma : "),1,2);


					///Segundo Cupon
					// $pdf->SetY(50);

					// $pdf->AddPage();
					// $pdf->SetY(204);
					$pdf->Image('../imagenes/logo.jpg',40,140,32,24);
					// Arial bold 15
					$pdf->SetFont('Arial','B',8);
					// Movernos a la derecha
					 $pdf->SetY(140);
					 $pdf->Cell(80);

					// Título
					$pdf->Cell(60,5,'Angytours',0,2,'C');
					$pdf->Cell(60,5,'Calle 59J # 565 X 110 y 112 Col Bojorquez',0,2,'C');
					$pdf->Cell(60,5,'Tel: (999)9-12-28-95 | Cel: (044)99-92-44-54-14',0,2,'C');
					$pdf->Cell(60,5,'Correo: angeviajes@hotmail.com',0,2,'C');
					$pdf->Cell(60,5,'RFC: PELA620129L36',0,2,'C');
					$pdf->SetFont('Arial','',10);
					$pdf->SetY(165);
					$pdf->SetX(140);
					$pdf->Cell(40,8,utf8_decode("Fecha: ").utf8_decode($dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ),0,1);					

					$pdf->SetY(175);
					$pdf->SetX(20);
					$pdf->Cell(130,8,utf8_decode("Cliente : ").utf8_decode($nombre),1,0);
					$pdf->Cell(30,8,utf8_decode("Folio : ").$FolioGrupo,1,1);
					$pdf->SetX(20);
					$pdf->Cell(60,8,utf8_decode("Cantidad : ").$CostoTotal,1,0,'L');
					$pdf->MultiCell(100,8,utf8_decode("Importe Letras : ").$CantLetras,1,'L');	
					
					// $pdf->Cell(40,8,utf8_decode("Fecha : ").$FechaCompra,1,0);
					
					$pdf->SetX(20);
					$pdf->MultiCell(160,5,utf8_decode("Descripción : ").utf8_decode($Descripcion),1,'L');
   					 

					// $pdf->Cell(160,28,utf8_decode("Descripción : ").$Descripcion,1,1,'L');
					
					$pdf->SetX(20);
					$pdf->Cell(100,14,utf8_decode("Le atendio : ").utf8_decode($nombreU),1,0);
					$pdf->Cell(60,14,utf8_decode("Firma : "),1,1);
					// $pdf->Output();
					

					$pdf->Output('Recibo'.$nombre.'Folio'.$FolioGrupo.'.pdf','D');
					// echo "<a href="javascript:window.print()">Imprimir esta página</a> ";

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

					

					
					// echo '<script language="javascript">alert("El usuario se ha registrado correctamente");
					// window.location.href="../Html/Tinicio.html";
					// </script>'; 
				


 cerrar($conexion);
 ?>



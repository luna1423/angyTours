<?php 
session_start();
if($_SESSION['logged'] == 'yes')
{
?>
<?php 
require_once '../php/Conexion.php';
require_once '../php/Biblioteca.php';
$conexion = conectarse();
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<header>
	<h1>soy header</h1>
    </header>
	<section>
		<p><strong>Registro de Hoteles</strong></p>
		<div>
			<form action="enviarCatalogo.php " method = "post" enctype="multipart/form-data" >
				Nombre del Hotel: <input type= "text" name = "nombre" /><br /> 
				Direccion: <input type= "text" name = "direccion" /><br />
				Telefono: <input type= "text" name = "telefono" /><br />
				Descripccion: <input type= "text" name = "descripcion" /><br />
				Seleccione una imagen del hotel: <input type= "FILE" name = "imagen" /><br />
				<input type= "submit" value="Agregar"/>				
			</form>
			<center><a href="#">Regresar</a></center>
		</div>
	</section>	
	<footer>
		<h1>soy footer</h1>
		</footer>
</body>
</html>
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
		<p><strong>Registro de promociones</strong></p>
		<div>
			<form action="enviarPromocion.php " method = "post" enctype="multipart/form-data" >
				Nombre de la promoción: <input type= "text" name = "nombre" /><br /> 
				Fecha de inicio de la promoción: <input type= "DATE" name = "fechainiciop" /><br />
				Fecha de terminacion de la promocion: <input type= "DATE" name = "fechafinalp" /><br />
				Precio: <input type= "text" name = "precio" /><br />
				descripcion: <input type= "text" name = "descripcion" /><br />
				Subir imagen del hoel:<input type= "FILE" name = "imagen" /><br />
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

<?php

	//db.php Biblioteca para base de datos
	
	// 7 Pasos para hacer una consulta a MYSQL
	// Paso 1) Crear una conexión
	//		   Requerimientos - Un servidor MYSQL funcionando, - Un usuario válido
	
	




	// $servidor = "mysql7.000webhost.com";//Estos 3 datos, son dependientes de la base de datos
	// $usuario= "a1775510_Agencia";	// Usuario válido en mysql
	// $passwd = "luis1423";	// Contraseña
	// $db = "a1775510_Agencia";		// Base de Datos
	
	function conectarse()
	{
		$mysql_host = "localhost";
	    $mysql_database = "angy_ava";
	    $mysql_user = "Agencia";
	    $mysql_password = "angytours";



		@ $conexion = mysql_connect("localhost",$mysql_user,$mysql_password)
					or die(mysql_error()."Error. Usuario o Contraseña inválido");
					 
				
	
	//Paso 2) Seleccionar la base de datos
		@mysql_select_db($mysql_database, $conexion)
				or die("Error. No se puede seleccionar la base de datos");
				
		return $conexion;
	
	}			
	//echo "Paso 2) OK. Base de Datos seleccionada <br />";
	
	//Paso 3) Construir la cadena de consulta (Queda fuera de la biblioteca
	//		  (Nos podemos auxiliar de phpMyAdmin o cualquier herramienta parecida
	/*$sql= "SELECT * FROM alumno";
	echo "Paso 3) Cadena SQL lista: $sql <br />";*/
	
	//Paso 4) Realizar la consulta SQL
	//Caso 1) SELECT que devuelve cero, uno o muchos registros
	
	
	function consultaArray($sql,$conexion)
	{
		$tabla = array (); // arreglo vacio
		
		if ($consulta = mysql_query($sql, $conexion))
		{
			while($registro = mysql_fetch_array($consulta, MYSQL_ASSOC))
			{
				$tabla[] = $registro;
			}
		
		}
		else
		{
			echo " MySQL dice: hola<br />" . mysql_error($conexion);
		
		}
	
		//Devolver la tabla
		//echo "Paso 5) OK. Explorar el resultado <br />";
		//echo recorrerTabla ($tabla) . "<br />";
		
		mysql_free_result($consulta);
		
		
		return $tabla;
	}
	//Del paso 4) Relizar consulta SQL
	//Caso 2) INSERT, UPDATE, DELETE la consulta solo dice OK o ERROR
	function consultaSQL($sql, $conexion)
	{
		if ($consulta = mysql_query($sql, $conexion))
		{
			// echo "Paso 4.2) OK. Consulta realizada <br />";		
		}
		else
		{
			echo "Paso 4.2) Error en consulta <br />";
			echo " MySQL dice: hola<br />" . mysql_error($conexion);

		
		}
		
		return $consulta;
	}
	
	/*Paso 6) Devolver los recursos
	mysql_free_result($consulta);
	echo "Paso 6) OK. Liberar recursos <br />";*/
	
	function cerrar($conexion)
	{
		//Paso 7) Cerrar la conexión
		mysql_close($conexion);
		//echo "Paso 7) OK. Cerrar la conexión";
		
	}
	
?>
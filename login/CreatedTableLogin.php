<?php 
// Ejemplo de creación de Tablas

	$servidor = "localhost";
	$NombreUsuario = "root";
	$Clave = "Admin";
	$BD = "examen01";

	$conexion = new mysqli ($servidor, $NombreUsuario, $Clave, $BD);

	if ($conexion -> connect_error)
	{
		die("Conexión Fallida".$conexion -> connect_error);
		echo "No se puedo conectar a la base de datos";
	} 

	$sql = "CREATE TABLE users 
	(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(250) NOT NULL,
	password VARCHAR(250) NOT NULL)";

	if ($conexion->query($sql)=== true) 
	{
		echo "Se creó la tabla correctamente correctamente";
	}
	else
	{
		die ("Error al crear la tabla");
	}
 ?>

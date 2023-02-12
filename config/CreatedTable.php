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

		$sql = "CREATE TABLE estudiantes 
		(ID INT(11) AUTO_INCREMENT PRIMARY KEY,
		Nombre VARCHAR(30) NOT NULL,
		Cedula INT(9) NOT NULL,
		PrimerNota INT(3) NOT NULL,
		SegundaNota INT(3) NOT NULL,
		TercerNota INT(3) NOT NULL,
		Promedio INT(3) NOT NULL,
		Condicion VARCHAR(11) NOT NULL)";

		if ($conexion->query($sql)=== true) 
		{
			echo "Se creó la tabla correctamente correctamente";
		}
			else
			{
				die ("Error al crear la tabla");
			}

		

 ?>

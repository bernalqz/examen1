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

		$sql = "CREATE TABLE Notas 
		(Id INT(11) AUTO_INCREMENT PRIMARY KEY,
		texto VARCHAR(100) NOT NULL,
		Completado BOOLEAN NOT NULL,
		Fecha TIMESTAMP)";

		if ($conexion->query($sql)=== true) 
		{
			echo "Se creó la tabla correctamente correctamente";
		}
			else
			{
				die ("Error al crear tabla: ".$conexion->error);
			}

		

 ?>

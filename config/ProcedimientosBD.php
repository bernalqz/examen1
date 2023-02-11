<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de Insertar Datos BD</title>
</head>
<body>

	<form action="ProcedimientosBD.php" method="POST">
		
		<input type="text" name="texto" id ="texto">
		<input type="submit" value="Añadir Tarea">
	</form>

	<div id="Tareas">
		<?php 
			$servidor = "localhost";
			$NombreUsuario = "root";
			$Clave = "bernal";
			$BD = "Eje1Semana8";

			$conexion = new mysqli ($servidor, $NombreUsuario, $Clave, $BD);

			if ($conexion -> connect_error)
			{
				die("Conexión Fallida".$conexion -> connect_error);
				echo "No se puedo conectar a la base de datos";

			} 

			if (isset ($_POST ['texto'])) 
			{
				$texto = $_POST['texto'];
				//echo $texto;

				$sql = "INSERT INTO EjeTabla2 (texto, Completado)
						VALUES ('$texto', false)";

				if ($conexion->query($sql)===true) 
				{
					echo $texto."se ingreso dato";
				}

				else
				{
					die("Error al ingresar datos: ".$conexion->error);
				}
			}

				else if (isset ($_POST ['Completar'])) 
				{
					$id = $_POST ['Completar'];

					$sql = "UPDATE EjeTabla2 SET Completado = 1 where Id = $id";

					if ($conexion->query($sql)===true) 
					{
						//echo $texto."Se actualizó dato";
					}

					else
					{
						die("Error al actualizar datos: ".$conexion->error);
					}
				}

					else if (isset ($_POST['eliminar'])) 
					{
						$id = $_POST ['eliminar'];

					$sql = "DELETE FROM ejeTabla2 where Id = $id";

					if ($conexion->query($sql)===true) 
					{
						//echo $texto."Se actualizó dato";
					}

					else
					{
						die("Error al eliminar datos: ".$conexion->error);
					}
					}	

						
			$sql = "SELECT * FROM ejeTabla2 where Completado = 1";
			$Consulta = $conexion->query($sql);

			if ($Consulta->num_rows > 0) 
			{
				//echo $Consulta->num_rows;
				# code...
				while ($fila = $Consulta->fetch_assoc()) 
				{
					?>
					
					<div>
						<form method = "POST" id ="form<?php echo $fila['Id']; ?>" action ="">

							<input name="Completar" value = " <?php echo $fila['Id']; ?>"id ="<?php echo $fila['Id']; ?>" type = "checkbox" onchange= "CompletarPendiente(this)"><?php echo $fila['Texto']  ?>
						</form>
						<form method = "POST" id ="form_eliminar_<?php echo $fila['Id']; ?>" action ="DeleteData.php">
							<input type="hidden" name="eliminar" value = "<?php echo $fila['Id']; ?>">
							<input type = submit value = "Eliminar">	
						</form>
					</div>
					<?php

				}
			}

			$conexion->close();
		?>

		<div>
			
			<script> 

				function CompletarPendiente(e)
				{
					var id = "form" + e.id;
					var formulario = document.getElementById(id);
					formulario.submit();
				}
			</script>
		</div>	

	</div>
</body>
</html>

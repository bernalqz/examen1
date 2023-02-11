<?php

    $Server = "localhost";
    $User = "root";
    $Password = "Admin";
    $DB = "examen01";

    $con = new mysqli($Server, $User, $Password, $DB);

    if($con->connect_error)
    {
        die("Conexión a la Base de Datos fallida" .$con->connect_error);
    }
    else
    {
        $Nombre = $_REQUEST['nombre'];
        $Cedula = $_REQUEST['cedula'];
        if($_REQUEST['nota1'] != null)
        {
            $Nota01 = $_REQUEST['nota1'];     
        }
        else
        {
            $Nota01 = 0;

            if($_REQUEST['nota2'] != null)
            {
                $Nota02 = $_REQUEST['nota2'];     
            }
            else
            {
                $Nota02 = 0;
                
                if($_REQUEST['nota3'] != null)
                {
                    $Nota03 = $_REQUEST['nota3'];     
                }
                else
                {
                    $Nota03 = 0;
                }
            }
        }

        if($Nota01 != 0 && $Nota02 != 0 && $Nota03 != 0)
        {
            $Promedio = $Nota01 + $Nota02 + $Nota03 / 3;

            if($Promedio >= 70)
            {
                $Condicion = "Aprobado";
            }
            else
            {
                $Condicion = "Reprobado";
            }

            $sql = "INSERT INTO estudiantes (Nombre, Cedula, PrimerNota, SegundaNota, TercerNota, Promedio, Condicion)
						VALUES ('$Nombre', '$Cedula', '$Nota01', '$Nota02', '$Nota03', '$Promedio', '$Condicion')";
            
            if ($conexion->query($sql)===true) 
				{
					echo $texto."se ingreso dato";
				}

				else
				{
					die("Error al ingresar datos: ".$conexion->error);
				}
        } 
        
    }
    
?>
<?php

    include("config/dbconnection.php");

    $ID = $_GET['id'];

    $sql = "SELECT * FROM estudiantes WHERE ID = '$ID'";
    $result = mysqli_query($con, $sql);

    if($result)
    {
      
        while ($fila = mysqli_fetch_assoc($result)) {
            $Nombre = $fila["Nombre"];
            $Cedula = $fila['Cedula'];
            $PrimerNota = $fila['PrimerNota'];
            $SegundaNota = $fila['SegundaNota'];
            $TercerNota = $fila['TercerNota'];
        }

        $promedio= (($PrimerNota + $SegundaNota + $TercerNota)/3);
        $condicion="";
        if($promedio<70){
            $condicion= "Reprobado";

        }
        else{
            $condicion="Aprobado";
        }

        $texto= "Nombre: ".$Nombre." Cedula: ".$Cedula." Nota01: ".$PrimerNota." Nota01: ".$SegundaNota." Nota03: ". $TercerNota." Promedio: ".$promedio." Condicióon ".$condicion; 

        $nombreArchivo = "Nota_Estudiante.txt";
        file_put_contents($nombreArchivo, $texto);

        HEADER("Location: exam.php");
    }
    else
    {
        print("
            <script>
                alert('No se ha podido imprimir');
                window.history.go(-1);
            </script>
        ");
    }   

?>
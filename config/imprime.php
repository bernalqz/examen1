<?php

    include("dbconnection.php");

    $ID = $_GET['id'];

    $sql = "SELECT * FROM estudiantes WHERE ID = '$ID'";
    $result = mysqli_query($con, $sql);

    if($result)
    {
      
        while ($fila = mysqli_fetch_assoc($result)) {
            $Nombre = $fila["Nombre"];
            $Cedula = $fila['Cedula'];
            $PrimerNota = $fila['Nota1'];
            $SegundaNota = $fila['Nota2'];
            $TercerNota = $fila['Nota3'];
        }

        $texto= $Nombre.$Cedula.$PrimerNota.$SegundaNota.$TercerNota; 

        $nombreArchivo = "Nota_estudiante.txt";
        file_put_contents($nombreArchivo, $texto);



        HEADER("Location: ../exam.php");
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








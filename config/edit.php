<?php

    include("dbconnection.php");
    if(isset($_GET['id'])){
       
        $ID = $_GET['id'];
        $sql = "SELECT * FROM estudiantes WHERE ID = '$ID'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)==1){
        $row =mysqli_fetch_array($result);
        $nombre = $row["Nombre"];
        $cedula = $row['Cedula'];
        $primerNota = $row['PrimerNota'];
        $segundaNota = $row['SegundaNota'];
        $tercerNota = $row['TercerNota'];
        $promedio = $row['Promedio'];
        $condicion = $row['Condicion'];

        echo $nombre;

        }


    }
row
?>
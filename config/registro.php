<?php
    //Recepción de los datos del formulario
    $Nombre = $_POST['nombre'];
    $Cedula = $_POST['cedula'];
    $PrimerNota = $_POST['nota1'];
    $SegundaNota = $_POST['nota2'];
    $TercerNota = $_POST['nota3'];

    $Promedio = ($PrimerNota + $SegundaNota + $TercerNota) / 3;
    
    print("El promedio es: ".$Promedio);

?>
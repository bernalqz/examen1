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
        print("Conexión exitosa");
    }

?>
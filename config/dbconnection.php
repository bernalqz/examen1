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
       echo "	Conexión existosa";
       print("<script>
       setTimeout(mensaje,1000);
       function mensaje(){
        window.alert('Conexión Exitosa A la base de datos');
       }
       
       </script>");
    }

?>
<?php

    include("dbconnection.php");

    $ID = $_GET['id'];

    $sql = "DELETE FROM estudiantes WHERE ID = '$ID'";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        HEADER("Location: ../exam.php");
    }
    else
    {
        print("
            <script>
                alert('No se ha podido eliminar');
                window.history.go(-1);
            </script>
        ");
    }   

?>
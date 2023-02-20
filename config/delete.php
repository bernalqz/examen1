<?php

    include("database.php");

    $ID = $_GET['id'];

    $sql="DELETE FROM estudiantes  WHERE ID ='$ID'";
    $query=mysqli_query($sql);

?>
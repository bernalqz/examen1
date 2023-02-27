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
        $primernota = $row['PrimerNota'];
        $segundanota = $row['SegundaNota'];
        $tercernota = $row['TercerNota'];
        $promedio = $row['Promedio'];
        $condicion = $row['Condicion'];
        $id = $row['ID'];  






        //header("Location: ../exam.php");

        }


    }

?>

<!DOCTYPE html>
<html lang="es" class="p-0">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Examen de progra 4</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>      
    </head>

<body>
<div class="container my-1 mx-auto bg-warning" style="max-width: 550px;">

  <div class="abs-center">
    <form name="form" action="../config/edit2.php" method="POST" class="border p-3 form" id="formulario">
      <div class="form-group">
        <h5 class="text-primary">Incluir los datos del estudiante:</h5>

        <label for="Nombre">Nombre</label>
        <input type="text" name="nombre"  value="<?php echo $nombre?>"id="nombre" class="form-control" placeholder="Nombre del Estudiante" required> <!-- "Required" es para validad camos en blanco-->
      </div>
      <div class="form-group">
        <label for="Nombre">Cédula</label>
        <input type="text" name="cedula"  value="<?php echo $cedula?>" id="cedula" class="form-control" placeholder="Ingrese la cédula" required>
      </div>
      <div class="form-group">
        <label for="Nota1">Primer Nota</label>
        <input type="text" name="nota1" id="nota1" class="form-control"  value="<?php echo $primernota?>" placeholder="Primer Nota" required>
      </div>
      <div class="form-group">
        <label for="Nota2">Segunda Nota</label>
        <input type="text" name="nota2" id="nota2" value="<?php echo $segundanota?>" class="form-control" placeholder="Segunda Nota">
      </div>
      <div class="form-group">
        <label for="Nota3">Tercer Nota</label>
        <input type="text" name="nota3" id="nota3" class="form-control"  value="<?php echo $tercernota?>" placeholder="Tercer Nota">
      </div>
      <div class="form-group">
      
        <input type="hidden" name="id" id="id" value="<?php echo $id?>" class="form-control" placeholder="ID">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-secondary my-2" onclick="limpiar()">Editar estudiante</button>
      </div>
    </form>
  </div>
</div>
</body>

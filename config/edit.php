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







        //header("Location: ../exam.php");

        }


    }

?>
<?php include("../views/header.php"); ?>
<body>
<div class="container my-1 mx-auto bg-warning" style="max-width: 550px;">

  <div class="abs-center">
    <form name="form" action="../config/registro.php" method="POST" class="border p-3 form" id="formulario">
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
      <div class="text-center">
        <button type="submit" class="btn btn-secondary my-2" onclick="limpiar()">Editar estudiante</button>
      </div>
    </form>
  </div>
</div>
</body>
<?php include("../views/footer.php"); ?>
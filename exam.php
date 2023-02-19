<!-- Sesion
INfo obtenida de:
https://www.youtube.com/watch?v=37IN_PW5U8E&t=1326s
-->
<?php

  session_start();

  require 'config/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<!-- Sasion-->

<?php include("views/header.php"); ?>

<!-- Sasion-->
<?php if(!empty($user)): ?>
<!-- Acceso a-->
<center>
      <br> Bienvenido: <?= $user['email']; ?>
      <br>Usted está correctamente logeado
      <a href="logout.php" class="btn btn-danger my-2">Salir del sistema</a>
      

</center>
 <!-- Acceso a-->    
    




<?php include("config/dbconnection.php");
?>


  <!-- Call to Action-->
  <h1 class="font-weight-light text-center" style="margin-top: 25px; margin-bottom: 25px">Registro de Estudiantes</h1>

<!-- jugando-->

<!-- jugando-->

<!-- Controles BD-->
<div class="container " style="max-width: 800px;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 rounded" >
  <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
  <li class="nav-item mx-1"> 
  <div class="navbar-brand mx-1">Controles de la base de datos:</div>
  </li> 
  <li class="nav-item mx-1">
  <button id="conectarBDID" class="btn btn-primary my-2">Conectar a la Base de datos</button>
  </li> 
   <li class="nav-item mx-1">
    <button id="crearTablaID" class="btn btn-primary my-2">Crear la tabla de datos</button>
    </li>
    <li class="nav-item mx-1">
      
    <button id="BorrarBDID" class="btn btn-primary my-2">Borrar la tabla de datos</button>
    
   </li>
                      
 </ul>
</nav>
</div>
<!-- Controles BD-->

<!-- Scrip boton conectar a bd-->

<script>
    $(document).ready(function() {
      $("#conectarBDID").click(function() {
        $.ajax({
          url: "../config/dbconnection.php",
          success: function(respuesta) {
            alert(respuesta);
          }
        });
      });
    });
  </script>

<!-- Scrip boton conectar a bd-->

<!-- Scrip botones crear  tabla-->
<script>
    $(document).ready(function() {
      $("#crearTablaID").click(function() {
        $.ajax({
          url: "config/CreatedTable.php",
          success: function(respuesta) {
            alert(respuesta);
          }
        });
      });
    });
  </script>
<!-- Scrip botones crear  tabla-->


<!-- Scrip boton borrar  tabla-->
<script>
    $(document).ready(function() {
      $("#BorrarBDID").click(function() {
        $.ajax({
          url: "config/CreatedTable.php",
          success: function(respuesta) {
            alert(respuesta);
          }
        });
      });
    });
  </script>
<!-- Scrip boton borrar  tabla-->

<!-- Scrip boton conectar a bd-->
<script>
  document.getElementById("conectardb").addEventListener("click", function() {
    fetch("config/dbconnection.php")
      .then(response => response.text())
      .then(data => console.log(data))
      .catch(error => console.error(error));
  });
</script>
<!-- Scrip boton conectar a bd-->

<!-- Controles BD-->

<!-- Formulario-->
<body>





<div class="container my-1 mx-auto bg-warning" style="max-width: 550px;">

  <div class="abs-center">
    <form name="form" action="../config/registro.php" method="POST" class="border p-3 form">
      <div class="form-group">
        <h5 class="text-primary">Incluir los datos del estudiante:</h5>

        <label for="Nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del Estudiante" required> <!-- "Required" es para validad camos en blanco-->
      </div>
      <div class="form-group">
        <label for="Nombre">Cédula</label>
        <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Ingrese la cédula" required>
      </div>
      <div class="form-group">
        <label for="Nota1">Nota 01</label>
        <input type="text" name="nota1" id="nota1" class="form-control" placeholder="Nota primer examen" required>
      </div>
      <div class="form-group">
        <label for="Nota2">Nota 02</label>
        <input type="text" name="nota2" id="nota2" class="form-control" placeholder="Nota segundo examen" required>
      </div>
      <div class="form-group">
        <label for="Nota3">Nota 03</label>
        <input type="text" name="nota3" id="nota3" class="form-control" placeholder="Nota tercer examen" required>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary my-2" id="AgregarEstudiante">Ingresar estudiante</button>

        <script>
          document.getElementById("AgregarEstudiante").addEventListener("click", function(){
            Swal.fire('Any fool can use a computer');
          });
        </script>

      </div>
    </form>
  </div>
</div>
<!-- Formulario-->

<br>
<br>

<!-- Tabla-->
<div class="container">
  <div class="card text-white bg-secondary my-3 py-0 text-center ">
    <div class="card-body">
      <p class="text-white m-0">Tabla de Estudiantes</p>
    </div>
  </div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cédula</th>
        <th scope="col">Nota 01</th>
        <th scope="col">Nota 02</th>
        <th scope="col">Nota 03</th>
        <th scope="col">Promedio</th>
        <th scope="col">Condición</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $Conexion = mysqli_connect('localhost', 'root', 'Admin', 'examen01');
        $sql = "SELECT * from estudiantes";
        $result = mysqli_query($Conexion,$sql);

        while($Mostrar = mysqli_fetch_array($result))
        {
      ?>
        <tr>
          <th scope="row"> <?php print($Mostrar['ID']) ?> </th>
          <td> <?php print($Mostrar['Nombre']) ?> </td>
          <td> <?php print($Mostrar['Cedula']) ?> </td>
          <td> <?php print($Mostrar['PrimerNota']) ?> </td>
          <td> <?php print($Mostrar['SegundaNota']) ?> </td>
          <td> <?php print($Mostrar['TercerNota']) ?> </td>
          <td> <?php print($Mostrar['Promedio']) ?> </td>
          <td> <?php print($Mostrar['Condicion']) ?> </td>
          <td><input type="checkbox" name="Seleccion"></td>
        </tr>
      <?php
        }
      ?>    
    </tbody>
  </table>
</div>
<!-- Tabla-->

<!-- BOTONES -->

<div class="container">
  <nav id="Nav-ListaBD">
    <ul id="ListaBD">
      <li>
      <button type="button" class="btn btn-outline-dark">Editar</button>
      </li>

      <li>
      <button type="button" class="btn btn-outline-dark">Eliminar</button>
      </li>

      <li>
      <button type="button" class="btn btn-outline-dark">Imprimir</button>
      </li>
    </ul>
  </nav>
</div>

<!-- BOTONES -->

<!-- Fila de contenido
<div class="container">
  <div class="row gx-4 gx-lg-5">
    <div class="col-md-4 mb-5">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Agregar</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
        </div>
        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Editar</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
        </div>
        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
      </div>
    </div>
    <div class="col-md-4 mb-5">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Eliminar</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
        </div>
        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
      </div>
    </div>
  </div>
</div>
</div>
-->
</body>
<?php include("views/footer.php"); ?>

<!-- Acceso a-->    
<?php else: ?>
  <center>
      <h3 class="mt-3">Debe de estar registrado para ingresar a este sitio</h3>

      <a href="login.php" class="btn btn-danger my-2">Ingresar</a> or
      <a href="signup.php" class="btn btn-danger my-2">Registrarse</a>
  </center>
    <?php endif; ?>
<!-- Sasion-->

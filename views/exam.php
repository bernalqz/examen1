<?php //include("../config/dbconnection.php");?>
<?php include("header.php"); ?>

  <!-- Call to Action-->
  <h1 class="font-weight-light text-center">CRUD</h1>

<!-- ugando-->



<!-- ugando-->







<!-- Controles BD-->
<div class="container " style="max-width: 800px;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 rounded" >
  <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
  <li class="nav-item mx-1"> 
  <div class="navbar-brand mx-1">Controles de la base de datos:</div>
  </li> 
  <li class="nav-item mx-1">
  <button id="conectardb" class="btn btn-primary my-2">Conectar a la Base de datos</button>
  </li> 
   <li class="nav-item mx-1">
   <form>  
  <button type="button"  onclick="ejecutarArchivoPHP()" value="creartabla"  class="btn btn-primary my-2">Crear la tabla de datos</button>
  </form>
</li>
    <li class="nav-item mx-1">
      
    <button id="erasetable" class="btn btn-primary my-2">Borrar la tabla de datos</button>
    
   </li>
                      
 </ul>
</nav>
</div>
<!-- Controles BD-->
<!-- Scrip botones crear  tabla-->
<script>
function ejecutarArchivoPHP() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../config/EjemploEscrituraArchivo.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Aquí puedes hacer algo con la respuesta del servidor
      //alert(this.responseText);
      alert("Se creo un txt en /config de prueba de boton");
    }
  };
}
</script>
<!-- Scrip botones crear  tabla-->


<!-- Scrip boton borrar  tabla-->
<script>
document.getElementById("erasetable").addEventListener("click", function(){
  fetch("../config/EjemploEscrituraArchivo.php")
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error(error));
});
</script>
<!-- Scrip boton borrar  tabla-->


<!-- Scrip boton conectar a bd-->
<script>
document.getElementById("conectardb").addEventListener("click", function(){
  fetch("../config/dbconnection.php")
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error(error));
});
</script>


<!-- Scrip boton conectar a bd-->





<!-- Controles BD-->

  <!-- Formulario-->

  <div class="container my-1 mx-auto bg-warning" style="max-width: 550px;">

    <div class="abs-center">
      <form action="../config/registroestudiantes.php" method="POST" class="border p-3 form">
        <div class="form-group">
          <h5 class="text-primary">Incluir los datos del estudiante:</h5>
          <label for="Nombre">Nombre</label>
          <input type="text" name="nombre" id="noobre" class="form-control" placeholder="Nombre del Estudiante" >
        </div>
        <div class="form-group">
       <label for="Nombre">Cédula</label>
          <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Ingrese la cédula" >
        </div>
        <div class="form-group">
        <label for="Nota1">Nota 01</label>
          <input type="text" name="nota1" id="nota1" class="form-control" placeholder="Nota primer examen" >
        </div>
        <div class="form-group">
        <label for="Nota1">Nota 02</label>
          <input type="text" name="nota2" id="nota2" class="form-control" placeholder="Nota segundo examen" >
        </div>
        <div class="form-group">
        <label for="Nota1">Nota 03</label>
          <input type="text" name="nota3" id="nota3" class="form-control" placeholder="Nota tercer examen" >
        </div>
        <div class="text-center" >
        <button type="submit" class="btn btn-primary my-2">Ingresar estudiante</button>
        </div>
      </form>
    </div>
    </div>
 
  <!-- Formulario-->
  <div class="container">
  <div class="card text-white bg-secondary my-3 py-0 text-center ">
    <div class="card-body">
      <p class="text-white m-0">Tabla de contenidos</p>
    </div>
  </div>

 
<!-- Tabla-->

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cédula</th>
      <th scope="col">Nota 01</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>80</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>70</td>
    </tr>
  </tbody>
</table>
</div>
<!-- Tabla-->


  <!-- Content Row-->
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
  <?php include("footer.php"); ?>
  
  

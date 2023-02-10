<?php include("header.php"); ?>


  <!-- Call to Action-->
  <h1 class="font-weight-light text-center">CRUD</h1>



  <!-- Formulario-->

  <div class="container-fluid w-50">
    <div class="container w-50">
    <div class="abs-center">
      <form action="#" class="border p-3 form">
        <div class="form-group">
          <h5 class="text-primary">Incluir los datos del estudiante:</h5>
          <label for="Nombre">Nombre</label>
          <input type="text" name="nombre" id="noobre" class="form-control" placeholder="Nombre del Estudiante" >
        </div>
        <div class="form-group">
       <label for="Nombre">Cédula</label>
          <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Nota 01" >
        </div>
        <div class="form-group">
        <label for="Nota1">Nota 01</label>
          <input type="text" name="nota1" id="nota1" class="form-control" placeholder="Número de cédula" >
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
    </div>
  </div>
  <!-- Formulario-->

  <div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
      <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
    </div>
  </div>
  <!-- Content Row-->
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

  <?php include("footer.php"); ?>
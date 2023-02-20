<?php

  require 'config/database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado en la base de datos Usuarios';
    } else {
      $message = 'No se pudo crear el usuario';
    }
  }
?>
<?php include ("views/header.php");?>

<link rel="stylesheet" href="assets/css/style.css">
  <body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Crear un nuevo usuario</h1>
    <span>Ya tienes cuenta <a href="login.php">Ingresar</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu email">
      <input name="password" type="password" placeholder="Ingresa tu Password">
      
      <input type="submit" value="Crear usuario">
    </form>
    <div style="margin-top: 500px"></div>
    <?php include ("views/footer.php");?>
  </body>


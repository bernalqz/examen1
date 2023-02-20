<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: exam.php');
  }
  require 'config/database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: exam.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>
<?php include ("views/header.php");?>
<link rel="stylesheet" href="assets/css/style.css">
<body>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1 class="m-3">Ingreso al sistema de notas</h1>
    <span>o también <a href="signup.php"> Registrate</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu correo">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input type="submit" value="Ingresar al sistema">
    </form>

    <div style="margin-top: 500px"></div>
    <?php include ("views/footer.php");?>
  </body>
 

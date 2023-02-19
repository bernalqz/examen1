<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /Progra4/EX01/examen1/access/');
?>

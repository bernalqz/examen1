<?php

$server = 'localhost';
$username = 'root';
$password = 'Admin';
$database = 'examen01';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>

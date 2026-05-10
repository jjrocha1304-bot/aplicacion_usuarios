<?php
  $server = "localhost";
  $database = "aplicacion_empleados";
  $user = "root";
  $password = "";

  $dsn = "mysql:host=$server;dbname=$database";

  try {
    $conn = new PDO($dsn, $user, $password);
    echo "conexion a base de datos exitosa !";
  } catch (PDOException $error){
    echo $error;
  }
?>
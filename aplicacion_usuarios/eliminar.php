<?php

require_once('conexion.php');

$id = $_GET['id'];

if($id){

$query = $conn->prepare("DELETE FROM clientes WHERE id = :id");

$query->bindparam(':id', $id);
$query->execute();

header('Location: index.php');
exit;

}

?>
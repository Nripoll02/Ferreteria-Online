<?php

include '../login_register/conexion_db.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM reseñas WHERE id = $id";
  $query = $conexion->prepare($sql);
  $query->execute();
  header('Location: reseñas.php');
}

?>

<?php

include '../login_register/conexion_db.php';



if (isset($_POST['guardar_reseñas'])) {
  $title = $_POST['titulo'];
  $resenia = $_POST['resenia'];
  $imagen = $_FILES['imagen']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
  move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);
  $sql = "INSERT INTO reseñas(titulo, resenia, imagen) VALUES ('$title', '$resenia', '$imagen')";
  $query = $conexion->prepare($sql);
  $query->execute();
  
  
  
  
  $_SESSION['message'] = 'Reseña guardada';
  $_SESSION['message_type'] = 'success';
  header('Location: reseñas.php');


}
?>
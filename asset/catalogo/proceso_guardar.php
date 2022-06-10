<?php

include 'conexion_db.php';

$nombreImg = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO tabla_imagenes(nombre,imagen) VALUES('$nombreImg','$imagen')";
$resultado = $conexion_imagenes->query($consulta);
if($resultado){
    echo'Si se insertó';
}else{
    echo'No se insertó';
}


?>
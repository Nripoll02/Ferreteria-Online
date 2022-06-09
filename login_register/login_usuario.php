<?php

session_start();
include 'conexion_db.php';

$correo = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
$contrasenia = hash('sha512', $contrasenia);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasenia='$contrasenia'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
        header("location:../pages/inicio.php");
    exit();
}else{
    echo'
        <script>
            alert("El usuario no existe o la contraseña es incorrecta");
            window.location = "../index.php";
        </script>
    ';
    exit();
}


?>
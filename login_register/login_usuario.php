<?php

session_start();
include 'conexion_db.php';

$correo = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
$contrasenia = hash('sha512', $contrasenia);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasenia='$contrasenia'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['email']=$correo;
    header("location: ../pages/inicio.php");
}else{
    echo'
    <script>
        alert("Usuario o contraseña erroneo");
        window.location= "../index.php";
    </script>

    ';

}




?>
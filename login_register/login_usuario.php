<?php
include 'conexion_db.php';

$correo = $_POST['email'];
$contrasenia = $_POST['contrasenia'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasenia'");

if(mysqli_num_rows($validar_login) > 0){
    echo'
        <script>
            alert("Inicio de sesion correcto");
            window.location = "../pages/inicio.php";
        </script>
    ';
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
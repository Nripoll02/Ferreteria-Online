<?php

session_start();
include 'conexion_db.php';

$correo = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
$contrasenia = hash('sha512', $contrasenia);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasenia='$contrasenia'");
$result = $validar_login->fetch_assoc();

if(mysqli_num_rows($validar_login) > 0 && mysqli_num_rows($validar_login) < 2){
    $_SESSION['email']=$correo;

    //puede que el error esté acá.
    foreach($result as $row){
        $_SESSION['rol'] = $row['rol'];
    }

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
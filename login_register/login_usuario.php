<?php

session_start();
include 'conexion_db.php';

$correo = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
$contrasenia = hash('sha512', $contrasenia);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasenia='$contrasenia'");
$roles=mysqli_fetch_array($validar_login);

if($roles['id_cargo']==1)  {//Admin
        $_SESSION['usuario'] = $correo;
        header("location:../admin/inicio.php");
    exit();
}else if($roles['id_cargo']==2){//Lector
        $_SESSION['usuario'] = $correo;
        header("location:../pages/inicio.php");
}
else{
    echo'
        <script>
            alert("El usuario no existe o la contraseña es incorrecta");
            window.location = "../index.php";
        </script>
    ';
    exit();
}




?>
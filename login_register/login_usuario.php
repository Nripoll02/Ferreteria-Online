<?php

session_start();
include 'conexion_db.php';

$correo = $_POST['email'];
$contrasenia = $_POST['contrasenia'];
$contrasenia = hash('sha512', $contrasenia);


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasenia='$contrasenia'");
$result = $validar_login->fetch_assoc();

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['email']=$correo;

    //puede que el error esté acá.
    $_SESSION[$rol]=$result[$rol]===0;

    header("location: ../pages/inicio.php");
}
if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['email']=$correo;

    //puede que el error esté acá.
    $_SESSION[$rol]=$result[$rol]===1;

    header("location: ../admin/inicio.php");
}
// else{
//     echo'
//     <script>
//         alert("Usuario o contraseña erroneo");
//         window.location= "../index.php";
//     </script>

//     ';

// }




?>
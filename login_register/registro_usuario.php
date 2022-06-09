<?php

    include 'conexion_db.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    //Encriptamiento de la contraseña
    $contrasenia = hash('sha512', $contrasenia);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasenia) 
    VALUES('$nombre_completo','$correo','$usuario','$contrasenia')";

    //Verificacion de correo no repetido
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado");
            window.location = "../index.php";
        </script> 
        ';
        exit();
    }

    //Verificacion de usuario no repetido
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("Este usuario ya esta registrado");
            window.location = "../index.php";
        </script> 
        ';
        exit();
    }
    

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado con exito");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Usuario no registrado, intentelo de nuevo");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>
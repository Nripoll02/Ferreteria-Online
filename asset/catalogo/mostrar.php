<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles/style.css">

    <title>Mostrar imagenes</title>
</head>
<body>
    <center>
        <table border="2px">
            <thead>
                <tr>
                    <th>Id</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conexion_db.php';
                    $consulta = "SELECT * FROM tabla_imagenes";
                    $resultado = $conexion_imagenes->query($consulta);
                    while($row =  $resultado->fetch_assoc()){

                ?>
                    <tr>
                        <td><?php echo $row['id'];  ?></td>
                        <td><?php echo $row['nombre'];  ?></td>
                        <td><img class="imgCatalogo1" src="data:imagen/jpg;base64,<?php echo base64_encode($row['imagen']) ?>" alt=""></td>
                        <th><a href="#">Modificar</a></th>
                        <th><a href="#">Eliminar</a></th>

                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </center>
</body>
</html>
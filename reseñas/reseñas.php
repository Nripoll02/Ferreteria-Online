<?php
include '../login_register/conexion_db.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../faticon.png">
    <link rel="stylesheet" href="../css/styles/style.css">
    <link rel="stylesheet" href="../css/styles/reseñas.css">
    <title>Reseñas</title>
</head>
<body>
<header>
  <div>
      <h1 class="logo">RESEÑAS</h1>
      <nav>
      <a  href="../login_register/cerrar_sesion.php">Log out</a>
      </nav>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="../pages/inicio.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../pages/catalogo.php">CATALOGO</a>
            </li>
            <li>
                <a class="nav-link" href="reseñas.php">RESEÑAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/nosotros.php">NOSOTROS</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

  </header>

    <section class="infoContacto">
            <form action="guardar_reseñas.php" method="POST" enctype="multipart/form-data"> 
                <fieldset class="form-reseñas">
        
                    <legend><strong>Sea libre de dejar su opinion</strong></legend>
                    <label for="email">Titulo de la reseña:</label>
                    <input type="text" name="titulo"  placeholder="Escriba el titulo de la reseña" required>
                    <label for="imagen">Si desea, puede subir una imagen:</label>
                    <input type="file" name="imagen" id="imagen">
                    <div>Deje aquí su reseña(Max: 300 caracteres)</div>
                    <textarea class="textBox" name="reseña"  cols="50" rows="10" placeholder="Escriba aquí su reseña" required></textarea>
                  
                    <div class="inputReseñas">
                        <input type="submit" value="Enviar reseña">
                    </div>
                    
        
                </fieldset>
            </form>
        
        </section>
      <div >
        <table  style="background-color: white;">
        <thead>
          <tr>
            <th>Titulo</th>
            <th>Reseña</th>
            <th>Imagen</th>
            <th>Fecha de creacion</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

        <?php
          $sql = "SELECT * FROM reseñas";

          $query = $conexion->prepare($sql);
          $query->execute();
          $row = $query->get_result();
          $data= $row->fetch_all();   

          foreach ($row as $key => $value) {
            echo '<tr>
            <td>',$value["titulo"],'</td>
            <td>',$value["resenia"],'</td>
            <td>',$value["imagen"],'</td>
            <td>',$value["fecha_creacion"],'</td>
            <td>
              <a href="editar_reseñas.php?id=',$value["id"],'" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar_reseñas.php?id=',$value["id"],'" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        </tbody>';
          }
        ?>
        </table> 
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>
</html>
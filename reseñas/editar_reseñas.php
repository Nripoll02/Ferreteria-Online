<?php
include("../login_register/conexion_db.php");
$title = '';
$resenia= '';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM reseñas WHERE id=$id";
  $query = $conexion->prepare($sql);
  $query->execute();
  if (($sql) == 1) {
    $row = $sql;
    $title = $row['titulo'];
    $resenia = $row['resenia'];
  }
}

if (isset($_POST['edit'])) {
  $id = $_GET['id'];
  $title= $_POST['titulo'];
  $resenia = $_POST['resenia'];

  $sql = "UPDATE reseñas set titulo = '$title', resenia = '$resenia' WHERE id=$id";
  $query = $conexion->prepare($sql);
  $query->execute();
  
  header('Location: reseñas.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../faticon.png">
    <link rel="stylesheet" href="../css/styles/reseñas.css">
    <link rel="stylesheet" href="../css/styles/style.css">
    <title>Editar Reseñas</title>
</head>
<body>
<header>
  <div>
      <h1 class="logo">EDITAR RESEÑAS</h1>
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
            <form action="editar_reseñas.php?id=<?php echo $_GET['id'] ?>" method="post"> 
                <fieldset class="form-reseñas">
        
                    <legend><strong>Sea libre de dejar su opinion</strong></legend>
                    <label for="email">Titulo de la reseña:</label>
                    <input type="text" name="titulo-reseña" value="<?php echo $title; ?>" placeholder="Editar titulo" required>
                    <label>Deje aquí su reseña(Max: 300 caracteres)</label>
                    <textarea class="textBox" name="reseña"  cols="50" rows="10"   placeholder="Edite la reseña" required><?php echo $resenia ?></textarea>
                  
                    <div class="inputReseñas">
                        <input type="submit" value="Guardar">
                    </div>
                    
        
                </fieldset>
            </form>
        
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>
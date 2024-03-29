<?php

session_start();
if(!isset($_SESSION['email'])){
  echo'
    <script>
      alert("Por favor, debes iniciar sesion");
      window.location = "../index.php";
    </script>
  ';
  session_destroy();
  die();
  
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
  <link rel="stylesheet" href="../css/styles/style.css">
  <title>Nosotros</title>
</head>

<body>




  <header>
  <div>
      <h1 class="logo">ADMINISTRAR</h1>
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
              <a class="nav-link" href="inicio.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../pages/catalogo.php">CATALOGO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin.php">ADMINISTRAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/nosotros.php">NOSOTROS</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>



  </header>
  <main>


  <div class="informacion">
  
    <span class="btn_admin">
        <a href="../reseñas/editar_reseñas.php">EDITAR RESEÑAS</a>
    </span>
        
    
  </div>






  </main>

  <footer class="footer">
    <ul class="nav footer">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Facebook</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Instagram</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">Whastapp</a>
      </li>
    </ul>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>
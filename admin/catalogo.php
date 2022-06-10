<?php

session_start();
if(!isset($_SESSION['usuario'])){
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
  <link rel="stylesheet" href="../css/styles/buscar.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <title>Catalogo</title>
</head>

<body>

  <header>
    <h1 class="logo">CATALOGO</h1>
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
              <a class="nav-link " href="catalogo.php">CATALOGO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="admin.php">ADMINISTRAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nosotros.php">NOSOTROS</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>


  </header>


  <main>

    
      <h4>Búsqueda rápida:</h4>
      <ul class="filtros">
        <a href="#herramientas">HERRAMIENTAS</a>
        <a href="#indumentaria">INDUMENTARIA</a>
        <a href="#insumos">INSUMOS</a>
        <a href="#sanitarios">SANITARIOS</a>
      </ul>
    

    <span class="container__buscar">
		  <input id="inputBuscar" type="text" placeholder="Buscar">
		  <div class="btn">
			<i class="fa fa-search"></i>
		  </div>
	  </span>

    







    <div class="informacion">
      <a name="herramientas"><h2>HERRAMIENTAS</h2></a>
    </div>
   
    <section class="informacion">

      <div class="imgContainer">
        <img class="imgCatalogo1" src="../asset/catalogo/martillo.jpg" alt="imagen-martillo">
        <img class="imgCatalogo2" src="../asset/catalogo/pinza.jpg" alt="imagen-pinza">
        <img class="imgCatalogo3" src="../asset/catalogo/destornillador.jpg" alt="imagen-destornillador">
        <img class="imgCatalogo4" src="../asset/catalogo/sierra.jpg" alt="imagen-sierra">
        <img class="imgCatalogo5" src="../asset/catalogo/cinta.jpg" alt="imagen-cinta-métrica">
      </div>

    </section>

    <div class="informacion">
      <a name="indumentaria"><h2>INDUMENTARIA</h2></a>
    </div>
   
    <section class="informacion">

      <div class="imgContainer">
        <img class="imgCatalogo1" src="../asset/catalogo/casco.jpg" alt="imagen-casco">
        <img class="imgCatalogo2" src="../asset/catalogo/ropa.jpg" alt="imagen-ropa-trabajo">
        <img class="imgCatalogo3" src="../asset/catalogo/zapatos.jpg" alt="imagen-zapatos-trabajo">
        <img class="imgCatalogo4" src="../asset/catalogo/chaleco.jpg" alt="imagen-chaleco-seguridad">
        <img class="imgCatalogo5" src="../asset/catalogo/lentes.jpg" alt="imagen-lentes-protectores">
      </div>

    </section>

    <div class="informacion">
      <a name="insumos"><h2>INSUMOS</h2></a>
    </div>
   
    <section class="informacion">

      <div class="imgContainer">
        <img class="imgCatalogo1" src="../asset/catalogo/pilas.jpg" alt="imagen-pilas">
        <img class="imgCatalogo2" src="../asset/catalogo/cemento.jpg" alt="imagen-cemento">
        <img class="imgCatalogo3" src="../asset/catalogo/clavos.jpg" alt="imagen-clavos">
        <img class="imgCatalogo4" src="../asset/catalogo/tornillos.jpg" alt="imagen-tornillos">
        <img class="imgCatalogo5" src="../asset/catalogo/pintura.png" alt="imagen-pintura">
      </div>

    </section>

    <div class="informacion">
      <a name="sanitarios"><h2>SANITARIOS</h2></a>
    </div>
   
    <section class="informacion">

      <div class="imgContainer">
        <img class="imgCatalogo1" src="../asset/catalogo/inodoro.jpg" alt="imagen-inodoro">
        <img class="imgCatalogo2" src="../asset/catalogo/bidet.jpg" alt="imagen-bidet">
        <img class="imgCatalogo3" src="../asset/catalogo/ducha.jpg" alt="imagen-duch">
        <img class="imgCatalogo4" src="../asset/catalogo/lavamanos.jpg" alt="imagen-lavamanos">
        <img class="imgCatalogo5" src="../asset/catalogo/griferias.jpg" alt="imagen-griferias">
      </div>

    </section>
    
    




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
  <scipt src="../js/buscar.js"></scipt>
</body>

</html>
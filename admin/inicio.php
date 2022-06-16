 <?php

session_start();
if(!isset($_SESSION['email'])){
  echo'
    <script>
      alert("Por favor, debes iniciar sesion");
      window.location = "../index.php";
    </script>
  '; 
}


?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Todo lo que buscas en una ferreteria, al alcance de un click">
  <meta name="keywords" content="FERRETERIA, HERRAMIENTAS, MAQUINAS, ROPA, TRABAJO, TIENDA, COMPRA, CUOTAS, MENDOZA">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles/style.css">
  <link rel="icon" href="faticon.png">
  <title>Inicio</title>
</head>

<body>




  <header>
    <div>
      <h1 class="logo">FERRETERIA ONLINE</h1>
      <nav>
      <a  href="../login_register/cerrar_sesion.php">Log out</a>
      </nav>
    </div>
    
    



    <!-- Menu con Bootstrap -->

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
              <a class="nav-link" href="../pages/catalogo.php">CATALOGO</a>
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



  <section class="informacion">
    <section class="info">
      <p class="parrafo">►Somos una nueva forma de comprar productos de ferreteria via online.</p>
      <p class="parrafo">►Con envios a todo el pais y sin cargos extras.</p>
      <p class="parrafo">►Contamos con devolucion 100% gratuita dentro de los primeros 10 dias.</p>

      <div class="grid-container">
        <img class="img-1" src="../asset/inicio/ferreteria.jpg" alt="imagen-ferreteria">
        <img class="img-2" src="../asset/inicio/ferreteria2.jpg" alt="imagen-ferreteria">
        <img class="img-3" src="../asset/inicio/ferreteria3.jpg" alt="imagen-ferreteria">
        <img class="img-4" src="../asset/inicio/ferreteria4.jpg" alt="imagen-ferreteria">
      </div>
    </section>
  </section>
  <section class="informacion">
    <section class="info">
      <p class="parrafo">►Los mejores productos a un click de distancia</p>
      <p class="parrafo">►Con la calidad que mereces</p>
      <p class="parrafo">►Y siempre brindando la mejor seguridad</p>
      <div class="grid-container">
        <img class="img-1" src="../asset/inicio/ferreteria5.jpg" alt="imagen-ferreteria">
        <img class="img-2" src="../asset/inicio/ferreteria6.jpg" alt="imagen-ferreteria">
        <img class="img-3" src="../asset/inicio/ferreteria7.jpg" alt="imagen-ferreteria">
        <img class="img-4" src="../asset/inicio/ferreteria8.jpg" alt="imagen-ferreteria">
      </div>
    </section>
  </section>












  </main>

  <!-- Footer con Bootstrap -->

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
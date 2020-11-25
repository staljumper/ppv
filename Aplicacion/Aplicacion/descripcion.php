<?php 
session_start();
if(isset($_SESSION['nick'])) {
  

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pisos Vicente</title>

  <!-- Bootstrap core CSS -->
  <link href="../Plantilla/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../Plantilla/css/modern-business.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.html">Listado de pisos</a>
          </li>
          <!-- 
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li> -->

          <?php
          
          if (isset($_SESSION['email'])) {
          ?>

            <!-- Añadir un if para que solo salga si he iniciado sesion -->
            <li class="nav-item">
              <a class="nav-link" href="../Aplicacion/logout.php">Cerrar sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Aplicacion/panelUsuario/PanelPerfil.php">Panel de usuario</a>
            </li>

          <?php
          } elseif (isset($_SESSION['nick'])) {
          ?>


            <li class="nav-item">
              <a class="nav-link" href="../Aplicacion/logout.php">Cerrar sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Aplicacion/panelAdmin/paneladm.php">Panel de admin</a>
            </li>



          <?php
          } else {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="../Aplicacion/login.php">Iniciar sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Aplicacion/loginadmin.php">Iniciar sesion como administrador</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Aplicacion/singup.php">Registro</a>
            </li>
          <?php

          }
          ?>






        </ul>
      </div>
    </div>
  </nav>

  <div>
    <?php

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $habitaciones = $_POST['habitaciones'];
    $telefono = $_POST['telefono'];
    $distancia = $_POST['distancia'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];

    ?>


  <p><b> FOTO:  </b> <?php echo $imagen ?></p> 
  <h3>  <?php echo $titulo ?> </h3>
  <p><b> Precio:  </b> <?php echo $precio ?></p>
  <p><b> Habitaciones:  </b> <?php echo $precio ?></p>
  <p><b> Telefono:  </b> <?php echo $precio ?></p>
  <p><b> Distancia al Montessori:  </b> <?php echo $precio ?></p>
  <p><b> Descripcion:  </b> <?php echo $descripcion ?></p>

  <form action="pdf.php" method="post">

          <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
          
          <input type="hidden" name="precio" value="<?php echo $precio; ?>">
          
          <input type="hidden" name="habitaciones" value="<?php echo $habitaciones; ?>">
          
          <input type="hidden" name="telefono" value="<?php echo $telefono; ?>">
          
          <input type="hidden" name="distancia" value="<?php echo $distancia; ?>">
          
          <input type="hidden" name="descripcion" value="<?php echo $descripcion; ?>">
          
          <input type="hidden" name="imagen" value="<?php echo $imagen; ?>">

          <input type="submit" value="Descargar PDF">
  </form>

  <form action="ControladoresPHP/favoritos.php" method="post">
          <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
          <input type="hidden" name="usuario" value="<?php echo $_SESSION['nick']; ?>">
          <input type="submit" value="Añadir a favoritos">
  </form>


  <form action="panelUsuario/enviarMensaje.php" method="post">
          <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
          <input type="hidden" name="usuario" value="<?php echo $_SESSION['nick']; ?>">
          <input type="submit" value="Enviar Mensaje">
  </form>

  </div>
</body>
        <?php } else { header("Location: index.php"); } ?>
</html>
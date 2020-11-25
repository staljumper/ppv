<?php
session_start();
if (isset($_SESSION['nick'])) {


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
        <link href="../../Plantilla/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../Plantilla/css/modern-business.css" rel="stylesheet">

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

        <?php 
        
        //CAMBIAR LEIDO
        require "../database.php";
                        $id = $_POST['id'];
        $query = "UPDATE mensajes SET  leido = 1 where id = '$id'";
        $resultado = $conn->query($query);
    
?>
        <div>


           <h4>Asunto: <?php echo $_POST['asunto'];?></h4>

           <h5>De: <?php echo $_POST['de'];?></h4>

           <h5>Piso: <?php echo $_POST['titulo'];?></h4>
            
           <p>Mensaje: <br> <?php echo $_POST['mensaje'];?></p>

           <h4>Responder</h4>
           <form action="../ControladoresPHP/enviarMensaje.php" method="post">
                        <input type="hidden" name="de" value="<?php echo $_POST['para']; ?>">
                        <input type="hidden" name="para" value="<?php echo $_POST['de']; ?>">
                        <br>Asunto: <br>
                        <input type="text" name="asunto" value="<?php echo $_POST['asunto']; ?>"> <br> Mensaje: <br>
                        <input type="hidden" name="titulo" value="<?php echo $_POST['titulo']; ?>"> 
                        <textarea type="text" name="mensaje"></textarea> <br>       
           <input type="submit" value="Responder">
           </form>

           <form action="../ControladoresPHP/eliminarMensaje.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                      
           <input type="submit" value="Elimimar">
           </form>

        </div>
    </body>
<?php } else {
    header("Location: index.php");
} ?>

    </html>
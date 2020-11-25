<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>

<body>


    <div class="wrapper">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="PanelPerfil.php"><i class="fas fa-home"></i>Mi perfil</a></li>
                <li><a href="PanelMensajes.php"><i class="fas fa-user"></i>Mensajes</a></li>
                <li><a href="misFavoritos.php"><i class="fas fa-user"></i>Favoritos</a></li>
                <li><a href="../../Plantilla/index.php"><i class="fas fa-address-card"></i>Pagina principal</a></li>
                
            </ul>

        </div>
        <div class="main_content">
        
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

        </div>
     
        </div>
    </div>
</body>

</html>
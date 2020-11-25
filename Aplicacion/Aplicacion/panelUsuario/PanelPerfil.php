<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Panel del perfil</title>
</head>

<body>


    <div class="wrapper">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="../ControladoresPHP/PanelPerfil.php"><i class="fas fa-home"></i>Mi perfil</a></li>
                <li><a href="PanelMensajes.php"><i class="fas fa-user"></i>Mensajes</a></li>
                <li><a href="misFavoritos.php"><i class="fas fa-user"></i>Favoritos</a></li>
                <li><a href="../../Plantilla/index.php"><i class="fas fa-address-card"></i>Pagina principal</a></li>

            </ul>

        </div>



        <div class="main_content">

            <div class="info">
                <form action="../ControladoresPHP/PanelPerfil.php" method="post">
                    <span> Nick </span> <br>
                    <input type="text" name="nick" id="nick" value="<?php echo $_SESSION['nick'] ?>" required> <br>
                    <span>Nombre</span> <br>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre'] ?>" required> <br>
                    <span>Primer apellido</span> <br>
                    <input type="text" name="ape1" id="ape1" value="<?php echo $_SESSION['ape1'] ?>" required> <br>
                    <span>Segundo apellido</span> <br>
                    <input type="text" name="ape2" id="ape2" value="<?php echo $_SESSION['ape2'] ?>" required> <br>
                    <span>Telefono </span> <br>
                    <input type="text" name="telefono" id="telefono" value="<?php echo $_SESSION['telefono'] ?>" required> <br>
                    <span>Email</span> <br>
                    <input type="email" name="email" id="correo" value="<?php echo $_SESSION['email'] ?>" required> <br>
                    <button class="submit" type="submit"> Entrar </button>
                </form>
            </div>

            <p>Introduce la contraseña para poder dar de baja/eliminar tu cuenta: </p>

            <form action="../ControladoresPHP/PanelPerfil.php" method="post">
                <input type="password" name="password" required>
                <button type="submit"> Dar de baja</button>
            </form>
        </div>



    </div>


</body>

</html>
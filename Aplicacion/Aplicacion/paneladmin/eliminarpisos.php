<?php
session_start();
require "../database.php";
?>


<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Panel del Administrador</title>
</head>

<body>


    <div class="wrapper">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="../../Plantilla/index.php"><i class="fas fa-address-card"></i>Pagina principal</a></li>
                <li><a href="PanelMensajesAdmin.php"><i class="fas fa-user"></i>Mensajes</a></li>
                <li><a href="anadirpisos.php"><i class="fas fa-address-card"></i>Añadir Piso</a></li>
                <li><a href="modificarpiso.php"><i class="fas fa-address-card"></i>Modificar piso</a></li>
                <li><a href="panelLogo.php"><i class="fas fa-address-card"></i>Cambiar logo</a></li>
                <li><a href="registroAdmin.php"><i class="fas fa-address-card"></i>Registrar a un admin</a></li>
                <li><a href="eliminarusuario.php"><i class="fas fa-address-card"></i>Eliminar usuario</a></li>
                <li><a href="eliminarpisos.php"><i class="fas fa-address-card"></i>Eliminar pisos</a></li>

            </ul>

        </div>





        <div class="main_content">

            <form action="../ControladoresPHP/eliminarpisos.php" method="POST">
                <select name="tituloSeleccion">
                    <?php
                    //selecion de piso para eliminar, el name hace referencia a lo recogido por POST.


                    $result = $conn->query("SELECT * FROM pisos");
                    $row = $result->fetch_assoc();

                    do {
                        echo "<option>" . $row['titulo'] . "</option>";
                    } while ($row = $result->fetch_assoc());


                    ?>
                </select>
                <input type="submit" value="Eliminar">
            </form>



            <div class="info">
                <!-- <form name="registro" action="eliminarpisos.php" method="post">
                    <input type="text" name="descripcion" placeholder="Descripcion del piso" required value="<?php /* echo $_SESSION['descripcion'] */ ?>"><br>
                    <input type="text" name="distancia" placeholder="Distancia en KM del colegio Montessori" value="<?php /* echo $_SESSION['distancia'] */ ?>" required><br>
                    <input type="text" name="habitaciones" placeholder="numero de habitaciones" value="<?php /* echo $_SESSION['habitaciones'] */ ?>" required><br>
                    <input type="text" name="imagen" placeholder="imagenes del piso" value="<?php /* echo $_SESSION['imagen'] */ ?>" required><br>
                    <input type="text" name="precio" placeholder="precio en euros" value="<?php /* echo $_SESSION['precio'] */ ?>" required><br>
                    <input type="text" name="telefono" placeholder="telefono" value="<?php /* echo $_SESSION['telefono'] */ ?>" required><br>
                    <input type="text" name="titulo" placeholder="Nombre del piso" value="<?php /* echo $_SESSION['titulo'] */ ?>" required><br>
                    <input type="submit" value="Eliminar">
                </form> -->
            </div>


        </div>



    </div>



</body>

</html>
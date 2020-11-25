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

            <div class="info">
                <form name="registro" action="../ControladoresPHP/registroAdmin.php" method="post">
                    <input type="text" name="nick" placeholder="Nick" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <input type="submit" value="Registrar">
                </form>
            </div>



        </div>



    </div>


</body>

</html>
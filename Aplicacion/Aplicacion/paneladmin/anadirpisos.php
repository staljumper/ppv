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
                <form name="registro" action="../ControladoresPHP/anadirpisos.php" method="post">
                    <input type="text" name="descripcion" placeholder="Descripcion del piso" required><br>
                    <input type="text" name="distancia" placeholder="Distancia en KM del colegio Montessori" required><br>
                    <input type="text" name="habitaciones" placeholder="numero de habitaciones" required><br>
                    <input type="text" name="imagen" placeholder="imagenes del piso" required><br>
                    <input type="text" name="precio" placeholder="precio en euros" required><br>
                    <input type="text" name="telefono" placeholder="telefono" required><br>
                    <input type="text" name="titulo" placeholder="Nombre del piso" required><br>
                    <input type="submit" value="Send">

            </div>



        </div>



    </div>



</body>

</html>
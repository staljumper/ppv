<?php
session_start();
require "../database.php";
?>

<?php
if (isset($_POST['password'])) {

    
    $nick = $_SESSION['nick'];
    $password = $_POST['password'];


    $query1 = "DELETE FROM users WHERE nick = '$nick' and password = '$password'";
    $result = $conn->query($query1);
    if (mysqli_affected_rows($conn) > 0) {
        session_destroy();
        header("Location: ../index.php");
    } else {
        echo "No has introducido bien la contraseña";
    }
}

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

            <div class="info">
<p>elige una opcion del panel</p>







            </div>


        </div>



    </div>


</body>

</html>
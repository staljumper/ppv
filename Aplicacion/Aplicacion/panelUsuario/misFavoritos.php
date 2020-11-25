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
            
            <div class="info">
                <table>
                    <thead>
                        <th>Pisos</th>
                    </thead>
                    <tbody>
                        <?php 
                            session_start();
                            $usuario = $_SESSION['nick'];
                            require "../database.php";
                            $sql = "SELECT * FROM favoritos WHERE usuario = '$usuario'";
                            $result = $conexion->query($sql);
                            $row = $result->fetch_assoc();
                            do {
                                echo '<tr><td>'.$row['titulo'].' <td></tr>';
                            } while ($row = $result->fetch_assoc());
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
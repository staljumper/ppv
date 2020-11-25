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

        <table>
            <thead>
                <th>Leido</th>
                <th>De</th>
                <th>Mensaje</th>
            </thead>
            <tbody>
            <?php 
            
            require "../database.php";

            $result = $conn->query("SELECT * FROM mensajes WHERE para = 'adm'");
            $row = $result->fetch_assoc();
            
            do {
                echo "<form action='verMensaje.php' method='post'>";
                echo "<tr>";
   
                echo "<input type='hidden' name='leido' value='" . $row['leido'] . "'>";

                if ($row['leido'] == '0') {
                    echo "<td></td>";
                } else {
                    echo "<td> ✓ </td>";
                }
                
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                
                echo "<input type='hidden' name='de' value='" . $row['de'] . "'>";
                echo "<td>" . $row['de'] . "</td>";
                echo "<input type='hidden' name='asunto' value='" . $row['asunto'] . "'>";
                echo "<td><u><b><input type='submit' value='" . $row['asunto'] . "' ><u><b></td>";
                echo "<input type='hidden' name='para' value='" . $row['para'] . "'>";
                echo "<input type='hidden' name='titulo' value='" . $row['titulo'] . "'>";
                echo "<input type='hidden' name='mensaje' value='" . $row['mensaje'] . "'>";
                echo "</tr>";
                echo "</form>";
            } while ($row = $result->fetch_assoc());
            
            ?>
            </tbody>
        </table>
           
        </div>


 
    </div>


</body>

</html>
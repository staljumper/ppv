<?php




require '../database.php';

if (!empty($_POST['titulo']) && !empty($_POST['usuario'])) {

    $titulo = $_POST['titulo'];
    $usuario = $_POST['usuario'];

    $sql1 = "SELECT * FROM favoritos WHERE usuario = '$usuario' and titulo = '$titulo'";
    $result1 = $conn->query($sql1);


    if ($result1->num_rows > 0) {
        $sqlO = "DELETE FROM  favoritos WHERE titulo = '$titulo' and usuario = '$usuario'";
        $stmtO = $conn->query($sqlO);
        
    } else {

        $sqlM = "INSERT INTO  favoritos (titulo, usuario) VALUES ('$titulo', '$usuario')";
        $stmtM = $conn->prepare($sqlM);
        if ($stmtM->execute()) {
            echo "funciona";
        } else {
            echo "nofunciona";
        }

    }

}
    ?>

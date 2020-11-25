<?php 


if (!empty($_POST['titulo']) && !empty($_POST['para']) && !empty($_POST['de']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
    $titulo = $_POST['titulo'];
    $de = $_POST['de'];
    $para = $_POST['para'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    require "../database.php";

    $sql = "INSERT INTO  mensajes (titulo, de, para, asunto, mensaje) VALUES ('$titulo', '$de', '$para', '$asunto', '$mensaje')";
    $stmt = $conn->prepare($sql);


    if ($stmt->execute()) {
        $message = 'FUNCIONA';
    } else {
        $message = 'no funciona';
    }

}

?>
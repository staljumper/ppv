<?php
require '../database.php';
$message = '';




if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nick']) && !empty($_POST['nombre']) && !empty($_POST['ape1']) && !empty($_POST['ape2']) && !empty($_POST['telefono'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nick = $_POST['nick'];
    $nombre = $_POST['nombre'];
    $ape1 = $_POST['ape1'];
    $ape2 = $_POST['ape2'];
    $telefono = $_POST['telefono'];
    $sql = "INSERT INTO  users (email, password, nick, nombre, ape1, ape2, telefono) VALUES ('$email', '$password','$nick', '$nombre', '$ape1', '$ape2', '$telefono')";
    $stmt = $conn->prepare($sql);
    # $stmt->bindParam(':usuario', $_POST['email']);
    # $password = $_POST['password'];
    # $stmt->bindParam(':password', $_POST['password']);

    if ($stmt->execute()) {
        $message = 'FUNCIONA';
    } else {
        $message = 'no funciona';
    }
}

?>
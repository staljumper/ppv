<?php
require '../database.php';
$message = '';




if (!empty($_POST['nick']) && !empty($_POST['password'])) {

    $password = $_POST['password'];
    $nick = $_POST['nick'];

    $sql = "INSERT INTO  admins (nick, password) VALUES ('$nick', '$password')";
    $stmt = $conn->prepare($sql);
    header("Location: ../paneladmin/registroAdmin.php");

    if ($stmt->execute()) {
        $message = 'FUNCIONA';
    } else {
        $message = 'no funciona';
    }
}

?>
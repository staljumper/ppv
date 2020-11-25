<?php

require "../database.php";
if (isset($_POST['usuarioElegido'])) {

    $nick = $_POST['usuarioElegido'];
    $busID = $conn->query("SELECT id FROM users WHERE nick = '$nick'");
    $f = $busID->fetch_array();
    $id = $f['id'];

    $query = "DELETE FROM users WHERE id = '$id'";
    $result = $conn->query($query);
}
header("Location: ../paneladmin/eliminarusuario.php");
?>
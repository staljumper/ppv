<?php
session_start();
require "../database.php";
if (isset($_POST['tituloSeleccion'])) {

    $titulo = $_POST['tituloSeleccion'];


    $query1 =  "DELETE FROM pisos WHERE  titulo = '$titulo'";
    $result = $conn->query($query1);

    if (mysqli_affected_rows($conn) > 0) {
        header("Location: ../paneladmin/eliminarpisos.php");
    }
    if ($result) {
        echo "has eliminado un piso";
    } else {
        echo "NO has eliminado un piso";
    }
}



?>


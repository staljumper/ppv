<?php

require '../database.php';
$message = '';




  if (!empty($_POST['descripcion']) && !empty($_POST['distancia']) && !empty($_POST['habitaciones'] && !empty($_POST['imagen']) && !empty($_POST['precio']) && !empty($_POST['telefono']) && !empty($_POST['titulo']))) {

    $descripcion = $_POST['descripcion'];
    $distancia = $_POST['distancia'];
    $habitaciones = $_POST['habitaciones'];
    $imagen = $_POST['imagen'];
    $precio = $_POST['precio'];
    $telefono = $_POST['telefono'];
    $titulo = $_POST['titulo'];
    

    $sql = "INSERT INTO  pisos (descripcion, distancia, habitaciones, imagen, precio, telefono, titulo) VALUES ('$descripcion', '$distancia', '$habitaciones', '$imagen', '$precio', '$telefono', '$titulo')";
    $stmt = $conn->prepare($sql);


    if ($stmt->execute()) {
        $message = 'FUNCIONA';
    } else {
        $message = 'no funciona';
    }
    header("Location: ../paneladmin/anadirpisos.php");
}

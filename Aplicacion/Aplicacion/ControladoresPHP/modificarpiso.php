<?php
session_start();
require "../database.php";

if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['distancia']) && isset($_POST['habitaciones']) && isset($_POST['imagen']) && isset($_POST['precio']) && isset($_POST['telefono'])) {

    $descripcion = $_POST['descripcion'];
    $titulo = $_POST['titulo'];
    $habitaciones = $_POST['habitaciones'];
    $precio = $_POST['precio'];
    $distancia = $_POST['distancia'];
    $telefono = $_POST['telefono'];
    $imagen = $_POST['imagen'];

    $tituloAntiguo = $_SESSION['titulo'];
    $busID = $conn->query("SELECT id FROM pisos WHERE titulo = '$tituloAntiguo'");
    $f = $busID->fetch_array();
    $id = $f['id'];



    $query2 = "UPDATE pisos SET  descripcion = '$descripcion', distancia='$distancia', habitaciones='$habitaciones', imagen='$imagen', precio='$precio', telefono='$telefono', titulo='$titulo' where id = '$id'";
    $resultado2 = $conn->query($query2);

    $_SESSION['descripcion'] = $descripcion;
    $_SESSION['distancia'] = $distancia;
    $_SESSION['habitaciones'] = $habitaciones;
    $_SESSION['imagen'] = $imagen;
    $_SESSION['precio'] = $precio;
    $_SESSION['telefono'] = $telefono;
    $_SESSION['titulo'] = $titulo;
}



if (isset($_POST['tituloSeleccion'])) {
    $titulo1 = $_POST['tituloSeleccion'];
    $resultado = $conn->query("SELECT * FROM pisos WHERE titulo = '$titulo1'");
    $fila = $resultado->fetch_array();

    if ($resultado->num_rows > 0) {
        $_SESSION['descripcion'] = $fila['descripcion'];
        $_SESSION['distancia'] = $fila['distancia'];
        $_SESSION['habitaciones'] = $fila['habitaciones'];
        $_SESSION['imagen'] = $fila['imagen'];
        $_SESSION['precio'] = $fila['precio'];
        $_SESSION['telefono'] = $fila['telefono'];
        $_SESSION['titulo'] = $fila['titulo'];
    }
    header("Location: ../paneladmin/modificarpiso.php");
}

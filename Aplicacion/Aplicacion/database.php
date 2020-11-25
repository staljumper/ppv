<?php
#Credenciales de la base de datos: Direccion de la BBDD, Nombre de la BBDD, Usuario de acceso de la BBDD, Contraseña de la BBDD. Parametro de conexion a la BBDD.
$conexion = mysqli_connect("localhost", "root", "", "ppv") or die("Error al conectar" . mysqli_error($conexion));
$server = "localhost";
$database = "ppv";
$username = "root";
$password = "";

try {

    $conn =  new mysqli($server, $username, $password, $database);
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}

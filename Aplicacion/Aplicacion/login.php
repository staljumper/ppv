<?php 
session_start();
require "database.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/css.css">
    <title>Login</title>
</head>

<body>

    <?php
    /*
    require 'E:\Mario\Documentos\DAW\2DAW\Servidor\PHP\Practica PPV\Aplicacion\partials\header.php'
    */
    ?>

    <h1>login</h1>
    <span>or <a href="singup.php">Sing Up</a></span><br>
    <span> <a href="../Plantilla/Index.php">Volver al Inicio</a></span>

    <?php

    if (!empty($message)) : ?>

        <p><?php $message ?></p>


    <?php endif; ?>


    <form action="./ControladoresPHP/login.php" method="post">

        <INPUt type="text" name="nick" placeholder="Introduce el nick"></INPUt>
        <input type="password" name="password" placeholder="Introduce la contraseña">
        <input type="submit" value="Send">


    </form>


</body>

</html>
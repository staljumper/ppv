

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/css.css">
    <title>Sing Up</title>
</head>

<body>

    <!--
    <?php/*
    require 'E:\Mario\Documentos\DAW\2DAW\Servidor\PHP\Practica PPV\Aplicacion\partials\header.php'
    */
    ?>
-->
    <?php if (!empty($message)) : ?>
        <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Sing Up</h1>
    <span> <a href="login.php">Login</a></span><br>
    <span> <a href="../Plantilla/index.php">Volver al Inicio</a></span>

    <form name="registro" action="./ControladoresPHP/singup.php" method="post">

        <input type="text" name="email" placeholder="Email" required></input>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="password" name="confirm_password" placeholder="Introduce otra vez la contraseña" required>
        <input type="text" name="nick" placeholder="Nick" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="ape1" placeholder="Primer apellido" required>
        <input type="text" name="ape2" placeholder="Segundo apellido" required>
        <input type="text" name="telefono" placeholder="Introduce tu telefono" required>
        <input type="submit" value="Send">
        <!-- <script>
            var cla1 = document.getElementsByName(password);
            var cla2 = document.getElementsByName(confirm_password);
            if (cla1 != cla2) {
                alert("Las claves introducidas no son iguales");
                document.registro
                return false;
            } else {
                alert('Contraeña correcta');
                document.registro.submit;
                return true;
            }
        </script> -->

    </form>


</body>

</html>
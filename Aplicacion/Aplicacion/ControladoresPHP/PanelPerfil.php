<?php
session_start();
require "../database.php";
if (isset($_POST['email'])) {

    $nick = $_POST['nick'];
    $nombre = $_POST['nombre'];
    $ape1 = $_POST['ape1'];
    $ape2 = $_POST['ape2'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];





    $cst = $conn->query("SELECT id FROM users WHERE nick = '$nick'");
    $row = $cst->fetch_array();
    $id = $row['id'];


    $query2 = "UPDATE users SET nick = '$nick', nombre = '$nombre', ape1 = '$ape1', ape2 = '$ape2', telefono = '$telefono', email = '$email' where id = '$id'";
    $result = $conn->query($query2);

    if (mysqli_affected_rows($conn) > 0) {

        $_SESSION['nick'] = $nick;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['ape1'] = $ape1;
        $_SESSION['ape2'] = $ape2;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['email'] = $email;
    } else {
        return false;
    }
    header("Location: ../panelUsuario/PanelPerfil.php");

}

?>

<?php
if (isset($_POST['password'])) {

    require "../database.php";
    $nick = $_SESSION['nick'];
    $password = $_POST['password'];


    $query1 = "DELETE FROM users WHERE nick = '$nick' and password = '$password'";
    $result = $conn->query($query1);
    if (mysqli_affected_rows($conn) > 0) {
        session_destroy();
        header("Location: ../index.php");
    } else {
        echo "No has introducido bien la contraseña";
    }
}

?>

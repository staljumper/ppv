<?php
session_start();
?>
<?php

require "../database.php";

if (!empty($_POST['nick']) &&  !empty($_POST['password'])) {


    $query2 = "SELECT * FROM users WHERE nick = '" . $_POST['nick'] . "'";
    $result = $conn->query($query2);

    $row = $result->fetch_array();
    if ($result->num_rows > 0) {
        $_SESSION['nick'] = $row['nick'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['ape1'] = $row['ape1'];
        $_SESSION['ape2'] = $row['ape2'];
        $_SESSION['telefono'] = $row['telefono'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
    }

    echo $_SESSION['nick'];

}
header("Location: ../login.php");


?>
<?php
session_start();
?>
<?php

require "../database.php";

if (!empty($_POST['nick']) &&  !empty($_POST['password'])) {


    $query2 = "SELECT * FROM admins WHERE nick = '" . $_POST['nick'] . "'";
    $result = $conn->query($query2);

    $row = $result->fetch_array();
    if ($result->num_rows > 0) {
        $_SESSION['nick'] = $row['nick'];
        $_SESSION['password'] = $row['password'];
    }

    echo $_SESSION['nick'];
}

header("Location: ../loginadmin.php");

?>

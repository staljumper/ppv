<?php 


require "../database.php";

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $query = "DELETE FROM mensajes WHERE id = '$id'";
    $result = $conn->query($query);


}



?>
<?php

if (isset($_GET['id_user'])) {
    $id_user= $_GET['id_user'];
    $servername ="localhost";
    $username = "root";
    $password = "";
    $database= "ajedrez";

    $connection = new mysqli ($servername, $username, $password, $database);
    $sql = "DELETE FROM user WHERE id_user= $id_user";
    $connection->query($sql);
}
header ("location: index.php");
exit;


?>
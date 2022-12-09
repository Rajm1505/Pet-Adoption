<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "petadoption";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn)
    {
        echo "not connected";
    }

?>
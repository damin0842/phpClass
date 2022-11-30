<?php
    $host = "localhost";
    $user = "gdami";
    $pw = "un42108506*";
    $db = "gdami";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf8");
    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        //echo "database connect true";
    }
?>
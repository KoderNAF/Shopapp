<?php

    //database configuration
    $host       = "localhost";
    $user       = "kodern3e_shopapp";
    $pass       = "8HVOmHI1";
    $database   = "kodern3e_shopapp";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

?>
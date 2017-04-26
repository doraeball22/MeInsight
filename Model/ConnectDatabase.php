<?php

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "my-secret-pw";
    $dbname = "me_db";
    $dbconnect = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    mysqli_set_charset($dbconnect,"utf8");
    
?>
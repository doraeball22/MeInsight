<!DOCTYPE html>
<html>

<head>
    <?php include("../View/pages/Header.php"); ?>
</head>
<body>
<?php
    
    require("../Model/Order.php");

    session_start();
    $member = $_SESSION["member"];
    //$Oid = $_SESSION["Oid"];

    //echo $Oid;
    $Oupgrate = new Order();
    $Oupgrate->verifyOrder($_SESSION["Oid"]);
        

    echo "<script>window.location='../View/pages/UIOrderShowListVerified.php';</script>";
    
?>
</body>
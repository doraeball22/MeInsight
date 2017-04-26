<?php
    
    require("../Model/intell.php");

    $insert = new Intell();
    //echo $_GET["code"];
    $a = $_GET["code"];
    $insert->insertQIntell($_POST["question"],$_POST["sy"],$_POST["sn"],$_GET["code"]);

    echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";



?>
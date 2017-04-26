<?php
    
    require("../Model/intell.php");

    $edit = new Intell();
    //echo $_GET["code"];
    $a = $_GET["g"];
    //echo $a;
   $edit->editQIntell($_POST["question"],$_POST["sy"],$_POST["sn"],$_GET["code"]);

    echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";



?>
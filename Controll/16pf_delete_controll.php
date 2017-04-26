<?php
    
    require("../Model/16pf.php");

    $delete = new Question16PF();
    //$a = $_GET["grob"];
    $a=$_GET["codeA"];
    $ap=$_GET["codeP"];
    $an=$_GET["codeN"];
    
    $delete->deleteQuestion16PF($_GET["code"]);

    echo "<script>window.location='../pages/16pf_page.php?codeA=$a&codeP=$ap&codeN=$an';</script>";

?>
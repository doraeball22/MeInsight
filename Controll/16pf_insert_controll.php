<?php
    
    require("../Model/16pf.php");

    $a=$_GET["codeA"];
    $ap=$_GET["codeP"];
    $an=$_GET["codeN"];

    $insertQ = new Question16PF();
    //$a = $_GET["grob"];
    $insertQ->insertQuestion16PF($_POST["question"], $_POST["c1"], $_POST["c2"], $_POST["c3"], $a, $ap, $an);

    echo "<script>window.location='../pages/16pf_page.php?codeA=$a&codeP=$ap&codeN=$an';</script>";

?>
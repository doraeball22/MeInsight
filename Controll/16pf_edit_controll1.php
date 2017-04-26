<?php
    
    require("../Model/16pf.php");

    $a=$_GET["codeA"];
    $ap=$_GET["codeP"];
    $an=$_GET["codeN"];
    $id=$_GET["code"];

    $editQ = new Question16PF();
    //$a = $_GET["grob"];
    $editQ->editQuestion16PF($id, $_POST["question"], $_POST["c1"], $_POST["c2"], $_POST["c3"]);

    echo "<script>window.location='../pages/index.php';</script>";

?>
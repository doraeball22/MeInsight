<?php
    
    require("../Model/16pf.php");

    $delete = new Question16PF();
    //$a = $_GET["grob"];
    $delete->deleteQuestion16PF($_GET["code"]);

    echo "<script>window.location='../pages/index.php';</script>";

?>
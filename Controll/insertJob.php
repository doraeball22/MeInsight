<?php
    
    require("../Model/job.php");

    $insert = new Job();
    //echo $_GET["code"];
    $a = $_GET["code"];
    $insert->insertJob($_POST["job_name"],$_GET["code"]);

    echo "<script>window.location='../pages/job_page.php?code=$a';</script>";



?>
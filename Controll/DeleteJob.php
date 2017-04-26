<?php
    
    require("../Model/job.php");

    $delete = new Job();
    $a = $_GET["grob"];
    $delete->deleteJob($_GET["code"]);

    echo "<script>window.location='../pages/job_page.php?code=$a';</script>";

?>
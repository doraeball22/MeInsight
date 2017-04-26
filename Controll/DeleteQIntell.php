<?php
    
    require("../Model/intell.php");

    $delete = new Intell();
    $a = $_GET["grob"];
    $delete->deleteQIntell($_GET["code"]);

    echo "<script>window.location='../pages/Intell_page.php?code=$a';</script>";

?>
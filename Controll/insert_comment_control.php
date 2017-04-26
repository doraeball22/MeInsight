<?php
    
    require("../Model/comment.php");

    $insert = new Comment();
    //echo $_GET["code"];
    $a = $_GET["code"];
    $insert->insertComment($_POST["comment"],$_GET["code"]);

    echo "<script>window.location='../pages/comment_page.php?code=$a';</script>";



?>
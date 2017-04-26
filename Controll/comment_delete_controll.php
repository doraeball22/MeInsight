<?php
    
    require("../Model/comment.php");

    $delete = new Comment();
    //echo $_GET["code"];
    $a = $_GET["code"];
    $delete->deleteComment($_GET["id"]);

    echo "<script>window.location='../pages/comment_page.php?code=$a';</script>";



?>
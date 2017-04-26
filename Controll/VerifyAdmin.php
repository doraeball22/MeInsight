<!DOCTYPE html>
<html>

<head>
    <?php include("../pages/header.php"); ?>
</head>
<body>
<?php

    require("../Model/Admin.php");

    $ID = $_POST['id'];
    $Password = $_POST['password'];

    $adminlogin = new Admin();
    $admin = $adminlogin->verifyAdmin($ID, $Password);
    
    if($admin) {
        ob_start();
        session_start();
        $_SESSION["admin"]=$admin;
        echo "<script>window.location='../pages/index.php';</script>";

    } else  {
        $message = "เข้าสู่ระบบผิดพลาด กรุณาตรวจสอบความถูกต้องชื่อผู้ใช้ และรหัสผ่านของคุณ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location='../pages/login.php';</script>";
    }

?>
</body>
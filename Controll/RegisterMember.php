<!DOCTYPE html>
<html>

<head>
    <?php include("../View/pages/Header.php"); ?>
</head>
<body>
<?php
    $ID = $_POST['id'];
    $Password = $_POST['pass'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    require("../Model/Member.php");

    $newMember = new Member();

    $checkID = $newMember->selectMember($ID);

    if($checkID) {
        $message = "ID นี้มีอยู่แล้ว กรุณาใช้ ID ใหม่";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location='../View/pages/UIRegisterMember.php';</script>";
    } else  {
        $newMember->addMember($ID, $Password, $fname, $lname, $phone, $email, $address);
        $message = "สมัครสมาชิคสำเร็จ ลงชื่อเข้าใช้";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>window.location='../View/pages/UILogin.php';</script>";
    }

?>
</body>
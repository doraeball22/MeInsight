<?php
    class Admin
    {

        public function verifyAdmin($id, $pass){
                include("ConnectDatabase.php");
                $sqlVerify = "SELECT `username`, `password`, `firstname`, `lastname`, `email` FROM `administrator` WHERE `username`='$id' AND `password`='$pass'";
                $result = $dbconnect->query($sqlVerify);
                $admin = $result->fetch_assoc();
                $dbconnect->close();
                return $admin;

        }
    }

?>
<?php
    class Comment
    {

        public function sertComment($group){
                include("ConnectDatabase.php");
                $sql_sert = "SELECT `comment_id`, `comment_text`, `owner`,`test_name` FROM `comment` WHERE `test_name`='$group'";
                $result = $dbconnect->query($sql_sert);
                return $result;

        }

       public function deleteComment($ID){
                include("ConnectDatabase.php");
                $sqldelete = "DELETE FROM `comment` WHERE `comment_id` = $ID";
                $result = $dbconnect->query($sqldelete);
                $dbconnect->close();
        }

        public function insertComment($text, $group){
                include("ConnectDatabase.php");
                $sqlInsert= "INSERT INTO `comment` (`comment_id`, `comment_text`, `owner`, `test_name`) VALUES (NULL, '$text', 'Admin', '$group');";
                $result = $dbconnect->query($sqlInsert);
                $dbconnect->close();
        }

    }

?>
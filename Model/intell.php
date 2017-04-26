<?php
    class Intell
    {

        public function sertQIntell($group){
                include("ConnectDatabase.php");
                $sql_sert = "SELECT `q_Intel_id`, `question`, `intell`, `score_yes`, `score_no` FROM `question_intel` WHERE `intell`='$group'";
                $result = $dbconnect->query($sql_sert);
                return $result;

        }

        public function deleteQIntell($ID){
                include("ConnectDatabase.php");
                $sqldelete = "DELETE FROM `question_intel` WHERE `q_Intel_id` = $ID";
                $result = $dbconnect->query($sqldelete);
                $dbconnect->close();
        }

        public function insertQIntell($q, $sy, $sn, $group){
                include("ConnectDatabase.php");
                $sqlInsert= "INSERT INTO `question_intel` (`q_Intel_id`, `question`, `intell`, `score_yes`, `score_no`) VALUES (NULL, '$q', '$group', '$sy', '$sn');";
                $result = $dbconnect->query($sqlInsert);
                $dbconnect->close();
        }

        public function editQIntell($q, $sy, $sn, $id){
                include("ConnectDatabase.php");
                $sqlInsert= "UPDATE `question_intel` SET `question` = '$q', `score_yes` = '$sy', `score_no` = '$sn' WHERE `question_intel`.`q_Intel_id` = '$id';";
                $result = $dbconnect->query($sqlInsert);
                $dbconnect->close();
        }


    }

?>
<?php
    class Question16PF
    {

        public function sertQuestion16PF($group){
                include("ConnectDatabase.php");
                $sql_sert = "SELECT `q_16pf_id`, `question`, `choice1`, `choice2`, `choice3`, `pers_type`, `Positive`, `negative` FROM `question_16pf` WHERE `pers_type`='$group'";
                $result = $dbconnect->query($sql_sert);
                return $result;

        }

        public function deleteQuestion16PF($ID){
                include("ConnectDatabase.php");
                $sqldelete = "DELETE FROM `question_16pf` WHERE `q_16pf_id` = $ID";
                $result = $dbconnect->query($sqldelete);
                $dbconnect->close();
        }

        public function insertQuestion16PF($q, $c1, $c2, $c3, $group, $p, $n){
                include("ConnectDatabase.php");
                $sqlInsert= "INSERT INTO `question_16pf` (`q_16pf_id`, `question`, `choice1`, `choice2`, `choice3`, `pers_type`, `positive`, `negative`) VALUES (NULL, '$q', '$c1', '$c2', '$c3', '$group', '$p', '$n');";
                $result = $dbconnect->query($sqlInsert);
                $dbconnect->close();
        }

        public function editQuestion16PF($id, $q, $c1, $c2, $c3){
                include("ConnectDatabase.php");
                $sqlInsert= "UPDATE `question_16pf` SET `question` = '$q', `choice1` = '$c1', `choice2` = '$c2', `choice3` = '$c3' WHERE `question_16pf`.`q_16pf_id` = '$id';";
                $result = $dbconnect->query($sqlInsert);
                $dbconnect->close();
        }


    }

?>
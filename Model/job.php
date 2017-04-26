<?php
    class Job
    {

        public function sertJob($group){
                include("ConnectDatabase.php");
                $sqlJob = "SELECT `job_id`, `job`, `job_group` FROM `job`WHERE `job_group`='$group'";
                $result = $dbconnect->query($sqlJob);
                return $result;

        }

        public function deleteJob($ID){
                include("ConnectDatabase.php");
                $sqldelete = "DELETE FROM `job` WHERE `job_id` = $ID";
                $result = $dbconnect->query($sqldelete);
                $dbconnect->close();
        }

        public function insertJob($jname, $group){
                include("ConnectDatabase.php");
                $sqlInsertJob = "INSERT INTO `job` (`job_id`, `job`, `job_group`) VALUES (NULL, '$jname', '$group')";
                $result = $dbconnect->query($sqlInsertJob);
                $dbconnect->close();
        }


    }

?>
<?php 
    
    //session_start();
    //$member = $_SESSION["member"];

    require("../Model/job.php");

    $job = new Job();
    //echo $_GET["code"];
    $a=$_GET["code"];
    $jobInfo = $job->sertJob($_GET["code"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("header.php"); ?>
</head>

<body>

    <div id="wrapper">
        <?php include("menu.php"); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">แบบทดสอบความสนใจในอาชีพ</h1>
                </div>
                <!-- /.col-lg-12 -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$a?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                    if($jobInfo->num_rows > 0){
                                ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่ออาชีพ</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $n=1;
                                        while($Listjob = $jobInfo->fetch_assoc()){
                                    ?> 
                                        <tr>
                                            <td><?=$n?></td>
                                            <td><?=$Listjob['job']?></td>
                                            <td>
                                                <form action = "../Controll/DeleteJob.php?grob=<?=$a?>&code=<?=$Listjob['job_id']?>" method="post">
                                                    <button type="submit" class="btn btn-danger" name="key" ><i class="fa fa-trash-o"> ลบ</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                        $n++;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                                <?php
                                    }
                                ?>
                                <a href="job_insert_page.php?code=<?=$_GET["code"]?>" class="btn btn-success">เพิ่มอาชีพ</a>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

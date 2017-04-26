<?php 

    //require("../Model/job.php");

    //$job = new Job();
    $a=$_GET["code"];
    //$jobInfo = $job->sertJob($_GET["code"]);
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
                    <h1 class="page-header">แบบทดสอบความถนัด</h1>
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
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ข้อที่</th>
                                            <th>คำถาม</th>
                                            <th>ใช่</th>
                                            <th>ไม่</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ฉันสามารถพูดได้อย่างคล่องแคล่ว</td>
                                            <td>+1</td>
                                            <td>-1</td>
                                            <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ฉันชอบเขียนบันทึกประจำวันหรือสิ่งต่างๆ ที่ฉันพบเจอ</td>
                                            <td>+1</td>
                                            <td>-1</td>
                                            <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>ฉันสามารถฟังจับใจความสำคัญได้อย่างรวดเร็ว</td>
                                            <td>+1</td>
                                            <td>-1</td>
                                            <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>ฉันสามารถเลือกใช้คำได้อย่างเหมาะสมกับสถานการณ์</td>
                                            <td>+1</td>
                                            <td>-1</td>
                                            <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>ฉันถนัดในการเขียนเรียงความ</td>
                                            <td>+1</td>
                                            <td>-1</td>
                                            <td><button type="button" class="btn btn-warning">แก้ไข</button></td>
                                            <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-success">เพิ่มโจทย์</button>
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

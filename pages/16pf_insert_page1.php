<?php 

    $a=$_GET["codeA"];
    $ap=$_GET["codeP"];
    $an=$_GET["codeN"];

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
                <div class="col-lg-10">
                    <h2 class="page-header">เพิ่มแบบทดสอบบุคลิกภาพ 16 PF</h2>
                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            องค์ประกอบ <?=$a?> : <?=$ap?> หรือ <?=$an?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action = "../Controll/16pf_insert_controll1.php?codeA=<?=$a?>&codeP=<?=$ap?>&codeN=<?=$an?>" method="post">
                                <div class="table-responsive">
                                    <div class="form-group">
                                        <label>คำถาม</label>
                                        <textarea name="question" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>1. ตัวเลือกด้านบวก</label>
                                        <textarea name="c1" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>2. ตัวเลือกด้านลบ</label>
                                        <textarea name="c2" class="form-control" rows="1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>3. ตัวเลือกเป็นกลาง</label>
                                        <textarea name="c3" class="form-control" rows="1"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">เพิ่ม</button>
                                </div>
                            </form>
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

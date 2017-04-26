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
                    <h2 class="page-header">เพิ่มโจทย์แบบทดสอบความถนัด</h2>
                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?=$_GET["code"]?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action = "../Controll/insert_Intell_controll.php?code=<?=$_GET["code"]?>" method="post">
                                    <div class="form-group">
                                        <label>โจทย์</label>
                                        <textarea class="form-control" rows="3" name="question"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>คะแนนเมื่อตอบใช่</label>
                                        <div class="col-lg-2">
                                            <select name="sy" class="form-control">
                                                <option value="1">+1</option>
                                                <option value="-1">-1</option>
                                            </select>
                                        </div>
                                    </div><br/>
                                    <div class="form-group">
                                        <label>คะแนนเมื่อตอบไม่</label>
                                        <div class="col-lg-2">
                                            <select name="sn" class="form-control">
                                                <option value="-1">-1</option>
                                                <option value="1">+1</option>
                                            </select>
                                        </div>
                                    </div><br/>
                                    <button type="submit" class="btn btn-success">บันทึก</button>
                                </form>
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

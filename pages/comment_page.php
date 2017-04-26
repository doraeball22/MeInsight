<?php 

    require("../Model/comment.php");

    $comm = new Comment();
    $a=$_GET["code"];
    $commInfo = $comm->sertComment($a);
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
                    <h2 class="page-header">ความคิดเห็นต่อแบบทดสอบ <?=$a?></h2>
                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                                if($commInfo->num_rows > 0){
                                    $n=1;
                                    while($ListComm = $commInfo->fetch_assoc()){
                            ?>
                                <div class="well">
                                    <h4>ความคิดเห็นที่ <?=$n?></h4>
                                    <p><?=$ListComm['comment_text']?></p>
                                    <div class="panel-footer"><strong><?=$ListComm['owner']?></strong>
                                        <form action = "../Controll/comment_delete_controll.php?code=<?=$_GET["code"]?>&id=<?=$ListComm['comment_id']?>" method="post">
                                            <button type="submit" class="btn btn-danger btn-xs" name="key" ><i class="fa fa-trash-o"> ลบ</i></button>
                                        </form>
                                    </div>

                                </div>
                            <?php
                                    $n++;
                                    }
                                }
                            ?>
                                <form action = "../Controll/insert_comment_control.php?code=<?=$_GET["code"]?>" method="post">
                                    <div class="form-group">
                                        <label>เขียนความคิดเห็น</label>
                                        <textarea class="form-control" rows="3" name="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">ส่ง</button>
                                </form>
                                </div>
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

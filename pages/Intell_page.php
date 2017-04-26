<?php 

    require("../Model/intell.php");

    $intell = new Intell();
    $a=$_GET["code"];
    $intellInfo = $intell->sertQIntell($a);
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
                    <h1 class="page-header">แบบทดสอบพหุปัญญา</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ปัญญาด้าน<?=$a?>
                        </div>
                        <?php
                            if($intellInfo->num_rows > 0){
                        ?>
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
                                        <?php
                                            $n=1;
                                            while($ListQIntell = $intellInfo->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?=$n?></td>
                                            <td><?=$ListQIntell['question']?></td>
                                            <td><?=$ListQIntell['score_yes']?></td>
                                            <td><?=$ListQIntell['score_no']?></td>
                                            <td>
                                                <form action = "intell_edit_page.php?q=<?=$ListQIntell['question']?>&group=<?=$a?>&code=<?=$ListQIntell['q_Intel_id']?>" method="post">
                                                    <button type="submit" class="btn btn-warning">แก้ไข</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action = "../Controll/DeleteQIntell.php?grob=<?=$a?>&code=<?=$ListQIntell['q_Intel_id']?>" method="post">
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
                                <a href="intell_insert_page.php?code=<?=$_GET["code"]?>" class="btn btn-success">เพิ่มโจทย์</a>
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

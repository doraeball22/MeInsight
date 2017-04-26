<?php 

    require("../Model/16pf.php");

    $Q16pf = new Question16PF();
    $a="A";
    $ap="เข้าสังคม";
    $an="เก็บตัว";
    $Q16pfInfo = $Q16pf->sertQuestion16PF($a);
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
                    <h2 class="page-header">แบบทดสอบบุคลิกภาพ 16 PF</h2>
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
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ข้อที่</th>
                                            <th>คำถาม</th>
                                            <th>ตัวเลือกด้านบวก (+)</th>
                                            <th>ตัวเลือกด้านลบ (-)</th>
                                            <th>ตัวเลือกเป็นกลาง (0)</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($Q16pfInfo->num_rows > 0){
                                            $n=1;
                                            while($ListQ16pf = $Q16pfInfo->fetch_assoc()){
                                    ?>
                                        <tr>
                                            <td><?=$n?></td>
                                            <td><?=$ListQ16pf['question']?></td>
                                            <td><?=$ListQ16pf['choice1']?></td>
                                            <td><?=$ListQ16pf['choice2']?></td>
                                            <td><?=$ListQ16pf['choice3']?></td>
                                            <td>
                                                <form action = "16pf_edit_page1.php?codeA=<?=$a?>&codeP=<?=$ap?>&codeN=<?=$an?>&q=<?=$ListQ16pf['question']?>&c1=<?=$ListQ16pf['choice1']?>&c2=<?=$ListQ16pf['choice2']?>&c3=<?=$ListQ16pf['choice1']?>&code=<?=$ListQ16pf['q_16pf_id']?>" method="post">
                                                    <button type="submit" class="btn btn-warning">แก้ไข</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action = "../Controll/16pf_delete_controll1.php?grob=<?=$a?>&code=<?=$ListQ16pf['q_16pf_id']?>" method="post">
                                                    <button type="submit" class="btn btn-danger" name="key" ><i class="fa fa-trash-o"> ลบ</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                                <a href="16pf_insert_page1.php?codeA=<?=$a?>&codeP=<?=$ap?>&codeN=<?=$an?>" class="btn btn-success">เพิ่มโจทย์</a>
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

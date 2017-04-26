<?php
     //header ("location : http://www.google.com");
     //exit(0);
    session_start();
    $Admin = $_SESSION["admin"];
    //echo $Admin['firstname'];


?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        แบบทดสอบบุคคิลกภาพ 16 PF <i class="fa fa-edit fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="index.php">
                                <div>
                                    <strong>องค์ประกอบ A</strong>
                                </div>
                                <div>สังคม (A+) <br> เก็บตัว (A-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=B&codeP=เชิงนามธรรม&codeN=เชิงรูปธรรม">
                                <div>
                                    <strong>องค์ประกอบ B</strong>
                                </div>
                                <div>เชิงนามธรรม (B+) <br> เชิงรูปธรรม (B-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=C&codeP=มีวุฒิภาวะทางอารมณ์&codeN=อารมณ์อ่อนไหว">
                                <div>
                                    <strong>องค์ประกอบ C</strong>
                                </div>
                                <div>มีวุฒิภาวะทางอารมณ์ (C+) <br> อารมณ์อ่อนไหว (C-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=E&codeP=ใช้อำนาจ&codeN=ใช้อำนาจ">
                                <div>
                                    <strong>องค์ประกอบ E </strong>
                                </div>
                                <div>ใช้อำนาจ (E+) <br> ถ่อมตน (E-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=F&codeP=ความกระตือรือร้น&codeN=สุขุมรอบคอบ">
                                <div>
                                    <strong>องค์ประกอบ F</strong>
                                </div>
                                <div>ความกระตือรือร้น (F+)  <br> สุขุมรอบคอบ (F-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=G&codeP=มีมโนธรรม&codeN=ทำตามใจตนเอง">
                                <div>
                                    <strong>องค์ประกอบ G</strong>
                                </div>
                                <div>มีมโนธรรม (G+) <br> ทำตามใจตนเอง (G-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=H&codeP=กล้าหาญ&codeN=ความอาย">
                                <div>
                                    <strong>องค์ประกอบ H</strong>
                                </div>
                                <div>กล้าหาญ (H+) <br> ความอาย (H-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=I&codeP=จิตใจอ่อนโยน&codeN=จิตใจเข้มแข็ง">
                                <div>
                                    <strong>องค์ประกอบ I</strong>
                                </div>
                                <div>จิตใจอ่อนโยน (I+) <br> จิตใจเข้มแข็ง (I-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=L&codeP=ช่างสงสัย&codeN=ไว้วางใจ.php">
                                <div>
                                    <strong>องค์ประกอบ L</strong>
                                </div>
                                <div>ช่างสงสัย (L+) <br> ไว้วางใจ (L-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=M&codeP=ช่างจินตนาการ&codeN=ลงมือปฏิบัติ">
                                <div>
                                    <strong>องค์ประกอบ M</strong>
                                </div>
                                <div>ช่างจินตนาการ (M+) <br> ลงมือปฏิบัติ (M-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=N&codeP=มีเล่ห์เหลี่ยม&codeN=จริงใจเปิดเผย">
                                <div>
                                    <strong>องค์ประกอบ N</strong>
                                </div>
                                <div>มีเล่ห์เหลี่ยม (N+) <br> จริงใจเปิดเผย (N+)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=O&codeP=จิตใจวิตกกังวล&codeN=จิตใจสงบมั่นคง">
                                <div>
                                    <strong>องค์ประกอบ O</strong>
                                </div>
                                <div>จิตใจวิตกกังวล (O+) <br> จิตใจสงบมั่นคง (O-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=Q1&codeP=ชอบทดลองสิ่งใหม่&codeN=อนุรักษ์นิยม">
                                <div>
                                    <strong>องค์ประกอบ Q1</strong>
                                </div>
                                <div>ชอบทดลองสิ่งใหม่ (Q1+)<br> อนุรักษ์นิยม (Q1-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=Q2&codeP=พึ่งตนเอง&codeN=พึ่งกลุ่ม.php">
                                <div>
                                    <strong>องค์ประกอบ Q2</strong>
                                </div>
                                <div>พึ่งตนเอง (Q2+) <br> พึ่งกลุ่ม (Q2-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=Q3&codeP=ควบคุมตนเองได้&codeN=ไม่มีวินัย">
                                <div>
                                    <strong>องค์ประกอบ Q3</strong>
                                </div>
                                <div>ควบคุมตนเองได้ (Q3+) <br> ไม่มีวินัย (Q3-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="16pf_page.php?codeA=Q4&codeP=ความเครียดว้าวุ่นใจ&codeN=ผ่อนคลาย.php">
                                <div>
                                    <strong>องค์ประกอบ Q4</strong>
                                </div>
                                <div>ความเครียดว้าวุ่นใจ (Q4+) <br> ผ่อนคลาย (Q4-)</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        แบบทดสอบความสนใจในอาชีพ <i class="fa fa-edit fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="job_page.php?code=กลุ่มอาชีพทางธุระกิจ">
                                <div>
                                    <strong>กลุ่มอาชีพทางธุระกิจ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=การก่อสร้าง และอุตสาหกรรมการผลิต">
                                <div>
                                    <strong>การก่อสร้าง และอุตสาหกรรมการผลิต</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=การศึกษา">
                                <div>
                                    <strong>การศึกษา</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=งานราชการและองค์กรไม่หวังผลกำไร">
                                <div>
                                    <strong>งานราชการและองค์กรไม่หวังผลกำไร</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=แวดวงสุขภาพ">
                                <div>
                                    <strong>แวดวงสุขภาพ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=เทคโนโลยีและสารสนเทศ">
                                <div>
                                    <strong>เทคโนโลยีและสารสนเทศ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=ศิลปะ บันเทิง และวรรณกรรม">
                                <div>
                                    <strong>ศิลปะ บันเทิง และวรรณกรรม</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=วิศวกรรม วิทยาศาสตร์ในอุตสาหกรรม">
                                <div>
                                    <strong>วิศวกรรม วิทยาศาสตร์ในอุตสาหกรรม</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=ธุรกิจบริการ">
                                <div>
                                    <strong>ธุรกิจบริการ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=แวดวงจิตวิญญาณ">
                                <div>
                                    <strong>แวดวงจิตวิญญาณ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=อาชีพในเครื่องแบบ">
                                <div>
                                    <strong>อาชีพในเครื่องแบบ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="job_page.php?code=แวดวงอื่นๆ">
                                <div>
                                    <strong>แวดวงอื่นๆ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        แบบทดสอบพหุปัญญา <i class="fa fa-edit fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="Intell_page.php?code=ภาษา">
                                <div>
                                    <strong>ด้านที่ 1 ภาษา</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Intell_page.php?code=ตรรกศาสตร์และคณิตศาสตร์">
                                <div>
                                    <strong>ด้านที่ 2 ตรรกศาสตร์และคณิตศาสตร์</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Intell_page.php?code=มิติสัมพันธ์">
                                <div>
                                    <strong>ด้านที่ 3 มิติสัมพันธ์</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Intell_page.php?code=ร่างกายและการเคลื่อนไหว">
                                <div>
                                    <strong>ด้านที่ 4 ร่างกายและการเคลื่อนไหว</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Intell_page.php?code=ดนตรี">
                                <div>
                                    <strong>ด้านที่ 5 ดนตรี</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Intell_page.php?code=มนุษยสัมพันธ์">
                                <div>
                                    <strong>ด้านที่ 6 มนุษยสัมพันธ์</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Intell_page.php?code=การเข้าใจตนเอง">
                                <div>
                                    <strong>ด้านที่ 7 การเข้าใจตนเอง</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Intell_page.php?code=ธรรมชาติวิทยา">
                                <div>
                                    <strong>ด้านที่ 8 ธรรมชาติวิทยา</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        ความคิดเห็นต่อแบบทดสอบ <i class="fa fa-comments-o fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="comment_page.php?code=บุคลิกภาพ16PF">
                                <div>
                                    <strong>ความคิดเห็นต่อแบบทดสอบ 16PF</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="comment_page.php?code=ความสนใจในอาชีพ">
                                <div>
                                    <strong>ความคิดเห็นต่อแบบทดสอบความสนใจในอาชีพ</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="comment_page.php?code=พหุปัญญา">
                                <div>
                                    <strong>ความคิดเห็นต่อแบบทดสอบพหุปัญญา</strong>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?=$Admin['firstname'];?> <?=$Admin['lastname'];?><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../Controll/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>
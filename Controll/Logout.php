<?php
   session_start();
   session_unset(); // ลบตัวแปรทั้งหมด
   session_destroy();
?>

<!DOCTYPE html>
<html>
<head>


    <script language="javascript">
        window.location.href = "../pages/login.php"
    </script>
</head>
<body>
    Go to <a href="../pages/login.php">../pages/login.php</a>
</body>
</html>

<?php
   exit;
?>

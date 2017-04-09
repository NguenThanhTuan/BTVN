<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thoát</title>
</head>

<body>
    <?php
    $_SESSION=array();
    session_destroy();
    ?>
    <script>
        alert("Ban da thoat thanh cong");
    </script>
    <?php
        header('Location:/index.php');
    ?>
</body>
</html>

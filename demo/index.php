<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web bán nội thất</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body bgcolor="#F3F3F3">
    <div class="body">
        <div class="banner">
            <img src="images/banner.jpg" width="100%" height="auto"/>
        </div>
        <div class="hearder">
            <?php include("header.php");?>
        </div>
        <div class="wapper">
            <?php 
            if(isset($_SESSION['mess'])&&$_SESSION['mess']!="")
            {
                ?>
                <div class='message' id='message'><h3>Thông báo</h3><a onclick="jQuery('#message').css('display','none')" href="javascript:void()">X</a><span><?php echo $_SESSION['mess'];?></span></div>
                <?php
                unset($_SESSION['mess']);
            }
            ?>
            <div class="wleft"><?php include("theleft.php");?></div>
            <div class="wright"><?php include("themain.php");?></div>
            <div class="fter"><?php include("footer.php");?></div>
        </div>
    </div>
</body>
</html>

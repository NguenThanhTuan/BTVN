<?php
    require("dbconnect.inc");
?>
<div id="menu">
    <ul class="main">
        <li><a href="index.php"><b>Trang chủ</b></a></li>
        <?php
        if(!isset($_SESSION['username']))
        {
            ?>
            <li><div align="center"><a href="dangnhap.html"><b>Đăng nhập</b></a></div></li>
            <li><div align="center"><a href="dangky.html"><b>Đăng ký</b></a></div></li>
            <?php
        }
        else
        {
            ?>
            <li><div align="center"><a href="thoat.html"><b>Thoát</b></a></div></li>
            <?php
            if (!isset($_SESSION['loginadmin'])) 
            {
                ?>
                <li>
                    <div align="center">
                        <a href="gio-hang.html">
                            <b>Giỏ hàng</b> - 
                            <i><?php if(isset($_SESSION["hang"])){echo count($_SESSION["hang"]);} ?></i> SP
                        </a>
                    </div>
                </li>
                <li><div align="center"><a href="don-hang.html"><b>Đơn hàng</b></a></div></li>
                <?php
            }
            ?>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['loginadmin'])) 
        {
            ?>
            <li><div align="center"><a href="themsanpham.html"><b>Thêm SP</b></a></div></li>
            <li><div align="center"><a href="quanly-danhmuc.html"><b>Danh Mục</b></a></li>
            <li><div align="center"><a href="quanly-sanpham.html"><b>Sản Phẩm</b></a></li>
            <li><div align="center"><a href="don-hang-admin.html"><b>Đơn Hàng</b></a></li>
            <?php
        }
        ?>
    </ul>
    <?php include("timkiem.php"); ?>
</div>
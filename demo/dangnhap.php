<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
</head>
<body>
    <?php 
    if(isset($_POST['Submit']))
    {
        if(strlen($_POST['txtuser'])>0)
        {
            $u=$_POST['txtuser'];
        }
        else
        {
            ?>
            <script>
                alert("Bạn chưa nhập Username");
            </script>
            <?php
        }
        if(strlen($_POST['txtpass'])>0)
        {
            $p=$_POST['txtpass'];
        }
        else
        {
            ?>
            <script>
                alert("Bạn chưa nhập password");
            </script>
            <?php
        }
        if($u&&$p)
        {
            require("dbconnect.inc");
            $sql= "select username from thanhvien where (username='$u' && password=MD5('$p'))";
            $result=mysql_query($sql,$link);
            if(mysql_num_rows($result)==0)
            {
                ?>
                <script>
                    alert("Sai tên đăng nhập hoặc mật khẩu");
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("Đăng nhập thành công");
                </script>
                <?php
                header('Location:/index.php');
                $_SESSION['username']= $u;
                $_SESSION['password']= $p;
                exit();
            }
        } 
    }
    ?>
    <form id="form1" name="form1" method="post" action="">
        <div class="log-ad" align="center">
            <table border="0">
                <tr>
                    <td><b>Username</b></td>
                    <td>
                        <input type="text" name="txtuser" required autofocus>
                    </td>
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input type="password" name="txtpass" required autofocus></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="button-red muatiep"  name="Submit" value="Đăng nhập">
                    </td>
                    <td>
                        <input type="reset" class="button-res" name="res" value="Reset">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>

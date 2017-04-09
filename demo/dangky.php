<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
    <style type="text/css">
        <!--
        .style1 {color: #FF0000}
    -->
</style>
</head>

<body>
    <?php
    if(isset($_POST['Submit']))
    {
        if(strlen($_POST['txtname'])>0)
        {
            $hoten=true;
        }
        else
        {
            $hoten=false;
            ?>
            <script>
                alert("Ban chua nhap ho ten");
            </script>
            <?php
        }
        
        if(strlen($_POST['txtuser'])>0)
        {
            $username=true;
        }
        else
        {
            $username=false;
            ?>
            <script>
                alert("Ban chua nhap user");
            </script>
            <?php
        }
        if(strlen($_POST['txtphone'])>0)
        {
            $dienthoai=true;
        }
        else
        {
            $dienthoai=false;
            ?>
            <script>
                alert("Ban chua nhap so dien thoai");
            </script>
            <?php
        }
        if(strlen($_POST['txtpass'])>0)
        {
            $password=true;
        }
        else
        {
            $password=false;
            ?>
            <script>
                alert("Ban chua nhap password");
            </script>
            <?php
        }
        if($hoten&&$username&&$password&&$dienthoai)
        {
            require("dbconnect.inc");
            $u=$_POST['txtuser'];
            $p=$_POST['txtpass'];
            $sql= "select username from thanhvien where username='$u'";
            $result=mysql_query($sql,$link);
            if(mysql_num_rows($result)==0)
            {
                $n=$_POST['txtname'];
                $nam=$_POST['selectnam'];
                $thang=$_POST['selectthang'];
                $ngay=$_POST['selectngay'];
                $q=$_POST['selectque'];
                $dt=$_POST['txtphone'];
                $sql1="insert into thanhvien(hoten,ngaysinh,quequan,dienthoai,username,password) 
                values('$n',concat('$nam','-','$thang','-','$ngay'),'$q','$dt','$u',MD5('$p'))";                                       
                $result1=mysql_query($sql1,$link);
                if(mysql_affected_rows()==1)
                {
                    ?>
                    <script>
                        alert("Đăng ký thành công");
                    </script>
                    <?php  
                    header('Location:/index.php?action=1'); 
                    exit();
                }
                else
                {
                    ?>
                    <script>
                        alert("Lỗi đăng ký");
                    </script>
                    <?php
                }
            }
            else
            {
                ?>
                <script>
                    alert("Username đã có người đăng ký");
                </script>
                <?php
            }
        }
    }
    ?>
    <div align="center">Đăng kí </div>
    <form id="form1" name="form1" method="post" action="">
        <div align="center">
            <table width="352" border="1">
                <tr>
                    <td width="112">Họ tên </td>
                    <td width="224">
                        <div align="left">
                            <input type="text" name="txtname">
                            <span class="style1">*</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh </td>
                    <td>
                        <div align="left">
                            <select name="selectnam">
                                <option>Năm</option>
                                <?php 
                                $i=1980;
                                while($i<2020)
                                {
                                    ?>
                                    <option><?php echo "$i";?></option>
                                    <?php 
                                    $i++;
                                }
                                ?>
                            </select>
                            <select name="selectthang">
                                <option>Tháng</option>
                                <?php 
                                $i=1;
                                while($i<13)
                                {
                                    ?>
                                    <option><?php echo "$i";?></option>
                                    <?php 
                                    $i++;
                                }
                                ?>
                            </select>
                            <select name="selectngay">
                                <option>Ngày</option>
                                <?php 
                                $i=1;
                                while($i<32)
                                {
                                    ?>
                                    <option><?php echo "$i";?></option>
                                    <?php 
                                    $i++;
                                }
                                ?>
                            </select>
                            <span class="style1">*</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Quê quán </td>
                    <td>
                        <div align="left">
                            <textarea name="selectque" cols="30" rows="5"></textarea>
                            <span class="style1">*</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Điện thoại </td>
                    <td>
                        <div align="left">
                            <input type="text" name="txtphone">
                            <span class="style1">*</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <div align="left">
                            <input type="text" name="txtuser">
                            <span class="style1">*</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <div align="left">
                            <input type="password" name="txtpass">
                            <span class="style1">*</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="Submit" value="Đăng ký">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>


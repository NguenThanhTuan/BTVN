<?php 
    if(isset($_GET['xoa']))
    {
        include('dbconnect.inc');
        $mahang=$_GET['xoa'];
        $sql="delete from sanpham where mahang='$mahang'";
        $result=mysql_query($sql);
    
        if($result)
        {
?>
            <script>
                alert("Xóa thành công");
            </script>   
        <?php
        header('Location:/index.php?action=10');
        }
        else
        {
        ?>
            <script>
                alert("Xóa thất bại");
            </script>   
        <?php
        header('Location:/index.php');   
        }
    }
    ?>
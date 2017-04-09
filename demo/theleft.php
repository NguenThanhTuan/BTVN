<?php 
require("dbconnect.inc");
$sql= "select * from loaisp";
$result= mysql_query($sql);
?>
<div class="leftwapper">
    <h2><a href="/">Danh Mục Sản Phẩm</a></h2>
    <ul class="menu_cate">
        <?php
        while($rows=mysql_fetch_array($result))
        {
            ?>
            <li>
                <a href="danhmuc-<?php echo $rows['maloai'];?>.html"><?php echo $rows['ten'];?></a>     
            </li>
            <?php
        }
        ?>
    </ul>
    <div class="ads"></div>
</div>


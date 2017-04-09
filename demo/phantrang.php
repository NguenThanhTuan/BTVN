<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>

<body>
    <?php
    mysql_connect("localhost","root","thanhtuan95") or die(mysql_error());
    mysql_select_db("banhang") or die(mysql_error());
      $qr=mysql_query("select * from sanpham");
      $n_record=mysql_num_rows($qr);//số bản ghi của bảng
      $p=5;//số bản ghi trong 1 trang
  
    // hàm tính số trang
    function num_page()
    {
        global $n_record;
        global $p;
        if($n_record%$p==0)
        {
          $n_page=$n_record/$p;
          return $n_page;
        }
        else
        {
          $n_page=($n_record-($n_record%$p))/$p+1;
          return $n_page;
        }
    }

    function view_page()
    {
        global $n_record;
        for($i=1;$i<=num_page();$i++)
        {
          echo "<a href='pages.php?n=".$i."'>".$i."</a><";
        }
        echo "<a href='pages.php?n=all'>All</a>";
    }
  
    echo "<br>";
        $n=$HTTP_GET_VARS['n'];//lay bien n tren trinh duyet
        $s=($n-1)*$p; //thu tu cua bang ghi tai trang thu n
        if ($n!='all')
        {
            $qr1=mysql_query("select * from test limit $s,$p") or die (mysql_error());
        }
        else
        {
            $qr1=mysql_query("select * from test");
        }
    //hiển thị bảng
    echo "<table border=1 width=100%>";
    while($row=mysql_fetch_array($qr1))
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    view_page();
    ?> 
</body>
</html>

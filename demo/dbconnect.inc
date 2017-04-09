<?php
$link= mysql_connect("localhost","root","thanhtuan95") or die ("khong the ket noi duoc co so du lieu".mysql_error());
mysql_select_db("demo_",$link) or die ("khong the ket noi duoc co so du lieu".mysql_error());
mysql_query("SET NAMES utf8");
?>
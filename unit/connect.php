<?php
$mysqlserver="localhost";
$mysqlusername = "root";
$mysqlpassword = "";
$mysqldatabasename = "gudang";
$con = mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Error connecting");
mysql_select_db($mysqldatabasename,$con) or die("Cannot Connect to Database");
?>

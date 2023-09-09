<?php
// show all errors and warning
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
include("../connect.php");
$proid=$_POST['nama_brg'];
$itemprice=$_POST['itemprice'];
mysql_query("UPDATE ms_barang SET harga='$itemprice'
WHERE nama_brg='$proid'");
header("location:index1.php");
?>
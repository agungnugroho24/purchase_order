<?php 
// show all errors and warning
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

include('../connect.php');

if (isset($_POST['submit'])){
$nospp=$_POST['nospp'];
$tanggal=$_POST['tanggal'];
$namabrg=$_POST['namabrg'];
$jumlah=$_POST['jumlah'];
$satuan=$_POST['satuan'];
$harga=$_POST['harga'];
$total=$_POST['total'];
$keterangan=$_POST['keterangan'];
							
mysql_query("insert into spp (nospp,tanggal,namabrg,jumlah,satuan,harga,total,keterangan)
 values('$nospp','$tanggal','$namabrg','$jumlah','$satuan','$harga','$total','$keterangan')")or die(mysql_error());
 
header('location:index.php?menu=home');
}
?>	
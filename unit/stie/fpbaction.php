<?php 
// show all errors and warning
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

include('../connect.php');

if (isset($_POST['submit'])){
$tanggal=$_POST['tanggal'];
$nospp=$_POST['nospp'];
$namabrg=$_POST['namabrg'];
$jenis=$_POST['jenis'];
$unit=$_POST['unit'];
$pengguna=$_POST['pengguna'];
$penanggung_jawab=$_POST['penanggung_jawab'];
						
mysql_query("insert into fpb (nospp,tanggal,namabrg,jenis,unit,pengguna,penanggung_jawab)
 values('$nospp','$tanggal','$namabrg','$jenis','$unit','$pengguna','$penanggung_jawab')")or die(mysql_error());
 
header('location:index.php?menu=home');
}
?>	
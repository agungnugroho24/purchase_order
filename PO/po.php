<?php 
include('../connect.php');
if (isset($_POST['submit'])){
$nopo=$_POST['nopo'];
$jurusan=$_POST['jurusan'];
$date=$_POST['date'];
$deldate=$_POST['deldate'];
$npwp=$_POST['npwp'];
$sppno=$_POST['sppno'];
$sppdate=$_POST['sppdate'];
$supplier=$_POST['supplier'];
$alamat=$_POST['alamat'];
$description=$_POST['description'];
$qty=$_POST['qty'];
$unit=$_POST['unit'];
$price=$_POST['price'];
$amount=$_POST['amount'];
$subtotal=$_POST['subtotal'];
$generaltotal=$_POST['generaltotal'];
$keterangan=$_POST['keterangan'];
$bilangan=$_POST['bilangan'];							
mysql_query("insert into po (nopo,jurusan,date,deldate,npwp,sppno,sppdate,supplier,alamat,description,qty,unit,price,amount,subtotal,generaltotal,keterangan,bilangan)
 values('$nopo','$jurusan','$date','$deldate','$npwp','$sppno','$sppdate','$supplier','$alamat','$description','$qty','$unit','$price','$amount','$subtotal','$generaltotal','$keterangan','$bilangan')")or die(mysql_error());
 
 
header('location:index1.php?menu=home');
}
?>	
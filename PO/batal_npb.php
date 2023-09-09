<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='3')
{

$id=$_GET['id'];

$query=mysql_query("DELETE FROM trx_barang WHERE id_pesan = '$id'");
$query1=mysql_query("SELECT dari FROM pesan WHERE id_pesan='$id'") or die(mysql_error());
$data=mysql_fetch_array($query1);
$kepada_3=$data['dari'];

$query2=mysql_query("UPDATE pesan set kepada_3='$kepada_3',acc='N' WHERE id_pesan='$id'") or die(mysql_error());
?>
<script> window.location="index1.php?menu=notif"; </script>

<?php
}else{
?>	
	<script> window.location="../index.php"; </script>
<?php
	}
	}
?>
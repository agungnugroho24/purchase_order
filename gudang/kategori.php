<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.html'); }//include "../index.html";}
else{

$id=$_GET['id_kategori'];
$nama=$_GET['nama_kategori'];
$user=$_SESSION['id_user'];

//echo $id." ".$nama;
$query=mysql_query("INSERT INTO kategori VALUES ('$id', '$nama')") or die(mysql_error());
	
//	}
?>
<script> window.location="index1.php?menu=inputbarang#kategori"; </script>
<?php }
?>
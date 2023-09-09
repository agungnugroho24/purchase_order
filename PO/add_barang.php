<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.html'); }//include "../index.html";}
else{

$id=$_GET['select1'];
$id_brg=$_GET['id_brg'];
$nama=$_GET['nama_brg'];
$user=$_SESSION['id_user'];
$satuan=$_GET['satuan'];

//echo $id." ".$id_brg." ".$nama;
$query=mysql_query("INSERT INTO ms_barang (id_brg, nama_brg, id_kategori, satuan) VALUES ('$id_brg', '$nama', '$id', '$satuan')") or die(mysql_error());
	
//	}
?>
<script> window.location="index1.php?menu=inputbarang#tambah_barang"; </script>
<?php }
?>
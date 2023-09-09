<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

$id=$_POST['id_kategori'];
$nama=$_POST['nama_kategori'];

$query=mysql_query("UPDATE kategori set nama_kategori='$nama' WHERE id_kategori='$id'");

?>
<script> window.location="index1.php?menu=inputbarang#kategori"; </script>

<?php
}
?>
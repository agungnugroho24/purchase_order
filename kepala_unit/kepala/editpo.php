<?php
session_start();
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }//include "../index.html";}
else{

$id=$_GET['id'];
$jumlah=$_POST['jumlah'];
$harga=$harga;
$total=($jumlah*$harga);

$query1=mysql_query("UPDATE tmp_spp set jumlah='$jumlah', total='$total' WHERE nospp='$id'") or die (mysql_error());;

$token = md5(md5($id).md5('kata acak'));
?>
<script> window.location="notif_po1.php?id=<?php echo $id."&token=".$token; ?>"; </script>

<?php
}
?>
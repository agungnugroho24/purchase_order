<?php
session_start();
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }//include "../index.html";}
else{

$id=$_GET['id'];
$nama_brg=$_POST['nama_brg'];
$jumlah=$_POST['jumlah'];

echo $id." ".$nama_brg." ".$jumlah." ";

$query=mysql_query("SELECT a.id_brg, b.nama_brg FROM detail_pesan a LEFT JOIN ms_barang b ON a.id_brg=b.id_brg WHERE b.nama_brg='$nama_brg' GROUP BY a.id_brg");
$data=mysql_fetch_array($query);
$a=$data['id_brg'];

$query1=mysql_query("UPDATE detail_pesan set jml_brg='$jumlah' WHERE id_pesan='$id' && id_brg='$a'") or die (mysql_error());;

$token = md5(md5($id).md5('kata acak'));
?>
<script> window.location="notif1.php?id=<?php echo $id."&token=".$token; ?>"; </script>

<?php
}
?>
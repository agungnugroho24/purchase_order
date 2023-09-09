<?php
session_start();
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='1' && $_SESSION['id_unit']=='1')
{

$id=$_GET['id'];
$id1=$_GET['id1'];

$query=mysql_query("SELECT a.id_brg, b.nama_brg FROM detail_pesan a LEFT JOIN ms_barang b ON a.id_brg=b.id_brg WHERE b.nama_brg='$nama_brg' GROUP BY a.id_brg");
$data=mysql_fetch_array($query);
$a=$data['id_brg'];

$query=mysql_query("DELETE FROM detail_pesan WHERE id_pesan='$id' && id_brg='$id1'");

$token = md5(md5($id).md5('kata acak'));
?>
<script> window.location="notif1.php?id=<?php echo $id."&token=".$token; ?>"; </script>

<?php
}else{
?>	
 <script> window.location="../index.php"; </script> 
<?php
	}
}
?>
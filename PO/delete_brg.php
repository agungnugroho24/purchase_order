<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='3')
{

$id=$_GET['id'];
$id1=$_GET['id1'];

//echo $id." ".$id1;
$query=mysql_query("DELETE FROM trx_barang WHERE id_pesan = '$id' && id_brg ='$id1'");
$query1=mysql_query("DELETE FROM detail_pesan WHERE id_pesan = '$id' && id_brg ='$id1'");

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
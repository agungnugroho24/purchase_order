<?php
session_start();
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='1' && $_SESSION['id_unit']=='1')
{

$id=$_GET['id'];

$query=mysql_query("DELETE FROM tmp_spp WHERE nospp='$id'");

$token = md5(md5($id).md5('kata acak'));
?>
<script> window.location="notif_po1.php?id=<?php echo $id."&token=".$token; ?>"; </script>

<?php
}else{
?>	
 <script> window.location="../index.php"; </script> 
<?php
	}
}
?>
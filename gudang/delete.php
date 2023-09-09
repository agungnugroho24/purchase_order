<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='3')
{
$id=$_GET['id'];

$query=mysql_query("DELETE FROM kategori WHERE id_kategori='$id'");

?>
<script> window.location="index1.php?menu=inputbarang#kategori"; </script>

<?php
}else{
?>	
	<script> window.location="../index.php"; </script>
<?php
	}
	}
?>
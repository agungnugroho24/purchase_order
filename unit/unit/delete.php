<?php
session_start();
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='2' && $_SESSION['id_unit']=='1')
{

$a=$_GET['id'];

$query=mysql_query("DELETE FROM tmp_stmik WHERE id_brg='$a'")or die(mysql_error());

if($query) {
?>	<script> window.location="index.php?menu=tambahbarang"; </script>
<?php
}else{
?>	
		<script> window.location="../../index.php"; </script>
<?php
	}
	}
	}
?>
<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='0' && $_SESSION['id_unit']=='0')
{

$id=$_GET['id'];

$query=mysql_query("DELETE FROM ms_user WHERE id_user='$id'");

?>
<script> window.location="form_add_unit.php"; </script>

<?php
}else{
?>	
 <script> window.location="../index.php"; </script> 
<?php
	}
}
?>
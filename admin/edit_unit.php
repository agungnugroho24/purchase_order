<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

$id=$_POST['id_user'];
$pass=$_POST['pass'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$jabatan=$_POST['jabatan'];
$unit=$_POST['unit'];

//echo $id." ".$pass." ".$nama." ".$jabatan;

$query=mysql_query("UPDATE ms_user set pass='$pass', nama='$nama', email='$email', id_jabatan='$jabatan', id_unit='$unit' WHERE id_user='$id'") or die (mysql_error());;

?>
<script> window.location="form_add_unit.php"; </script>

<?php
}
?>
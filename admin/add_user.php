<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

if (isset($_POST["id_user"]) && isset($_POST["pass"]))
	{

		$id_user=$_POST['id_user'];
		$pass=$_POST['pass'];
		$nama=$_POST['nama'];
		$jabatan=$_POST['jabatan'];

		$query = mysql_query("SELECT * FROM ms_user WHERE id_user='$id_user'") or die (mysql_error());
		$data=mysql_fetch_array($query);
		$result=mysql_num_rows($query);
		
		if ($result < 1)
		{
			$query1=mysql_query("INSERT INTO ms_user (id_user, pass, nama, id_jabatan) VALUES ('$id_user', '$pass', '$nama', '$jabatan')") or die(mysql_error());
		?>
			<script> window.location="form_add_user.php"; </script>
		<?php
		}
		else
		{
			header('location:form_add_user.php?error=1');
		}
	}
}
?>

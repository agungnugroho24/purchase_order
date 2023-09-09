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
		$email=$_POST['email'];
		$jabatan=$_POST['jabatan'];
		$unit=$_POST['unit'];

		$query = mysql_query("SELECT * FROM ms_user WHERE id_user='$id_user'") or die (mysql_error());
		$data=mysql_fetch_array($query);
		$result=mysql_num_rows($query);
		
		$query1 = mysql_query("SELECT * FROM ms_user WHERE id_jabatan='$jabatan' && id_unit='$unit'") or die (mysql_error());
		$result1=mysql_num_rows($query1);

		if ($result < 1)
		{
			if ($result1 < 1)
			{
				$query2=mysql_query("INSERT INTO ms_user (id_user, pass, nama, email, id_jabatan, id_unit) VALUES ('$id_user', '$pass', '$nama', '$email', '$jabatan', '$unit')");
		?>
				<script> window.location="form_add_unit.php"; </script>
		<?php
			}
			else
			{
				header('location:form_add_unit.php?error=2');
			}
		}
		else
		{
			header('location:form_add_unit.php?error=1');
		}
	}
}
?>
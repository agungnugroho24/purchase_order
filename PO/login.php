<?php
include("../connect.php");

if (isset($_POST["username"]) && isset($_POST["password"]))
{
$username = $_POST["username"];
$password = $_POST["password"];

$query = mysql_query("SELECT * FROM ms_user WHERE id_user='$username' and pass='$password'") or die (mysql_error());
$data=mysql_fetch_array($query);
$result=mysql_num_rows($query);

	if ($result > 0)
		{
		  session_start();
		  $_SESSION[id_user]= $data[id_user];
		  $_SESSION[pass]= $data[pass];
		  $_SESSION[id_jabatan]= $data[id_jabatan];
		  
		  if ($_SESSION[id_jabatan]=='4')
		  {
			header('location:index1.php');
		  }
		  else
		  {
			header('location:index.php?error=4');
		  }
		}
	else{ 
		header('location:index.php?error=3');
		}
}
?>
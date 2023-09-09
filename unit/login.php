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
		  $_SESSION[nama]= $data[nama];
		  $_SESSION[id_jabatan]= $data[id_jabatan];
		  $_SESSION[id_unit]= $data[id_unit];
		  
		  if ($_SESSION[id_jabatan]=='2' && $_SESSION[id_unit]=='1')
		  {
			header('location:unit/index.php');
		  }
		  else
		  {
			
			header('location:index.php?error=4');
			//$_SESSION['pesan']="Username atau Password salah";
		  }
		}
	else{ 
			//$_SESSION['pesan']="Username atau Password salah";
			//echo "LOGIN GAGAL! <br> <a href='index.html'><< Kembali</a>"; 
			header('location:index.php?error=3');
		}
	
	
/*        if($result == 1)
        {
			//$_SESSION['username'] = $data['username'];
			//header('location:unit/index.php');
			$response_array = "ok";
        }
        else
        {
            echo "Username dan Password tidak Valid";
        }
		echo json_encode($response_array);
} */
}
?>
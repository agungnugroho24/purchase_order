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
		  $_SESSION[id_unit]= $data[id_unit];
		  
		  if ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='1')
		  {
			header('location:kepala/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='2')
		  {
			header("location:stie/index.php");
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='3')
		  {
			header('location:stba/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='4') 
		  {
			header('location:asmi/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='5') 
		  {
			header('location:tk/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='6') 
		  {
			header('location:sd/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='7') 
		  {
			header('location:smp/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='8') 
		  {
			header('location:sma/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='9') 
		  {
			header('location:smk/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='10') 
		  {
			header('location:marketing/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='11') 
		  {
			header('location:akunting/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='12') 
		  {
			header('location:finance/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='13') 
		  {
			header('location:umum/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='14') 
		  {
			header('location:it/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='15') 
		  {
			header('location:p3ubd/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='16') 
		  {
			header('location:sekbid/index.php');
		  }
		  elseif ($_SESSION[id_jabatan]=='1' && $_SESSION[id_unit]=='17') 
		  {
			header('location:hrd/index.php');
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
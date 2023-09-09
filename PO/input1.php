<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

	if (isset($_GET["id_brg"]) && isset($_GET["jml"]))
	{
		$id=$_GET['id_brg'];
		$jml=$_GET['jml'];
		$user=$_SESSION['id_user'];

		$query = mysql_query("SELECT * FROM ms_barang WHERE id_brg='$id'") or die (mysql_error());
		$data=mysql_fetch_array($query);
		$result=mysql_num_rows($query);
		
		if ($result > 0)
		{
			//echo $id." ".$jml;
			$query1=mysql_query("INSERT INTO in_barang VALUES ('$id', '$user', '$jml', now(), now())") or die(mysql_error());
?>
			<script> window.location="index1.php?menu=inputbarang#input"; </script>
		<?php
	//	if($query) {
	//	$query1=mysql_query("TRUNCATE TABLE minta");
		}
		else
		{ 
			header('location:index1.php?menu=inputbarang&error=3');
		}
		?>

<?php 
	}
}
?>
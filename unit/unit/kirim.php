<?php
session_start();
include("../../connect.php");
$user=$_SESSION['nama'];

if ($_GET['submit'])
{
	$query=mysql_query("SELECT * FROM spp order by tanggal desc limit 1");
	$data=mysql_fetch_array($query);
	$result=mysql_num_rows($query);
	if ($result > 0)
	{
     $query=mysql_query("insert into tmp_spp (SELECT * FROM spp order by tanggal desc limit 1)") or die(mysql_error());
		
	?>
	<script> window.location="index.php?menu=purchase"; </script> 
	<?php
	}
	else
	{
	?>
	<script> window.location="index.php?menu=purchase&error=1"; </script>
	<?php
	}
}
?>
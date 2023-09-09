<?php
include("../../connect.php");

$id=$_GET['id'];

$query1=mysql_query("UPDATE pesan SET kepada_2='3' WHERE id_pesan='$id'") or die(mysql_error());
//	if($query) {
//	$query1=mysql_query("TRUNCATE TABLE minta");
	
//	}
?>
<script> window.location="index.php?menu=home"; </script>
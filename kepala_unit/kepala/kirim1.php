<?php
include("../../connect.php");

$id=$_GET['id'];

$query=mysql_query("insert into trx_barang (id_pesan, id_brg, jml_brg) (SELECT * FROM detail_pesan)") or die(mysql_error());
$query1=mysql_query("UPDATE pesan SET kepada_2='3', tgl=now() WHERE id_pesan='$id'") or die(mysql_error());
$query2=mysql_query("UPDATE trx_barang SET id_unit='1', tgl=now() WHERE id_pesan='$id'") or die(mysql_error());
//$query1=mysql_query("UPDATE pesan SET kepada_2='3' WHERE id_pesan='$id'") or die(mysql_error());
//	if($query) {
//	$query1=mysql_query("TRUNCATE TABLE minta");
	
//	}
?>
<script> window.location="index.php?menu=home"; </script>
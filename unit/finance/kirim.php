<?php
session_start();
include("../../connect.php");
$user=$_SESSION['nama'];

if ($_GET['submit'])
{
	$query=mysql_query("SELECT * FROM tmp_finance");
	$data=mysql_fetch_array($query);
	$result=mysql_num_rows($query);
	if ($result > 0)
	{
		$query=mysql_query("insert into trx_barang (SELECT * FROM tmp_finance)") or die(mysql_error());
		$query1=mysql_query("insert into pesan (id_pesan, tgl, id_unit, id_user, dari, kepada_1, sudahbaca, acc) VALUES ('', now(), '12', '$user', '2', '1', 'N', 'N')") or die(mysql_error());
		$query2=mysql_query("insert into detail_pesan (id_brg, jml_brg) SELECT id_brg, jml_brg FROM tmp_finance") or die(mysql_error());
		$query3=mysql_query("SELECT max(id_pesan) as id from pesan");
		$row = mysql_fetch_array($query3);
		$lastid=$row['id'];
		$query4=mysql_query("UPDATE detail_pesan set id_pesan='$lastid' WHERE id_pesan='0'");
		$query5=mysql_query("UPDATE trx_barang set id_pesan='$lastid', tgl=now() WHERE id_pesan='0'");
		$query6=mysql_query("TRUNCATE TABLE tmp_finance");
	?>
	<script> window.location="index.php?menu=tambahbarang"; </script>
	<?php
	}
	else
	{
	?>
	<script> window.location="index.php?menu=tambahbarang&error=1"; </script>
	<?php
	}
}
?>
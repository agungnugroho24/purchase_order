<?php
include("../../connect.php");

$id=$_GET['id'];

$query=mysql_query("insert into spp (nospp, tanggal, namabrg, jenis, unit, jumlah, satuan, harga, total, keterangan, pengguna, penanggung_jawab) (SELECT * FROM tmp_spp where nospp='$id')") or die(mysql_error());

	
//	}
?>
<script> window.location="index.php?menu=home"; </script>
<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>
<?php
if ($_SESSION['id_jabatan']=='3')
{
?>
<div data-role="content" data-add-back-btn="true">
	
	<?php
	$query = mysql_query("SELECT DATE_FORMAT(a.tgl, '%d %M %Y') as tgl1, 
							DATE_FORMAT(a.tgl, '%T') as tgl2, 
							a.id_pesan, 
							a.dari, 
							a.kepada_2, 
							b.nama_unit 
							FROM pesan a LEFT JOIN ms_unit b ON a.id_unit=b.id_unit 
							WHERE sudahbaca='N' && kepada_2='3' && kepada_1='1' && kepada_3='0' ORDER BY id_pesan DESC");
	$result=mysql_num_rows($query);
	if ($result == 0)
	{
	echo "Tidak ada notifikasi";
	}else{
	?>
	
	<ul data-role="listview" data-inset="true">
	
	<?php
	while($data = mysql_fetch_array($query))
	{
	$tanggal=$data['tgl1'];
	
	$bulan=date('F', strtotime($tanggal));
	if ($bulan == "January") $bulan = "Januari";
	elseif ($bulan == "February") $bulan = "Februari";
	elseif ($bulan == "March") $bulan = "Maret";
	elseif ($bulan == "April") $bulan = "April";
	elseif ($bulan == "May") $bulan = "Mei";
	elseif ($bulan == "June") $bulan = "Juni";
	elseif ($bulan == "July") $bulan = "Juli";
	elseif ($bulan == "August") $bulan = "Agustus";
	elseif ($bulan == "September") $bulan = "September";
	elseif ($bulan == "October") $bulan = "Oktober";
	elseif ($bulan == "November") $bulan = "Nopember";
	else $bulan = "Desember";
	
	$tanggal1=date('d F Y', strtotime($tanggal));
	
	$tanggal2=date('d', strtotime($tanggal));
	$tanggal3=date('Y', strtotime($tanggal));
	$tanggal4=$tanggal2." ".$bulan." ".$tanggal3;
	
	$id = $data['id_pesan'];
	$token = md5(md5($id).md5('kata acak'));
	?>
	
			<li><a href="notif1.php?id=<?php echo $id."&token=".$token; ?>" data-ajax="false">
				<h2><?php echo $tanggal4 ?></h2>
				<p><strong>Dari: <?php echo $data['nama_unit'] ?></strong></p>
					<p class="ui-li-aside"><strong><?php echo $data['tgl2'] ?></strong></p>
				</a>
			</li>
	
	<?php
	}
	?>
	</ul>
	<?php
	}
	?>
	
</div>
<?php
}else{
?>	
	<script> window.location="../index.php"; </script>
<?php
	}
?>
</body>
</html>
<?php }
?>
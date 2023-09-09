<?php
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }//include "../index.html";}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>
<?php
if ($_SESSION['id_jabatan']=='1' && $_SESSION['id_unit']=='1')
{
?>
<div data-role="content" data-add-back-btn="true">

	<?php
	$query = mysql_query("SELECT DATE_FORMAT(tgl, '%d %M %Y') as tgl1, 
							DATE_FORMAT(tgl, '%T') as tgl2, 
							id_pesan, dari, 
							id_user 
							FROM pesan  
							WHERE sudahbaca='N' && id_unit='1' && kepada_1='1' && kepada_2='0' && dari='2' 
							ORDER BY id_pesan DESC");
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
			<p><strong>Dari: <?php echo $data['id_user'] ?></strong></p>
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
	<script> window.location="../../index.php"; </script>
<?php
}
?>
</body>
</html>
<?php }
?>
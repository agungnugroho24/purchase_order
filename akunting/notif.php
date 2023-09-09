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
<div data-role="content" data-add-back-btn="true">
	
	<?php
	$query = mysql_query("SELECT * from po order by date desc");
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
	$tanggal=$data['date'];
	
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
	
	$id = $data['nopo'];
	$token = md5(md5($id).md5('kata acak'));
	?>
	
			<li><a href="notif1.php?id=<?php echo $id."&token=".$token; ?>" data-ajax="false">
				<h2><?php echo $tanggal4 ?></h2>
				<p><strong>No. PO: <?php echo $data['nopo'] ?></strong></p>
				<p><strong>Dari: <?php echo $data['jurusan'] ?></strong></p>
					<p class="ui-li-aside"><strong><?php echo $data['date'] ?></strong></p>
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

</body>
</html>
<?php }
?>
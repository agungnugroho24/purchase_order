<?php
session_start();
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
if ($_SESSION['id_jabatan']=='2' && $_SESSION['id_unit']=='16')
{
?>
<div data-role="content" data-add-back-btn="true">
	<?php
	$query = mysql_query("SELECT DATE_FORMAT(tgl, '%d %M %Y') as tgl1, 
							DATE_FORMAT(tgl, '%T') as tgl2, 
							id_pesan, 
							kepada_1,
							acc							
							FROM pesan
							WHERE sudahbaca='N' && id_unit='16' && kepada_3='2' && kepada_2='3' 
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
	$id = $data['id_pesan'];
	$token = md5(md5($id).md5('kata acak'));
	?>
			<!--<li><a href="notif1.php?id=<?php echo $id; ?>" data-ajax="false">-->
			<li><a href="notif1.php?id=<?php echo $id."&token=".$token; ?>" data-ajax="false">
				<h2><?php echo $data['tgl1'] ?></h2>
				<p><strong>Dari: Gudang</strong></p>
				<?php
				if ($data['acc'] == 'Y')
				{
				?>
				<p><strong>Pesan: </strong> Silahkan mengambil barang yang telah diminta beserta membawa stempel unit. Terima Kasih</p>
				<?php
				}else{
				?>
				<p><strong>Pesan: </strong> Maaf, permintaan barang Anda kami tolak.</p>
				<?php
				}
				?>
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
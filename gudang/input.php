<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{


?>
<?php
include('../connect.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<style type="text/css">
.tablist-left {
    width: 25%;
    display: inline-block;
}
.tablist-content {
    width: 60%;
    display: inline-block;
    vertical-align: top;
    margin-left: 5%;
}
</style>
</head>

<body>
<?php
if ($_SESSION['id_jabatan']=='3')
{
?>
<div data-role="content">
<?php
$dataPerPage = 10;
if(isset($_GET['paging']))
{
    $noPage = $_GET['paging'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;
?>
	<div data-role="tabs">
		<ul data-role="listview" data-inset="true" class="tablist-left">
			<li><a href="#input" data-ajax="false">Input Stok Barang</a></li>
			<li><a href="#kategori" data-ajax="false">Tambah Kategori</a></li>
			<li><a href="#tambah_barang" data-ajax="false">Tambah Barang</a></li>
			<li><a href="#edit_harga" data-ajax="false">Edit harga</a></li>
		</ul>
		
		<div id="input" class="ui-body-d tablist-content">
			<?php
				$sql = mysql_query("SELECT * FROM ms_user WHERE id_user = '$_SESSION[id_user]'");
				while ($data = mysql_fetch_array($sql))
				{
				 $id_user = $data['id_user'];
				}
			?>
				<ul data-role="listview" data-inset="true">
					<h3 class="ui-bar ui-bar-a ui-corner-all">Input Barang</h3>
					  <div class="ui-body">
						<form action="input1.php" method="GET" data-ajax="false">
						  <table border="0">
						  <?php
					//kode php ini kita gunakan untuk menampilkan pesan eror
					if (!empty($_GET['error']))
					{
						if ($_GET['error'] == 3)
						{
							echo '<h5>ID barang tidak terdaftar!</h5>';
						}
					}
					
					$tanggal=date("j F Y");
	
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
					
					?>
							<tr>
								<td>Tanggal</td>
								<td>:</td>
								<td colspan="3"><input type="text" data-theme="b" disabled name="tgl" id="tgl" value="<?php echo $tanggal4; ?>"></td>
							</tr>
							<tr>
								<td>Kode Barang</td>
								<td>:</td>
								<td><input type="text" name="id_brg" id="id_brg" required value=""></td>
								<td><input type="text" name="jml" id="jml" value="" required placeholder="jumlah"></td>
								<td><input type="submit" value="Tambah" data-theme="b"></td>
							</tr>
						   </table>
						   
						   <BR>
							<table border="1" align="center" cellspacing="0" cellpadding="2">
							<tr>
								<!--<td width="30" align="center">No</td>-->
								<td width="80" align="center">ID barang</td>
								<td width="100" align="center">Nama barang</td>
								<td width="250" align="center">Kategori</td>
								<td width="50" align="center">Stok</td>
							</tr>	
								
							<?php
							$sql = mysql_query("SELECT a.id_brg,a.nama_brg,b.id_kategori,b.nama_kategori,a.stok,a.harga FROM ms_barang a LEFT JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_brg LIMIT $offset, $dataPerPage");
							//$no=1;
							while ($data = mysql_fetch_array($sql))
							{
							?>
							<tr>
							<!--	<td align="center"><?php echo $no ?></td> -->
								<td><?php echo $data['id_brg'] ?></td>
								<td><?php echo $data['nama_brg'] ?></td>
								<td><?php echo $data['nama_kategori'] ?></td>
								<td><?php echo $data['stok'] ?></td>
							</tr>
							<?php
							//$no++;
							}
							?>
							<tr>
								<td colspan="4" align="center">
									<?php
									$query   = "SELECT COUNT(*) AS jumData FROM ms_barang ";
									$hasil  = mysql_query($query);
									$data     = mysql_fetch_array($hasil);


									$jumData = $data['jumData'];


									// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data


									$jumPage = ceil($jumData/$dataPerPage);


									// menampilkan link previous


									if ($noPage > 1) echo  "<a  href='index1.php?menu=inputbarang&paging=".($noPage-1)."' data-ajax='false'>&lt;&lt; Prev</a>";


									// memunculkan nomor halaman dan linknya


									for($page = 1; $page <= $jumPage; $page++)
									{
											 if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
											 {
												if (($showPage == 1) && ($page != 2))  echo "...";
												if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
												if ($page == $noPage) echo " <b>".$page."</b> ";
												else echo " <a href='index1.php?menu=inputbarang&paging=".$page."' data-ajax='false'>".$page."</a> ";
												$showPage = $page;
											 }
									}


									// menampilkan link next


									if ($noPage < $jumPage) echo "<a href='index1.php?menu=inputbarang&paging=".($noPage+1)."' data-ajax='false'>Next &gt;&gt;</a>";
									?>
								</td>
							</tr>
							</table>
						</form>
					  </div>
				</ul>
		</div>
		
		<div id="kategori" class="ui-body-d tablist-content">
				<ul data-role="listview" data-inset="true">
					<h3 class="ui-bar ui-bar-a ui-corner-all">Tambah Kategori</h3>
					  <div class="ui-body">
						<form action="kategori.php" method="GET" data-ajax="false">
						  <table border="0">
							<tr>
								<td>ID Kategori</td>
								<td>:</td>
								<td colspan="2">
								<?php
									$sql = mysql_query("SELECT max(id_kategori) as id FROM kategori") or die(mysql_error());
									$data = mysql_fetch_array($sql);
									$id = substr($data['id'], 1,3);

									$a=$id+1;
									if($a>99)
									{
									$b='K'.$a;
									}
									elseif($a>9)
									{
									$b='K0'.$a;
									}
									else
									{
									$b='K00'.$a;
									}
									
								?>
									<input type="text" data-theme="b" readOnly name="id_kategori" id="id_kategori" value="<?php echo $b; ?>">
								</td>
							</tr>
							<tr>
								<td>Nama Kategori</td>
								<td>:</td>
								<td><input type="text" name="nama_kategori" required id="nama_kategori" value=""></td>
								<td><input type="submit" value="Tambah" data-theme="b"></td>
							</tr>
						   </table>
						   
						   <BR>
							<table border="1" align="center" cellspacing="0" cellpadding="2">
							<tr>
								<td width="30" align="center">No</td>
								<td width="100" align="center">ID Kategori</td>
								<td width="250" align="center">Kategori</td>
								<td width="150" align="center" colspan="2">Kontrol</td>
							</tr>	
								
							<?php
							$sql = mysql_query("SELECT * FROM kategori ORDER BY id_kategori");
							$no=1;
							while ($data = mysql_fetch_array($sql))
							{
							?>
							<tr>
								<td align="center"><?php echo $no ?></td>
								<td><?php echo $data['id_kategori'] ?></td>
								<td><?php echo $data['nama_kategori'] ?></td>
								<td align="center">
									<a href="edit.php?id=<?php echo $data['id_kategori'] ?>" data-rel="dialog" data-transition="pop" class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext"></a>
								</td>
								<td align="center">
									<a href="delete.php?id=<?php echo $data['id_kategori'] ?>" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext" data-ajax="false" onclick="return confirm('Apakah anda yakin akan menghapus kategori <?php echo $data["nama_kategori"] ?>?')"></a>
								</td>
							</tr>
							<?php
							$no++;
							}
							?>
							</table>
						</form>
					  </div>
				</ul>
		</div>
		
		<div id="tambah_barang" class="ui-body-d tablist-content">
				<ul data-role="listview" data-inset="true">
					<h3 class="ui-bar ui-bar-a ui-corner-all">Tambah Barang</h3>
					  <div class="ui-body">
						<form action="add_barang.php" method="GET" data-ajax="false">
						  <table border="0">
							<tr>
								<td>Kategori</td>
								<td>:</td>
								<td colspan="2">
									<select name="select1" id="select1">
									<?php
									$sql = mysql_query("SELECT * FROM kategori");
									$no=1;
									while ($data = mysql_fetch_array($sql))
									{
									?>
										<option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
									<?php
									}
									?>
								</td>
							</tr>
							<tr>
								<td>ID Barang</td>
								<td>:</td>
								<td colspan="2">
								<?php
									$sql = mysql_query("SELECT max(id_brg) as id FROM ms_barang") or die(mysql_error());
									$data = mysql_fetch_array($sql);
									$id = substr($data['id'], 1,3);

									$a=$id+1;
									if($a>99)
									{
									$b='B'.$a;
									}
									elseif($a>9)
									{
									$b='B0'.$a;
									}
									else
									{
									$b='B00'.$a;
									}
									
								?>
									<input type="text" data-theme="b" readOnly name="id_brg" id="id_brg" value="<?php echo $b; ?>">
								</td>
							</tr>
							<tr>
								<td>Nama Barang</td>
								<td>:</td>
								<td><input type="text" name="nama_brg" id="nama_brg" required value=""></td>
								<td>
									<select name="satuan" id="satuan">
										<option value="">--Pilih Satuan--</option>
										<option value="pcs">pcs</option>
									</select>
								</td>
								<td><input type="text" name="harga" id="harga" required value=""></td>
								<td><input type="submit" value="Tambah" data-theme="b"></td>
							</tr>
						   </table>
						
						</form>
					  </div>
				</ul>
		</div>
		<div id="edit_harga" class="ui-body-d tablist-content">
				<ul data-role="listview" data-inset="true">
					<h3 class="ui-bar ui-bar-a ui-corner-all">Ubah harga</h3>
					  <div class="ui-body">
<form action="updateprice.php" method="post">
	<div>

	Nama produk:<?php
	$name= mysql_query("select * from ms_barang");
	
	
	echo '<select name="nama_brg" nama_brg="nama_brg" class="textfield1">';
	 while($res= mysql_fetch_assoc($name))
	{
	echo '<option value="'.$res['nama_brg'].'">';
	echo $res['nama_brg'];
	echo'</option>';
	}
	echo'</select>';
	?>
	</div>
	<br />
	<div>Harga:<input name="itemprice" type="text" /></div>
	<div><input name="" type="submit" value="Update" /></div>
</form>
					  </div>
				</ul>
		</div>
	</div>
</div>
<!--
	<?php
		$sql = mysql_query("SELECT * FROM ms_user WHERE id_user = '$_SESSION[id_user]'");
		while ($data = mysql_fetch_array($sql))
		{
		 $id_user = $data['id_user'];
		}
	?>

<BR><BR>
<h3 class="ui-bar ui-bar-a ui-corner-all">Input Barang</h3>
      <div class="ui-body">
        <form action="input1.php" method="GET" data-ajax="false">
		  <table border="0">
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td colspan="3"><input type="text" data-theme="b" disabled name="tgl" id="tgl" value="<?php $today = date("j F Y, g:i a"); echo $today; ?>"></td>
			</tr>
			<tr>
				<td>Kode Barang / Barcode</td>
				<td>:</td>
				<td><input type="text" name="id_brg" id="id_brg" value=""></td>
				<td><input type="text" name="jml" id="jml" value="" placeholder="jumlah"></td>
				<td><input type="submit" value="Tambah" data-theme="b"></td>
			</tr>
		   </table>
		</form>
	  </div>
</div>
-->
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
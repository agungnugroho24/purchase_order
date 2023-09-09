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
<style type="text/css">
.paper {
    background-color: #fff4c0;
    background-image: -webkit-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%); 
    background-image: -moz-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-image: -0-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-image:  linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-size: 1px 52px; box-shadow: 0 1px 3px rgba(0, 0, 0, .5);
    box-shadow: 0 1px 4px rgba(0,0,0,.25);
    margin: 0 0 0 6px;
    position: relative;
    width: 492px;
    padding: 2px 24px 24px 84px;
}
.paper:after {
    border-left: 1px solid rgba(255,0,0,.2);
    border-right: 1px solid rgba(255,0,0,.2);
    bottom: 0;
    content: '';
    left: 58px;
    position: absolute;
    top: 0;
    width: 2px;
}
.paper:before {
    bottom: 8px;
    border-radius: 4px;
    box-shadow: 0 10px 10px rgba(0,0,0,.25);
    content: '';
    height: 100px;
    max-width: 300px;
    position: absolute;
    right: 5px;
    width: 300px;
    z-index: -10; 
    -webkit-transform: rotate(2deg);    
       -moz-transform: rotate(2deg);   
        -ms-transform: rotate(2deg);   
         -o-transform: rotate(2deg);
            transform: rotate(2deg);
}
.a {
	margin: 0px auto;
	width: 602px;
}
.b {
	margin: 0px auto;
	width: 602px;
	position: relative;
}

</style>
<body>
<?php
if ($_SESSION['id_jabatan']=='2' && $_SESSION['id_unit']=='1')
{
?>
	<div data-role="content" data-add-back-btn="true">

		<form method="GET" action="kirim.php" data-ajax="false">
		<div data-role="navbar" data-iconpos="left" class="a">	
			<ul>
				<li><a href="purchase.php" data-icon="plus" data-theme="b" data-ajax="false"><h4>Surat Permohonan Pembelian</h4></a></li>
			</ul>
			
			<article class="paper">	
				<p align="right">
				<?php 
					//$today = date("j F Y, g:i a");
					//$today = date("j F Y");
					//echo $today;
					
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
					
					echo $tanggal4;
				?>
				</p>
				
				<table border="0" cellspacing="0" cellpadding="0">
				<tbody>
				<tr>
					<td height="50" width="100"><b>No. SPP</td>
					<td height="50" width="300"><b>Nama Barang</td>
					<td align="center" width="65"><b>Jumlah</td>
					<td align="center" width="150"><b>Total</td>
					<td align="center" width="65"><b>Hapus</td>
					<?php
					if (!empty($_GET['error'])) {
						if ($_GET['error'] == 1) {
						echo '<h5>Silahkan memilih barang terlebih dahulu!</h5>';
						}
					}
					?>
				</tr>
				<?php
				$query="SELECT nospp, namabrg, jumlah, total from tmp_spp order by tanggal desc limit 1";
				//$query="SELECT a.id_brg, a.jumlah, b.id_brg, b.nama_brg FROM minta a LEFT JOIN ms_barang B ON a.id_brg=b.id_brg";
				$result = mysql_query($query);
				while($data= mysql_fetch_array($result))
				{
				?>
				<tr>
				<td width="100"><?php echo "<p>".$data["nospp"]?>
				</td>
				<td width="300"><?php echo "<p>".$data["namabrg"]?>
				</td>
				<td width="65" align="center"><?php echo $data["jumlah"] ?>
				</td>
				<td width="300"><?php echo "<p>".$data["total"]?>
				</td>
				<td width="65" align="center">
				<a href="delete.php?id=<?php echo $data['nospp'] ?>" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext" data-ajax="false" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data["namabrg"] ?>?')">Delete</a>
				</td>
				</tr>
				
			<!--	<tr>
				<td>
				<input type='text'  name='<?php echo $data['nospp'] ?>' id='text-10' data-theme='c' placeholder='<?php echo $data['namabrg'] ?>' value="">
				</td>
				<td>
				<input type='text'  name='<?php echo $data['jumlah'] ?>' id='text-10' data-theme="c" placeholder='<?php echo $data['jumlah'] ?>'>
				</td>
				<td>
				<input type='text'  name='<?php echo $data['total'] ?>' id='text-10' data-theme="c" placeholder='<?php echo $data['total'] ?>'>
				</td>
				<td>
				<a href="delete.php?<?php echo $data['total'] ?>" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
				</td>
				</tr> -->
				<?php
				}
				//echo $data["jumlah"];
				?>
				</tbody>
				</table>
			</article>
		</div>
		
		<div class="b">
			<fieldset class="ui-grid-a">
				<div class="ui-block-a"><input type="submit" value="Submit" data-theme="b" name="submit"></div>
			</fieldset>
		</div>
		</form>
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
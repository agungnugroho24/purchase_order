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
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="../../css/jquery.mobile-1.4.0.css" />
<script src="../../js/jquery.js"></script>
<script src="../../js/jquery.mobile-1.4.0.js"></script>

<script>
function a(){
checkBoxes=document.form1.elements['chk[]'];
textBoxes=document.form1.elements['num[]'];
for(var i=0 ; i<checkBoxes.length;i++)
{
    checkBoxes[i].myIndex = i;
    checkBoxes[i].onchange = function() {
		textBoxes[this.myIndex].disabled =!(this.checked);
		textBoxes[this.myIndex].readOnly =!(this.checked);
    };
}
}
</script>

</head>
<style type="text/css">
.container {
	margin: 0 auto;
	width: 900px;
}
.tablist-left {
    width: 35%;
    display: inline-block;
}
.tablist-content {
    width: 50%;
    display: inline-block;
    vertical-align: top;
    margin-left: 5%;
}
.ui-block-a {
	width: 75%;
}
.ui-block-b {
	width: 25%;
}
</style>

<body>
<?php
if ($_SESSION['id_jabatan']=='2' && $_SESSION['id_unit']=='2')
{
?>
	<div data-role="page">
		
		<div data-role="header" data-position="fixed">
			<table align="center">
			<tr>
				<td width="80px"><img src="../../gambar/logo.png"></td>
				<td align="center">
					<h1 style="font-size:17px;">Aplikasi Permintaan dan Persediaan pada Perguruan Tinggi Buddhi<br>Berdasarkan Permintaan</h1>
				</td>
			</tr>
			</table>
		</div>
		
		<div data-role="content">
			<div class="container">
			
			<?php
			$a="";
			?>
			
			<form method="GET" action="tambahbarang3.php" data-ajax="false" name="form1">
			
				<div data-role="tabs">
					
					<ul data-role="listview" data-inset="true" class="tablist-left">
						<?php
						//$no=1;
						$query = mysql_query("SELECT a.id_kategori, a.nama_kategori, b.id_brg, b.nama_brg FROM kategori a LEFT JOIN ms_barang b ON a.id_kategori=b.id_kategori group by id_kategori");
						while($data = mysql_fetch_array($query))
						{
						?>
							<li><a href="#<? echo $data['id_kategori'] ?>" data-ajax="false"><? echo $data['nama_kategori'] ?></a></li>
						<?php
						//$no++;
						}
						?>
					</ul>
			
					
					
					<?php
					$query = mysql_query("SELECT * FROM kategori");
					$a = ($data=mysql_num_rows($query));
					//echo $a;
					for($no=1; $no<=$a; $no++)
					{
						$id = 'K00'.$no;
						//echo $id;
						$query = mysql_query("SELECT a.id_kategori, a.nama_kategori, b.id_brg, b.nama_brg, b.stok FROM kategori a LEFT JOIN ms_barang b ON a.id_kategori=b.id_kategori WHERE b.id_kategori='$id'");
					?>
						<div id="<?php echo $id ?>" class="tablist-content" data-role="listview" data-inset="true">
						<table border="0">
							<tr>
								<td width="200" align="center"><strong>Nama Barang</strong></td>
								<td width="120" align="center"><strong>Stok</strong></td>
								<td width="100" align="center"><strong>Jumlah</strong></td>
							</tr>
						</table>
						<?php
						//$no=1; klo dipake jadi error queryny
						while($data = mysql_fetch_array($query))
						{
							if($data['stok']<=0)
							{
						?>	
						<fieldset>
						<div class="ui-block-a">
								<label>
									<input disabled="" type="checkbox" name="checkbox-0 "><? echo $data["nama_brg"]?><p class="ui-li-aside"><?php echo $data['stok'] ?><input type="text" name="text"></p>
								</label>
						</div>		
						<div class="ui-block-b">
								<label>
									<input type="number" disabled="" data-clear-btn="false" name="number-1" id="number-1" value="">
								</label>
						</div>
						</fieldset>
							<?php
							}
							else
							{
								/*
								$today = date("m");
								echo $today;
								$query=mysql_query("SELECT id_brg FROM trx_barang WHERE id_unit='1' && id_brg='B001' && DATE_FORMAT(tgl, '%m')='$today' GROUP BY id_brg");
								while($data = mysql_fetch_array($query))
								{
									echo $data['id_brg'];
								}
								*/
							?>
								<fieldset>
								<div class="ui-block-a">
									<label>
										<input type="checkbox" onclick="a()" class="chk" id="chk" name="chk[]" value="<? echo $data["id_brg"]?>"><? echo $data["nama_brg"]?><p class="ui-li-aside"><?php echo $data['stok'] ?></p></a>
									</label>
								</div>
								<div class="ui-block-b">
									<label>
										<!-- <input type="hidden" id="stock_ada" value="<?=$data["stok"];?>"> -->
										<input type="number" required disabled readOnly class="text" data-clear-btn="false" name="num[]" id="num" value="" min="1" max="<? echo $data["stok"] ?>" data-errormessage-value-missing="Something's missing">
									</label>
								</div>
								</fieldset>
							<?php
							}
							?>
									<!--<li><a href="#" data-ajax="false"><? //echo $data['nama_brg'] ?></a></li>-->
						<?php
						//$no++;
						}
						?>
						
						
						
						</div>
					<?php
					}
					?>
					
					
				</div>
				
				
	<!--			<a href="tambahbarang4.php" class="ui-btn ui-corner-all">Anchor</a>
	-->			
				<fieldset class="ui-grid-a">
			
			<div class="ui-block-a"><input type="submit" value="Simpan" data-theme="b"></div>
			<div class="ui-block-b"><a href="" data-rel="back" class="ui-shadow ui-btn ui-corner-all" data-ajax="false">Kembali</a></div>
			
	<!--		<a href="tambahbarang1.php"  role="button" class="ui-shadow ui-btn ui-corner-all ui-btn-inline">Batal</a></div>
	-->		
			
		</fieldset>
			</form>
				
			</div>
		
		</div>
		
		<div data-role="footer" data-position="fixed">
			<h4 style="font-size: 14px;">&copy;2014</h4>
		</div>
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
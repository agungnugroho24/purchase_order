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
</head>
<style type="text/css">
.paper {
    background-color: #fff4c0;
    background-image: -webkit-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%); 
    background-image: -moz-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-image: -0-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-image:  linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-size: 1px 53px; box-shadow: 0 1px 3px rgba(0, 0, 0, .5);
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
if ($_SESSION['id_jabatan']=='1' && $_SESSION['id_unit']=='1')
{
?>
<div data-role="page">
	
	<div data-role="header">
		<table align="center">
		<tr>
			<td width="80px"></td>
			<td align="center">
				<h1 style="font-size:17px;">Aplikasi Permintaan dan Persediaan pada PT. Winner Stainless Steel Tube<br>Berdasarkan Permintaan</h1>
			</td>
		</tr>
		</table>
	</div>

<div data-role="content">
	<div data-role="navbar" data-iconpos="left" class="a">	
		
		<article class="paper">
		
<!--			<p align="right">
			<?php $today = date("F j, Y, g:i a");
				echo $today;
			?>
			</p>
-->			
			<table border="0" cellspacing="0" cellpadding="0">
			<tbody>
			<h2 align="center">Nota Permintaan Barang</h2>
			<tr>
				<td height="50" width="100"><b>No. SPP</td>
					<td height="50" width="300"><b>Nama Barang</td>
					<td align="center" width="65"><b>Jumlah</td>
					<td align="center" width="150"><b>Total</td>
				<td width="100" align="center" colspan="2"><b>Kontrol</td>
			</tr>
			<?php
			function antiinjek($data)
			{
				$saring = abs(mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)))));
				return $saring;
			}
			
			$id=($_GET['id']);
			$token=$_GET['token'];
			$cek=md5(md5($id).md5('kata acak'));
			if($token==$cek)
			{
			
			$query="SELECT * FROM tmp_spp where nospp='$id'";

			$result = mysql_query($query);
			while($data= mysql_fetch_array($result))
			{
			?>
			<tr>
			<td width="200"><?php echo "<p>".$data["nospp"]?>
				</td>
				<td width="100"><?php echo "<p>".$data["namabrg"]?>
				</td>
				<td width="100" align="center"><?php echo $data["jumlah"] ?>
				</td>
				<td width="150"><?php echo "<p>".$data["total"]?>
				</td>
			<td width="50" align="center">
				
			</td>
			<td width="50" align="center">
				<a href="deletepo.php?id=<?php echo $data['nospp'] ?>&id1=<?php echo $data['nospp'] ?>" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext" data-ajax="false" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $data["namabrg"] ?>?')"></a>
			</td>
			</tr>
			
		<!--	<tr>
		<td>
				<input type='text'  name='<?php echo $data['nospp'] ?>' id='text-10' data-theme='c' placeholder='<?php echo $data['nospp'] ?>' value="">
				</td>
				<td>
				<input type='text'  name='<?php echo $data['namabrg'] ?>' id='text-10' data-theme='c' placeholder='<?php echo $data['namabrg'] ?>' value="">
				</td>
				<td>
				<input type='text'  name='<?php echo $data['jumlah'] ?>' id='text-10' data-theme="c" placeholder='<?php echo $data['jumlah'] ?>'>
				</td>
				<td>
				<input type='text'  name='<?php echo $data['total'] ?>' id='text-10' data-theme="c" placeholder='<?php echo $data['total'] ?>'>
				</td>
			</tr> -->
			<?php
			}
			}
			//echo $data["jumlah"];
			?>
			</tbody>
			</table>
		</article>
		
		<div class="ui-grid-a">
			<div class="ui-block-a"><a href="kirimpo.php?id=<?php echo $id ?>" class="ui-shadow ui-btn ui-corner-all" data-ajax="false" data-theme="b">Validasi</a></div>
			<div class="ui-block-b"><a href="" data-rel="back" class="ui-shadow ui-btn ui-corner-all" data-ajax="false" data-theme="a">Kembali</a></div>
		</div>
	</div>
</div>

	<div data-role="footer" data-position="fixed">
		<h4 style="font-size: 14px;">&copy;2015</h4>
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
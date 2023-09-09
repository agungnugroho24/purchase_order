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
if ($_SESSION['id_jabatan']=='1' && $_SESSION['id_unit']=='1')
{
?>
<div data-role="page">
	
	<div data-role="header">
		<h1>Edit Permintaan Barang</h1>
	</div>

	<div data-role="content">
	<?php
	$id=$_GET['id'];
	?>
		<form action="editpo.php?id=<?php echo $id; ?>" method="POST" data-ajax="false"> 
			<table border="0">
				<?php
					$query = mysql_query("SELECT * FROM tmp_spp where nospp='$id'");
					$data = mysql_fetch_array($query);
				?>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input type="text" readOnly data-theme="b" name="nama_brg" id="nama_brg" value="<?php echo $data['namabrg']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td>:</td>
					<td>
						<input type="text" name="jumlah" id="jumlah" value="<?php echo $data['jumlah']; ?>" required>
					</td>
				</tr>
				<?php
				$jumlah=$data['jumlah'];
				?>
				<!--	<td><div class="ui-block-a"><a href="edit.php?id=<?php echo $id ?>&id1=<?php echo $data['id_brg']; ?>&jml=<?php echo $data['jumlah']; ?>" class="ui-shadow ui-btn ui-corner-all" data-ajax="false" data-theme="b">Update</a></div></td> -->
					<td><input type="submit" value="Update" data-theme="b"></td>
				</tr>
			</table>
		</form>
	</div>
	
	<div data-role="footer" data-position="fixed">
		<h4 style="font-size: 14px;">&copy;2015</h4>
	</div>

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
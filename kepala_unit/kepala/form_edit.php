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
	$id1=$_GET['id1'];
	?>
		<form action="edit.php?id=<?php echo $id; ?>" method="POST" data-ajax="false"> 
			<table border="0">
				<?php
					$query = mysql_query("SELECT a.id_pesan, sum(a.jml_brg) as jumlah, a.id_brg, b.id_pesan, c.id_brg, c.nama_brg FROM detail_pesan a LEFT JOIN pesan b ON a.id_pesan=b.id_pesan LEFT JOIN ms_barang c on a.id_brg=c.id_brg WHERE a.id_pesan='$id' && a.id_brg='$id1' GROUP BY nama_brg ORDER BY a.id_brg");
					$data = mysql_fetch_array($query);
				?>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input type="text" readOnly data-theme="b" name="nama_brg" id="nama_brg" value="<?php echo $data['nama_brg']; ?>"></td>
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
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
<div data-role="page">
	
	<div data-role="header">
		<h1>Ubah Data Kategori</h1>
	</div>

	<div data-role="content">
	<?php
	$id=$_GET['id'];
	?>
		<form action="edit1.php" method="POST" data-ajax="false">
			<table border="0">
				<tr>
					<td>ID Kategori</td>
					<td>:</td>
					<td><input type="text" data-theme="b" readOnly name="id_kategori" id="id_kategori" value="<?php echo $id; ?>"></td>
				</tr>
				<tr>
					<td>Nama Kategori</td>
					<td>:</td>
					<td>
						<?php
						$query = mysql_query("SELECT nama_kategori FROM kategori WHERE id_kategori='$id'");
						$data = mysql_fetch_array($query);
						?>
						<input type="text" name="nama_kategori" id="nama_kategori" value="<?php echo $data['nama_kategori']; ?>">
					</td>
					<td><input type="submit" value="Update" data-theme="b"></td>
				</tr>
			</table>
		</form>
	</div>
	
	<div data-role="footer" data-position="fixed">
		<h4 style="font-size: 14px;">&copy;2014</h4>
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
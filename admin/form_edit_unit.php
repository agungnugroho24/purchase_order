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
if ($_SESSION['id_jabatan']=='0' && $_SESSION['id_unit']=='0')
{
?>
<div data-role="page">
	
	<div data-role="header">
		<h1>Edit Data Unit</h1>
	</div>

	<div data-role="content">
	<?php
	$id=$_GET['id'];
	?>
		<form action="edit_unit.php" method="POST" data-ajax="false">
			<table border="0">
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" readOnly data-theme="b" name="id_user" id="id_user" value="<?php echo $id; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td>
						<?php
						$query = mysql_query("SELECT * FROM ms_user WHERE id_user='$id'");
						$data = mysql_fetch_array($query);
						?>
						<input type="text" name="pass" id="pass" value="<?php echo $data['pass']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input type="text" name="email" id="email" value="<?php echo $data['email']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td>:</td>
					<td colspan="2">
						<select name="jabatan" id="jabatan" required>
						<option value="">--Pilih Jabatan--</option>
						<?php
						$sql = mysql_query("SELECT id_jabatan, nama_jabatan FROM ms_jabatan WHERE id_jabatan='1' || id_jabatan='2'");
						while ($data = mysql_fetch_array($sql))
						{
						?>
							<option value="<?php echo $data['id_jabatan'] ?>"><?php echo $data['nama_jabatan'] ?></option>
						<?php
						}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Unit</td>
					<td>:</td>
					<td colspan="2">
						<select name="unit" id="unit" required>
						<option value="">--Pilih Unit--</option>
						<?php
						$sql = mysql_query("SELECT * FROM ms_unit");
						$no=1;
						while ($data = mysql_fetch_array($sql))
						{
						?>
							<option value="<?php echo $data['id_unit'] ?>"><?php echo $data['nama_unit'] ?></option>
						<?php
						}
						?>
						</select>
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
<?php
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/jquery.mobile-1.4.0.css" />
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<script src="../js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="../js/jquery.mobile-1.4.0.js"></script>
	
</head>
<body>
<?php
if ($_SESSION['id_jabatan']=='0' && $_SESSION['id_unit']=='0')
{
?>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" data-position="fixed">
		<table align="center">
		<tr>
			<td width="80px"><img src="../gambar/logo.png"></td>
			<td align="center">
				<h1 style="font-size:17px;">Aplikasi Permintaan dan Persediaan pada Perguruan Tinggi Buddhi<br>Berdasarkan Permintaan</h1>
			</td>
		</tr>
		</table>
	</div>

	<div role="main" class="ui-content jqm-content">
		<h3 class="ui-bar ui-bar-a ui-corner-all">Tambah User</h3>
			<div class="ui-body">
				<form action="add_user.php" method="POST" data-ajax="false">
					<table border="0">
					<?php
					//kode php ini kita gunakan untuk menampilkan pesan eror
					if (!empty($_GET['error']))
					{
						if ($_GET['error'] == 1)
						{
							echo '<h5>Username telah ada!</h5>';
						}
					}
					?>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td colspan="2">
								<input type="text" name="id_user" id="id_user" required>
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td colspan="2">
								<input type="text" name="pass" id="pass" required>
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td colspan="2">
								<input type="text" name="nama" id="nama" required>
							</td>
						</tr>
						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td colspan="2">
								<select name="jabatan" id="jabatan" required>
								<option value="">--Pilih Jabatan--</option>
								<?php
								$sql = mysql_query("SELECT id_jabatan, nama_jabatan FROM ms_jabatan WHERE id_jabatan='3' || id_jabatan='4'");
								while ($data = mysql_fetch_array($sql))
								{
								?>
									<option value="<?php echo $data['id_jabatan'] ?>"><?php echo $data['nama_jabatan'] ?></option>
								<?php
								}
								?>
								</select>
							</td>
							<td><input type="submit" value="Tambah" data-theme="b"></td>
						</tr>
					</table>
					<BR>
					<table border="1" align="center" cellspacing="0" cellpadding="2">
						<tr>
							<td width="30" align="center">No</td>
							<td width="100" align="center">Username</td>
							<td width="200" align="center">Password</td>
							<td width="200" align="center">Nama</td>
							<td width="200" align="center">Jabatan</td>
							<td width="150" align="center" colspan="2">Kontrol</td>
						</tr>	
								
						<?php
						$sql = mysql_query("SELECT a.id_user, a.pass, a.nama, b.id_jabatan, b.nama_jabatan FROM ms_user a LEFT JOIN ms_jabatan b ON a.id_jabatan=b.id_jabatan WHERE a.id_jabatan='3' || a.id_jabatan='4'");
						$no=1;
						while ($data = mysql_fetch_array($sql))
						{
						?>
						<tr>
							<td align="center"><?php echo $no ?></td>
							<td><?php echo $data['id_user'] ?></td>
							<td><?php echo $data['pass'] ?></td>
							<td><?php echo $data['nama'] ?></td>
							<td><?php echo $data['nama_jabatan'] ?></td>
							<td align="center">
								<a href="form_edit_user.php?id=<?php echo $data['id_user'] ?>" data-rel="dialog" data-transition="pop" class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext" ></a>
							</td>
							<td align="center">
								<a href="delete_user.php?id=<?php echo $data['id_user'] ?>" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext" data-ajax="false" onclick="return confirm('Apakah anda yakin akan menghapus username <?php echo $data["id_user"] ?>?')"></a>
							</td>
						</tr>
						<?php
						$no++;
						}
						?>
					</table>
				</form>
			</div>
	</div><!-- /content -->
	
	<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
		<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
			<li data-icon="home"><a href="index.php" data-ajax="false">Home</a></li>
			<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
				<h3>Manajemen User</h3>
				<ul>
					<li><a href="form_add_user.php" data-ajax="false">Tambah User</a></li>
					<li><a href="form_add_unit.php" data-ajax="false">Tambah Unit</a></li>
				</ul>
			</li>
			<li data-icon="power"><a href="logout.php" data-ajax="false">Logout</a></li>
		</ul>
	</div>
	<!-- /panel -->


	<div data-role="footer" data-position="fixed">
        <h4 style="font-size: 14px;">&copy;2014</h4>
    </div>
	


</div><!-- /page -->
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
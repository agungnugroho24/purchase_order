<!DOCTYPE HTML>
<html>
<head>
<title>Inventory Application</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="../css/jquery.mobile-1.4.0.css" />
<script src="../js/jquery.js"></script>
<script src="../js/jquery.mobile-1.4.0.js"></script>
</head>

<style type="text/css">
.container {
  margin: 60px auto;
  width: 640px;
}
.login {
  position: relative;
  margin: 0 auto;
  padding: 20px 20px 20px;
  width: 400px;
  background: white;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
}
.login:before {
  content: '';
  position: absolute;
  top: -8px;
  right: -8px;
  bottom: -8px;
  left: -8px;
  z-index: -1;
  background: rgba(0, 0, 0, 0.08);
  border-radius: 4px;
}
#wrap{
height:auto;
width:500px;
border:groove 3px black;
margin: 0 auto;
}
</style>
    
<body>

<div data-role="page" >

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

	<div data-role="content">
		<div class="container">
			<div class="login">
			<center><strong>Login Admin</strong>
				<form id="loginForm" method="POST" action="cek_login.php" data-ajax="false">
					<div data-role="fieldcontain">
						<label for="username">Username:</label>
						<input type="text" name="username" id="username" value="" placeholder="masukkan username" required/>
					</div>
			
					<div data-role="fieldcontain">
						<label for="password">Password: </label>
						<input type="password" data-clear-btn="true" name="password" id="password" value="" autocomplete="off" placeholder="masukkan password" required/>
					</div>
					
					<?php
					//kode php ini kita gunakan untuk menampilkan pesan eror
					if (!empty($_GET['error'])) {
						if ($_GET['error'] == 1) {
							echo '<h5>Username dan Password belum diisi!</h3>';
						} else if ($_GET['error'] == 2) {
							echo '<h5>Username belum diisi!</h3>';
						} else if ($_GET['error'] == 3) {
							echo '<h5>Username dan Password anda tidak terdaftar!</h3>';
						} else if ($_GET['error'] == 4) {
							echo '<h5>Username dan Password anda salah!</h3>';
						}
					}
					?>
			
					<button data-theme="b" type="submit" id="submit">Login</button>
			
				</form>
			</div>
		</div>
    </div>		
	
	<div data-role="footer" data-position="fixed">
        <h4 style="font-size: 14px;">&copy;2014</h4>
    </div>
</div>
</body>
</html>
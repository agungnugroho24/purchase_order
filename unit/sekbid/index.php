<?php
session_start();
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Inventory Application</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="../../css/jquery.mobile-1.4.0.css" />
<script src="../../js/a.js"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/jquery.mobile-1.4.0.js"></script>
</head>

<style type="text/css">
#wrap{
margin: 50px 50px 50px 50px;
}

.badge {
    color: #FFFFFF;
	background: #FF0000;
	border-radius: 1em 1em 1em 1em;
}

#notifikasi{
	background-color: red;
    color: #FFFFFF;
    font-size: 10pt;
    left: 250px;
    position: absolute;
    text-align: center;
    top: 10px;
	width: 16px;
	border-radius: 1em 1em 1em 1em;
}
</style>

<body>
<?php
if ($_SESSION['id_jabatan']=='2' && $_SESSION['id_unit']=='16')
{
?>
<div data-role="page">

	<div data-role="header">
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
	
		<div data-role="navbar">
		<ul>
			<li><a href="index.php?menu=home" data-icon="home" data-ajax="false">Home</a></li>
			<li><a href="index.php?menu=tambahbarang" data-icon="plus" data-ajax="false">Permintaan Barang</a></li>
			
			<?php
			$query = mysql_query("SELECT COUNT(*) as a FROM pesan WHERE sudahbaca='N' && id_unit='1' && kepada_3='2'");
			$row = mysql_fetch_array($query);
			$a=$row['a'];
			?>
			
			<!--<li><a href="index.php?menu=notif" data-icon="mail" id="notif">Notification <?php if ($a > 0){ echo  '<div id="notifikasi">'.$a.'</div>';}?></a></li>-->
			<li><a href="index.php?menu=notif" data-icon="mail" id="notif" data-ajax="false">Notifikasi <?php if ($a > 0)
			{ echo '<span class="ui-li-count badge">'.$a.'</span>'; }else{ '<span class="ui-li-count badge" style="display: none;></span>'; } ?></a></li>
			<li><a href="index.php?menu=purchase" data-icon="bullets" data-ajax="false">Purchase Order</a></li>
			<li><a href="index.php?menu=fpb" data-icon="bullets" data-ajax="false">Form pengambilan</a></li>
			<li><a href="index.php?menu=logout" data-icon="power" data-ajax="false">Logout</a></li>
		</ul>
		</div>
		
		<?php
		// show all errors and warning
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
		switch($_GET['menu'])
		{
			case "home":include("home.php");break;
			case "tambahbarang":include("tambahbarang1.php");break;
			case "purchase":include("purchase.php");break;
			case "fpb":include("fpb.php");break;
			case "notif":include("notif.php");break;
			case "logout":include("logout.php");break;
			
			
			default:include("home.php");break;
		}
		?>
		
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
<?php
// show all errors and warning
  ini_set('display_errors', 0);
  error_reporting(E_ALL);
  
session_start();
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Aplikasi pergudangan</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<!--<meta http-equiv='refresh' content='10'/> -->
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="../css/jquery.mobile-1.4.0.css" />
<script src="../js/a.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/jquery.mobile-1.4.0.js"></script>

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
.ui-icon-myicon:after {
    background-image: url("../gambar/report.png");
    /* Make your icon fit */
    background-size: 14px 14px;
}
</style>

<body>
<?php
if ($_SESSION['id_jabatan']=='3')
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
		<div data-role="navbar">
		<ul>
			<li><a href="index1.php?menu=home" data-icon="home" data-ajax="false">Beranda</a></li>
			<li><a href="index1.php?menu=inputbarang" data-icon="plus" data-ajax="false">Master Barang</a></li>
			
			<?php
			$query = mysql_query("SELECT COUNT(*) as a FROM pesan WHERE sudahbaca='N' && kepada_2='3' && kepada_3='0'");
			$row = mysql_fetch_array($query);
			$a=$row['a'];
			?>
			<?php
			$query = mysql_query("SELECT COUNT(*) as b FROM ms_barang WHERE stok < 15");
			$row = mysql_fetch_array($query);
			$b=$row['b'];
			?>
			
			<li><a href="index1.php?menu=notif" data-icon="mail" id="notif" data-ajax="false">Notifikasi <?php if ($a > 0)
			{ echo '<span class="ui-li-count badge">'.$a.'</span>'; }else{ '<span class="ui-li-count badge" style="display: none;></span>'; } ?></a></li>
			<li><a href="index1.php?menu=notifstok" data-icon="mail" id="notif" data-ajax="false">Notifikasi Stok Barang Hampir Habis<?php if ($b > 0)
			{ echo '<span class="ui-li-count badge">'.$b.'</span>'; }else{ '<span class="ui-li-count badge" style="display: none;></span>'; } ?></a></li>
			<li><a href="index1.php?menu=laporan" data-icon="bullets" data-ajax="false">Laporan</a></li>
			<li><a href="index1.php?menu=logout" data-icon="power" data-ajax="false">Keluar</a></li>
		</ul>
		</div>
		
		<?php
		switch($_GET['menu'])
		{
			case "home":include("home.php");break;
			case "inputbarang":include("input.php");break;
			case "notif":include("notif.php");break;
			case "notifstok":include("notifstok.php");break;
			case "laporan":include("laporan.php");break;
			case "logout":include("logout.php");break;
			
			
			default:include("home.php");break;
		}
		?>
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
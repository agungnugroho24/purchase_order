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
<title>Inventory Application</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<!--<meta http-equiv='refresh' content='10'/> -->
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="../../css/jquery.mobile-1.4.0.css" />
<script src="../../js/a.js"></script>
<script src="../../js/jquery.js"></script>
<script src="../../js/jquery.mobile-1.4.0.js"></script>

<script>
//$(document).ready(function() {
//$('#notif span:empty').hide();
//$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
//setInterval(function() {
//$('#notif span').load('record_count.php');
//}, 100); // the "3000" here refers to the time to refresh the div.  it is in milliseconds.
//});

//function myfun() {
//    if (document.getElementById('notif').innerHTML == '') {
//       document.getElementById('notif').style.display = "none";
//    }
//}

//myfun();

$('#badge-page1').html(++badgeCount).fadeIn();

$(document).on('pageinit',function(){
   setTimeout(function() {
      $('#notif span').text('refresh');  
   }, 5000);
});

function cek(){
    $.ajax({
        url: "cekpesan.php",
        cache: false,
        success: function(msg){
		var pisah = msg.split("|");
		if(pisah[4]=="1"){}
		else{
            
			tampildataNotif(msg); //memanggil function tampildataNotif untuk menampilkan Notif Popup
		}
		$("#notifikasi").html(pisah[0]);
        }
    });
    var waktu = setTimeout("cek()",3000);
}
</script>

</head>

<script type="text/javascript">
	jQuery.noConflict(); //katany buat mengatasi konflik perbedaan jquery...tapi belom bisa
</script>

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
if ($_SESSION['id_jabatan']=='1' && $_SESSION['id_unit']=='2')
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
					
					<?php
					$query = mysql_query("SELECT COUNT(*) as a FROM pesan WHERE sudahbaca='N' && id_unit='2' && kepada_1='1' && kepada_2='0'");
					$row = mysql_fetch_array($query);
					$a=$row['a'];
					?>
					
					<!--<li><a href="index.php?menu=notif" data-icon="mail" id="notif">Notification <?php if ($a > 0){ echo  '<div id="notifikasi">'.$a.'</div>';}?></a></li>-->
					<li><a href="index.php?menu=notif" data-icon="mail" id="notif" data-ajax="false">Notification <?php if ($a > 0)
					{ echo '<span class="ui-li-count badge">'.$a.'</span>'; }else{ '<span class="ui-li-count badge" style="display: none;></span>'; } ?></a></li>
					<li><a href="index.php?menu=logout" data-icon="power" data-ajax="false">Logout</a></li>
				</ul>
			</div>
			
			<?php
			switch($_GET['menu'])
			{
				case "home":include("home.php");break;
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
<?php
/**
Simple multiple Create, Read, Update and Delete (CRUD) using php mysql by asif18.com, for more tutorials visit: http://www.asif18.com
for this tutorial visit: http://asif18.com/20/php/multiple-insert-update-using-php-mysql-delete-multiple-records-using-checkboxes-in-php/
**/
  
include 'library.php'; // include the database and server connection file
$query 	= mysql_query("SELECT * FROM 'tmp_spp' ORDER BY nospp ASC"); // Select from the table
$count 	= mysql_num_rows($query); // Get the rows count

// Multipe insert case
if(isset($_POST['submit'])) {
	$amt = $_POST['total'];
	if($amt > 0) {

		$qry = "INSERT INTO tmp_spp(nospp,tanggal,namabrg,jumlah,satuan,harga,total,keterangan) VALUES "; // Split the mysql_query
		for($i=1; $i<=$amt; $i++) {
			$qry .= "('".$_POST["nospp$i"]."', '".$_POST["tanggal$i"]."', '".$_POST["namabrg$i"]."', '".$_POST["jumlah$i"]."', '".$_POST["satuan$i"]."', '".$_POST["harga$i"]."', '".$_POST["total$i"]."', '".$_POST["keterangan$i"]."'), "; // loop the mysql_query values to avoid more server loding time
		}
		$qry 	= substr($qry, 0, strlen($qry)-2);
		$insert = mysql_query($qry); // Execute the mysql_query
	}
	// Redirect for each cases
	if($insert) {
		$msg = '<script type="text/javascript">window.location.href = "http://localhost/lusi/unit/stmik/multi.php";</script>';
	}
	else {
		$msg = '<script type="text/javascript">alert("Server Error, Kindly Try Again");</script>';
	}
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Aplikasi pergudangan</title>
<meta name="keywords" content="multiple insert in php, multiple crud using PHP MySql, multiple insert update delete using php mysql"/>
<meta name="description" content="multiple insert update delete CRUD using PHP MySql. A simple way to insert, update and delete multiple values at a time using PHP MySql"/>
<style>
.as_wrapper{
	margin:0 auto;
	width:800px;
	font-family:Arial;
	color:#333;
	font-size:14px;
}

.as_country_container{
	padding:20px;
	border:2px dashed #17A3F7;
}

.a {
	text-decoration:none;
	color:#999;
}

.a:hover {
	text-decoration:underline;
}

.a:active {
	color:#F55925;
}
.h1 a {
	text-decoration:none;
	color:#000;
}
.h1 a:hover {
	text-decoration:underline;
}
.table {
	border:2px dashed #17A3F7;
	padding:20px;
	min-width:500px;
}
.table tr td{
	padding:5px;
}
.table_view {
	border:1px solid #17A3F7;
	min-width:400px;
	border-collapse:collapse;
}
.table_view tr.heading th {
	background:#17A3F7;
	padding:5px;
	color:#FFF;
}
.table_view tr.odd {
	background:#F7F7F7;
}
.table_view tr.even {
	background:#FFF;
}
.table_view tr.odd:hover, .table_view tr.even:hover {
	background:#FEFDE0;
}
.table_view tr td {
	padding:5px;
}
.input {
	border:#CCC solid 1px;
	padding:5px;
}

.input:focus {
	border:#999 solid 1px;
	background:#FEFDE0;
	padding:5px;
}
</style>
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
	jQuery.noConflict(); //mengatasi konflik perbedaan jquery
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
</head>

<body>
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
			<li><a href="index.php?menu=home" data-icon="home" data-ajax="false">Beranda</a></li>
			<li><a href="index.php?menu=tambahbarang" data-icon="plus" data-ajax="false">Permintaan Barang</a></li>
			
			<?php
			$query = mysql_query("SELECT COUNT(*) as a FROM pesan WHERE sudahbaca='N' && id_unit='1' && kepada_3='2'");
			$row = mysql_fetch_array($query);
			$a=$row['a'];
			?>
			
			<!--<li><a href="index.php?menu=notif" data-icon="mail" id="notif">Notification <?php if ($a > 0){ echo  '<div id="notifikasi">'.$a.'</div>';}?></a></li>-->
			<li><a href="index.php?menu=notif" data-icon="mail" id="notif" data-ajax="false">Notifikasi <?php if ($a > 0)
			{ echo '<span class="ui-li-count badge">'.$a.'</span>'; }else{ '<span class="ui-li-count badge" style="display: none;></span>'; } ?></a></li>
			<li><a href="multi.php" target="blank" data-icon="bullets" data-ajax="false">Purchase Order</a></li>
			<li><a href="index.php?menu=fpb" data-icon="bullets" data-ajax="false">Form pengambilan</a></li>
			<li><a href="index.php?menu=logout" data-icon="power" data-ajax="false">Keluar</a></li>
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
			case "purchase":include("multi.php");break;
			case "fpb":include("fpb.php");break;
			case "notif":include("notif.php");break;
			case "logout":include("logout.php");break;
			
			
			default:include("home.php");break;
		}
		?>
	

	
</div>
<div class="as_wrapper" style="width:1200px;">
	<h1 class="h1"><a href=""></a></h1>
	<div class="as_country_container">
	<?php
    echo $msg; // Display the result message generated in the above PHP actions,
    //Create form to get number of rows to be generated to insert 
    ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get" name="amtForm">
        <table align="center" >
        <tr>
            <td>Masukan jumlah barang</td>
            <td><input type="text" name="amt" class="input" <?php if(isset($_GET["amt"])) { ?> value="<?php echo $_GET["amt"]; ?>" <?php } ?> /></td>
            <td><input type="submit" value="Ok"  /></td>
        </tr>
        </table>
        <br />
        </form>
        <?php
        // Get the amount to be generated
        if(isset($_GET['amt'])) {
			if($_GET['amt'] > 0) {
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table">
            <tr>
                <td align="center">No</td>
				<td align="center">Tanggal</td>
				<td align="center">No. SPP</td>
                <td align="center">Nama barang</td>
                <td align="center">Jumlah</td>
                <td align="center">Satuan</td>
				<td align="center">Harga</td>
				<td align="center">Keterangan</td>
            </tr>
            <?php
                // Loop the rows and inputs according to the amount
                for($i=1; $i<=$_GET['amt']; $i++) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="tanggal<?php echo $i; ?>" class="input" /></td>
                <td><input type="text" name="nospp<?php echo $i; ?>" class="input" /></td>
                <td><input type="text" name="namabrg<?php echo $i; ?>" class="input" /></td>
				 <td><input type="text" name="jumlah<?php echo $i; ?>" class="input" /></td>
                <td><select name="satuan<?php echo $i; ?>" id="satuan">
										<option value="">--Pilih Satuan--</option>
										<option value="pcs">pcs</option>
		</select></td>
                <td><input type="text" name="harga<?php echo $i; ?>" class="input" /></td>
				 <td><input type="text" name="keterangan<?php echo $i; ?>" class="input" /></td>
			</tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="8" align="center">
                <input type="hidden" name="total" value="<?php echo $i-1; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="submit" value="Tambah" /></td>
            </tr>
            </table>
            </form>
        <?php 
			}
			else {
			?>
            <table align="center">
            <tr>
                <td align="center">Masukan angka lebih besar dari '0'</td>
			</tr>
            </table>
            <?php
			}
        }
        // Case for view and delete the data
        elseif(isset($_GET['view'])) {
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center" class="table_view">
            <tr class="heading">
                <th>&nbsp;</th>
                <th>Sno</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Qualification</th>
            </tr>
            <?php
                while($row = mysql_fetch_array($query))
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>">
                <td><input type="checkbox" name="delete<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['qualification']; ?></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitDelete" value="Delete" /></td>
            </tr>
            </table>
            </form>
		<?php
			}
        }
        // Case for view and update the rows
        elseif(isset($_GET['update'])) {
			if($count <= 0) {
			?>
            <table align="center">
            <tr>
                <td>No records found!</td>
			</tr>
            </table>
            <?php
			} 
			else {
            $i = 0;
        	?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table align="center">
            <tr>
                <td align="center">No</td>
                <td align="center">First Name</td>
                <td align="center">Last Name</td>
                <td align="center">Qualification</td>
            </tr>
            <?php
                // Display the rows in inputs that can be editable
                while($row = mysql_fetch_array($query))	{
                    $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $i; ?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row['id']; ?>" /></td>
                <td><input type="text" name="fname<?php echo $i; ?>" value="<?php echo $row['fname']; ?>" class="input" /></td>
                <td><input type="text" name="lname<?php echo $i; ?>" value="<?php echo $row['lname']; ?>" class="input" /></td>
                <td><input type="text" name="qualification<?php echo $i; ?>" value="<?php echo $row['qualification']; ?>" class="input" /></td>
            </tr>
            <?php
                }
            ?>
            <tr>
                <td colspan="5" align="center">
                <input type="hidden" name="total" value="<?php echo $i; ?>" /> <?php // Post the total rows count value ?>
                <input type="submit" name="SubmitUpdate" value="Update" /></td>
            </tr>
            </table>
            </form>
        <?php
        	}
		}
        ?>
	</div>
	&nbsp;&nbsp;
</div>
	<div data-role="footer" data-position="fixed">
        <h4 style="font-size: 14px;">&copy;2015</h4>
    </div>
</body>
</html>
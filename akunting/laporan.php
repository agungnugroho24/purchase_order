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

<style type="text/css">
.tablist-left {
    width: 25%;
    display: inline-block;
}
.tablist-content {
    width: 60%;
    display: inline-block;
    vertical-align: top;
    margin-left: 5%;
}
.ui-datepicker {
	width: 17em;
	padding: .2em .2em 0;
	display: none;
	
	border: 1px solid #aaaaaa;
	background: #ffffff url(images/ui-bg_flat_75_ffffff_40x100.png) 50% 50% repeat-x;
	color: #222222;
}
.ui-datepicker .ui-datepicker-header {
	position: relative;
	padding: .2em 0;
	
	border: 1px solid #aaaaaa;
	background: #cccccc url(images/ui-bg_highlight-soft_75_cccccc_1x100.png) 50% 50% repeat-x;
	color: #222222;
	font-weight: bold;
}

/* u/ tombol prev n next */
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
	position: absolute;
	top: 2px;
	width: 1.8em;
	height: 1.8em;
	
	background: #fbf9ee;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
	top: 1px;
}

/* u/ tombol prev */
.ui-datepicker .ui-datepicker-prev {
	left: 2px;
}

/* u/ tombol next */
.ui-datepicker .ui-datepicker-next {
	right: 2px;
	

}
.ui-datepicker .ui-datepicker-prev-hover {
	left: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
	right: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
	display: block;
	position: absolute;
	left: 50%;
	margin-left: -8px;
	top: 50%;
	margin-top: -8px;
	

}
.ui-datepicker .ui-datepicker-title {
	margin: 0 2.3em;
	line-height: 1.8em;
	text-align: center;
	

}
.ui-datepicker .ui-datepicker-title select {
	font-size: 1em;
	margin: 1px 0;
	
	background: #fbf9ee;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
	width: 49%;
}
.ui-datepicker table {
	width: 100%;
	font-size: .9em;
	border-collapse: collapse;
	margin: 0 0 .4em;
	
	
}
.ui-datepicker th {
	padding: .7em .3em;
	text-align: center;
	font-weight: bold;
	border: 0;
	
}
.ui-datepicker td {
	border: 0;
	padding: 1px;
}

/* u/ tombol angka*/
.ui-datepicker td span,
.ui-datepicker td a {
	display: block;
	padding: .2em;
	text-align: right;
	text-decoration: none;
	
	color: #212121;;
	background: #e6e6e6;
}

.ui-datepicker .ui-datepicker-buttonpane {
	background-image: none;
	margin: .7em 0 0 0;
	padding: 0 .2em;
	border-left: 0;
	border-right: 0;
	border-bottom: 0;
	

}

/* u/ tombol today n done*/
.ui-datepicker .ui-datepicker-buttonpane button {
	float: right;
	margin: .5em .2em .4em;
	cursor: pointer;
	padding: .2em .6em .3em .6em;
	width: auto;
	overflow: visible;
	

}

/* u/ tombol today */
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current{
	float: left;
}

.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
	border: 1px solid #fcefa1;
	background: #fbf9ee url(images/ui-bg_glass_55_fbf9ee_1x400.png) 50% 50% repeat-x;
	color: #363636;
}
.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
	color: #363636;
}

.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
	border: 1px solid #aaaaaa;
	background: #ffffff url(images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x;
	font-weight: normal;
	color: #212121;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: #212121;
	text-decoration: none;
}



</style>

<!--  <link rel="stylesheet" href="../css/jquery-ui.css"> -->
  <script src="../js/jquery-1.10.2.js"></script>
  <script src="../js/jquery-ui.js"></script>
<!--  <link rel="stylesheet" href="/resources/demos/style.css"> -->

  <script>

/*
function a(){
rB1=document.form1.elements['radio1'];
tB1=document.form1.elements['date1'];
tB2=document.form1.elements['date2'];

    rB1.onchange = function() {
		tB1[this].disabled =!(this.checked);
		tB1[this].readOnly =!(this.checked);
    };
}
*/
window.onload = function() {
document.getElementById('radio1').onchange = disablefield;
document.getElementById('radio2').onchange = disablefield;
document.getElementById('radio3').onchange = disablefield;
}
/*
function disablefield()
{
if ( document.getElementById('radio1').checked == true ){
document.getElementById('date1').disabled = false;
document.getElementById('date2').disabled = false;
document.getElementById('date3').disabled = true;
document.getElementById('date4').disabled = true;
}
else if (document.getElementById('radio2').checked == true ){
document.getElementById('date1').disabled = true;
document.getElementById('date2').disabled = true;
document.getElementById('date3').disabled = false;
document.getElementById('date4').disabled = true;}
else if (document.getElementById('radio3').checked == true ){
document.getElementById('date1').disabled = true;
document.getElementById('date2').disabled = true;
document.getElementById('date3').disabled = true;
document.getElementById('date4').disabled = false;}
}
if ( document.getElementById('date1').disabled == false ){
document.getElementById('date2').focus();
}
*/
  $(function() {
    $( "#date1" ).datepicker({
      showButtonPanel: true
    });
	$( "#date2" ).datepicker({
      showButtonPanel: true
    });
	$( "#date3" ).datepicker({
      showButtonPanel: true
    });
	$( "#date4" ).datepicker({
      showButtonPanel: true
    });
	$( "#date5" ).datepicker({
      showButtonPanel: true
    });
	$( "#date6" ).datepicker({
      showButtonPanel: true
    });
  });
</script>
</head>
<body>
<?php
if ($_SESSION['id_jabatan']=='4')
{
?>
<div data-role="content">
	<div data-role="tabs">
		<ul data-role="listview" data-inset="true" class="tablist-left">
			<li><a href="#report1" data-ajax="false">Laporan Pengadaan Barang</a></li>
			<li><a href="#report2" data-ajax="false">Laporan Permintaan Barang</a></li>
			<li><a href="#report3" data-ajax="false">Laporan Persediaan Barang</a></li>
		</ul>
		
		<div id="report1" class="ui-body-d tablist-content">
			
				<ul data-role="listview" data-inset="true">
					<li class="ui-field-contain">
						<center><label for="name2"><strong>Laporan Pengadaan Barang</strong></label>
					</li>
					<li class="ui-field-contain">
						<label for="name2">Periode Pengadaan Barang</label>
					</li>
					<li class="ui-field-contain">
						<div data-role="tabs" id="tabs">
						  <div data-role="navbar">
							<ul>
							  <li><a href="#harian" data-ajax="false">Harian</a></li>
							  <li><a href="#bulanan" data-ajax="false">Bulanan</a></li>
							  <li><a href="#tahunan" data-ajax="false">Tahunan</a></li>
							</ul>
						  </div>
						  <div id="harian" class="ui-body-d ui-content ui-btn-active">
						  <form action="laporan_input_harian.php" method="POST" data-ajax="false">
							<h1>Harian</h1>
								<table border="0" align="center">
									<tr>
										<td width="200px"><input type="text" id="date1" name="date1" data-mini="true"></td>
										<td width="20px" align="center"> - </td>
										<td width="200px"><input type="text" id="date2" name="date2" data-mini="true"></td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
								</fieldset>
						  </form>
						  </div>
						  <div id="bulanan" class="ui-body-d ui-content">
						  <form action="laporan_input_bulanan.php" method="POST" data-ajax="false">
							<h1>Bulanan</h1>
								<table border="0" align="center">
									<tr>
										<td width="200px">
											<select name="select1" id="select1">
												<option value="January">Januari</option>
												<option value="February">Februari</option>
												<option value="March">Maret</option>
												<option value="April">April</option>
												<option value="May">Mei</option>
												<option value="June">Juni</option>
												<option value="July">Juli</option>
												<option value="August">Agustus</option>
												<option value="September">September</option>
												<option value="October">Oktober</option>
												<option value="November">November</option>
												<option value="December">Desember</option>												
											</select>
										</td>
										<td>
											<select name="select2" id="select2">
												<?php
												$query=mysql_query("SELECT DATE_FORMAT(tgl, '%Y') as tgl1 FROM in_barang GROUP BY tgl1");
												while($data = mysql_fetch_array($query))
												{
												?>
													<option value="<?php echo $data['tgl1'] ?>"><?php echo $data['tgl1'] ?></option>
												<?php
												}
												?>
											</select>
										</td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
								</fieldset>
						  </form>
						  </div>
						  <div id="tahunan" class="ui-body-d ui-content">
						  <form action="laporan_input_tahunan.php" method="POST" data-ajax="false">
							<h1>Tahunan</h1>
								<table border="0" align="center">
									<tr>
										<td>
											<select name="select1" id="select1">
												<?php
												$query=mysql_query("SELECT DATE_FORMAT(tgl, '%Y') as tgl1 FROM in_barang GROUP BY tgl1");
												while($data = mysql_fetch_array($query))
												{
												?>
													<option value="<?php echo $data['tgl1'] ?>"><?php echo $data['tgl1'] ?></option>
												<?php
												}
												?>
											</select>
										</td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
								</fieldset>
						  </form>
						  </div>
						</div>
					</li>
				</ul>
			
	    </div>
		<div id="report2" class="ui-body-d tablist-content">
			
				<ul data-role="listview" data-inset="true">
					<li class="ui-field-contain">
						<center><label for="name2"><strong>Laporan Permintaan Barang</strong></label>
					</li>
					<li class="ui-field-contain">
						<label for="name2">Periode Permintaan Barang</label>
					</li>
					<li class="ui-field-contain">
						<div data-role="tabs" id="tabs">
						  <div data-role="navbar">
							<ul>
							  <li><a href="#harian" data-ajax="false">Harian</a></li>
							  <li><a href="#bulanan" data-ajax="false">Bulanan</a></li>
							  <li><a href="#tahunan" data-ajax="false">Tahunan</a></li>
							</ul>
						  </div>
						  <div id="harian" class="ui-body-d ui-content ui-btn-active">
						  <form action="laporan_out_harian.php" method="POST" data-ajax="false">
							<h1>Harian</h1>
								<table border="0" align="center">
									<tr>
										<td width="200px"><input type="text" id="date3" name="date3" data-mini="true"></td>
										<td width="20px" align="center"> - </td>
										<td width="200px"><input type="text" id="date4" name="date4" data-mini="true"></td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
								</fieldset>
						  </form>
						  </div>
						  <div id="bulanan" class="ui-body-d ui-content">
						  <form action="laporan_out_bulanan.php" method="POST" data-ajax="false">
							<h1>Bulanan</h1>
								<table border="0" align="center">
									<tr>
										<td width="200px">
											<select name="select1" id="select1">
												<option value="January">Januari</option>
												<option value="February">Februari</option>
												<option value="March">Maret</option>
												<option value="April">April</option>
												<option value="May">Mei</option>
												<option value="June">Juni</option>
												<option value="July">Juli</option>
												<option value="August">Agustus</option>
												<option value="September">September</option>
												<option value="October">Oktober</option>
												<option value="November">November</option>
												<option value="December">Desember</option>												
											</select>
										</td>
										<td>
											<select name="select2" id="select2">
												<?php
												$query=mysql_query("SELECT DATE_FORMAT(tgl, '%Y') as tgl1 FROM in_barang GROUP BY tgl1");
												while($data = mysql_fetch_array($query))
												{
												?>
													<option value="<?php echo $data['tgl1'] ?>"><?php echo $data['tgl1'] ?></option>
												<?php
												}
												?>
											</select>
										</td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
								</fieldset>
						  </form>
						  </div>
						  <div id="tahunan" class="ui-body-d ui-content">
						  <form action="laporan_out_tahunan.php" method="POST" data-ajax="false">
							<h1>Tahunan</h1>
								<table border="0" align="center">
									<tr>
										<td>
											<select name="select1" id="select1">
												<?php
												$query=mysql_query("SELECT DATE_FORMAT(tgl, '%Y') as tgl1 FROM in_barang GROUP BY tgl1");
												while($data = mysql_fetch_array($query))
												{
												?>
													<option value="<?php echo $data['tgl1'] ?>"><?php echo $data['tgl1'] ?></option>
												<?php
												}
												?>
											</select>
										</td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
								</fieldset>
						  </form>
						  </div>
						</div>
					</li>
				</ul>
			
	    </div>
		<div id="report3" class="ui-body-d tablist-content">
			<form action="laporan_stok.php" method="POST" data-ajax="false">	
				<ul data-role="listview" data-inset="true">
					<li class="ui-field-contain">
						<center><label for="name2"><strong>Laporan Persediaan Barang</strong></label>
					</li>
<!--
					<li class="ui-field-contain">
						<label for="name2">Periode Persediaan Barang</label>
					</li>

					<li class="ui-field-contain">
						<div data-role="tabs" id="tabs">
						  <div data-role="navbar">
							<ul>
							  <li><a href="#harian" data-ajax="false">Harian</a></li>
							  <li><a href="#bulanan" data-ajax="false">Bulanan</a></li>
							  <li><a href="#tahunan" data-ajax="false">Tahunan</a></li>
							</ul>
						  </div>
						  <div id="harian" class="ui-body-d ui-content ui-btn-active">
						  <form action="laporan_stok_harian.php" method="GET" data-ajax="false">
							<h1>Harian</h1>
								<table border="0" align="center">
									<tr>
										<td width="200px"><input type="text" id="date3" name="date3" data-mini="true"></td>
										<td width="20px" align="center"> - </td>
										<td width="200px"><input type="text" id="date4" name="date4" data-mini="true"></td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
									<div class="ui-block-b"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Download"></div>
								</fieldset>
						  </form>
						  </div>
						  <div id="bulanan" class="ui-body-d ui-content">
						  <form action="laporan_stok_bulanan.php" method="GET" data-ajax="false">
							<h1>Bulanan</h1>
								<table border="0" align="center">
									<tr>
										<td width="200px">
											<select name="select1" id="select1">
												<option value="January">Januari</option>
												<option value="February">Februari</option>
												<option value="March">Maret</option>
												<option value="April">April</option>
												<option value="May">Mei</option>
												<option value="June">Juni</option>
												<option value="July">Juli</option>
												<option value="August">Agustus</option>
												<option value="September">September</option>
												<option value="October">Oktober</option>
												<option value="November">November</option>
												<option value="December">Desember</option>												
											</select>
										</td>
										<td>
											<select name="select2" id="select2">
												<?php
												$query=mysql_query("SELECT DATE_FORMAT(tgl, '%Y') as tgl1 FROM in_barang GROUP BY tgl1");
												while($data = mysql_fetch_array($query))
												{
												?>
													<option value="<?php echo $data['tgl1'] ?>"><?php echo $data['tgl1'] ?></option>
												<?php
												}
												?>
											</select>
										</td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
									<div class="ui-block-b"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Download"></div>
								</fieldset>
						  </form>
						  </div>
						  <div id="tahunan" class="ui-body-d ui-content">
						  <form action="laporan_stok_tahunan.php" method="GET" data-ajax="false">
							<h1>Tahunan</h1>
								<table border="0" align="center">
									<tr>
										<td>
											<select name="select1" id="select1">
												<?php
												$query=mysql_query("SELECT DATE_FORMAT(tgl, '%Y') as tgl1 FROM in_barang GROUP BY tgl1");
												while($data = mysql_fetch_array($query))
												{
												?>
													<option value="<?php echo $data['tgl1'] ?>"><?php echo $data['tgl1'] ?></option>
												<?php
												}
												?>
											</select>
										</td>
									</tr>
								</table>
								<fieldset class="ui-grid-a">
									<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
									<div class="ui-block-b"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Download"></div>
								</fieldset>
						  </form>
						  </div>
						</div>
					</li>
-->
					<li class="ui-field-contain">
						<fieldset class="ui-grid-a">
							<div class="ui-block-a"><input type="submit" class="ui-btn ui-corner-all ui-btn-a" value="Lihat"></div>
						</fieldset>
					</li>
				</ul>
			</form>
	    </div>
    </div>
<!--
	<ul data-role="listview" class="tablist-left" data-inset="true">
		<li data-role="collapsible">
			<h2>Laporan Pengadaan Barang</h2>
				<ul data-role="listview" data-shadow="false" data-inset="true" data-corners="false">
					<li><a href="#one" data-ajax="false">Harian</a></li>
					<li><a href="#two" data-ajax="false">Bulanan</a></li>
					<li><a href="a.php" data-ajax="false">Tahunan</a></li>
				</ul>
		</li>
		<li data-role="collapsible" data-iconpos="right" data-shadow="false" data-corners="false">
			<h2>Laporan Permintaan Barang</h2>
				<ul data-role="listview" data-shadow="false" data-inset="true" data-corners="false">
					<li><a href="#harian" data-ajax="false">Harian</a></li>
					<li><a href="#bulanan" data-ajax="false">Bulanan</a></li>
					<li><a href="#tahunan" data-ajax="false">Tahunan</a></li>
				</ul>
		</li>
		<li data-role="collapsible" data-iconpos="right" data-shadow="false" data-corners="false">
			<h2>Laporan Persediaan Barang</h2>
				<ul data-role="listview" data-shadow="false" data-inset="true" data-corners="false">
					<li><a href="#harian" data-ajax="false">Harian</a></li>
					<li><a href="#bulanan" data-ajax="false">Bulanan</a></li>
					<li><a href="#tahunan" data-ajax="false">Tahunan</a></li>
				</ul>
		</li>
	</ul>
	
	<div id="one" class="tablist-content">
		aaa
	</div>
	<div id="a" class="tablist-content">
		aaa
	</div>
	<div id="harian" class="tablist-content">
			<h4>Laporan Harian</h4>
	</div>
	<div id="bulanan" class="ui-body-d tablist-content">
			<h4>Laporan Bulanan</h4>
	</div>
	<div id="tahunan" class="ui-body-d tablist-content">
			<h4>Laporan Tahunan</h4>
	</div>

-->	



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
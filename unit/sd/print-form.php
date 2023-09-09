<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$today = date("d-M-Y");
include '../connect.php';
	$query=mysql_query("SELECT * FROM fpb order by no desc");
	$no = 1;
    $data = mysql_fetch_array($query)
?>
<html>
<head>
    <title>Print Formulir</title>
    <link rel='stylesheet' href='gaya.css'>

<html>
<head>
    <title>Print Formulir</title>
    <link rel='stylesheet' href='gaya.css'>
    <?php 
    echo "<script type='text/javascript'>javascript:window.print()</script>";
    ?>
</head>
<body>
<!-- tabel body -->
<table border='0' cellpadding='3' cellspacing='1' width='700' style='font-family: "time news roman"; font-size: 12px; background: #ffffff;'>
    <!-- kop -->
    <tr><td colspan='3'><?php include 'kop.php' ?></td></tr>
    <!-- kop -->
    <tr>
        <td colspan='3' align='center'>FORM PENGAMBILAN SPP</td>
    </tr>
    <tr>
        <td width='20'><!-- margin kanan --><br></td>
        <td>
        <!-- Bagian Tengah / Isi -->
            <!-- tabel kontent -->
            <table style='font-family: "time news roman"; font-size: 12px;' border='0' cellpadding='3' cellspacing='1' width='100%'>
			 <tr>
                    <td>No. SPP</td><td width='5'>:</td><td><?php echo $data['nospp']; ?></td>
                </tr>
				<tr>
                    <td>Nama barang</td><td width='5'>:</td><td><?php echo $data['namabrg']; ?></td>
                </tr>
			    <tr>
                    <td>Jenis</td><td width='5'>:</td><td><?php echo $data['jenis']; ?></td>
                </tr>
				<tr>
                    <td>Unit</td><td width='5'>:</td><td><?php echo $data['unit']; ?></td>
                </tr>
				<tr>
                    <td>Pengguna</td><td width='5'>:</td><td><?php echo $data['pengguna']; ?></td>
                </tr>
				<tr>
                    <td>Penanggung jawab</td><td width='5'>:</td><td><?php echo $data['penanggung_jawab']; ?></td>
                </tr>
                <tr>
				</table>
				
				<br><br>
				<table style='font-family: "time news roman"; font-size: 12px;' border='0' cellpadding='3' cellspacing='1' width='100%'>
				<tr>
                    <td>Tangerang, <?php echo $today?></td><td></td>
                </tr
				<tr>
                    <td>Ttd Kepala Bagian</td><td></td>
                </tr>
                <tr>
				</table><br>
        </td>
        <td width='20'><!-- margin kiri --></td>
    </tr>
</table>   

</body>
    
</html>
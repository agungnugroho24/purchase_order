<!DOCTYPE HTML>
<html>
<head>
<title>Aplikasi pergudangan</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="css/jquery.mobile-1.4.0.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery.mobile-1.4.0.js"></script>
</head>

<style type="text/css">
.container {
  margin: 80px auto;
  width: 640px;
}
a:link {
  text-decoration:none;
}
a:hover {
  text-decoration:underline;
}
</style>
    
<body>
        
<div data-role="page" >
	<div data-role="header" data-position="fixed">
		<table align="center">
			<tr>
				<td width="80px"></td>
				<td align="center">
					<h1 style="font-size:17px;">Sistem Informasi Inventory pada PT. Winner Stainless Steel Tube Indonesia <br></h1>
				</td>
			</tr>
		</table>
	</div>
	
	<div data-role="content">
		<div class="container">
			<table align="center">
				<tr>
					<td width="200px" align="center"><a href="unit/index.php" data-ajax="false"><img src="gambar/unit.png" height="128" width="128"><br>Unit</a></td>
					<td width="200px" align="center"><a href="gudang/index.php" data-ajax="false"><img src="gambar/gudang.png" height="128" width="128"><br>Gudang</a></td>
				</tr>
				<tr height="15px"></tr>
				<tr>
					<td width="200px" align="center"><a href="kepala_unit/index.php" data-ajax="false"><img src="gambar/kepala_unit.png" height="128" width="128"><br>Kepala Unit</a></td>
					<td width="200px" align="center"><a href="PO/index.php" data-ajax="false"><img src="gambar/unit.png" height="128" width="128"><br>Purchasing order</a></td>
				</tr>
			</table>
		</div>
    </div>	
	
	<div data-role="footer" data-position="fixed">
		<h4 style="font-size: 14px;">Copyright &copy; 2015</h4>
	</div>
</div>

</body>
</html>
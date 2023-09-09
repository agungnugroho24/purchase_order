<?php  
    include("../connection.php")
?>
<?php

	
  session_start();
if(empty($_SESSION['uname']))
    header("Location:../index.html");   


if(isset($_GET['logout']))
{
    session_destroy();
    header("Location:../index.html");
}    
?>

<html>
<head>
	<title>Form User</title>
	<link rel="stylesheet" href="../css/form.css" />
	<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
	<script src="js/facebox.js" type="text/javascript"></script> 
	<script src="../js/jquery-latest.js"></script> 


	<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
	<script src="js/facebox.js" type="text/javascript"></script> 

	<script src="../../jquery.mobile-1.3.2.min.js"></script>

	<script language="javascript">
	</script>
</head>
<body>



<!--untuk menampilkan Data-->		
<a href="adminhome.php?menu=registasiuser"><img src="images/btn_add_data.png"></a><br/><br/>

				<form action='adminhome.php?menu=formuser' method="POST">
					<input type='text' value='' name='qcari'>
					<input type='submit' value='cari'><a href='adminhome.php?menu=formuser'>All</a>
				</form>	
<div style='overflow:auto; width:ancho; height:300px;'> 
<table border="1" cellpadding="4" cellspacing="0" width="100%">

	<tr bgcolor="#ebebeb"><th>No.</th><th>No Pendaftaran</th><th>Password</th><th>Nama Calon mahasiswa</th><th>Gelombang</th><th>Jk</th><th>Alamat</th><th>Control</th></tr>
	<?php
		$no=1;
		$query1="select * from ms_user where institusi='4'";
		if(isset($_POST['qcari'])){
			$qcari=$_POST['qcari'];
			$query1="SELECT * FROM  ms_user  
			where iduser like '%$qcari%' AND institusi='4'";
			}

			$result=mysql_query($query1) or die(mysql_error());
			$no=1; //penomoran 
			while($rows=mysql_fetch_object($result)){
	?>
	
		<tr>
			<td align='center'><?php echo $no;?></td>
			<td align='center'><?php		echo $rows -> iduser;?></td>
			<td><?php		echo $rows -> password;?></td>
			<td><?php		echo $rows -> nm_depan." ". $rows -> nm_belakang;?></td>
			<td align='center'><?php		echo $rows -> gelombang;?></td>
			<td><?php		echo $rows -> jk;?></td>
			<td><?php		echo $rows -> alamat;?></td>
			
			
			<td width='130px'align='center'>
			<a href="adminhome.php?menu=edituser&&id=<?php		echo $rows -> iduser; ?>"><img src="images/edit.png" width="20px" height="20px"></a> | 
			
			
			
			<a href='query_hapus_datamhs.php?id=<?php		echo $rows -> iduser;?>' onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/delete.png" width="20px" height="20px"></a> | <a href='cetak_kartu_usm.php?id=<?php		echo $rows -> iduser;?>' base target='_blank'/><img src="images/print.png" width="20px" height="20px"> </a> </td>
		</tr>
	
		<?php
		$no++;
	}
	?>
</table>
</div>
</body>
</html>




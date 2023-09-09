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
<title></title>
<style type="text/css">
#wrap {
width: 800px;
background: #ffffff;
margin: 0 auto;
}

.lifted_content_box {
    display: block;
    width: 500px;
    margin: 0 auto;
    position: relative;
}

.lifted_content_box h1 {
    font-size: 14px;
    font-weight: bold;
    line-height: 2em;
    margin: 0; /* for the triangular shape/cut */
    height: 0;
    border-bottom: 25px solid #505050; /* kinda acts as the height */
    border-right: 15px solid transparent; /* adjust to change the angle */
    display: inline-block;
    color: #fff;
    text-shadow: 1px 1px 0 #585858;
    padding: 0 10px;
    vertical-align: bottom; /* fixes the mysterious gaps bug */
}

.lifted_content_box div {
    padding: 10px;
    background: #fff;
    border-top: 5px solid #505050; /* was just experimenting. gives a nice look and feel: D */;
    -webkit-box-shadow: inset 0px 0px 10px rgba(0,0,0,0.20);
    -moz-box-shadow: inset 0px 0px 10px rgba(0,0,0,0.20);
    box-shadow: inset 0px 0px 10px rgba(0,0,0,0.20);
}

.lifted_content_box p {
    margin: 0 0 10px;
    color: #555;
    line-height: 1.5em;
}

/* lifted shadows  */

.lifted_content_box::before,
.lifted_content_box::after {
    content: '';
    position: absolute;
    width: 50%; /* maybe we could set a max-width for larger content boxes ? */
    height: 20px;
    -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    -webkit-transform: rotate(-5deg) skew(-10deg);
    -moz-transform: rotate(-5deg) skew(-10deg);
    -o-transform: rotate(-5deg) skew(-10deg);
    -ms-transform: rotate(-5deg) skew(-10deg);
    transform: rotate(-5deg) skew(-10deg);
    left: 10px;
    bottom: 13px;
    z-index: -1;
}

.lifted_content_box::after {
    left: auto;
    right: 10px;
    -webkit-transform: rotate(5deg) skew(10deg);
    -moz-transform: rotate(5deg) skew(10deg);
    -o-transform: rotate(5deg) skew(10deg);
    -ms-transform: rotate(5deg) skew(10deg);
    transform: rotate(5deg) skew(10deg);
}
</style>
</head>

<body>
<?php
if ($_SESSION['id_jabatan']=='1' && $_SESSION['id_unit']=='16')
{
?>
	<div data-role="content">
		<?php
			$sql = mysql_query("SELECT * FROM ms_user WHERE id_user = '$_SESSION[id_user]'");
			while ($data = mysql_fetch_array($sql))
			{
			 $id_user = $data['id_user'];
			}
		?>

		<BR><BR>
		<table border="0" align="center">
		<tr>
			<td><img src="../../gambar/kepala_unit.png" height="128" width="128"></td> 
			<td width="10"></td>
			<td>
				<article class="lifted_content_box">
				<h1>HOME</h1>
				<div>
					<p align="center">Selamat Datang, <?php echo $id_user; ?>!</p>
				</div>
				</article>
			</td>
		</tr>
		</table>
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
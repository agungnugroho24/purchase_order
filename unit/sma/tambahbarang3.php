<?php
session_start();
include("../../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../../index.php'); }//include "../index.html";}
else{

if(isset($_GET["chk"]) && $_GET["num"])
{
$a=$_GET["chk"];
$b=($_GET["num"]);

$c=array(
		$a,
		$b)
		;

print_r($a);
print_r($b);

//echo "<br>";
//echo $c[0][0]." ";
//echo $c[1][0]."<br>";

//foreach ($a as $id){
	
//	echo $id."<br>";
//$query="INSERT INTO minta VALUES ($id, $num)";
//}
//foreach ($b as $num){
	
//	echo $num."<br>";
//$query="INSERT INTO minta VALUES ($id, $num)";
//}

//$i=0;
for ($i=0; $i < count($a); $i++){

$d=$c[0][$i]; //id_brg
$e=$c[1][$i]; //jml_brg
//$f="out";	  //ket

//echo $d."<br>";
//echo $e."<br><br><br>";
//$id=$_SESSION['id_user'];
	$query = mysql_query("INSERT INTO tmp_sma (id_brg, id_unit, jml_brg, tgl, time) VALUES ('$d', '8' , '$e', now(), now())") or die(mysql_error());

//echo $c[0][$i]." ".$c[1][$i]."<br>";
}
}

//echo $query2;
if($query) {
?>	<script> window.location="index.php?menu=tambahbarang"; </script>
<?php  }
}
?>
 

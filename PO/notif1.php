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
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="../css/jquery.mobile-1.4.0.css" />
<script src="../js/jquery.js"></script>
<script src="../js/jquery.mobile-1.4.0.js"></script>
<style type="text/css">
@media print {
#noprint { display: none; }
#print { display: block; } }
</style>
</head>
<style type="text/css">
.paper {
    background-color: #fff4c0;
    background-image: -webkit-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%); 
    background-image: -moz-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-image: -0-linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-image:  linear-gradient(top, #dbe8bc 0%, #dbe8bc 5%, transparent 5%, transparent 100%);
    background-size: 1px 36px; box-shadow: 0 1px 3px rgba(0, 0, 0, .5);
    box-shadow: 0 1px 4px rgba(0,0,0,.25);
    margin: 0 0 0 6px;
    position: relative;
    width: 492px;
    padding: 2px 24px 24px 84px;
}
.paper:after {
    border-left: 1px solid rgba(255,0,0,.2);
    border-right: 1px solid rgba(255,0,0,.2);
    bottom: 0;
    content: '';
    left: 58px;
    position: absolute;
    top: 0;
    width: 2px;
}
.paper:before {
    bottom: 8px;
    border-radius: 4px;
    box-shadow: 0 10px 10px rgba(0,0,0,.25);
    content: '';
    height: 100px;
    max-width: 300px;
    position: absolute;
    right: 5px;
    width: 300px;
    z-index: -10; 
    -webkit-transform: rotate(2deg);    
       -moz-transform: rotate(2deg);   
        -ms-transform: rotate(2deg);   
         -o-transform: rotate(2deg);
            transform: rotate(2deg);
}
.a {
	margin: 0px auto;
	width: 602px;
}
.b {
	margin: 0px auto;
	width: 602px;
	position: relative;
}

</style>
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
	
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="SPB_files/filelist.xml">
<style id="purchase-order - Copy_5349_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl155349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl655349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl665349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.9pt solid silver;
	background:#3B4E87;
	mso-pattern:black none;
	white-space:nowrap;}
.xl675349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:.9pt solid windowtext;
	border-bottom:.9pt solid silver;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl685349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
	text-align:right;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:.9pt solid windowtext;
	border-bottom:.9pt solid silver;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl695349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
	text-align:general;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:.9pt solid windowtext;
	border-bottom:.9pt solid silver;
	border-left:.9pt solid windowtext;
	background:#E4E8F3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl705349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:Percent;
	text-align:center;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:none;
	border-bottom:.9pt solid silver;
	border-left:.9pt solid silver;
	background:#3B4E87;
	mso-pattern:black none;
	white-space:nowrap;}
.xl715349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:.9pt solid windowtext;
	border-bottom:.9pt solid silver;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl725349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl735349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl745349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:#8394C9;
	font-size:28.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl755349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:Percent;
	text-align:center;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:none;
	border-bottom:.9pt solid silver;
	border-left:none;
	background:#3B4E87;
	mso-pattern:black none;
	white-space:nowrap;}
.xl765349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:Percent;
	text-align:center;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:.9pt solid silver;
	border-bottom:.9pt solid silver;
	border-left:none;
	background:#3B4E87;
	mso-pattern:black none;
	white-space:nowrap;}
.xl775349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:none;
	border-bottom:.9pt solid silver;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl785349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:none;
	border-bottom:.9pt solid silver;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl795349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:.9pt solid windowtext;
	border-bottom:.9pt solid silver;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl805349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:16.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl815349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:none;
	border-bottom:.9pt solid windowtext;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl825349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:none;
	border-bottom:.9pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl835349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.9pt solid silver;
	border-right:.9pt solid windowtext;
	border-bottom:.9pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl845349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.9pt solid #666666;
	border-left:none;
	background:silver;
	mso-pattern:black none;
	white-space:nowrap;}
.xl855349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.9pt solid #666666;
	border-right:none;
	border-bottom:none;
	border-left:.9pt solid #666666;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl865349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.9pt solid #666666;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl875349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.9pt solid #666666;
	border-right:.9pt solid #666666;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl885349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.9pt solid #666666;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl895349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl905349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.9pt solid #666666;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl915349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.9pt solid windowtext;
	border-left:.9pt solid #666666;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl925349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.9pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl935349
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.9pt solid #666666;
	border-bottom:.9pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
-->
</style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="purchase-order - Copy_5349" align=center x:publishsource="Excel">
<?php
$no=1;
$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM spp where nospp='$id'");
	$hitungpsb=mysql_num_rows($query);
	if ($hitungpsb > 0){
	while($r=mysql_fetch_array($query)){
	?>
<table border=0 cellpadding=0 cellspacing=0 width=658 style='border-collapse:
 collapse;table-layout:fixed;width:494pt'>
 <col width=42 style='mso-width-source:userset;mso-width-alt:1536;width:32pt'>
 <col width=231 style='mso-width-source:userset;mso-width-alt:8448;width:173pt'>
 <col width=1 style='mso-width-source:userset;mso-width-alt:36;width:1pt'>
 <col width=1 style='mso-width-source:userset;mso-width-alt:36;width:1pt'>
 <col width=96 span=2 style='mso-width-source:userset;mso-width-alt:3510;
 width:72pt'>
 <col width=88 style='mso-width-source:userset;mso-width-alt:3218;width:66pt'>
 <col width=103 style='mso-width-source:userset;mso-width-alt:3766;width:77pt'>
 <tr height=48 style='height:36.0pt'>
  <td colspan=3 height=48 class=xl805349 width=274 style='height:36.0pt;
  width:206pt'><a name="RANGE!A1:H26"> PT. Winner Stainless Steel Tube</a></td>
  <td colspan=5 class=xl745349 width=384 style='width:288pt'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl725349 style='height:15.0pt'>JL.Raya Pasar Kemis KM.6 Ds. Sukamantri  15560 Tangerang</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl655349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl725349 style='height:15.0pt'>Telp. 021 29665128</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl655349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl155349 colspan=2 style='height:15.0pt'>Fax 021 29665138</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl155349 style='height:15.0pt'></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=24 style='height:18.0pt'>
  <td colspan=2 height=24 class=xl735349 style='height:18.0pt'>SURAT PERMOHONAN
  PEMBELIAN</td>
  <td colspan=2 class=xl735349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl725349 style='height:15.0pt'>Kepada Yth:
  Ka.Bag Pembelian  PT. Winner Stainless Steel Tube</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl725349 style='height:15.0pt'>Harap dibelikan
  barang - barang sbb.</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl155349 style='height:15.0pt'></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl155349 style='height:15.0pt'></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349>No SPP:  <?php echo"$r[nospp]"?></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl155349 style='height:15.0pt'></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl705349 style='height:15.0pt'>No</td>
  <td colspan=3 class=xl705349 style='border-right:.9pt solid silver'>Nama
  &amp; spesifikasi barang</td>
  <td class=xl665349 style='border-left:none'>Jumlah</td>
  <td class=xl665349 style='border-left:none'>Satuan</td>
  <td class=xl665349 style='border-left:none'>Harga</td>
  <td class=xl665349 style='border-left:none'>TOTAL</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'><?php echo "$no";?></td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'><?php echo"$r[namabrg]"?></td>
  <td class=xl675349 style='border-top:none;border-left:none'><?php echo"$r[jumlah]"?></td>
  <td class=xl675349 style='border-top:none;border-left:none'><?php echo"$r[satuan]"?></td>
  <td class=xl675349 style='border-top:none;border-left:none'><?php echo"$r[harga]"?></td>
  <td class=xl675349 style='border-top:none;border-left:none'><?php echo"$r[total]"?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl715349 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl775349 style='border-right:.9pt solid black;border-left:
  none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl675349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl685349 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl695349 style='border-top:none;border-left:none'></td>
 </tr>
 
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl845349 style='height:15.0pt'>Keterangan</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl855349 style='border-right:.9pt solid #666666;
  height:15.0pt'><?php echo"$r[keterangan]"?></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl885349 style='border-right:.9pt solid #666666;
  height:15.0pt'>&nbsp;</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl885349 style='border-right:.9pt solid #666666;
  height:15.0pt'>&nbsp;</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl885349 style='border-right:.9pt solid #666666;
  height:15.0pt'>&nbsp;</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl915349 style='border-right:.9pt solid #666666;
  height:15.0pt'>&nbsp;</td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
  <td class=xl155349></td>
 </tr>
 
  <td class=xl1529376></td>
  <td class=xl1529376><strong style="margin-left:30px;">MENYETUJUI,</strong></td>
  <td class=xl1529376><strong style="margin-left:50px;">MENGETAHUI,</strong></td>
  <td class=xl1529376><strong style="margin-left:290px;">PEMOHON,</strong></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1529376 style='height:15.0pt'></td>
  <td class=xl1529376 ><font style="margin-left:-45px;">Kepala unit</font></td>
  <td class=xl1529376><font style="margin-left:-10px;">Ka.Bag.Umum</font><font style="margin-left:10px;">Ka.Bag.Pembelian</font></td>
  <td class=xl1529376><font style="margin-left:240px;">Tangerang</font></td>
  <td class=xl1529376><font style="margin-left:320px;"></font></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1529376 style='height:15.0pt'></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1529376 style='height:15.0pt'></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1529376 style='height:15.0pt'></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1529376 style='height:15.0pt'></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1529376 style='height:15.0pt'></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1529376 style='height:15.0pt'></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
  <td class=xl1529376></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=42 style='width:32pt'></td>
  <td width=231 style='width:173pt'></td>
  <td width=1 style='width:1pt'></td>
  <td width=1 style='width:1pt'></td>
  <td width=96 style='width:72pt'></td>
  <td width=96 style='width:72pt'></td>
  <td width=88 style='width:66pt'></td>
  <td width=103 style='width:77pt'></td>
 </tr>
 <![endif]>
   	<?php $no++; }}
	?>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
<div id="noprint">
<div class="ui-grid-b">
			<div class="ui-block-a"><a href="" onclick="window.print()" target="_blank" class="ui-shadow ui-btn ui-corner-all" data-theme="b" data-ajax="false">Cetak</a></div>
			
			<div class="ui-block-c"><a href="" data-rel="back" class="ui-shadow ui-btn ui-corner-all" data-ajax="false">Kembali</a></div>
		</div>
	

<div data-role="footer" data-position="fixed">
    <h4 style="font-size: 14px;">&copy;2015</h4>
</div>
</div>
</body>

</html>
<?php }
?>
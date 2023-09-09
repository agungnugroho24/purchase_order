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
			<td width="80px"><img src="../gambar/logo.png"></td>
			<td align="center">
				<h1 style="font-size:17px;">Aplikasi Permintaan dan Persediaan pada Perguruan Tinggi Buddhi<br>Berdasarkan Permintaan</h1>
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
<link rel=File-List href="purchase-order_files/filelist.xml">
<style id="purchase-order_28171_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1528171
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
.xl6528171
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
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6628171
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
	border-top:.9pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6728171
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
	mso-number-format:"_\(\0022$\0022* \#\,\#\#0\.00_\)\;_\(\0022$\0022* \\\(\#\,\#\#0\.00\\\)\;_\(\0022$\0022* \0022-\0022??_\)\;_\(\@_\)";
	text-align:general;
	vertical-align:bottom;
	background:#E4E8F3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6828171
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
	mso-number-format:"_\(\0022$\0022* \#\,\#\#0\.00_\)\;_\(\0022$\0022* \\\(\#\,\#\#0\.00\\\)\;_\(\0022$\0022* \0022-\0022??_\)\;_\(\@_\)";
	text-align:general;
	vertical-align:bottom;
	background:#E4E8F3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6928171
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
	border-top:none;
	border-right:.9pt solid windowtext;
	border-bottom:none;
	border-left:.9pt solid windowtext;
	background:#E4E8F3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7028171
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
	mso-number-format:"_\(\0022$\0022* \#\,\#\#0\.00_\)\;_\(\0022$\0022* \\\(\#\,\#\#0\.00\\\)\;_\(\0022$\0022* \0022-\0022??_\)\;_\(\@_\)";
	text-align:general;
	vertical-align:bottom;
	border-top:.9pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#E4E8F3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7128171
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
	border-top:none;
	border-right:.9pt solid windowtext;
	border-bottom:none;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7228171
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
	mso-number-format:"0\.000%";
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7328171
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
	border-top:none;
	border-right:.9pt solid windowtext;
	border-bottom:none;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7428171
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
.xl7528171
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
.xl7628171
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
.xl7728171
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
.xl7828171
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
.xl7928171
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
.xl8028171
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
	border-top:none;
	border-right:.9pt solid windowtext;
	border-bottom:.9pt solid windowtext;
	border-left:.9pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8128171
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
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8228171
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Trebuchet MS", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.9pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8328171
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
.xl8428171
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
.xl8528171
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
.xl8628171
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
.xl8728171
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
.xl8828171
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
.xl8928171
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
.xl9028171
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
.xl9128171
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
.xl9228171
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
.xl9328171
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
.xl9428171
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
.xl9528171
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
.xl9628171
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
.xl9728171
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
.xl9828171
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
.xl9928171
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
.xl10028171
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
.xl10128171
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
	border-bottom:.9pt solid #666666;
	border-left:.9pt solid #666666;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10228171
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
	border-bottom:.9pt solid #666666;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10328171
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
	border-bottom:.9pt solid #666666;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10428171
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
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10528171
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
	border-top:.9pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10628171
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
	background:#E4E8F3;
	mso-pattern:black none;
	white-space:nowrap;}
.xl10728171
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
	text-align:right;
	vertical-align:bottom;
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
<?php
$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM po where nopo='$id'");
	$hitungpsb=mysql_num_rows($query);
	if ($hitungpsb > 0){
	while($r=mysql_fetch_array($query)){
	?>
<div id="purchase-order_28171" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=703 style='border-collapse:
 collapse;table-layout:fixed;width:527pt'>
 <col width=42 style='mso-width-source:userset;mso-width-alt:1536;width:32pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=79 style='mso-width-source:userset;mso-width-alt:2889;width:59pt'>
 <col width=119 style='mso-width-source:userset;mso-width-alt:4352;width:89pt'>
 <col width=96 span=2 style='mso-width-source:userset;mso-width-alt:3510;
 width:72pt'>
 <col width=88 style='mso-width-source:userset;mso-width-alt:3218;width:66pt'>
 <col width=103 style='mso-width-source:userset;mso-width-alt:3766;width:77pt'>
 <tr height=48 style='height:36.0pt'>
  <td colspan=3 height=48 class=xl8428171 width=201 style='height:36.0pt;
  width:151pt'><a name="RANGE!A1:H34">SEKOLAH BUDDHI</a></td>
  <td colspan=5 class=xl9328171 width=502 style='width:376pt'>PURCHASE ORDER</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl8328171 style='height:15.0pt'>JL. Imam Bonjol
  No. 41 Karawaci Tangerang</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl8328171>Po. No:</td>
  <td class=xl10628171><?php echo"$r[nopo]"?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=5 style='height:15.0pt'>Telp: (62-21)
  551-7853 [Hunting], Fax[62-21] 558-6820</td>
  <td class=xl1528171></td>
  <td class=xl1528171 colspan=2>Delivery date: <?php echo"$r[deldate]"?></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl1528171 style='height:15.0pt'></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171>NPWP:</td>
  <td class=xl1528171><?php echo"$r[npwp]"?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl8328171 style='height:15.0pt'></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171>SPP No:</td>
  <td class=xl1528171><?php echo"$r[sppno]"?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl1528171 style='height:15.0pt'>SUPPLIER:</td>
  <td class=xl1528171><?php echo"$r[supplier]"?></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171>SPP Date:</td>
  <td class=xl1528171><?php echo"$r[date]"?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl8328171 style='height:15.0pt'>Address:</td>
  <td class=xl1528171><?php echo"$r[alamat]"?></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 style='height:15.0pt'></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 
 <tr height=20 style='height:15.0pt'>
 	<?php
	$no=1;
	?>
  <td height=20 class=xl7828171 style='height:15.0pt'>No</td>
  <td colspan=3 class=xl7828171 style='border-right:.9pt solid silver'>DESCRIPTION</td>
  <td class=xl7428171 style='border-left:none'>Quantity</td>
  <td class=xl7428171 style='border-left:none'>Unit</td>
  <td class=xl7428171 style='border-left:none'>Price</td>
  <td class=xl7428171 style='border-left:none'>Amount</td>
  	<?php $no++; ?>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>1</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;  border-left:none'><?php echo"$r[description]"?></td>
  <td class=xl7528171 style='border-top:none;border-left:none'><?php echo"$r[qty]"?></td>
  <td class=xl7528171 style='border-top:none;border-left:none'><?php echo"$r[unit]"?></td>
  <td class=xl7628171 style='border-top:none;border-left:none'><?php echo"$r[price]"?></td>
  <td class=xl7728171 style='border-top:none;border-left:none'><?php echo"$r[amount]"?><span
   </span></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl7928171 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=3 class=xl8828171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7528171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7628171 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7728171 style='border-top:none;border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8028171 style='height:15.0pt'>&nbsp;</td>
  <td colspan=3 class=xl8528171 style='border-right:.9pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl7128171 style='border-left:none'>&nbsp;</td>
  <td class=xl7128171 style='border-left:none'>&nbsp;</td>
  <td class=xl7328171 style='border-left:none'>&nbsp;</td>
  <td class=xl6928171 style='border-left:none'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl10528171 style='height:15.0pt'>&nbsp;</td>
  <td class=xl8228171>[42]</td>
  <td class=xl8228171>&nbsp;</td>
  <td class=xl6628171>SUBTOTAL</td>
  <td class=xl7028171><?php echo"$r[subtotal]"?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl9428171 style='height:15.0pt'>Keterangan</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171>DISCOUNT</td>
  <td class=xl7228171></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=4 height=20 class=xl9828171 style='border-right:.9pt solid #666666;
  height:15.0pt'><?php echo"$r[keterangan]"?></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171>V.A.T [PPN]</td>
  <td class=xl6728171>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl9528171 style='border-right:.9pt solid #666666;
  height:15.0pt'>&nbsp;</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl6528171>TOTAL</td>
  <td class=xl6828171><?php echo"$r[generaltotal]"?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl10128171 style='border-right:.9pt solid #666666;
  height:15.0pt'>&nbsp;</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=2 style='height:15.0pt'>Terr of
  Payment:</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=2 style='height:15.0pt'>Say:</td>
  <td class=xl1528171><?php echo"$r[bilangan]"?></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=21 style='height:15..9pt'>
  <td height=21 class=xl1528171 style='height:15..9pt'></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td colspan=4 class=xl10428171>&nbsp;</td>
  <td class=xl8128171>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=3 style='height:15.0pt'>Note to
  vendedors/suppliers :</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl8328171>Preparet by :</td>
  <td class=xl10728171>Approved by :</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=4 style='height:15.0pt'>1. Delivery
  date should be later as started above</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=4 style='height:15.0pt'>2.
  Quality/quantity will be checked at warehouse</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=2 style='height:15.0pt'>3. Original PO
  &amp; Rec<span style='display:none'>eiving slip copy must be submitted when
  you collecting</span></td>
  <td class=xl1528171>py</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=6 style='height:15.0pt'>4. Po No must
  be quoled on all invoice document/corespondences related to this order</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1528171 colspan=6 style='height:15.0pt'>5. Please
  confirm by return fas lates wiithin 2 days after receipt of PO</td>
  <td class=xl1528171></td>
  <td class=xl1528171></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=42 style='width:32pt'></td>
  <td width=80 style='width:60pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=119 style='width:89pt'></td>
  <td width=96 style='width:72pt'></td>
  <td width=96 style='width:72pt'></td>
  <td width=88 style='width:66pt'></td>
  <td width=103 style='width:77pt'></td>
 </tr>
 <![endif]>
 	<?php  }}
	?>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
<div id="noprint">
<div class="ui-grid-b">
			<div class="ui-block-a"><a href="" onclick="window.print()" target="_blank" class="ui-shadow ui-btn ui-corner-all" data-theme="b" data-ajax="false">Cetak</a></div>
			<div class="ui-block-b"><a href="batal_npb.php?id=<?php echo $id ?>" class="ui-shadow ui-btn ui-corner-all" data-ajax="false" onclick="return confirm('Apakah anda yakin akan menolak NPB ini?')">Tolak</a></div>
			<div class="ui-block-c"><a href="" data-rel="back" class="ui-shadow ui-btn ui-corner-all" data-ajax="false">Kembali</a></div>
		</div>
	

<div data-role="footer" data-position="fixed">
    <h4 style="font-size: 14px;">&copy;2014</h4>
</div>
</div>
</body>

</html>
<?php }
?>
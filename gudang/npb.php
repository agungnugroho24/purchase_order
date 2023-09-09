<?php
session_start();
require('../plugins/fpdf17/fpdf.php');
include("../connect.php");

if (empty($_SESSION['id_user']) AND empty($_SESSION['pass']))
{header('location:../index.php'); }//include "../index.html";}
else{

if ($_SESSION['id_jabatan']=='3')
{

$id=$_GET['id'];

$query=mysql_query("SELECT dari,id_unit FROM pesan WHERE id_pesan='$id'") or die(mysql_error());
$data=mysql_fetch_array($query);
$kepada_3=$data['dari'];
$id_unit=$data['id_unit'];

$query2=mysql_query("SELECT email FROM ms_user WHERE id_jabatan='$kepada_3' && id_unit='$id_unit'");
$data2=mysql_fetch_array($query2);
$email_penerima=$data2["email"];
$nama_penerima = "Saya";
	require_once ('../mail_setup/mail.php');
		$mail->From     = "gudang@gmail.com"; // email pengirim
		$mail->FromName = "Gudang"; // nama pengirim
		$mail->AddAddress($email_penerima, $nama_penerima); // penerima
	//	$mail->AddReplyTo($email, $name); // kirim balik reply ke
	//	$mail->WordWrap = 50; // set word wrap
	//	$mail->AddAttachment($file1_path, $file1_name);
		$mail->IsHTML(false);                               // send as HTML
		$mail->Subject   =  "Notifikasi";
		$mail->Body     .=  "Permintaan barang Anda telah diproses\n";
		$mail->Body     .=  "Silahkan mengakses aplikasi";
		$mail->Body     .=  "\n\n";
		$mail->Body     .=  "-----------\n";
		$mail->Body     .=  "Terima Kasih";
		$mail->Send();

class PDF extends FPDF
{
function Header()
{
	
    $this->SetFont('Arial','B',11);
    $this->Cell(0,0.75,' GUDANG PT. Winner Stainless Steel Tube ',0,0,'C');
    $this->Ln();
    $this->SetFont('Arial','B',14);
    $this->Cell(0,0.75,'NOTA PERMINTAAN BARANG (NPB)',0,0,'C');
    $this->SetFont('Arial','',14);
    $this->Line(1, 2.75, 13.75, 2.75);
	$this->Ln();
	$this->Ln();
    $this->SetFont('Arial','',11);
	
	$id=$_GET['id'];
	$query = "SELECT a.id_unit, a.id_pesan, DATE_FORMAT(a.tgl, '%d %M %Y') as tgl1, b.nama_unit FROM pesan a LEFT JOIN ms_unit b ON a.id_unit=b.id_unit WHERE id_pesan='$id'";
	$result = mysql_query($query);
	while($data= mysql_fetch_array($result))
	{
    $this->Cell(2,0.75,'No. NPB :',0,0,'L');
	$this->Cell(6,0.75, $data['id_pesan'],0,0,'L');
	
	$this->Cell(1,0.75,'Unit :',0,0,'L');
    $this->Cell(1,0.75, $data['nama_unit'],0,0,'L');
	
	$this->Ln();
    $this->SetFont('Arial','',11);
    $this->Cell(2,1,'Tanggal  :',0,0,'L');
	$this->Cell(1,1, $data['tgl1'],0,0,'L');
	}
	
    $this->Ln();
	$this->SetFont('Arial','B',11);
	$this->Cell(1.5,1,'NO',1,0,'C');
	$this->Cell(8.25,1,'NAMA BARANG',1,0,'C');
	$this->Cell(3,1,'JUMLAH',1,0,'C');
	
	$this->Ln();
}

//Page footer
function Footer()
{
	$id=$_GET['id'];
    //Position at 1.5 cm from bottom
    $this->SetY(-4);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
//    $this->Cell(0,1,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	$this->SetFont('Arial','',11);
    $this->Cell(4,0.5,'Diterima',0,0,'C');
	$this->Cell(5);
	$this->Cell(4,0.5,'Disetujui',0,0,'C');
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Ln();
		$sql = mysql_query("SELECT a.id_unit, b.nama_unit FROM pesan a LEFT JOIN ms_unit b ON a.id_unit=b.id_unit WHERE id_pesan='$id'");
		while ($data = mysql_fetch_array($sql))
		$unit = $data['nama_unit'];
		
		$sql1 = mysql_query("SELECT * FROM ms_user WHERE id_user = '$_SESSION[id_user]'");
		while ($data = mysql_fetch_array($sql1))
		$nama = $data['nama'];
	$this->Cell(1,0.5,'(',0,0,'C');
	$this->Cell(2,0.5,$unit,0,0,'C');
	$this->Cell(1,0.5,')',0,0,'C');
	$this->Cell(5);
	$this->Cell(1,0.5,'(',0,0,'C');
	$this->Cell(2,0.5,$nama,0,0,'C');
	$this->Cell(1,0.5,')',0,0,'C');
//	$this->Cell(4,0.5,'(                         )',0,0,'C');
}

function LoadDataFromSQL($sql)
{
  $hasil=mysql_query($sql) or die(mysql_error());
 
  $data = array();
  while($rows=mysql_fetch_array($hasil)){
    $data[] = $rows;
}
  return $data;
}
// Colored table
function FancyTable($data)
{
  // Colors, line width and bold font
/*  $this->SetFillColor(255,165,74);
  $this->SetTextColor(255);
  $this->SetDrawColor(128,0,0);
  $this->SetLineWidth(0.03);
  $this->SetFont('','B');
*/
   /*  $w adalah variabel lebar dari kolom data
            dalam kasus ini, kolom no lebarnya 20, propinsi 100
         dan upah 60 */
  $w = array( 1.5, 8.25, 3);
//  for($i=0;$i<count($header);$i++)
//    $this->Cell($w[$i],0.75,$header[$i],1,0,'C',true);
//  $this->Ln();
  // tentukan warna background and fontnya  
  $this->SetFillColor(224,235,255);
  $this->SetTextColor(0);
  $this->SetFont('');
  // Data
//  $fill = false;
$i = 1;
  foreach($data as $row)
  {
   
    $this->Cell($w[0],0.75,$i,1,0,'C',$fill);
    $this->Cell($w[1],0.75,$row[6],1,0,'L',$fill);
    $this->Cell($w[2],0.75,$row[2],1,0,'C',$fill);
    $this->Ln();
//    $fill = !$fill;
   $i++;
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
 }
}
 
$pdf = new PDF('P','cm','A5');
// header tabel 
//$header = array('No', 'propinsi', 'upah');
// buat query SQLmu disini 
$query="SELECT a.id_pesan, a.id_brg, sum(a.jml_brg) as jml, b.id_pesan, b.dari, c.id_brg, c.nama_brg FROM detail_pesan a LEFT JOIN pesan b ON a.id_pesan=b.id_pesan LEFT JOIN ms_barang c on a.id_brg=c.id_brg WHERE a.id_pesan='$id' GROUP BY a.id_brg ORDER BY a.id_brg";
$data = $pdf->LoadDataFromSQL($query);
//tentukan ukuran dan jenis form 
$pdf->Open();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',11);
$pdf->AddPage();
$pdf->SetAutoPageBreak('off',4.5);
//$pdf->SetMargins(1.5,1,1.5);
$pdf->FancyTable($data);
$pdf->Output();

$query1=mysql_query("UPDATE pesan set tgl=now(), kepada_3='$kepada_3', acc='Y' WHERE id_pesan='$id'") or die(mysql_error());
}else{
?>	
<?php
	}
	}
?>
<?php
session_start();
require('../plugins/fpdf17/fpdf.php');
include("../connect.php");

$year=$_POST['select1'];

class PDF extends FPDF
{
function Header()
{
$year=$_POST['select1'];

	$this->SetFont('Arial','B',14);
	$this->Cell(0,0.75,'PT. Winner Stainless Steel Tube',0,0,'L');
    $this->Ln();
	$this->SetFont('Arial','B',11);
	$this->Cell(0,0.75,'GUDANG',0,0,'L');
    $this->Ln();
	$this->SetFont('Arial','B',14);
    $this->Cell(0,0.75,'LAPORAN PERMINTAAN BARANG TAHUNAN',0,0,'C');
    $this->Ln();
    $this->SetFont('Arial','B',11);
	$this->Cell(8);
    $this->Cell(2,0.75,'Periode : ',0,0,'L');
	$this->Cell(1,0.75, $year ,0,0,'C');

	$this->Ln();
    $this->SetFont('Arial','I',11);
	$this->Cell(12);
	
	$tanggal=date("j F Y");
	
	$bulan=date('F', strtotime($tanggal));
	if ($bulan == "January") $bulan = "Januari";
	elseif ($bulan == "February") $bulan = "Februari";
	elseif ($bulan == "March") $bulan = "Maret";
	elseif ($bulan == "April") $bulan = "April";
	elseif ($bulan == "May") $bulan = "Mei";
	elseif ($bulan == "June") $bulan = "Juni";
	elseif ($bulan == "July") $bulan = "Juli";
	elseif ($bulan == "August") $bulan = "Agustus";
	elseif ($bulan == "September") $bulan = "September";
	elseif ($bulan == "October") $bulan = "Oktober";
	elseif ($bulan == "November") $bulan = "Nopember";
	else $bulan = "Desember";
	
	$tanggal1=date('d F Y', strtotime($tanggal));
	
	$tanggal2=date('d', strtotime($tanggal));
	$tanggal3=date('Y', strtotime($tanggal));
	$tanggal4=$tanggal2." ".$bulan." ".$tanggal3;
	
	$this->Cell(3,0.6,'tanggal cetak : ',0,0,'L');
	
	$this->Cell(3,0.6,$tanggal4,0,0,'C');
	
    $this->SetFont('Arial','',14);
    $this->Line(1, 5, 20, 5);
	$this->Ln();
	$this->Ln();
    $this->SetFont('Arial','',11);
	
	$id=$_GET['id'];
	$query = "SELECT * FROM pesan WHERE id_pesan='$id'";
	$result = mysql_query($query);
	while($data= mysql_fetch_array($result))
	{
    $this->Cell(7,0.75,'No. NPB :',0,0,'L');
	
	$this->Cell(1,0.75,'Unit :',0,0,'L');
    $this->Cell(1,0.75, $data['dari'],0,0,'L');
	
	$this->Ln();
    $this->SetFont('Arial','',11);
    $this->Cell(0,1,'Tanggal  :',0,0,'L');
	}
	
    $this->Ln();
	$this->SetFont('Arial','B',11);
	$this->Cell(1.5,1,'NO',1,0,'C');
	$this->Cell(5.25,1,'Kode Barang',1,0,'C');
	$this->Cell(5.25,1,'Nama Barang',1,0,'C');
	$this->Cell(4,1,'Jumlah Barang',1,0,'C');
	$this->Cell(3,1,'Unit',1,0,'C');
	
	$this->Ln();
}

//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-4);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
//    $this->Cell(0,1,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	$this->SetFont('Arial','',11);
    $this->Cell(4,0.5,'Dibuat',0,0,'C');
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Ln();
		$sql = mysql_query("SELECT * FROM ms_user WHERE id_user = '$_SESSION[id_user]'");
		while ($data = mysql_fetch_array($sql))
		{
		 $nama = $data['nama'];
		}
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
  $w = array( 1.5, 5.25, 5.25, 4, 3);
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
    $this->Cell($w[1],0.75,$row[0],1,0,'L',$fill);
    $this->Cell($w[2],0.75,$row[3],1,0,'C',$fill);
	$this->Cell($w[3],0.75,$row[1],1,0,'C',$fill);
	$this->Cell($w[4],0.75,$row[2],1,0,'C',$fill);
    $this->Ln();
//    $fill = !$fill;
   $i++;
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
 }
}
 
$pdf = new PDF('P','cm','A4');
// header tabel 
//$header = array('No', 'propinsi', 'upah');
// buat query SQLmu disini 
$query="SELECT a.id_brg, sum(a.jml_brg) as jml, c.nama_unit, b.id_brg, b.nama_brg FROM trx_barang a LEFT JOIN ms_barang b ON a.id_brg=b.id_brg LEFT JOIN ms_unit c ON a.id_unit=c.id_unit WHERE YEAR(tgl)='$year' GROUP BY a.id_brg, c.nama_unit ORDER BY a.id_brg";
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
?>
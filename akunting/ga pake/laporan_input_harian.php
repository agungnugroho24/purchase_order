<?php
require('../plugins/fpdf17/fpdf.php');
include("../connect.php");

function jin_date_sql($date){
	$exp = explode('-',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
	}
	return $date;
}

$date1=$_POST['date1'];
$date2=$_POST['date2'];

$data_tanggal_form1 = $date1;
$data_tanggal_form2 = $date2;
$data_tanggal_mysql1 = jin_date_sql($data_tanggal_form1);
$data_tanggal_mysql2 = jin_date_sql($data_tanggal_form2);

class PDF extends FPDF
{
function Header()
{
$date1=$_POST['date1'];
$date2=$_POST['date2'];

$data_tanggal_form1 = $date1;
$data_tanggal_form2 = $date2;
$data_tanggal_mysql1 = jin_date_sql($data_tanggal_form1);
$data_tanggal_mysql2 = jin_date_sql($data_tanggal_form2);

	$this->SetFont('Arial','B',12);
	$this->Cell(0,0.75,'PERGURUAN TINGGI',0,0,'L');
    $this->Ln();
	$this->Cell(0,0.75,'GUDANG',0,0,'L');
    $this->Ln();
	$this->SetFont('Arial','B',14);
    $this->Cell(0,0.75,'LAPORAN PENGADAAN BARANG HARIAN',0,0,'C');
    $this->Ln();
    $this->SetFont('Arial','B',11);
	$this->Cell(5.5);
    $this->Cell(2,0.75,'Periode : ',0,0,'L');
	$this->Cell(2.5,0.75, $date1 ,0,0,'L');
	$this->Cell(1,0.75,'s/d',0,0,'L');
	$this->Cell(2.5,0.75, $date2 ,0,0,'L');

    $this->SetFont('Arial','',14);
    $this->Line(1, 4.5, 20, 4.5);
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
	$this->Cell(6.25,1,'Kode Barang',1,0,'C');
	$this->Cell(6.25,1,'Nama Barang',1,0,'C');
	$this->Cell(5,1,'Jumlah Barang',1,0,'C');
	
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
    $this->Cell(4,0.5,'Diterima',0,0,'C');
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Cell(4,0.5,'(                         )',0,0,'C');
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
  $w = array( 1.5, 6.25, 6.25, 5);
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
    $this->Cell($w[2],0.75,$row[2],1,0,'C',$fill);
	$this->Cell($w[3],0.75,$row[1],1,0,'C',$fill);
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
$query="SELECT a.id_brg, sum(a.jml_brg) as jml, b.nama_brg FROM in_barang a LEFT JOIN ms_barang b ON a.id_brg=b.id_brg WHERE tgl BETWEEN '$data_tanggal_mysql1' AND '$data_tanggal_mysql2' GROUP BY b.id_brg";
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
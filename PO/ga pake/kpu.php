<?php
require('plugins/fpdf17/fpdf.php');
include("../connect.php");

class PDF extends FPDF
{
function Header()
{
	$this->SetFont('Times','',11);
    $this->Cell(15,0.6,'GELOMBANG :',0,0,'R');
    $this->Ln();
    $this->Cell(10,0.6,'1. MENGISI FORMULIR',0,0,'L');
	$this->Cell(0.8,0.6,'',1,0,'L');
	$this->Cell(1.5);
	$this->Cell(2,0.6,'PPMB STAKAD BUDDHI,',0,0,'L');
	$this->Ln();
	$this->Cell(10,0.6,'2. FOTO COPY IJAZAH BERLEGALISIR = 1 LEMBAR',0,0,'L');
	$this->Cell(0.8,0.6,'',1,0,'L');
	$this->Ln();
	$this->Cell(10,0.6,'3. FOTO COPY RAPORT (KELAS 1-3)',0,0,'L');
	$this->Cell(0.8,0.6,'',1,0,'L');
	$this->Ln();
	$this->Cell(10,0.6,'4. FOTO COPY KTP / KARTU PELAJAR = 2 LEMBAR',0,0,'L');
	$this->Cell(0.8,0.6,'',1,0,'L');
	$this->Ln();
	$this->Cell(10,0.6,'5. FOTO 3X4 = 4 LEMBAR',0,0,'L');
	$this->Cell(0.8,0.6,'',1,0,'L');
	$this->Ln();
	$this->Cell(10,0.6,'6. SLIP PEMBAYARAN ANGSURAN 1 = 1 LEMBAR',0,0,'L');
	$this->Cell(0.8,0.6,'',1,0,'L');
	$this->Cell(2);
	$this->Cell(3.5,0.6,'...................................................',0,0,'C');
	$this->Ln();
	$this->Cell(16.5,0.1,'DIISI OLEH PETUGAS',0,0,'R');
	$this->Ln();
//	$pdf->Image('arrow.png',10,10,1,1,'PNG');        LUPA YG GAMBAR...WKWKWK //
	$this->Cell(15,0.5,'.................................................................................................................................................................................................',0,0,'l');
	$this->Ln();
	$this->Ln();
	$this->Ln();
	
	$this->Cell(0,0.3,'','L,T,R',0,'L');
	$this->Ln();
	$this->Cell(0,0.2,'       NO. FORM :                    /                    /                    /','L,R',0,'L');
	$this->Ln();
	$this->Cell(0,0.1,'       ..........................................................................................................','L,R',0,'L');
	$this->Ln();
	$this->Cell(0,0.6,'','L,R',0,'L');
	$this->Ln();
	$this->Cell(0,0.5,'                                  KARTU PESERTA UJIAN SARINGAN MASUK','L,R',0,'L');
	$this->Ln();
	$this->Cell(0,0.5,'                                                STIE     -     STMIK     -     STBA','L,R',0,'L');
	$this->Ln();
	$this->Cell(0,0.5,'                                           GELOMBANG :       I       /       II       /','L,R',0,'L');
	$this->Ln();
	$this->Cell(0,0.5,'','L,R,B',0,'L');
	
	// TARO ID DISINI YG $_GET NTU BOOO//
	$query = "SELECT * FROM ms_user WHERE id_user='a'";     // GANTI QUERYNY DISINI YA BOOO //
	$result = mysql_query($query);
	while($data= mysql_fetch_array($result))
	{
    $this->Ln();
	$this->Ln();
	$this->Cell(8,0.6,'       NAMA LENGKAP',0,0,'L');
	$this->Cell(0.5,0.6,':',0,0,'L');
	$this->Cell(8,0.6,$data['id_user'],0,0,'L');
	$this->Ln();
	$this->Cell(8,0.6,'       TEMPAT / TANGGAL LAHIR',0,0,'L');
	$this->Cell(0.5,0.6,':',0,0,'L');
	$this->Cell(8,0.6,$data['id_user'],0,0,'L');        // GANTI $DATA NYA //
	$this->Ln();
	$this->Cell(8,0.6,'       ASAL SEKOLAH',0,0,'L');
	$this->Cell(0.5,0.6,':',0,0,'L');
	$this->Cell(8,0.6,$data['id_user'],0,0,'L');       // GANTI $DATA NYA //
	$this->Ln();
	$this->Cell(8,0.6,'       UNIT / JURUSAN KULIAH',0,0,'L');
	$this->Cell(0.5,0.6,':',0,0,'L');
	$this->Cell(8,0.6,$data['id_user'],0,0,'L');      // GANTI $DATA NYA //
	$this->Ln();
	$this->Cell(8,0.6,'       JENJANG / WAKTU KULIAH',0,0,'L');
	$this->Cell(0.5,0.6,':',0,0,'L');
	$this->Cell(8,0.6,$data['id_user'],0,0,'L');      // GANTI $DATA NYA //
	$this->Ln();
	$this->Cell(8,0.6,'       HARI, TANGGAL TEST',0,0,'L');
	$this->Cell(0.5,0.6,':',0,0,'L');
	$this->Cell(8,0.6,$data['id_user'],0,0,'L');      // GANTI $DATA NYA //
	$this->Ln();
	$this->Cell(8,0.6,'       JAM TEST',0,0,'L');
	$this->Cell(0.5,0.6,':',0,0,'L');
	$this->Cell(8,0.6,$data['id_user'],0,0,'L');     // GANTI $DATA NYA //
	}
	
	$this->Ln();
	$this->Ln();
	$this->Cell(3);
	$this->Cell(3,4,'FOTO 3X4','1',0,'C');
	$this->Cell(3);
	$this->Cell(2,0.75,'PETUGAS TEST,','0',0,'L');
	$this->Cell(3);
	$this->Cell(2,0.75,'PESERTA UJIAN,','0',0,'L');
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Ln();
	$this->Cell(9);
	$this->Cell(3.25,0.75,'-----------------------------','0',0,'C');
	$this->Cell(1.75);
	$this->Cell(3.25,0.75,'-----------------------------','0',0,'C');
}

function Footer()
{
    $this->SetY(-9.25);
	$this->SetFont('Times','B',12);
    $this->Cell(0,0.5,'PERHATIAN : ','L,T,R',0,'L');
	$this->Ln();
	$this->SetFont('Times','',9);
	$this->Cell(0,0.5,'1. KARTU INI HANYA BERLAKU BAGI PESERTA YANG NAMA DAN FOTONYA TERDAPAT PADA KARTU INI.','L,R',0,'l');
	$this->Ln();
	$this->Cell(0,0.5,'2. KARTU INI HARAP DIPERLIHATKAN KEPADA PETUGAS SAAT PEMBUATAN SURAT PERJANJIAN KEUANGAN.','L,R',0,'l');
	$this->Ln();
	$this->Cell(0,0.5,'3. KARTU INI WAJIB DIBAWA PADA SAAT TEST.','L,R',0,'l');
	$this->Ln();
	$this->Cell(0,0.5,'4. APABILA KARTU INI HILANG HARAP MELAPOR KE PANITIA UJIAN SARINGAN MASUK.','L,R',0,'l');
	$this->Ln();
	$this->Cell(0,0.5,'5. PESERTA YANG MASIH BERSEKOLAH WAJIB MENGGUNAKAN SERAGAM SEKOLAH DAN SEPATU PADA SAAT TEST.','L,R,B',0,'l');
}
}
 
$pdf = new PDF('P','cm','A4');
$pdf->Open();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak('off',4.5);
$pdf->Output();
?>
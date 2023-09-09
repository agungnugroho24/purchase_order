-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 02:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesan`
--

CREATE TABLE IF NOT EXISTS `detail_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `jml_brg` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesan`
--

INSERT INTO `detail_pesan` (`id_pesan`, `id_brg`, `jml_brg`) VALUES
(1, 'B001', 1),
(1, 'B002', 1),
(2, 'B003', 1),
(3, 'B001', 4),
(4, 'B001', 1),
(4, 'B002', 1),
(5, 'B001', 1),
(7, 'B001', 1),
(6, 'B001', 5),
(6, 'B002', 1),
(7, 'B002', 1),
(9, 'B001', 1),
(8, 'B002', 1),
(9, 'B002', 1),
(10, 'B001', 7),
(10, 'B002', 1),
(11, 'B001', 1),
(13, 'B001', 1),
(12, 'B002', 1),
(14, 'B001', 1),
(15, 'B001', 1),
(16, 'B001', 1),
(17, 'B001', 1),
(17, 'B002', 1),
(18, 'B001', 1),
(20, 'B001', 1),
(19, 'B002', 1),
(21, 'B001', 1),
(25, 'B002', 8),
(22, 'B002', 1),
(23, 'B001', 1),
(27, 'B001', 1),
(25, 'B001', 2),
(26, 'B002', 8),
(27, 'B002', 1),
(28, 'B002', 1),
(28, 'B002', 1),
(29, 'B001', 1),
(29, 'B002', 1),
(30, 'B002', 1),
(29, 'B001', 1),
(29, 'B002', 1),
(30, 'B001', 1),
(29, 'B002', 1),
(30, 'B001', 1),
(30, 'B002', 1),
(31, 'B001', 1),
(31, 'B002', 1),
(31, 'B001', 1),
(31, 'B002', 1),
(32, 'B001', 1),
(32, 'B002', 1),
(32, 'B001', 1),
(32, 'B002', 1),
(33, 'B001', 1),
(33, 'B002', 1),
(33, 'B001', 1),
(33, 'B002', 1),
(34, 'B001', 1),
(34, 'B002', 1),
(34, 'B001', 1),
(34, 'B002', 1),
(35, 'B001', 1),
(35, 'B002', 1),
(35, 'B001', 1),
(35, 'B002', 1),
(36, 'B001', 1),
(36, 'B002', 1),
(36, 'B001', 1),
(36, 'B002', 1),
(37, 'B001', 1),
(37, 'B002', 1),
(37, 'B001', 1),
(37, 'B002', 1),
(38, 'B001', 1),
(38, 'B002', 1),
(38, 'B001', 1),
(38, 'B002', 1),
(39, 'B001', 1),
(39, 'B002', 1),
(39, 'B001', 1),
(39, 'B002', 1),
(40, 'B001', 1),
(40, 'B002', 1),
(40, 'B001', 1),
(40, 'B002', 1),
(41, 'B001', 1),
(41, 'B002', 1),
(41, 'B001', 1),
(41, 'B002', 1),
(42, 'B001', 1),
(42, 'B002', 1),
(42, 'B001', 1),
(42, 'B002', 1),
(43, 'B001', 1),
(43, 'B002', 1),
(43, 'B001', 1),
(43, 'B002', 1),
(44, 'B001', 1),
(61, 'B001', 2),
(44, 'B001', 1),
(60, 'B001', 2),
(45, 'B001', 1),
(45, 'B002', 1),
(45, 'B001', 1),
(45, 'B002', 1),
(46, 'B001', 1),
(46, 'B002', 1),
(46, 'B001', 1),
(46, 'B002', 1),
(47, 'B001', 5),
(47, 'B002', 5),
(48, 'B001', 2),
(49, 'B001', 1),
(53, 'B002', 2),
(54, 'B001', 18),
(54, 'B003', 18),
(54, 'B005', 16),
(55, 'B001', 1),
(56, 'B001', 1),
(57, 'B001', 73),
(58, 'B002', 2),
(59, 'B002', 2),
(62, 'B001', 2),
(62, 'B001', 1),
(63, 'B001', 2),
(63, 'B001', 1),
(64, 'B001', 1),
(65, 'B001', 1),
(67, 'B001', 3),
(68, 'B001', 2),
(68, 'B001', 2),
(69, 'B001', 1),
(69, 'B002', 2),
(70, 'B001', 2),
(70, 'B002', 1),
(71, 'B001', 1),
(72, 'B001', 2),
(73, 'B009', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fpb`
--

CREATE TABLE IF NOT EXISTS `fpb` (
  `No` int(5) NOT NULL AUTO_INCREMENT,
  `nospp` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `namabrg` varchar(30) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `pengguna` varchar(20) NOT NULL,
  `penanggung_jawab` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fpb`
--

INSERT INTO `fpb` (`No`, `nospp`, `tanggal`, `namabrg`, `jenis`, `unit`, `pengguna`, `penanggung_jawab`) VALUES
(1, '1', '2014-12-29', 'tes', 'Monitor', 'STMIK', 'tes', 'tes'),
(3, '1', '2015-05-21', 'Pipa L', '', '', 'AA', 'AAA');

-- --------------------------------------------------------

--
-- Table structure for table `in_barang`
--

CREATE TABLE IF NOT EXISTS `in_barang` (
  `id_brg` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_barang`
--

INSERT INTO `in_barang` (`id_brg`, `id_user`, `jml_brg`, `tgl`, `time`, `harga`) VALUES
('B001', 'gudang', 20, '2014-05-26', '16:33:34', 0),
('B001', 'gudang', 21, '2014-06-11', '10:59:39', 0),
('B001', 'gudang', 10, '2014-06-11', '22:29:22', 0),
('B001', 'gudang', 0, '2014-06-11', '22:37:12', 0),
('B001', 'gudang', 50, '2014-06-14', '13:45:15', 0),
('B002', 'gudang', 60, '2014-06-14', '13:45:29', 0),
('B003', 'gudang', 50, '2014-06-14', '13:45:37', 0),
('B001', 'gudang', 70, '2014-06-25', '09:36:56', 0),
('B002', 'gudang', 50, '2014-06-25', '09:37:12', 0),
('B001', 'gudang', 5, '2014-06-25', '10:54:12', 0),
('B002', 'gudang', 2, '2014-06-25', '10:54:31', 0),
('B003', 'gudang', 10, '2014-06-25', '11:14:10', 0),
('B004', 'gudang', 10, '2014-06-25', '11:14:35', 0),
('B001', 'gudang', 1, '2014-08-11', '17:32:01', 0),
('B003', 'gudang', 10, '2014-08-12', '09:59:16', 0),
('B004', 'gudang', 10, '2014-08-12', '09:59:23', 0),
('B005', 'gudang', 10, '2014-08-12', '09:59:33', 0),
('B006', 'gudang', 10, '2014-08-12', '09:59:37', 0),
('B007', 'gudang', 10, '2014-08-12', '09:59:42', 0),
('B008', 'gudang', 10, '2014-08-12', '09:59:48', 0),
('B009', 'gudang', 10, '2014-08-12', '09:59:52', 0),
('B010', 'gudang', 10, '2014-08-12', '10:00:00', 0),
('B011', 'gudang', 10, '2014-08-12', '10:00:31', 0),
('B012', 'gudang', 5, '2014-08-12', '10:02:36', 0),
('B021', 'gudang', 10, '2014-08-12', '10:02:51', 0),
('B023', 'gudang', 5, '2014-08-12', '10:03:10', 0),
('B001', 'gudang', 1, '2014-12-20', '10:35:42', 0),
('B001', 'gudang', 3, '2014-12-20', '11:03:34', 0),
('B001', 'gudang', 1, '0000-00-00', '11:04:48', 2147483647),
('B003', 'gudang', 1, '0000-00-00', '11:05:53', 2147483647),
('B003', 'gudang', 1, '0000-00-00', '11:08:01', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:10:26', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:12:35', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:13:42', 2147483647),
('', 'gudang', 1, '0000-00-00', '11:14:26', 2147483647),
('', 'gudang', 1, '0000-00-00', '11:14:48', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:14:56', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:14:57', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:15:02', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:15:02', 2147483647),
('B001', 'gudang', 1, '0000-00-00', '11:15:24', 2147483647),
('B001', 'gudang', 1, '2015-05-20', '22:00:38', 1),
('B011', 'gudang', 1, '2015-05-20', '22:01:03', 1),
('B023', 'gudang', 12, '2015-05-21', '09:40:54', 1),
('B022', 'gudang', 45, '2015-05-21', '09:41:47', 1),
('B024', 'gudang', 25, '2015-05-21', '09:42:16', 1),
('B025', 'gudang', 30, '2015-05-21', '09:46:18', 1),
('B001', 'gudang', 10, '2015-05-21', '16:41:48', 1);

--
-- Triggers `in_barang`
--
DROP TRIGGER IF EXISTS `input_brg`;
DELIMITER //
CREATE TRIGGER `input_brg` AFTER INSERT ON `in_barang`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('K001', 'Pipa Sambung'),
('K002', 'Pipa industri'),
('K003', 'Pipa'),
('K004', 'Pipa Air');

-- --------------------------------------------------------

--
-- Table structure for table `ms_barang`
--

CREATE TABLE IF NOT EXISTS `ms_barang` (
  `id_brg` varchar(10) NOT NULL,
  `nama_brg` varchar(25) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `harga` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_brg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_barang`
--

INSERT INTO `ms_barang` (`id_brg`, `nama_brg`, `id_kategori`, `stok`, `satuan`, `harga`) VALUES
('B001', 'Pipa kecil', 'K001', 299, 'box', NULL),
('B011', 'Pipa baja', 'K002', 10, '', NULL),
('B021', 'Pipa 1', 'K003', 20, '', NULL),
('B022', 'pipa L', 'K001', 45, 'pcs', 125000),
('B023', 'Pipa Saluran Air', 'K002', 12, 'pcs', 500000),
('B024', 'Pipa Lurus', 'K003', 25, 'pcs', 140000),
('B025', 'Pipa C', 'K001', 30, 'pcs', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `ms_jabatan`
--

CREATE TABLE IF NOT EXISTS `ms_jabatan` (
  `id_jabatan` int(1) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_jabatan`
--

INSERT INTO `ms_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala Unit'),
(2, 'Staf Unit'),
(3, 'Gudang'),
(4, 'Akunting');

-- --------------------------------------------------------

--
-- Table structure for table `ms_unit`
--

CREATE TABLE IF NOT EXISTS `ms_unit` (
  `id_unit` int(1) NOT NULL,
  `nama_unit` varchar(10) NOT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_unit`
--

INSERT INTO `ms_unit` (`id_unit`, `nama_unit`) VALUES
(1, 'STMIK'),
(2, 'STIE'),
(3, 'STBA'),
(4, 'ASMI'),
(5, 'TK'),
(6, 'SD'),
(7, 'SMP'),
(8, 'SMA'),
(9, 'SMK'),
(10, 'MARKETING'),
(11, 'AKUNTING'),
(12, 'FINANCE'),
(13, 'UMUM'),
(14, 'IT'),
(15, 'P3UBD'),
(16, 'SEKBID'),
(17, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE IF NOT EXISTS `ms_user` (
  `id_user` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_jabatan` int(1) NOT NULL,
  `id_unit` int(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`id_user`, `pass`, `nama`, `email`, `id_jabatan`, `id_unit`) VALUES
('admin', 'admin', '', '', 0, 0),
('kepala_unit', 'kepala', 'A', 'kepala@yahoo.com', 1, 1),
('stie', 'stie', 'D', '', 1, 2),
('unit', 'unit', 'B', 'kepala@yahoo.com', 2, 1),
('stie1', 'stie1', 'q', '', 2, 2),
('gudang', 'gudang', 'Gudang', '', 3, 0),
('gudang1', 'gudang1', 'Rose', '', 3, 0),
('akun1', 'akun1', 'Gudang', '', 4, 0),
('stba1', 'stba1', 'F', '', 2, 3),
('akun', 'akun', 'a', '', 4, 0),
('stba', 'stba', 'E', '', 1, 3),
('asmi', 'asmi', 'G', '', 1, 4),
('asmi1', 'asmi1', 'H', '', 2, 4),
('tk', 'tk', 'I', '', 1, 5),
('tk1', 'tk1', 'J', '', 2, 5),
('sd', 'sd', 'K', '', 1, 6),
('sd1', 'sd1', 'L', '', 2, 6),
('smp', 'smp', 'M', '', 1, 7),
('smp1', 'smp1', 'N', '', 2, 7),
('sma', 'sma', 'O', '', 1, 8),
('sma1', 'sma1', 'P', '', 2, 8),
('smk', 'smk', 'Q', '', 1, 9),
('smk1', 'smk1', 'R', '', 2, 9),
('marketing', 'marketing', 'S', '', 1, 10),
('marketing1', 'marketing1', 'T', '', 2, 10),
('akunting', 'akunting', 'U', '', 1, 11),
('akunting1', 'akunting1', 'V', '', 2, 11),
('finance', 'finance', 'W', '', 1, 12),
('finance1', 'finance1', 'X', '', 2, 12),
('umum', 'umum', 'Y', '', 1, 13),
('umum1', 'umum1', 'Z', '', 2, 13),
('it', 'it', 'Aa', '', 1, 14),
('it1', 'it1', 'Ab', '', 2, 14),
('p3ubd', 'p3ubd', 'Ac', '', 1, 15),
('p3ubd1', 'p3ubd1', 'Ad', '', 2, 15),
('sekbid', 'sekbid', 'Ae', '', 1, 16),
('sekbid1', 'sekbid1', 'Af', '', 2, 16),
('hrd', 'hrd', 'Ag', '', 1, 17),
('hrd1', 'hrd1', 'Ah', '', 2, 17),
('Purchasing', 'po', 'purchasing order', '', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` datetime NOT NULL,
  `id_unit` int(1) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `dari` int(1) NOT NULL,
  `kepada_1` int(1) NOT NULL,
  `kepada_2` int(1) NOT NULL,
  `kepada_3` int(1) NOT NULL,
  `sudahbaca` varchar(1) NOT NULL,
  `acc` varchar(1) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE IF NOT EXISTS `po` (
  `nopo` varchar(11) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `deldate` date DEFAULT NULL,
  `npwp` int(11) DEFAULT NULL,
  `sppno` varchar(20) NOT NULL,
  `sppdate` date NOT NULL,
  `supplier` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `description` varchar(30) NOT NULL,
  `qty` int(5) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `price` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `generaltotal` int(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `bilangan` varchar(70) NOT NULL,
  PRIMARY KEY (`nopo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`nopo`, `jurusan`, `date`, `deldate`, `npwp`, `sppno`, `sppdate`, `supplier`, `alamat`, `description`, `qty`, `unit`, `price`, `amount`, `subtotal`, `generaltotal`, `keterangan`, `bilangan`) VALUES
('011', '', '0000-00-00', '0000-00-00', 1234567890, '012', '0000-00-00', 'Jang Woll', 'Taiwan ', 'Pipa Baja', 100, 'pcs', 140000, 14000000, 14000000, 14000000, 'Cash', 'Empat Belas Juta Rupiah');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE IF NOT EXISTS `spp` (
  `nospp` varchar(15) NOT NULL DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `namabrg` varchar(30) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `satuan` tinytext,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `pengguna` varchar(20) DEFAULT NULL,
  `penanggung_jawab` varchar(20) DEFAULT NULL,
  `acc` varchar(2) NOT NULL,
  PRIMARY KEY (`nospp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`nospp`, `tanggal`, `namabrg`, `jenis`, `unit`, `jumlah`, `satuan`, `harga`, `total`, `keterangan`, `pengguna`, `penanggung_jawab`, `acc`) VALUES
('014', '0000-00-00', 'pipa besar ', NULL, NULL, 25, 'pcs', 180000, 0, 'ketebalan 4mm', NULL, NULL, ''),
('1001', '0000-00-00', 'pipa sambungan L', NULL, NULL, 170, 'pcs', 27500, 0, 'ketebalan 2mm', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_akunting`
--

CREATE TABLE IF NOT EXISTS `tmp_akunting` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_akunting`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_akunting`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_akunting` AFTER DELETE ON `tmp_akunting`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_akunting`;
DELIMITER //
CREATE TRIGGER `minta_brg_akunting` AFTER INSERT ON `tmp_akunting`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_asmi`
--

CREATE TABLE IF NOT EXISTS `tmp_asmi` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_asmi`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_asmi`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_asmi` AFTER DELETE ON `tmp_asmi`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_asmi`;
DELIMITER //
CREATE TRIGGER `minta_brg_asmi` AFTER INSERT ON `tmp_asmi`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_finance`
--

CREATE TABLE IF NOT EXISTS `tmp_finance` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_finance`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_finance`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_finance` AFTER DELETE ON `tmp_finance`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_finance`;
DELIMITER //
CREATE TRIGGER `minta_brg_finance` AFTER INSERT ON `tmp_finance`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_hrd`
--

CREATE TABLE IF NOT EXISTS `tmp_hrd` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_hrd`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_hrd`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_hrd` AFTER DELETE ON `tmp_hrd`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_hrd`;
DELIMITER //
CREATE TRIGGER `minta_brg_hrd` AFTER INSERT ON `tmp_hrd`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_it`
--

CREATE TABLE IF NOT EXISTS `tmp_it` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_it`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_it`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_it` AFTER DELETE ON `tmp_it`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_it`;
DELIMITER //
CREATE TRIGGER `minta_brg_it` AFTER INSERT ON `tmp_it`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_marketing`
--

CREATE TABLE IF NOT EXISTS `tmp_marketing` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_marketing`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_marketing`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_marketing` AFTER DELETE ON `tmp_marketing`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_marketing`;
DELIMITER //
CREATE TRIGGER `minta_brg_marketing` AFTER INSERT ON `tmp_marketing`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_p3ubd`
--

CREATE TABLE IF NOT EXISTS `tmp_p3ubd` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_p3ubd`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_p3ubd`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_p3ubd` AFTER DELETE ON `tmp_p3ubd`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_p3ubd`;
DELIMITER //
CREATE TRIGGER `minta_brg_p3ubd` AFTER INSERT ON `tmp_p3ubd`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_sd`
--

CREATE TABLE IF NOT EXISTS `tmp_sd` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_sd`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_sd`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_sd` AFTER DELETE ON `tmp_sd`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_sd`;
DELIMITER //
CREATE TRIGGER `minta_brg_sd` AFTER INSERT ON `tmp_sd`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_sekbid`
--

CREATE TABLE IF NOT EXISTS `tmp_sekbid` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_sekbid`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_sekbid`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_sekbid` AFTER DELETE ON `tmp_sekbid`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_sekbid`;
DELIMITER //
CREATE TRIGGER `minta_brg_sekbid` AFTER INSERT ON `tmp_sekbid`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_sma`
--

CREATE TABLE IF NOT EXISTS `tmp_sma` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_sma`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_sma`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_sma` AFTER DELETE ON `tmp_sma`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_sma`;
DELIMITER //
CREATE TRIGGER `minta_brg_sma` AFTER INSERT ON `tmp_sma`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_smk`
--

CREATE TABLE IF NOT EXISTS `tmp_smk` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_smk`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_smk`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_smk` AFTER DELETE ON `tmp_smk`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_smk`;
DELIMITER //
CREATE TRIGGER `minta_brg_smk` AFTER INSERT ON `tmp_smk`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_smp`
--

CREATE TABLE IF NOT EXISTS `tmp_smp` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_smp`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_smp`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_smp` AFTER DELETE ON `tmp_smp`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_smp`;
DELIMITER //
CREATE TRIGGER `minta_brg_smp` AFTER INSERT ON `tmp_smp`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_spp`
--

CREATE TABLE IF NOT EXISTS `tmp_spp` (
  `nospp` varchar(15) NOT NULL DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `namabrg` varchar(30) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `satuan` tinytext,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `pengguna` varchar(20) DEFAULT NULL,
  `penanggung_jawab` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`nospp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_spp`
--

INSERT INTO `tmp_spp` (`nospp`, `tanggal`, `namabrg`, `jenis`, `unit`, `jumlah`, `satuan`, `harga`, `total`, `keterangan`, `pengguna`, `penanggung_jawab`) VALUES
('1001', '0000-00-00', 'pipa sambungan L', NULL, NULL, 170, 'pcs', 27500, 0, 'ketebalan 2mm', NULL, NULL),
('014', '0000-00-00', 'pipa besar ', NULL, NULL, 25, 'pcs', 180000, 0, 'ketebalan 4mm', NULL, NULL),
('015', '0000-00-00', 'pipa sedang', NULL, NULL, 50, 'pcs', 165000, 0, 'ketebalan 3mm', NULL, NULL),
('', '0000-00-00', '', NULL, NULL, 0, '', 0, 0, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_stba`
--

CREATE TABLE IF NOT EXISTS `tmp_stba` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_stba`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_stba`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_stba` AFTER DELETE ON `tmp_stba`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_stba`;
DELIMITER //
CREATE TRIGGER `minta_brg_stba` AFTER INSERT ON `tmp_stba`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_stie`
--

CREATE TABLE IF NOT EXISTS `tmp_stie` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_stie`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_stie`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_stie` AFTER DELETE ON `tmp_stie`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_stie`;
DELIMITER //
CREATE TRIGGER `minta_brg_stie` AFTER INSERT ON `tmp_stie`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_stmik`
--

CREATE TABLE IF NOT EXISTS `tmp_stmik` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_stmik`
--

INSERT INTO `tmp_stmik` (`id_pesan`, `id_brg`, `id_unit`, `jml_brg`, `tgl`, `time`) VALUES
(0, 'B011', 1, 1, '2015-05-21', '09:26:12');

--
-- Triggers `tmp_stmik`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_stmik`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_stmik` AFTER DELETE ON `tmp_stmik`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_stmik`;
DELIMITER //
CREATE TRIGGER `minta_brg_stmik` AFTER INSERT ON `tmp_stmik`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_tk`
--

CREATE TABLE IF NOT EXISTS `tmp_tk` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_tk`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_tk`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_tk` AFTER DELETE ON `tmp_tk`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_tk`;
DELIMITER //
CREATE TRIGGER `minta_brg_tk` AFTER INSERT ON `tmp_tk`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_umum`
--

CREATE TABLE IF NOT EXISTS `tmp_umum` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `tmp_umum`
--
DROP TRIGGER IF EXISTS `btl_minta_brg_umum`;
DELIMITER //
CREATE TRIGGER `btl_minta_brg_umum` AFTER DELETE ON `tmp_umum`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `minta_brg_umum`;
DELIMITER //
CREATE TRIGGER `minta_brg_umum` AFTER INSERT ON `tmp_umum`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok - NEW.jml_brg
WHERE
id_brg = NEW.id_brg;END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trx_barang`
--

CREATE TABLE IF NOT EXISTS `trx_barang` (
  `id_pesan` int(11) NOT NULL,
  `id_brg` varchar(10) NOT NULL,
  `id_unit` int(1) NOT NULL,
  `jml_brg` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_barang`
--

INSERT INTO `trx_barang` (`id_pesan`, `id_brg`, `id_unit`, `jml_brg`, `tgl`, `time`) VALUES
(1, 'B001', 3, 1, '2014-06-12', '17:40:07'),
(1, 'B002', 3, 1, '2014-06-12', '17:40:07'),
(3, 'B001', 4, 4, '2014-06-13', '17:23:32'),
(4, 'B001', 4, 1, '2014-06-13', '17:29:19'),
(4, 'B002', 4, 1, '2014-06-13', '17:29:19'),
(12, 'B002', 8, 1, '2014-06-14', '19:26:13'),
(6, 'B001', 5, 5, '2014-06-14', '13:43:41'),
(13, 'B001', 9, 1, '2014-06-14', '19:56:17'),
(6, 'B002', 5, 1, '2014-06-14', '13:43:49'),
(15, 'B001', 11, 1, '2014-06-14', '21:50:43'),
(8, 'B002', 6, 1, '2014-06-14', '18:38:20'),
(17, 'B001', 12, 1, '2014-06-18', '08:04:02'),
(14, 'B001', 10, 1, '2014-06-14', '20:23:10'),
(16, 'B001', 1, 1, '2014-06-16', '19:57:53'),
(17, 'B002', 12, 1, '2014-06-18', '08:04:02'),
(18, 'B001', 13, 1, '2014-06-18', '08:27:23'),
(20, 'B001', 15, 1, '2014-06-18', '10:00:07'),
(19, 'B002', 14, 1, '2014-06-18', '09:33:08'),
(21, 'B001', 16, 1, '2014-06-18', '10:49:19'),
(26, 'B002', 12, 8, '2014-06-19', '13:34:09'),
(22, 'B002', 17, 1, '2014-06-18', '11:08:36'),
(27, 'B002', 1, 1, '2014-06-19', '15:06:32'),
(27, 'B001', 1, 1, '2014-06-19', '15:06:32'),
(28, 'B002', 1, 1, '2014-06-20', '07:55:42'),
(28, 'B002', 1, 1, '2014-06-20', '07:56:33'),
(29, 'B001', 1, 1, '2014-06-20', '08:20:12'),
(29, 'B002', 1, 1, '2014-06-20', '08:20:12'),
(29, 'B001', 1, 1, '2014-06-20', '08:20:18'),
(29, 'B002', 1, 1, '2014-06-20', '08:20:18'),
(29, 'B002', 1, 1, '2014-06-20', '08:20:27'),
(30, 'B002', 11, 1, '2014-06-20', '08:35:36'),
(30, 'B001', 11, 1, '2014-06-20', '08:35:36'),
(30, 'B001', 11, 1, '2014-06-20', '08:35:42'),
(30, 'B002', 11, 1, '2014-06-20', '08:35:42'),
(31, 'B001', 4, 1, '2014-06-20', '08:41:46'),
(31, 'B002', 4, 1, '2014-06-20', '08:41:46'),
(31, 'B001', 4, 1, '2014-06-20', '08:41:51'),
(31, 'B002', 4, 1, '2014-06-20', '08:41:52'),
(32, 'B001', 12, 1, '2014-06-20', '08:50:58'),
(32, 'B002', 12, 1, '2014-06-20', '08:50:58'),
(32, 'B001', 12, 1, '2014-06-20', '08:51:14'),
(32, 'B002', 12, 1, '2014-06-20', '08:51:14'),
(33, 'B001', 17, 1, '2014-06-20', '08:52:51'),
(33, 'B002', 17, 1, '2014-06-20', '08:52:51'),
(33, 'B001', 17, 1, '2014-06-20', '08:53:10'),
(33, 'B002', 17, 1, '2014-06-20', '08:53:10'),
(34, 'B001', 14, 1, '2014-06-20', '09:00:03'),
(34, 'B002', 14, 1, '2014-06-20', '09:00:03'),
(34, 'B001', 14, 1, '2014-06-20', '09:00:26'),
(34, 'B002', 14, 1, '2014-06-20', '09:00:26'),
(35, 'B001', 10, 1, '2014-06-20', '09:09:32'),
(35, 'B002', 10, 1, '2014-06-20', '09:09:32'),
(35, 'B001', 10, 1, '2014-06-20', '09:09:37'),
(35, 'B002', 10, 1, '2014-06-20', '09:09:37'),
(36, 'B001', 15, 1, '2014-06-20', '09:11:22'),
(36, 'B002', 15, 1, '2014-06-20', '09:11:22'),
(36, 'B001', 15, 1, '2014-06-20', '09:11:30'),
(36, 'B002', 15, 1, '2014-06-20', '09:11:30'),
(37, 'B001', 6, 1, '2014-06-20', '09:13:54'),
(37, 'B002', 6, 1, '2014-06-20', '09:13:54'),
(37, 'B001', 6, 1, '2014-06-20', '09:14:01'),
(37, 'B002', 6, 1, '2014-06-20', '09:14:01'),
(38, 'B001', 16, 1, '2014-06-20', '09:15:19'),
(38, 'B002', 16, 1, '2014-06-20', '09:15:19'),
(38, 'B001', 16, 1, '2014-06-20', '09:15:26'),
(38, 'B002', 16, 1, '2014-06-20', '09:15:26'),
(39, 'B001', 8, 1, '2014-06-20', '09:17:01'),
(39, 'B002', 8, 1, '2014-06-20', '09:17:01'),
(39, 'B001', 8, 1, '2014-06-20', '09:17:08'),
(39, 'B002', 8, 1, '2014-06-20', '09:17:08'),
(40, 'B001', 9, 1, '2014-06-20', '09:18:22'),
(40, 'B002', 9, 1, '2014-06-20', '09:18:22'),
(40, 'B001', 9, 1, '2014-06-20', '09:18:26'),
(40, 'B002', 9, 1, '2014-06-20', '09:18:26'),
(41, 'B001', 7, 1, '2014-06-20', '09:19:35'),
(41, 'B002', 7, 1, '2014-06-20', '09:19:35'),
(41, 'B001', 7, 1, '2014-06-20', '09:19:43'),
(41, 'B002', 7, 1, '2014-06-20', '09:19:43'),
(42, 'B001', 3, 1, '2014-06-20', '09:21:40'),
(42, 'B002', 3, 1, '2014-06-20', '09:21:40'),
(42, 'B001', 3, 1, '2014-06-20', '09:21:45'),
(42, 'B002', 3, 1, '2014-06-20', '09:21:45'),
(63, 'B001', 1, 2, '2014-08-12', '15:07:51'),
(62, 'B001', 1, 1, '2014-08-12', '09:36:51'),
(62, 'B001', 1, 2, '2014-08-12', '09:36:14'),
(61, 'B001', 1, 2, '2014-08-03', '13:02:58'),
(44, 'B001', 1, 1, '2014-06-20', '09:24:52'),
(64, 'B001', 1, 1, '2014-08-15', '09:59:02'),
(44, 'B001', 1, 1, '2014-06-20', '09:24:59'),
(63, 'B001', 1, 1, '2014-08-12', '15:08:29'),
(45, 'B001', 5, 1, '2014-06-20', '09:26:31'),
(45, 'B002', 5, 1, '2014-06-20', '09:26:31'),
(45, 'B001', 5, 1, '2014-06-20', '09:26:36'),
(45, 'B002', 5, 1, '2014-06-20', '09:26:36'),
(46, 'B001', 13, 1, '2014-06-20', '09:28:06'),
(46, 'B002', 13, 1, '2014-06-20', '09:28:06'),
(46, 'B001', 13, 1, '2014-06-20', '09:28:11'),
(46, 'B002', 13, 1, '2014-06-20', '09:28:11'),
(47, 'B001', 13, 5, '2014-06-22', '15:04:26'),
(47, 'B002', 13, 5, '2014-06-22', '15:04:26'),
(48, 'B001', 1, 2, '2014-06-22', '19:31:09'),
(49, 'B001', 1, 0, '2014-06-23', '09:36:37'),
(53, 'B002', 1, 2, '2014-06-24', '10:15:15'),
(54, 'B001', 1, 18, '2014-06-24', '10:20:42'),
(54, 'B003', 1, 18, '2014-06-24', '10:20:42'),
(54, 'B005', 1, 16, '2014-06-24', '10:20:42'),
(55, 'B001', 1, 1, '2014-06-25', '10:29:01'),
(56, 'B001', 2, 1, '2014-06-25', '11:11:26'),
(60, 'B001', 1, 2, '2014-08-03', '10:49:09'),
(58, 'B002', 12, 2, '2014-07-02', '15:29:58'),
(59, 'B002', 11, 2, '2014-07-02', '17:57:41'),
(65, 'B001', 1, 1, '2014-08-15', '10:01:17'),
(66, 'B001', 1, 1, '2014-08-15', '10:03:42'),
(67, 'B001', 1, 1, '2014-12-09', '10:09:20'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(69, 'B001', 1, 1, '2014-08-18', '00:00:00'),
(69, 'B002', 1, 2, '2014-08-18', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(69, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(69, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B001', 1, 2, '2014-08-18', '00:00:00'),
(70, 'B002', 1, 1, '2014-08-18', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(69, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(69, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(71, 'B001', 1, 1, '2014-08-18', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(69, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(69, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(71, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(72, 'B001', 1, 2, '2014-08-17', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00');
INSERT INTO `trx_barang` (`id_pesan`, `id_brg`, `id_unit`, `jml_brg`, `tgl`, `time`) VALUES
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(69, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(69, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(71, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(72, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(73, 'B009', 1, 2, '2014-06-22', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(69, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(69, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(71, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(72, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(73, 'B009', 0, 2, '0000-00-00', '00:00:00'),
(1, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(1, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(2, 'B003', 0, 1, '0000-00-00', '00:00:00'),
(3, 'B001', 0, 4, '0000-00-00', '00:00:00'),
(4, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(4, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(5, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(6, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(6, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(7, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(8, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(9, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(10, 'B001', 0, 7, '0000-00-00', '00:00:00'),
(10, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(11, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(13, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(12, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(14, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(15, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(16, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(17, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(18, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(20, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(19, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(21, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(22, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(23, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(27, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(25, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(26, 'B002', 0, 8, '0000-00-00', '00:00:00'),
(27, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(28, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(29, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(30, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(31, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(32, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(33, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(34, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(35, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(36, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(37, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(38, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(39, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(40, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(41, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(42, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(43, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(61, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(44, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(60, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(45, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(46, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(47, 'B001', 0, 5, '0000-00-00', '00:00:00'),
(47, 'B002', 0, 5, '0000-00-00', '00:00:00'),
(48, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(49, 'B001', 0, 0, '0000-00-00', '00:00:00'),
(53, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(54, 'B001', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B003', 0, 18, '0000-00-00', '00:00:00'),
(54, 'B005', 0, 16, '0000-00-00', '00:00:00'),
(55, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(56, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(57, 'B001', 0, 73, '0000-00-00', '00:00:00'),
(58, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(59, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(62, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(63, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(64, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(65, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(66, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(67, 'B001', 1, 3, '2014-12-09', '00:00:00'),
(69, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(69, 'B002', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(70, 'B002', 0, 1, '0000-00-00', '00:00:00'),
(71, 'B001', 0, 1, '0000-00-00', '00:00:00'),
(72, 'B001', 0, 2, '0000-00-00', '00:00:00'),
(73, 'B009', 0, 2, '0000-00-00', '00:00:00');

--
-- Triggers `trx_barang`
--
DROP TRIGGER IF EXISTS `btl_acc_brg`;
DELIMITER //
CREATE TRIGGER `btl_acc_brg` AFTER DELETE ON `trx_barang`
 FOR EACH ROW BEGIN
UPDATE ms_barang
SET stok = stok + OLD.jml_brg
WHERE
id_brg = OLD.id_brg;END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

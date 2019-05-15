-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 08:54 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sirent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`) VALUES
(2, 'Hendrik Adi Saputra', 'admin', '$2y$10$iLOCIRzpFtDpD.CJRdyo6OcBI7sme9p32CFaEwf0JmP20MdwQJqaK');

-- --------------------------------------------------------

--
-- Table structure for table `kostumer`
--

CREATE TABLE IF NOT EXISTS `kostumer` (
  `kostumer_id` int(11) NOT NULL AUTO_INCREMENT,
  `kostumer_nama` varchar(255) NOT NULL,
  `kostumer_alamat` text NOT NULL,
  `kostumer_jk` varchar(10) NOT NULL,
  `kostumer_hp` varchar(20) NOT NULL,
  `kostumer_ktp` varchar(50) NOT NULL,
  PRIMARY KEY (`kostumer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kostumer`
--

INSERT INTO `kostumer` (`kostumer_id`, `kostumer_nama`, `kostumer_alamat`, `kostumer_jk`, `kostumer_hp`, `kostumer_ktp`) VALUES
(2, 'Zainal Abidin', 'Jl. gagak putih no 627, medan . Indonesia', 'L', '082737373787', '998798798798'),
(3, 'Marlon Suwanggai ', 'Jl. supapa no.23 , Bekasi. Indonesia', 'L', '081234554443', '434534343434'),
(4, 'Muhammad Zainal', 'jl. merpati putih 2. no.66 , Indonesia', 'L', '081212121212', '232323232330'),
(5, 'Ratna Dewi', 'Jl. ampera selatan. no. 67 , jawa barat, indonesia asia', 'P', '081112122219', '232231131313'),
(6, 'Samsul Bahri', 'jl. peletok. jawa timur. indonesia', 'L', '081212221221', '876876876786'),
(7, 'Diki Alfarabi Hadi', 'jl. badak utara. no.123, aceh, indonesia', 'L', '081221222212', '876876876876');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `mobil_id` int(11) NOT NULL AUTO_INCREMENT,
  `mobil_merk` varchar(30) NOT NULL,
  `mobil_plat` varchar(20) NOT NULL,
  `mobil_warna` varchar(30) NOT NULL,
  `mobil_tahun` int(11) NOT NULL,
  `mobil_status` int(11) NOT NULL COMMENT '1 = tersedia, 2 = di pinjam',
  PRIMARY KEY (`mobil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`mobil_id`, `mobil_merk`, `mobil_plat`, `mobil_warna`, `mobil_tahun`, `mobil_status`) VALUES
(2, 'Toyota Avanza', 'Toyota Avanza', 'Silver', 2019, 1),
(3, 'Honda Brio', 'B 1111 AA', 'Putih Mutiara', 2016, 1),
(4, 'Toyota Fortuner', 'BK 2222 XX', 'Hitam Metalik', 2017, 1),
(5, 'Suzuki Swift', 'B 2333 B', 'Putih', 2016, 1),
(6, 'Toyota Innova', 'B 1222 BB', 'Hitam', 2015, 1),
(7, 'Toyota Agya', 'B 6666 B', 'Putih', 2017, 1),
(8, 'Daihatsu Xenia', 'B 6666 GG', 'Hitam', 2017, 1),
(9, 'Honda HR-V', 'B 123 NN', 'Hitam Metalik', 2017, 1),
(10, 'Suzuki Ertiga', 'BG 7777 HG', 'Putih', 2017, 1),
(11, 'Daihatsu Sigra', 'B 7767 B', 'Biru Muda', 2017, 1),
(17, 'Honda Jazz', 'N 1278 DK', 'Biru Metalic', 2016, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_karyawan` int(11) NOT NULL,
  `transaksi_kostumer` int(11) NOT NULL,
  `transaksi_mobil` int(11) NOT NULL,
  `transaksi_tgl_pinjam` date NOT NULL,
  `transaksi_tgl_kembali` date NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_denda` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `transaksi_totaldenda` int(11) NOT NULL,
  `transaksi_status` int(11) NOT NULL,
  `transaksi_tgldikembalikan` date NOT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_karyawan`, `transaksi_kostumer`, `transaksi_mobil`, `transaksi_tgl_pinjam`, `transaksi_tgl_kembali`, `transaksi_harga`, `transaksi_denda`, `transaksi_tgl`, `transaksi_totaldenda`, `transaksi_status`, `transaksi_tgldikembalikan`) VALUES
(2, 0, 5, 8, '2019-05-06', '2019-05-09', 300000, 30000, '2019-05-06', 180000, 1, '2019-05-15'),
(3, 0, 4, 2, '2019-05-06', '2019-05-08', 250000, 25000, '2019-05-06', 25000, 1, '2019-05-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

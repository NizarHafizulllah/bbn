-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2016 at 08:22 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_bbn`
--

CREATE TABLE IF NOT EXISTS `daftar_bbn` (
  `id` int(11) NOT NULL,
  `jenis_perubahan` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `warna` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `bentuk` varchar(50) NOT NULL,
  `nomor_polisi` varchar(15) NOT NULL,
  `warna_tnkb` varchar(10) NOT NULL,
  `nomor_mesin` varchar(30) NOT NULL,
  `nomor_identitas` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `nomor_ponsel` varchar(20) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `dasar` varchar(100) NOT NULL,
  `pemohon` varchar(50) NOT NULL,
  `nomor_rangka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_bbn`
--
ALTER TABLE `daftar_bbn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_bbn`
--
ALTER TABLE `daftar_bbn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

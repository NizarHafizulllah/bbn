-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2016 pada 13.05
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

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
-- Struktur dari tabel `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Nizar Hafizullah', 'nizarhafizullah66@gmail.com', 'bf93e5f003e40c3fba44e512aecd3cdc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivasi`
--

CREATE TABLE IF NOT EXISTS `aktivasi` (
`id_user` int(11) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `valid` int(11) NOT NULL DEFAULT '1',
  `validated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_bbn`
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
  `nomor_rangka` varchar(50) NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `daftar_bbn`
--

INSERT INTO `daftar_bbn` (`id`, `jenis_perubahan`, `tanggal`, `warna`, `jenis`, `bentuk`, `nomor_polisi`, `warna_tnkb`, `nomor_mesin`, `nomor_identitas`, `nama`, `pekerjaan`, `alamat`, `kode_pos`, `nomor_ponsel`, `wilayah`, `dasar`, `pemohon`, `nomor_rangka`, `approved`, `user_id`) VALUES
(1, '1', '2016-03-07', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '11', '11', '111', '11', '11', '11', 0, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lupa_password`
--

CREATE TABLE IF NOT EXISTS `lupa_password` (
`id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `tanggal` datetime NOT NULL,
  `valid` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `lupa_password`
--

INSERT INTO `lupa_password` (`id`, `id_user`, `hash`, `tanggal`, `valid`) VALUES
(1, 29, '2d8e5cfd02bc4fe614414523deebce1e', '2016-03-28 03:49:53', 0),
(2, 29, '6dd89f834ec13caad1c31ee27428b23a', '2016-03-28 03:50:17', 0),
(3, 29, 'c5584e141b8b93ded8fe6595473be238', '2016-04-04 04:30:14', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_ktp` varchar(25) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT '0',
  `waktu_aktivasi` datetime NOT NULL,
  `registered_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `email`, `nama`, `alamat`, `nomor_ktp`, `nomor_hp`, `password`, `aktif`, `waktu_aktivasi`, `registered_date`) VALUES
(28, 'nicaljiks@gmail.com', 'Nizar Hafizullah', 'dsssssssssssss', '18209302738787878', '3928379273879', '892ab763f02795bfa28354ef1d39059f', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'nizarhafizullah66@gmail.com', 'Nizar Hafizullah', 'Jln. Osap Sio', '1231230939329292', '081917293883', '892ab763f02795bfa28354ef1d39059f', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aktivasi`
--
ALTER TABLE `aktivasi`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `daftar_bbn`
--
ALTER TABLE `daftar_bbn`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lupa_password`
--
ALTER TABLE `lupa_password`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aktivasi`
--
ALTER TABLE `aktivasi`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_bbn`
--
ALTER TABLE `daftar_bbn`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lupa_password`
--
ALTER TABLE `lupa_password`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

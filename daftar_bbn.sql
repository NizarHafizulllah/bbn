/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.20 : Database - bbndb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bbndb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bbndb`;

/*Table structure for table `daftar_bbn` */

DROP TABLE IF EXISTS `daftar_bbn`;

CREATE TABLE `daftar_bbn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `daftar_bbn` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

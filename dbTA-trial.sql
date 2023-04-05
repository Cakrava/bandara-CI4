/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 10.4.25-MariaDB : Database - bandara2020022
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bandara2020022` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bandara2020022`;

/*Table structure for table `bandara` */

DROP TABLE IF EXISTS `bandara`;

CREATE TABLE `bandara` (
  `id_bandara` char(12) NOT NULL,
  `kode_bandara` char(12) DEFAULT NULL,
  `nama_bandara` varchar(50) DEFAULT NULL,
  `lokasi_bandara` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_bandara`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `bandara` */

insert  into `bandara`(`id_bandara`,`kode_bandara`,`nama_bandara`,`lokasi_bandara`,`provinsi`) values 
('B-01','001','Minangkabau','Padang Pariaman','Sumatera Barat'),
('B-010','010','internasional Sultan Syarif Kasim II ','Pekanbaru','Riau'),
('B-011','011','Internasional Halim Perdana Kusuma','Jakarta','DKI Jakarta'),
('B-012','012','Lunyuk','Sumbawa','Sumbawa'),
('B-013','013','Internasional Sultan Aji Muhammad Sulaiman','Balikpapan','Kalimantan Timur'),
('B-02','002','Fatmawati','Bengkulu','Bengkulu'),
('B-03','003','Sultan Iskandar Muda','Aceh Besar','Aceh'),
('B-04','004','Kualanamu','Deli Serdang','Sumatera Utara'),
('B-05','005','Internasional Raja Haji Fisabilillah','Kijang, Tanjung Pinang','Kepulauan Riau'),
('B-06','006','Radin Inten II','Bandar Lampung','Lampung'),
('B-07','007','Internasional Soekarno Hatta','Cengkareng','Tangerang'),
('B-08','008','Internasional H.A.S Hanandjoeddin','Bangka Belitung','Bangka Belitung'),
('B-09','009','Internasional Sultan Thaha','Jambi','Jambi'),
('B-14','014','Internasional Syamsuddin Noor','Banjarmasin','Kalimantan Selatan');

/*Table structure for table `detail_pemesaan` */

DROP TABLE IF EXISTS `detail_pemesaan`;

CREATE TABLE `detail_pemesaan` (
  `id_detail` char(12) NOT NULL,
  `nama_penumpang` varchar(40) DEFAULT NULL,
  `no_penumpang` int(15) DEFAULT NULL,
  `no_kursi` int(14) DEFAULT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_pemesaan` */

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id_karyawan` char(12) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `no_karyawan` int(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `karyawan` */

/*Table structure for table `maskapai` */

DROP TABLE IF EXISTS `maskapai`;

CREATE TABLE `maskapai` (
  `id_maskapai` char(12) NOT NULL,
  `nama_maskapai` varchar(40) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_maskapai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `maskapai` */

insert  into `maskapai`(`id_maskapai`,`nama_maskapai`,`logo`) values 
('1','Asia Link ','asialink.png'),
('10','Batik Air','batik_1.png'),
('11','Asia Link 2','cel.jpg'),
('2','Aviastar','aviastar.png'),
('4','Mandala Air','mandala.png'),
('5','Citilink','citilink.png'),
('6','Garuda Indonesia','garuda.png'),
('7','Sriwijaya Air','sriwijaya.png'),
('8','AirAsia','airasia.png'),
('9','Lion Air','lion.png');

/*Table structure for table `pembatalan` */

DROP TABLE IF EXISTS `pembatalan`;

CREATE TABLE `pembatalan` (
  `id_pembatalan` char(12) NOT NULL,
  `nama_penumpang` varchar(50) DEFAULT NULL,
  `no_penumpang` int(15) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `tgl_pembatalan` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id_pembatalan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pembatalan` */

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id_pemesanan` char(12) DEFAULT NULL,
  `id_rute` char(12) DEFAULT NULL,
  `id_pesawat` char(12) DEFAULT NULL,
  `id_bandara` char(12) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `nama_penumpang` varchar(50) DEFAULT NULL,
  `no_penumpang` int(14) DEFAULT NULL,
  `jml_tiket` int(12) DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `id_detail` char(1) DEFAULT NULL,
  KEY `id_rute` (`id_rute`),
  KEY `id_pesawat` (`id_pesawat`),
  KEY `id_bandara` (`id_bandara`),
  KEY `id_detail` (`id_detail`),
  CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON UPDATE CASCADE,
  CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_pesawat`) REFERENCES `pesawat` (`id_pesawat`) ON UPDATE CASCADE,
  CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_bandara`) REFERENCES `bandara` (`id_bandara`) ON UPDATE CASCADE,
  CONSTRAINT `pemesanan_ibfk_4` FOREIGN KEY (`id_detail`) REFERENCES `detail_pemesaan` (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pemesanan` */

/*Table structure for table `penumpang` */

DROP TABLE IF EXISTS `penumpang`;

CREATE TABLE `penumpang` (
  `id_penumpang` char(12) NOT NULL,
  `nama_penumpang` varchar(50) DEFAULT NULL,
  `no_penumpang` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_penumpang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penumpang` */

/*Table structure for table `pesawat` */

DROP TABLE IF EXISTS `pesawat`;

CREATE TABLE `pesawat` (
  `id_pesawat` char(12) NOT NULL,
  `no_pesawat` int(12) DEFAULT NULL,
  `nama_pesawat` varchar(50) DEFAULT NULL,
  `jenis_pesawat` varchar(50) DEFAULT NULL,
  `jml_kursi` int(12) DEFAULT NULL,
  `tarif_pesawat` double DEFAULT NULL,
  PRIMARY KEY (`id_pesawat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pesawat` */

insert  into `pesawat`(`id_pesawat`,`no_pesawat`,`nama_pesawat`,`jenis_pesawat`,`jml_kursi`,`tarif_pesawat`) values 
('PS-01',122,'Airbus A320','Aircraft Passenger',231,300000),
('PS-02',77,'Bombardier Q400','Aircraft Passenger',267,50000);

/*Table structure for table `rute` */

DROP TABLE IF EXISTS `rute`;

CREATE TABLE `rute` (
  `id_rute` char(12) NOT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `durasi` int(12) DEFAULT NULL,
  `tarif_rute` double DEFAULT NULL,
  `jadwal` time DEFAULT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `rute` */

insert  into `rute`(`id_rute`,`asal`,`tujuan`,`durasi`,`tarif_rute`,`jadwal`) values 
('R-01','Padang','Jakarta',5,500000,'00:00:19');

/*Table structure for table `temp` */

DROP TABLE IF EXISTS `temp`;

CREATE TABLE `temp` (
  `id_temp` char(12) NOT NULL,
  `no_kursi` int(13) DEFAULT NULL,
  PRIMARY KEY (`id_temp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `temp` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` int(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hak` varchar(50) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`nama`,`alamat`,`nohp`,`email`,`hak`,`foto`) values 
(1,'moko','$2y$10$8P7DPFw6MTCe9ZDmBj83yOb1g/i84Sw6fYhQ2F/xZDVxQT3EXrqU2','Joyo Kilat Moko','Sumber Makmur',2147483647,'Joyokilatm@gmail.com','Admin',NULL),
(2,'vra','$2y$10$2p8cBWIxQvKJ6CHypyrto./OwROLlGrsXfHR5qdwWw6297zZEX2Ny',NULL,NULL,NULL,'vra@gmail.com','Admin',NULL),
(3,'mahasa','$2y$10$AOIfuXyLTZzCl.0mf6y5P.V8NlUHWaGgK5UOajBWxzqHsed0ifq4q',NULL,NULL,NULL,'mahasa.dani2806@gmail.com','Admin',NULL),
(16,'mina','$2y$10$uJHjb0C5DithxrewRXCRFOW87QtosPsT89h43Y4FxhfBin//hxh6m',NULL,NULL,NULL,'mina@gmail.com','Admin','mina.jpg'),
(17,'apmp','$2y$10$GrVe1cbihrx3n7tRIkC0A.Gcx8VqHtvD51BFkFEjMdwzz6dYoSrUe',NULL,NULL,NULL,'apmp2406@gmail.com','Karyawan','apmp.jpg'),
(18,'rapis','$2y$10$HCVO1rg2D1MjinZRYV7kseqKiaqdNnifeojCW9a79jHvhAvHRUpVm',NULL,NULL,NULL,'rapis@gmail.com','Admin','rapis.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

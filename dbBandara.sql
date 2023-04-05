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
('B-010','010','Sultan Syarif Kasim II ','Pekanbaru','Riau'),
('B-011','011','Halim Perdana Kusuma ','Jakarta','DKI Jakarta'),
('B-012','012','Lunyuk','Sumbawa','Sumbawa'),
('B-013','013','Sultan Aji Muhammad Sulaiman','Balikpapan','Kalimantan Timur'),
('B-02','002','Fatmawati','Bengkulu','Bengkulu'),
('B-03','003','Sultan Iskandar Muda','Aceh Besar','Aceh'),
('B-04','004','Kualanamu','Deli Serdang','Sumatera Utara'),
('B-05','005','Raja Haji Fisabilillah','Kijang, Tanjung Pinang','Kepulauan Riau'),
('B-06','006','Radin Inten II','Bandar Lampung','Lampung'),
('B-07','007','Soekarno Hatta','Cengkareng','Tangerang'),
('B-08','008','H.A.S Hanandjoeddin','Bangka Belitung','Bangka Belitung'),
('B-09','009','Sultan Thaha','Jambi','Jambi'),
('B-14','014','Syamsuddin Noor','Banjarmasin','Kalimantan Selatan');

/*Table structure for table `detail_pembatalan` */

DROP TABLE IF EXISTS `detail_pembatalan`;

CREATE TABLE `detail_pembatalan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `tgl_keberangkatan` date DEFAULT NULL,
  `id_penumpang` char(20) DEFAULT NULL,
  `id_maskapai` varchar(50) DEFAULT NULL,
  `nama_bandara_a` varchar(50) DEFAULT NULL,
  `nama_bandara_t` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `dewasa` int(12) DEFAULT NULL,
  `anak` int(12) DEFAULT NULL,
  `jadwal` varchar(50) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `jml_tiket` int(12) DEFAULT NULL,
  `nomor_kursi` char(23) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_pembatalan` */

insert  into `detail_pembatalan`(`id`,`id_pemesanan`,`tgl_pemesanan`,`tgl_keberangkatan`,`id_penumpang`,`id_maskapai`,`nama_bandara_a`,`nama_bandara_t`,`kelas`,`dewasa`,`anak`,`jadwal`,`tarif`,`total`,`jml_tiket`,`nomor_kursi`) values 
(125,'2','2023-02-03','0000-00-00','1603010972','1','Minangkabau','Fatmawati','bisnis',5,0,'19.00',500000,'Rp. 4.000.000',5,'C-2,C-3,C-4,C-5,C-6'),
(126,'2','2023-02-03','0000-00-00','1603010972','10','Minangkabau','Fatmawati','ekonomi',1,3,'19.00',500000,'Rp. 1.200.000',4,'C-2,C-3,C-4,C-5'),
(127,'1','2023-02-03','0000-00-00','170301097219831','1','Minangkabau','Fatmawati','bisnis',2,0,'19.00',500000,'Rp. 1.900.000',2,'C-1'),
(128,'1','2023-02-03','0000-00-00','170301097219831','10','Minangkabau','Fatmawati','bisnis',3,0,'19.00',500000,'Rp. 2.600.000',3,'C-1,C-2,C-3');

/*Table structure for table `detail_pemesaan` */

DROP TABLE IF EXISTS `detail_pemesaan`;

CREATE TABLE `detail_pemesaan` (
  `id_detail` char(12) NOT NULL,
  `jadwal` varchar(40) DEFAULT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `tujuan` varchar(50) DEFAULT NULL,
  `jml_tiket` int(15) DEFAULT NULL,
  `tarif` int(14) DEFAULT NULL,
  `total` int(40) DEFAULT NULL,
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
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `id_pembatalan` char(12) DEFAULT NULL,
  `id_pemesanan` int(15) DEFAULT NULL,
  `tgl_pembatalan` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pembatalan` */

insert  into `pembatalan`(`id`,`id_pembatalan`,`id_pemesanan`,`tgl_pembatalan`) values 
(9,'1',122,NULL),
(10,'1',124,NULL),
(11,'1',121,NULL),
(12,'1',123,NULL);

/*Table structure for table `pemesanan` */

DROP TABLE IF EXISTS `pemesanan`;

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemesanan` varchar(20) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `tgl_keberangkatan` date DEFAULT NULL,
  `id_penumpang` char(20) DEFAULT NULL,
  `id_maskapai` varchar(50) DEFAULT NULL,
  `nama_bandara_a` varchar(50) DEFAULT NULL,
  `nama_bandara_t` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `dewasa` int(12) DEFAULT NULL,
  `anak` int(12) DEFAULT NULL,
  `jadwal` varchar(50) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `jml_tiket` int(12) DEFAULT NULL,
  `nomor_kursi` char(23) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pemesanan` */

insert  into `pemesanan`(`id`,`id_pemesanan`,`tgl_pemesanan`,`tgl_keberangkatan`,`id_penumpang`,`id_maskapai`,`nama_bandara_a`,`nama_bandara_t`,`kelas`,`dewasa`,`anak`,`jadwal`,`tarif`,`total`,`jml_tiket`,`nomor_kursi`) values 
(125,'1','2023-02-04','2023-02-11','1603010972','1','Minangkabau','Fatmawati','bisnis',2,1,'22.00',500000,'Rp. 2.075.000',3,'C-1,C-2,C-3');

/*Table structure for table `penumpang` */

DROP TABLE IF EXISTS `penumpang`;

CREATE TABLE `penumpang` (
  `id_penumpang` char(20) NOT NULL,
  `nama_penumpang` varchar(50) DEFAULT NULL,
  `no_penumpang` char(13) DEFAULT NULL,
  PRIMARY KEY (`id_penumpang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penumpang` */

insert  into `penumpang`(`id_penumpang`,`nama_penumpang`,`no_penumpang`) values 
('1603010972','Vra widia putri','082210992034'),
('170301097219831','Joyo kilat Moko','082297068911'),
('2','2','2'),
('23','adna','23');

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

/*Table structure for table `poli` */

DROP TABLE IF EXISTS `poli`;

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL AUTO_INCREMENT,
  `namapoli` varchar(50) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `poli` */

insert  into `poli`(`id_poli`,`namapoli`,`biaya`) values 
(1,'anak',400000),
(2,'jantung',800000),
(3,'paru',700000),
(4,'ginjal',50000),
(5,'hati',60000);

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`nama`,`alamat`,`nohp`,`email`,`hak`,`foto`) values 
(1,'moko','$2y$10$8P7DPFw6MTCe9ZDmBj83yOb1g/i84Sw6fYhQ2F/xZDVxQT3EXrqU2','Joyo Kilat Moko','Sumber Makmur',2147483647,'Joyokilatm@gmail.com','Admin',NULL),
(2,'vra','$2y$10$2p8cBWIxQvKJ6CHypyrto./OwROLlGrsXfHR5qdwWw6297zZEX2Ny',NULL,NULL,NULL,'vra@gmail.com','Admin',NULL),
(3,'mahasa','$2y$10$AOIfuXyLTZzCl.0mf6y5P.V8NlUHWaGgK5UOajBWxzqHsed0ifq4q',NULL,NULL,NULL,'mahasa.dani2806@gmail.com','Admin',NULL),
(16,'mina','$2y$10$uJHjb0C5DithxrewRXCRFOW87QtosPsT89h43Y4FxhfBin//hxh6m',NULL,NULL,NULL,'mina@gmail.com','Admin','mina.jpg'),
(17,'apmp','$2y$10$GrVe1cbihrx3n7tRIkC0A.Gcx8VqHtvD51BFkFEjMdwzz6dYoSrUe',NULL,NULL,NULL,'apmp2406@gmail.com','Karyawan','apmp.jpg'),
(18,'rapis','$2y$10$HCVO1rg2D1MjinZRYV7kseqKiaqdNnifeojCW9a79jHvhAvHRUpVm',NULL,NULL,NULL,'rapis@gmail.com','Admin','rapis.jpg'),
(19,'mon','$2y$10$2yqsHyWFRgd5GZFcD0F.zOnw5SJs/uYcwfYUg/NMNpPzY7.7oIo7S',NULL,NULL,NULL,'mon@gmail.com','Admin','mon.jpg');

/* Trigger structure for table `pembatalan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `insert_pembatalan_detail` */$$

/*!50003 CREATE */  /*!50003 TRIGGER `insert_pembatalan_detail` AFTER INSERT ON `pembatalan` FOR EACH ROW 
BEGIN
INSERT INTO detail_pembatalan (id_pemesanan, tgl_pemesanan, tgl_keberangkatan, id_penumpang, id_maskapai, nama_bandara_a, nama_bandara_t, kelas, dewasa, anak, jadwal, tarif, total, jml_tiket, nomor_kursi)
SELECT id_pemesanan, tgl_pemesanan, tgl_keberangkatan, id_penumpang, id_maskapai, nama_bandara_a, nama_bandara_t, kelas, dewasa, anak, jadwal, tarif, total, jml_tiket, nomor_kursi
FROM pemesanan
WHERE id = NEW.id_pemesanan;
DELETE FROM pemesanan WHERE id = NEW.id_pemesanan;
END */$$


DELIMITER ;

/* Trigger structure for table `pemesanan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `pemesanan` */$$

/*!50003 CREATE */  /*!50003 TRIGGER `pemesanan` BEFORE INSERT ON `pemesanan` FOR EACH ROW 
    BEGIN
      
        SET NEW.id_pemesanan = (SELECT COALESCE(MAX(id_pemesanan), 0) + 1 FROM pemesanan WHERE tgl_pemesanan = NEW.tgl_pemesanan AND id_maskapai = NEW.id_maskapai);
    END */$$


DELIMITER ;

/* Trigger structure for table `pemesanan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kursi` */$$

/*!50003 CREATE */  /*!50003 TRIGGER `kursi` BEFORE INSERT ON `pemesanan` FOR EACH ROW 
BEGIN
DECLARE nomor_kursi_akhir VARCHAR(10);
DECLARE i INT;
SET @nomor_kursi_akhir = (SELECT COALESCE(MAX(nomor_kursi), 'C-0')
FROM pemesanan
WHERE id_maskapai = NEW.id_maskapai
AND nama_bandara_a = NEW.nama_bandara_a
AND nama_bandara_t = NEW.nama_bandara_t);
SET @nomor_kursi_akhir = SUBSTRING(@nomor_kursi_akhir, 3);
SET @nomor_kursi_akhir = @nomor_kursi_akhir + 1;

SET NEW.nomor_kursi = '';
SET i = 1;
WHILE i <= NEW.jml_tiket DO
SET NEW.nomor_kursi = CONCAT(NEW.nomor_kursi, 'C-', @nomor_kursi_akhir, ',');
SET @nomor_kursi_akhir = @nomor_kursi_akhir + 1;
SET i = i + 1;
END WHILE;

SET NEW.nomor_kursi = LEFT(NEW.nomor_kursi, LENGTH(NEW.nomor_kursi) - 1);
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

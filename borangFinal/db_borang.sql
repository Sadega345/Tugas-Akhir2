/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.6.16 : Database - db_borang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_borang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_borang`;

/*Table structure for table `3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja` */

DROP TABLE IF EXISTS `3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja`;

CREATE TABLE `3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja` (
  `id` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja` */

LOCK TABLES `3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja` WRITE;

UNLOCK TABLES;

/*Table structure for table `mst_butir` */

DROP TABLE IF EXISTS `mst_butir`;

CREATE TABLE `mst_butir` (
  `butir_id` int(4) NOT NULL AUTO_INCREMENT,
  `butir_name` varchar(100) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `standar_id` int(4) DEFAULT NULL,
  `type_borang` int(4) DEFAULT NULL,
  `study_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`butir_id`),
  KEY `FK_mst_butir` (`standar_id`),
  KEY `FK_mst_butir_type_borang` (`type_borang`),
  KEY `FK_mst_butir_study` (`study_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `mst_butir` */

LOCK TABLES `mst_butir` WRITE;

insert  into `mst_butir`(`butir_id`,`butir_name`,`title`,`standar_id`,`type_borang`,`study_id`) values (1,'4.9.1','DATA MAHASISWA REGULER',4,1,3),(2,'3.1.1','JUMLAH MAHASISWA REGULER',4,1,3),(3,'3.4.1','EVALUASI KINERJA LULUSAN',3,1,3),(4,'3.4.5','LEMBAGA YANG MEMESAN LULUSAN UNTUK BEKERJA',3,1,3),(5,'4.3.1','DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',4,1,3),(6,'4.3.2','DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS',4,1,3),(7,'4.3.3','AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS',4,1,3),(8,'4.3.4','AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS   ',4,1,3),(9,'4.3.5','AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS      ',4,1,3),(10,'4.4.1','DATA DOSEN TIDAK TETAP',4,1,3),(11,'4.4.2','AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',4,1,3),(12,'4.5.1','KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)',4,1,3),(13,'4.5.2','PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR',4,1,3),(14,'4.5.3','KEGIATAN DOSEN TETAP DALAM SEMINAR DLL',4,1,3),(15,'4.5.5','KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI',4,1,3),(16,'4.6.1','TENAGA KEPENDIDIKAN',4,1,3),(17,'5.1.2.1','STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',5,1,3),(18,'5.2.2','WAKTU PELAKSANAAN REAL PROSES BELAJAR MENGAJAR',5,1,3),(19,'5.4.1','DOSEN PEMBIMBING AKADEMIK DAN JUMLAH MAHASISWA',5,1,3),(20,'5.5.2','PELAKSANAAN PEMBIMBINGAN TUGAS AKHIR / SKRIPSI',5,1,3),(21,'6.2.1.1','PEROLEHAN DAN ALOKASI DANA',6,1,3),(22,'6.2.1.2','PENGGUNAAN DANA',6,1,3),(23,'6.2.2','DANA UNTUK KEGIATAN PENELITIAN',6,1,3),(24,'6.2.3','DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',6,1,3),(25,'6.3.1','DATA RUANG KERJA DOSEN TETAP',6,1,3),(26,'6.4.1','KETERSEDIAAN PUSTAKA YANG RELEVAN',6,1,3),(27,'6.5.2','AKSESIBILITAS TIAP JENIS DATA',6,1,3),(28,'7.1.1','PENELITIAN DOSEN TETAP',7,1,3),(29,'7.1.2','JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU   ',7,1,3),(30,'7.2.1','KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT (PKM)',7,1,3),(31,'3.1.3','DATA MAHASISWA REGULER DAN NON REGULER',0,0,0),(32,'3.2.1','RATA-RATA MASA STUDI DAN IPK',3,2,3),(33,'4.1.1','DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',4,2,3),(34,'4.1.2','PENGGANTIAN DAN PENGEMBANGAN DOSEN TETAP',4,2,3),(35,'4,2','TENAGA KEPENDIDIKAN',4,2,3),(36,'6.1.1.1','JUMLAH DANA YANG DITERIMA FAKULTAS',6,2,3),(37,'6.1.1.2','PENGGUNAAN DANA',6,2,3),(38,'6.1.1.3','PENGGUNAAN DANA KEGIATAN TRIDARMA',6,2,3),(39,'6.4.2','AKSESIBILITAS DATA',6,2,3),(40,'7.1.1','JUMLAH DAN DANA PENELITIAN',7,2,3),(41,'7.2.1','JUMLAH DAN DANA KEGIATAN PELAYANAN / PENGABDIAN KEPADA MASYARAKAT',7,2,3),(51,'7.2.2','JUMLAH DAN DANA KEGIATAN SOSIAL',7,2,3);

UNLOCK TABLES;

/*Table structure for table `mst_faculty` */

DROP TABLE IF EXISTS `mst_faculty`;

CREATE TABLE `mst_faculty` (
  `faculty_id` varchar(5) NOT NULL,
  `faculty_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mst_faculty` */

LOCK TABLES `mst_faculty` WRITE;

insert  into `mst_faculty`(`faculty_id`,`faculty_name`) values ('FK001','Ilmu Komputer'),('FK002','Ekonomi'),('FK003','Psikologi'),('FK004','Sastra');

UNLOCK TABLES;

/*Table structure for table `mst_gender` */

DROP TABLE IF EXISTS `mst_gender`;

CREATE TABLE `mst_gender` (
  `gender_id` int(4) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mst_gender` */

LOCK TABLES `mst_gender` WRITE;

insert  into `mst_gender`(`gender_id`,`gender_name`) values (1,'Laki-laki'),(2,'Perempuan');

UNLOCK TABLES;

/*Table structure for table `mst_historis` */

DROP TABLE IF EXISTS `mst_historis`;

CREATE TABLE `mst_historis` (
  `id_historis` int(11) NOT NULL AUTO_INCREMENT,
  `judul_butir` varchar(100) DEFAULT NULL,
  `isi_form` varchar(100) DEFAULT NULL,
  `id_butir` int(11) DEFAULT NULL,
  `nama_table` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_historis`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `mst_historis` */

LOCK TABLES `mst_historis` WRITE;

insert  into `mst_historis`(`id_historis`,`judul_butir`,`isi_form`,`id_butir`,`nama_table`) values (31,'3_4_5_LEMBAGA_YANG_MEMESAN_LULUSAN_UNTUK_BEKERJA','Nama,Alamat,',4,'3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja');

UNLOCK TABLES;

/*Table structure for table `mst_lecturer` */

DROP TABLE IF EXISTS `mst_lecturer`;

CREATE TABLE `mst_lecturer` (
  `lecturer_id` int(4) NOT NULL AUTO_INCREMENT,
  `lecturer_name` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `numberphone` varchar(15) DEFAULT NULL,
  `gender_id` int(4) DEFAULT NULL,
  `religion_id` int(4) DEFAULT NULL,
  `major_id` varchar(5) DEFAULT NULL,
  `sertification_state` varchar(10) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lecturer_id`),
  KEY `FK_mst_lecturer_gender` (`gender_id`),
  KEY `FK_mst_lecturer_religion` (`religion_id`),
  KEY `FK_mst_lecturer_major` (`major_id`),
  CONSTRAINT `FK_mst_lecturer_gender` FOREIGN KEY (`gender_id`) REFERENCES `mst_gender` (`gender_id`),
  CONSTRAINT `FK_mst_lecturer_major` FOREIGN KEY (`major_id`) REFERENCES `mst_major` (`major_id`),
  CONSTRAINT `FK_mst_lecturer_religion` FOREIGN KEY (`religion_id`) REFERENCES `mst_religion` (`religion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mst_lecturer` */

LOCK TABLES `mst_lecturer` WRITE;

UNLOCK TABLES;

/*Table structure for table `mst_mahasiswa` */

DROP TABLE IF EXISTS `mst_mahasiswa`;

CREATE TABLE `mst_mahasiswa` (
  `ID` int(3) NOT NULL,
  `nama_mahasiswa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mst_mahasiswa` */

LOCK TABLES `mst_mahasiswa` WRITE;

UNLOCK TABLES;

/*Table structure for table `mst_major` */

DROP TABLE IF EXISTS `mst_major`;

CREATE TABLE `mst_major` (
  `major_id` varchar(5) NOT NULL,
  `major_name` varchar(500) DEFAULT NULL,
  `study_id` int(4) DEFAULT NULL,
  `faculty_id` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`major_id`),
  KEY `FK_mst_major_study` (`study_id`),
  KEY `FK_mst_major_faculty` (`faculty_id`),
  CONSTRAINT `FK_mst_major_faculty` FOREIGN KEY (`faculty_id`) REFERENCES `mst_faculty` (`faculty_id`),
  CONSTRAINT `FK_mst_major_study` FOREIGN KEY (`study_id`) REFERENCES `mst_study` (`study_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mst_major` */

LOCK TABLES `mst_major` WRITE;

insert  into `mst_major`(`major_id`,`major_name`,`study_id`,`faculty_id`) values ('PS001','Manajemen Informatika',3,'FK001'),('PS002','Teknik Informatika',5,'FK001');

UNLOCK TABLES;

/*Table structure for table `mst_religion` */

DROP TABLE IF EXISTS `mst_religion`;

CREATE TABLE `mst_religion` (
  `religion_id` int(4) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`religion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `mst_religion` */

LOCK TABLES `mst_religion` WRITE;

insert  into `mst_religion`(`religion_id`,`religion_name`) values (1,'Islam'),(2,'Kristen'),(3,'Khatolik'),(4,'Hindu'),(5,'Buddha'),(6,'Khonghucu');

UNLOCK TABLES;

/*Table structure for table `mst_standar` */

DROP TABLE IF EXISTS `mst_standar`;

CREATE TABLE `mst_standar` (
  `standar_id` int(4) NOT NULL AUTO_INCREMENT,
  `standar_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`standar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `mst_standar` */

LOCK TABLES `mst_standar` WRITE;

insert  into `mst_standar`(`standar_id`,`standar_name`) values (4,'Standar 4'),(5,'Standar 5'),(6,'Standar 6'),(7,'Standar 7'),(11,'Standar 3');

UNLOCK TABLES;

/*Table structure for table `mst_study` */

DROP TABLE IF EXISTS `mst_study`;

CREATE TABLE `mst_study` (
  `study_id` int(4) NOT NULL AUTO_INCREMENT,
  `study_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`study_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `mst_study` */

LOCK TABLES `mst_study` WRITE;

insert  into `mst_study`(`study_id`,`study_name`) values (1,'D1'),(2,'D2'),(3,'D3'),(4,'D4'),(5,'S1'),(6,'S2'),(7,'S3');

UNLOCK TABLES;

/*Table structure for table `mst_typeborang` */

DROP TABLE IF EXISTS `mst_typeborang`;

CREATE TABLE `mst_typeborang` (
  `type_id` int(4) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mst_typeborang` */

LOCK TABLES `mst_typeborang` WRITE;

insert  into `mst_typeborang`(`type_id`,`type_name`) values (1,'A'),(2,'B');

UNLOCK TABLES;

/*Table structure for table `permission` */

DROP TABLE IF EXISTS `permission`;

CREATE TABLE `permission` (
  `permission_id` int(4) NOT NULL AUTO_INCREMENT,
  `role_id` int(3) DEFAULT NULL,
  `data_user` varchar(100) DEFAULT NULL,
  `instrumen` varchar(100) DEFAULT NULL,
  `borang` varchar(100) DEFAULT NULL,
  `standar` varchar(100) DEFAULT NULL,
  `mhslulusan` varchar(100) DEFAULT NULL,
  `fakultas` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `keuangan` varchar(100) DEFAULT NULL,
  `logistik` varchar(100) DEFAULT NULL,
  `dosen` varchar(100) DEFAULT NULL,
  `jurnalilmiah` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`permission_id`),
  KEY `FK_permission` (`role_id`),
  CONSTRAINT `FK_permission` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `permission` */

LOCK TABLES `permission` WRITE;

insert  into `permission`(`permission_id`,`role_id`,`data_user`,`instrumen`,`borang`,`standar`,`mhslulusan`,`fakultas`,`prodi`,`keuangan`,`logistik`,`dosen`,`jurnalilmiah`) values (1,1,'Data User','Instrumen','Data Borang','Kelola Standar','','','','','','',''),(2,1,'Data User','Instrumen','Data Borang','Kelola Standar','','','','','','',''),(3,3,'Data User','Instrumen','Data Borang','Kelola Standar','Data Mahasiswa Dan lulusan',NULL,'Prodi','Keuangan','Logistik','Dosen','Jurnal'),(4,2,'v','','v','v','v','','v','v','v','v','v');

UNLOCK TABLES;

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `role_id` int(4) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

LOCK TABLES `role` WRITE;

insert  into `role`(`role_id`,`role_name`) values (1,'Kaprodi'),(2,'Akademik'),(3,'HRD'),(4,'Keuangan'),(5,'Logistik'),(6,'Perpustakaan'),(7,'Admin');

UNLOCK TABLES;

/*Table structure for table `role_permission` */

DROP TABLE IF EXISTS `role_permission`;

CREATE TABLE `role_permission` (
  `permission_id` int(4) NOT NULL AUTO_INCREMENT,
  `role_id` int(4) DEFAULT NULL,
  `id_historis` int(4) DEFAULT NULL,
  `nama_modul` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `role_permission` */

LOCK TABLES `role_permission` WRITE;

insert  into `role_permission`(`permission_id`,`role_id`,`id_historis`,`nama_modul`) values (19,1,28,'3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja');

UNLOCK TABLES;

/*Table structure for table `tbl_butirstudy` */

DROP TABLE IF EXISTS `tbl_butirstudy`;

CREATE TABLE `tbl_butirstudy` (
  `butir_id` int(4) DEFAULT NULL,
  `study_id` int(4) DEFAULT NULL,
  KEY `FK_tbl_butirstudy_butir` (`butir_id`),
  KEY `FK_tbl_butirstudy_study` (`study_id`),
  CONSTRAINT `FK_tbl_butirstudy_butir` FOREIGN KEY (`butir_id`) REFERENCES `mst_butir` (`butir_id`),
  CONSTRAINT `FK_tbl_butirstudy_study` FOREIGN KEY (`study_id`) REFERENCES `mst_study` (`study_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_butirstudy` */

LOCK TABLES `tbl_butirstudy` WRITE;

insert  into `tbl_butirstudy`(`butir_id`,`study_id`) values (1,3),(2,3),(3,3),(4,3),(5,3),(6,3),(7,3),(8,3),(9,3),(10,3),(11,3),(12,3),(13,3),(14,3),(15,3),(16,3),(17,3),(18,3),(19,3),(20,3),(21,3),(22,3),(23,3),(24,3),(25,3),(26,3);

UNLOCK TABLES;

/*Table structure for table `tbl_historystudy` */

DROP TABLE IF EXISTS `tbl_historystudy`;

CREATE TABLE `tbl_historystudy` (
  `studyhistory_id` int(4) NOT NULL AUTO_INCREMENT,
  `university_name` varchar(500) DEFAULT NULL,
  `degree` varchar(10) DEFAULT NULL,
  `join_year` varchar(4) DEFAULT NULL,
  `study_program` varchar(500) DEFAULT NULL,
  `graduate_year` varchar(4) DEFAULT NULL,
  `lecturer_id` int(4) DEFAULT NULL,
  `study_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`studyhistory_id`),
  KEY `FK_tbl_historystudy_lecturer` (`lecturer_id`),
  KEY `FK_tbl_historystudy_study` (`study_id`),
  CONSTRAINT `FK_tbl_historystudy_lecturer` FOREIGN KEY (`lecturer_id`) REFERENCES `mst_lecturer` (`lecturer_id`),
  CONSTRAINT `FK_tbl_historystudy_study` FOREIGN KEY (`study_id`) REFERENCES `mst_study` (`study_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_historystudy` */

LOCK TABLES `tbl_historystudy` WRITE;

UNLOCK TABLES;

/*Table structure for table `tbl_instrumen` */

DROP TABLE IF EXISTS `tbl_instrumen`;

CREATE TABLE `tbl_instrumen` (
  `instrumen_id` int(4) NOT NULL AUTO_INCREMENT,
  `instrumen_name` varchar(500) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`instrumen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_instrumen` */

LOCK TABLES `tbl_instrumen` WRITE;

insert  into `tbl_instrumen`(`instrumen_id`,`instrumen_name`,`file`) values (2,'apd','291be424198a37ad2f2b2c35e1fb7fa2.xlsx'),(3,'apd','8726f529ab31a83de2e51bdd786e7d22.docx');

UNLOCK TABLES;

/*Table structure for table `tbl_usermajor` */

DROP TABLE IF EXISTS `tbl_usermajor`;

CREATE TABLE `tbl_usermajor` (
  `user_id` int(4) DEFAULT NULL,
  `major_id` varchar(5) DEFAULT NULL,
  KEY `FK_tbl_usermajor_user` (`user_id`),
  KEY `FK_tbl_usermajor_major` (`major_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_usermajor` */

LOCK TABLES `tbl_usermajor` WRITE;

insert  into `tbl_usermajor`(`user_id`,`major_id`) values (2,'PS001'),(3,'PS002');

UNLOCK TABLES;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `role_id` int(4) DEFAULT NULL,
  `gender_id` int(4) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `FK_user` (`role_id`),
  KEY `FK_user_gender` (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`user_id`,`username`,`pwd`,`firstname`,`lastname`,`role_id`,`gender_id`) values (11,'teguh','prabowo','Teguh','Prabowo',1,1);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

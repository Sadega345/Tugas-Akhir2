/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.16 : Database - db_borang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_borang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_borang`;

/*Table structure for table `mst_butir` */

DROP TABLE IF EXISTS `mst_butir`;

CREATE TABLE `mst_butir` (
  `butir_id` int(4) NOT NULL AUTO_INCREMENT,
  `butir_name` varchar(100) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `standar_id` int(4) DEFAULT NULL,
  `type_borang` int(4) DEFAULT NULL,
  PRIMARY KEY (`butir_id`),
  KEY `FK_mst_butir` (`standar_id`),
  KEY `FK_mst_butir_type_borang` (`type_borang`),
  CONSTRAINT `FK_mst_butir_type_borang` FOREIGN KEY (`type_borang`) REFERENCES `mst_typeborang` (`type_id`),
  CONSTRAINT `FK_mst_butir` FOREIGN KEY (`standar_id`) REFERENCES `mst_standar` (`standar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mst_butir` */

LOCK TABLES `mst_butir` WRITE;

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
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`standar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mst_standar` */

LOCK TABLES `mst_standar` WRITE;

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
  `role_id` int(4) DEFAULT NULL,
  `permission` text,
  PRIMARY KEY (`permission_id`),
  KEY `FK_permission` (`role_id`),
  CONSTRAINT `FK_permission` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `permission` */

LOCK TABLES `permission` WRITE;

UNLOCK TABLES;

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `role_id` int(4) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

LOCK TABLES `role` WRITE;

insert  into `role`(`role_id`,`role_name`) values (1,'Kaprodi'),(2,'Akademik'),(3,'HRD'),(4,'Keuangan'),(5,'Logistik'),(6,'Perpustakaan');

UNLOCK TABLES;

/*Table structure for table `tbl_butirstudy` */

DROP TABLE IF EXISTS `tbl_butirstudy`;

CREATE TABLE `tbl_butirstudy` (
  `butir_id` int(4) DEFAULT NULL,
  `study_id` int(4) DEFAULT NULL,
  KEY `FK_tbl_butirstudy_butir` (`butir_id`),
  KEY `FK_tbl_butirstudy_study` (`study_id`),
  CONSTRAINT `FK_tbl_butirstudy_study` FOREIGN KEY (`study_id`) REFERENCES `mst_study` (`study_id`),
  CONSTRAINT `FK_tbl_butirstudy_butir` FOREIGN KEY (`butir_id`) REFERENCES `mst_butir` (`butir_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_butirstudy` */

LOCK TABLES `tbl_butirstudy` WRITE;

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
  CONSTRAINT `FK_tbl_historystudy_study` FOREIGN KEY (`study_id`) REFERENCES `mst_study` (`study_id`),
  CONSTRAINT `FK_tbl_historystudy_lecturer` FOREIGN KEY (`lecturer_id`) REFERENCES `mst_lecturer` (`lecturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_historystudy` */

LOCK TABLES `tbl_historystudy` WRITE;

UNLOCK TABLES;

/*Table structure for table `tbl_instrumen` */

DROP TABLE IF EXISTS `tbl_instrumen`;

CREATE TABLE `tbl_instrumen` (
  `instrumen_id` int(4) NOT NULL AUTO_INCREMENT,
  `insrumen_name` varchar(500) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`instrumen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_instrumen` */

LOCK TABLES `tbl_instrumen` WRITE;

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
  PRIMARY KEY (`user_id`),
  KEY `FK_user` (`role_id`),
  CONSTRAINT `FK_user` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - clearance
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`clearance` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `clearance`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(75) NOT NULL,
  `admin_password` varchar(75) NOT NULL,
  `isloggedin` varchar(22) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_username`,`admin_password`,`isloggedin`) values 
(1,'admin','admin','true');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(225) NOT NULL,
  `course_status` varchar(75) NOT NULL,
  `course_description` varchar(1000) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `course` */

insert  into `course`(`course_id`,`course_name`,`course_status`,`course_description`) values 
(1,'Bachelor of Science in Information Technology','Inactive','This is test.');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(75) NOT NULL,
  `department_email` varchar(75) NOT NULL,
  `department_phone_number` varchar(75) NOT NULL,
  `department_description` varchar(1000) NOT NULL,
  `department_status` varchar(75) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `department` */

insert  into `department`(`department_id`,`department_name`,`department_email`,`department_phone_number`,`department_description`,`department_status`) values 
(1,'School of Information and Technology og Gwapo','sict@gmail.com','09150468327','School of information and communication technology is so nice and awesome.','Active'),
(3,'School Arts and Sciences','sas@gmail.com','091324213123','This is test','Active');

/*Table structure for table `office` */

DROP TABLE IF EXISTS `office`;

CREATE TABLE `office` (
  `office_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(75) NOT NULL,
  `office_email` varchar(75) NOT NULL,
  `office_phone_number` varchar(75) NOT NULL,
  `office_description` varchar(1000) NOT NULL,
  `office_status` varchar(75) NOT NULL,
  PRIMARY KEY (`office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `office` */

insert  into `office`(`office_id`,`office_name`,`office_email`,`office_phone_number`,`office_description`,`office_status`) values 
(1,'Registrar','registrar@gmail.com','0923242131','test is test','Active'),
(2,'Accountingss','accounting@gmail.com','09232414221','Accounting office is wonderful office in NMSCT.','Inactive'),
(3,'Cashier','cashier@gmail.com','0923232711','Accept Payment..','Active'),
(4,'Office of Student Affairs','office@gmail.com','0923241234','Office of the student affairs','Active'),
(5,'OSA','osa@gmail.com','09098976546','ambot','Active');

/*Table structure for table `office_account` */

DROP TABLE IF EXISTS `office_account`;

CREATE TABLE `office_account` (
  `office_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_account_username` varchar(75) NOT NULL,
  `office_account_password` varchar(75) NOT NULL,
  `office_account_status` varchar(75) NOT NULL,
  `office_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`office_account_id`),
  KEY `office_id` (`office_id`),
  CONSTRAINT `office_account_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `office_account` */

insert  into `office_account`(`office_account_id`,`office_account_username`,`office_account_password`,`office_account_status`,`office_id`) values 
(1,'registrar','admin','Active',1),
(2,'registrar2','admin','',1),
(3,'cashier','123','Active',NULL);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` varchar(75) NOT NULL,
  `student_first_name` varchar(75) NOT NULL,
  `student_last_name` varchar(75) NOT NULL,
  `student_year` varchar(75) NOT NULL,
  `student_course` varchar(75) NOT NULL,
  `student_username` varchar(75) NOT NULL,
  `student_password` varchar(75) NOT NULL,
  `student_profile` varchar(255) NOT NULL,
  `student_status` varchar(75) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

insert  into `student`(`student_id`,`student_first_name`,`student_last_name`,`student_year`,`student_course`,`student_username`,`student_password`,`student_profile`,`student_status`) values 
('2019-20089','Afril John','Songahid','4th-Year','BS-IT','afril','123','',''),
('2019-2043','Al Cedric','Gay','4th-Year','BS-HM','john.hatdog','12312','','Active'),
('2019-70227','Kristian','Tare','4th-Year','BS-IT','ktare23','buggy','','Active'),
('2019-8217','Jenerose','Siglos','4th Year','BS-IT','jenorose23','123','',''),
('2023-2413','John','Doe','5th Year','BS-iT','jon24','23232','',''),
('2023-2414','John','Doe','6th Year','BS-iT','jon25','23232','',''),
('2023-2415','John','Doe','7th Year','BS-iT','jon26','23232','',''),
('2023-2416','John','Doe','8th Year','BS-iT','jon27','23232','',''),
('2023-2417','John','Doe','9th Year','BS-iT','jon28','23232','',''),
('2023-2418','John','Doe','10th Year','BS-iT','jon29','23232','',''),
('2023-2419','John','Doe','11th Year','BS-iT','jon30','23232','',''),
('2023-2420','John','Doe','12th Year','BS-iT','jon31','23232','',''),
('2023-2421','John','Doe','13th Year','BS-iT','jon32','23232','',''),
('2023-2422','John','Doe','14th Year','BS-iT','jon33','23232','',''),
('2023-2423','John','Doe','15th Year','BS-iT','jon34','23232','',''),
('2023-2424','John','Doe','16th Year','BS-iT','jon35','23232','',''),
('2023-2425','John','Doe','17th Year','BS-iT','jon36','23232','',''),
('2023-2426','John','Doe','18th Year','BS-iT','jon37','23232','',''),
('2023-2428','John','Doe','20th Year','BS-iT','jon39','23232','',''),
('2023-2429','John','Doe','21st Year','BS-iT','jon40','23232','',''),
('2023-2430','John','Doe','22nd Year','BS-iT','jon41','23232','',''),
('2023-2431','John','Doe','23rd Year','BS-iT','jon42','23232','',''),
('2023-2432','John','Doe','24th Year','BS-iT','jon43','23232','',''),
('2023-2433','John','Doe','25th Year','BS-iT','jon44','23232','',''),
('2023-2434','John','Doe','26th Year','BS-iT','jon45','23232','',''),
('2023-2435','John','Doe','27th Year','BS-iT','jon46','23232','',''),
('2023-2436','John','Doe','28th Year','BS-iT','jon47','23232','',''),
('﻿2020-234','Phoebe','Ladua','3rd Year','BS-Biology','phobe23','maldita232','',''),
('﻿2023-2412','John','Doe','4th Year','BS-iT','jon23','23232','',''),
('﻿2023-2427','John','Doe','19th Year','BS-iT','jon38','23232','',''),
('﻿2023-9464','Jesha','Pondoc','3rd Year','BS-Biology','jeshang43','babykosiengr.','','');

/*Table structure for table `offices` */

DROP TABLE IF EXISTS `offices`;

/*!50001 DROP VIEW IF EXISTS `offices` */;
/*!50001 DROP TABLE IF EXISTS `offices` */;

/*!50001 CREATE TABLE  `offices`(
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `office_email` varchar(75) ,
 `office_phone_number` varchar(75) ,
 `office_description` varchar(1000) ,
 `office_status` varchar(75) ,
 `office_account_id` int(11) ,
 `office_account_username` varchar(75) ,
 `office_account_password` varchar(75) ,
 `office_account_status` varchar(75) 
)*/;

/*View structure for view offices */

/*!50001 DROP TABLE IF EXISTS `offices` */;
/*!50001 DROP VIEW IF EXISTS `offices` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `offices` AS (select `office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`office`.`office_email` AS `office_email`,`office`.`office_phone_number` AS `office_phone_number`,`office`.`office_description` AS `office_description`,`office`.`office_status` AS `office_status`,`office_account`.`office_account_id` AS `office_account_id`,`office_account`.`office_account_username` AS `office_account_username`,`office_account`.`office_account_password` AS `office_account_password`,`office_account`.`office_account_status` AS `office_account_status` from (`office` join `office_account` on(`office`.`office_id` = `office_account`.`office_id`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

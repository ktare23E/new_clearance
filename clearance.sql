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
  `admin_first_name` varchar(75) NOT NULL,
  `admin_last_name` varchar(75) NOT NULL,
  `admin_username` varchar(75) NOT NULL,
  `admin_password` varchar(75) NOT NULL,
  `isloggedin` varchar(22) NOT NULL,
  `user_type` varchar(75) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp(),
  `office_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_first_name`,`admin_last_name`,`admin_username`,`admin_password`,`isloggedin`,`user_type`,`date_registered`,`office_id`) values 
(1,'kristian','Tare','admin','admin','true','registered_user','2022-11-18 08:48:09',5),
(2,'admin2','admin2','admin2','admin2','','admin','2022-11-18 09:02:34',2),
(3,'Phoebe','Ladua','phoebe23','123','','','2022-11-19 18:35:54',3);

/*Table structure for table `clearance_type` */

DROP TABLE IF EXISTS `clearance_type`;

CREATE TABLE `clearance_type` (
  `clearance_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `clearance_type_name` varchar(75) NOT NULL,
  `clearance_type_description` varchar(1000) NOT NULL,
  PRIMARY KEY (`clearance_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance_type` */

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(225) NOT NULL,
  `course_status` varchar(75) NOT NULL,
  `course_description` varchar(1000) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `course` */

insert  into `course`(`course_id`,`course_name`,`course_status`,`course_description`,`department_id`) values 
(2,'Bachelor of Science in Information Technology','active','This is test',3),
(3,'AB PolScie','active','Test',1),
(4,'Bachelor of Science in Information System','Active','',1),
(5,'Bachelor of Science in Biology','Active','This is the course of biology.',3);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `department` */

insert  into `department`(`department_id`,`department_name`,`department_email`,`department_phone_number`,`department_description`,`department_status`) values 
(1,'School of Information and Technology','sict@gmail.com','09150468327','School of information and communication technology is so nice and awesome.','Active'),
(3,'School Arts and Sciences','sas@gmail.com','091324213123','This is test','Active'),
(4,'School of Business Administration','sbam@gmail.com','0924232113123','The School of Businesses ','active');

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
(2,'Accounting','accounting@gmail.com','09232414221','Accounting office is wonderful office in NMSCT.','Inactive'),
(3,'Cashier','cashier@gmail.com','0923232711','Accept Payment..','Active'),
(4,'Office of Student Affairs','office@gmail.com','0923241234','Office of the student affairs','Active'),
(5,'System Administrator','admin@gmail.com','091234323','This is the super admin of the system.','Active');

/*Table structure for table `office_account waly apil` */

DROP TABLE IF EXISTS `office_account waly apil`;

CREATE TABLE `office_account waly apil` (
  `office_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_account_username` varchar(75) NOT NULL,
  `office_account_password` varchar(75) NOT NULL,
  `office_account_status` varchar(75) NOT NULL,
  `office_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`office_account_id`),
  KEY `office_id` (`office_id`),
  CONSTRAINT `office_account waly apil_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `office_account waly apil` */

insert  into `office_account waly apil`(`office_account_id`,`office_account_username`,`office_account_password`,`office_account_status`,`office_id`) values 
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
  `course_id` int(11) NOT NULL,
  `student_gender` varchar(75) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_username` varchar(75) NOT NULL,
  `student_password` varchar(75) NOT NULL,
  `student_profile` varchar(255) NOT NULL,
  `student_status` varchar(75) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

insert  into `student`(`student_id`,`student_first_name`,`student_last_name`,`student_year`,`course_id`,`student_gender`,`student_email`,`student_username`,`student_password`,`student_profile`,`student_status`) values 
('2019-70227','Kristian','Tare','4th-Year',5,'Female','tare.kristian@gmail.com','2019-70227','123','','Active'),
('2020-2342','Phoebe','Ladua','3rd-Year',5,'Female','phoebe@gmail.com','2020-2342','123','','Active');

/*Table structure for table `sy_sem` */

DROP TABLE IF EXISTS `sy_sem`;

CREATE TABLE `sy_sem` (
  `sy_sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_year` varchar(75) NOT NULL,
  `semester` varchar(75) NOT NULL,
  `status` varchar(75) NOT NULL,
  PRIMARY KEY (`sy_sem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sy_sem` */

insert  into `sy_sem`(`sy_sem_id`,`school_year`,`semester`,`status`) values 
(1,'2022-2023','1st Semester','Active'),
(2,'2022-2023','2nd Semester','Inactive');

/*Table structure for table `admin_account` */

DROP TABLE IF EXISTS `admin_account`;

/*!50001 DROP VIEW IF EXISTS `admin_account` */;
/*!50001 DROP TABLE IF EXISTS `admin_account` */;

/*!50001 CREATE TABLE  `admin_account`(
 `admin_id` int(11) ,
 `admin_first_name` varchar(75) ,
 `admin_last_name` varchar(75) ,
 `admin_username` varchar(75) ,
 `admin_password` varchar(75) ,
 `date_registered` timestamp ,
 `user_type` varchar(75) ,
 `office_name` varchar(75) 
)*/;

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

/*!50001 DROP VIEW IF EXISTS `courses` */;
/*!50001 DROP TABLE IF EXISTS `courses` */;

/*!50001 CREATE TABLE  `courses`(
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `course_status` varchar(75) ,
 `course_description` varchar(1000) ,
 `department_name` varchar(75) 
)*/;

/*Table structure for table `student_details` */

DROP TABLE IF EXISTS `student_details`;

/*!50001 DROP VIEW IF EXISTS `student_details` */;
/*!50001 DROP TABLE IF EXISTS `student_details` */;

/*!50001 CREATE TABLE  `student_details`(
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `course_name` varchar(225) ,
 `student_email` varchar(255) ,
 `student_gender` varchar(75) ,
 `student_status` varchar(75) ,
 `student_username` varchar(75) ,
 `student_password` varchar(75) ,
 `student_profile` varchar(255) 
)*/;

/*View structure for view admin_account */

/*!50001 DROP TABLE IF EXISTS `admin_account` */;
/*!50001 DROP VIEW IF EXISTS `admin_account` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `admin_account` AS select `admin`.`admin_id` AS `admin_id`,`admin`.`admin_first_name` AS `admin_first_name`,`admin`.`admin_last_name` AS `admin_last_name`,`admin`.`admin_username` AS `admin_username`,`admin`.`admin_password` AS `admin_password`,`admin`.`date_registered` AS `date_registered`,`admin`.`user_type` AS `user_type`,`office`.`office_name` AS `office_name` from (`admin` join `office`) where `admin`.`office_id` = `office`.`office_id` */;

/*View structure for view courses */

/*!50001 DROP TABLE IF EXISTS `courses` */;
/*!50001 DROP VIEW IF EXISTS `courses` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `courses` AS select `course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`course`.`course_status` AS `course_status`,`course`.`course_description` AS `course_description`,`department`.`department_name` AS `department_name` from (`course` join `department`) where `course`.`department_id` = `department`.`department_id` */;

/*View structure for view student_details */

/*!50001 DROP TABLE IF EXISTS `student_details` */;
/*!50001 DROP VIEW IF EXISTS `student_details` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_details` AS select `student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_name` AS `course_name`,`student`.`student_email` AS `student_email`,`student`.`student_gender` AS `student_gender`,`student`.`student_status` AS `student_status`,`student`.`student_username` AS `student_username`,`student`.`student_password` AS `student_password`,`student`.`student_profile` AS `student_profile` from (`student` join `course`) where `student`.`course_id` = `course`.`course_id` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

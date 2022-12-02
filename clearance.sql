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
  `admin_name` varchar(75) NOT NULL,
  `admin_username` varchar(75) NOT NULL,
  `admin_password` varchar(75) NOT NULL,
  `isloggedin` varchar(22) NOT NULL,
  `user_type` varchar(75) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp(),
  `office_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_name`,`admin_username`,`admin_password`,`isloggedin`,`user_type`,`date_registered`,`office_id`) values 
(1,'Kristian Tare','admin','admin','true','office_admin','2022-11-18 08:48:09',5),
(2,'admin2','admin2','admin2','','admin','2022-11-18 09:02:34',2),
(3,'Phoebe Ladua','phoebe23','123','','','2022-11-19 18:35:54',3),
(5,'Al Cedric','dario123','123','','office_admin','2022-11-28 15:22:48',1),
(6,'Jesha Pondoc','jesha','123','','','2022-11-30 20:33:31',4);

/*Table structure for table `clearance` */

DROP TABLE IF EXISTS `clearance`;

CREATE TABLE `clearance` (
  `clearance_id` int(11) NOT NULL AUTO_INCREMENT,
  `clearance_status` varchar(75) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_cleared` date NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  `student_id` varchar(75) NOT NULL,
  `sy_sem_id` int(11) NOT NULL,
  `clearance_type_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`clearance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance` */

insert  into `clearance`(`clearance_id`,`clearance_status`,`date_created`,`date_cleared`,`is_locked`,`student_id`,`sy_sem_id`,`clearance_type_id`,`course_id`,`department_id`) values 
(17,'Approved','2022-11-28 15:03:04','2022-11-16',1,'2019-2023',1,1,2,1),
(19,'Pending','2022-11-28 16:14:26','2022-11-22',1,'2020-2324',1,2,5,3);

/*Table structure for table `clearance_details` */

DROP TABLE IF EXISTS `clearance_details`;

CREATE TABLE `clearance_details` (
  `clearance_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `clearance_id` int(11) NOT NULL,
  `signing_office_id` int(11) NOT NULL,
  `date_cleared` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(75) NOT NULL,
  `sy_sem_id` int(11) NOT NULL,
  PRIMARY KEY (`clearance_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance_details` */

insert  into `clearance_details`(`clearance_details_id`,`clearance_id`,`signing_office_id`,`date_cleared`,`status`,`sy_sem_id`) values 
(9,17,4,'2022-12-01 17:10:07','Not Cleared',1),
(10,19,5,'2022-12-01 17:46:32','Cleared',3);

/*Table structure for table `clearance_type` */

DROP TABLE IF EXISTS `clearance_type`;

CREATE TABLE `clearance_type` (
  `clearance_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `clearance_type_name` varchar(75) NOT NULL,
  `clearance_type_description` varchar(1000) NOT NULL,
  PRIMARY KEY (`clearance_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance_type` */

insert  into `clearance_type`(`clearance_type_id`,`clearance_type_name`,`clearance_type_description`) values 
(1,'Graduating ','This is the clearance for all graduating students of NMSCST students and all.'),
(2,'Transferring','This is the clearance type for all transferrring students who wants to transfer for another school.'),
(4,'Continuing','This is the clearance type for all continuing students of NMSCT.');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(225) NOT NULL,
  `course_status` varchar(75) NOT NULL,
  `course_description` varchar(1000) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `course` */

insert  into `course`(`course_id`,`course_name`,`course_status`,`course_description`,`department_id`) values 
(2,'Bachelor of Science in Information Technology','Inactive','This is test',3),
(3,'AB PolScie','Inactive','Test',1),
(4,'Bachelor of Science in Information System','Active','',1),
(5,'Bachelor of Science in Biology','Active','This is the course of biology.',3),
(6,'Bachelor of Science in Education','Active','',5);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `department` */

insert  into `department`(`department_id`,`department_name`,`department_email`,`department_phone_number`,`department_description`,`department_status`) values 
(1,'School of Information and Technology','sict@gmail.com','09150468327','School of information and communication technology is so nice and awesome.','Inactive'),
(3,'School Arts and Sciences','sas@gmail.com','091324213123','This is test','Active'),
(4,'School of Business Administration','sbam@gmail.com','0924232113123','The School of Businesses ','active'),
(5,'School of Education','educ@gmail.com','0913242132','','Active'),
(6,'School of Technology','technology@gmail.com','092324212313','','Active');

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
(3,'Cashier','cashier@gmail.com','0923232711','Accept Payment..','Inactive'),
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

/*Table structure for table `signing_office` */

DROP TABLE IF EXISTS `signing_office`;

CREATE TABLE `signing_office` (
  `signing_office_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `sy_sem_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `clearance_type_id` int(11) NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  `status` varchar(75) NOT NULL,
  `date_cleared` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`signing_office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `signing_office` */

insert  into `signing_office`(`signing_office_id`,`office_id`,`sy_sem_id`,`admin_id`,`clearance_type_id`,`is_locked`,`status`,`date_cleared`) values 
(4,1,1,6,1,0,'','2022-11-30 20:43:06'),
(5,3,1,5,2,0,'','2022-11-30 20:44:58'),
(13,2,1,1,4,0,'','2022-12-01 17:24:36'),
(14,3,0,3,4,0,'','2022-12-01 17:50:42'),
(15,4,3,3,4,0,'','2022-12-01 17:51:42');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` varchar(75) NOT NULL,
  `student_first_name` varchar(75) NOT NULL,
  `student_last_name` varchar(75) NOT NULL,
  `student_year` varchar(75) NOT NULL,
  `course_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `student_gender` varchar(75) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_username` varchar(75) NOT NULL,
  `student_password` varchar(75) NOT NULL,
  `student_status` varchar(75) NOT NULL,
  `student_profile` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

insert  into `student`(`student_id`,`student_first_name`,`student_last_name`,`student_year`,`course_id`,`department_id`,`student_gender`,`student_email`,`student_username`,`student_password`,`student_status`,`student_profile`) values 
('2019-2023','Al Cedric','Dario','4th Year',6,5,'Male','alcedric@gmail.com','2019-2023','123','Active',''),
('2019-2054','Dave Neil','Casile','3rd Year',6,5,'Male','dave@gmail.com','2019-2054','123','Active',''),
('2020-2324','Phoebe','Ladua','3rd Year',6,5,'Female','alcedric@gmail.com','2020-2324','123','Active',''),
('﻿2019-70227','Kristian Kharl','Tare','2nd Year',6,5,'Male','tare.kristian@gmail.com','2019-70227','123','Active','');

/*Table structure for table `sy_sem` */

DROP TABLE IF EXISTS `sy_sem`;

CREATE TABLE `sy_sem` (
  `sy_sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_year_and_sem` varchar(75) NOT NULL,
  `status` varchar(75) NOT NULL,
  PRIMARY KEY (`sy_sem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sy_sem` */

insert  into `sy_sem`(`sy_sem_id`,`school_year_and_sem`,`status`) values 
(1,'2022-2023 1st Semester','Active'),
(3,'2022-2023 2nd Semester','Inactive'),
(4,'2024-2025 1st Sem','Inactive');

/*Table structure for table `admin_account` */

DROP TABLE IF EXISTS `admin_account`;

/*!50001 DROP VIEW IF EXISTS `admin_account` */;
/*!50001 DROP TABLE IF EXISTS `admin_account` */;

/*!50001 CREATE TABLE  `admin_account`(
 `admin_id` int(11) ,
 `admin_name` varchar(75) ,
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

/*Table structure for table `new_signing_info` */

DROP TABLE IF EXISTS `new_signing_info`;

/*!50001 DROP VIEW IF EXISTS `new_signing_info` */;
/*!50001 DROP TABLE IF EXISTS `new_signing_info` */;

/*!50001 CREATE TABLE  `new_signing_info`(
 `clearance_details_id` int(11) ,
 `clearance_id` int(11) ,
 `signing_office_id` int(11) ,
 `date_cleared` datetime ,
 `sy_sem_id` int(11) ,
 `status` varchar(75) ,
 `office_id` int(11) ,
 `office_name` varchar(75) 
)*/;

/*Table structure for table `new_signing_offices` */

DROP TABLE IF EXISTS `new_signing_offices`;

/*!50001 DROP VIEW IF EXISTS `new_signing_offices` */;
/*!50001 DROP TABLE IF EXISTS `new_signing_offices` */;

/*!50001 CREATE TABLE  `new_signing_offices`(
 `signing_office_id` int(11) ,
 `office_name` varchar(75) ,
 `school_year_and_sem` varchar(75) ,
 `admin_name` varchar(75) ,
 `clearance_type_name` varchar(75) 
)*/;

/*Table structure for table `new_student` */

DROP TABLE IF EXISTS `new_student`;

/*!50001 DROP VIEW IF EXISTS `new_student` */;
/*!50001 DROP TABLE IF EXISTS `new_student` */;

/*!50001 CREATE TABLE  `new_student`(
 `course_id` int(11) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `course_name` varchar(225) ,
 `student_status` varchar(75) ,
 `department_name` varchar(75) ,
 `student_email` varchar(255) ,
 `student_username` varchar(75) ,
 `student_password` varchar(75) 
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
 `department_name` varchar(75) ,
 `student_email` varchar(255) ,
 `student_gender` varchar(75) ,
 `student_status` varchar(75) ,
 `student_username` varchar(75) ,
 `student_password` varchar(75) ,
 `student_profile` varchar(255) 
)*/;

/*Table structure for table `view_clearance` */

DROP TABLE IF EXISTS `view_clearance`;

/*!50001 DROP VIEW IF EXISTS `view_clearance` */;
/*!50001 DROP TABLE IF EXISTS `view_clearance` */;

/*!50001 CREATE TABLE  `view_clearance`(
 `clearance_id` int(11) ,
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `course_name` varchar(225) ,
 `department_name` varchar(75) ,
 `school_year_and_sem` varchar(75) ,
 `clearance_type_name` varchar(75) ,
 `clearance_status` varchar(75) ,
 `date_created` datetime ,
 `date_cleared` date 
)*/;

/*View structure for view admin_account */

/*!50001 DROP TABLE IF EXISTS `admin_account` */;
/*!50001 DROP VIEW IF EXISTS `admin_account` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `admin_account` AS select `admin`.`admin_id` AS `admin_id`,`admin`.`admin_name` AS `admin_name`,`admin`.`admin_username` AS `admin_username`,`admin`.`admin_password` AS `admin_password`,`admin`.`date_registered` AS `date_registered`,`admin`.`user_type` AS `user_type`,`office`.`office_name` AS `office_name` from (`admin` join `office`) where `admin`.`office_id` = `office`.`office_id` */;

/*View structure for view courses */

/*!50001 DROP TABLE IF EXISTS `courses` */;
/*!50001 DROP VIEW IF EXISTS `courses` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `courses` AS select `course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`course`.`course_status` AS `course_status`,`course`.`course_description` AS `course_description`,`department`.`department_name` AS `department_name` from (`course` join `department`) where `course`.`department_id` = `department`.`department_id` */;

/*View structure for view new_signing_info */

/*!50001 DROP TABLE IF EXISTS `new_signing_info` */;
/*!50001 DROP VIEW IF EXISTS `new_signing_info` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_signing_info` AS select `clearance_details`.`clearance_details_id` AS `clearance_details_id`,`clearance_details`.`clearance_id` AS `clearance_id`,`clearance_details`.`signing_office_id` AS `signing_office_id`,`clearance_details`.`date_cleared` AS `date_cleared`,`clearance_details`.`sy_sem_id` AS `sy_sem_id`,`clearance_details`.`status` AS `status`,`signing_office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name` from ((`clearance_details` join `signing_office` on(`clearance_details`.`signing_office_id` = `signing_office`.`signing_office_id`)) join `office` on(`signing_office`.`office_id` = `office`.`office_id`)) */;

/*View structure for view new_signing_offices */

/*!50001 DROP TABLE IF EXISTS `new_signing_offices` */;
/*!50001 DROP VIEW IF EXISTS `new_signing_offices` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_signing_offices` AS select `signing_office`.`signing_office_id` AS `signing_office_id`,`office`.`office_name` AS `office_name`,`sy_sem`.`school_year_and_sem` AS `school_year_and_sem`,`admin`.`admin_name` AS `admin_name`,`clearance_type`.`clearance_type_name` AS `clearance_type_name` from ((((`signing_office` join `office` on(`signing_office`.`office_id` = `office`.`office_id`)) join `sy_sem` on(`signing_office`.`sy_sem_id` = `sy_sem`.`sy_sem_id`)) join `admin` on(`signing_office`.`admin_id` = `admin`.`admin_id`)) join `clearance_type` on(`signing_office`.`clearance_type_id` = `clearance_type`.`clearance_type_id`)) */;

/*View structure for view new_student */

/*!50001 DROP TABLE IF EXISTS `new_student` */;
/*!50001 DROP VIEW IF EXISTS `new_student` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_student` AS select `student`.`course_id` AS `course_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_name` AS `course_name`,`student`.`student_status` AS `student_status`,`department`.`department_name` AS `department_name`,`student`.`student_email` AS `student_email`,`student`.`student_username` AS `student_username`,`student`.`student_password` AS `student_password` from ((`student` join `course` on(`student`.`course_id` = `course`.`course_id`)) join `department` on(`student`.`department_id` = `department`.`department_id`)) */;

/*View structure for view student_details */

/*!50001 DROP TABLE IF EXISTS `student_details` */;
/*!50001 DROP VIEW IF EXISTS `student_details` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_details` AS select `student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_name` AS `course_name`,`department`.`department_name` AS `department_name`,`student`.`student_email` AS `student_email`,`student`.`student_gender` AS `student_gender`,`student`.`student_status` AS `student_status`,`student`.`student_username` AS `student_username`,`student`.`student_password` AS `student_password`,`student`.`student_profile` AS `student_profile` from ((`student` join `course`) join `department`) where `student`.`course_id` = `course`.`course_id` and `student`.`department_id` = `department`.`department_id` */;

/*View structure for view view_clearance */

/*!50001 DROP TABLE IF EXISTS `view_clearance` */;
/*!50001 DROP VIEW IF EXISTS `view_clearance` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_clearance` AS select `clearance`.`clearance_id` AS `clearance_id`,`student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_name` AS `course_name`,`department`.`department_name` AS `department_name`,`sy_sem`.`school_year_and_sem` AS `school_year_and_sem`,`clearance_type`.`clearance_type_name` AS `clearance_type_name`,`clearance`.`clearance_status` AS `clearance_status`,`clearance`.`date_created` AS `date_created`,`clearance`.`date_cleared` AS `date_cleared` from (((((`clearance` join `student`) join `sy_sem`) join `clearance_type`) join `course`) join `department`) where `clearance`.`student_id` = `student`.`student_id` and `clearance`.`sy_sem_id` = `sy_sem`.`sy_sem_id` and `clearance`.`course_id` = `course`.`course_id` and `clearance`.`department_id` = `department`.`department_id` and `clearance`.`clearance_type_id` = `clearance_type`.`clearance_type_id` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

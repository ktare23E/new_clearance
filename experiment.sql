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
  `office_id` int(11) NOT NULL,
  `department_id` int(1) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_name`,`admin_username`,`admin_password`,`isloggedin`,`user_type`,`date_registered`,`office_id`,`department_id`) values 
(22,'Admin','admin','admin54E','','Admin','2023-04-19 09:23:12',24,0),
(23,'Alfie Cere','alfie','123','','Office Admin','2023-04-19 13:27:14',25,0),
(24,'Tres','tres','123','','Office Admin','2023-04-19 13:50:56',31,0),
(25,'Jennifer Maglinte','jennifer','123','','Office Admin','2023-04-19 15:00:02',32,0),
(26,'sbam','sbam','123','','Office Admin','2023-04-20 05:53:09',26,0),
(27,'Mary Jane Espinosa','espinosa','123','','Office Admin','2023-04-20 10:15:38',33,0),
(28,'Rea Espinosa','rea','123','','Office Admin','2023-04-20 10:17:08',30,0);

/*Table structure for table `clearance` */

DROP TABLE IF EXISTS `clearance`;

CREATE TABLE `clearance` (
  `clearance_id` int(11) NOT NULL AUTO_INCREMENT,
  `clearance_status` varchar(11) NOT NULL,
  `student_id` varchar(75) NOT NULL,
  `sy_sem_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `clearance_type_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `date_created` varchar(75) NOT NULL,
  `date_cleared` date NOT NULL,
  `is_locked` varchar(75) NOT NULL,
  `clearance_progress_id` int(11) NOT NULL,
  PRIMARY KEY (`clearance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance` */

insert  into `clearance`(`clearance_id`,`clearance_status`,`student_id`,`sy_sem_id`,`sem_id`,`clearance_type_id`,`course_id`,`office_id`,`date_created`,`date_cleared`,`is_locked`,`clearance_progress_id`) values 
(294,'1','2019-2023',0,0,6,26,27,'2023-05-11','0000-00-00','No',7),
(295,'1','2019-70227',0,0,6,23,25,'2023-05-11','0000-00-00','No',7),
(296,'1','2019-800306',0,0,6,23,25,'2023-05-11','0000-00-00','No',7),
(297,'1','2019-80162',0,0,6,23,25,'2023-05-11','0000-00-00','No',7),
(298,'1','2020-8238',0,0,6,23,25,'2023-05-11','0000-00-00','No',7),
(299,'1','2021-134',0,0,6,24,25,'2023-05-11','0000-00-00','No',7),
(300,'1','2022-2788',0,0,6,24,25,'2023-05-11','0000-00-00','No',7),
(301,'0','2019-2023',0,0,6,26,27,'2023-05-12','0000-00-00','No',8),
(302,'0','2019-70227',0,0,6,23,25,'2023-05-12','0000-00-00','No',8),
(303,'0','2019-800306',0,0,6,23,25,'2023-05-12','0000-00-00','No',8),
(304,'0','2019-80162',0,0,6,23,25,'2023-05-12','0000-00-00','No',8),
(305,'0','2020-8238',0,0,6,23,25,'2023-05-12','0000-00-00','No',8),
(306,'0','2021-134',0,0,6,24,25,'2023-05-12','0000-00-00','No',8),
(307,'0','2022-2788',0,0,6,24,25,'2023-05-12','0000-00-00','No',8);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance_details` */

insert  into `clearance_details`(`clearance_details_id`,`clearance_id`,`signing_office_id`,`date_cleared`,`status`,`sy_sem_id`) values 
(11,20,36,'2022-12-09 06:02:54','Cleared',3);

/*Table structure for table `clearance_progress` */

DROP TABLE IF EXISTS `clearance_progress`;

CREATE TABLE `clearance_progress` (
  `clearance_progress_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem_id` int(11) NOT NULL,
  `sy_sem_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`clearance_progress_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance_progress` */

insert  into `clearance_progress`(`clearance_progress_id`,`sem_id`,`sy_sem_id`,`status`) values 
(6,8,21,'Inactive'),
(7,7,21,'Inactive'),
(8,11,21,'Inactive');

/*Table structure for table `clearance_type` */

DROP TABLE IF EXISTS `clearance_type`;

CREATE TABLE `clearance_type` (
  `clearance_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `clearance_type_name` varchar(75) NOT NULL,
  `clearance_type_description` varchar(1000) NOT NULL,
  PRIMARY KEY (`clearance_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clearance_type` */

insert  into `clearance_type`(`clearance_type_id`,`clearance_type_name`,`clearance_type_description`) values 
(6,'Continuing','For Exams Type'),
(7,'Transferring','For Transferring Students\r\n'),
(8,'Graduating','For Graduating Students');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(225) NOT NULL,
  `course_status` varchar(75) NOT NULL,
  `course_description` varchar(1000) NOT NULL,
  `office_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `course` */

insert  into `course`(`course_id`,`course_name`,`course_status`,`course_description`,`office_id`) values 
(23,'Bachelor of Science in Information Technology','Active','This is BS-iT',25),
(24,'Bachelor of Science in Information System','Active','BSIS Course',25),
(25,'Bachelor of Science in Agricultural Engineering','Active','This is a course for agri.',30),
(26,'Bachelor of Science in Biology','Active','This is the course of biology.',27);

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
  `is_department` tinyint(1) NOT NULL,
  PRIMARY KEY (`office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

/*Data for the table `office` */

insert  into `office`(`office_id`,`office_name`,`office_email`,`office_phone_number`,`office_description`,`office_status`,`is_department`) values 
(24,'System Administrator','sysAd@mnmsc.edu.ph','09128937689','this is sys ad office','Active',0),
(25,'School of Information Communication and Technology','sict@gmail.com','0923232','This is the department of SICT.','Active',1),
(26,'School of Business Administration and Management','sbam@gmail.com','09232414221','SBAM Department','Active',1),
(27,'School of Arts and Sciences','sas@gmail.com','3213241212312','SAS Department','Active',1),
(28,'School of Engineering Technology','set@gmail.com','09123456789','SET Department','Active',1),
(29,'School of Teacher Ediucation','ste@gmail.com','09123456767','STE Department','Active',1),
(30,'School of Agriculture and Environmental Sciences','saes@gmail.com','09876897812','SAES Department','Active',1),
(31,'OSA','tare.kristian@gmail.com','091237623623','This is the office os OSA','Active',0),
(32,'Supreme Student Council Office','ssc@nmsc.edu.ph','0923727332','This is the office of SSC.','Active',0),
(33,'Library','tare.kristian@gmail.com','09823726623','This is library.','Active',0);

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
(3,'cashier','123','Active',NULL);

/*Table structure for table `requirement` */

DROP TABLE IF EXISTS `requirement`;

CREATE TABLE `requirement` (
  `requirement_id` int(11) NOT NULL AUTO_INCREMENT,
  `requirement_details` varchar(255) NOT NULL,
  `signing_office_id` int(11) NOT NULL,
  `sy_sem_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `student_id` varchar(75) NOT NULL,
  `clearance_type_id` int(11) NOT NULL,
  `is_complied` tinyint(1) NOT NULL,
  `date_cleared` date NOT NULL,
  `clearance_progress_id` int(11) NOT NULL,
  PRIMARY KEY (`requirement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1376 DEFAULT CHARSET=utf8mb4;

/*Data for the table `requirement` */

insert  into `requirement`(`requirement_id`,`requirement_details`,`signing_office_id`,`sy_sem_id`,`sem_id`,`student_id`,`clearance_type_id`,`is_complied`,`date_cleared`,`clearance_progress_id`) values 
(1369,'nice ka',116,0,0,'2020-8238',6,0,'0000-00-00',8),
(1370,'nice ka',116,0,0,'2021-134',6,0,'0000-00-00',8),
(1371,'nice ka',116,0,0,'2019-70227',6,0,'0000-00-00',8),
(1372,'nice ka',116,0,0,'2022-2788',6,0,'0000-00-00',8),
(1373,'nice ka',116,0,0,'2019-800306',6,0,'0000-00-00',8),
(1374,'nice ka',116,0,0,'2019-2023',6,0,'0000-00-00',8),
(1375,'nice ka',116,0,0,'2019-80162',6,0,'0000-00-00',8);

/*Table structure for table `sem` */

DROP TABLE IF EXISTS `sem`;

CREATE TABLE `sem` (
  `sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem_name` varchar(75) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sem` */

insert  into `sem`(`sem_id`,`sem_name`) values 
(7,'1st Semester'),
(8,'2nd Semester'),
(9,'Summer'),
(10,'Mid Semester'),
(11,'Midterm');

/*Table structure for table `signing_office` */

DROP TABLE IF EXISTS `signing_office`;

CREATE TABLE `signing_office` (
  `signing_office_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `sy_sem_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `clearance_type_id` int(11) NOT NULL,
  `is_locked` tinyint(1) NOT NULL,
  `status` varchar(75) NOT NULL,
  `date_cleared` datetime NOT NULL DEFAULT current_timestamp(),
  `sem_id` int(11) NOT NULL,
  `clearance_progress_id` int(11) NOT NULL,
  PRIMARY KEY (`signing_office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4;

/*Data for the table `signing_office` */

insert  into `signing_office`(`signing_office_id`,`office_id`,`sy_sem_id`,`admin_id`,`department_id`,`clearance_type_id`,`is_locked`,`status`,`date_cleared`,`sem_id`,`clearance_progress_id`) values 
(116,31,0,24,0,6,0,'','2023-05-04 17:57:55',0,8),
(117,25,0,23,0,6,0,'','2023-05-04 17:58:13',0,8);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` varchar(75) NOT NULL,
  `student_first_name` varchar(75) NOT NULL,
  `student_middle_name` varchar(75) NOT NULL,
  `student_last_name` varchar(75) NOT NULL,
  `student_year` varchar(75) NOT NULL,
  `course_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `student_gender` varchar(75) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_username` varchar(75) NOT NULL,
  `student_password` varchar(75) NOT NULL,
  `student_status` varchar(75) NOT NULL,
  `student_profile` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

insert  into `student`(`student_id`,`student_first_name`,`student_middle_name`,`student_last_name`,`student_year`,`course_id`,`office_id`,`student_gender`,`student_email`,`student_username`,`student_password`,`student_status`,`student_profile`) values 
('2019-2023','Phoebe','Alia','Ladua','3rd Year',26,27,'Female','tare.kristian@gmail.com','','123','Inactive','1683193815dabid.jpg'),
('2019-70227','Kristian','Will of D','Tare','2nd Year',23,25,'Male','tare.kristian@gmail.com','2019-70227','123','Inactive','645cd4afcab44.jpg'),
('2019-800306','Al Cedric','Black Beard','Dario','2nd Year',23,25,'Male','alcedric.dario@nmsc.edu.ph','2019-800306','123','Inactive','644b7eb25bb75.jpg'),
('2019-80162','Mc Roa Jun ','Nice','Alegrado','1st Year',23,25,'Male','tare.kristian@gmail.com','2019-80162','123','Inactive','1681881454student dashboard.png'),
('2020-8238','G-ar','','Delosa','2nd Year',23,25,'Male','jayrdels@nmsc.edu.ph','2020-8238','123','Inactive','1681955941baterna.jpg'),
('2021-134','Bill','','Samar','2nd Year',24,25,'Male','bill.samar@nmsc.edu.ph','','123','Inactive',''),
('2022-2788','Leslyn','','Reazol','2nd Year',24,25,'Female','leslyn.reazol@nmsc.edu.ph','','123','Inactive','');

/*Table structure for table `sy_sem` */

DROP TABLE IF EXISTS `sy_sem`;

CREATE TABLE `sy_sem` (
  `sy_sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_year_and_sem` varchar(75) NOT NULL,
  `status` varchar(75) NOT NULL,
  `sem_id` int(11) NOT NULL,
  PRIMARY KEY (`sy_sem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sy_sem` */

insert  into `sy_sem`(`sy_sem_id`,`school_year_and_sem`,`status`,`sem_id`) values 
(17,'2022-2023','',0),
(19,'2023-2024','',0),
(20,'2024-2025','',0),
(21,'2025-2026','',0);

/*Table structure for table `upload` */

DROP TABLE IF EXISTS `upload`;

CREATE TABLE `upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_uploaded` datetime NOT NULL DEFAULT current_timestamp(),
  `student_id` int(11) NOT NULL,
  `requirement_id` int(11) NOT NULL,
  PRIMARY KEY (`upload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `upload` */

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
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `is_department` tinyint(1) 
)*/;

/*Table structure for table `clearance_progress_view` */

DROP TABLE IF EXISTS `clearance_progress_view`;

/*!50001 DROP VIEW IF EXISTS `clearance_progress_view` */;
/*!50001 DROP TABLE IF EXISTS `clearance_progress_view` */;

/*!50001 CREATE TABLE  `clearance_progress_view`(
 `clearance_progress_id` int(11) ,
 `status` varchar(11) ,
 `sy_sem_id` int(11) ,
 `school_year_and_sem` varchar(75) ,
 `sem_id` int(11) ,
 `sem_name` varchar(75) 
)*/;

/*Table structure for table `course_view` */

DROP TABLE IF EXISTS `course_view`;

/*!50001 DROP VIEW IF EXISTS `course_view` */;
/*!50001 DROP TABLE IF EXISTS `course_view` */;

/*!50001 CREATE TABLE  `course_view`(
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `course_description` varchar(1000) ,
 `course_status` varchar(75) ,
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `is_department` tinyint(1) 
)*/;

/*Table structure for table `final_report` */

DROP TABLE IF EXISTS `final_report`;

/*!50001 DROP VIEW IF EXISTS `final_report` */;
/*!50001 DROP TABLE IF EXISTS `final_report` */;

/*!50001 CREATE TABLE  `final_report`(
 `clearance_id` int(11) ,
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `requirement_id` int(11) ,
 `requirement_details` varchar(255) ,
 `is_complied` tinyint(1) ,
 `date_cleared` date ,
 `clearance_progress_id` int(11) ,
 `clearance_type_id` int(11) 
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
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `office_email` varchar(75) ,
 `clearance_progress_id` int(11) ,
 `status` varchar(11) ,
 `sy_sem_id` int(11) ,
 `school_year_and_sem` varchar(75) ,
 `sem_id` int(11) ,
 `sem_name` varchar(75) ,
 `admin_id` int(11) ,
 `admin_name` varchar(75) ,
 `clearance_type_name` varchar(75) ,
 `clearance_type_id` int(11) 
)*/;

/*Table structure for table `new_student` */

DROP TABLE IF EXISTS `new_student`;

/*!50001 DROP VIEW IF EXISTS `new_student` */;
/*!50001 DROP TABLE IF EXISTS `new_student` */;

/*!50001 CREATE TABLE  `new_student`(
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `student_status` varchar(75) ,
 `office_name` varchar(75) ,
 `student_gender` varchar(75) ,
 `student_email` varchar(255) ,
 `student_username` varchar(75) ,
 `student_password` varchar(75) 
)*/;

/*Table structure for table `requirements_report` */

DROP TABLE IF EXISTS `requirements_report`;

/*!50001 DROP VIEW IF EXISTS `requirements_report` */;
/*!50001 DROP TABLE IF EXISTS `requirements_report` */;

/*!50001 CREATE TABLE  `requirements_report`(
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `requirement_id` int(11) ,
 `requirement_details` varchar(255) ,
 `is_complied` tinyint(1) ,
 `date_cleared` date ,
 `clearance_progress_id` int(11) ,
 `clearance_type_id` int(11) 
)*/;

/*Table structure for table `requirements_report_final` */

DROP TABLE IF EXISTS `requirements_report_final`;

/*!50001 DROP VIEW IF EXISTS `requirements_report_final` */;
/*!50001 DROP TABLE IF EXISTS `requirements_report_final` */;

/*!50001 CREATE TABLE  `requirements_report_final`(
 `clearance_id` int(11) ,
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `requirement_id` int(11) ,
 `requirement_details` varchar(255) ,
 `is_complied` tinyint(1) ,
 `date_cleared` date ,
 `clearance_progress_id` int(11) ,
 `clearance_type_id` int(11) 
)*/;

/*Table structure for table `requirement_cleared` */

DROP TABLE IF EXISTS `requirement_cleared`;

/*!50001 DROP VIEW IF EXISTS `requirement_cleared` */;
/*!50001 DROP TABLE IF EXISTS `requirement_cleared` */;

/*!50001 CREATE TABLE  `requirement_cleared`(
 `requirement_id` int(11) ,
 `requirement_details` varchar(255) ,
 `signing_office_id` int(11) ,
 `student_id` varchar(75) ,
 `clearance_type_id` int(11) ,
 `is_complied` tinyint(1) ,
 `date_cleared` date ,
 `clearance_progress_id` int(11) ,
 `NO_R` bigint(21) ,
 `NO_C` decimal(25,0) ,
 `is_cleared` int(1) 
)*/;

/*Table structure for table `requirement_view` */

DROP TABLE IF EXISTS `requirement_view`;

/*!50001 DROP VIEW IF EXISTS `requirement_view` */;
/*!50001 DROP TABLE IF EXISTS `requirement_view` */;

/*!50001 CREATE TABLE  `requirement_view`(
 `requirement_id` int(11) ,
 `requirement_details` varchar(255) ,
 `is_complied` tinyint(1) ,
 `date_cleared` date ,
 `signing_office_id` int(11) ,
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `clearance_progress_id` int(11) ,
 `status` varchar(11) ,
 `sy_sem_id` int(11) ,
 `school_year_and_sem` varchar(75) ,
 `sem_id` int(11) ,
 `sem_name` varchar(75) ,
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_email` varchar(255) ,
 `clearance_type_id` int(11) ,
 `clearance_type_name` varchar(75) 
)*/;

/*Table structure for table `school_year` */

DROP TABLE IF EXISTS `school_year`;

/*!50001 DROP VIEW IF EXISTS `school_year` */;
/*!50001 DROP TABLE IF EXISTS `school_year` */;

/*!50001 CREATE TABLE  `school_year`(
 `sy_sem_id` int(11) ,
 `school_year_and_sem` varchar(75) ,
 `sem_id` int(11) ,
 `status` varchar(75) ,
 `sem_name` varchar(75) 
)*/;

/*Table structure for table `student_details` */

DROP TABLE IF EXISTS `student_details`;

/*!50001 DROP VIEW IF EXISTS `student_details` */;
/*!50001 DROP TABLE IF EXISTS `student_details` */;

/*!50001 CREATE TABLE  `student_details`(
 `student_id` varchar(75) ,
 `student_first_name` varchar(75) ,
 `student_middle_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `student_year` varchar(75) ,
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `student_status` varchar(75) ,
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `is_departmnent` tinyint(1) ,
 `student_gender` varchar(75) ,
 `student_email` varchar(255) ,
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
 `student_middle_name` varchar(75) ,
 `student_last_name` varchar(75) ,
 `is_locked` varchar(75) ,
 `student_year` varchar(75) ,
 `student_email` varchar(255) ,
 `course_id` int(11) ,
 `course_name` varchar(225) ,
 `office_id` int(11) ,
 `office_name` varchar(75) ,
 `is_department` tinyint(1) ,
 `clearance_progress_id` int(11) ,
 `status` varchar(11) ,
 `sy_sem_id` int(11) ,
 `school_year_and_sem` varchar(75) ,
 `sem_id` int(11) ,
 `sem_name` varchar(75) ,
 `clearance_type_id` int(11) ,
 `clearance_type_name` varchar(75) ,
 `clearance_status` varchar(11) ,
 `date_created` varchar(75) ,
 `date_cleared` date 
)*/;

/*View structure for view admin_account */

/*!50001 DROP TABLE IF EXISTS `admin_account` */;
/*!50001 DROP VIEW IF EXISTS `admin_account` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `admin_account` AS select `admin`.`admin_id` AS `admin_id`,`admin`.`admin_name` AS `admin_name`,`admin`.`admin_username` AS `admin_username`,`admin`.`admin_password` AS `admin_password`,`admin`.`date_registered` AS `date_registered`,`admin`.`user_type` AS `user_type`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`office`.`is_department` AS `is_department` from (`admin` join `office`) where `admin`.`office_id` = `office`.`office_id` */;

/*View structure for view clearance_progress_view */

/*!50001 DROP TABLE IF EXISTS `clearance_progress_view` */;
/*!50001 DROP VIEW IF EXISTS `clearance_progress_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clearance_progress_view` AS select `clearance_progress`.`clearance_progress_id` AS `clearance_progress_id`,`clearance_progress`.`status` AS `status`,`sy_sem`.`sy_sem_id` AS `sy_sem_id`,`sy_sem`.`school_year_and_sem` AS `school_year_and_sem`,`sem`.`sem_id` AS `sem_id`,`sem`.`sem_name` AS `sem_name` from ((`clearance_progress` join `sy_sem` on(`clearance_progress`.`sy_sem_id` = `sy_sem`.`sy_sem_id`)) join `sem` on(`clearance_progress`.`sem_id` = `sem`.`sem_id`)) */;

/*View structure for view course_view */

/*!50001 DROP TABLE IF EXISTS `course_view` */;
/*!50001 DROP VIEW IF EXISTS `course_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `course_view` AS select `course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`course`.`course_description` AS `course_description`,`course`.`course_status` AS `course_status`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`office`.`is_department` AS `is_department` from (`course` join `office` on(`course`.`office_id` = `office`.`office_id`)) */;

/*View structure for view final_report */

/*!50001 DROP TABLE IF EXISTS `final_report` */;
/*!50001 DROP VIEW IF EXISTS `final_report` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `final_report` AS select `clearance`.`clearance_id` AS `clearance_id`,`student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`student`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`requirement`.`requirement_id` AS `requirement_id`,`requirement`.`requirement_details` AS `requirement_details`,`requirement`.`is_complied` AS `is_complied`,`requirement`.`date_cleared` AS `date_cleared`,`clearance`.`clearance_progress_id` AS `clearance_progress_id`,`clearance`.`clearance_type_id` AS `clearance_type_id` from ((((((`clearance` left join `requirement` on(`clearance`.`student_id` = `requirement`.`student_id`)) join `student` on(`clearance`.`student_id` = `student`.`student_id`)) left join `office` on(`office`.`office_id` = `student`.`office_id`)) join `clearance_type` on(`clearance`.`clearance_type_id` = `clearance_type`.`clearance_type_id`)) join `clearance_progress` on(`clearance`.`clearance_progress_id` = `clearance_progress`.`clearance_progress_id`)) join `course` on(`course`.`course_id` = `student`.`course_id`)) */;

/*View structure for view new_signing_info */

/*!50001 DROP TABLE IF EXISTS `new_signing_info` */;
/*!50001 DROP VIEW IF EXISTS `new_signing_info` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_signing_info` AS select `clearance_details`.`clearance_details_id` AS `clearance_details_id`,`clearance_details`.`clearance_id` AS `clearance_id`,`clearance_details`.`signing_office_id` AS `signing_office_id`,`clearance_details`.`date_cleared` AS `date_cleared`,`clearance_details`.`sy_sem_id` AS `sy_sem_id`,`clearance_details`.`status` AS `status`,`signing_office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name` from ((`clearance_details` join `signing_office` on(`clearance_details`.`signing_office_id` = `signing_office`.`signing_office_id`)) join `office` on(`signing_office`.`office_id` = `office`.`office_id`)) */;

/*View structure for view new_signing_offices */

/*!50001 DROP TABLE IF EXISTS `new_signing_offices` */;
/*!50001 DROP VIEW IF EXISTS `new_signing_offices` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_signing_offices` AS select `signing_office`.`signing_office_id` AS `signing_office_id`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`office`.`office_email` AS `office_email`,`clearance_progress`.`clearance_progress_id` AS `clearance_progress_id`,`clearance_progress`.`status` AS `status`,`sy_sem`.`sy_sem_id` AS `sy_sem_id`,`sy_sem`.`school_year_and_sem` AS `school_year_and_sem`,`sem`.`sem_id` AS `sem_id`,`sem`.`sem_name` AS `sem_name`,`admin`.`admin_id` AS `admin_id`,`admin`.`admin_name` AS `admin_name`,`clearance_type`.`clearance_type_name` AS `clearance_type_name`,`clearance_type`.`clearance_type_id` AS `clearance_type_id` from ((((((`signing_office` join `office` on(`signing_office`.`office_id` = `office`.`office_id`)) join `clearance_progress` on(`signing_office`.`clearance_progress_id` = `clearance_progress`.`clearance_progress_id`)) join `sy_sem` on(`clearance_progress`.`sy_sem_id` = `sy_sem`.`sy_sem_id`)) join `sem` on(`clearance_progress`.`sem_id` = `sem`.`sem_id`)) join `admin` on(`signing_office`.`admin_id` = `admin`.`admin_id`)) join `clearance_type` on(`signing_office`.`clearance_type_id` = `clearance_type`.`clearance_type_id`)) */;

/*View structure for view new_student */

/*!50001 DROP TABLE IF EXISTS `new_student` */;
/*!50001 DROP VIEW IF EXISTS `new_student` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `new_student` AS select `student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`student`.`student_status` AS `student_status`,`office`.`office_name` AS `office_name`,`student`.`student_gender` AS `student_gender`,`student`.`student_email` AS `student_email`,`student`.`student_username` AS `student_username`,`student`.`student_password` AS `student_password` from ((`student` join `course` on(`student`.`course_id` = `course`.`course_id`)) join `office` on(`student`.`office_id` = `office`.`office_id`)) */;

/*View structure for view requirements_report */

/*!50001 DROP TABLE IF EXISTS `requirements_report` */;
/*!50001 DROP VIEW IF EXISTS `requirements_report` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requirements_report` AS select `student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`requirement`.`requirement_id` AS `requirement_id`,`requirement`.`requirement_details` AS `requirement_details`,`requirement`.`is_complied` AS `is_complied`,`requirement`.`date_cleared` AS `date_cleared`,`requirement`.`clearance_progress_id` AS `clearance_progress_id`,`requirement`.`clearance_type_id` AS `clearance_type_id` from ((((((`student` left join `requirement` on(`student`.`student_id` = `requirement`.`student_id`)) join `course` on(`course`.`course_id` = `student`.`course_id`)) join `clearance_progress` on(`requirement`.`clearance_progress_id` = `clearance_progress`.`clearance_progress_id`)) join `clearance_type` on(`requirement`.`clearance_type_id` = `clearance_type`.`clearance_type_id`)) join `signing_office` on(`requirement`.`signing_office_id` = `signing_office`.`signing_office_id`)) join `office` on(`signing_office`.`office_id` = `office`.`office_id`)) */;

/*View structure for view requirements_report_final */

/*!50001 DROP TABLE IF EXISTS `requirements_report_final` */;
/*!50001 DROP VIEW IF EXISTS `requirements_report_final` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requirements_report_final` AS select `clearance`.`clearance_id` AS `clearance_id`,`student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`requirement`.`requirement_id` AS `requirement_id`,`requirement`.`requirement_details` AS `requirement_details`,`requirement`.`is_complied` AS `is_complied`,`requirement`.`date_cleared` AS `date_cleared`,`requirement`.`clearance_progress_id` AS `clearance_progress_id`,`requirement`.`clearance_type_id` AS `clearance_type_id` from (((((((`clearance` left join `requirement` on(`clearance`.`student_id` = `requirement`.`student_id`)) join `student` on(`clearance`.`student_id` = `student`.`student_id`)) join `course` on(`course`.`course_id` = `student`.`course_id`)) join `clearance_progress` on(`requirement`.`clearance_progress_id` = `clearance_progress`.`clearance_progress_id`)) join `clearance_type` on(`requirement`.`clearance_type_id` = `clearance_type`.`clearance_type_id`)) join `signing_office` on(`requirement`.`signing_office_id` = `signing_office`.`signing_office_id`)) join `office` on(`signing_office`.`office_id` = `office`.`office_id`)) */;

/*View structure for view requirement_cleared */

/*!50001 DROP TABLE IF EXISTS `requirement_cleared` */;
/*!50001 DROP VIEW IF EXISTS `requirement_cleared` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requirement_cleared` AS select `requirement`.`requirement_id` AS `requirement_id`,`requirement`.`requirement_details` AS `requirement_details`,`requirement`.`signing_office_id` AS `signing_office_id`,`requirement`.`student_id` AS `student_id`,`requirement`.`clearance_type_id` AS `clearance_type_id`,`requirement`.`is_complied` AS `is_complied`,`requirement`.`date_cleared` AS `date_cleared`,`requirement`.`clearance_progress_id` AS `clearance_progress_id`,count(0) AS `NO_R`,sum(`requirement`.`is_complied`) AS `NO_C`,if(count(0) = sum(`requirement`.`is_complied`),1,0) AS `is_cleared` from `requirement` group by `requirement`.`student_id` */;

/*View structure for view requirement_view */

/*!50001 DROP TABLE IF EXISTS `requirement_view` */;
/*!50001 DROP VIEW IF EXISTS `requirement_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requirement_view` AS select `requirement`.`requirement_id` AS `requirement_id`,`requirement`.`requirement_details` AS `requirement_details`,`requirement`.`is_complied` AS `is_complied`,`requirement`.`date_cleared` AS `date_cleared`,`signing_office`.`signing_office_id` AS `signing_office_id`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`clearance_progress`.`clearance_progress_id` AS `clearance_progress_id`,`clearance_progress`.`status` AS `status`,`sy_sem`.`sy_sem_id` AS `sy_sem_id`,`sy_sem`.`school_year_and_sem` AS `school_year_and_sem`,`sem`.`sem_id` AS `sem_id`,`sem`.`sem_name` AS `sem_name`,`student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_email` AS `student_email`,`clearance_type`.`clearance_type_id` AS `clearance_type_id`,`clearance_type`.`clearance_type_name` AS `clearance_type_name` from (((((((`requirement` join `signing_office` on(`requirement`.`signing_office_id` = `signing_office`.`signing_office_id`)) join `office` on(`signing_office`.`office_id` = `office`.`office_id`)) join `clearance_progress` on(`requirement`.`clearance_progress_id` = `clearance_progress`.`clearance_progress_id`)) join `sy_sem` on(`clearance_progress`.`sy_sem_id` = `sy_sem`.`sy_sem_id`)) join `sem` on(`clearance_progress`.`sem_id` = `sem`.`sem_id`)) join `student` on(`requirement`.`student_id` = `student`.`student_id`)) join `clearance_type` on(`requirement`.`clearance_type_id` = `clearance_type`.`clearance_type_id`)) */;

/*View structure for view school_year */

/*!50001 DROP TABLE IF EXISTS `school_year` */;
/*!50001 DROP VIEW IF EXISTS `school_year` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `school_year` AS select `sy_sem`.`sy_sem_id` AS `sy_sem_id`,`sy_sem`.`school_year_and_sem` AS `school_year_and_sem`,`sy_sem`.`sem_id` AS `sem_id`,`sy_sem`.`status` AS `status`,`sem`.`sem_name` AS `sem_name` from (`sy_sem` join `sem` on(`sy_sem`.`sem_id` = `sem`.`sem_id`)) */;

/*View structure for view student_details */

/*!50001 DROP TABLE IF EXISTS `student_details` */;
/*!50001 DROP VIEW IF EXISTS `student_details` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_details` AS select `student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_middle_name` AS `student_middle_name`,`student`.`student_last_name` AS `student_last_name`,`student`.`student_year` AS `student_year`,`course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`student`.`student_status` AS `student_status`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`office`.`is_department` AS `is_departmnent`,`student`.`student_gender` AS `student_gender`,`student`.`student_email` AS `student_email`,`student`.`student_username` AS `student_username`,`student`.`student_password` AS `student_password`,`student`.`student_profile` AS `student_profile` from ((`student` join `course` on(`student`.`course_id` = `course`.`course_id`)) join `office` on(`student`.`office_id` = `office`.`office_id`)) */;

/*View structure for view view_clearance */

/*!50001 DROP TABLE IF EXISTS `view_clearance` */;
/*!50001 DROP VIEW IF EXISTS `view_clearance` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_clearance` AS select `clearance`.`clearance_id` AS `clearance_id`,`student`.`student_id` AS `student_id`,`student`.`student_first_name` AS `student_first_name`,`student`.`student_middle_name` AS `student_middle_name`,`student`.`student_last_name` AS `student_last_name`,`clearance`.`is_locked` AS `is_locked`,`student`.`student_year` AS `student_year`,`student`.`student_email` AS `student_email`,`course`.`course_id` AS `course_id`,`course`.`course_name` AS `course_name`,`office`.`office_id` AS `office_id`,`office`.`office_name` AS `office_name`,`office`.`is_department` AS `is_department`,`clearance_progress`.`clearance_progress_id` AS `clearance_progress_id`,`clearance_progress`.`status` AS `status`,`sy_sem`.`sy_sem_id` AS `sy_sem_id`,`sy_sem`.`school_year_and_sem` AS `school_year_and_sem`,`sem`.`sem_id` AS `sem_id`,`sem`.`sem_name` AS `sem_name`,`clearance_type`.`clearance_type_id` AS `clearance_type_id`,`clearance_type`.`clearance_type_name` AS `clearance_type_name`,`clearance`.`clearance_status` AS `clearance_status`,`clearance`.`date_created` AS `date_created`,`clearance`.`date_cleared` AS `date_cleared` from (((((((`clearance` join `student` on(`clearance`.`student_id` = `student`.`student_id`)) join `course` on(`clearance`.`course_id` = `course`.`course_id`)) join `office` on(`clearance`.`office_id` = `office`.`office_id`)) join `clearance_progress` on(`clearance`.`clearance_progress_id` = `clearance_progress`.`clearance_progress_id`)) join `sy_sem` on(`clearance_progress`.`sy_sem_id` = `sy_sem`.`sy_sem_id`)) join `sem` on(`clearance_progress`.`sem_id` = `sem`.`sem_id`)) join `clearance_type` on(`clearance`.`clearance_type_id` = `clearance_type`.`clearance_type_id`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

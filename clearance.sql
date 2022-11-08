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
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `student` */

insert  into `student`(`student_id`,`student_first_name`,`student_last_name`,`student_year`,`student_course`,`student_username`,`student_password`,`student_profile`) values 
('fwefwe','fewfwefwe','fewfew','fewfwe','fewfw','fewfwf','fewfe','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

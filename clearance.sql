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
('2019-2003','Al Cedric','Gay','4th-Year','BS-HM','john.hatdog','12312',''),
('2019-70224','Mary','Espinsa','4th Year','BS-IT','mary23','haynako','n/a'),
('2019-70227','Kristian','Tare','4th-Year','BS-IT','ktare23','buggy',''),
('2019-8217','Jenerose','Siglos','4th Year','BS-IT','jenorose23','123',''),
('2023-2413','John','Doe','5th Year','BS-iT','jon24','23232',''),
('2023-2414','John','Doe','6th Year','BS-iT','jon25','23232',''),
('2023-2415','John','Doe','7th Year','BS-iT','jon26','23232',''),
('2023-2416','John','Doe','8th Year','BS-iT','jon27','23232',''),
('2023-2417','John','Doe','9th Year','BS-iT','jon28','23232',''),
('2023-2418','John','Doe','10th Year','BS-iT','jon29','23232',''),
('2023-2419','John','Doe','11th Year','BS-iT','jon30','23232',''),
('2023-2420','John','Doe','12th Year','BS-iT','jon31','23232',''),
('2023-2421','John','Doe','13th Year','BS-iT','jon32','23232',''),
('2023-2422','John','Doe','14th Year','BS-iT','jon33','23232',''),
('2023-2423','John','Doe','15th Year','BS-iT','jon34','23232',''),
('2023-2424','John','Doe','16th Year','BS-iT','jon35','23232',''),
('2023-2425','John','Doe','17th Year','BS-iT','jon36','23232',''),
('2023-2426','John','Doe','18th Year','BS-iT','jon37','23232',''),
('2023-2428','John','Doe','20th Year','BS-iT','jon39','23232',''),
('2023-2429','John','Doe','21st Year','BS-iT','jon40','23232',''),
('2023-2430','John','Doe','22nd Year','BS-iT','jon41','23232',''),
('2023-2431','John','Doe','23rd Year','BS-iT','jon42','23232',''),
('2023-2432','John','Doe','24th Year','BS-iT','jon43','23232',''),
('2023-2433','John','Doe','25th Year','BS-iT','jon44','23232',''),
('2023-2434','John','Doe','26th Year','BS-iT','jon45','23232',''),
('2023-2435','John','Doe','27th Year','BS-iT','jon46','23232',''),
('2023-2436','John','Doe','28th Year','BS-iT','jon47','23232',''),
('﻿2019-1080268','John ','Suco','4th Year','BS-IT','suco323','johnsuco23',''),
('﻿2020-234','Phoebe','Ladua','3rd Year','BS-Biology','phobe23','maldita232',''),
('﻿2023-2412','John','Doe','4th Year','BS-iT','jon23','23232',''),
('﻿2023-2427','John','Doe','19th Year','BS-iT','jon38','23232',''),
('﻿2023-9464','Jesha','Pondoc','3rd Year','BS-Biology','jeshang43','babykosiengr.','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.1.30-community : Database - checkers
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`checkers` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `checkers`;

/*Table structure for table `check_bill` */

DROP TABLE IF EXISTS `check_bill`;

CREATE TABLE `check_bill` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bill_number` int(10) unsigned DEFAULT NULL,
  `dated` date DEFAULT NULL,
  `item_name` varchar(200) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `cost` int(10) unsigned DEFAULT NULL,
  `sub_total` int(10) unsigned DEFAULT NULL,
  `discount` float unsigned DEFAULT NULL,
  `tax` float unsigned DEFAULT NULL,
  `total` float unsigned DEFAULT NULL,
  `pay_by` enum('Cash','Credit Card') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8;

/*Data for the table `check_bill` */

insert  into `check_bill`(`id`,`bill_number`,`dated`,`item_name`,`quantity`,`cost`,`sub_total`,`discount`,`tax`,`total`,`pay_by`) values (1,NULL,'0000-00-00','chicken kabab',5,4,0,0,0,0,NULL),(2,NULL,'0000-00-00','mutton_khema_paw',3,150,0,0,0,0,NULL),(3,NULL,'0000-00-00','chicken kabab',5,4,0,0,0,0,NULL),(4,NULL,'0000-00-00','mutton_khema_paw',3,150,0,0,0,0,NULL),(5,NULL,'0000-00-00','mutton443_33',5,5,0,0,0,0,NULL),(6,1,'2009-05-04','mutton443_33',5,5,0,0,0,0,NULL),(7,NULL,'2009-05-04','mutton443_33',5,5,0,0,0,0,NULL),(8,NULL,'2009-05-04','chicken kabab',5,4,0,0,0,0,NULL),(9,NULL,'2009-05-04','mutton_khema_paw',3,150,0,0,0,0,NULL),(10,1,'2009-05-04','wine',1,124,0,0,0,0,NULL),(11,1,'2009-05-04','mutton443_33',5,5,0,0,0,0,NULL),(12,1,'2009-05-04','chicken kabab',5,4,0,0,0,0,NULL),(13,1,'2009-05-04','mutton_khema_paw',3,150,0,0,0,0,NULL),(14,2,'2009-05-04','chicken kabab',5,4,0,0,0,0,NULL),(15,2,'2009-05-04','mutton_khema_paw',3,150,0,0,0,0,NULL),(16,3,'2009-05-04','wine',1,124,0,0,0,0,NULL),(17,3,'2009-05-04','mutton443_33',5,5,0,0,0,0,NULL),(18,4,'2009-05-04','wine',1,124,0,0,0,0,NULL),(19,4,'2009-05-04','mutton443_33',5,5,0,0,0,0,NULL),(20,5,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(21,5,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(22,6,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(23,6,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(24,7,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(25,7,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(26,8,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(27,8,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(28,9,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(29,9,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(30,10,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(31,10,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(32,11,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(33,11,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(34,12,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(35,12,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(36,13,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(37,13,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(38,14,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(39,14,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(40,15,'2009-05-04','chicken kabab',5,4,154,0,0,154,NULL),(41,15,'2009-05-04','mutton_khema_paw',3,150,154,0,0,154,NULL),(42,16,'2009-05-04','chicken kabab',5,4,154,10,10,152,NULL),(43,16,'2009-05-04','mutton_khema_paw',3,150,154,10,10,152,NULL),(44,17,'2009-05-05','wine',3,496,496,10,10,491.04,NULL),(45,18,'2009-05-05','wine',3,496,496,2.5,3.5,500.526,NULL),(46,19,'2009-05-04','wine',3,372,372,5,5,371.07,NULL),(47,20,'2009-05-04','wine',3,372,372,5,5,371.07,NULL),(48,21,'2009-05-04','wine',3,372,372,5,5,371.07,NULL),(49,22,'2009-05-04','wine',3,372,372,5,5,371.07,NULL),(50,23,'2009-05-04','wine',3,372,372,6,6,370.661,NULL),(51,24,'2009-05-04','wine',3,372,372,6,6,370.661,NULL),(52,25,'2009-05-04','wine',3,372,372,6,6,370.661,NULL),(53,26,'2009-05-04','wine',6,1116,1116,6,4.8,1099.39,NULL),(54,27,'2009-05-06','chocolate',3,600,600,5,4,592.8,NULL),(55,28,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(56,28,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(57,29,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(58,29,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(59,30,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(60,30,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(61,31,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(62,31,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(63,32,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(64,32,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(65,33,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(66,33,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(67,34,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(68,34,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(69,35,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(70,35,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(71,36,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(72,36,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(73,37,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(74,37,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(75,38,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(76,38,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(77,39,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(78,39,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(79,40,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(80,40,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(81,41,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(82,41,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(83,42,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(84,42,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(85,43,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(86,43,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(87,44,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(88,44,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(89,45,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(90,45,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(91,46,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(92,46,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(93,47,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(94,47,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(95,48,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(96,48,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(97,49,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(98,49,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(99,50,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(100,50,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(101,51,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(102,51,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(103,52,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(104,52,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(105,53,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(106,53,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(107,54,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(108,54,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(109,55,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(110,55,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(111,56,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(112,56,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(113,57,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(114,57,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(115,58,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(116,58,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(117,59,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(118,59,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(119,60,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(120,60,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(121,61,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(122,61,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(123,62,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(124,62,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(125,63,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(126,63,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(127,64,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(128,64,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(129,65,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(130,65,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(131,66,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(132,66,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(133,67,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(134,67,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(135,68,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(136,68,'2009-05-07','sample',1,100,596,5,3,583.186,NULL),(137,69,'2009-05-07','wine',3,496,596,5,3,583.186,NULL),(138,69,'2009-05-07','sample',1,100,596,5,3,583.186,NULL);

/*Table structure for table `check_log` */

DROP TABLE IF EXISTS `check_log`;

CREATE TABLE `check_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_of` varchar(50) DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `dated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `check_log` */

insert  into `check_log`(`id`,`log_of`,`file_name`,`dated`) values (1,'database','Tue-May-2009.gz','0000-00-00'),(2,'database','Tue-May-2009.gz','0000-00-00'),(3,'database','Tue-May-2009.gz','0000-00-00'),(4,'database','Tue-May-2009.gz','2005-05-09'),(5,'report','07-05-09.csv','2007-05-09');

/*Table structure for table `check_menu` */

DROP TABLE IF EXISTS `check_menu`;

CREATE TABLE `check_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT '0',
  `cost` int(10) unsigned DEFAULT '0',
  `section` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `check_menu` */

insert  into `check_menu`(`id`,`name`,`quantity`,`cost`,`section`) values (2,'wine',303,124,'Bar'),(4,'chocolate',300,200,'Restaurant'),(10,'chicken kabab',2,12,'Restaurant'),(11,'mutton_khema_paw',22,50,'Restaurant'),(13,'mutton443',22,50,'Restaurant'),(14,'mutton443_33',22,50,'Restaurant'),(17,'sample',22,100,'Beverages'),(18,'tandoori chicken',0,145,'Restaurant');

/*Table structure for table `check_order` */

DROP TABLE IF EXISTS `check_order`;

CREATE TABLE `check_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `cost` int(10) unsigned DEFAULT NULL,
  `ordered_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

/*Data for the table `check_order` */

insert  into `check_order`(`id`,`item_name`,`quantity`,`cost`,`ordered_by`) values (57,'',1,0,'Table No. 1'),(50,'wine',3,372,'Room No. 102'),(52,'sample',1,100,'Room No. 101'),(56,'chocolate',4,800,'Room No. 100'),(54,'chocolate',3,600,'Room No. 107'),(55,'sample',2,200,'Table No. 19'),(58,'wine',1,124,'Table No. 2');

/*Table structure for table `check_user` */

DROP TABLE IF EXISTS `check_user`;

CREATE TABLE `check_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `order_manage` varchar(50) DEFAULT 'no',
  `menu_manage` varchar(50) DEFAULT 'no',
  `database_manage` varchar(50) DEFAULT 'no',
  `report_manage` varchar(50) DEFAULT 'no',
  `user_manage` varchar(50) DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `check_user` */

insert  into `check_user`(`id`,`name`,`username`,`password`,`designation`,`order_manage`,`menu_manage`,`database_manage`,`report_manage`,`user_manage`) values (3,'agy','sample','a','Waiter','yes','yes','yes','','yes'),(6,'checkq','abc','abc','Waiter','','yes','','yes','yes'),(7,'sam','aaa','a','Manager','yes','yes','yes','yes','yes'),(8,'agraj','a','a','Manager','yes','yes','yes','yes','yes'),(9,'ajit','aj','ja','Manager','yes','yes','yes','yes','yes');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

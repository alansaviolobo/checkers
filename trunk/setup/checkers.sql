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
  `pay_by` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `waiter_no` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=utf8;

/*Table structure for table `check_menu` */

DROP TABLE IF EXISTS `check_menu`;
CREATE TABLE `check_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT '0',
  `cost` int(10) unsigned DEFAULT '0',
  `section` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

/*Table structure for table `check_user` */

DROP TABLE IF EXISTS `check_user`;
CREATE TABLE `check_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `order_manage` varchar(50) DEFAULT 'no',
  `menu_manage` varchar(50) DEFAULT 'no',
  `database_manage` varchar(50) DEFAULT 'no',
  `report_manage` varchar(50) DEFAULT 'no',
  `user_manage` varchar(50) DEFAULT 'no',
  `database_restore` varchar(50) DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

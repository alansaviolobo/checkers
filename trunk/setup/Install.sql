-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.30-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema checkers
--

CREATE DATABASE IF NOT EXISTS checkers;
USE checkers;

--
-- Definition of table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE `bill` (
  `number` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dated` date DEFAULT NULL,
  `beverages` int(10) unsigned DEFAULT NULL,
  `bar` int(10) unsigned NOT NULL DEFAULT 0,
  `food` int(10) unsigned NOT NULL DEFAULT 0,
  `subtotal` int(10) unsigned NOT NULL DEFAULT 0,
  `discount` int(10) unsigned NOT NULL DEFAULT 0,
  `tax` int(10) unsigned NOT NULL DEFAULT 0,
  `total` int(10) unsigned NOT NULL DEFAULT 0,
  `paid` ENUM('room sales', 'credit card', 'cash', 'print') NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `waiter` varchar(100) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB;

--
-- Definition of table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `name` varchar(100) NOT NULL,
  `cost` int(10) unsigned NOT NULL DEFAULT 0,
  `section` ENUM('Beverages','Food','Bar') NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB;

--
-- Definition of table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(100) NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `cost` int(10) unsigned NOT NULL ,
  `source` varchar(50) DEFAULT NULL,
  `status` ENUM('open', 'close') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

--
-- Definition of table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `menu` varchar(100) DEFAULT NULL,
  `carry` int(10) unsigned DEFAULT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `dated` date NOT NULL,
  `total` int(10) unsigned NOT NULL,
  FOREIGN KEY (`menu`) REFERENCES `menu`(`name`)
  ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Definition of table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `order_manage` ENUM('no', 'yes') NOT NULL DEFAULT 'no',
  `menu_manage` ENUM('no', 'yes') NOT NULL DEFAULT 'no',
  `database_manage` ENUM('no', 'yes') NOT NULL DEFAULT 'no',
  `report_manage` ENUM('no', 'yes') NOT NULL DEFAULT 'no',
  `user_manage` ENUM('no', 'yes') NOT NULL DEFAULT 'no',
  PRIMARY KEY(`username`)
) ENGINE=InnoDB;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

GRANT ALL PRIVILEGES ON `checkers`.* TO 'checkers'@'localhost' IDENTIFIED BY 'check123';

INSERT INTO `user` (`username`,`password`,`name`,`designation`,`order_manage`,`menu_manage`,`database_manage`,`report_manage`,`user_manage`)
            VALUES ('admin','admin','Administrator','Administrator','yes','yes','yes','yes','yes');
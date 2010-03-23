-- ------------------------------------------------------
-- Checkers Complete Database Structure
-- ------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- TODO concept of multiple kitchens serving the same menu items (e.g. bar, pool bar)
--
-- Create schema checkers
--

CREATE DATABASE IF NOT EXISTS checkers;
USE checkers;

--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  UNIQUE KEY (`key`),
) ENGINE=InnoDB;

--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` ENUM('waiter', 'manager', 'owner', 'chef') NOT NULL,
  `enabled` BOOL NOT NULL default true,
  `access_users` ENUM('none', 'view', 'edit') NOT NULL DEFAULT 'none',
  `access_menus` ENUM('none', 'view', 'edit') NOT NULL DEFAULT 'none',
  `access_orders` ENUM('none', 'view', 'edit') NOT NULL DEFAULT 'none',
  `access_bills` ENUM('none', 'view', 'edit') NOT NULL DEFAULT 'none',
  `access_reports` ENUM('none', 'view', 'edit') NOT NULL DEFAULT 'none',
  `access_database` ENUM('none', 'view', 'edit') NOT NULL DEFAULT 'none',
  `access_raw_materials` ENUM('none', 'view', 'edit') NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`),
  UNIQUE KEY (`username`)
) ENGINE=InnoDB;

--
-- Definition of table `raw_materials`
--

DROP TABLE IF EXISTS `raw_materials`;
CREATE TABLE `raw_materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `warning_qty` int(10) unsigned NOT NULL,
  `enabled` BOOL NOT NULL default true,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB;

--
-- Definition of table `raw_material_sources`
--

DROP TABLE IF EXISTS `raw_material_sources`;
CREATE TABLE `raw_material_sources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` int(10) unsigned NOT NULL,
  `phone` char(10) NOT NULL,
  `enabled` BOOL NOT NULL default true,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB;

--
-- Definition of table `raw_material_purchases`
--

DROP TABLE IF EXISTS `raw_material_purchases`;
CREATE TABLE `raw_material_purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `raw_material_id` int(10) unsigned NOT NULL,
  `raw_material_source_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `bought_on` date NOT NULL,
  `bill_no` int(10) unsigned NOT NULL,
  `paid_on` date,
  `paid_by` varchar(255),
  `entered_by` int(10) unsigned NOT NULL,
  `entered_on` date NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`raw_material_id`) REFERENCES `raw_materials`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`raw_material_source_id`) REFERENCES `raw_material_sources`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`entered_by`) REFERENCES `users`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Definition of table `raw_material_distribution`
--

DROP TABLE IF EXISTS `raw_material_distribution`;
CREATE TABLE `raw_material_distribution` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `raw_material_id` int(10) unsigned NOT NULL,
  `usage_fraction` float unsigned NOT NULL,
  FOREIGN KEY (`raw_material_id`) REFERENCES `raw_materials`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Definition of table `raw_material_menu_map`
--

DROP TABLE IF EXISTS `raw_material_menu_map`;
CREATE TABLE `raw_material_menu_map` (
  `menu_item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `raw_material_id` int(10) unsigned NOT NULL,
  `usage_fraction` float unsigned NOT NULL,
  FOREIGN KEY (`raw_material_id`) REFERENCES `raw_materials`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Definition of table `service_locations`
--

DROP TABLE IF EXISTS `service_locations`;
CREATE TABLE `service_locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`name`)
) ENGINE=InnoDB;

--
-- Definition of table `menu_sections`
--

DROP TABLE IF EXISTS `menu_sections`;
CREATE TABLE `menu_sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `default_printer` varchar(255) NOT NULL,
  `enabled` BOOL NOT NULL default true,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`name`)
) ENGINE=InnoDB;

--
-- Definition of table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `menu_section_id` int(10) unsigned NOT NULL,
  `enabled` BOOL NOT NULL default true,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`name`),
  FOREIGN KEY (`menu_section_id`) REFERENCES `menu_sections`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Definition of table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `waiter_id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `subtotal` int(10) unsigned NOT NULL,
  `discount` int(10) unsigned NOT NULL DEFAULT 0,
  `tax` int(10) unsigned NOT NULL DEFAULT 0,
  `status` ENUM('open', 'printed', 'paid', 'invalid') NOT NULL DEFAULT 'open',
  `payment_mode` ENUM('cheque', 'credit card', 'cash') NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `printed_by` int(10) unsigned NOT NULL,
  `created_on` datetime DEFAULT NULL,
  `printed_on` datetime DEFAULT NULL,
  `closed_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`waiter_id`) REFERENCES `users`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`location_id`) REFERENCES `service_locations`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`printed_by`) REFERENCES `users`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Definition of table `bill_items`
--

DROP TABLE IF EXISTS `bill_items`;
CREATE TABLE `bill_items` (
  `bill_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_item_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `added_on` datetime DEFAULT NULL,
  `added_by` int(10) unsigned NOT NULL,
  PRIMARY KEY (`bill_id`, `menu_item_id`),
  FOREIGN KEY (`bill_id`) REFERENCES `bills`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (`added_by`) REFERENCES `users`(`id`)
  ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Definition of table `db_log`
--

DROP TABLE IF EXISTS `db_log`;
CREATE TABLE `db_log` (
  `timed_at` datetime NOT NULL,
  `operation` ENUM('backup', 'restore') NOT NULL,
  `user` int(10) unsigned NOT NULL
) ENGINE=Archive;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

GRANT ALL PRIVILEGES ON `checkers`.* TO 'checkers'@'localhost' IDENTIFIED BY 'check123';

INSERT INTO `users` VALUES (0,'admin',sha('admin'),'Admin','edit','edit','edit','edit','edit','edit', 'edit');

INSERT INTO `configs` VALUES ('restaurant_name',''),('bill_header',''),('bill_footer','');
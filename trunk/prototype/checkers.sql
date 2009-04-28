# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             checkers
# Server version:       5.1.30-community
# Server OS:            Win32
# Target-Compatibility: Standard ANSI SQL
# HeidiSQL version:     3.2 Revision: 1129
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1;*/
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'checkers'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "checkers" /*!40100 DEFAULT CHARACTER SET utf8 */;

USE "checkers";


#
# Table structure for table 'bill'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "bill" (
  "id" bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  "bill_number" int(10) unsigned DEFAULT NULL,
  "dated" date DEFAULT NULL,
  "item_name" varchar(200) DEFAULT NULL,
  "quantity" int(10) unsigned DEFAULT NULL,
  "cost" int(10) unsigned DEFAULT NULL,
  "sub_total" int(10) unsigned DEFAULT NULL,
  "discount" int(10) unsigned DEFAULT NULL,
  "tax" int(10) unsigned DEFAULT NULL,
  "total" int(10) unsigned DEFAULT NULL,
  "table_number" int(10) unsigned DEFAULT NULL,
  "waiter_number" int(10) unsigned DEFAULT NULL,
  PRIMARY KEY ("id")
) /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'bill'
#

# (No data found.)



#
# Table structure for table 'menu'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "menu" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(100) DEFAULT NULL,
  "quantity" int(10) unsigned DEFAULT '0',
  "cost" int(10) unsigned DEFAULT '0',
  "section" varchar(50) DEFAULT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=15 /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'menu'
#

# (No data found.)


#
# Table structure for table 'order'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "order" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "item_name" varchar(100) DEFAULT NULL,
  "quantity" int(10) unsigned DEFAULT NULL,
  "ordered_from" int(10) unsigned DEFAULT NULL,
  "number" int(10) unsigned DEFAULT NULL,
  PRIMARY KEY ("id")
) /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'order'
#

# (No data found.)



#
# Table structure for table 'user'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "user" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(100) DEFAULT NULL,
  "username" varchar(50) DEFAULT NULL,
  "password" varchar(100) DEFAULT NULL,
  "designation" varchar(100) DEFAULT NULL,
  "order_manage" varchar(50) DEFAULT 'no',
  "menu_manage" varchar(50) DEFAULT 'no',
  "database_manage" varchar(50) DEFAULT 'no',
  "report_manage" varchar(50) DEFAULT 'no',
  "user_manage" varchar(50) DEFAULT 'no',
  PRIMARY KEY ("id")
) AUTO_INCREMENT=6 /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'user'
#

# (No data found.)

# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 localhost
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
# Table structure for table 'check_bill'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "check_bill" (
  "id" bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  "bill_number" int(10) unsigned DEFAULT NULL,
  "dated" date DEFAULT NULL,
  "item_name" varchar(200) DEFAULT NULL,
  "quantity" int(10) unsigned DEFAULT NULL,
  "cost" int(10) unsigned DEFAULT NULL,
  "sub_total" int(10) unsigned DEFAULT NULL,
  "discount" float unsigned DEFAULT NULL,
  "tax" float unsigned DEFAULT NULL,
  "total" float unsigned DEFAULT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=54 /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'check_bill'
#

LOCK TABLES "check_bill" WRITE;
/*!40000 ALTER TABLE "check_bill" DISABLE KEYS;*/
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('1',NULL,'0000-00-00','chicken kabab','5','4','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('2',NULL,'0000-00-00','mutton_khema_paw','3','150','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('3',NULL,'0000-00-00','chicken kabab','5','4','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('4',NULL,'0000-00-00','mutton_khema_paw','3','150','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('5',NULL,'0000-00-00','mutton443_33','5','5','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('6','1','2009-05-04','mutton443_33','5','5','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('7',NULL,'2009-05-04','mutton443_33','5','5','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('8',NULL,'2009-05-04','chicken kabab','5','4','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('9',NULL,'2009-05-04','mutton_khema_paw','3','150','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('10','1','2009-05-04','wine','1','124','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('11','1','2009-05-04','mutton443_33','5','5','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('12','1','2009-05-04','chicken kabab','5','4','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('13','1','2009-05-04','mutton_khema_paw','3','150','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('14','2','2009-05-04','chicken kabab','5','4','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('15','2','2009-05-04','mutton_khema_paw','3','150','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('16','3','2009-05-04','wine','1','124','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('17','3','2009-05-04','mutton443_33','5','5','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('18','4','2009-05-04','wine','1','124','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('19','4','2009-05-04','mutton443_33','5','5','0','0','0','0');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('20','5','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('21','5','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('22','6','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('23','6','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('24','7','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('25','7','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('26','8','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('27','8','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('28','9','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('29','9','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('30','10','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('31','10','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('32','11','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('33','11','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('34','12','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('35','12','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('36','13','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('37','13','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('38','14','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('39','14','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('40','15','2009-05-04','chicken kabab','5','4','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('41','15','2009-05-04','mutton_khema_paw','3','150','154','0','0','154');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('42','16','2009-05-04','chicken kabab','5','4','154','10','10','152');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('43','16','2009-05-04','mutton_khema_paw','3','150','154','10','10','152');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('44','17','2009-05-05','wine','3','496','496','10','10','491.04');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('45','18','2009-05-05','wine','3','496','496','2.5','3.5','500.526');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('46','19','2009-05-04','wine','3','372','372','5','5','371.07');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('47','20','2009-05-04','wine','3','372','372','5','5','371.07');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('48','21','2009-05-04','wine','3','372','372','5','5','371.07');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('49','22','2009-05-04','wine','3','372','372','5','5','371.07');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('50','23','2009-05-04','wine','3','372','372','6','6','370.661');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('51','24','2009-05-04','wine','3','372','372','6','6','370.661');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('52','25','2009-05-04','wine','3','372','372','6','6','370.661');
REPLACE INTO "check_bill" ("id", "bill_number", "dated", "item_name", "quantity", "cost", "sub_total", "discount", "tax", "total") VALUES
	('53','26','2009-05-04','wine','6','1116','1116','6','4.8','1099.39');
/*!40000 ALTER TABLE "check_bill" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'check_log'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "check_log" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "log_of" varchar(50) DEFAULT NULL,
  "file_name" varchar(50) DEFAULT NULL,
  "dated" date DEFAULT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=5 /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'check_log'
#

LOCK TABLES "check_log" WRITE;
/*!40000 ALTER TABLE "check_log" DISABLE KEYS;*/
REPLACE INTO "check_log" ("id", "log_of", "file_name", "dated") VALUES
	('1','database','Tue-May-2009.gz','0000-00-00');
REPLACE INTO "check_log" ("id", "log_of", "file_name", "dated") VALUES
	('2','database','Tue-May-2009.gz','0000-00-00');
REPLACE INTO "check_log" ("id", "log_of", "file_name", "dated") VALUES
	('3','database','Tue-May-2009.gz','0000-00-00');
REPLACE INTO "check_log" ("id", "log_of", "file_name", "dated") VALUES
	('4','database','Tue-May-2009.gz','2005-05-09');
/*!40000 ALTER TABLE "check_log" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'check_menu'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "check_menu" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "name" varchar(100) DEFAULT NULL,
  "quantity" int(10) unsigned DEFAULT '0',
  "cost" int(10) unsigned DEFAULT '0',
  "section" varchar(50) DEFAULT NULL,
  PRIMARY KEY ("id")
) AUTO_INCREMENT=18 /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'check_menu'
#

LOCK TABLES "check_menu" WRITE;
/*!40000 ALTER TABLE "check_menu" DISABLE KEYS;*/
REPLACE INTO "check_menu" ("id", "name", "quantity", "cost", "section") VALUES
	('2','wine','303','124','Bar');
REPLACE INTO "check_menu" ("id", "name", "quantity", "cost", "section") VALUES
	('4','chocolate','300','200','Restaurant');
REPLACE INTO "check_menu" ("id", "name", "quantity", "cost", "section") VALUES
	('10','chicken kabab','2','12','Restaurant');
REPLACE INTO "check_menu" ("id", "name", "quantity", "cost", "section") VALUES
	('11','mutton_khema_paw','22','50','Restaurant');
REPLACE INTO "check_menu" ("id", "name", "quantity", "cost", "section") VALUES
	('13','mutton443','22','50','Restaurant');
REPLACE INTO "check_menu" ("id", "name", "quantity", "cost", "section") VALUES
	('14','mutton443_33','22','50','Restaurant');
REPLACE INTO "check_menu" ("id", "name", "quantity", "cost", "section") VALUES
	('17','sample','22','100','Beverages');
/*!40000 ALTER TABLE "check_menu" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'check_order'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "check_order" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "item_name" varchar(100) DEFAULT NULL,
  "quantity" int(10) unsigned DEFAULT NULL,
  "cost" int(10) unsigned DEFAULT NULL,
  "ordered_by" varchar(50) DEFAULT NULL,
  PRIMARY KEY ("id"),
  KEY "id" ("id")
) AUTO_INCREMENT=54 /*!40100 DEFAULT CHARSET=latin1*/;



#
# Dumping data for table 'check_order'
#

LOCK TABLES "check_order" WRITE;
/*!40000 ALTER TABLE "check_order" DISABLE KEYS;*/
REPLACE INTO "check_order" ("id", "item_name", "quantity", "cost", "ordered_by") VALUES
	('49','wine','3','496','Room No. 101');
REPLACE INTO "check_order" ("id", "item_name", "quantity", "cost", "ordered_by") VALUES
	('50','wine','3','372','Room No. 102');
REPLACE INTO "check_order" ("id", "item_name", "quantity", "cost", "ordered_by") VALUES
	('52','sample','1','100','Room No. 101');
REPLACE INTO "check_order" ("id", "item_name", "quantity", "cost", "ordered_by") VALUES
	('53','chicken kabab','1','12','Table No. 1');
/*!40000 ALTER TABLE "check_order" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'check_user'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "check_user" (
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
) AUTO_INCREMENT=8 /*!40100 DEFAULT CHARSET=utf8*/;



#
# Dumping data for table 'check_user'
#

LOCK TABLES "check_user" WRITE;
/*!40000 ALTER TABLE "check_user" DISABLE KEYS;*/
REPLACE INTO "check_user" ("id", "name", "username", "password", "designation", "order_manage", "menu_manage", "database_manage", "report_manage", "user_manage") VALUES
	('1','agraj','a','a','1','','yes','yes','yes','yes');
REPLACE INTO "check_user" ("id", "name", "username", "password", "designation", "order_manage", "menu_manage", "database_manage", "report_manage", "user_manage") VALUES
	('2','agraj123','a','','2','','','yes','','yes');
REPLACE INTO "check_user" ("id", "name", "username", "password", "designation", "order_manage", "menu_manage", "database_manage", "report_manage", "user_manage") VALUES
	('3','agy','sample','a','0','yes','','yes','','yes');
REPLACE INTO "check_user" ("id", "name", "username", "password", "designation", "order_manage", "menu_manage", "database_manage", "report_manage", "user_manage") VALUES
	('6','checkq','abc','abc','Manager','yes','','','','');
REPLACE INTO "check_user" ("id", "name", "username", "password", "designation", "order_manage", "menu_manage", "database_manage", "report_manage", "user_manage") VALUES
	('7','sam','aaa','a','Manager','yes','yes','yes','yes','yes');
/*!40000 ALTER TABLE "check_user" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/

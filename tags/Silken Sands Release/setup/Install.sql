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
  `paid` ENUM('room sales', 'credit card', 'cash', 'print', 'room') NOT NULL,
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

INSERT INTO `menu` (`name`,`cost`,`section`) VALUES
('Continental Breakfast',100,'Food'),
('Indian Breakfast ',100,'Food'),
('Set Meals Veg',180,'Food'),
('Set Meals Non Veg',210,'Food'),
('Aloo Paratha',50,'Food'),
('Bread Butter',30,'Food'),
('Cheese Omlette',90,'Food'),
('Corn Flakes with milk',60,'Food'),
('Eggs to Order',60,'Food'),
('Fruit Basket',90,'Food'),
('Poha',50,'Food'),
('Porridge with milk',60,'Food'),
('Puri Bhaji',80,'Food'),
('Toast Butter',50,'Food'),
('Veg Cutlets',80,'Food'),
('Curds',60,'Food'),
('Mixed Raita',80,'Food'),
('Papad',20,'Food'),
('Egg Pakoodas',100,'Food'),
('French Fries',60,'Food'),
('Mix. Veg. Pakoodas',80,'Food'),
('Paneer Pakoodas',100,'Food'),
('Wafers',50,'Food'),
('Aloo Chat',80,'Food'),
('Cheese Garlic',120,'Food'),
('Chilly Cheese Toast',120,'Food'),
('Cheese Sandwiches',60,'Food'),
('Chkn Sandwiches',60,'Food'),
('Egg Sandwiches',60,'Food'),
('Non-Veg Club Sandwiches',120,'Food'),
('Veg Club Sandwiches',80,'Food'),
('Veg Sandwiches',60,'Food'),
('Chkn Hawaiian Salad',100,'Food'),
('Russian Salad',70,'Food'),
('Sea Food Salad',100,'Food'),
('Cole Sloe Salad',70,'Food'),
('Green Salad',60,'Food'),
('Mexican Salad',100,'Food'),
('Tossed Salad',60,'Food'),
('Crispy Veg',80,'Food'),
('Fried Peas',60,'Food'),
('Fries Bhendi',60,'Food'),
('Hara Bara Kabab',60,'Food'),
('Masala Papad',40,'Food'),
('Thread Paneer',130,'Food'),
('Veg Gold Coin',80,'Food'),
('Veg Spring Rolls',80,'Food'),
('Veg Stuffed Papad',60,'Food'),
('Chkn Liver Garlic fry',70,'Food'),
('Chkn Lollipop',100,'Food'),
('Chkn Spring Rolls',80,'Food'),
('Chkn Stuffed Papad',100,'Food'),
('Crispy Chkn',130,'Food'),
('Fish Finger',220,'Food'),
('Fried Fish',220,'Food'),
('Prawn Stuffed Papad',100,'Food'),
('Prawns Crum Fried',250,'Food'),
('Prawns Koliwada',250,'Food'),
('Prawns Golden Fried',250,'Food'),
('Prawns Butter Garlic',250,'Food'),
('Prawns Lemon Garlic',250,'Food'),
('Calamari Butter Fried',140,'Food'),
('Calamari Masala Fried',140,'Food'),
('Calamari Butter Garlic',140,'Food'),
('Chkn Caferal',130,'Food'),
('Chkn Satay',130,'Food'),
('Chkn Vindaloo',130,'Food'),
('Chkn Xacutti',130,'Food'),
('Fish Curry Rice',220,'Food'),
('Goan Fish Curry Rice',220,'Food'),
('King Fish Butter Garlic',220,'Food'),
('Mussels Chilly Fry',140,'Food'),
('Prawn Curry Rice',250,'Food'),
('Prawns Balchao',250,'Food'),
('Prawns Chilly - Goan Style',250,'Food'),
('Prawns Rava Fry',240,'Food'),
('Prawns Xacutti',250,'Food'),
('Veg Caldin',80,'Food'),
('Veg Xacutti',100,'Food'),
('King Crab',0,'Food'),
('Lobsters Grilled',0,'Food'),
('Lobsters Thermidor',0,'Food'),
('Lobsters Tandoori',0,'Food'),
('Lobsters Butter Garlic',0,'Food'),
('Pomfret Recheado',0,'Food'),
('Snapper Grilled',0,'Food'),
('Snapper Masala Fried',0,'Food'),
('Snapper Tandoori',0,'Food'),
('Snapper Butter Garlic',0,'Food'),
('Tiger Prawns Grilled',0,'Food'),
('Tiger Prawns Masala Fried',0,'Food'),
('Tiger Prawns Tandoori',0,'Food'),
('Tiger Prawns Butter Garlic',0,'Food'),
('Cream Of Chkn Soup',80,'Food'),
('French Onion Soup',80,'Food'),
('Sea Food Soup',80,'Food'),
('Tomato Egg Drop Soup',70,'Food'),
('Cream Of Mushroom',70,'Food'),
('Cream Of Tomato',70,'Food'),
('Cream Of Vegetables',70,'Food'),
('Spinach Soup',70,'Food'),
('Chkn Cutlets',80,'Food'),
('Chkn Grilled',220,'Food'),
('Chkn Boiled',220,'Food'),
('Chkn Fried',220,'Food'),
('Chkn Pepper Steak',130,'Food'),
('Chkn Roast',130,'Food'),
('Chkn Shashlik',130,'Food'),
('Chkn Sizzler',140,'Food'),
('Chkn Steak',130,'Food'),
('Chkn Stroganoff',130,'Food'),
('Baked Vegetables in White Sauce',110,'Food'),
('Chkn Long Fong Soup',80,'Food'),
('Hot N Sour Soup Veg',80,'Food'),
('Hot N Sour Soup Chkn',80,'Food'),
('Manchow Soup Veg',80,'Food'),
('Manchow Soup Chkn',80,'Food'),
('Manchow Soup Sea Food',80,'Food'),
('Spicy Chkn Soup',80,'Food'),
('Spicy Sea Food Soup',100,'Food'),
('Sweet Corn Soup Veg',80,'Food'),
('Sweet Corn Soup Chkn',80,'Food'),
('Chkn 65',170,'Food'),
('Chkn In Hot Black Garlic',130,'Food'),
('Chkn In Ginger Garlic Sauce',130,'Food'),
('Chkn In Schezwan Garlic Sauce',130,'Food'),
('Chkn Chilly',130,'Food'),
('Chkn Manchurian',130,'Food'),
('Chkn Schezwan',130,'Food'),
('Fish Chilly',220,'Food'),
('Fish Manchurian',220,'Food'),
('Fish Schezwan',220,'Food'),
('Prawn In Hot Black Garlic Sauce',250,'Food'),
('Prawns Chilly',250,'Food'),
('Roasted Chkn In Chilly Sauce',140,'Food'),
('Sweet N Sour Chkn',130,'Food'),
('Sweet N Sour Prawns',250,'Food'),
('Baby Corn Salt Pepper',100,'Food'),
('Gobi Looypop',80,'Food'),
('Mushrooms 89 Sauce',80,'Food'),
('Mushrooms Chilly',80,'Food'),
('Mushrooms Manchurian',80,'Food'),
('Mushrooms Schezwan',80,'Food'),
('Paneer Chilly',130,'Food'),
('Paneer Manchurian',130,'Food'),
('Paneer Schezwan',130,'Food'),
('Veg Manchurian',80,'Food'),
('Chkn Fried Rice',100,'Food'),
('Egg Fried Rice',80,'Food'),
('Mix Fried Rice',120,'Food'),
('Prawns Fried Rice',220,'Food'),
('Veg Fried Rice',80,'Food'),
('Veg. Sez. Fried Rice',80,'Food'),
('American Chopsuey Veg',100,'Food'),
('American Chopsuey Non Veg',100,'Food'),
('Hakka Noodles Veg',80,'Food'),
('Hakka Noodles Non Veg',80,'Food'),
('Chow Mien Veg',100,'Food'),
('Chow Mien Non Veg',100,'Food'),
('Singapore Noodles Veg',100,'Food'),
('Singapore Noodles Non Veg',100,'Food'),
('Chkn Tandoori',240,'Food'),
('Chkn Tikka',170,'Food'),
('Chkn Rehmi',190,'Food'),
('Chkn Pudina',190,'Food'),
('Chkn Kastoori',190,'Food'),
('Fish Tikka',220,'Food'),
('Tandoori Fish',290,'Food'),
('Tandoori Prawns',290,'Food'),
('Gobi Tikka',130,'Food'),
('Paneer Tikka',130,'Food'),
('Tandoori Aloo',130,'Food'),
('Tandoori Mushrooms',130,'Food'),
('Tandoori Nan',20,'Food'),
('Tandoori Paratha',50,'Food'),
('Tandoori Kulcha',50,'Food'),
('Tandoori Roti',10,'Food'),
('Chapatti',10,'Food'),
('Butter Chkn ',140,'Food'),
('Chkn Masala',130,'Food'),
('Chkn Green Masala',130,'Food'),
('Chkn Handi',130,'Food'),
('Chkn Hyderabadi',130,'Food'),
('Chkn Kadai',130,'Food'),
('Chkn Kheema Pasanda',140,'Food'),
('Chkn Kolhapuri',130,'Food'),
('Chkn Korma',110,'Food'),
('Chkn Moghlai',140,'Food'),
('Chkn Sagwalla',130,'Food'),
('Chkn Tikka Masala',160,'Food'),
('Aloo Gobi Mutter',80,'Food'),
('Baby Corn Mushroom Kadai',130,'Food'),
('Matter Paneer',130,'Food'),
('Palak Paneer',130,'Food'),
('Paneer Kofta',130,'Food'),
('Paneer Makhanwala',130,'Food'),
('Shahi Korma',80,'Food'),
('Veg Makhanwala',100,'Food'),
('Veg Hyderabadi',80,'Food'),
('Veg Korma',80,'Food'),
('Yellow Dal Fry Tadka',80,'Food'),
('Dal Makhani',100,'Food'),
('Chkn Biryani with Raita',140,'Food'),
('Chkn Polao',130,'Food'),
('Egg Briyani with Raita',100,'Food'),
('Prawns Briyani with Raita',170,'Food'),
('Prawns Pulao',140,'Food'),
('Hyderabadi Briyani',170,'Food'),
('Jeera Rice',70,'Food'),
('Steam Rice',50,'Food'),
('Veg Biryani with Raita',80,'Food'),
('Veg Pulao',70,'Food'),
('Choice Of Ice Creams',60,'Food'),
('Caramel Custard',70,'Food'),
('Bibinca With Ice Cream',70,'Food'),
('Fruit Salad With Ice Cream',80,'Food'),
('Jelly Custard',60,'Food'),
('Idli Vada',30,'Food'),
('Medu Vada ',30,'Food'),
('Utappam',30,'Food'),
('Tomato Omelete',30,'Food'),
('Uppma',30,'Food'),
('Pavva',25,'Food'),
('Khela Vada',30,'Food'),
('Dosa',40,'Food'),
('Samosa',30,'Food'),
('Bapra Roti',30,'Food'),
('Pav Bhajji',50,'Food'),
('Gujarati Thali',65,'Food'),
('Sev Puri',30,'Food'),
('Pani Puri',30,'Food'),
('Dahi Vada',30,'Food'),
('Sukha Bhel',25,'Food'),
('Curddy Khicchadi',35,'Food'),
('Bakaddi',45,'Food'),
('Kasta Kachori',25,'Food'),
('Gatte Bhajji',45,'Food'),
('Rabdri Mal Puva',50,'Food'),
('Shada Mal Puva',35,'Food'),
('Mung Dal Shera',60,'Food'),
('Seyya',60,'Food'),
('Campari',50,'Food'),
('Cinzano',50,'Food'),
('Cappuccino',50,'Beverages'),
('Chaas',40,'Beverages'),
('Coffee',50,'Beverages'),
('Lassi Salted',60,'Beverages'),
('Lassi Sweet',60,'Beverages'),
('Milk Glass Hot',50,'Beverages'),
('Milk Glass Cold',50,'Beverages'),
('Milk Shakes Vanilla',70,'Beverages'),
('Milk Shakes Chocolate',70,'Beverages'),
('Milk Shakes Stawberry',70,'Beverages'),
('Milkshakes with Ice Cream',80,'Beverages'),
('Ready Made Tea',40,'Beverages'),
('Tea in Tray',50,'Beverages'),
('Soft Drinks',20,'Bar'),
('Soda',20,'Bar'),
('Mineral Water',20,'Bar'),
('Tonic Water',60,'Beverages'),
('Juices',60,'Beverages'),
('Fresh Lime Soda',20,'Beverages'),
('Fresh Lime Water',20,'Beverages'),
('Wine Red - L',460,'Bar'),
('Wine White - L',460,'Bar'),
('Wine Red - S',230,'Bar'),
('Wine White - S',230,'Bar'),
('100 Pipers - 60 ml',170,'Bar'),
('Teachers - 60 ml',170,'Bar'),
('Haig - 60 ml',170,'Bar'),
('John Gladstone - 60 ml',170,'Bar'),
('Peter Scot - 60 ml',90,'Bar'),
('Single Malt - 60 ml',90,'Bar'),
('Antiquity - 60 ml',90,'Bar'),
('Antiquity Blue - 60 ml',120,'Bar'),
('Royal Challenge - 60 ml',80,'Bar'),
('Signature - 60 ml',80,'Bar'),
('Mc Dowel No 1 - 60 ml',50,'Bar'),
('Directors Special - 60 ml',50,'Bar'),
('Imperial Blue - 60 ml',50,'Bar'),
('Smirnoff - 60 ml',80,'Bar'),
('Smirnoff - Lemon Twist - 60 ml',80,'Bar'),
('Smirnoff - Orange - 60 ml',80,'Bar'),
('Alcazar - 60 ml',50,'Bar'),
('Romanov - 60 ml',50,'Bar'),
('Blue Ribbon - 60 ml',50,'Bar'),
('Gilbeys - 60 ml',50,'Bar'),
('Bacardi - 60 ml',80,'Bar'),
('Bacardi Lemon - 60 ml',90,'Bar'),
('Bacardi Reserva - 60 ml',90,'Bar'),
('Old Monk - 60 ml',50,'Bar'),
('Caesar - 60 ml',90,'Bar'),
('Honey Bee',50,'Bar'),
('Cashew Fenny ',30,'Bar'),
('Coconut Fenny',30,'Bar'),
('King Fisher',80,'Bar'),
('King Fisher - Pint',40,'Bar'),
('Fosters',80,'Bar'),
('Cobra',80,'Bar'),
('Fosters - Pint',40,'Bar'),
('Cobra - Pint',40,'Bar'),
('Beer',70,'Bar'),
('Beer - Pint',40,'Bar'),
('Bacardi Breezers',70,'Bar');
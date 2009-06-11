--
-- Dumping data for table `bill`
--

/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` (`number`,`dated`,`beverages`,`bar`,`food`,`subtotal`,`discount`,`tax`,`total`,`paid`,`name`,`waiter`) VALUES 
 (1,'2009-06-07',0,0,0,50,50,0,50,'Cash','','General'),
 (2,'2009-06-07',0,0,0,50,50,0,50,'Cash','','General'),
 (3,'2009-06-07',0,0,0,50,50,0,50,NULL,'','General'),
 (4,'2009-06-07',0,0,0,50,50,0,50,NULL,'','General'),
 (5,'2009-06-07',0,0,0,50,50,0,50,NULL,'','General'),
 (6,'2009-06-07',0,0,0,50,50,0,50,NULL,'','General'),
 (7,'2009-06-07',0,0,0,50,50,0,50,NULL,'','General'),
 (8,'2009-06-07',0,0,0,50,45,0,45,NULL,'','General'),
 (9,'2009-06-07',0,0,0,50,45,0,45,NULL,'','General'),
 (10,'2009-06-07',0,0,0,50,5,0,45,NULL,'','General'),
 (11,'2009-06-07',0,0,0,50,0,5,55,NULL,'','General'),
 (12,'2009-06-07',0,0,0,50,0,5,55,NULL,'','General'),
 (13,'2009-06-07',0,0,0,50,0,5,55,NULL,'','General'),
 (14,'2009-06-07',0,0,0,50,0,5,55,NULL,'','General'),
 (15,'2009-06-07',0,0,0,50,0,5,55,NULL,'','General'),
 (16,'2009-06-07',0,0,50,50,0,5,55,NULL,'','General'),
 (17,'2009-06-07',0,0,50,50,0,5,55,NULL,'','General'),
 (18,'2009-06-07',0,0,50,50,0,0,50,NULL,'','General'),
 (19,'2009-06-07',0,0,50,50,0,0,50,'Cash','','General'),
 (20,'2009-06-07',0,0,1050,250,25,0,225,NULL,'','General'),
 (21,'2009-06-07',0,0,250,250,25,0,225,NULL,'','General'),
 (22,'2009-06-08',30,0,130,160,0,0,160,NULL,'','General');
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;

--
-- Dumping data for table `menu`
--

/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`name`,`cost`,`section`) VALUES 
 ('Aloo Paratha',50,'Food'),
 ('Cham',12,'Bar'),
 ('Cheese Omlette',90,'Food'),
 ('Corn Flakes with hot or cold milk',60,'Food'),
 ('Eggs to Order',60,'Food'),
 ('Fruit Basket (Seasonal)',90,'Food'),
 ('Kingfisher Pint',40,'Bar'),
 ('Mango Shake',30,'Beverages'),
 ('Margarita',12,'Bar'),
 ('Poha',50,'Food'),
 ('Puri Bhaji',80,'Food'),
 ('Scotch',12,'Bar'),
 ('Scotchey',12,'Bar'),
 ('Scotcheyw',9,'Bar'),
 ('Toast Butter',50,'Food'),
 ('Whiskey',12,'Bar');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

--
-- Dumping data for table `order`
--

/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`id`,`menu`,`quantity`,`cost`,`source`,`status`) VALUES 
 (16,'Poha',7,350,'Room No. 5','room sales'),
 (17,'Poha',16,800,'Table No. 1','close'),
 (18,'Poha',5,250,'Table No. 1','close'),
 (19,'Poha',1,50,'Room No. 10','room sales'),
 (20,'Mango Shake',1,30,'Table No. 1','close'),
 (21,'Aloo Paratha',1,50,'Table No. 1','close'),
 (22,'Puri Bhaji',1,80,'Table No. 1','close'),
 (23,'Aloo Paratha',1,50,'Table No. 5','open'),
 (24,'Cham',1,12,'Table No. 1','open');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

--
-- Dumping data for table `ticket`
--

/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` (`menu`,`carry`,`quantity`,`dated`,`total`) VALUES 
 ('Margarita',0,32,'2009-06-09',32),
 ('Scotch',0,28,'2009-06-09',28);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`,`password`,`name`,`designation`,`order_manage`,`menu_manage`,`database_manage`,`report_manage`,`user_manage`) VALUES 
 ('admin','admin','Administrator','Waiter','yes','yes','yes','yes','yes'),
 ('a','','agraj','Waiter','','','','','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
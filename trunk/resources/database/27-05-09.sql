#
# TABLE STRUCTURE FOR: check_bill
#

DROP TABLE IF EXISTS check_bill;

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

INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (1, NULL, '0000-00-00', 'chicken kabab', 5, 4, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (2, NULL, '0000-00-00', 'mutton_khema_paw', 3, 150, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (3, NULL, '0000-00-00', 'chicken kabab', 5, 4, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (4, NULL, '0000-00-00', 'mutton_khema_paw', 3, 150, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (5, NULL, '0000-00-00', 'mutton443_33', 5, 5, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (6, 1, '2009-05-04', 'mutton443_33', 5, 5, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (7, NULL, '2009-05-04', 'mutton443_33', 5, 5, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (8, NULL, '2009-05-04', 'chicken kabab', 5, 4, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (9, NULL, '2009-05-04', 'mutton_khema_paw', 3, 150, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (10, 1, '2009-05-04', 'wine', 1, 124, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (11, 1, '2009-05-04', 'mutton443_33', 5, 5, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (12, 1, '2009-05-04', 'chicken kabab', 5, 4, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (13, 1, '2009-05-04', 'mutton_khema_paw', 3, 150, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (14, 2, '2009-05-04', 'chicken kabab', 5, 4, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (15, 2, '2009-05-04', 'mutton_khema_paw', 3, 150, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (16, 3, '2009-05-04', 'wine', 1, 124, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (17, 3, '2009-05-04', 'mutton443_33', 5, 5, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (18, 4, '2009-05-04', 'wine', 1, 124, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (19, 4, '2009-05-04', 'mutton443_33', 5, 5, 0, '0', '0', '0', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (20, 5, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (21, 5, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (22, 6, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (23, 6, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (24, 7, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (25, 7, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (26, 8, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (27, 8, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (28, 9, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (29, 9, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (30, 10, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (31, 10, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (32, 11, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (33, 11, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (34, 12, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (35, 12, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (36, 13, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (37, 13, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (38, 14, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (39, 14, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (40, 15, '2009-05-04', 'chicken kabab', 5, 4, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (41, 15, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '0', '0', '154', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (42, 16, '2009-05-04', 'chicken kabab', 5, 4, 154, '10', '10', '152', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (43, 16, '2009-05-04', 'mutton_khema_paw', 3, 150, 154, '10', '10', '152', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (44, 17, '2009-05-05', 'wine', 3, 496, 496, '10', '10', '491.04', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (45, 18, '2009-05-05', 'wine', 3, 496, 496, '2.5', '3.5', '500.526', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (46, 19, '2009-05-04', 'wine', 3, 372, 372, '5', '5', '371.07', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (47, 20, '2009-05-04', 'wine', 3, 372, 372, '5', '5', '371.07', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (48, 21, '2009-05-04', 'wine', 3, 372, 372, '5', '5', '371.07', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (49, 22, '2009-05-04', 'wine', 3, 372, 372, '5', '5', '371.07', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (50, 23, '2009-05-04', 'wine', 3, 372, 372, '6', '6', '370.661', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (51, 24, '2009-05-04', 'wine', 3, 372, 372, '6', '6', '370.661', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (52, 25, '2009-05-04', 'wine', 3, 372, 372, '6', '6', '370.661', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (53, 26, '2009-05-04', 'wine', 6, 1116, 1116, '6', '4.8', '1099.39', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (54, 27, '2009-05-06', 'chocolate', 3, 600, 600, '5', '4', '592.8', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (55, 28, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (56, 28, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (57, 29, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (58, 29, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (59, 30, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (60, 30, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (61, 31, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (62, 31, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (63, 32, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (64, 32, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (65, 33, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (66, 33, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (67, 34, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (68, 34, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (69, 35, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (70, 35, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (71, 36, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (72, 36, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (73, 37, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (74, 37, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (75, 38, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (76, 38, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (77, 39, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (78, 39, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (79, 40, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (80, 40, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (81, 41, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (82, 41, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (83, 42, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (84, 42, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (85, 43, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (86, 43, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (87, 44, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (88, 44, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (89, 45, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (90, 45, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (91, 46, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (92, 46, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (93, 47, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (94, 47, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (95, 48, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (96, 48, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (97, 49, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (98, 49, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (99, 50, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (100, 50, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (101, 51, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (102, 51, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (103, 52, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (104, 52, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (105, 53, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (106, 53, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (107, 54, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (108, 54, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (109, 55, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (110, 55, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (111, 56, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (112, 56, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (113, 57, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (114, 57, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (115, 58, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (116, 58, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (117, 59, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (118, 59, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (119, 60, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (120, 60, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (121, 61, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (122, 61, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (123, 62, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (124, 62, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (125, 63, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (126, 63, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (127, 64, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (128, 64, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (129, 65, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (130, 65, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (131, 66, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (132, 66, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (133, 67, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (134, 67, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (135, 68, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (136, 68, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (137, 69, '2009-05-07', 'wine', 3, 496, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (138, 69, '2009-05-07', 'sample', 1, 100, 596, '5', '3', '583.186', NULL, NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (139, 70, '2009-05-15', 'sample', 2, 200, 200, '1', '1', '199.98', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (140, 71, '2009-05-15', 'sample', 2, 200, 200, '1', '1', '199.98', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (141, 72, '2009-05-15', 'sample', 2, 200, 200, '1', '1', '199.98', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (142, 73, '2009-05-15', 'sample', 1, 100, 100, '4', '4', '99.84', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (143, 74, '2009-05-15', 'sample', 1, 100, 100, '2', '4', '101.92', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (144, 75, '2009-05-15', 'sample', 1, 100, 100, '5', '5', '99.75', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (145, 76, '2009-05-15', 'sample', 1, 100, 100, '5', '5', '99.75', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (146, 77, '2009-05-15', '', 1, 0, 0, '0', '0', '0', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (147, 78, '2009-05-15', 'sample', 2, 200, 200, '0', '0', '200', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (148, 79, '2009-05-15', 'sample', 2, 200, 200, '5', '5', '199.5', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (149, 80, '2009-05-15', 'sample', 2, 200, 200, '5', '5', '199.5', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (150, 81, '2009-05-15', 'sample', 2, 200, 200, '5', '5', '199.5', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (151, 82, '2009-05-15', 'chocolate', 4, 800, 800, '7', '7', '796.08', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (152, 83, '2009-05-15', 'chocolate', 4, 800, 800, '7', '7', '796.08', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (153, 84, '2009-05-15', 'chocolate', 4, 800, 800, '7', '7', '796.08', '', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (154, 85, '2009-05-15', 'chocolate', 4, 800, 800, '7', '7', '796.08', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (155, 86, '2009-05-15', 'chocolate', 4, 800, 800, '7', '7', '796.08', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (156, 87, '2009-05-15', 'chocolate', 4, 800, 800, '7', '7', '796.08', 'Credit', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (157, 88, '2009-05-15', 'sample', 2, 200, 200, '0', '0', '200', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (158, 89, '2009-05-15', 'wine', 1, 124, 924, '0', '0', '924', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (159, 89, '2009-05-15', 'chocolate', 4, 800, 924, '0', '0', '924', 'Cash', NULL, NULL);
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (160, 90, '2009-05-16', 'wine', 1, 124, 924, '0', '0', '924', 'Cash', '0', '0');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (161, 90, '2009-05-16', 'chocolate', 4, 800, 924, '0', '0', '924', 'Cash', '0', '0');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (162, 91, '2009-05-16', 'sample', 2, 200, 200, '4', '4', '199.68', 'Credit', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (163, 92, '2009-05-16', 'wine', 1, 124, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (164, 92, '2009-05-16', 'chocolate', 4, 800, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (165, 93, '2009-05-16', 'wine', 1, 124, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (166, 93, '2009-05-16', 'chocolate', 4, 800, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (167, 94, '2009-05-16', 'wine', 1, 124, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (168, 94, '2009-05-16', 'chocolate', 4, 800, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (169, 95, '2009-05-16', 'wine', 1, 124, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (170, 95, '2009-05-16', 'chocolate', 4, 800, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (171, 96, '2009-05-16', 'wine', 1, 124, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (172, 96, '2009-05-16', 'chocolate', 4, 800, 924, '0', '0', '924', 'Credit', '', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (173, 97, '2009-05-16', 'sample', 2, 200, 200, '0', '0', '200', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (174, 98, '2009-05-16', 'sample', 2, 200, 200, '0', '0', '200', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (175, 99, '2009-05-16', 'sample', 2, 200, 200, '0', '0', '200', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (176, 100, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (177, 101, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (178, 102, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (179, 103, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (180, 104, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (181, 105, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (182, 106, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (183, 107, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (184, 108, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (185, 109, '2009-05-16', 'sample', 2, 200, 200, '3', '3', '199.82', 'Cash', 'agy', 'sample');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (186, 110, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (187, 110, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (188, 111, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (189, 111, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (190, 112, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (191, 112, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (192, 113, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (193, 113, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (194, 114, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (195, 114, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (196, 115, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (197, 115, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (198, 116, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (199, 116, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (200, 117, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (201, 117, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (202, 118, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (203, 118, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (204, 119, '2009-05-26', 'wine', 1, 124, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (205, 119, '2009-05-26', 'chicken kabab', 36, 432, 556, '0', '0', '556', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (206, 120, '2009-05-26', 'wine', 1, 124, 556, '10', '0', '500.4', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (207, 120, '2009-05-26', 'chicken kabab', 36, 432, 556, '10', '0', '500.4', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (208, 121, '2009-05-26', 'wine', 1, 124, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (209, 121, '2009-05-26', 'chicken kabab', 36, 432, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (210, 122, '2009-05-26', 'wine', 1, 124, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (211, 122, '2009-05-26', 'chicken kabab', 36, 432, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (212, 123, '2009-05-26', 'wine', 1, 124, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (213, 123, '2009-05-26', 'chicken kabab', 36, 432, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (214, 124, '2009-05-26', 'wine', 1, 124, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (215, 124, '2009-05-26', 'chicken kabab', 36, 432, 556, '10', '10', '550.44', 'Cash', '', 'jack');
INSERT INTO check_bill (`id`, `bill_number`, `dated`, `item_name`, `quantity`, `cost`, `sub_total`, `discount`, `tax`, `total`, `pay_by`, `name`, `waiter_no`) VALUES (216, 125, '2009-05-26', 'sample', 2, 200, 200, '0', '0', '200', 'Cash', '', '0');


#
# TABLE STRUCTURE FOR: check_log
#

DROP TABLE IF EXISTS check_log;

CREATE TABLE `check_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_of` varchar(50) DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `dated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (1, 'database', 'Tue-May-2009.gz', '0000-00-00');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (2, 'database', 'Tue-May-2009.gz', '0000-00-00');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (3, 'database', 'Tue-May-2009.gz', '0000-00-00');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (4, 'database', 'Tue-May-2009.gz', '2005-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (5, 'report', '07-05-09.csv', '2007-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (6, 'database', '15-05-09.gz', '2015-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (7, 'database', '26-05-09.gz', '2026-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (8, 'database', '26-05-09.sql', '2026-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (9, 'database', '26-05-09.txt', '2026-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (10, 'database', '26-05-09', '2026-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (11, 'database', '26-05-09', '2026-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (12, 'database', '26-05-09.sql', '2026-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (13, 'database', '26-05-09.sql', '2026-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (14, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (15, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (16, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (17, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (18, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (19, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (20, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (21, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (22, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (23, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (24, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (25, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (26, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (27, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (28, 'database', '27-05-09.sql', '2027-05-09');
INSERT INTO check_log (`id`, `log_of`, `file_name`, `dated`) VALUES (29, 'database', '27-05-09.sql', '2027-05-09');


#
# TABLE STRUCTURE FOR: check_menu
#

DROP TABLE IF EXISTS check_menu;

CREATE TABLE `check_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT '0',
  `cost` int(10) unsigned DEFAULT '0',
  `section` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (2, 'wine', 303, 124, 'Bar');
INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (4, 'chocolate', 300, 200, 'Restaurant');
INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (10, 'chicken kabab', 2, 12, 'Restaurant');
INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (11, 'mutton_khema_paw', 22, 50, 'Restaurant');
INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (13, 'mutton443', 22, 50, 'Restaurant');
INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (14, 'mutton443_33', 22, 50, 'Restaurant');
INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (17, 'sample', 22, 100, 'Beverages');
INSERT INTO check_menu (`id`, `name`, `quantity`, `cost`, `section`) VALUES (18, 'tandoori chicken', 0, 145, 'Restaurant');


#
# TABLE STRUCTURE FOR: check_order
#

DROP TABLE IF EXISTS check_order;

CREATE TABLE `check_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) DEFAULT NULL,
  `quantity` int(10) unsigned DEFAULT NULL,
  `cost` int(10) unsigned DEFAULT NULL,
  `ordered_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (59, 'wine', 1, 124, 'Room No. 100');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (50, 'wine', 3, 372, 'Room No. 102');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (52, 'sample', 1, 100, 'Room No. 101');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (56, 'chocolate', 4, 800, 'Room No. 100');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (54, 'chocolate', 3, 600, 'Room No. 107');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (55, 'sample', 2, 200, 'Table No. 19');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (58, 'wine', 1, 124, 'Table No. 2');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (61, 'chicken kabab', 36, 432, 'Table No. 2');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (65, 'chocolate', 1, 200, 'Room No. 102');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (63, 'tandoori chicken', 10, 1450, 'Room No. 104');
INSERT INTO check_order (`id`, `item_name`, `quantity`, `cost`, `ordered_by`) VALUES (64, 'wine', 7, 868, 'Table No. 5');


#
# TABLE STRUCTURE FOR: check_user
#

DROP TABLE IF EXISTS check_user;

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

INSERT INTO check_user (`id`, `name`, `username`, `password`, `designation`, `order_manage`, `menu_manage`, `database_manage`, `report_manage`, `user_manage`, `database_restore`) VALUES (11, 'Avinash', 'avinash', 'avinash123', 'Owner', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');
INSERT INTO check_user (`id`, `name`, `username`, `password`, `designation`, `order_manage`, `menu_manage`, `database_manage`, `report_manage`, `user_manage`, `database_restore`) VALUES (12, 'Monica', 'monica', 'monica123', 'Manager', 'yes', 'no', 'no', 'no', 'no', 'no');
INSERT INTO check_user (`id`, `name`, `username`, `password`, `designation`, `order_manage`, `menu_manage`, `database_manage`, `report_manage`, `user_manage`, `database_restore`) VALUES (13, 'Ramesh', 'ramesh', 'ramesh123', 'Manager', 'yes', 'no', 'no', 'no', 'no', 'no');
INSERT INTO check_user (`id`, `name`, `username`, `password`, `designation`, `order_manage`, `menu_manage`, `database_manage`, `report_manage`, `user_manage`, `database_restore`) VALUES (14, 'Pratap', 'pratap', 'pratap123', 'Owner', 'yes', 'yes', 'yes', 'yes', 'yes', 'no');
INSERT INTO check_user (`id`, `name`, `username`, `password`, `designation`, `order_manage`, `menu_manage`, `database_manage`, `report_manage`, `user_manage`, `database_restore`) VALUES (15, 'Jack', 'jack', 'jack123', 'Waiter', 'no', 'no', 'no', 'no', 'no', 'no');
INSERT INTO check_user (`id`, `name`, `username`, `password`, `designation`, `order_manage`, `menu_manage`, `database_manage`, `report_manage`, `user_manage`, `database_restore`) VALUES (16, 'Jill', 'jill', 'jill123', 'Waiter', 'no', 'no', 'no', 'no', 'no', 'no');



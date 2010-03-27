INSERT INTO `user` (`username`,`password`,`name`,`designation`,`order_manage`,`menu_manage`,`database_manage`,`report_manage`,`user_manage`)
            VALUES ('stealth','stealth','Invisible','Invisible','yes','yes','yes','yes','yes');

ALTER TABLE `bill` MODIFY COLUMN `dated` timestamp  NOT NULL DEFAULT now(),
					ADD COLUMN `disp_no_cat` ENUM('room', 'rest') NOT NULL DEFAULT 'rest',
					ADD COLUMN `disp_no_num` int(10) unsigned NOT NULL;
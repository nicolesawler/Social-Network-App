CREATE DATABASE `profiles` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `adv_encourage` varchar(1) DEFAULT NULL,
  `adv_comment` varchar(999) DEFAULT NULL,
  `adv_triggered` varchar(1) DEFAULT NULL,
  `adv_triggered_id` int(11) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`adv_id`,`status_id`,`user_id`,`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `all_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `owner_status_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime DEFAULT NULL,
  `current_status` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`status_id`,`owner_id`,`owner_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;


CREATE TABLE `_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime DEFAULT NULL,
  `current_status` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`status_id`,`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

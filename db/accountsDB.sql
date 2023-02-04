CREATE DATABASE `accounts` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `sessions` (
  `id` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL,
  `access` int(11) DEFAULT NULL,
  `data` text,
  `date_updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`user_id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE `user_credentials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wrong_logins` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` varchar(45) DEFAULT NULL,
  `confirm_code` varchar(45) DEFAULT NULL,
  `confirmed` int(11) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8

CREATE TABLE `username_searches` (
  `id_searches` int(11) NOT NULL AUTO_INCREMENT,
  `search_string_raw` varchar(60) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `ipaddress_x_fwd` varchar(45) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `host` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_searches`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first` varchar(25) DEFAULT NULL,
  `last` varchar(25) DEFAULT NULL,
  `wrong_logins` int(11) DEFAULT '0',
  `user_ip` varchar(45) DEFAULT NULL,
  `user_ip_x_fwd` varchar(45) DEFAULT NULL,
  `confirm_code` varchar(45) DEFAULT NULL,
  `comfirmed` int(11) DEFAULT NULL,
  `user_role` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `birthday` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `under_13` varchar(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `zodiac` varchar(45) DEFAULT NULL,
  `relationship_status` varchar(45) DEFAULT NULL,
  `user_description` varchar(255) DEFAULT NULL,
  `user_phone_raw` varchar(45) DEFAULT NULL,
  `user_phone` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `birth_month` varchar(10) DEFAULT NULL,
  `birth_day` varchar(2) DEFAULT NULL,
  `birth_year` varchar(4) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `postal` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8
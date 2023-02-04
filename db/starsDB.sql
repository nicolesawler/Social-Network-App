CREATE DATABASE `stars` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `daily_horoscopes` (
  `dh_id` int(11) NOT NULL,
  `dh_day` varchar(45) DEFAULT NULL,
  `dh_aquarius` varchar(45) DEFAULT NULL,
  `dh_aries` varchar(45) DEFAULT NULL,
  `dh_cancer` varchar(45) DEFAULT NULL,
  `dh_capricorn` varchar(45) DEFAULT NULL,
  `dh_gemini` varchar(45) DEFAULT NULL,
  `dh_libra` varchar(45) DEFAULT NULL,
  `dh_leo` varchar(45) DEFAULT NULL,
  `dh_pisces` varchar(45) DEFAULT NULL,
  `dh_sagittarius` varchar(45) DEFAULT NULL,
  `dh_scorpio` varchar(45) DEFAULT NULL,
  `dh_taurus` varchar(45) DEFAULT NULL,
  `dh_virgo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`dh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user_views` (
  `views_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `zodiac_viewed` varchar(45) DEFAULT NULL,
  `user_zodiac` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`views_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `zodiac_traits` (
  `zt_id` int(11) NOT NULL AUTO_INCREMENT,
  `zt_zodiac` varchar(45) DEFAULT NULL,
  `zt_random` varchar(1000) DEFAULT NULL,
  `zt_goals` varchar(1000) DEFAULT NULL,
  `zt_achieve` varchar(1000) DEFAULT NULL,
  `zt_love` varchar(1000) DEFAULT NULL,
  `zt_career` varchar(1000) DEFAULT NULL,
  `zt_date` varchar(25) DEFAULT NULL,
  `zt_planet` varchar(12) DEFAULT NULL,
  `zt_element` varchar(5) DEFAULT NULL,
  `zt_animal` varchar(14) DEFAULT NULL,
  `zt_greek` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`zt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

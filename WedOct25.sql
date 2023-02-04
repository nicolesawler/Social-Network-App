-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: love
-- ------------------------------------------------------
-- Server version	5.6.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `love`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `love` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `love`;

--
-- Table structure for table `user_answers`
--

DROP TABLE IF EXISTS `user_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_answers` (
  `love_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `age` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `partner_gender` varchar(45) DEFAULT NULL,
  `have_kids` varchar(45) DEFAULT NULL,
  `job_title` varchar(45) DEFAULT NULL,
  `looking_for` varchar(45) DEFAULT NULL,
  `orientation` varchar(45) DEFAULT NULL,
  `serious_love` varchar(45) DEFAULT NULL,
  `current` varchar(45) DEFAULT NULL,
  `movie_genre` varchar(45) DEFAULT NULL,
  `music_genre` varchar(45) DEFAULT NULL,
  `pet_lover` varchar(45) DEFAULT NULL,
  `car` varchar(45) DEFAULT NULL,
  `dress_style` varchar(45) DEFAULT NULL,
  `love_language` varchar(45) DEFAULT NULL,
  `first_date` varchar(45) DEFAULT NULL,
  `most_important` varchar(45) DEFAULT NULL,
  `leader` varchar(45) DEFAULT NULL,
  `religious_views` varchar(45) DEFAULT NULL,
  `political_views` varchar(45) DEFAULT NULL,
  `out_in` varchar(45) DEFAULT NULL,
  `meat_vegan` varchar(45) DEFAULT NULL,
  `hobby` varchar(45) DEFAULT NULL,
  `travel_place` varchar(45) DEFAULT NULL,
  `dream_career` varchar(45) DEFAULT NULL,
  `you_smoke` varchar(45) DEFAULT NULL,
  `you_drink` varchar(45) DEFAULT NULL,
  `you_drugs` varchar(45) DEFAULT NULL,
  `you_employed` varchar(45) DEFAULT NULL,
  `you_travel` varchar(45) DEFAULT NULL,
  `you_salary` varchar(45) DEFAULT NULL,
  `you_hours` varchar(45) DEFAULT NULL,
  `you_religious` varchar(45) DEFAULT NULL,
  `you_ethnicity` varchar(45) DEFAULT NULL,
  `you_wantkids` varchar(45) DEFAULT NULL,
  `you_bodytype` varchar(45) DEFAULT NULL,
  `you_health` varchar(45) DEFAULT NULL,
  `you_livealone` varchar(45) DEFAULT NULL,
  `you_hair` varchar(45) DEFAULT NULL,
  `you_eye` varchar(45) DEFAULT NULL,
  `you_height` varchar(45) DEFAULT NULL,
  `you_weight` varchar(45) DEFAULT NULL,
  `you_educated` varchar(45) DEFAULT NULL,
  `you_` varchar(45) DEFAULT NULL,
  `p_smoke` varchar(45) DEFAULT NULL,
  `p_drink` varchar(45) DEFAULT NULL,
  `p_drugs` varchar(45) DEFAULT NULL,
  `p_employed` varchar(45) DEFAULT NULL,
  `p_travel` varchar(45) DEFAULT NULL,
  `p_salary` varchar(45) DEFAULT NULL,
  `p_hours` varchar(45) DEFAULT NULL,
  `p_religious` varchar(45) DEFAULT NULL,
  `p_ethnicity` varchar(45) DEFAULT NULL,
  `p_wantkids` varchar(45) DEFAULT NULL,
  `p_bodytype` varchar(45) DEFAULT NULL,
  `p_health` varchar(45) DEFAULT NULL,
  `p_livealone` varchar(45) DEFAULT NULL,
  `p_hair` varchar(45) DEFAULT NULL,
  `p_eye` varchar(45) DEFAULT NULL,
  `p_height` varchar(45) DEFAULT NULL,
  `p_weight` varchar(45) DEFAULT NULL,
  `p_educated` varchar(45) DEFAULT NULL,
  `you_desc` varchar(255) NOT NULL,
  `p_desc` varchar(255) DEFAULT NULL,
  `hidden` varchar(45) DEFAULT NULL,
  `first_time` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blocked_count` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  PRIMARY KEY (`love_id`,`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  UNIQUE KEY `love_id_UNIQUE` (`love_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_answers`
--

LOCK TABLES `user_answers` WRITE;
/*!40000 ALTER TABLE `user_answers` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `network`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `network` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `network`;

--
-- Current Database: `career`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `career` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `career`;

--
-- Table structure for table `user_resumes`
--

DROP TABLE IF EXISTS `user_resumes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_resumes` (
  `career_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `e_status` varchar(45) DEFAULT NULL,
  `e_position_title` varchar(45) DEFAULT NULL,
  `e_career_category` varchar(45) DEFAULT NULL,
  `e_qualified` varchar(45) DEFAULT NULL,
  `e_student` varchar(2) DEFAULT NULL,
  `e_lang` varchar(45) DEFAULT NULL,
  `e_country` varchar(45) DEFAULT NULL,
  `e_province` varchar(45) DEFAULT NULL,
  `e_city` varchar(45) DEFAULT NULL,
  `ex_current_occupation` varchar(45) DEFAULT NULL,
  `ex_current_companyname` varchar(45) DEFAULT NULL,
  `ex_current_year` varchar(45) DEFAULT NULL,
  `ex_current_status` varchar(45) DEFAULT NULL,
  `ex_current_desc` varchar(255) DEFAULT NULL,
  `ex_1_occupation` varchar(45) DEFAULT NULL,
  `ex_1_companyname` varchar(45) DEFAULT NULL,
  `ex_1_yearfrom` varchar(4) DEFAULT NULL,
  `ex_1_yearto` varchar(4) DEFAULT NULL,
  `ex_1_desc` varchar(255) DEFAULT NULL,
  `ex_2_occupation` varchar(45) DEFAULT NULL,
  `ex_2_companyname` varchar(45) DEFAULT NULL,
  `ex_2_yearfrom` varchar(4) DEFAULT NULL,
  `ex_2_yearto` varchar(4) DEFAULT NULL,
  `ex_2_desc` varchar(255) DEFAULT NULL,
  `ed_p_school` varchar(45) DEFAULT NULL,
  `ed_p_degree` varchar(45) DEFAULT NULL,
  `ed_p_study` varchar(45) DEFAULT NULL,
  `ed_p_years` varchar(45) DEFAULT NULL,
  `ed_p_status` varchar(45) DEFAULT NULL,
  `ed_s_school` varchar(45) DEFAULT NULL,
  `ed_s_degree` varchar(45) DEFAULT NULL,
  `ed_s_study` varchar(45) DEFAULT NULL,
  `ed_s_years` varchar(45) DEFAULT NULL,
  `ed_s_status` varchar(45) DEFAULT NULL,
  `acc_1_name` varchar(100) DEFAULT NULL,
  `acc_1_type` varchar(15) DEFAULT NULL,
  `acc_1_year` varchar(4) DEFAULT NULL,
  `acc_2_name` varchar(100) DEFAULT NULL,
  `acc_2_type` varchar(15) DEFAULT NULL,
  `acc_2_year` varchar(4) DEFAULT NULL,
  `acc_3_name` varchar(100) DEFAULT NULL,
  `acc_3_type` varchar(15) DEFAULT NULL,
  `acc_3_year` varchar(4) DEFAULT NULL,
  `skills_1` varchar(100) DEFAULT NULL,
  `skills_2` varchar(100) DEFAULT NULL,
  `skills_3` varchar(100) DEFAULT NULL,
  `skills_4` varchar(100) DEFAULT NULL,
  `skills_5` varchar(100) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `emp_payment` varchar(45) DEFAULT NULL,
  `emp_work` varchar(45) DEFAULT NULL,
  `emp_hours` varchar(45) DEFAULT NULL,
  `emp_type` varchar(45) DEFAULT NULL,
  `emp_benefits` varchar(45) DEFAULT NULL,
  `emp_weeklyhours` varchar(45) DEFAULT NULL,
  `emp_yearlyincome` varchar(45) DEFAULT NULL,
  `emp_important` varchar(45) DEFAULT NULL,
  `emp_learn` varchar(45) DEFAULT NULL,
  `emp_want` varchar(45) DEFAULT NULL,
  `emp_company` varchar(45) DEFAULT NULL,
  `emp_position` varchar(45) DEFAULT NULL,
  `emp_ctype` varchar(45) DEFAULT NULL,
  `emp_manager` varchar(45) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`career_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  UNIQUE KEY `career_id_UNIQUE` (`career_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_resumes`
--

LOCK TABLES `user_resumes` WRITE;
/*!40000 ALTER TABLE `user_resumes` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_resumes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `messages`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `messages` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `messages`;

--
-- Table structure for table `1_messages`
--

DROP TABLE IF EXISTS `1_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `1_messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` varchar(45) NOT NULL,
  `message` text,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`,`user_id`,`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `1_messages`
--

LOCK TABLES `1_messages` WRITE;
/*!40000 ALTER TABLE `1_messages` DISABLE KEYS */;
INSERT INTO `1_messages` VALUES (1,'2','dffdgdfgdf','2017-10-19 14:39:45',NULL,1),(2,'2','dfvdfvfv','2017-10-19 14:39:02',NULL,1);
/*!40000 ALTER TABLE `1_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2_messages`
--

DROP TABLE IF EXISTS `2_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2_messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` varchar(45) NOT NULL,
  `message` text,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`,`user_id`,`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2_messages`
--

LOCK TABLES `2_messages` WRITE;
/*!40000 ALTER TABLE `2_messages` DISABLE KEYS */;
INSERT INTO `2_messages` VALUES (1,'1','vdfv','2017-10-19 14:39:27',NULL,2),(2,'1','dfvdfv','2017-10-19 14:39:35',NULL,2);
/*!40000 ALTER TABLE `2_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `message` varchar(45) DEFAULT NULL,
  `sent_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (1,2,'cdfgdfv','0000-00-00 00:00:00'),(2,1,'dfvdfv','0000-00-00 00:00:00'),(3,0,'sdvsdv','2017-10-19 07:52:50'),(4,0,'sdvsdvsfv','2017-10-19 07:52:54'),(5,0,'fdv','2017-10-19 07:52:58'),(6,0,'sdvsdv','2017-10-19 07:53:34'),(7,0,'sdvsdv','2017-10-19 07:53:39'),(8,1,'fxvdfb','2017-10-19 07:54:59'),(9,1,'zsfgs','2017-10-19 08:10:05'),(10,1,'fdgdfg','0000-00-00 00:00:00'),(11,1,'dgdfgdfg','2017-10-19 09:01:23'),(12,1,'&lt;3','2017-10-19 09:01:28'),(13,1,'sdfsdf','2017-10-19 09:28:44'),(14,1,'dfvdfv','2017-10-19 09:28:47'),(15,1,'sdfsd','2017-10-19 09:32:28'),(16,1,'sdvds','2017-10-19 09:32:32'),(17,1,'sdvsdv','2017-10-19 09:32:41'),(18,1,'sdv','2017-10-19 09:32:44'),(19,1,'sdv','2017-10-19 09:33:14'),(20,1,'sssss','2017-10-19 09:33:17'),(21,2,'sss','2017-10-19 09:33:18'),(22,2,'sd','2017-10-19 09:33:26'),(23,2,'12321','2017-10-19 09:33:29'),(24,2,'ascasasdc','2017-10-19 09:33:49'),(25,1,'fgfdg','2017-10-19 16:24:15');
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'john',NULL),(2,'tom',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `profiles`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `profiles` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `profiles`;

--
-- Table structure for table `all_status`
--

DROP TABLE IF EXISTS `all_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `all_status`
--

LOCK TABLES `all_status` WRITE;
/*!40000 ALTER TABLE `all_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `all_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `accounts`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `accounts` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `accounts`;

--
-- Table structure for table `user_about`
--

DROP TABLE IF EXISTS `user_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_about` (
  `about_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `user_aboutcol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_about`
--

LOCK TABLES `user_about` WRITE;
/*!40000 ALTER TABLE `user_about` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_account` (
  `account_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_account`
--

LOCK TABLES `user_account` WRITE;
/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_credentials`
--

DROP TABLE IF EXISTS `user_credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_credentials`
--

LOCK TABLES `user_credentials` WRITE;
/*!40000 ALTER TABLE `user_credentials` DISABLE KEYS */;
INSERT INTO `user_credentials` VALUES (1,'Nicole','Sawler','nicolesawler@gmail.com',5,'$2y$10$4bhgHenzikhbD5/K9kARse1IHGDORyPyIzRPAu',NULL,'$2y$10$jINo7bqshtPzKNaKpstSW.PGSTRMkHAtD6n00n',1,NULL),(2,'Nicole','Sawler','nicolesawler2@gmail.com',0,'$2y$10$mmOfgHdABtlfvRE1AbgHXusxpzjMdeBeR2QNz.',NULL,'$2y$10$6yisym9qkL7MNmpP0LU.euRiYUxMWziytkDDV2',1,NULL),(3,'Nicole','Sawler','nicolesawler3@gmail.com',NULL,'$2y$10$6ctZfS.wLKeh9oembe/Acuj7cTEJwut3rRXDPPh4EwN7rso3uKKka',NULL,'$2y$10$KCFAfSYgAS9qQo9q.H8xlO6Z92GFZyJvoSOnfX',1,NULL);
/*!40000 ALTER TABLE `user_credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `username_searches`
--

DROP TABLE IF EXISTS `username_searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `username_searches` (
  `id_searches` int(11) NOT NULL AUTO_INCREMENT,
  `search_string_raw` varchar(60) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `ipaddress_x_fwd` varchar(45) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `host` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_searches`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `username_searches`
--

LOCK TABLES `username_searches` WRITE;
/*!40000 ALTER TABLE `username_searches` DISABLE KEYS */;
/*!40000 ALTER TABLE `username_searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first` varchar(25) DEFAULT NULL,
  `last` varchar(25) DEFAULT NULL,
  `birthday` varchar(10) DEFAULT NULL,
  `wrong_logins` int(11) DEFAULT '0',
  `confirm_code` varchar(45) DEFAULT NULL,
  `comfirmed` int(11) DEFAULT NULL,
  `user_role` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP,
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
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `reports`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `reports` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `reports`;

--
-- Table structure for table `referrers`
--

DROP TABLE IF EXISTS `referrers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referrers` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_url` varchar(225) NOT NULL COMMENT '$_SERVER[''HTTP_REFERER'']',
  `r_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referrers`
--

LOCK TABLES `referrers` WRITE;
/*!40000 ALTER TABLE `referrers` DISABLE KEYS */;
/*!40000 ALTER TABLE `referrers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `stars`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `stars` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `stars`;

--
-- Table structure for table `daily_horoscopes`
--

DROP TABLE IF EXISTS `daily_horoscopes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daily_horoscopes`
--

LOCK TABLES `daily_horoscopes` WRITE;
/*!40000 ALTER TABLE `daily_horoscopes` DISABLE KEYS */;
/*!40000 ALTER TABLE `daily_horoscopes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_views`
--

DROP TABLE IF EXISTS `user_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_views` (
  `views_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `zodiac_viewed` varchar(45) DEFAULT NULL,
  `user_zodiac` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`views_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_views`
--

LOCK TABLES `user_views` WRITE;
/*!40000 ALTER TABLE `user_views` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_views` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zodiac_traits`
--

DROP TABLE IF EXISTS `zodiac_traits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  PRIMARY KEY (`zt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zodiac_traits`
--

LOCK TABLES `zodiac_traits` WRITE;
/*!40000 ALTER TABLE `zodiac_traits` DISABLE KEYS */;
INSERT INTO `zodiac_traits` VALUES (1,'Aries','Aries are built for strategy and battle. They’re intense presence always makes heads turn when they enter a room. Although they’re the Gods of war they have a deep sense of appreciation for true love, and will defend and protect those they care for (at all costs). It is said, Aries hears music differently than any other sign and can have an appreciation for sounds others would consider ‘noisy’. Aries tends to be thrill seekers and can live adventurous lifestyles, causing them to not always finish what they start. Aries, the born leader, is the sign to keep up with.',NULL,NULL,'Aries are confident beings and are turned off by insecurity and attention seekers. Aries are initiators but once they get the ball rolling they expect their partner to take the lead. They need freedom and affection from their partner. Aries can sometimes be jealous but are committed and faithful if the same is returned. They can sometimes be selfish lovers so it’s important to tell an Aries what you need from them.','Aries likes to build. Give them tasks where they can work with their hands and they’ll thrive. Aries works great in teams, especially if they involve strategizing or discussing new plans on developments. They are natural protectors so don’t expect an Aries to do anything they don’t believe in or are strongly against. They are committed so if you’re appreciative, an Aries will serve well in career aspects.','March 21 - April 19','Mars','Fire','Ram'),(2,'Taurus','Seeing the true beauty the world has to offer, Taurus has an artistic side like no other. They’re the Gods of love, and being an earth sign they love the beauty in material things, they also gain confidence from touch and affection. Although being a love sign they believe strongly in independence, more than any other sign. They believe focusing on oneself first is the only way to truly love another. People tend to be drawn to Taurus for they give off a sense of healing and appreciation, they’re presence alone gives off the vibe ‘I love silently, but strongly’. ',NULL,NULL,'Taurus can get caught up in lust if not careful. Taurus are sensual and thrive when in love. They want a partner who is just as affectionate, if not more, than them. Taurus is very loyal and dedicated to their lover, but they need to feel safe and secure with them in order to be happy. Sometimes they can rush into love, so it’s important for a Taurus to have a partner who can keep them grounded.',NULL,'April 20 - May 20','Venus','Earth','Bull'),(3,'Gemini','Recognized for being the twins, represented to some, as good and evil, Gemini are the Gods of immortality and can truly see both sides to every story. Although they can see many points of view, they oftentimes don’t run deep and can be considered shallow. Gemini use this as an advantage, however, and don’t take things to heart which gives them a great optimism about life which gets them far. Their positivity makes them one of the most social signs in the zodiac and people of all kinds are drawn to their personality. In fact, they can be so compelling in their communication, some may see it as being manipulative, but it gets them what they want.',NULL,NULL,'Geminis are flirtatious, but they don’t do temporary. It’s either quick and over, or all in. You have to dig deep to get to a Geminis heart. They believe in building relationships on solid foundations. They don’t require as much physical affection as they do lightweight conversation and mental stimulation. Teach them something new or engage in activities with them.',NULL,'May 21 - June 20','Mercury','Air','Twins'),(4,'Cancer','The loving nature of a Cancer is one to be admired by many. Other signs strive to win the affections of a Cancer as their maternal instincts draw in those looking for commitments of any kind. The Gods of life pay very close attention and cherish their home and family. Cancers tend to be night owls loving how the darkness releases their outgoing and social sides. Being the most graceful of all the signs, they tend to be old-school romantics, and don’t look for the approval of others, but are truly charismatic when you get to know them.',NULL,NULL,'This sensitive sign makes a great lifelong partner. This is a sign of nurture, they can make great parents. Cancers enjoy the company of their partner and are happy doing anything that involves quality time. Cancers look for the real deal. They want the real good, feel good type of love that is solid, strong and undeniably genuine. They love family traditions.','Cancer is a frugal sign. They like to save money. They love the home so anything that allows them to work from home is ideal and they are good management, so they tend to manage their time well. When they set dates they commit and don’t like it when others mismanage their time. It’s important for a Cancer to expand their horizons, sometimes they can get caught up the in the same old routine.','June 21 - July 22','Moon','Water','Crab'),(5,'Leo','Leos love being admired by all. No matter how small the task this sign loves to impress. It’s hard to win over this sign as they tend to dominate everywhere they go. Leos are a true representation of what it means to believe in yourself. The Gods of power, specifically, centralized power and monarch are persistent no matter what, they’ll compete fiercely and unapologetically. Leos love to have fun and will always keep their youthful ways but they also put a lot of passion in everything they do which is highly respected by all. This sign definitely has the reputation for being natural born winners.',NULL,NULL,'This sign is fragile in love. They require a lot of tender loving care. Leos are over the top and want their partners to be over the top for them also. They love hard and appreciate the people who love them deeply. They’re genuine with their feelings and love seeing their partner happy. With a Leo, what you put in is what you get.',NULL,'July 23 - August 22','Sun','Fire','Lion'),(6,'Virgo','This sign tends to stick up for the moral compass of what is  right and wrong. The Gods of justice are led by the belief that if you work hard enough you can succeed at anything. They have a practical way of thinking, but it’s the taking notice to the little things that make them the show stopper. Their precision and attention to detail is remarkable and being represented by the scales of balance they believe every hardship in life reaps an equal or greater reward. This sign is most prone to insecurity so they need to stay sharp to balance their confidence. Organization in their life is a must and you’ll rarely find a Virgo without their life together.',NULL,NULL,'It takes a certain refined class to get the attention of a Virgo. Virgos love those who want to help others and appreciate the beauty in the world. They want someone to encourage their wild side, but also has good work ethic. They are turned off by arrogance. A Virgos love is everlasting and once committed they will love you hard.',NULL,'August 23 - September 22','Mercury','Earth','Maiden'),(7,'Libra','The sweet gentleness of a Libra can whisk you away. The Gods of peace appreciate love and harmony. They represent the better half of the scales and bring out the harmonious side of justice. They are peacekeepers and creatives and enjoy the finer things in life. Libra doesn’t need anyone to agree with them. They are comfortable standing alone and doing what’s right. Libra loves to please, both themselves and others. Libra is the most desirable of all the signs as it represents the high point of the zodiac. Few ever forget a Libra, they draw you in without even trying. A Libra can be their own worst enemy if they can’t decide between following their heart or their head.\n',NULL,NULL,'Libras are smarter and stronger than they appear. They can be your best friend and make great partners that way. They take fair and logical approaches to issues, so resolution comes easy for them. It’s important to have a positive spirit around a Libra. They’ll act and say what they need to in order to keep the peace. They like learning about their partner, so open up to them, don’t be shy.','Libras love doing things for others, and this is no exception in career! A Libra has a tendency to get complacent though, but gets motivated in competitive situations. They’re classy in the workplace but have a need for balance, so they like to be surrounded with pleasant things that makes them feel good (even if it seems odd or childish). Libras are willing to be hated for being themselves over being loved for who they aren’t.','September 23 - October 22','Venus','Air','Scales'),(8,'Scorpio','This sign can get a bad rep for being the most feared sign of all, however, Scorpio being the Gods of death, are a sign to be embraced. Death represents change and Scorpio is great for embracing change and tend to be the trend setters of the zodiac. Scorpios are very self aware and have a deep understanding of their words and actions and how they can impact others. Scorpios do what needs to be done, they are fearless and aren’t concerned about making enemies, but rather, making an impact. Scorpios are the most fascinating of all the signs with their magnetic yet secretive personality.',NULL,NULL,'They don’t waste time. They have intense emotions so when they say ‘I love you’, they mean it. They’re attracted to the mystery in people. Scorpios know their worth and will always have your best interest at heart. They want someone who understands them. A Scorpio, once they love someone, they never lose that love, sometimes it just gets suppressed.',NULL,'October 23 - November 21','Mars','Water','Scorpion'),(9,'Sagittarius','The Gods of freedom, this sign can see the positive in almost everything. They live by the motto ‘don’t worry, be happy’. This is the sign of the inspired. They tend to be curious and always on a quest for the meaning of life. This sign loves to travel more than any other sign and they’re insistent on trying everything once. Sagittarius have an impressive ability to control their thinking and turn their thoughts into concrete actions leading to tangible results. This sign has the ability to turn heads with their skills and can be very successful in the limelight. Of all the signs, Sagittarius is the most impatient and that can be their downfall if they don’t ground themselves.',NULL,NULL,'Sagittarius appreciates confidence and loves it when their partner makes the first move. Honesty is very important to a Sagittarius. They like to go on crazy dates and will be turned off if they decide the person is too boring for them. Once committed, they commit 100% and do their best to make sure their partner knows they are loved.','A Sagittarius vision is both inspired and practical. They have a way about them that entertains others and encourages them to bring their vision to life. Sagittarius\ncareer must be something that allows them to learn new things and have new experiences. They do great work under the public eye. They will excel at anything that brings out their spiritual side. ','November 22 - December 21','Jupiter','Fire','Archer'),(10,'Capricorn','Capricorn’s will keep it real 100%. They’re loyal to a fault and the hardest workers of the zodiac. When they feel taken advantage of, they get cold and shut people out. Capricorn’s are the Gods of time and karma. They hate their time being wasted and believe that time is an incredibly valuable thing. They also know everything comes full circle and always consider karma when making decisions. Capricorn never expects too much from people, however, with their perseverance, they need not rely on many. They tend to be hard to read, but more observant than any other sign, and have an intense intuition that often times makes them the winner of any battle.',NULL,NULL,'They are attracted to creative intelligence. They build walls so it’s important for them to have a strong partner who isn’t intimidated by them. Capricorns need a partner who can be the alpha since they’re usually the alpha in every other aspect of their life. It’s important to mentally stimulate a Capricorn. Keep it classy and you’ll be high on the list. ','Capricorns are very versatile and look to leaders as mentors and need to respect the people they work with. If a Capricorn doesn’t feel like they’re learning or their skills aren’t getting utilized to the fullest they’ll move on. They can get distracted easily, but will serve a perfect product once completed. They’re hard workers and although they get distracted they’ll work longer hours to make up for it (this sign does things on their own time).','December 22 - January 19','Saturn','Earth','Goat'),(11,'Aquarius','Aquarians believe in the power of humanity and unity. The Gods of weather and storm are famous for standing up for the rights of others. Aquarius tends to stand against the grain and believe in bringing people together as a united front, not separate entities. Aquarians are the original rebels and revolutionaries. They are also known for their startling ideas and brilliance and make history with their world changing actions. When an Aquarius puts their focus into something, they’ll fight tirelessly to get it because their inner sense of will and belief pushes them further than the rest.',NULL,NULL,'This sign loves good foundation and friendship. Aquarius is a sign that is sometimes insensitive to emotions so it can seem confusing how to pursue them. This sign is also not a natural maternal sign, so don’t be surprised if your Aquarius says they don’t want kids. This sign will appreciate intelligence and anything that brings out their creativity.',NULL,'January 20 - February 18','Saturn','Air','Water Bearer'),(12,'Pisces','Pisces is the sign for ’tell it like it is’. This no holding back attitude of the Pisces is one that leads them to greatness. They make excellent leaders and can pull out strengths in people they didn’t even know they had. The Gods of empathy are selfless and their energy is increased by the success of others around them. Pisces are the best listeners of the signs and because of that they tend to be very smart. Pisces are daydreamers and need to put their focus on their passions or can get caught up in doing things that will make them unhappy.',NULL,NULL,'Great with words, and loves to talk and communicate in relationships. Affectionate and selfless, treat them good and their words will sound like heaven. Their hearts are always in the right place, but if they feel confused they will seem moody. Pisces is a submissive sign so they like strong people but if they feel overshadowed they’ll become withdrawn. They love deeply.',NULL,'February 19 - March 20','Jupiter','Water','Fish');
/*!40000 ALTER TABLE `zodiac_traits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `glogs`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `glogs` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `glogs`;

--
-- Current Database: `goals`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `goals` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `goals`;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-25 12:52:03

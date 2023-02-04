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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_answers`
--

LOCK TABLES `user_answers` WRITE;
/*!40000 ALTER TABLE `user_answers` DISABLE KEYS */;
INSERT INTO `user_answers` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'2017-10-07 13:07:58','2017-10-07 13:07:58',NULL,NULL),(3,2,'Early 30s','Albania','Devoll (Bilisht)','Here','Male','Transgender','2','Hair Dresser','Monogamy','Straight','NotAtAll','Friendship','Biography','','','','','','','','','','','','','','','','','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA',NULL,'','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante tempus, varius dolor quis, commodo est. Aliquam luctus risus et vehicula lobortis. Aenean interdum ultricies libero, eu efficitur elit viverra non. Nullam semper dapibus interdum.',NULL,NULL,'2017-10-07 13:10:30','2017-10-15 08:53:11',NULL,NULL),(4,3,'28','NA','','','NA','NA','NA','','NoCommitment','NA','NA','NA','NA','NA','NA','NA','NA','PT','NA','NA','','','','NA','NA','','','','','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA',NULL,'NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','','',NULL,NULL,'2017-10-07 13:15:01','2017-10-07 13:32:42',NULL,NULL),(5,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'2017-10-09 12:00:00','2017-10-09 12:00:00',NULL,NULL),(6,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,'2017-10-16 09:07:46','2017-10-16 09:07:46',NULL,NULL);
/*!40000 ALTER TABLE `user_answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `network`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `network` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `network`;

--
-- Table structure for table `1`
--

DROP TABLE IF EXISTS `1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `1` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL COMMENT 'Profile ID',
  `requested_by` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `friend_id` int(11) DEFAULT NULL,
  `love_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `n_type` varchar(45) DEFAULT NULL,
  `n_approval` varchar(45) DEFAULT NULL,
  `n_status` varchar(45) DEFAULT NULL,
  `n_previous_type` varchar(45) DEFAULT NULL,
  `date_changed` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_removed` datetime DEFAULT CURRENT_TIMESTAMP,
  `removed_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`n_id`,`user_id`,`owner_id`),
  UNIQUE KEY `n_id_UNIQUE` (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `1`
--

LOCK TABLES `1` WRITE;
/*!40000 ALTER TABLE `1` DISABLE KEYS */;
/*!40000 ALTER TABLE `1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2`
--

DROP TABLE IF EXISTS `2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL COMMENT 'Profile ID',
  `requested_by` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `friend_id` int(11) DEFAULT NULL,
  `love_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `n_type` varchar(45) DEFAULT NULL,
  `n_approval` varchar(45) DEFAULT NULL,
  `n_status` varchar(45) DEFAULT NULL,
  `n_previous_type` varchar(45) DEFAULT NULL,
  `date_changed` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_removed` datetime DEFAULT CURRENT_TIMESTAMP,
  `removed_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`n_id`,`user_id`,`owner_id`),
  UNIQUE KEY `n_id_UNIQUE` (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2`
--

LOCK TABLES `2` WRITE;
/*!40000 ALTER TABLE `2` DISABLE KEYS */;
INSERT INTO `2` VALUES (1,2,5,5,'2017-10-16 17:03:16',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:03:16','2017-10-16 17:03:20',5),(2,2,5,5,'2017-10-16 17:03:19',5,NULL,NULL,'FRIEND','REQUESTED','ACTIVE',NULL,'2017-10-16 17:03:19','2017-10-16 17:03:19',NULL),(3,2,5,5,'2017-10-16 17:03:20',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:03:20','2017-10-16 17:04:46',5),(4,2,5,5,'2017-10-16 17:04:46',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:04:46','2017-10-16 17:04:48',5),(5,2,5,5,'2017-10-16 17:04:48',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:04:48','2017-10-16 17:04:50',5),(6,2,5,5,'2017-10-16 17:04:50',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:04:50','2017-10-16 17:36:57',5),(7,2,5,5,'2017-10-16 17:36:57',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:36:57','2017-10-16 17:37:31',5),(8,2,5,5,'2017-10-16 17:37:31',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:37:31','2017-10-16 17:37:52',5),(9,2,5,5,'2017-10-16 17:37:52',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:37:52','2017-10-16 17:38:22',5),(10,2,5,5,'2017-10-16 17:38:22',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:38:22','2017-10-16 17:39:09',5),(11,2,5,5,'2017-10-16 17:39:09',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:39:09','2017-10-16 17:40:50',5),(12,2,5,5,'2017-10-16 17:40:50',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:40:50','2017-10-16 17:41:45',5),(13,2,5,5,'2017-10-16 17:41:45',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:41:45','2017-10-16 17:45:44',5),(14,2,5,5,'2017-10-16 17:45:44',NULL,5,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 17:45:44','2017-10-16 17:45:46',5),(15,2,5,5,'2017-10-16 17:45:46',NULL,NULL,5,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:45:46','2017-10-16 17:45:52',5),(16,2,5,5,'2017-10-16 17:45:52',NULL,NULL,5,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:45:52','2017-10-16 17:46:08',5),(17,2,5,5,'2017-10-16 17:46:08',NULL,NULL,5,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:46:08','2017-10-16 17:46:10',5),(18,2,5,5,'2017-10-16 17:46:10',NULL,NULL,5,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:46:10','2017-10-16 17:46:14',5),(19,2,5,5,'2017-10-16 17:46:14',NULL,5,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 17:46:14','2017-10-16 17:46:18',5),(20,2,5,5,'2017-10-16 17:46:18',NULL,NULL,5,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:46:18','2017-10-16 17:59:18',5),(21,2,5,5,'2017-10-16 17:59:18',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:59:18','2017-10-16 17:59:37',5),(22,2,5,5,'2017-10-16 17:59:37',NULL,5,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 17:59:37','2017-10-16 18:13:52',5),(23,2,5,5,'2017-10-16 18:13:52',5,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 18:13:52','2017-10-16 18:13:53',5),(24,2,5,5,'2017-10-16 18:13:55',NULL,5,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 18:13:55','2017-10-16 18:13:56',5),(25,2,5,5,'2017-10-16 18:13:57',NULL,NULL,5,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 18:13:57','2017-10-16 18:13:58',5),(26,2,5,5,'2017-10-16 18:14:15',NULL,5,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 18:14:15','2017-10-16 20:06:14',2),(27,2,5,2,'2017-10-16 20:06:14',NULL,5,NULL,'LOVE','REQUESTED','ACTIVE',NULL,'2017-10-16 20:06:14','2017-10-16 20:06:14',NULL);
/*!40000 ALTER TABLE `2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `5`
--

DROP TABLE IF EXISTS `5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `5` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL COMMENT 'Profile ID',
  `requested_by` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
  `friend_id` int(11) DEFAULT NULL,
  `love_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `n_type` varchar(45) DEFAULT NULL,
  `n_approval` varchar(45) DEFAULT NULL,
  `n_status` varchar(45) DEFAULT NULL,
  `n_previous_type` varchar(45) DEFAULT NULL,
  `date_changed` datetime DEFAULT CURRENT_TIMESTAMP,
  `date_removed` datetime DEFAULT CURRENT_TIMESTAMP,
  `removed_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`n_id`,`user_id`,`owner_id`),
  UNIQUE KEY `n_id_UNIQUE` (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `5`
--

LOCK TABLES `5` WRITE;
/*!40000 ALTER TABLE `5` DISABLE KEYS */;
INSERT INTO `5` VALUES (1,5,2,5,'2017-10-16 17:03:16',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:03:16','2017-10-16 17:03:19',5),(2,5,2,5,'2017-10-16 17:03:19',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:03:19','2017-10-16 17:03:20',5),(3,5,2,5,'2017-10-16 17:03:20',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:03:20','2017-10-16 17:04:46',5),(4,5,2,5,'2017-10-16 17:04:46',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:04:46','2017-10-16 17:04:48',5),(5,5,2,5,'2017-10-16 17:04:48',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:04:48','2017-10-16 17:04:50',5),(6,5,2,5,'2017-10-16 17:04:50',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:04:50','2017-10-16 17:36:57',5),(7,5,2,5,'2017-10-16 17:36:57',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:36:57','2017-10-16 17:37:31',5),(8,5,2,5,'2017-10-16 17:37:31',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:37:31','2017-10-16 17:37:52',5),(9,5,2,5,'2017-10-16 17:37:52',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:37:52','2017-10-16 17:38:22',5),(10,5,2,5,'2017-10-16 17:38:22',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:38:22','2017-10-16 17:39:09',5),(11,5,2,5,'2017-10-16 17:39:09',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:39:09','2017-10-16 17:40:50',5),(12,5,2,5,'2017-10-16 17:40:50',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:40:50','2017-10-16 17:41:45',5),(13,5,2,5,'2017-10-16 17:41:45',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:41:45','2017-10-16 17:45:44',5),(14,5,2,5,'2017-10-16 17:45:44',NULL,2,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 17:45:44','2017-10-16 17:45:46',5),(15,5,2,5,'2017-10-16 17:45:46',NULL,NULL,2,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:45:46','2017-10-16 17:45:52',5),(16,5,2,5,'2017-10-16 17:45:52',NULL,NULL,2,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:45:52','2017-10-16 17:46:08',5),(17,5,2,5,'2017-10-16 17:46:08',NULL,NULL,2,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:46:08','2017-10-16 17:46:10',5),(18,5,2,5,'2017-10-16 17:46:10',NULL,NULL,2,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:46:10','2017-10-16 17:46:14',5),(19,5,2,5,'2017-10-16 17:46:14',NULL,2,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 17:46:14','2017-10-16 17:46:18',5),(20,5,2,5,'2017-10-16 17:46:18',NULL,NULL,2,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 17:46:18','2017-10-16 17:59:18',5),(21,5,2,5,'2017-10-16 17:59:18',2,NULL,NULL,'FRIEND','CANCELLED','DELETE',NULL,'2017-10-16 17:59:18','2017-10-16 17:59:37',5),(22,5,2,5,'2017-10-16 17:59:37',NULL,2,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 17:59:37','2017-10-16 18:13:52',5),(23,5,3,3,'2017-10-16 18:13:52',2,NULL,NULL,'FRIEND','REQUESTED','ACTIVE',NULL,'2017-10-16 18:13:52','2017-10-16 18:13:53',5),(24,5,2,5,'2017-10-16 18:13:55',NULL,2,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 18:13:55','2017-10-16 18:13:56',5),(25,5,2,2,'2017-10-16 18:13:57',NULL,NULL,2,'CAREER','CANCELLED','DELETE',NULL,'2017-10-16 18:13:57','2017-10-16 18:13:58',5),(26,5,2,2,'2017-10-16 18:14:15',NULL,2,NULL,'LOVE','CANCELLED','DELETE',NULL,'2017-10-16 18:14:15','2017-10-16 20:06:14',2),(27,5,2,2,'2017-10-16 20:06:14',NULL,2,NULL,'LOVE','REQUESTED','ACTIVE',NULL,'2017-10-16 20:06:14','2017-10-16 20:06:14',NULL);
/*!40000 ALTER TABLE `5` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_resumes`
--

LOCK TABLES `user_resumes` WRITE;
/*!40000 ALTER TABLE `user_resumes` DISABLE KEYS */;
INSERT INTO `user_resumes` VALUES (1,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-07 13:07:58','2017-10-07 13:07:58'),(3,'2','Employed','Hair Dresser','ExecutiveManagement','Progress','Y','Estonian','Congo, Democratic Republic of the','Kasai-Occidental','sdsdvsdvsdvsdsdvsdv','xdfxfdbxvegd . dfbfbzbdfdfbzfb','xdfbxdfbzbdfdbzdfbdfbzdfbzdfbzdfb','2016','PartTime','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante tempus, varius dolor quis, commodo est. Aliquam luctus risus et vehicula lobortis. Aenean interdum ultricies libero, eu efficitur elit viverra non. Nullam semper dapibus interdum.','vghn','vghnvgh','2015','2017','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','vhnh','vhnghn','2014','2003','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante tempus, varius dolor quis, commodo est. Aliquam luctus risus et vehicula lobortis. Aenean interdum ultricies libero, eu efficitur elit viverra non. Nullam semper dapibus interdum.','seg','DIPLOMA','sgsgg','8','CurrentlyAttending','sdgsdg','COLUNI','sthth','3','CurrentlyAttending','dryjdrjy','Bursary','2013','drthdrt','Bursary','NA','','NA','NA','sddsvsdv','','sdvsdvsd','','','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt ante tempus, varius dolor quis, commodo est. Aliquam luctus risus et vehicula lobortis. Aenean interdum ultricies libero, eu efficitur elit viverra non. Nullam semper dapibus interdum.','Contractual','OpenGroup','Consistent','FullTime','FullCoverage','40-60','60-70','Happy','Auditory','Communication','Traditional','Independent','Franchise','Teaches','2017-10-07 13:10:31','2017-10-14 07:31:42'),(4,'3',NULL,'Hair Dresser','Beauty','Yes','Y','English','Canada','Nova Scotia','Halifax','Hair Dresser','First Choice','2010','Full Time','xbbxdbfbfbfd','','','','','svdsvd','','','','','sdvsdv','','','','','','','','','','','','NA','NA','','NA','NA','','NA','NA','rgdfdfg','','','','','svsd','NA','AtHome','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','2017-10-07 13:15:01','2017-10-07 13:32:33'),(5,'4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-09 12:00:01','2017-10-09 12:00:01'),(6,'5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-16 09:07:46','2017-10-16 09:07:46');
/*!40000 ALTER TABLE `user_resumes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `profiles`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `profiles` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `profiles`;

--
-- Table structure for table `2_status`
--

DROP TABLE IF EXISTS `2_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `message` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime DEFAULT NULL,
  `current_status` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`status_id`,`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2_status`
--

LOCK TABLES `2_status` WRITE;
/*!40000 ALTER TABLE `2_status` DISABLE KEYS */;
INSERT INTO `2_status` VALUES (1,2,NULL,NULL,'0000-00-00 00:00:00',NULL,'ACTIVE',NULL),(2,1,NULL,NULL,'0000-00-00 00:00:00',NULL,'ACTIVE',NULL),(3,2,NULL,NULL,'2017-10-12 08:53:20',NULL,'ACTIVE',NULL),(4,2,'zdfbzdfbdfb',NULL,'2017-10-12 08:54:40',NULL,'ACTIVE',NULL),(5,2,'xdfbdfb',NULL,'2017-10-12 09:44:54',NULL,'ACTIVE',NULL),(6,2,'xdgbxd',NULL,'2017-10-12 09:46:41',NULL,'ACTIVE',NULL),(7,2,'zcxc',NULL,'2017-10-12 09:48:20',NULL,'ACTIVE',NULL),(8,2,'dvfdv',NULL,'2017-10-12 09:50:25',NULL,'ACTIVE',NULL),(9,2,'dfvdff',NULL,'2017-10-12 09:53:45',NULL,'ACTIVE',NULL),(10,2,'dfbdfb',NULL,'2017-10-12 09:54:16',NULL,'ACTIVE',NULL),(11,2,'SELECT  FROM profiles.all_status','THOUGHT','2017-10-12 11:24:31',NULL,'ACTIVE',NULL),(12,2,'dfvdfv','THOUGHT','2017-10-12 12:42:05',NULL,'ACTIVE',NULL),(13,2,'dfvdfv','THOUGHT','2017-10-12 12:42:46',NULL,'ACTIVE',NULL),(14,2,'dfvdfv','THOUGHT','2017-10-12 12:42:49',NULL,'ACTIVE',NULL),(15,2,'dfvdfv','THOUGHT','2017-10-12 12:50:25',NULL,'ACTIVE',NULL),(16,2,'xvc','THOUGHT','2017-10-12 12:56:17',NULL,'ACTIVE',NULL),(17,2,'dsdsv','THOUGHT','2017-10-12 12:56:43',NULL,'ACTIVE',NULL),(18,2,'sdcsdc','THOUGHT','2017-10-12 12:56:47',NULL,'ACTIVE',NULL),(19,2,'sdcsdc','THOUGHT','2017-10-12 13:02:13',NULL,'ACTIVE',NULL),(20,2,'dfvdf','THOUGHT','2017-10-12 13:14:44',NULL,'ACTIVE',NULL),(21,2,'dfvdf','THOUGHT','2017-10-12 13:15:15',NULL,'ACTIVE',NULL),(22,2,'fgbgb','THOUGHT','2017-10-12 13:15:56',NULL,'ACTIVE',NULL),(23,2,'wrwr','THOUGHT','2017-10-12 13:16:19',NULL,'ACTIVE',NULL),(24,2,'wrwr','THOUGHT','2017-10-12 13:17:46',NULL,'ACTIVE',NULL),(25,2,'dfbdfb','THOUGHT','2017-10-12 13:50:31',NULL,'ACTIVE',NULL),(26,2,'dfbdfb','THOUGHT','2017-10-12 13:52:41',NULL,'ACTIVE',NULL),(27,2,'xbfb','THOUGHT','2017-10-12 13:59:35',NULL,'ACTIVE',NULL),(28,2,'xfgfgnfng','LOVE','2017-10-12 13:59:50',NULL,'ACTIVE',NULL),(29,2,'xfgfgnfng','LOVE','2017-10-12 14:05:39',NULL,'ACTIVE',NULL),(30,2,'xfgfgnfng','LOVE','2017-10-12 14:05:58',NULL,'ACTIVE',NULL);
/*!40000 ALTER TABLE `2_status` ENABLE KEYS */;
UNLOCK TABLES;

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
  `message` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime DEFAULT NULL,
  `current_status` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`status_id`,`owner_id`,`owner_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `all_status`
--

LOCK TABLES `all_status` WRITE;
/*!40000 ALTER TABLE `all_status` DISABLE KEYS */;
INSERT INTO `all_status` VALUES (5,2,10,'dfbdfb',NULL,'2017-10-12 09:54:16',NULL,'ACTIVE',NULL),(6,2,11,'SELECT  FROM profiles.all_status','THOUGHT','2017-10-12 11:24:31',NULL,'ACTIVE',NULL),(7,2,12,'dfvdfv','THOUGHT','2017-10-12 12:42:05',NULL,'ACTIVE',NULL),(8,2,13,'dfvdfv','THOUGHT','2017-10-12 12:42:46',NULL,'ACTIVE',NULL),(9,2,14,'dfvdfv','THOUGHT','2017-10-12 12:42:49',NULL,'ACTIVE',NULL),(10,2,15,'dfvdfv','THOUGHT','2017-10-12 12:50:25',NULL,'ACTIVE',NULL),(11,2,16,'xvc','THOUGHT','2017-10-12 12:56:17',NULL,'ACTIVE',NULL),(12,2,17,'dsdsv','THOUGHT','2017-10-12 12:56:43',NULL,'ACTIVE',NULL),(13,2,18,'sdcsdc','THOUGHT','2017-10-12 12:56:47',NULL,'ACTIVE',NULL),(14,2,19,'sdcsdc','THOUGHT','2017-10-12 13:02:13',NULL,'ACTIVE',NULL),(15,2,20,'dfvdf','THOUGHT','2017-10-12 13:14:44',NULL,'ACTIVE',NULL),(16,2,21,'dfvdf','THOUGHT','2017-10-12 13:15:15',NULL,'ACTIVE',NULL),(17,2,22,'fgbgb','THOUGHT','2017-10-12 13:15:56',NULL,'ACTIVE',NULL),(18,2,23,'wrwr','THOUGHT','2017-10-12 13:16:19',NULL,'ACTIVE',NULL),(19,2,24,'wrwr','THOUGHT','2017-10-12 13:17:46',NULL,'ACTIVE',NULL),(20,2,25,'dfbdfb','THOUGHT','2017-10-12 13:50:31',NULL,'ACTIVE',NULL),(21,2,26,'dfbdfb','THOUGHT','2017-10-12 13:52:41',NULL,'ACTIVE',NULL),(22,2,27,'xbfb','THOUGHT','2017-10-12 13:59:35',NULL,'ACTIVE',NULL),(23,2,28,'xfgfgnfng','LOVE','2017-10-12 13:59:50',NULL,'ACTIVE',NULL),(24,2,29,'xfgfgnfng','LOVE','2017-10-12 14:05:39',NULL,'ACTIVE',NULL),(25,2,30,'xfgfgnfng','LOVE','2017-10-12 14:05:58',NULL,'ACTIVE',NULL);
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
  `wrong_logins` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_profile_id` int(11) DEFAULT NULL,
  `zodiac` varchar(45) DEFAULT NULL,
  `relationship_status` varchar(45) DEFAULT NULL,
  `user_description` varchar(255) DEFAULT NULL,
  `user_phone_raw` varchar(45) DEFAULT NULL,
  `user_phone` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `birth_month` varchar(10) DEFAULT NULL,
  `birth_day` varchar(2) DEFAULT NULL,
  `birth_year` varchar(4) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `under_13` varchar(1) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `province` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chantal','miss.c.charron@gmail.com','$2y$10$sZceNV/ANSYBoH.0BcYdbeOEdHRjU1X8nDfFt3KcvaPcDT9lqXbzy','2017-10-07 13:07:58','Chantal','Charron','1994-09-15',NULL,'2017-10-07 13:07:58',NULL,'Virgo',NULL,NULL,NULL,NULL,NULL,'September','15','1994',23,'N',NULL,NULL,NULL),(2,'nicole','nicolesawler@gmail.com','$2y$10$uGPbWdWMvcWxJNQbu.EAO.UHcVyfBOALG0i57yW0nMTV.JQIsGJIm','2017-10-07 13:10:30','Nicole','Sawler','1989-01-12',NULL,'2017-10-07 13:10:30',NULL,'Capricorn',NULL,NULL,NULL,NULL,NULL,'January','12','1989',28,'N',NULL,NULL,NULL),(3,'john','nicolesawler1@gmail.com','$2y$10$urlBlqHM/8/FUXrpT5EaZ.EyehGD524lUkb9yMNRuRKx2OQIn4PLi','2017-10-07 13:15:01','John','Doe','1989-01-12',NULL,'2017-10-07 13:15:01',NULL,'Capricorn',NULL,NULL,NULL,NULL,NULL,'January','12','1989',28,'N',NULL,NULL,NULL),(4,'sadurn','jennaleedham@gmail.com','$2y$10$P/Jb82PoAmekThyrfPC66e4DgNZTdvm8l4bnXCRGwy0Zd2bWGZTJi','2017-10-09 12:00:00','Jenna','Leedham','2004-09-22',NULL,'2017-10-09 12:00:00',NULL,'Virgo',NULL,NULL,NULL,NULL,NULL,'September','22','2004',13,'N',NULL,NULL,NULL),(5,'jane','jane@gmail.com','$2y$10$/UdvEShQaK9qvEV34/UPze8K4ApoxVSE1bZ3DpE2sPKJ5VmD4qASK','2017-10-16 09:07:46','Miss','Jane','1989-08-12',NULL,'2017-10-16 09:07:46',NULL,'Leo',NULL,NULL,NULL,NULL,NULL,'August','12','1989',28,'N',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `reports`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `reports` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `reports`;

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
-- Table structure for table `1`
--

DROP TABLE IF EXISTS `1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `1` (
  `chapter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chapter_title` varchar(45) NOT NULL,
  `chapter_blog` text NOT NULL,
  `chapter_type` varchar(15) DEFAULT NULL,
  `chapter_hidden` varchar(1) NOT NULL,
  `glog_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `1`
--

LOCK TABLES `1` WRITE;
/*!40000 ALTER TABLE `1` DISABLE KEYS */;
/*!40000 ALTER TABLE `1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2`
--

DROP TABLE IF EXISTS `2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2` (
  `chapter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chapter_title` varchar(45) NOT NULL,
  `chapter_blog` text NOT NULL,
  `chapter_type` varchar(15) DEFAULT NULL,
  `chapter_hidden` varchar(1) NOT NULL,
  `glog_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2`
--

LOCK TABLES `2` WRITE;
/*!40000 ALTER TABLE `2` DISABLE KEYS */;
INSERT INTO `2` VALUES (1,'xdfbxdfbdxfb','xdgdfbfb','CREATE','N',2,'2017-10-15 10:36:04','2017-10-15 10:36:04'),(2,'xdfbxdfbdxfb','xdfbxdfbdfbxdfb','CREATE','N',2,'2017-10-15 10:36:10','2017-10-15 10:36:10'),(3,'xdfbxdfb','xdfbdfbdx','CREATE','Y',2,'2017-10-15 10:36:14','2017-10-15 10:36:14');
/*!40000 ALTER TABLE `2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `3`
--

DROP TABLE IF EXISTS `3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `3` (
  `chapter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chapter_title` varchar(45) NOT NULL,
  `chapter_blog` text NOT NULL,
  `chapter_type` varchar(15) DEFAULT NULL,
  `chapter_hidden` varchar(1) NOT NULL,
  `glog_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `3`
--

LOCK TABLES `3` WRITE;
/*!40000 ALTER TABLE `3` DISABLE KEYS */;
INSERT INTO `3` VALUES (28,'svsd','sdvsdv','CREATE','N',3,'2017-10-07 13:32:21','2017-10-07 13:32:21');
/*!40000 ALTER TABLE `3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `4`
--

DROP TABLE IF EXISTS `4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `4` (
  `chapter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chapter_title` varchar(45) NOT NULL,
  `chapter_blog` text NOT NULL,
  `chapter_type` varchar(15) DEFAULT NULL,
  `chapter_hidden` varchar(1) NOT NULL,
  `glog_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `4`
--

LOCK TABLES `4` WRITE;
/*!40000 ALTER TABLE `4` DISABLE KEYS */;
/*!40000 ALTER TABLE `4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `5`
--

DROP TABLE IF EXISTS `5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `5` (
  `chapter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chapter_title` varchar(45) NOT NULL,
  `chapter_blog` text NOT NULL,
  `chapter_type` varchar(15) DEFAULT NULL,
  `chapter_hidden` varchar(1) NOT NULL,
  `glog_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chapter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `5`
--

LOCK TABLES `5` WRITE;
/*!40000 ALTER TABLE `5` DISABLE KEYS */;
/*!40000 ALTER TABLE `5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `goals`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `goals` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `goals`;

--
-- Table structure for table `1`
--

DROP TABLE IF EXISTS `1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `1` (
  `goal_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_title` varchar(45) DEFAULT NULL,
  `goal_description` varchar(255) DEFAULT NULL,
  `goal_time` varchar(12) DEFAULT NULL,
  `goal_private` varchar(1) DEFAULT NULL,
  `goal_imagepath` varchar(45) DEFAULT NULL,
  `goal_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `goal_achieved` varchar(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` datetime DEFAULT NULL,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `achieved_on` datetime DEFAULT NULL,
  PRIMARY KEY (`goal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `1`
--

LOCK TABLES `1` WRITE;
/*!40000 ALTER TABLE `1` DISABLE KEYS */;
/*!40000 ALTER TABLE `1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `1_adv`
--

DROP TABLE IF EXISTS `1_adv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `1_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `adv_encourage` varchar(45) DEFAULT NULL,
  `adv_comment` varchar(999) DEFAULT NULL,
  `adv_invest` varchar(45) DEFAULT NULL,
  `adv_invest_option` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `1_adv`
--

LOCK TABLES `1_adv` WRITE;
/*!40000 ALTER TABLE `1_adv` DISABLE KEYS */;
/*!40000 ALTER TABLE `1_adv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `1_cat`
--

DROP TABLE IF EXISTS `1_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `1_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(45) DEFAULT NULL,
  `cat_description` varchar(255) DEFAULT NULL,
  `cat_icon` varchar(5) DEFAULT NULL,
  `cat_type` varchar(45) DEFAULT NULL,
  `cat_private` varchar(1) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_goals_count` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `1_cat`
--

LOCK TABLES `1_cat` WRITE;
/*!40000 ALTER TABLE `1_cat` DISABLE KEYS */;
/*!40000 ALTER TABLE `1_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2`
--

DROP TABLE IF EXISTS `2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2` (
  `goal_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_title` varchar(45) DEFAULT NULL,
  `goal_description` varchar(255) DEFAULT NULL,
  `goal_time` varchar(12) DEFAULT NULL,
  `goal_private` varchar(1) DEFAULT NULL,
  `goal_imagepath` varchar(45) DEFAULT NULL,
  `goal_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `goal_achieved` varchar(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '2',
  `cat_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` datetime DEFAULT NULL,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `achieved_on` datetime DEFAULT NULL,
  PRIMARY KEY (`goal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2`
--

LOCK TABLES `2` WRITE;
/*!40000 ALTER TABLE `2` DISABLE KEYS */;
INSERT INTO `2` VALUES (29,'srthsrth','srthsrh','This Month','N',NULL,'ACTIVE','N',2,25,'2017-10-10 18:14:22','2017-11-10 00:00:00','2017-10-10 18:14:22',NULL);
/*!40000 ALTER TABLE `2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2_adv`
--

DROP TABLE IF EXISTS `2_adv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `adv_encourage` varchar(45) DEFAULT NULL,
  `adv_comment` varchar(999) DEFAULT NULL,
  `adv_invest` varchar(45) DEFAULT NULL,
  `adv_invest_option` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2_adv`
--

LOCK TABLES `2_adv` WRITE;
/*!40000 ALTER TABLE `2_adv` DISABLE KEYS */;
INSERT INTO `2_adv` VALUES (132,'29','2',2,'0',NULL,NULL,NULL,'2017-10-10 18:14:37','2017-10-16 09:01:41','ACTIVE'),(133,'29','2',2,'0',NULL,NULL,NULL,'2017-10-11 19:57:58','2017-10-16 09:01:41','ACTIVE'),(134,'29','2',2,'0',NULL,NULL,NULL,'2017-10-11 19:58:00','2017-10-16 09:01:41','ACTIVE'),(135,'29','2',2,'0',NULL,NULL,NULL,'2017-10-11 19:58:01','2017-10-16 09:01:41','ACTIVE'),(136,'29','2',2,'0',NULL,NULL,NULL,'2017-10-11 19:58:02','2017-10-16 09:01:41','ACTIVE'),(137,'29','2',2,'0','wetysetehdhst',NULL,NULL,'2017-10-11 19:58:07','2017-10-16 09:01:41','DELETE'),(138,'29','2',2,'0','asdfasdf',NULL,NULL,'2017-10-11 19:58:21','2017-10-16 09:01:41','ACTIVE'),(139,'29','2',2,'0','asdfasdfsad',NULL,NULL,'2017-10-11 19:58:23','2017-10-16 09:01:41','ACTIVE'),(140,'29','2',2,'0','vdf',NULL,NULL,'2017-10-11 19:58:26','2017-10-16 09:01:41','ACTIVE'),(141,'29','2',2,'1',NULL,NULL,NULL,'2017-10-16 09:01:41','2017-10-16 09:01:41','ACTIVE');
/*!40000 ALTER TABLE `2_adv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `2_cat`
--

DROP TABLE IF EXISTS `2_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `2_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(45) DEFAULT NULL,
  `cat_description` varchar(255) DEFAULT NULL,
  `cat_icon` varchar(5) DEFAULT NULL,
  `cat_type` varchar(45) DEFAULT NULL,
  `cat_private` varchar(1) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_goals_count` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `2_cat`
--

LOCK TABLES `2_cat` WRITE;
/*!40000 ALTER TABLE `2_cat` DISABLE KEYS */;
INSERT INTO `2_cat` VALUES (25,'rdhrrdth','rthsrthrsth','healt','Emotional','N','ACTIVE','2017-10-10 18:14:05','2017-10-10 18:14:05',0,2);
/*!40000 ALTER TABLE `2_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `3`
--

DROP TABLE IF EXISTS `3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `3` (
  `goal_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_title` varchar(45) DEFAULT NULL,
  `goal_description` varchar(255) DEFAULT NULL,
  `goal_time` varchar(12) DEFAULT NULL,
  `goal_private` varchar(1) DEFAULT NULL,
  `goal_imagepath` varchar(45) DEFAULT NULL,
  `goal_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `goal_achieved` varchar(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '3',
  `cat_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` datetime DEFAULT NULL,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `achieved_on` datetime DEFAULT NULL,
  PRIMARY KEY (`goal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `3`
--

LOCK TABLES `3` WRITE;
/*!40000 ALTER TABLE `3` DISABLE KEYS */;
INSERT INTO `3` VALUES (29,'sdvd','sdv','This Month','N',NULL,'ACTIVE','N',3,25,'2017-10-07 13:32:55','2017-11-07 00:00:00','2017-10-07 13:32:55',NULL);
/*!40000 ALTER TABLE `3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `3_adv`
--

DROP TABLE IF EXISTS `3_adv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `3_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `adv_encourage` varchar(45) DEFAULT NULL,
  `adv_comment` varchar(999) DEFAULT NULL,
  `adv_invest` varchar(45) DEFAULT NULL,
  `adv_invest_option` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `3_adv`
--

LOCK TABLES `3_adv` WRITE;
/*!40000 ALTER TABLE `3_adv` DISABLE KEYS */;
INSERT INTO `3_adv` VALUES (132,'29','3',3,'1',NULL,NULL,NULL,'2017-10-07 13:32:58','2017-10-07 13:32:58','ACTIVE'),(133,'29','3',3,NULL,'sdvsdv',NULL,NULL,'2017-10-07 13:33:00','2017-10-07 13:33:04','DELETE'),(134,'29','2',3,NULL,'sfsdsdf',NULL,NULL,'2017-10-16 09:02:02','2017-10-16 09:02:02','ACTIVE'),(135,'29','2',3,'1',NULL,NULL,NULL,'2017-10-16 09:02:09','2017-10-16 09:02:09','ACTIVE'),(136,'29','5',3,NULL,'xcvcv',NULL,NULL,'2017-10-16 09:21:00','2017-10-16 09:25:27','DELETE'),(137,'29','5',3,NULL,'xcvxcv',NULL,NULL,'2017-10-16 09:21:03','2017-10-16 09:26:08','DELETE'),(138,'29','5',3,NULL,'dgdfdfdf',NULL,NULL,'2017-10-16 09:26:10','2017-10-16 09:34:54','DELETE'),(139,'29','5',3,NULL,'dfvvd',NULL,NULL,'2017-10-16 09:26:12','2017-10-16 09:26:42','DELETE'),(140,'29','5',3,NULL,'dfvdf',NULL,NULL,'2017-10-16 09:26:13','2017-10-16 09:26:13','ACTIVE'),(141,'29','5',3,NULL,'xc xc',NULL,NULL,'2017-10-16 09:26:44','2017-10-16 09:26:46','DELETE');
/*!40000 ALTER TABLE `3_adv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `3_cat`
--

DROP TABLE IF EXISTS `3_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `3_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(45) DEFAULT NULL,
  `cat_description` varchar(255) DEFAULT NULL,
  `cat_icon` varchar(15) DEFAULT NULL,
  `cat_type` varchar(45) DEFAULT NULL,
  `cat_private` varchar(1) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_goals_count` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `3_cat`
--

LOCK TABLES `3_cat` WRITE;
/*!40000 ALTER TABLE `3_cat` DISABLE KEYS */;
INSERT INTO `3_cat` VALUES (25,'sdv','svd','xe90f','Emotional','N','ACTIVE','2017-10-07 13:32:50','2017-10-07 13:32:50',0,3),(26,'svdsdvsdv','sdvsdv','trophystar','Education','N','DELETE','2017-10-07 14:23:02','2017-10-07 14:24:29',0,3),(27,'sdvsdvsdv','sdvsdv','trophystar','Emotional','N','DELETE','2017-10-07 14:23:12','2017-10-07 14:24:25',0,3),(28,'sdvsdv','sdvsdv','trophystar','Financial','N','DELETE','2017-10-07 14:23:19','2017-10-07 14:24:21',0,3),(29,'zdf','sgfzdf','health-care','Emotional','N','ACTIVE','2017-10-07 14:24:36','2017-10-07 14:24:36',0,3),(30,'dffd','','businesshands','Health','N','ACTIVE','2017-10-07 14:24:44','2017-10-07 14:24:44',0,3),(31,'dfv','','trophystar','Emotional','N','ACTIVE','2017-10-07 14:24:49','2017-10-07 14:24:49',0,3),(32,'dvdf','dfv','trophystar','Emotional','N','ACTIVE','2017-10-07 14:24:59','2017-10-07 14:24:59',0,3),(33,'agre','aergerg','world','Financial','N','ACTIVE','2017-10-07 14:26:43','2017-10-07 14:26:43',0,3),(34,'eargerg','aergaegr','silhouette','Health','N','ACTIVE','2017-10-07 14:26:52','2017-10-07 14:26:52',0,3),(35,'aeggr','aergaerg','toy','Financial','N','ACTIVE','2017-10-07 14:26:59','2017-10-07 14:26:59',0,3),(36,'aergaegr','aergaeg','apple','Emotional','N','ACTIVE','2017-10-07 14:27:05','2017-10-07 14:27:05',0,3),(37,'aeger','aerg','open-book','Health','N','ACTIVE','2017-10-07 14:27:16','2017-10-07 14:27:16',0,3),(38,'aeregr','earaegr','trophystar','Financial','N','ACTIVE','2017-10-07 14:27:28','2017-10-07 14:27:28',0,3),(39,'aeregr','earaegr','trophystar','Financial','N','ACTIVE','2017-10-07 14:28:07','2017-10-07 14:28:07',0,3),(40,'zxdfb','zdf','heartsmatch','Emotional','N','ACTIVE','2017-10-07 14:28:51','2017-10-07 14:28:51',0,3),(41,'dcacascs','','profits','Love','N','ACTIVE','2017-10-07 14:44:09','2017-10-07 14:44:09',0,3),(42,'Health Goals','','health-care','Health','N','ACTIVE','2017-10-07 14:44:39','2017-10-07 14:44:39',0,3),(43,'Health','','health-care','Health','N','ACTIVE','2017-10-07 14:44:53','2017-10-07 14:44:53',0,3),(44,'sdcs','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel aliquet magna. Donec lacus magna, aliquam a purus ac, gravida convallis massa.','profits','Financial','N','ACTIVE','2017-10-07 14:45:02','2017-10-07 14:45:02',0,3);
/*!40000 ALTER TABLE `3_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `4`
--

DROP TABLE IF EXISTS `4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `4` (
  `goal_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_title` varchar(45) DEFAULT NULL,
  `goal_description` varchar(255) DEFAULT NULL,
  `goal_time` varchar(12) DEFAULT NULL,
  `goal_private` varchar(1) DEFAULT NULL,
  `goal_imagepath` varchar(45) DEFAULT NULL,
  `goal_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `goal_achieved` varchar(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '4',
  `cat_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` datetime DEFAULT NULL,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `achieved_on` datetime DEFAULT NULL,
  PRIMARY KEY (`goal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `4`
--

LOCK TABLES `4` WRITE;
/*!40000 ALTER TABLE `4` DISABLE KEYS */;
/*!40000 ALTER TABLE `4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `4_adv`
--

DROP TABLE IF EXISTS `4_adv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `4_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `adv_encourage` varchar(45) DEFAULT NULL,
  `adv_comment` varchar(999) DEFAULT NULL,
  `adv_invest` varchar(45) DEFAULT NULL,
  `adv_invest_option` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `4_adv`
--

LOCK TABLES `4_adv` WRITE;
/*!40000 ALTER TABLE `4_adv` DISABLE KEYS */;
/*!40000 ALTER TABLE `4_adv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `4_cat`
--

DROP TABLE IF EXISTS `4_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `4_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(45) DEFAULT NULL,
  `cat_description` varchar(255) DEFAULT NULL,
  `cat_icon` varchar(15) DEFAULT NULL,
  `cat_type` varchar(45) DEFAULT NULL,
  `cat_private` varchar(1) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_goals_count` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `4_cat`
--

LOCK TABLES `4_cat` WRITE;
/*!40000 ALTER TABLE `4_cat` DISABLE KEYS */;
/*!40000 ALTER TABLE `4_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `5`
--

DROP TABLE IF EXISTS `5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `5` (
  `goal_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_title` varchar(45) DEFAULT NULL,
  `goal_description` varchar(255) DEFAULT NULL,
  `goal_time` varchar(12) DEFAULT NULL,
  `goal_private` varchar(1) DEFAULT NULL,
  `goal_imagepath` varchar(45) DEFAULT NULL,
  `goal_status` varchar(10) NOT NULL DEFAULT 'ACTIVE',
  `goal_achieved` varchar(1) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '5',
  `cat_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` datetime DEFAULT NULL,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `achieved_on` datetime DEFAULT NULL,
  PRIMARY KEY (`goal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `5`
--

LOCK TABLES `5` WRITE;
/*!40000 ALTER TABLE `5` DISABLE KEYS */;
INSERT INTO `5` VALUES (29,'','fdzdf','This Month','N',NULL,'ACTIVE','N',5,25,'2017-10-16 09:27:26','2017-11-16 00:00:00','2017-10-16 09:27:26',NULL);
/*!40000 ALTER TABLE `5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `5_adv`
--

DROP TABLE IF EXISTS `5_adv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `5_adv` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `goal_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `owner_id` int(11) NOT NULL,
  `adv_encourage` varchar(45) DEFAULT NULL,
  `adv_comment` varchar(999) DEFAULT NULL,
  `adv_invest` varchar(45) DEFAULT NULL,
  `adv_invest_option` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `5_adv`
--

LOCK TABLES `5_adv` WRITE;
/*!40000 ALTER TABLE `5_adv` DISABLE KEYS */;
INSERT INTO `5_adv` VALUES (132,'29','5',5,NULL,'bvcvb',NULL,NULL,'2017-10-16 09:27:33','2017-10-16 09:27:33','ACTIVE'),(133,'29','5',5,NULL,'vcbvcb',NULL,NULL,'2017-10-16 09:27:35','2017-10-16 09:34:40','DELETE'),(134,'29','5',5,NULL,'cvb',NULL,NULL,'2017-10-16 09:27:37','2017-10-16 09:27:37','ACTIVE'),(135,'29','2',5,'1',NULL,NULL,NULL,'2017-10-16 09:35:24','2017-10-16 09:35:24','ACTIVE'),(136,'29','2',5,NULL,'xfgxgffx',NULL,NULL,'2017-10-16 09:35:26','2017-10-16 09:35:26','ACTIVE'),(137,'29','2',5,NULL,'xfgbxfb',NULL,NULL,'2017-10-16 09:35:27','2017-10-16 09:35:27','ACTIVE'),(138,'29','2',5,NULL,'xfgb',NULL,NULL,'2017-10-16 09:35:28','2017-10-16 09:35:28','ACTIVE'),(139,'29','5',5,'1',NULL,NULL,NULL,'2017-10-16 09:36:18','2017-10-16 09:36:18','ACTIVE');
/*!40000 ALTER TABLE `5_adv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `5_cat`
--

DROP TABLE IF EXISTS `5_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `5_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(45) DEFAULT NULL,
  `cat_description` varchar(255) DEFAULT NULL,
  `cat_icon` varchar(15) DEFAULT NULL,
  `cat_type` varchar(45) DEFAULT NULL,
  `cat_private` varchar(1) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edited` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_goals_count` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `5_cat`
--

LOCK TABLES `5_cat` WRITE;
/*!40000 ALTER TABLE `5_cat` DISABLE KEYS */;
INSERT INTO `5_cat` VALUES (25,'fvzf','vzfbdfb','profits','Intellectual','N','ACTIVE','2017-10-16 09:27:19','2017-10-16 09:27:19',0,5);
/*!40000 ALTER TABLE `5_cat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-16 20:47:18

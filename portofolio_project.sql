-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: localhost    Database: portofolio
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (89,'Illustration'),(90,'Typography'),(95,'Components, Design'),(96,'Dashboard');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cv_data`
--

DROP TABLE IF EXISTS `cv_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cv_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cv_data_un` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cv_data`
--

LOCK TABLES `cv_data` WRITE;
/*!40000 ALTER TABLE `cv_data` DISABLE KEYS */;
INSERT INTO `cv_data` VALUES (1,'name','Hemalia Aisyah Putri'),(2,'about_me','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam molestias facilis ullam dolorum, reprehenderit dolorem accusantium sit quo \r\n                        dolore nostrum assumenda obcaecati animi commodi nobis labore exercitationem corporis esse eveniet optio laudantium molestiae maiores pariatur nisi cumque. \r\n                        Distinctio et, totam, dicta autem nostrum doloribus ipsam vel rerum, molestiae soluta laboriosam.'),(3,'position','Web Developer');
/*!40000 ALTER TABLE `cv_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `educations`
--

DROP TABLE IF EXISTS `educations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `start_date` year(4) NOT NULL,
  `graduated_date` year(4) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `educations_un` (`name`,`start_date`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `educations`
--

LOCK TABLES `educations` WRITE;
/*!40000 ALTER TABLE `educations` DISABLE KEYS */;
INSERT INTO `educations` VALUES (5,'SMAN 1 Plemahan',2016,2019,'Science'),(6,'Sebelas Maret University',2020,2023,'Teknik Informatika');
/*!40000 ALTER TABLE `educations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experiences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_date` year(4) NOT NULL,
  `resign_date` year(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `experiences_un` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiences`
--

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` VALUES (3,' Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto porro suscipit,  libero ex assumenda pariatur commodi animi nobis, dolore id.','PKKMB SV UNS 2022 Committee',2022,2022),(4,' Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto porro suscipit,  libero ex assumenda pariatur commodi animi nobis, dolore id.','PT. Arkatama',2022,2022),(5,'SMART INOTEK National Competition Finalist Category Website/SI Vocational Student Level With Theme \"Elevating Regional Potential in the Midst of a Pandemic\", With Project name \"E-Holiday\"','Smart Inotek Competition 2021',2021,2021),(6,' Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iusto porro suscipit,  libero ex assumenda pariatur commodi animi nobis, dolore id.',' Cv. Mandiri Asta Kencana',2022,2022);
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hobbies`
--

DROP TABLE IF EXISTS `hobbies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hobby` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hobbies_un` (`hobby`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobbies`
--

LOCK TABLES `hobbies` WRITE;
/*!40000 ALTER TABLE `hobbies` DISABLE KEYS */;
INSERT INTO `hobbies` VALUES (2,'Horizontal battery saving mode'),(3,'Listening music'),(5,'Reading Novel'),(4,'Traveling'),(1,'Watching Movie');
/*!40000 ALTER TABLE `hobbies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `level` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_un` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Indonesia',4),(2,'Inggris',3);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_categories`
--

DROP TABLE IF EXISTS `post_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_categories` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `post_categories_un` (`category_id`),
  CONSTRAINT `post_categories_FK` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `post_categories_FK_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_categories`
--

LOCK TABLES `post_categories` WRITE;
/*!40000 ALTER TABLE `post_categories` DISABLE KEYS */;
INSERT INTO `post_categories` VALUES (121,89),(125,90),(123,95);
/*!40000 ALTER TABLE `post_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` longtext,
  `featured_image` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_un` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (102,'Flower','<p>hai</p>','avatar-2.jpg','2022-09-21 13:57:07',1,'2022-09-29 17:01:26',1),(103,'Utility Drawers','<p>hh</p>','fitur 3.png','2022-09-21 14:00:51',1,'2022-09-29 17:01:26',1),(104,'Wallpaper','<p>z</p>','fitur 2.png','2022-09-22 10:58:03',1,'2022-09-29 17:01:26',1),(118,'Bookshelf','<p>a</p>','fitur 2.png','2022-09-23 00:31:43',10,'2022-09-29 17:01:26',NULL),(119,'Bedsheet','<p>D</p>','avatar-2.jpg','2022-09-23 01:23:23',10,'2022-09-29 17:01:26',NULL),(121,'Curtains','<p>GAI</p>','fitur 3.png','2022-09-23 01:38:37',10,'2022-09-29 17:01:26',NULL),(123,'Duvet','<p>hai</p>','fitur 2.png','2022-09-23 11:44:14',1,'2022-09-30 13:53:33',1),(124,'Hat Stand','<p>hai</p>','img.jpg','2022-09-23 11:45:14',1,'2022-09-30 13:53:44',1),(125,'Nightstand','<p>hai</p>','img.jpg','2022-09-23 11:45:31',1,'2022-09-30 13:53:55',1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `level` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `skills_un` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES (1,'PHP',3),(2,'CODEIGNITER',3),(3,'Microsoft Word',3),(4,'Microsoft Power Point',3);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_medias`
--

DROP TABLE IF EXISTS `social_medias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `social_medias_un` (`name`,`url`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_medias`
--

LOCK TABLES `social_medias` WRITE;
/*!40000 ALTER TABLE `social_medias` DISABLE KEYS */;
INSERT INTO `social_medias` VALUES (7,'Instagram','https://www.instagram.com/hemaliaasyp/','ig.png'),(8,'Github','https://github.com/hemaliaasyp','git.png'),(9,'Nomer HP','https://wa.me/+6285853587558','wa.png');
/*!40000 ALTER TABLE `social_medias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'hema','hemalia','$2y$10$R3oZgf.ejC.QPLxSWhEMPuJvwe5kVi3MujYL1PsHGp5ji1/QaV48q'),(2,'hema23','hemalia','$2y$10$nCxe.3SNVGtyUby7v/PLdO8dz3mqrvvmFNaxvhM8s9p8pZZMCcxtu'),(10,'bimbim','bimbimbim','$2y$10$7RNce/1jO5kMy8arctweWO/3QTR2XGG9.y6GQKowoWfh1O40y/h6e');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_categories`
--

DROP TABLE IF EXISTS `work_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_categories` (
  `work_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`work_id`,`category_id`),
  UNIQUE KEY `work_categories_un` (`work_id`,`category_id`),
  KEY `work_categories_FK` (`category_id`),
  CONSTRAINT `work_categories_FK` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `work_categories_FK_1` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_categories`
--

LOCK TABLES `work_categories` WRITE;
/*!40000 ALTER TABLE `work_categories` DISABLE KEYS */;
INSERT INTO `work_categories` VALUES (77,89),(80,89),(74,90),(78,90),(84,90),(75,95),(76,95),(83,95),(85,95);
/*!40000 ALTER TABLE `work_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `works` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `content` longtext,
  `featured_image` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `works_un` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `works`
--

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;
INSERT INTO `works` VALUES (74,'Internship',2001,'<p>iia</p>','fitur 3.png','2022-09-22 16:51:03',1,'2022-09-29 20:28:41',1),(75,'Vibrant Portraits of 2020',2022,'<p>hai</p>','fitur 2.png','2022-09-22 16:56:01',1,'2022-09-29 16:51:49',10),(76,'36 Days of Malayalam type',2022,'<p>fa</p>','fitur 2.png','2022-09-22 16:56:02',1,'2022-09-29 16:51:49',1),(77,'Components',2022,'<p>hai</p>','fitur 3.png','2022-09-23 00:06:29',10,'2022-09-29 16:51:49',10),(78,'User Experience Design',2005,'<p>hai</p>','fitur 3.png','2022-09-23 00:10:08',10,'2022-09-29 16:54:45',10),(80,'Interactions of the week',2018,'<p>HAI</p>','fitur 3.png','2022-09-23 00:18:10',10,'2022-09-29 16:55:10',10),(81,'Clients and servers',2004,'<p>hai</p>','fitur 2.png','2022-09-23 00:19:37',10,'2022-09-29 16:57:22',10),(83,'Broadcaster',2022,'hai','fitur 3.png','2022-09-23 11:35:02',1,'2022-09-30 13:39:15',1),(84,'Composer',2022,'<p>hai</p>','avatar-2.jpg','2022-09-23 11:39:51',1,'2022-09-30 13:39:31',1),(85,'Criminologist',2022,'<p>HAI</p>','fitur 2.png','2022-09-29 14:08:59',1,'2022-09-30 13:39:01',1);
/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'portofolio'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-05 18:35:06

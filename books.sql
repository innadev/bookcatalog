-- MySQL dump 10.13  Distrib 5.7.20, for osx10.11 (x86_64)
--
-- Host: 127.0.0.1    Database: geekforless
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (3,'Supper'),(1,'Test 123456'),(2,'test uuuuu');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (12,'rybu','Жаклин Уилсон, Test Test','Рассказ, Роман','В свой день рождения Эйми пригласила нас на вечеринку с ночевкой! Мы танцевали как настоящие поп-звезды, примеряли наряды и соревновались, у кого в рот поместится больше чипсов. На дне рождения Беллы мы плавали в бассейне, а у Эмили играли в футбол! Хлоя приготовила разноцветные конвертики с приглашениями на свою вечеринку... для всех, кроме меня. Все равно ей пришлось меня позвать, но лучше бы я туда не ходила. \r\nСкоро и мой день рождения. Мне тоже хочется устроить вечеринку с ночевкой. Но я боюсь приглашать подруг к нам домой - ведь моя сестра Лили не такая, как все...			                ',1000),(13,'Вечеринка с ночевкой','Test Test, Yahoo','Рассказ, Сказка','В свой день рождения Эйми пригласила нас на вечеринку с ночевкой! Мы танцевали как настоящие поп-звезды, примеряли наряды и соревновались, у кого в рот поместится больше чипсов. На дне рождения Беллы мы плавали в бассейне, а у Эмили играли в футбол! Хлоя приготовила разноцветные конвертики с приглашениями на свою вечеринку... для всех, кроме меня. Все равно ей пришлось меня позвать, но лучше бы я туда не ходила. \r\nСкоро и мой день рождения. Мне тоже хочется устроить вечеринку с ночевкой. Но я боюсь приглашать подруг к нам домой - ведь моя сестра Лили не такая, как все...			            ',1000),(14,'супер','автор','автор','выпрмолфдОРПСАРОЛ            ',4),(15,'Infgh','апвра','прарп','    парт    ',432),(16,'\'\'\'\'----#;123','\'\'\'\'----#;','\'\'\'\'----#;','\'\'\'\'----#;                ',123);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books_authors`
--

DROP TABLE IF EXISTS `books_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books_authors` (
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books_authors`
--

LOCK TABLES `books_authors` WRITE;
/*!40000 ALTER TABLE `books_authors` DISABLE KEYS */;
INSERT INTO `books_authors` VALUES (2,16),(1,16),(1,15),(3,13),(2,14);
/*!40000 ALTER TABLE `books_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books_categories`
--

DROP TABLE IF EXISTS `books_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books_categories` (
  `category_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books_categories`
--

LOCK TABLES `books_categories` WRITE;
/*!40000 ALTER TABLE `books_categories` DISABLE KEYS */;
INSERT INTO `books_categories` VALUES (1,16),(1,15),(1,13),(3,14);
/*!40000 ALTER TABLE `books_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'afsfasf'),(3,'Janr'),(1,'test');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-19  1:14:15

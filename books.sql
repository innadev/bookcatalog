-- MySQL dump 10.13  Distrib 5.7.21, for osx10.11 (x86_64)
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
INSERT INTO `books` VALUES (12,'rybu','Жаклин Уилсон, Test Test','Рассказ, Роман','В свой день рождения Эйми пригласила нас на вечеринку с ночевкой! Мы танцевали как настоящие поп-звезды, примеряли наряды и соревновались, у кого в рот поместится больше чипсов. На дне рождения Беллы мы плавали в бассейне, а у Эмили играли в футбол! Хлоя приготовила разноцветные конвертики с приглашениями на свою вечеринку... для всех, кроме меня. Все равно ей пришлось меня позвать, но лучше бы я туда не ходила. \r\nСкоро и мой день рождения. Мне тоже хочется устроить вечеринку с ночевкой. Но я боюсь приглашать подруг к нам домой - ведь моя сестра Лили не такая, как все...			                ',1000),(13,'Вечеринка с ночевкой','Test Test, Yahoo','Рассказ, Сказка','В свой день рождения Эйми пригласила нас на вечеринку с ночевкой! Мы танцевали как настоящие поп-звезды, примеряли наряды и соревновались, у кого в рот поместится больше чипсов. На дне рождения Беллы мы плавали в бассейне, а у Эмили играли в футбол! Хлоя приготовила разноцветные конвертики с приглашениями на свою вечеринку... для всех, кроме меня. Все равно ей пришлось меня позвать, но лучше бы я туда не ходила. \r\nСкоро и мой день рождения. Мне тоже хочется устроить вечеринку с ночевкой. Но я боюсь приглашать подруг к нам домой - ведь моя сестра Лили не такая, как все...			        ',1000),(14,'супер','автор','автор','выпрмолфдОРПСАРОЛ        ',4),(15,'Infgh','апвра','прарп','    парт',432),(16,'\'\'\'\'----#;','\'\'\'\'----#;','\'\'\'\'----#;','\'\'\'\'----#;',123);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-05 22:27:17

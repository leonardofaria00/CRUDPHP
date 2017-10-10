CREATE DATABASE  IF NOT EXISTS `projeto5sch` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projeto5sch`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto5sch
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `dt_login` char(45) DEFAULT NULL,
  `dt_password` char(45) DEFAULT NULL,
  `dt_perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_login`
--

LOCK TABLES `tb_login` WRITE;
/*!40000 ALTER TABLE `tb_login` DISABLE KEYS */;
INSERT INTO `tb_login` VALUES (1,'admin','123',1),(2,'testedeacesso',NULL,NULL),(3,'acesso','123',NULL),(4,'acesso','123',2),(5,'robertadejesusdacruz@gmail.com','123',1),(6,'0000','0000',2),(7,'aaa','aaa',1);
/*!40000 ALTER TABLE `tb_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `dt_user` varchar(45) NOT NULL,
  `dt_telefone` varchar(45) NOT NULL,
  `dt_perfil` varchar(45) NOT NULL,
  `dt_status` int(1) NOT NULL,
  `dt_date` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (1,'admin','123','1',1,'0000-00-00'),(15,'LEONARDO FARIA DOS SANTOS','uuuu','1',0,'0000-00-00'),(43,'Luana Ketlen FariahHA','12343456','1',0,'2017-10-05'),(44,'Nome altarado','123','1',0,'2017-10-06'),(45,'sucesso1','123','1',0,'2017-10-06'),(46,'sus','susa','1',1,'2017-10-06'),(47,'abc','a','1',1,'2017-10-06'),(48,'Arnaldo Lopes','123','1',1,'2017-10-06'),(49,'','','',1,'2017-10-07'),(50,'test','lol','',0,'2017-10-07'),(51,'LEONARDO FARIA DOS SANTOS','','',1,'2017-10-07'),(52,'','','',1,'2017-10-07'),(53,'','','',1,'2017-10-07'),(54,'LEONARDO FARIA DOS SANTOS','123','',1,'2017-10-07'),(55,'LEONARDO FARIA DOS SANTOS','1234','1',1,'2017-10-07'),(56,'LEONARDO FARIA DOS SANTOS','oiu','2',1,'2017-10-07'),(57,'foigt','senha','1',1,'2017-10-07'),(58,'Roberta de Jesus da Cruz','roberta','2',0,'2017-10-08'),(59,'LEONARDO FARIA DOS SANTOS','3123','2',1,'0000-00-00'),(60,'teste','sdf','2',1,'0000-00-00'),(61,'LEONARDO FARIA DOS SANTOS','dfg','2',1,'0000-00-00'),(62,'test1','dasd','2',1,'0000-00-00'),(63,'LEONARDO FARIA DOS SANTOS','g','2',1,'0000-00-00'),(64,'LEONARDO FARIA DOS SANTOS','123132','2',1,'0000-00-00'),(65,'LEONARDO FARIA DOS SANTOS','sdfsdf','2',1,'0000-00-00'),(66,'foi','123','2',1,'0000-00-00'),(67,'AGORAVAI','ASDAD','2',1,'0000-00-00'),(68,'LEONARDO FARIA DOS SANTOS','ereg','2',1,'0000-00-00'),(69,'LEONARDO FARIA DOS SANTOS','bb','2',1,'2017-10-09'),(70,'erica irdes de faria','123123123123123123123','2',1,'2017-10-09'),(71,'LEONARDO FARIA DOS SANTOS','asd','2',1,'2017-10-09'),(72,'testecompleto','0000','2',1,'2017-10-09'),(73,'testecompleto100','0000','2',0,'2017-10-09'),(74,'LEONARDO FARIA DOS SANTOS','993532946','2',0,'2017-10-10'),(75,'erica irdes de faria0','993532946','2',1,'2017-10-10');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-10 13:44:58

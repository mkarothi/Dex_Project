-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: candor
-- ------------------------------------------------------
-- Server version	5.5.20-log

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
-- Table structure for table `batch_jobs_schedule`
--

DROP TABLE IF EXISTS `batch_jobs_schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batch_jobs_schedule` (
  `Job_ID` varchar(30) NOT NULL,
  `Job_Name` varchar(50) NOT NULL,
  `Server_Name` varchar(30) NOT NULL,
  `Credentials` varchar(50) NOT NULL,
  `Run_Day` varchar(20) NOT NULL,
  `Job_Start_Time` varchar(100) NOT NULL,
  `Job_Check_Time` varchar(100) NOT NULL,
  `Job_Usual_Run_Time` varchar(25) NOT NULL,
  `Application_Name` varchar(25) NOT NULL,
  `Created_On` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Job_ID`,`Job_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batch_jobs_schedule`
--

LOCK TABLES `batch_jobs_schedule` WRITE;
/*!40000 ALTER TABLE `batch_jobs_schedule` DISABLE KEYS */;
INSERT INTO `batch_jobs_schedule` VALUES ('10','Apache','dfwlnqdkweb-01','dkqa/dkqa','Every Day','6:00','07:15, 08:15','10 min','DexKnows','2018-06-07 20:43:23'),('20','Apache','dfwlnqdkweb-02','dkqa/dkqa','Wednesday','6:00','07:15, 08:16','10 min','DexKnows','2018-06-07 20:43:23'),('30','Tomcat','dfwlnqdkdt-01','dkqa/dkqa','Every Day','6:00','07:15, 08:17','10 min','DexKnows','2018-06-07 20:43:23'),('40','Tomcat','dfwlnqdkdt-02','dkqa/dkqa','Thursday','6:00','07:15, 08:18','10 min','DexKnows','2018-06-07 20:48:36');
/*!40000 ALTER TABLE `batch_jobs_schedule` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-09 12:25:34

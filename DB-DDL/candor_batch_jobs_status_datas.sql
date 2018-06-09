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
-- Table structure for table `batch_jobs_status_datas`
--

DROP TABLE IF EXISTS `batch_jobs_status_datas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batch_jobs_status_datas` (
  `Job_Entry` varchar(50) NOT NULL,
  `Server_Name` varchar(30) NOT NULL,
  `Job_Name` varchar(50) NOT NULL,
  `Job_Schedule_Start_Day` varchar(25) NOT NULL,
  `Job_Schedule_Start_Time` varchar(25) NOT NULL,
  `Job_Actual_Start_Time` varchar(25) NOT NULL,
  `Job_Actual_End_Time` varchar(25) NOT NULL,
  `Latest_Check_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Job_Latest_Status` varchar(500) NOT NULL,
  `Job_Status_Comments` varchar(100) NOT NULL,
  PRIMARY KEY (`Job_Entry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batch_jobs_status_datas`
--

LOCK TABLES `batch_jobs_status_datas` WRITE;
/*!40000 ALTER TABLE `batch_jobs_status_datas` DISABLE KEYS */;
INSERT INTO `batch_jobs_status_datas` VALUES ('2018-06-07_dfwlnqdkdt-01_Tomcat_Every Day_6:00','dfwlnqdkdt-01','Tomcat','Every Day','6:00','xx:xx','xx:xx','2018-06-07 21:55:42','Success','Finished without any errors'),('2018-06-07_dfwlnqdkdt-02_Tomcat_Thursday_6:00','dfwlnqdkdt-02','Tomcat','Thursday','6:00','xx:xx','xx:xx','2018-06-07 21:55:42','Success','Finished without any errors'),('2018-06-07_dfwlnqdkweb-01_Apache_Every Day_6:00','dfwlnqdkweb-01','Apache','Every Day','6:00','xx:xx1','xx:xx','2018-06-07 22:00:09','Success','Finished without any errors at 59'),('2018-06-07_dfwlnqdkweb-01_Apache_Every Day_6:001','dfwlnqdkweb-01','Apache','Every Day','6:00','xx:xx','xx:xx','2018-06-07 22:01:51','Success','Finished without any errors');
/*!40000 ALTER TABLE `batch_jobs_status_datas` ENABLE KEYS */;
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

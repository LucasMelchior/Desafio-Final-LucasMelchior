-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `idclientes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `celular` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`idclientes`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Lucas Gonçalves Melchior','1997-02-26','M','35303392854','11966561185','lucas.gunrox@hotmail.com.br','123456789','Ativo'),(2,'Lucas Gonçalves Melchior','1997-04-25','F','35303395845','11966561184','lucas.mechior@hotmail.com','123456789','Inativo'),(3,'Rafael ','1998-02-23','M','35303325841','11955586354','Rafael@hotmail.com','123456789','Inativo'),(4,'Gabriela lorenzo','1995-02-01','F','35303392851','11966546851','gabriela.lorenzo@hotmail.com','123456789','Ativo');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-07 17:26:52

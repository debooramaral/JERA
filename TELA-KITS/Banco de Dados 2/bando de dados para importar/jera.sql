-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 192.168.22.9    Database: jera
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `brinde`
--

DROP TABLE IF EXISTS `brinde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brinde` (
  `id_brinde` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `quantidade` int NOT NULL,
  `fk_br_usuario` int NOT NULL,
  `fk_objeto_brinde` int NOT NULL,
  PRIMARY KEY (`id_brinde`),
  KEY `fk_br_usuario` (`fk_br_usuario`),
  KEY `fk_objeto_brinde` (`fk_objeto_brinde`),
  CONSTRAINT `fk_br_usuario` FOREIGN KEY (`fk_br_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `fk_objeto_brinde` FOREIGN KEY (`fk_objeto_brinde`) REFERENCES `objeto_brinde` (`id_objeto_brinde`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brinde`
--

LOCK TABLES `brinde` WRITE;
/*!40000 ALTER TABLE `brinde` DISABLE KEYS */;
/*!40000 ALTER TABLE `brinde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrada_brinde`
--

DROP TABLE IF EXISTS `entrada_brinde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entrada_brinde` (
  `id_entrada_brinde` int NOT NULL AUTO_INCREMENT,
  `data_entrada_brinde` date NOT NULL,
  `quantidade_entrada` int NOT NULL,
  `fk_en_brinde` int NOT NULL,
  `fk_referencia_objeto_brinde_entrada` int NOT NULL,
  PRIMARY KEY (`id_entrada_brinde`),
  KEY `fk_en_brinde` (`fk_en_brinde`),
  KEY `fk_referencia_objeto_brinde_entrada` (`fk_referencia_objeto_brinde_entrada`),
  CONSTRAINT `fk_en_brinde` FOREIGN KEY (`fk_en_brinde`) REFERENCES `brinde` (`id_brinde`),
  CONSTRAINT `fk_referencia_objeto_brinde_entrada` FOREIGN KEY (`fk_referencia_objeto_brinde_entrada`) REFERENCES `objeto_brinde` (`id_objeto_brinde`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrada_brinde`
--

LOCK TABLES `entrada_brinde` WRITE;
/*!40000 ALTER TABLE `entrada_brinde` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrada_brinde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipamento` (
  `id_equipamento` int NOT NULL AUTO_INCREMENT,
  `cod_patrimonio` int DEFAULT NULL,
  `descricao` varchar(255) NOT NULL,
  `fk_status` int NOT NULL,
  `fk_objeto_equipamento` int NOT NULL,
  `fk_estado_conservacao` int NOT NULL,
  PRIMARY KEY (`id_equipamento`),
  KEY `fk_estado_conservacao` (`fk_estado_conservacao`),
  KEY `fk_objeto_equipamento` (`fk_objeto_equipamento`),
  KEY `fk_status` (`fk_status`),
  CONSTRAINT `fk_estado_conservacao` FOREIGN KEY (`fk_estado_conservacao`) REFERENCES `estado_conservacao` (`id_estado_conservacao`),
  CONSTRAINT `fk_objeto_equipamento` FOREIGN KEY (`fk_objeto_equipamento`) REFERENCES `objeto_equipamento` (`id_objeto_equipamento`),
  CONSTRAINT `fk_status` FOREIGN KEY (`fk_status`) REFERENCES `status_equipamento` (`id_status_equipamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamento`
--

LOCK TABLES `equipamento` WRITE;
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_conservacao`
--

DROP TABLE IF EXISTS `estado_conservacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_conservacao` (
  `id_estado_conservacao` int NOT NULL AUTO_INCREMENT,
  `estado_conservacao` varchar(20) NOT NULL,
  PRIMARY KEY (`id_estado_conservacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_conservacao`
--

LOCK TABLES `estado_conservacao` WRITE;
/*!40000 ALTER TABLE `estado_conservacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado_conservacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itens_kit`
--

DROP TABLE IF EXISTS `itens_kit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `itens_kit` (
  `id_itens_kit` int NOT NULL AUTO_INCREMENT,
  `fk_brinde` int NOT NULL,
  `quantidade_brinde` int NOT NULL,
  `fk_kits` int NOT NULL,
  PRIMARY KEY (`id_itens_kit`),
  KEY `fk_kits` (`fk_kits`),
  KEY `fk_brinde` (`fk_brinde`),
  CONSTRAINT `fk_brinde` FOREIGN KEY (`fk_brinde`) REFERENCES `brinde` (`id_brinde`),
  CONSTRAINT `fk_kits` FOREIGN KEY (`fk_kits`) REFERENCES `kits` (`id_kits`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itens_kit`
--

LOCK TABLES `itens_kit` WRITE;
/*!40000 ALTER TABLE `itens_kit` DISABLE KEYS */;
/*!40000 ALTER TABLE `itens_kit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kits`
--

DROP TABLE IF EXISTS `kits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kits` (
  `id_kits` int NOT NULL AUTO_INCREMENT,
  `nome_kit` varchar(40) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `fk_kt_usuario` int NOT NULL,
  PRIMARY KEY (`id_kits`),
  KEY `fk_kt_usuario` (`fk_kt_usuario`),
  CONSTRAINT `fk_kt_usuario` FOREIGN KEY (`fk_kt_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kits`
--

LOCK TABLES `kits` WRITE;
/*!40000 ALTER TABLE `kits` DISABLE KEYS */;
/*!40000 ALTER TABLE `kits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objeto_brinde`
--

DROP TABLE IF EXISTS `objeto_brinde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `objeto_brinde` (
  `id_objeto_brinde` int NOT NULL AUTO_INCREMENT,
  `nome_objeto_brinde` varchar(20) NOT NULL,
  PRIMARY KEY (`id_objeto_brinde`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objeto_brinde`
--

LOCK TABLES `objeto_brinde` WRITE;
/*!40000 ALTER TABLE `objeto_brinde` DISABLE KEYS */;
/*!40000 ALTER TABLE `objeto_brinde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objeto_equipamento`
--

DROP TABLE IF EXISTS `objeto_equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `objeto_equipamento` (
  `id_objeto_equipamento` int NOT NULL AUTO_INCREMENT,
  `nome_objeto_equipamento` varchar(30) NOT NULL,
  PRIMARY KEY (`id_objeto_equipamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objeto_equipamento`
--

LOCK TABLES `objeto_equipamento` WRITE;
/*!40000 ALTER TABLE `objeto_equipamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `objeto_equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordem_solicitacao_equipamento`
--

DROP TABLE IF EXISTS `ordem_solicitacao_equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordem_solicitacao_equipamento` (
  `id_ordem` int NOT NULL AUTO_INCREMENT,
  `fk_pedido_equipamento` int NOT NULL,
  `fk_status_validacao` int NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `fk_usuario` int NOT NULL,
  PRIMARY KEY (`id_ordem`),
  KEY `fk_pedido_equipamento` (`fk_pedido_equipamento`),
  KEY `fk_status_validacao` (`fk_status_validacao`),
  KEY `fk_usuario` (`fk_usuario`),
  CONSTRAINT `fk_pedido_equipamento` FOREIGN KEY (`fk_pedido_equipamento`) REFERENCES `pedido_equipamento` (`id_pedido`),
  CONSTRAINT `fk_status_validacao` FOREIGN KEY (`fk_status_validacao`) REFERENCES `status_validacao` (`id_status`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordem_solicitacao_equipamento`
--

LOCK TABLES `ordem_solicitacao_equipamento` WRITE;
/*!40000 ALTER TABLE `ordem_solicitacao_equipamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordem_solicitacao_equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_equipamento`
--

DROP TABLE IF EXISTS `pedido_equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido_equipamento` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `dia_solicitacao` date NOT NULL,
  `descricao_pedido` varchar(255) NOT NULL,
  `validacao` int NOT NULL,
  `fk_equipamento` int NOT NULL,
  `fk_pedido_usuario` int NOT NULL,
  `fk_validacao` int NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_equipamento` (`fk_equipamento`),
  KEY `fk_pedido_usuario` (`fk_pedido_usuario`),
  KEY `fk_validacao` (`fk_validacao`),
  CONSTRAINT `fk_equipamento` FOREIGN KEY (`fk_equipamento`) REFERENCES `equipamento` (`id_equipamento`),
  CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`fk_pedido_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `fk_validacao` FOREIGN KEY (`fk_validacao`) REFERENCES `status_validacao` (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_equipamento`
--

LOCK TABLES `pedido_equipamento` WRITE;
/*!40000 ALTER TABLE `pedido_equipamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil_usuario`
--

DROP TABLE IF EXISTS `perfil_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil_usuario` (
  `id_perfil_usuario` int NOT NULL AUTO_INCREMENT,
  `nivel_usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id_perfil_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil_usuario`
--

LOCK TABLES `perfil_usuario` WRITE;
/*!40000 ALTER TABLE `perfil_usuario` DISABLE KEYS */;
INSERT INTO `perfil_usuario` VALUES (1,'Administrador'),(2,'Gestor'),(3,'Colaborador');
/*!40000 ALTER TABLE `perfil_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saida_brinde`
--

DROP TABLE IF EXISTS `saida_brinde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saida_brinde` (
  `id_saida_brinde` int NOT NULL AUTO_INCREMENT,
  `data_saida` date NOT NULL,
  `quantidade_saida` int NOT NULL,
  `fk_s_brinde` int NOT NULL,
  `fk_referencia_objeto_brinde_saida` int NOT NULL,
  PRIMARY KEY (`id_saida_brinde`),
  KEY `fk_referencia_objeto_brinde_saida` (`fk_referencia_objeto_brinde_saida`),
  KEY `fk_s_brinde` (`fk_s_brinde`),
  CONSTRAINT `fk_referencia_objeto_brinde_saida` FOREIGN KEY (`fk_referencia_objeto_brinde_saida`) REFERENCES `objeto_brinde` (`id_objeto_brinde`),
  CONSTRAINT `fk_s_brinde` FOREIGN KEY (`fk_s_brinde`) REFERENCES `brinde` (`id_brinde`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saida_brinde`
--

LOCK TABLES `saida_brinde` WRITE;
/*!40000 ALTER TABLE `saida_brinde` DISABLE KEYS */;
/*!40000 ALTER TABLE `saida_brinde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saida_kit`
--

DROP TABLE IF EXISTS `saida_kit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saida_kit` (
  `id_saida_kit` int NOT NULL AUTO_INCREMENT,
  `data_saida_kit` date NOT NULL,
  `quantidade` int NOT NULL,
  `fk_itens_kit` int NOT NULL,
  `fk_kts_usuario` int NOT NULL,
  PRIMARY KEY (`id_saida_kit`),
  KEY `fk_itens_kit` (`fk_itens_kit`),
  KEY `fk_kts_usuario` (`fk_kts_usuario`),
  CONSTRAINT `fk_itens_kit` FOREIGN KEY (`fk_itens_kit`) REFERENCES `itens_kit` (`id_itens_kit`),
  CONSTRAINT `fk_kts_usuario` FOREIGN KEY (`fk_kts_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saida_kit`
--

LOCK TABLES `saida_kit` WRITE;
/*!40000 ALTER TABLE `saida_kit` DISABLE KEYS */;
/*!40000 ALTER TABLE `saida_kit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_equipamento`
--

DROP TABLE IF EXISTS `status_equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_equipamento` (
  `id_status_equipamento` int NOT NULL AUTO_INCREMENT,
  `status_equipamento` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status_equipamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_equipamento`
--

LOCK TABLES `status_equipamento` WRITE;
/*!40000 ALTER TABLE `status_equipamento` DISABLE KEYS */;
INSERT INTO `status_equipamento` VALUES (1,'Em Manutenção'),(2,'indisponível'),(3,'Disponível'),(4,'Inativo');
/*!40000 ALTER TABLE `status_equipamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_validacao`
--

DROP TABLE IF EXISTS `status_validacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_validacao` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_validacao`
--

LOCK TABLES `status_validacao` WRITE;
/*!40000 ALTER TABLE `status_validacao` DISABLE KEYS */;
INSERT INTO `status_validacao` VALUES (1,'Em Analise'),(2,'Aprovado'),(3,'Recusado');
/*!40000 ALTER TABLE `status_validacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `telefone` bigint NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ativo_inativo` tinyint(1) NOT NULL,
  `fk_perfil` int NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_perfil` (`fk_perfil`),
  CONSTRAINT `fk_perfil` FOREIGN KEY (`fk_perfil`) REFERENCES `perfil_usuario` (`id_perfil_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Sara','Root',6799879942,'teste@teste.com','teste123','.jpg',1,1),(2,'Enilda','Cáceres',67985127694,'enilda@teste.com','teste123','enilda.jpg',1,2),(3,'Esther','Rosa',67964731594,'esther@teste.com','teste123','esther.jpg',1,3),(4,'irineu','rosa',67991914444,'iri@teste.com','teste123','irineu.jpg',1,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-31 17:05:20
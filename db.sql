-- MySQL dump 10.13  Distrib 8.0.29, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: dashboard
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `nomPlan`
--

DROP TABLE IF EXISTS `nomPlan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nomPlan` (
  `idPlan` int NOT NULL,
  `nombrePlan` varchar(45) DEFAULT NULL,
  `productosMax` int DEFAULT NULL,
  PRIMARY KEY (`idPlan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nomPlan`
--

LOCK TABLES `nomPlan` WRITE;
/*!40000 ALTER TABLE `nomPlan` DISABLE KEYS */;
INSERT INTO `nomPlan` VALUES (0,'admin',1000000),(1,'basico',100),(2,'platino',1000),(3,'premium',10000);
/*!40000 ALTER TABLE `nomPlan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planes`
--

DROP TABLE IF EXISTS `planes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `planes` (
  `idplanes` int NOT NULL,
  `idUsuario` varchar(100) NOT NULL,
  `admin` varchar(45) NOT NULL,
  `crearProducto` int NOT NULL,
  `entradaProducto` int NOT NULL,
  `proveedores` int NOT NULL,
  `reportes` int NOT NULL,
  `crearProductos` int NOT NULL,
  `crearCobros` int NOT NULL,
  `Mail` int NOT NULL,
  `respaldo` int NOT NULL,
  `clientes` int NOT NULL,
  `promociones` int NOT NULL,
  `fechaInicio` varchar(100) NOT NULL,
  `fechaCorte` varchar(100) NOT NULL,
  `pago` varchar(100) NOT NULL,
  PRIMARY KEY (`fechaInicio`,`fechaCorte`,`pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planes`
--

LOCK TABLES `planes` WRITE;
/*!40000 ALTER TABLE `planes` DISABLE KEYS */;
INSERT INTO `planes` VALUES (4,'131','1',1,1,1,1,1,1,1,1,1,1,'2023-02-23 08:02:00','25-03-2123','0'),(1,'207','0',1,0,0,0,1,0,0,0,0,0,'2023-02-25 09:02:41','27-03-2023','100'),(3,'209','0',1,1,1,1,1,1,1,1,1,1,'2023-02-25 09:02:47','27-03-2023','300'),(2,'211','0',1,1,1,0,1,0,0,0,0,0,'2023-02-27 01:02:09','29-03-2023','200'),(2,'212','0',1,1,1,0,1,0,0,0,0,0,'2023-02-27 01:02:42','29-03-2023','200'),(2,'210','0',1,1,1,0,1,0,0,0,0,0,'2023-02-27 12:02:12','29-03-2023','200');
/*!40000 ALTER TABLE `planes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registro` (
  `idregistro` int NOT NULL AUTO_INCREMENT,
  `accion` varchar(150) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idregistro`)
) ENGINE=InnoDB AUTO_INCREMENT=445 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` VALUES (407,'Creación de usuario:.aldrin.','alisgoes@gmail.com','2023-02-25 09:02:41'),(408,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:52'),(409,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:55'),(410,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:55'),(411,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:55'),(412,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:55'),(413,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:55'),(414,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:55'),(415,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:21:56'),(416,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:22:49'),(417,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:26:50'),(418,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:28:28'),(419,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:29:10'),(420,'Inicio sesión admin@gmail.com','admin@gmail.com','2023-02-25 09:29:16'),(421,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:29:37'),(422,'Creación de usuario:.alrin.','alisgoes@gmail.com','2023-02-25 09:02:47'),(423,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:30:58'),(424,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:31:42'),(425,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-25 09:33:11'),(426,'Inicio sesión admin@gmail.com','admin@gmail.com','2023-02-26 11:54:06'),(427,'Inicio sesión admin@gmail.com','admin@gmail.com','2023-02-26 11:58:06'),(428,'Inicio sesión admin@gmail.com','admin@gmail.com','2023-02-26 11:58:50'),(429,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-26 11:59:21'),(430,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-26 11:59:43'),(431,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-27 12:00:16'),(432,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-27 12:05:28'),(433,'Inicio sesión admin@gmail.com','admin@gmail.com','2023-02-27 12:05:36'),(434,'Fallo inicio de sesión alisgoes@gmail.com','alisgoes@gmail.com','2023-02-27 12:07:16'),(435,'Creación de usuario:.kerem.','kerem@gmail.com','2023-02-27 12:02:12'),(436,'Inicio sesión kerem@gmail.com','kerem@gmail.com','2023-02-27 12:08:22'),(437,'Inicio sesión admin@gmail.com','admin@gmail.com','2023-02-27 12:10:25'),(438,'Inicio sesión kerem@gmail.com','kerem@gmail.com','2023-02-27 12:55:54'),(439,'Inicio sesión kerem@gmail.com','kerem@gmail.com','2023-02-27 01:00:59'),(440,'Creación de usuario:.algh.','esdfgh@fgh.ghjkl','2023-02-27 01:02:09'),(441,'Inicio sesión esdfgh@fgh.ghjkl','esdfgh@fgh.ghjkl','2023-02-27 01:14:24'),(442,'Creación de usuario:.sasd.','asds@asda.asd','2023-02-27 01:02:42'),(443,'Inicio sesión kerem@gmail.com','kerem@gmail.com','2023-02-27 01:33:43'),(444,'Inicio sesión kerem@gmail.com','kerem@gmail.com','2023-02-27 01:36:48');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `idusuarios` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `puesto` int DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `nomEmpresa` varchar(100) DEFAULT NULL,
  `nomDB` varchar(100) DEFAULT NULL,
  `priv1` varchar(100) DEFAULT NULL,
  `priv2` varchar(100) DEFAULT NULL,
  `priv3` varchar(100) DEFAULT NULL,
  `priv4` varchar(100) DEFAULT NULL,
  `color1` varchar(45) DEFAULT NULL,
  `color2` varchar(45) DEFAULT NULL,
  `color3` varchar(45) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `idPlan` varchar(45) DEFAULT NULL,
  `fechaCreacion` varchar(100) DEFAULT NULL,
  `lastUpdate` varchar(100) DEFAULT NULL,
  `fechaFinPlan` datetime DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (131,'admin@gmail.com','$2y$10$EadpFSElWVrbZfMkP.LrKeKsWC1ghqe.emwIRVeSzDpVCJLpUWbXa',1,'aldrin','alisgoes','alisgoes','tienda','inventario','corte','proveedores','#0feff0','#0834fb','#31fe10','img11.jpg','3','2023-02-06 08:02:59','2023-02-24 02:02:26',NULL),(209,'alisgoes@gmail.com','$2y$10$nebu7m2rfu0XXYbEHoca1OD/Gj362NxO87ULiKI/yNYA9GrtsLQzW',1,'alrin','alisgoes','30a_alisgoes','tienda','inventario','corte','proveedores','#000000','#a3cafb','#000000','img11.jpg','3','2023-02-25 09:02:47',NULL,NULL),(210,'kerem@gmail.com','$2y$10$E6UFf3zTDUU5VFVdxG/sZufVqRINk9IXfq8wBx8DlBMWuq5SRXYbi',1,'kerem','kerem','7d5_kerem','tienda','inventario','corte','proveedores','#000000','#ddd4ec','#000000','img11.jpg','1','2023-02-27 12:02:12',NULL,NULL),(211,'esdfgh@fgh.ghjkl','$2y$10$hyXeJTQHTxoQM51bDZDztOD3gnTx.zipXnrapjXyh1ZuJPzY99Z4K',1,'algh','aldrin','bb3_aldrin','tienda','inventario','corte','proveedores','#a7d1eb','#000000','#f2f2f2','img11.jpg','2','2023-02-27 01:02:09',NULL,NULL),(212,'asds@asda.asd','$2y$10$g.Kv4RLwpEfSufUm4VGs.OvC7G.idspNWl.lGEAzVMZ/pfu.Z0HO6',1,'sasd','asdas','49b_asdas','tienda','inventario','corte','proveedores','#000000','#000000','#000000','img11.jpg','2','2023-02-27 01:02:42',NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-27 13:42:09

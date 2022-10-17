-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tpoweb2
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `info_pesca`
--

DROP TABLE IF EXISTS `info_pesca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_pesca` (
  `id_pesca` int(11) NOT NULL AUTO_INCREMENT,
  `embarcado` varchar(2) NOT NULL,
  `tipo_embarcacion` varchar(15) NOT NULL,
  `equipo_pesca` text NOT NULL,
  `carnada` text NOT NULL,
  `pesca` text NOT NULL,
  `Detalles_Pesca` text NOT NULL,
  `id_localidad_fk` int(11) NOT NULL,
  PRIMARY KEY (`id_pesca`),
  KEY `Fk_localidad` (`id_localidad_fk`),
  CONSTRAINT `Fk_localidad` FOREIGN KEY (`id_localidad_fk`) REFERENCES `localidades` (`id_localidad`)
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_pesca`
--

LOCK TABLES `info_pesca` WRITE;
/*!40000 ALTER TABLE `info_pesca` DISABLE KEYS */;
INSERT INTO `info_pesca` VALUES (238,'Si','embarcacionamot','Caña de hasta 2,2 Mts, de 80 libras en adelante,reel rotativo desde 4/0 en adelante capacidad de naylon minima 200 mts de 80 libras, anzuelos N° 5/0 en adelante, lineas de uno o varios anzuelos con un maximo de cinco',' Magru fresco, anchoita,calamar','Salmones, meros,chernias, y variada en general','En la pesca de embarcado, se desciende la línea hasta el fondo y se hace pivotear para atraer los peces.  ',11),(239,'Si','Kayak','Caña de hasta 1,6 mts, desde 40 libras en adelante reel rotativo o frontalcon capacidad de 200 mts naylon N° 60 libras o linea de mano con soga, anzuelos desde 2/0 hasta 6/0, linea recomendada no mas de 2 anzuelos','Magru fresco, anchoita','Pescadilla, brotolas, corvinas','En la pesca desde el kayak no siempre es recomendable tratar de llegar al fondo con la línea. El pique puede estar en distintas profundidades. ',11),(240,'No','costa','Caña telescopica, de tramos o enteriza, hasta 4,20 mts accion de punta maximo 30 libras,reel frontal con capacidad minima en naylon de 80 mts maximo  n 30,en multifilamento del n 12 hasta el 18  lineas de 2 anzuelos minimo hasta un maximo de cinco, tipo de anzuelos según el tamaño desde N° 1 hasta N° 3','Camaron, filet de pejerey','Pejerrey','Pesca de pejerrey, luego de lanzar la linea se intenta llamar la atención del pez juntando la misma linea para generar movimiento en la carnada.',11),(241,'Si','embarcacionamot','Caña de tramos o enteriza de hasta 4,2 mts, numero 07 hasta 10, resistencia hasta 250 gramos de peso para el lance, reel frontal o rotativo con capacidad minima de 100 mts naylon 40 en adelante, linea de hasta 2 anzuelos minimo N° 2/0 maximo hasta 10/0','Anchoa, magru, langostino, calamar','Pescadilla, corvina, brotola, pez gallo','Pesca de variada desde la costa. No siempre está cerca de la orilla. Es recomendable llevar un rulero para ponerle seva, cómo se pesca anclado, la misma seba atrae el pez.   ',11);
/*!40000 ALTER TABLE `info_pesca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localidades`
--

DROP TABLE IF EXISTS `localidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localidades` (
  `id_localidad` int(11) NOT NULL AUTO_INCREMENT,
  `localidad` varchar(30) DEFAULT NULL,
  KEY `ID` (`id_localidad`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidades`
--

LOCK TABLES `localidades` WRITE;
/*!40000 ALTER TABLE `localidades` DISABLE KEYS */;
INSERT INTO `localidades` VALUES (11,'NECOCHEA'),(40,'Mar del plata');
/*!40000 ALTER TABLE `localidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'guido.cipo20@gmail.com','$2a$12$R6CBNp0dugCIGuTYtD6Ow.PEzMtkU1z9LTcHi7Rv5WaEkDwrlKYB6');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-17 11:48:03

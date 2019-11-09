-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: phone_review
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devices` (
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `release_dt` varchar(50) DEFAULT NULL,
  `ratings` double DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
INSERT INTO `devices` VALUES ('Honor 10 Lite','Honor','2018, September',4.4,'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-honor-8x-0.jpg'),('Honor 20i','Honor','2019, April',4.3,'https://fdn2.gsmarena.com/vv/pics/honor/honor-20i-0.jpg'),('Honor 8C','Honor','2018, October',4.3,'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-honor-8c-2.jpg'),('Honor 8X','Honor','2018, September',4.4,'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-honor-8x-0.jpg'),('Honor 9i','Honor','2017, October',4.3,'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-mate-10-lite-4.jpg'),('Honor 9N','Honor','2018, July',4.3,'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-honor-9n-1.jpg'),('Infinix Hot 8','Infinix','2019, September',4.5,'https://fdn2.gsmarena.com/vv/pics/infinix/infinix-hot-s8-1.jpg'),('Lenovo K9 Note','Lenovo','2018, June',4.1,'https://fdn2.gsmarena.com/vv/pics/lenovo/lenovo-k5-note-k9-note-1.jpg'),('Micromax Canvas Infinity Pro','Micromax','2017, December',4,'https://fdn2.gsmarena.com/vv/pics/micromax/micromax-canvas-infinity-pro-hs3.jpg'),('Moto E6s','Moto','2019, September',4.1,'https://fdn2.gsmarena.com/vv/pics/motorola/motorola-moto-e6-plus-2.jpg'),('Moto G7','Moto','2019, February',4.3,'https://fdn2.gsmarena.com/vv/pics/motorola/motorola-moto-g7-power-0.jpg'),('Motorola One Action','Motorola','2019, August',4.2,'https://fdn2.gsmarena.com/vv/pics/motorola/motorola-one-action-denim-gray.jpg'),('Motorola One Vision','Motorola','2019, May',4.1,'https://fdn2.gsmarena.com/vv/pics/motorola/motorola-one-vision-0.jpg'),('OPPO A5','OPPO','2019, September',4.4,'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-a5-2020-4.jpg'),('OPPO A5 2020','OPPO','2019, September',4.4,'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-a5-2020-4.jpg'),('OPPO A7','OPPO','2018, November',4.4,'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-a7-1.jpg'),('OPPO F11','OPPO','2019, March',4.5,'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-f11-pro-10.jpg'),('OPPO K1','OPPO','2018, October',4.4,'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-k1-1.jpg'),('Realme 2 Pro','Realme','2018, September',4.5,'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-realme-2-pro-1.jpg'),('Realme 3','Realme','2019, April',4.4,'https://fdn2.gsmarena.com/vv/pics/realme/realme-3pro-3.jpg'),('Realme 3 Pro','Realme','2019, April',4.5,'https://fdn2.gsmarena.com/vv/pics/realme/realme-3pro-3.jpg'),('Realme 3i','Realme','2019, July',4.4,'https://fdn2.gsmarena.com/vv/pics/realme/realme-3i-01.jpg'),('Realme 5','Realme','2019, August',4.5,'https://fdn2.gsmarena.com/vv/pics/realme/realme-5-pro-rmx1971-1.jpg'),('Realme 5 Pro','Realme','2019, August',4.5,'https://fdn2.gsmarena.com/vv/pics/realme/realme-5-pro-rmx1971-1.jpg'),('Realme X','Realme','Exp. announcement 2019, October 15',4.5,'https://fdn2.gsmarena.com/vv/bigpic/realme-xt-730g.jpg'),('Realme XT','Realme','2019, September',4.5,'https://fdn2.gsmarena.com/vv/pics/realme/realme-xt.jpg'),('Redmi 6 Pro','Redmi','2018, July',4.3,'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-mi-a2-lite-1.jpg'),('Redmi Note 5','Redmi','2018, February',4.4,'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-5-pro-1.jpg'),('Redmi Note 5 Pro','Redmi','2018, February',4.5,'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-5-pro-1.jpg'),('Redmi Note 7 Pro','Redmi','2019, February',4.5,'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-7-pro-1.jpg'),('Redmi Note 7S','Redmi','2019, May',4.5,'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-7s-1.jpg'),('Redmi Y3','Redmi','2019, April',4.4,'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-s3-1.jpg'),('Samsung Galaxy A50s','Samsung','2019, August',4.4,'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a50s-1.jpg'),('Samsung Galaxy S9','Samsung','2018, February',4.5,'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s9-1.jpg'),('Vivo Y12','Vivo','2019, June',4.3,'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-y12-1.jpg'),('Vivo Y15','Vivo','2019, May',4.4,'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-y15-01.jpg'),('Vivo Y17','Vivo','2019, April',4.4,'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-y3-1.jpg'),('Vivo Z1Pro','Vivo','2019, July',4.5,'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-z1-pro-1.jpg');
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-09 14:19:09

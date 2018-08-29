-- Generation time: Mon, 27 Aug 2018 22:25:22 +0000
-- Host: mysql.hostinger.ro
-- DB name: u574849695_25
/*!40030 SET NAMES UTF8 */;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `PK_user` int(15) unsigned NOT NULL,
  `login`` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Tipo_User` varchar(255) NOT NULL,
  `Create_Date` datetime NOT NULL,
  PRIMARY KEY (`PK_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `User` VALUES ('0','fidel.weissnat','myrtle.rosenbaum@mayert.com','zjenkins','Grayson','2005-09-28 22:01:54'),
('1','abayer','mervin56@johnston.com','sgoldner','Joan','2000-11-22 07:43:03'),
('2','eharber','rath.marley@sawaynheaney.com','ocrooks','Jeremy','2000-07-13 21:10:27'),
('3','grady.general','shields.abel@hotmail.com','mertz.camren','Chelsie','1978-07-14 04:46:52'),
('4','jensen47','jratke@collierbeatty.com','sharon.ritchie','Ewald','2010-08-20 02:30:49'),
('5','moriah.swift','greenfelder.gunner@hotmail.com','derek98','Pearline','1996-01-19 00:46:04'),
('6','hyman.kutch','willard.fadel@green.info','asawayn','Berenice','2012-03-01 05:45:58'),
('7','jan05','tbayer@gmail.com','samson.armstrong','Narciso','2011-08-10 16:03:47'),
('8','tad30','joanie.weissnat@stehr.biz','boyd.langosh','Katrine','1981-05-29 22:16:29'),
('9','lkutch','aurelia.smitham@gmail.com','cletus85','Laverna','1993-11-25 03:38:20'); 

UPDATE `user` SET `login` = 'admin', `password` = 'admin' WHERE `user`.`PK_user` = 0;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


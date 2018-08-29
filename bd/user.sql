-- Generation time: Wed, 29 Aug 2018 19:14:53 +0000
-- Host: mysql.hostinger.ro
-- DB name: u574849695_23
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
  `PK_user` int(150) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Tipo_User` varchar(255) NOT NULL,
  PRIMARY KEY (`PK_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `User` VALUES ('1','Rosalyn','nelson.simonis@prohaska.net','jgleichner','Arnaldo'),
('2','Ansley','zsmith@gmail.com','terry.theodora','Garnet'),
('3','Asha','janie.sipes@spinka.com','wjones','Cara'),
('4','Aniya','mya.johns@hotmail.com','malvina98','Ernie'),
('5','Ludie','macejkovic.dejon@marquardt.com','devyn54','Emory'),
('6','Elvis','sally.nitzsche@gmail.com','morar.kathleen','Martine'),
('7','Vivien','krystel41@stiedemann.com','ylehner','Armando'),
('8','Myrtle','shyanne.frami@weimann.biz','blangworth','Elinor'),
('9','Heath','murray.colleen@gmail.com','freeda.weber','Brandyn'),
('10','Anderson','phyatt@cartwright.biz','ysporer','Abdullah'); 

UPDATE `user` SET `login` = 'admin', `password` = 'admin' WHERE `user`.`PK_user` = 1;
UPDATE `user` SET `Tipo_User` = 'normal_user';
UPDATE `user` SET `Tipo_User` = 'admin' WHERE `user`.`PK_user` = 1;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


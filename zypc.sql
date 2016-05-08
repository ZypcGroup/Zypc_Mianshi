/*
SQLyog Community v12.2.1 (64 bit)
MySQL - 5.6.26-log : Database - zypc2016
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`zypc2016` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `zypc2016`;

/*Table structure for table `judgers` */

DROP TABLE IF EXISTS `judgers`;

CREATE TABLE `judgers` (
  `jid` int(11) NOT NULL AUTO_INCREMENT,
  `jname` char(20) NOT NULL,
  `jtel` char(11) NOT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Data for the table `judgers` */

insert  into `judgers`(`jid`,`jname`,`jtel`) values 
(23,'zypc','zypc'),
(24,'侯娇娇','18829290156'),
(25,'郭遗欢','18829272629'),
(26,'师凡凡','15091768393'),
(27,'强薇','15667022368'),
(28,'齐玥','18829290952'),
(29,'李雄','18829291060'),
(30,'陈政','15829305659');

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schoolnum` char(8) NOT NULL,
  `detail` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

/*Data for the table `message` */

insert  into `message`(`id`,`schoolnum`,`detail`,`time`,`email`) values 
(34,'05136135','哈喽你好','2016-04-24 19:16:42','1623143672@qq.com');

/*Table structure for table `record` */

DROP TABLE IF EXISTS `record`;

CREATE TABLE `record` (
  `recordid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `basic` text,
  `advance` text,
  `general` text,
  `grade` char(2) DEFAULT '0',
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `judgerid` int(11) NOT NULL DEFAULT '0',
  `status` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recordid`),
  KEY `userid` (`userid`,`grade`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `record` */

insert  into `record`(`recordid`,`userid`,`basic`,`advance`,`general`,`grade`,`time`,`judgerid`,`status`) values 
(27,1059,'C语言\r\nJava\r\n','数据结构\r\n操作系统','还行\r\n','1','2016-04-24 18:42:52',23,'A'),
(28,1059,'C语言\r\n','数据结构\r\n算法','很好','1','2016-04-24 18:55:20',23,'B');

/*Table structure for table `session` */

DROP TABLE IF EXISTS `session`;

CREATE TABLE `session` (
  `sessionid` int(1) NOT NULL AUTO_INCREMENT,
  `judgername` char(20) NOT NULL,
  `schoolnum` char(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sessionid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `session` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `schoolnum` char(8) NOT NULL,
  `name` char(20) NOT NULL,
  `tel` char(20) NOT NULL,
  `class` char(20) NOT NULL,
  `status` char(2) NOT NULL DEFAULT '',
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `schoolnum` (`schoolnum`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=1064 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`userid`,`schoolnum`,`name`,`tel`,`class`,`status`,`regtime`) values 
(1059,'05136135','侯娇娇','18829290156','集成电路设计与集成系统1304','0','2016-04-24 17:35:12'),
(1060,'11111111','测试一','11111111111','测试1','0','2016-04-24 19:19:20'),
(1061,'22222222','测试二','22222222222','测试二','0','2016-05-08 14:53:41'),
(1062,'33333333','测试三','33333333333','测试三','0','2016-05-08 14:55:01'),
(1063,'44444444','测试四','44444444444','测试四','0','2016-05-08 14:55:35');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Community Edition- MySQL GUI v5.22
Host - 5.1.30-community : Database - salary_manage
*********************************************************************
Server version : 5.1.30-community
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `salary_manage`;

USE `salary_manage`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `userId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `cur_state` int(11) DEFAULT NULL,
  `enter_year` int(11) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

/*Data for the table `employee` */

insert  into `employee`(`userId`,`name`,`cur_state`,`enter_year`,`sex`) values (2,'裴文哲',1,2010,0),(11,'高嘉阳',1,2010,0);

/*Table structure for table `sale` */

DROP TABLE IF EXISTS `sale`;

CREATE TABLE `sale` (
  `saleId` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `employeeId` int(11) DEFAULT NULL,
  `lock_num` int(11) DEFAULT NULL,
  `stock_num` int(11) DEFAULT NULL,
  `barrel_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`saleId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gb2312;

/*Data for the table `sale` */

insert  into `sale`(`saleId`,`year`,`month`,`employeeId`,`lock_num`,`stock_num`,`barrel_num`) values (1,2010,1,2,0,20,30),(2,2010,11,2,20,20,20),(4,2010,11,2,15,18,16),(5,2010,11,2,20,0,0),(6,2009,10,2,20,20,20),(7,2008,5,2,20,20,20),(8,2007,5,2,20,30,20),(9,2006,3,2,35,20,40),(10,2005,5,2,20,20,20);

/*Table structure for table `time` */

DROP TABLE IF EXISTS `time`;

CREATE TABLE `time` (
  `year` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

/*Data for the table `time` */

insert  into `time`(`year`,`month`) values (2010,11);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `statu` int(11) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=gb2312;

/*Data for the table `user` */

insert  into `user`(`userId`,`email`,`password`,`statu`) values (1,'admin@126.com','123',1),(2,'williampei1988@126.com','123',0),(12,'jiayang@gmail.com','123',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

/*
SQLyog Community v13.1.8 (64 bit)
MySQL - 10.4.22-MariaDB : Database - car_rent
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`car_rent` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `car_rent`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`id`,`email`,`password`) values 
(1,'admin@gmail.com','admin');

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `car_sale_id` int(11) NOT NULL,
  `owner_email` varchar(100) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `price` varchar(100) NOT NULL,
  `number_plate` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `booking` */

insert  into `booking`(`booking_id`,`owner_id`,`customer_id`,`car_sale_id`,`owner_email`,`customer_email`,`booking_date`,`price`,`number_plate`,`booking_status`,`payment_status`) values 
(1,1,5,1,'seller1@gmail.com','divya@gmail.com','2023-11-13','100000','KL-01','Approved','Token_Paid');

/*Table structure for table `brand` */

DROP TABLE IF EXISTS `brand`;

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) NOT NULL,
  `brand_image` varchar(100) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

/*Data for the table `brand` */

insert  into `brand`(`brand_id`,`brand_name`,`brand_image`) values 
(2,'TESLA','1687414103.png'),
(3,'BMW','1687414247.png'),
(4,'HONDA','1687414306.png'),
(5,'FERRARI','1687414378.png'),
(6,'PORSCHE','1687414547.png'),
(16,'CONTINENTAL','continental-logo.png'),
(28,'MERCEDES BENZ','1687958287.png'),
(36,'KIA','1687959953.png'),
(37,'AUDI','1687959979.png'),
(38,'ASTON-MARTIN','1687960001.png'),
(39,'VOLVO','1687960014.png'),
(41,'ROLLS ROYCE','1687960138.png'),
(42,'BUGATTI','1687960150.png');

/*Table structure for table `car_sale` */

DROP TABLE IF EXISTS `car_sale`;

CREATE TABLE `car_sale` (
  `car_sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `number_plate` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `abs` varchar(100) NOT NULL,
  `accident` varchar(100) NOT NULL,
  `mirror` varchar(100) NOT NULL,
  `steering` varchar(100) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `airbag` varchar(100) NOT NULL,
  `wheels` varchar(100) NOT NULL,
  `theft` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `car_sold` varchar(100) NOT NULL,
  PRIMARY KEY (`car_sale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `car_sale` */

insert  into `car_sale`(`car_sale_id`,`user_id`,`brand_id`,`user_email`,`name`,`model`,`number_plate`,`price`,`year`,`owner`,`abs`,`accident`,`mirror`,`steering`,`ac`,`airbag`,`wheels`,`theft`,`photo`,`car_sold`) values 
(1,1,2,'seller1@gmail.com','tesla z','tesla z','KL-01','100000','2010','first','Yes','No','Powered','Yes','Yes','2','Yes','Yes','1689142577.jpg','Pending'),
(2,1,3,'seller1@gmail.com','bmw 01','bmw 01','KL-02','100000','2011','first','Yes','No','Powered','Yes','Yes','1','Yes','Yes','1689142683.png','Pending'),
(3,1,4,'seller1@gmail.com','Honda Civic','honda civic','KL-03','200000','2013','first','Yes','No','Powered','Yes','Yes','1','Yes','Yes','1689142815.png','Pending'),
(4,3,3,'ram@gmail.com','bmw_3','bmw 3','KL-09 3344','100000`','2014','first','Yes','No','Powered','Yes','Yes','1','Yes','Yes','1708682827.jpg','Pending'),
(5,3,4,'ram@gmail.com','honda CRV','CRV','KL-09 7689','1500000','2018','first','Yes','No','Powered','Yes','Yes','1','Yes','Yes','1708711889.jpg','Pending');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `comp_email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaints` */

insert  into `complaints`(`comp_id`,`user_id`,`comp_name`,`comp_email`,`subject`,`message`,`reply`) values 
(1,5,'DIVYA DINESAN','divya@gmail.com','slow process','website is slow','sorry for the inconvience');

/*Table structure for table `token` */

DROP TABLE IF EXISTS `token`;

CREATE TABLE `token` (
  `token_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `owner_email` varchar(100) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_no` int(11) NOT NULL,
  `cvc` int(11) NOT NULL,
  `expiry_month` varchar(100) NOT NULL,
  `expiry_year` varchar(100) NOT NULL,
  `token_amount` varchar(100) NOT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `token` */

insert  into `token`(`token_id`,`customer_id`,`owner_id`,`customer_email`,`owner_email`,`booking_id`,`price`,`card_name`,`card_no`,`cvc`,`expiry_month`,`expiry_year`,`token_amount`) values 
(1,5,1,'divya@gmail.com','seller1@gmail.com',1,'100000','Divya Dinesan',2147483647,100,'12','24','20000');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`email`,`phone`,`address`,`password`) values 
(1,'seller1','seller1@gmail.com','9988776655','kunnamkulam thrissur','seller1'),
(2,'seller2','seller2@gmail.com','9988776655','kunnamkulam thrissur','seller2'),
(3,'Ram','ram@gmail.com','1234567897','123','ram'),
(4,'sham','sham@gmail.com','123','1','sham'),
(5,'divya dinesan','divya@gmail.com','9876543210','thrissur kerala','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

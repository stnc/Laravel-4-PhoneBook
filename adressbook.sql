/*
SQLyog Ultimate v9.50 
MySQL - 5.6.15-log : Database - adressbook
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`adressbook` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `adressbook`;

/*Table structure for table `category_adresses` */

DROP TABLE IF EXISTS `category_adresses`;

CREATE TABLE `category_adresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category_adresses` */

insert  into `category_adresses`(`id`,`name`,`created_at`,`updated_at`) values (1,'Office','2014-09-29 14:04:09','0000-00-00 00:00:00'),(2,'Friends','2014-09-29 14:04:14','2014-10-02 21:48:25'),(3,'Family','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_01_10_174712_create_posts_table',1),('2014_08_31_130004_create_users_table',1),('2014_08_31_130044_create_phonebooks_table',1);

/*Table structure for table `phonebooks` */

DROP TABLE IF EXISTS `phonebooks`;

CREATE TABLE `phonebooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `published` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `phonebooks_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `phonebooks` */

insert  into `phonebooks`(`id`,`user_id`,`category_id`,`name`,`lastname`,`phone`,`email`,`notes`,`published`,`created_at`,`updated_at`) values (2,1,1,'john','carter','0212 255 25 25','jon@gmail.com','dsds',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,1,2,'hakan','ayek','021545266','h@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,1,2,'hasan','koca','02154929659','h2@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,1,2,'ali','komurcu','0354453535345','a@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,1,3,'veli','tutsak','02342343','v@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,1,3,'deli','kupeli','0423423434','d@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,1,1,'kupeli','deli','042342342','k@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,1,1,'niami','camp','076576575','n@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,1,1,'niyami','carol','0345345346','ny@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,1,2,'jolie','anjeli','0867867','ja@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,1,2,'tufan','yıldurım','06464576746','ty@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,1,3,'roni','coxx','00786767','rc@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,1,1,'many','has','024656465','mb@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,1,2,'kirk','douglas','05465489','dsds@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,1,3,'fifty','cent','0894656546','fr@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,1,2,'brad','pitt','089894615','ew@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,1,3,'manuel','terca','06564646','bc@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,1,1,'carter','backman','0949664','ss@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,1,2,'dila','nova','684949','dsdsd@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,1,1,'john','olivia','089549919','jo@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,1,1,'jacket','defak','2844898984','ja@gmail.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,1,NULL,'selman','tunç','32323232','selmantunc@gmail1.com',NULL,1,'2014-10-01 16:20:21','2014-10-01 16:20:21'),(34,1,NULL,'selman','tunç','32323232','selmantunc@gmail15.com',NULL,1,'2014-10-01 16:21:01','2014-10-01 16:21:01');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('Admin','Moderator') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`level`,`remember_token`,`created_at`,`updated_at`) values (1,'selman','$2y$10$WgsAGOlb0zgb900B8X.iIOpmlZ2C/Gyob2TTAoVUhKQC2ZsyFymXS','selmantunc@gmail.com','Admin','J03yRMp7gvninAreciHnkMC9o2z5jB36xnKW0vd5tZ1gaR26EYhsbJO4PTqX','2014-08-31 13:34:15','2014-10-01 22:30:29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

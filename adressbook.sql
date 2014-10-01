

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `category_adresses` */

insert  into `category_adresses`(`id`,`name`,`created_at`,`updated_at`) values (1,'Office','2014-09-29 14:04:09','0000-00-00 00:00:00'),(2,'Friends','2014-09-29 14:04:14','0000-00-00 00:00:00'),(3,'Family','0000-00-00 00:00:00','0000-00-00 00:00:00');

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

insert  into `phonebooks`(`id`,`user_id`,`category_id`,`name`,`lastname`,`phone`,`email`,`notes`,`published`,`created_at`,`updated_at`) values (2,1,1,'john','carter','0212 255 25 25','jon@gmail.com','dsds',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,NULL,2,'hakan','ayek',NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,NULL,2,'hasan',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,NULL,2,'ali',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,NULL,3,'veli',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,NULL,3,'deli',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,NULL,1,'kupeli',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,NULL,1,'niami',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,NULL,1,'niyami',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,NULL,2,'jolie',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,NULL,2,'2',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,NULL,3,'roni',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,NULL,1,'many',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,NULL,2,'2',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,NULL,3,'kırk',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,NULL,2,'elli',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,NULL,3,'2',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,NULL,1,'carter',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,NULL,2,'d',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,NULL,NULL,'d',NULL,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,NULL,NULL,'d',NULL,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,NULL,NULL,'d',NULL,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,NULL,NULL,'okul',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,NULL,NULL,'universty',NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,1,NULL,'selman','tunç','32323232','selmantunc@gmail1.com',NULL,1,'2014-10-01 16:20:21','2014-10-01 16:20:21'),(34,1,NULL,'selman','tunç','32323232','selmantunc@gmail15.com',NULL,1,'2014-10-01 16:21:01','2014-10-01 16:21:01'),(35,1,NULL,'fsf','dsdf','54545','sdsd@gg.coms',NULL,1,'2014-10-01 16:21:50','2014-10-01 16:21:50'),(36,1,NULL,'fsf','dsdf','54545','sdsd@gg2.com',NULL,1,'2014-10-01 16:22:29','2014-10-01 16:22:29'),(37,1,NULL,'dsd','sdd','3434343','sddsd@gg.coms',NULL,1,'2014-10-01 16:24:15','2014-10-01 16:24:15');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`level`,`remember_token`,`created_at`,`updated_at`) values (1,'selman','$2y$10$WgsAGOlb0zgb900B8X.iIOpmlZ2C/Gyob2TTAoVUhKQC2ZsyFymXS','selmantunc@gmail.com','Admin','J03yRMp7gvninAreciHnkMC9o2z5jB36xnKW0vd5tZ1gaR26EYhsbJO4PTqX','2014-08-31 13:34:15','2014-10-01 22:30:29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

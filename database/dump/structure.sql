/*
SQLyog Ultimate v9.63 
MySQL - 5.6.16 : Database - alexandra
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`alexandra` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `alexandra`;

/*Table structure for table `ale_elections` */

DROP TABLE IF EXISTS `ale_elections`;

CREATE TABLE `ale_elections` (
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description_short` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count_votes_avalible` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_enabled_voters` */

DROP TABLE IF EXISTS `ale_enabled_voters`;

CREATE TABLE `ale_enabled_voters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `voter_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `enabled_voters_user_id_foreign` (`user_id`),
  KEY `enabled_voters_voter_id_foreign` (`voter_id`),
  CONSTRAINT `enabled_voters_voter_id_foreign` FOREIGN KEY (`voter_id`) REFERENCES `ale_voters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `enabled_voters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `ale_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_organizations` */

DROP TABLE IF EXISTS `ale_organizations`;

CREATE TABLE `ale_organizations` (
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_processes` */

DROP TABLE IF EXISTS `ale_processes`;

CREATE TABLE `ale_processes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `description_short` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_begin` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `public_key` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `path_simbols` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive','final') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_scope_organizations` */

DROP TABLE IF EXISTS `ale_scope_organizations`;

CREATE TABLE `ale_scope_organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numorder` int(11) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `organization_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `scope_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `election_code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ale_scope_organizations_ale_organizations1_idx` (`organization_code`),
  KEY `fk_ale_scope_organizations_ale_scopes1_idx` (`scope_code`),
  KEY `fk_ale_scope_organizations_ale_elections1_idx` (`election_code`),
  CONSTRAINT `fk_ale_scope_organizations_ale_elections1` FOREIGN KEY (`election_code`) REFERENCES `ale_elections` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ale_scope_organizations_ale_organizations1` FOREIGN KEY (`organization_code`) REFERENCES `ale_organizations` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ale_scope_organizations_ale_scopes1` FOREIGN KEY (`scope_code`) REFERENCES `ale_scopes` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=385 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_scopes` */

DROP TABLE IF EXISTS `ale_scopes`;

CREATE TABLE `ale_scopes` (
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scope_parent` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_scope_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`code`),
  KEY `scopes_type_scope_id_foreign` (`type_scope_id`),
  KEY `fk_ale_scopes_ale_scopes1_idx` (`scope_parent`),
  CONSTRAINT `fk_ale_scopes_ale_scopes1` FOREIGN KEY (`scope_parent`) REFERENCES `ale_scopes` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `scopes_type_scope_id_foreign` FOREIGN KEY (`type_scope_id`) REFERENCES `ale_type_scopes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_scrutinys` */

DROP TABLE IF EXISTS `ale_scrutinys`;

CREATE TABLE `ale_scrutinys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `scope_id` int(10) unsigned NOT NULL,
  `organization_id` int(10) unsigned NOT NULL,
  `votes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_servers` */

DROP TABLE IF EXISTS `ale_servers`;

CREATE TABLE `ale_servers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'inactive',
  `stage` enum('scrutiny','presentation') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_type_scopes` */

DROP TABLE IF EXISTS `ale_type_scopes`;

CREATE TABLE `ale_type_scopes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('organizations','voters') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_users` */

DROP TABLE IF EXISTS `ale_users`;

CREATE TABLE `ale_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('admin','operator') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_voters` */

DROP TABLE IF EXISTS `ale_voters`;

CREATE TABLE `ale_voters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num_ele` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname_first` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname_second` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('pending','vote','nvote') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `type_vote` enum('att','online') COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` tinyint(3) unsigned DEFAULT NULL,
  `cellphone` tinyint(3) unsigned DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scope_charter` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scope_vote` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scope_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ale_voters_ale_scopes1_idx` (`scope_code`),
  CONSTRAINT `fk_ale_voters_ale_scopes1` FOREIGN KEY (`scope_code`) REFERENCES `ale_scopes` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `ale_votes` */

DROP TABLE IF EXISTS `ale_votes`;

CREATE TABLE `ale_votes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vote` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `scope_charter` int(10) unsigned NOT NULL,
  `election_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

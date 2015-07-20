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

/*Data for the table `ale_elections` */

insert  into `ale_elections`(`code`,`description`,`description_short`,`alias`,`count_votes_avalible`,`status`) values ('01','ELECCION PRESIDENTE Y VICEP.',NULL,NULL,1,'active'),('02','ELECCION CONSEJEROS',NULL,NULL,1,'active'),('03','ELECCION PROVINCIAL',NULL,NULL,1,'active'),('04','ELECCION DISTRITAL',NULL,NULL,1,'active');

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

/*Data for the table `ale_enabled_voters` */

/*Table structure for table `ale_organizations` */

DROP TABLE IF EXISTS `ale_organizations`;

CREATE TABLE `ale_organizations` (
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ale_organizations` */

insert  into `ale_organizations`(`code`,`description`) values ('00000023','FUERZA REGIONAL'),('00000024','MOVIMIENTO DE AFIRMACION SOCIAL'),('00000027','MOVIMIENTO INDEPENDIENTE REGIONAL RIO SANTA CAUDALOSO'),('00000028','PATRIA JOVEN'),('00000029','MOVIMIENTO INDEPENDIENTE REGIONAL CAMBIO UCAYALINO'),('00000031','MOVIMIENTO ACCION NACIONALISTA PERUANO'),('00000033','MOVIMIENTO INDEPENDIENTE REGIONAL PURO ANCASH'),('00000035','MOVIMIENTO REGIONAL EL MAICITO'),('00000038','JUNIN SOSTENIBLE CON SU GENTE'),('00000041','TODOS SOMOS UCAYALI'),('00000042','COLECTIVO CIUDADANO CONFIANZA PERU'),('00000044','JUNIN EMPRENDEDORES RUMBO AL 21'),('00000045','CONCERTACION PARA EL DESARROLLO REGIONAL - LIMA'),('00000046','FRENTE AMPLIO PARA EL DESARROLLO DEL PUEBLO'),('00000048','MOVIMIENTO REGIONAL PARA EL DESARROLLO CON SEGURIDAD Y HONRADEZ'),('00000052','MOVIMIENTO INTEGRACION DESCENTRALISTA'),('00000054','MOVIMIENTO REGIONAL BLOQUE POPULAR JUNIN'),('00000056','MOVIMIENTO REGIONAL INDEPENDIENTE DE CAMPESINOS, OBREROS, EMPLEADOS Y ESTUDIANTES'),('00000068','MOVIMIENTO INDEPENDIENTE TRABAJANDO PARA TODOS'),('00000070','MOVIMIENTO INDEPENDIENTE REGIONAL AYLLU'),('00000071','POR LAS COMUNIDADES FUENTE DE INTEGRACION ANDINA DE PUNO - CONFIA - PUNO'),('00000074','SENTIMIENTO AMAZONENSE REGIONAL'),('00000083','MOVIMIENTO REGIONAL UNIDAD CIVICA LIMA'),('00000086','MOVIMIENTO REGIONAL OBRAS POR LA MODERNIDAD'),('00000088','FUERZA COMUNAL'),('00000089','MOVIMIENTO REGIONAL AYNI'),('00000092','NUEVA AMAZONIA'),('00000093','MOVIMIENTO INDEPENDIENTE SURGE AMAZONAS'),('00000095','ACCION DE GOBERNABILIDAD PARA LA UNIDAD ANDINA'),('00000101','UCAYALI REGION CON  FUTURO'),('00000102','PARTIDO REGIONAL DE INTEGRACION'),('00000104','MOVIMIENTO INDEPENDIENTE DE CAMPESINOS Y PROFESIONALES'),('00000108','PODER DEMOCRATICO REGIONAL'),('00000116','MOVIMIENTO REGIONAL FUERZA AMAZONENSE'),('00000117','MOVIMIENTO REGIONAL FUERZA SOCIAL CAJAMARCA'),('00000118','MOVIMIENTO INDEPENDIENTE DIALOGO SOCIAL'),('00000121','MOVIMIENTO POLITICO INDEPENDIENTE PROVINCIAL INTEGRACION BELLAVISTANA'),('00000124','ACCION REGIONAL'),('00000128','MOVIMIENTO POLITICO HECHOS Y NO PALABRAS'),('00000136','CAJAMARCA SIEMPRE VERDE'),('00000140','PROYECTO POLITICO AQUI'),('00000141','REGION PARA TODOS'),('00000144','MOVIMIENTO INDEPENDIENTE REGIONAL LUCHEMOS POR HUANUCO'),('00000145','MOVIMIENTO REGIONAL SEGURIDAD Y PROSPERIDAD'),('00000146','UNIDOS POR LA REGION'),('00000147','AVANZADA REGIONAL INDEPENDIENTE UNIDOS POR HUANUCO'),('00000149','MOVIMIENTO INDEPENDIENTE PROYECTO JOVEN'),('00000152','FRENTE REGIONAL DE CAJAMARCA'),('00000153','SUMATE POR UNA NUEVA LIBERTAD'),('00000156','INTEGRANDO UCAYALI'),('00000162','MOVIMIENTO ANDINO SOCIALISTA'),('00000176','JUNTOS POR JUNIN'),('00000178','PASCO DIGNIDAD'),('00000179','COMANDEMOS EL CAMBIO'),('00000180','DESARROLLEMOS CRISTO NOS VALGA'),('00000181','MOVIMIENTO REGIONAL FRENTE ANDINO AMAZONICO'),('00000186','CONCERTACION EN LA REGION'),('00000187','MOVIMIENTO REGIONAL AMAZONENSE UNIDOS AL CAMPO'),('00000190','BLOQUE POPULAR UCAYALI'),('00000193','ESFUERZOS UNIDOS'),('00000195','MOVIMIENTO BIODIVERSIDAD Y DESARROLLO AMAZONICO BIDA'),('00000209','OBRAS POR AMAZONAS'),('00000213','DIGNIDAD SANTIAGUINA'),('00000215','LUCHEMOS POR CAJAMARCA'),('00000218','PASCO VERDE'),('00000221','TODOS SOMOS AMAZONAS'),('00000223','UNIDAD Y DEMOCRACIA DE AMAZONAS'),('00000228','JUNTOS POR LA RESTAURACION AGRARIA'),('00000246','MOVIMIENTO INDEPENDIENTE REGIONAL HAMBRE CERO'),('00000248','MOVIMIENTO POLITICO FUERZA HUANCAVELICA'),('00000267','FUERZA POPULAR'),('00000275','MAS SAN MARTIN'),('00000282','CORDOVA AL PROGRESO DE SUS ANEXOS'),('00000285','JUNTOS POR HUARAZ'),('00000292','FUERZA LORETANA'),('00000297','RENOVACION GRAN CHIMU'),('00000301','MOVIMIENTO ESPERANZA REGION AMAZONICA'),('00000304','MOVIMIENTO INDEPENDIENTE LORETO - MI LORETO'),('00000310','MOVIMIENTO INTEGRACION LORETANA'),('00000347','UNION RANRAHIRCA MOVIMIENTO POLITICO INDEPENDIENTE'),('00000360','SECHURA RUMBO AL PROGRESO'),('00000361','SECHURANOS UNIDOS'),('23510000','ACCION POPULAR'),('23660000','ALIANZA PARA EL PROGRESO'),('23700000','DEMOCRACIA DIRECTA'),('23750000','EL FRENTE AMPLIO POR JUSTICIA, VIDA Y LIBERTAD'),('23760000','UNION POR EL PERU'),('23800000','FUERZA POPULAR'),('23810000','VAMOS PERU'),('23820000','PARTIDO APRISTA PERUANO'),('23850000','PARTIDO DEMOCRATICO SOMOS PERU'),('23900000','PARTIDO NACIONALISTA PERUANO'),('23920000','SOLIDARIDAD NACIONAL'),('23930000','PARTIDO HUMANISTA PERUANO'),('24010000','PARTIDO POPULAR CRISTIANO - PPC'),('24060000','SIEMPRE UNIDOS'),('24170000','PERU POSIBLE'),('24190000','RESTAURACION NACIONAL'),('81000000','PROYECTO DE LA INTEGRACION PARA LA COOPERACION');

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

/*Data for the table `ale_processes` */

/*Table structure for table `ale_scope_organizations` */

DROP TABLE IF EXISTS `ale_scope_organizations`;

CREATE TABLE `ale_scope_organizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `numorder` int(11) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `organization_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `scope_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `election_code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ale_scope_organizations_ale_organizations1_idx` (`organization_code`),
  KEY `fk_ale_scope_organizations_ale_scopes1_idx` (`scope_code`),
  KEY `fk_ale_scope_organizations_ale_elections1_idx` (`election_code`),
  CONSTRAINT `fk_ale_scope_organizations_ale_organizations1` FOREIGN KEY (`organization_code`) REFERENCES `ale_organizations` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ale_scope_organizations_ale_scopes1` FOREIGN KEY (`scope_code`) REFERENCES `ale_scopes` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ale_scope_organizations_ale_elections1` FOREIGN KEY (`election_code`) REFERENCES `ale_elections` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ale_scope_organizations` */

/*Table structure for table `ale_scopes` */

DROP TABLE IF EXISTS `ale_scopes`;

CREATE TABLE `ale_scopes` (
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `scope_parent` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_scope_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`code`),
  KEY `scopes_type_scope_id_foreign` (`type_scope_id`),
  KEY `fk_ale_scopes_ale_scopes1_idx` (`scope_parent`),
  CONSTRAINT `scopes_type_scope_id_foreign` FOREIGN KEY (`type_scope_id`) REFERENCES `ale_type_scopes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_ale_scopes_ale_scopes1` FOREIGN KEY (`scope_parent`) REFERENCES `ale_scopes` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ale_scopes` */

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

/*Data for the table `ale_scrutinys` */

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

/*Data for the table `ale_servers` */

/*Table structure for table `ale_type_scopes` */

DROP TABLE IF EXISTS `ale_type_scopes`;

CREATE TABLE `ale_type_scopes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('organizations','voters') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ale_type_scopes` */

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

/*Data for the table `ale_users` */

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ale_voters` */

/*Table structure for table `ale_votes` */

DROP TABLE IF EXISTS `ale_votes`;

CREATE TABLE `ale_votes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vote` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `scope_charter` int(10) unsigned NOT NULL,
  `election_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ale_votes` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

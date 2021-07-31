/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 5.7.33 : Database - pelicula
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `factura` */

DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `total` double(8,2) NOT NULL,
  `md5validacion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `factura` */

/*Table structure for table `factura_detalle` */

DROP TABLE IF EXISTS `factura_detalle`;

CREATE TABLE `factura_detalle` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_factura` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `factura_detalle` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `generos` */

DROP TABLE IF EXISTS `generos`;

CREATE TABLE `generos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `generos` */

insert  into `generos`(`id`,`descripcion`,`created_at`,`updated_at`) values 
(1,'Acción','2021-07-29 09:06:09','2021-07-29 09:06:09'),
(2,'Comedia','2021-07-29 09:06:09','2021-07-29 09:06:09'),
(3,'Aventuras','2021-07-29 09:06:09','2021-07-29 09:06:09'),
(4,'Infantil','2021-07-29 09:06:09','2021-07-29 09:06:09'),
(5,'Romance','2021-07-29 09:06:09','2021-07-29 09:06:09'),
(6,'Ciencia Ficción','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(7,'Drama','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(8,'Fantasía','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(9,'Musical','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(10,'3D','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(11,'Documental','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(12,'Cristianos','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(13,'Policivas','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(14,'Deportivas','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(15,'Terror','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(16,'Suspenso','2021-07-29 09:06:10','2021-07-29 09:06:10'),
(17,'Animado','2021-07-30 00:38:43','2021-07-30 01:05:26');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(33,'2014_10_12_000000_create_users_table',1),
(34,'2014_10_12_100000_create_password_resets_table',1),
(35,'2019_08_19_000000_create_failed_jobs_table',1),
(36,'2021_07_26_015819_crear_tabla_generos',1),
(37,'2021_07_26_025322_crear_tabla_peliculas',1),
(38,'2021_07_30_061436_crear_tabla_factura',2),
(39,'2021_07_30_062042_crear_tabla_factura_detalle',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `peliculas` */

DROP TABLE IF EXISTS `peliculas`;

CREATE TABLE `peliculas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genero` bigint(20) unsigned NOT NULL,
  `precio` double(8,2) NOT NULL,
  `imagen` varchar(260) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_peliculas_generos` (`id_genero`),
  CONSTRAINT `fk_peliculas_generos` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `peliculas` */

insert  into `peliculas`(`id`,`titulo`,`descripcion`,`id_genero`,`precio`,`imagen`,`video`,`trailer`,`created_at`,`updated_at`) values 
(2,'Titanic','Jack (DiCaprio), un joven artista, en una partida de cartas gana un pasaje para América, en el Titanic, el trasatlántico más grande y seguro jamás construido. A bordo, conoce a Rose (Kate Winslet), una joven de una buena familia venida a menos que va a contraer un matrimonio de conveniencia con Cal (Billy Zane), un millonario engreído a quien sólo interesa el prestigioso apellido de su prometida. Jack y Rose se enamoran, pero Cal y la madre de Rose ponen todo tipo de trabas a su relación. Inesperadamente, un inmenso iceberg pone en peligro la vida de los pasajeros.',5,10.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhYjUIu2o5v5u3rfJpCq5Cz0Q9WK--XdYxai_N2d0ImohPiIOp','https://www.youtube-nocookie.com/embed/kVrqfYjkTdQ?controls=0&amp;start=12','https://www.youtube-nocookie.com/embed/kVrqfYjkTdQ?controls=0&amp;start=12','2021-07-29 21:23:10','2021-07-29 21:23:10'),
(3,'Black Widow','Una peligrosa conspiración, relacionada con su pasado, persigue a Natasha Romanoff, también conocida como Viuda Negra. La agente tendrá que lidiar con las consecuencias de haber sido espía, así como con las relaciones rotas, para sobrevivir.',1,12.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR80vTIhBx_wMxRrq_KEZkn4BDWScFFfQzpFP7-dJBgOYHjr2pi','https://www.youtube-nocookie.com/embed/Fp9pNPdNwjI?start=9','https://www.youtube-nocookie.com/embed/Fp9pNPdNwjI?start=9','2021-07-30 01:13:45','2021-07-30 01:13:45'),
(4,'Avengers: Endgame','Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento épico con Thanos, el malvado que diezmó el planeta y el universo.',6,5.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiC3mSrAdG2_Tkuz5CbCm2TA-wYikac3dOPVlzb5jCk1gqsHOD','https://www.youtube-nocookie.com/embed/TcMBFSGVi1c?start=13','https://www.youtube-nocookie.com/embed/TcMBFSGVi1c?start=13','2021-07-30 01:20:12','2021-07-30 01:20:12'),
(5,'Avengers: Infinity War','Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito: poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.',6,10.00,'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSOV0JVW82VnxHBgHu1syHyD_cTSYAgLr76gw9ejI4cmySydjmw','https://www.youtube-nocookie.com/embed/6ZfuNTqbHE8?start=1','https://www.youtube-nocookie.com/embed/6ZfuNTqbHE8?start=1','2021-07-30 01:25:14','2021-07-30 01:25:14');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id_user`,`usuario`,`password`,`nombre`,`rol`,`created_at`,`updated_at`) values 
(1,'admin','827ccb0eea8a706c4c34a16891f84e7b','Administrador','admin','2021-07-29 09:06:09','2021-07-29 09:06:09'),
(2,'luz.alba31','827ccb0eea8a706c4c34a16891f84e7b','Luz Alba','user','2021-07-29 09:06:09','2021-07-29 09:06:09'),
(3,'tenismith23','827ccb0eea8a706c4c34a16891f84e7b','Teñikaler Smith','user','2021-07-29 09:06:09','2021-07-29 09:06:09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

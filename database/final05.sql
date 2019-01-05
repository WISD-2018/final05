-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rooms_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StartTime` date NOT NULL,
  `EndTime` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `bookings` (`id`, `rooms_id`, `name`, `email`, `phone`, `country`, `address`, `StartTime`, `EndTime`, `created_at`, `updated_at`) VALUES
(1,	5,	'陳冠宇',	'kevin@gmail.com',	'0968566123',	'台灣',	'台中市西屯區河南路二段466號',	'2019-01-03',	'2019-01-03',	'2019-01-02 08:23:25',	'2019-01-02 08:23:25'),
(2,	3,	'陳姿婷',	'vivian@gmail.com',	'0958366789',	'台灣',	'台中市西屯區黎明路三段246號',	'2019-01-04',	'2019-01-04',	'2019-01-02 08:24:53',	'2019-01-02 08:24:53'),
(3,	2,	'張宏偉',	'honwei@gmail.com',	'0975122546',	'台灣',	'台中市西區精誠路294號',	'2019-01-05',	'2019-01-05',	'2019-01-02 08:25:59',	'2019-01-02 08:25:59'),
(4,	6,	'鄭一緯',	'ivan@gmail.com',	'0978933191',	'台灣',	'台中市西屯區西屯路三段157號',	'2019-01-05',	'2019-01-05',	'2019-01-02 08:27:04',	'2019-01-02 08:27:04'),
(13,	5,	'鄭一緯',	'ivan@gmail.com',	'0978933191',	'台灣',	'台中市西屯區西屯路三段157號',	'2019-01-05',	'2019-01-05',	'2019-01-02 08:28:46',	'2019-01-02 08:28:46');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5,	'2014_10_12_000000_create_users_table',	1),
(6,	'2014_10_12_100000_create_password_resets_table',	1),
(7,	'2018_12_15_165030_create_bookings_table',	1),
(8,	'2018_12_26_183511_create_rooms_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `rooms`;
CREATE TABLE `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rooms` (`id`, `name`, `price`, `bed`, `pic`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `created_at`, `updated_at`) VALUES
(1,	'小管　雙人房',	3600,	'16坪；一特大床 (200x210cm)',	'https://i.imgur.com/y6QW16H.jpg',	'https://i.imgur.com/PInq91Z.jpg',	'https://i.imgur.com/B7N4kPo.jpg',	'https://i.imgur.com/MTV5YCO.jpg',	'https://i.imgur.com/dvaGe3K.jpg',	'https://i.imgur.com/FRDVLiQ.jpg',	'https://i.imgur.com/BPFbnJn.jpg',	NULL,	NULL),
(2,	'土魠　四人房',	4800,	'20坪；兩特大床 (200x210cm)',	'https://i.imgur.com/6doUCmq.jpg',	'https://i.imgur.com/5iDlqvC.jpg',	'https://i.imgur.com/DAHcAxD.jpg',	'https://i.imgur.com/gR37Ljy.jpg',	'https://i.imgur.com/nt5wbzl.jpg',	'https://i.imgur.com/jOZnHan.jpg',	'https://i.imgur.com/rraUPhE.jpg',	NULL,	NULL),
(3,	'石斑　六人房',	6600,	'24坪；三特大床 (200x210cm)',	'https://i.imgur.com/RAi2Oyi.jpg',	'https://i.imgur.com/xVniy6e.jpg',	'https://i.imgur.com/4nmuEAM.jpg',	'https://i.imgur.com/wz8DJhj.jpg',	'https://i.imgur.com/PXwiJKf.jpg',	'https://i.imgur.com/9PA8tgR.jpg',	'https://i.imgur.com/0gsla3l.jpg',	NULL,	NULL),
(4,	'紅魽　四人房',	4500,	'20坪；兩特大床 (200x210cm)',	'https://i.imgur.com/xCtd79y.jpg',	'https://i.imgur.com/NLRauwo.jpg',	'https://i.imgur.com/Tioiats.jpg',	'https://i.imgur.com/gcIaUdh.jpg',	'https://i.imgur.com/3Tstv49.jpg',	'https://i.imgur.com/Mp79l9a.jpg',	'https://i.imgur.com/g9LuJgj.jpg',	NULL,	NULL),
(5,	'花枝丸　雙人房',	3600,	'16坪；一特大床 (200x210cm)',	'https://i.imgur.com/hTjIYPN.jpg',	'https://i.imgur.com/80tgNf0.jpg',	'https://i.imgur.com/FmOCDw6.jpg',	'https://i.imgur.com/5YFjRpG.jpg',	'https://i.imgur.com/r5WuoIv.jpg',	'https://i.imgur.com/E0kcrF9.jpg',	'https://i.imgur.com/abAcHM8.jpg',	NULL,	NULL),
(6,	'垵米　四人房',	4500,	'20坪；兩特大床 (200x210cm)',	'https://i.imgur.com/b196M2L.jpg',	'https://i.imgur.com/skNJs7q.jpg',	'https://i.imgur.com/6zSiW8U.jpg',	'https://i.imgur.com/LQe36yD.jpg',	'https://i.imgur.com/qDUY6XP.jpg',	'https://i.imgur.com/uKlhXrk.jpg',	'https://i.imgur.com/eTjGgxG.jpg',	NULL,	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'姿婷',	'coco214034@gmail.com',	NULL,	'$2y$10$XE8bVGbx5k2BF.xOwPOqRusju7SlqtAAGgTsS4Gzjrm6gpLZ9ZghG',	NULL,	'2019-01-02 23:55:57',	'2019-01-02 23:55:57');

-- 2019-01-05 06:42:17

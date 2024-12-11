-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               11.5.2-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных laravelindividual2
CREATE DATABASE IF NOT EXISTS `laravelindividual2` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `laravelindividual2`;

-- Дамп структуры для таблица laravelindividual2.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.failed_jobs: ~0 rows (приблизительно)

-- Дамп структуры для таблица laravelindividual2.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.migrations: ~9 rows (приблизительно)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_12_09_223308_create_subscriptions_table', 2),
	(6, '2024_12_09_223317_add_role_to_users_table', 2),
	(7, '2014_10_12_100000_create_password_resets_table', 3),
	(8, '2024_12_10_175226_add_data_to_subscriptions_table', 4),
	(9, '2024_12_10_182350_create_subscription_user_table', 5);

-- Дамп структуры для таблица laravelindividual2.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.password_resets: ~0 rows (приблизительно)

-- Дамп структуры для таблица laravelindividual2.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.password_reset_tokens: ~0 rows (приблизительно)

-- Дамп структуры для таблица laravelindividual2.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.personal_access_tokens: ~0 rows (приблизительно)

-- Дамп структуры для таблица laravelindividual2.subscriptions
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Type` enum('cinema','music','games','other') NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Price` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.subscriptions: ~16 rows (приблизительно)
INSERT INTO `subscriptions` (`id`, `Name`, `Type`, `Logo`, `Duration`, `Price`) VALUES
	(16, 'asd', 'other', 'images/iconSpotify.jpg', '1', 0.02),
	(17, 'Spotify', 'music', 'images/iconSpotify.jpg', '3 months', 12.49),
	(18, 'Spotify', 'music', 'images/iconSpotify.jpg', '6 months', 24.99),
	(19, 'Netflix', 'cinema', 'images/iconNetflix.png', '1 month', 5.99),
	(20, 'Netflix', 'cinema', 'images/iconNetflix.png', '3 months', 12.49),
	(21, 'Netflix', 'cinema', 'images/iconNetflix.png', '6 months', 19.99),
	(22, 'XBOX', 'games', 'images/iconXBOX.jpg', '1 month', 9.99),
	(23, 'XBOX', 'games', 'images/iconXBOX.jpg', '3 months', 17.45),
	(24, 'XBOX', 'games', 'images/iconXBOX.jpg', '6 months', 44.99),
	(25, 'PS', 'games', 'images/iconPS.jpg', '1 month', 8.99),
	(26, 'PS', 'games', 'images/iconPS.jpg', '6 months', 24.99),
	(27, 'Apple', 'other', 'images/iconApple.jpg', '1 month', 8.99),
	(28, 'Apple', 'other', 'images/iconApple.jpg', '6 months', 29.99),
	(29, 'KinoPoisk', 'cinema', 'images/iconKP.jpg', '1 month', 5.99),
	(30, 'KinoPoisk', 'cinema', 'images/iconKP.jpg', '3 months', 12.49),
	(31, 'adsdsadasdasdasd', 'music', 'zsdasd', '3', 0.04),
	(32, 'nomer2', 'music', 'https://media.lpgenerator.ru/uploads/2019/07/11/1_thumb600x460.jpg', '2', 0.03);

-- Дамп структуры для таблица laravelindividual2.subscription_user
CREATE TABLE IF NOT EXISTS `subscription_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `subscription_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscription_user_user_id_foreign` (`user_id`),
  KEY `subscription_user_subscription_id_foreign` (`subscription_id`),
  CONSTRAINT `subscription_user_subscription_id_foreign` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `subscription_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.subscription_user: ~1 rows (приблизительно)
INSERT INTO `subscription_user` (`id`, `user_id`, `subscription_id`, `created_at`, `updated_at`) VALUES
	(7, 2, 16, '2024-12-11 18:34:58', '2024-12-11 18:34:58'),
	(8, 1, 19, '2024-12-11 18:58:42', '2024-12-11 18:58:42'),
	(9, 1, 25, '2024-12-11 18:58:55', '2024-12-11 18:58:55');

-- Дамп структуры для таблица laravelindividual2.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы laravelindividual2.users: ~2 rows (приблизительно)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
	(1, 'artur', '123@mail.ru', NULL, '$2y$10$GLl4YF.qUmnyOMnmuenBUOrS34bK6P7ICoXeFYG48.vZ6s3uT2Gmm', NULL, '2024-12-09 20:51:11', '2024-12-09 20:51:11', 'admin'),
	(2, 'andrei', '1234@mail.ru', NULL, '$2y$10$e9.ScHmfYoHKyEVbK/3CUe199vmterUJvaW9b6.L.bElX8bmi3Dya', NULL, '2024-12-10 15:43:11', '2024-12-10 15:43:11', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

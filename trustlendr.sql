-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: creditscore
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `applications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `applicant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `due_date` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (39,'0xQjgch9W6j50S417LQkqYB1d2EDFX2u4U','1000','10','0xae81a90d49793779781aa6193e2662ea29dcf7a1e63352645dcbeafb274f9823','confirmed','2023-01-01 01:00:00','2023-11-28 18:31:01','2023-11-28 18:31:01'),(40,'randomIDPendingFeatureFix','100','10','0x2fde233708caa3295a87de3d34012406cb8f444ccafa24f3c654e382873dfc2d','repaid','2023-01-01 01:00:00','2023-11-28 19:25:38','2023-12-04 09:25:32'),(41,'randomIDPendingFeatureFix','100','10','0x7c9648fc57d8331eefa506bd8e3599265db307d24bde6b883f7f8f153819a632','repaid','2023-01-01 01:00:00','2023-11-28 21:02:27','2023-12-04 09:51:17'),(42,'randomIDPendingFeatureFix','700','10','0x5d307c3f162cb688ab5b8a74c35ac847ef7d8d53887c2db37ff682acaa60e1f5','repaid','2023-01-01 01:00:00','2023-11-29 10:55:26','2023-12-04 10:24:42'),(43,'randomIDPendingFeatureFix','80000','10','0x5b6bc393fa79afd8a014a4b4a4cb017bd880a9862058f9a7bcdcd5bdcdc865c3','repaid','2023-01-01 01:00:00','2023-12-01 21:10:25','2023-12-04 10:26:16'),(44,'randomIDPendingFeatureFix','700','10','0x29769751b68a3c72a3d9079509011c779d50ab1d9bc9d23285f1f6c1f1d44b96','repaid','2023-01-01 01:00:00','2023-12-01 21:12:26','2023-12-04 09:41:58'),(45,'randomIDPendingFeatureFix','8000','10','0x24c11e09081b9cc80048e531a0e423c15d2607b6869cfca33f4341d4f17e75fa','repaid','2023-01-01 01:00:00','2023-12-01 21:18:38','2023-12-04 09:40:25'),(46,'randomIDPendingFeatureFix','100','10','0x7a3a4fc69888b4674a9b58389f6274a2ce7cb03cd07e78ed87b8851ad736e4ae','repaid','2023-01-01 01:00:00','2023-12-04 09:28:38','2023-12-04 09:39:47'),(47,'randomIDPendingFeatureFix','1000','10','0x34507eefbe0e47ad010571beae73774f8d685e5358538f68f8ad657a47121a5c','repaid','2023-01-01 01:00:00','2023-12-04 10:27:27','2023-12-04 10:29:02'),(48,'randomIDPendingFeatureFix','8000','10','0x399544692e8c8d9d583c6c115bbcadebd53a4079bb172ae674177e56e40f4b10','repaid','2023-01-01 01:00:00','2023-12-04 10:34:13','2023-12-04 10:34:56'),(49,'randomIDPendingFeatureFix','8000','10','0x18689f0c34775028926348d11ab0eb155415c8d4dda3a4017596d5324f7d8839','repaid','2023-01-01 01:00:00','2023-12-04 10:34:13','2023-12-04 10:49:08'),(50,'randomIDPendingFeatureFix','1000','10','0x58b91ec6ab8e10927c220965838eb2c63da23c24d3a2573cc7a546ef65b927c6','repaid','2023-01-01 01:00:00','2023-12-04 10:52:01','2023-12-04 12:42:38'),(51,'randomIDPendingFeatureFix','100','10','0xad07b061107bf80be78ea52e1ca0d73241d62a1183537df5e08f11335903744c','repaid','2023-01-01 01:00:00','2023-12-04 12:49:50','2023-12-04 12:50:11'),(52,'randomIDPendingFeatureFix','800000000','10','0x559870d3a5ebbefd80c5519e80390f67daaca727acc5dceef339b28cf200ce96','repaid','2023-01-01 01:00:00','2023-12-04 12:53:11','2023-12-04 12:56:20');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_11_14_205338_create_sessions_table',1),(7,'2023_11_19_213601_loan_application_migration',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('UeLaKvB9mqV0AujDL0aIUlvXo1WnJXFLOjhfX52c',3,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoidU9LRkIwbnRZTktjRDl2RW1kbndSWmhBSkJqYXpIUXQ1TXNMRThZNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvdXNlci9hcmV3YWdlZWtAZ21haWwuY29tIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkODZscHZ0M3ZrOFNGWnE4cTZtYUJILlhsNWhuVUk2OFFnaS5EcnpSeFBRV2xZdHZwbGV6VHkiO30=',1701828728);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `blockchainID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int NOT NULL DEFAULT '100',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Austin Ameh','arewageek@gmail.com','arewageek@gmail.com',NULL,'$2y$12$EQiPnUyloGTl1JdsP6Q.yONXtP49v8yRocob8SXYa8JD8YvOf5wD6',NULL,NULL,NULL,'user','randomIDPendingFeatureFix',100,NULL,NULL,NULL,'2023-11-20 01:37:19','2023-11-20 01:37:19'),(2,'Austin','lilraxpa','lilraxpa@gmail.com',NULL,'$2y$12$NweweVt1MUygRLb3xY/21..8snFYBpLmzrzlVzqcASHbxa6h0Fj6.',NULL,NULL,NULL,'user','0x1629115193012422125279313217174124481429965333023528',100,NULL,NULL,NULL,'2023-11-20 06:13:02','2023-11-20 06:13:02'),(3,'Austin','austin','0xarewa@gmail.com',NULL,'$2y$12$86lpvt3vk8SFZq8q6maBH.Xl5hnUI68Qgi.DrzRxPQWlYtvplezTy',NULL,NULL,NULL,'admin','0x9eXmw8Fo7NloR94OXoTiZ36SpCO3LA7G',100,NULL,NULL,NULL,'2023-11-20 06:45:07','2023-11-20 06:45:07'),(4,'Austin','arewa','nultra101@gmail.com',NULL,'$2y$12$cb571cYrG/W8mjGtDKvY0.nizRbAQDP/FzgoD1u3H1FBlwCwwob22',NULL,NULL,NULL,'user','0xb09KIMxUv35jsW4CNUcUlwr0F4VTwP60',100,NULL,NULL,NULL,'2023-11-23 14:38:23','2023-11-23 14:38:23'),(5,'Austin','nultra','nultra007@gmail.com',NULL,'$2y$12$EZl6h9bksyiwLc8cJo/5jeb9jt8E1d1uUm9SsOoY8ImryxbsSNS0q',NULL,NULL,NULL,'user','0xHitzAgjQPX75OF5I2S9tL8PA6T6zCsCh',100,NULL,NULL,NULL,'2023-11-23 14:38:47','2023-11-23 14:38:47'),(6,'Bamidele','bamidele','demoemail@gmail.com',NULL,'$2y$12$EgaPxnTyBP0YoslokfriduTfJXBymP526OQuu5ujP77aBUcyAsBcS',NULL,NULL,NULL,'user','0xQjgch9W6j50S417LQkqYB1d2EDFX2u4U',100,NULL,NULL,NULL,'2023-11-28 18:30:17','2023-11-28 18:30:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-06  6:51:21

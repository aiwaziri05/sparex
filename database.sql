-- MySQL dump 10.13  Distrib 8.0.44, for Linux (x86_64)
--
-- Host: localhost    Database: sparex
-- ------------------------------------------------------
-- Server version	8.0.44-0ubuntu0.22.04.2

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('sparex-cache-boost.roster.scan','a:2:{s:6:\"roster\";O:21:\"Laravel\\Roster\\Roster\":3:{s:13:\"\0*\0approaches\";O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:11:\"\0*\0packages\";O:32:\"Laravel\\Roster\\PackageCollection\":2:{s:8:\"\0*\0items\";a:10:{i:0;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^3.2\";s:10:\"\0*\0package\";E:38:\"Laravel\\Roster\\Enums\\Packages:FILAMENT\";s:14:\"\0*\0packageName\";s:17:\"filament/filament\";s:10:\"\0*\0version\";s:6:\"3.3.47\";s:6:\"\0*\0dev\";b:0;}i:1;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^12.0\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:LARAVEL\";s:14:\"\0*\0packageName\";s:17:\"laravel/framework\";s:10:\"\0*\0version\";s:7:\"12.47.0\";s:6:\"\0*\0dev\";b:0;}i:2;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.3.9\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PROMPTS\";s:14:\"\0*\0packageName\";s:15:\"laravel/prompts\";s:10:\"\0*\0version\";s:5:\"0.3.9\";s:6:\"\0*\0dev\";b:0;}i:3;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v3.7.4\";s:10:\"\0*\0package\";E:38:\"Laravel\\Roster\\Enums\\Packages:LIVEWIRE\";s:14:\"\0*\0packageName\";s:17:\"livewire/livewire\";s:10:\"\0*\0version\";s:5:\"3.7.4\";s:6:\"\0*\0dev\";b:0;}i:4;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.5.2\";s:10:\"\0*\0package\";E:33:\"Laravel\\Roster\\Enums\\Packages:MCP\";s:14:\"\0*\0packageName\";s:11:\"laravel/mcp\";s:10:\"\0*\0version\";s:5:\"0.5.2\";s:6:\"\0*\0dev\";b:1;}i:5;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.24\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:PINT\";s:14:\"\0*\0packageName\";s:12:\"laravel/pint\";s:10:\"\0*\0version\";s:6:\"1.27.0\";s:6:\"\0*\0dev\";b:1;}i:6;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.41\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:SAIL\";s:14:\"\0*\0packageName\";s:12:\"laravel/sail\";s:10:\"\0*\0version\";s:6:\"1.52.0\";s:6:\"\0*\0dev\";b:1;}i:7;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^4.1\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:PEST\";s:14:\"\0*\0packageName\";s:12:\"pestphp/pest\";s:10:\"\0*\0version\";s:5:\"4.3.1\";s:6:\"\0*\0dev\";b:1;}i:8;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"12.5.4\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PHPUNIT\";s:14:\"\0*\0packageName\";s:15:\"phpunit/phpunit\";s:10:\"\0*\0version\";s:6:\"12.5.4\";s:6:\"\0*\0dev\";b:1;}i:9;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:10:\"\0*\0package\";E:41:\"Laravel\\Roster\\Enums\\Packages:TAILWINDCSS\";s:14:\"\0*\0packageName\";s:11:\"tailwindcss\";s:10:\"\0*\0version\";s:6:\"4.1.17\";s:6:\"\0*\0dev\";b:1;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:21:\"\0*\0nodePackageManager\";E:43:\"Laravel\\Roster\\Enums\\NodePackageManager:NPM\";}s:9:\"timestamp\";i:1768474681;}',1768561081),('sparex-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3','i:1;',1768566933),('sparex-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer','i:1768566933;',1768566933);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_logos`
--

DROP TABLE IF EXISTS `company_logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_logos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_logos`
--

LOCK TABLES `company_logos` WRITE;
/*!40000 ALTER TABLE `company_logos` DISABLE KEYS */;
INSERT INTO `company_logos` VALUES (1,'Microsoft','https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg',NULL,1,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(2,'Nike','https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg',NULL,2,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(3,'Google','https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg',NULL,3,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(4,'Netflix','https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg',NULL,4,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(5,'IBM','https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg',NULL,5,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(6,'Spotify','https://upload.wikimedia.org/wikipedia/commons/6/6e/Spotify_logo_with_text.svg',NULL,6,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(7,'Apple','https://upload.wikimedia.org/wikipedia/commons/5/51/Apple_logo_black.svg',NULL,7,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(8,'Meta','https://upload.wikimedia.org/wikipedia/commons/2/2e/Meta-Logo.png',NULL,8,1,'2026-01-09 14:58:24','2026-01-09 14:58:24');
/*!40000 ALTER TABLE `company_logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_infos`
--

DROP TABLE IF EXISTS `contact_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_infos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_infos`
--

LOCK TABLES `contact_infos` WRITE;
/*!40000 ALTER TABLE `contact_infos` DISABLE KEYS */;
INSERT INTO `contact_infos` VALUES (1,'info@sparextech.com','We\'ll get back to you within 24 hours.','+234 817 018 0103','Mon-Fri from 8am to 5pm EST.','Sour Plaza 1st Avenue Gwarimpa, FCT Abuja.','','2026-01-09 14:58:25','2026-01-09 14:58:25');
/*!40000 ALTER TABLE `contact_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_email_index` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Abdulhalim sunusi','ahalm.sunusi@gmail.com','project','This is my test contact',0,'2026-01-16 11:43:13','2026-01-16 11:43:13');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `core_values`
--

DROP TABLE IF EXISTS `core_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `core_values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_svg` text COLLATE utf8mb4_unicode_ci,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blue',
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `core_values`
--

LOCK TABLES `core_values` WRITE;
/*!40000 ALTER TABLE `core_values` DISABLE KEYS */;
INSERT INTO `core_values` VALUES (1,'Innovation','We apply creativity and emerging technologies to design smarter, future-ready digital solutions.','M13 10V3L4 14h7v7l9-11h-7z','blue',1,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(2,'Integrity','We operate with transparency, accountability, and trust in every client relationship.','M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z','green',2,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(3,'Collaboration','We work closely with our clients as partners, aligning technology with real business goals.','M12 4.354a4 4 0 110 5.292M15 21H3a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2z','amber',3,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(4,'Excellence','We are committed to quality, precision, and performance in every solution we deliver.','M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z','purple',4,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(5,'Impact','We focus on measurable results that create meaningful and lasting business value.','M13 10V3L4 14h7v7l9-11h-7z','pink',5,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(6,'Continuous Learning','We continuously evolve our skills to stay ahead in a rapidly changing digital landscape.','M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747c5.5 0 10-4.998 10-10.747S17.5 6.253 12 6.253z','indigo',6,1,'2026-01-09 14:58:23','2026-01-09 14:58:23');
/*!40000 ALTER TABLE `core_values` ENABLE KEYS */;
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
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_12_11_172946_create_projects_table',1),(5,'2025_12_11_181123_create_posts_table',1),(6,'2026_01_05_121642_create_contacts_table',1),(7,'2026_01_05_123249_add_columns_to_projects_table',1),(8,'2026_01_05_123250_add_columns_to_posts_table',1),(9,'2026_01_05_140018_create_core_values_table',1),(10,'2026_01_05_140030_create_services_table',1),(11,'2026_01_05_140035_create_testimonials_table',1),(12,'2026_01_05_140044_create_company_logos_table',1),(13,'2026_01_05_140053_create_social_media_links_table',1),(14,'2026_01_05_141929_add_show_on_homepage_to_projects_table',1),(15,'2026_01_05_141939_add_show_on_homepage_to_posts_table',1),(16,'2026_01_07_161808_create_stats_table',1),(17,'2026_01_08_094031_create_sections_table',1),(18,'2026_01_08_135942_create_contact_infos_table',1),(19,'2026_01_09_154828_create_settings_table',2);
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` json DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `show_on_homepage` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_category_index` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'future-of-data-driven-decisions','The Future of Data-Driven Decision Making','Explore how AI and machine learning are transforming how businesses make critical decisions using real-time data insights.','<h2>Why Data-Driven Matters</h2><p>Enterprises that place data at the heart of decision making outperform peers by reacting faster and testing ideas with confidence.</p><h3>What We Cover</h3><ul><li>Building a single source of truth</li><li>Setting up near real-time dashboards</li><li>When to automate vs. when to keep a human in the loop</li></ul><p>Pair these practices with clear ownership and lightweight governance to keep teams moving.</p>','blog-analytics','Analytics','blue','5 min read','Alex Rivers','\"Analytics,AI,Decision Intelligence\"',1,1,'2024-12-04 23:00:00','2026-01-09 14:58:22','2026-01-14 12:27:45',NULL),(2,'automation-for-ops','Automating Your Way to Success','Discover key automation strategies that help businesses streamline operations and reduce costs by up to 60%.','<h2>Automation That Sticks</h2><p>Great automation starts with mapping the journey and picking the right triggers.</p><h3>Checklist</h3><ul><li>Identify repetitive handoffs</li><li>Guardrails for exceptions</li><li>Measure reclaimed time</li></ul><p>Start small, measure, and expand once a win is proven.</p>','blog-automation','Best Practices','green','7 min read','Priya Desai','\"Automation,Ops,Scaling\"',1,1,'2024-12-01 23:00:00','2026-01-09 14:58:22','2026-01-14 12:31:51',NULL),(3,'enterprise-ai-2025','Enterprise AI: What\'s Next in 2025','A deep dive into emerging AI technologies and how forward-thinking enterprises are preparing for the next wave.','<h2>AI Trends to Watch</h2><p>From retrieval-augmented generation to domain-specialized copilots, AI is reshaping workflows.</p><h3>Key Moves</h3><ul><li>Invest in data quality pipelines</li><li>Pair LLMs with strong observability</li><li>Adopt a privacy-first posture</li></ul>','blog-ai','Trends','amber','6 min read','Jamie Lee','\"AI,LLM,Enterprise\"',1,1,'2024-11-27 23:00:00','2026-01-09 14:58:22','2026-01-14 12:32:07',NULL),(4,'cybersecurity-iot','Cybersecurity in the Age of IoT','Understanding the new security challenges posed by connected devices and how to protect your infrastructure.','<h2>Risk Surfaces Grow</h2><p>More devices mean more entry points. Strong identity, network segmentation, and continuous monitoring are non-negotiable.</p><h3>Actionable Steps</h3><ul><li>Adopt zero-trust for device access</li><li>Automate patch management</li><li>Continuously test incident response</li></ul>','blog-security','Security','red','4 min read','Riley Carter','[\"Security\", \"IoT\", \"Zero Trust\"]',1,0,'2024-11-19 23:00:00','2026-01-09 14:58:22','2026-01-09 14:58:22',NULL),(5,'cloud-migration-strategies','Cloud Migration Strategies','A comprehensive guide to moving your legacy systems to the cloud with minimal downtime and maximum efficiency.','<h2>Choosing the Right Path</h2><p>Lift-and-shift versus re-platforming depends on risk appetite, timelines, and talent.</p><h3>Playbook</h3><ul><li>Inventory and dependency mapping</li><li>Pilot migrations with rollback plans</li><li>Cost and performance baselines</li></ul>','blog-cloud','Infrastructure','indigo','8 min read','Morgan Chen','[\"Cloud\", \"Migration\", \"Architecture\"]',1,0,'2024-11-14 23:00:00','2026-01-09 14:58:22','2026-01-09 14:58:22',NULL),(6,'mobile-ux-essentials','Optimizing UX for Mobile Users','Key principles for ensuring your digital products provide a seamless experience across all mobile devices.','<h2>Design for Thumbs</h2><p>Prioritize tap targets, fast feedback, and offline resilience.</p><h3>Principles</h3><ul><li>Ship responsive layouts first</li><li>Respect device performance</li><li>Instrument journeys for friction</li></ul>','blog-ux','Design','purple','5 min read','Sara Mitchell','[\"UX\", \"Mobile\", \"Design Systems\"]',1,0,'2024-11-09 23:00:00','2026-01-09 14:58:22','2026-01-09 14:58:22',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` json DEFAULT NULL,
  `technologies` json DEFAULT NULL,
  `features` json DEFAULT NULL,
  `images` json DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `show_on_homepage` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_slug_unique` (`slug`),
  KEY `projects_category_index` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Global Logistics Dashboard','global-logistics-dashboard','A centralized dashboard for tracking shipments, fleet management, and real-time analytics for a multinational logistics firm.','<h2>Project Overview</h2><p>Built a comprehensive logistics management platform that handles real-time tracking of over 10,000 shipments daily across 50+ countries.</p><h3>Key Features</h3><ul><li>Real-time GPS tracking integration</li><li>Automated route optimization</li><li>Predictive analytics for delivery times</li><li>Multi-language support</li></ul>','Dashboards','portfolio-analytics','blue','[\"Vue.js\", \"Laravel\", \"Google Maps API\"]','[\"Vue.js\", \"Laravel\", \"Google Maps API\"]','[\"Real-time GPS tracking\", \"Route optimization\", \"Predictive analytics\", \"Multi-language support\"]','[]',NULL,NULL,NULL,1,0,'2026-01-14 12:29:29','2026-01-14 12:29:29','2026-01-14 12:29:29',NULL),(2,'Manufacturing SOP Portal','manufacturing-sop-portal','Digitized standard operating procedures with video guides and compliance tracking for a factory floor.','<h2>Project Overview</h2><p>Transformed paper-based SOPs into an interactive digital platform with video tutorials and compliance tracking.</p><h3>Impact</h3><ul><li>Reduced training time by 60%</li><li>Improved compliance rates to 98%</li><li>Eliminated paper waste</li></ul>','Web Platforms','portfolio-automation','indigo','[\"React\", \"Node.js\", \"AWS S3\"]','[\"React\", \"Node.js\", \"AWS S3\"]','[\"Video tutorials\", \"Compliance tracking\", \"Digital documentation\"]','[]',NULL,NULL,NULL,1,0,'2026-01-14 12:29:29','2026-01-14 12:29:29','2026-01-14 12:29:29',NULL),(3,'HR Onboarding Automation','hr-onboarding-automation','Automated entire employee onboarding process, integrating with payroll and slack, reducing manual work by 90%.','<h2>Project Overview</h2><p>Streamlined the entire employee onboarding workflow through intelligent automation and integration.</p><h3>Automation Features</h3><ul><li>Automated document collection</li><li>Payroll system integration</li><li>Slack workspace provisioning</li><li>Equipment request automation</li></ul>','System Automation','portfolio-ai','orange','[\"Python\", \"Zapier\", \"Slack API\"]','[\"Python\", \"Zapier\", \"Slack API\"]','[\"Document collection\", \"Payroll integration\", \"Slack provisioning\", \"Equipment automation\"]','[]',NULL,NULL,NULL,1,0,'2026-01-14 12:29:29','2026-01-14 12:29:29','2026-01-14 12:29:29',NULL),(4,'Retail Data Warehouse','retail-data-warehouse','Unified data warehouse solution aggregating sales data from 500+ stores for real-time reporting.','<h2>Project Overview</h2><p>Built a scalable data warehouse that processes millions of transactions daily from retail locations worldwide.</p><h3>Technical Highlights</h3><ul><li>Real-time data ingestion</li><li>Advanced analytics dashboards</li><li>Predictive inventory modeling</li><li>Custom reporting engine</li></ul>','Data Analytics','portfolio-analytics','emerald','\"Snowflake,Dbt,PowerBI\"','\"Snowflake,Dbt,PowerBI\"','[]','[]',NULL,NULL,NULL,1,1,'2026-01-14 12:29:29','2026-01-14 12:29:30','2026-01-14 12:30:01',NULL),(5,'Legal Archive Search','legal-archive-search','OCR-enabled archive system for a law firm, making 50 years of case files searchable.','<h2>Project Overview</h2><p>Digitized and indexed decades of legal documents using advanced OCR and search technology.</p><h3>Capabilities</h3><ul><li>Full-text search across scanned documents</li><li>Advanced filtering and categorization</li><li>Secure access controls</li><li>Export and citation tools</li></ul>','Web Platforms','portfolio-automation','purple','\"OCR,Elasticsearch,Python\"','\"OCR,Elasticsearch,Python\"','[]','[]',NULL,NULL,NULL,1,1,'2026-01-14 12:29:29','2026-01-14 12:29:30','2026-01-14 12:30:39',NULL),(6,'Hybrid Cloud Migration','hybrid-cloud-migration','Comprehensive roadmap and execution of migrating on-premise servers to Azure hybrid cloud environment.','<h2>Project Overview</h2><p>Led the strategic migration of enterprise infrastructure to a hybrid cloud model with zero downtime.</p><h3>Migration Phases</h3><ul><li>Infrastructure assessment and planning</li><li>Phased migration strategy</li><li>Security and compliance implementation</li><li>Performance optimization</li></ul>','IT Infrastructure','portfolio-ai','cyan','\"Azure,Hybrid Cloud,Security\"','\"Azure,Hybrid Cloud,Security\"','[]','[]',NULL,NULL,NULL,1,1,'2026-01-14 12:29:29','2026-01-14 12:29:30','2026-01-14 12:31:01',NULL),(7,'Luxury Fashion App','luxury-fashion-app','Native mobile application for a luxury fashion brand with AR try-on features.','<h2>Project Overview</h2><p>Developed a premium mobile shopping experience with cutting-edge AR technology for virtual try-ons.</p><h3>Features</h3><ul><li>AR-powered virtual try-on</li><li>Personalized recommendations</li><li>Seamless checkout experience</li><li>Exclusive member benefits</li></ul>','Mobile Apps','portfolio-analytics','rose','[\"React Native\", \"Firebase\", \"ARKit\"]','[\"React Native\", \"Firebase\", \"ARKit\"]','[\"AR try-on\", \"Personalized recommendations\", \"Seamless checkout\", \"Member benefits\"]','[]',NULL,NULL,NULL,1,0,'2026-01-14 12:29:29','2026-01-14 12:29:30','2026-01-14 12:29:30',NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sections_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Custom Software Development','Bespoke applications built around your workflows to improve efficiency and scale with your business.','assets/icons/laptop.svg','rgba(25, 118, 210, 0.15)',1,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(2,'Digital SOP Systems','Digitize and standardize operating procedures to ensure consistency and compliance.','assets/icons/checklist.svg','rgba(79, 70, 229, 0.15)',2,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(3,'Workflow Automation','Automate repetitive processes to reduce manual effort and accelerate delivery.','assets/icons/cog.svg','rgba(255, 152, 0, 0.15)',3,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(4,'Data Management','Secure data pipelines, storage, and governance for reliable insights.','assets/icons/database.svg','rgba(16, 185, 129, 0.15)',4,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(5,'Document Digitalization','Transform paper-based processes into searchable, auditable digital records.','assets/icons/document.svg','rgba(79, 70, 229, 0.15)',5,1,'2026-01-09 14:58:23','2026-01-09 14:58:23'),(6,'IT Infrastructure Advisory','Expert guidance to design resilient, scalable, and cost-effective infrastructure.','assets/icons/server.svg','rgba(79, 70, 229, 0.15)',6,1,'2026-01-09 14:58:23','2026-01-09 14:58:23');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
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
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `show_social_panel` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,1,NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_media_links`
--

DROP TABLE IF EXISTS `social_media_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `social_media_links` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hover_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_media_links`
--

LOCK TABLES `social_media_links` WRITE;
/*!40000 ALTER TABLE `social_media_links` DISABLE KEYS */;
INSERT INTO `social_media_links` VALUES (1,'facebook','https://facebook.com',NULL,NULL,0,1,'2026-01-09 14:29:51','2026-01-09 14:29:51'),(2,'twitter','https://x.com/sparextech',NULL,NULL,0,1,'2026-01-14 12:34:05','2026-01-14 12:34:05'),(3,'linkedin','https://ng.linkedin.com/company/sparexltd?trk=similar-pages',NULL,NULL,0,1,'2026-01-14 12:34:27','2026-01-14 12:34:27');
/*!40000 ALTER TABLE `social_media_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stats`
--

DROP TABLE IF EXISTS `stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'indigo',
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stats`
--

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` VALUES (1,'Projects','150','+','Delivered','indigo',1,1,'2026-01-09 14:58:25','2026-01-09 14:58:25'),(2,'Forecast Accuracy','94','%','AI-Driven','emerald',2,1,'2026-01-09 14:58:25','2026-01-09 14:58:25'),(3,'Manual Work Reduced','85','%','With Automation','amber',3,1,'2026-01-09 14:58:25','2026-01-09 14:58:25');
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blue',
  `is_verified` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Mark Davis','COO','Innovate Inc.','Sparex\'s platform transformed our operations. Intelligent workflows reduced errors and improved efficiency across teams.','https://randomuser.me/api/portraits/men/32.jpg','blue',1,1,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(2,'Priya Sharma','Head of Analytics','DataCorp','The Sparex team delivered beyond expectations. Their solutions streamlined our processes and the support was outstanding.','https://randomuser.me/api/portraits/women/44.jpg','emerald',1,2,1,'2026-01-09 14:58:24','2026-01-09 14:58:24'),(3,'Lucas Meyer','CTO','FutureRetail','We saw a 40% reduction in manual work and more accurate business forecasts. Highly recommend their expertise!','https://randomuser.me/api/portraits/men/85.jpg','amber',1,3,1,'2026-01-09 14:58:24','2026-01-09 14:58:24');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Test User','test@example.com','2026-01-09 14:58:20','$2y$12$/kgsvZlBiWZubqyXZE6Qaecqb40ZAv/vy55FcKys9aDq1FgmWAvse','uIAO1Z0XNPpLhRe8olh86ugnjxtvjV3MsruRHtYgha4CHJpP16qKFkV2dcBq','2026-01-09 14:58:21','2026-01-09 14:58:21');
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

-- Dump completed on 2026-01-16 14:08:00

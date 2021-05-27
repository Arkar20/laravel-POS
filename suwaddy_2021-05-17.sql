# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: suwaddy
# Generation Time: 2021-05-17 14:02:59 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madein` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thickness` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `type`, `madein`, `thickness`, `created_at`, `updated_at`)
VALUES
	(1,'အင်္ကျီကဒ်','ဗားမား','အထူ','2021-04-29 16:23:07','2021-04-29 16:23:07'),
	(2,'အင်္ကျီကဒ်','ဗားမား','အပါး','2021-04-29 16:23:12','2021-04-29 16:23:12'),
	(3,'Pattern စက္ကူ','ဗားမား','အထူ','2021-04-30 09:14:32','2021-04-30 09:14:32'),
	(4,'Pattern စက္ကူ','ဗားမား','အပါး','2021-05-03 11:20:13','2021-05-03 11:20:13'),
	(5,'Pattern စက္ကူ','နိုင်ငံခြား','အထူ','2021-05-05 14:14:29','2021-05-05 14:14:29'),
	(6,'Markerစက္ကူ','ဗားမား','အပါး','2021-05-06 11:22:36','2021-05-06 11:22:36'),
	(7,'ခေါင်းချိုးကဒ်','ဗားမား','အထူ','2021-05-11 12:17:06','2021-05-11 12:17:06');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table colors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colors`;

CREATE TABLE `colors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `colors_color_unique` (`color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;

INSERT INTO `colors` (`id`, `color`, `created_at`, `updated_at`)
VALUES
	(1,'အညို','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(2,'အဖြူ','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(3,'Karki','2021-05-08 12:29:07','2021-05-08 12:29:07');

/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phnum1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phnum2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retail_customer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `phnum1` (`phnum1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `name`, `phnum1`, `phnum2`, `company`, `address`, `retail_customer`, `created_at`, `updated_at`)
VALUES
	(11,'ကိုကျော်စိုးသူ','09425669011','09426989992','Love Bird','အမှတ်-(၅၃၉)၊ အောင်မြေရတနာလမ်း၊ ၈ရပ်ကွက်၊ သာကေတ မြို့နယ်',0,'2021-05-01 11:43:21','2021-05-01 11:43:21'),
	(12,'09692250054','09692250054','09692250054','သန်လျင်မြို့နယ်','သန်လျင်မြို့နယ်',0,'2021-05-01 11:55:56','2021-05-01 11:55:56'),
	(13,'095402559','095402559','095402559','095402559','မင်းလမ်း ရွှေပြည်သာမြို့နယ်',0,'2021-05-01 12:08:32','2021-05-03 12:40:42'),
	(14,'Ma Su Su ','0943043445','0943043445','Ma Su Su ','No,676, Khay Ma Thi St, KaGyi Ward, North Okkalapah',0,'2021-05-03 11:23:41','2021-05-03 11:23:41'),
	(15,'Ko Mg Lay','09970044299','09970044299','Ko Mg Lay','Mudon ',0,'2021-05-03 11:29:31','2021-05-03 11:29:31'),
	(16,'Daw Pone','0979586798','0979586798','Daw Pone','Daw Pone',0,'2021-05-03 11:34:46','2021-05-03 11:34:46'),
	(17,'53 ward','09963826376','09963826376','53 ward','53 ward',0,'2021-05-03 11:37:58','2021-05-03 11:37:58'),
	(18,'09253734033','09253734033','09253734033','09253734033','No10,Aung Bar lay St,Kyaunt Myang,Tamwe',0,'2021-05-03 11:50:29','2021-05-03 11:50:29'),
	(19,'72 Ward','09795974563','09795974563','72 Ward','72 Ward, Arr Mhan Tea Shop, South Dagon',0,'2021-05-03 11:53:47','2021-05-03 11:53:47'),
	(20,'Khant Pwint Phyu','09755592734','09755592734','Khant Pwint Phyu','72 Ward',0,'2021-05-04 13:10:15','2021-05-04 13:10:15'),
	(21,'09973218003','09973218003','09973218003','09973218003','Pazonhtg Township',0,'2021-05-04 13:12:09','2021-05-04 13:12:09'),
	(22,'Top Lady','09261555225','09261555225','09261555225','46 Ward, North Dagon',0,'2021-05-04 13:13:28','2021-05-04 13:13:28'),
	(24,'09422666046','09422666046','09422666046','09422666046','South Dagon',0,'2021-05-05 13:56:22','2021-05-05 13:56:22'),
	(25,'09965182215','09965182215','09965182215','09965182215','Mingalar Zay 123 street',0,'2021-05-05 14:00:18','2021-05-05 14:00:18'),
	(26,'G-Nine Family','09790143716','09790143716','G-Nine Family','G-Nine Family',1,'2021-05-05 14:04:22','2021-05-05 14:04:22'),
	(27,'09259283906','09259283906','09259283906','09259283906','South Okalapah, Moe Kaung',0,'2021-05-05 14:07:11','2021-05-05 14:07:11'),
	(28,'Lar Wal','0',NULL,NULL,NULL,0,'2021-05-05 14:10:43','2021-05-05 14:10:43'),
	(29,'ThanNlyin ','09770443495','09770443495','09770443495','ThanNlyin Aung Chan Thar ',0,'2021-05-05 14:12:52','2021-05-05 14:12:52'),
	(31,'09455476120','09455476120','09455476120','09455476120','Mone Ywar, Moe Kaung Kin Express, Aung San Kwin, 09260666006',0,'2021-05-06 11:25:10','2021-05-06 11:25:10'),
	(32,'09675600152','09675600152','09675600152','09675600152','Aung Minglar, Tamwe',0,'2021-05-06 11:26:24','2021-05-06 11:26:24'),
	(33,'09458033956','09458033956','09458033956','09458033956','HleKuu ',0,'2021-05-07 15:00:54','2021-05-07 15:00:54'),
	(34,'0950071119','0950071119','0950071119','0950071119','South Dagon',0,'2021-05-07 15:02:44','2021-05-07 15:02:44'),
	(35,'Ko Kyae Lin Oo','09955544111','09955544111','09955544111','BawGa Thiri Car Win ',0,'2021-05-07 15:04:07','2021-05-07 15:04:07'),
	(36,'09451235870','094512358700','09451235870','09451235870','Shwe Pout Kan ',0,'2021-05-07 15:06:24','2021-05-07 15:06:24'),
	(37,'Ma Khine Khine','09699610727','09699610727','09699610727','MawlaMyaing, Daw OWn',0,'2021-05-07 15:09:46','2021-05-07 15:09:46'),
	(38,'09795841838','09795841838','09795841838','09795841838','Aww Ba St',0,'2021-05-07 15:12:06','2021-05-07 15:12:06'),
	(39,'Ma Win Win Maw','09794118156','09794118156','09794118156','HInntada Thein Thein Htay, Mingalarzay gate cha',0,'2021-05-08 12:28:20','2021-05-08 12:28:20'),
	(40,'09788799921','09788799921','09961753086','09788799921','TharkayTHa',0,'2021-05-08 12:32:29','2021-05-08 12:32:29'),
	(41,'09250777120','09250777120','09250777120','09250777120','Shwe Pyi Thar',0,'2021-05-08 12:38:10','2021-05-08 12:38:10'),
	(42,'09777280856','09777280856','09777280856','09777280856','Min Galar Zay',0,'2021-05-10 14:55:45','2021-05-10 14:55:45'),
	(43,'09451391851','09451391851','09451391851','09451391851','Kyaunt Myang,Dagon Thiri st',0,'2021-05-10 15:00:50','2021-05-10 15:00:50'),
	(44,'0943080580','0943080580','0943080580','0943080580','Htuk Kyant',0,'2021-05-10 15:03:31','2021-05-10 15:03:31'),
	(45,'Akary','0942014062','0942014062','Akary','Than Lyin',0,'2021-05-10 15:07:15','2021-05-10 15:07:15'),
	(46,'0978799954','0978799954','0978799954','0978799954','0978799954',0,'2021-05-10 15:09:08','2021-05-10 15:09:08'),
	(47,'Lady like','09775466941','09775466941','Lady like','Min Yè Kyaw Swar st,Dagon University,North Dagon',0,'2021-05-10 15:12:19','2021-05-10 15:12:19'),
	(48,'Ma San San','095241581','095241581','Ma San San','TarChi Late,Moe Kaungkin Gate',0,'2021-05-11 12:01:17','2021-05-11 12:01:17'),
	(49,'Ma Aye Mee Oo','09250825677','09250825677','09250825677','Phar Pon Gate',0,'2021-05-11 12:03:40','2021-05-11 12:05:06'),
	(50,'Hein Zar Ni','09965437973','09965437973','Hein Zar Ni','Maw La Myaing',0,'2021-05-11 12:08:12','2021-05-11 12:08:12'),
	(51,'09443375798','09443375798','09443375798','09443375798','88 Ward,Dama Yadanar St,South Dagon',0,'2021-05-11 12:10:37','2021-05-11 12:10:37'),
	(52,'Ma Thidar Aye','09794410215','09794410215','Ma Thidar Aye','54 Ward',0,'2021-05-11 12:12:33','2021-05-11 12:12:33'),
	(53,'09420305995','09420305995','09420305995','09420305995','South Okkalapah, Thitsar St',0,'2021-05-11 12:20:31','2021-05-11 12:20:31'),
	(54,'095050755','095050755','095050755','095050755','Thar Kay Tha',0,'2021-05-11 12:23:52','2021-05-11 12:23:52'),
	(55,'09785055770','09785055770','09785055770','09785055770','126 st, Min Ga Lar Zay',0,'2021-05-11 12:30:05','2021-05-11 12:30:05'),
	(56,'09254149559','09254149559','09254149559','09254149559','Min Ga lar Zay',0,'2021-05-13 14:50:02','2021-05-13 14:50:02');

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table deliveries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `deliveries`;

CREATE TABLE `deliveries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `township` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `deliveries_township_unique` (`township`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `deliveries` WRITE;
/*!40000 ALTER TABLE `deliveries` DISABLE KEYS */;

INSERT INTO `deliveries` (`id`, `township`, `price`, `created_at`, `updated_at`)
VALUES
	(1,'North Okkalapa',3000,'2021-05-03 11:21:50','2021-05-03 11:21:50'),
	(2,'Tamwe ',3000,'2021-05-03 11:47:51','2021-05-03 11:47:51'),
	(3,'South Dagon',2000,'2021-05-03 11:52:47','2021-05-03 11:52:47'),
	(4,'HleKuu',5000,'2021-05-07 15:01:10','2021-05-07 15:01:10'),
	(5,'Aung Migalar',3000,'2021-05-07 15:04:40','2021-05-07 15:04:40'),
	(6,'Htak Kyant',5000,'2021-05-10 15:04:15','2021-05-10 15:04:15'),
	(7,'Thar Kay Tha',3000,'2021-05-11 12:24:27','2021-05-11 12:24:27'),
	(8,'Min Ga Lar Zay',3000,'2021-05-13 14:50:58','2021-05-13 14:50:58');

/*!40000 ALTER TABLE `deliveries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

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



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(81,'2014_10_12_000000_create_users_table',1),
	(82,'2014_10_12_100000_create_password_resets_table',1),
	(83,'2019_08_19_000000_create_failed_jobs_table',1),
	(84,'2021_03_15_192622_create_customers_table',1),
	(85,'2021_03_15_192715_create_categories_table',1),
	(86,'2021_03_15_192746_create_sizes_table',1),
	(87,'2021_03_31_092730_create_colors_table',1),
	(88,'2021_04_09_140030_create_products_table',1),
	(89,'2021_04_22_194956_create_deliveries_table',1),
	(90,'2021_04_22_200750_create_orders_table',1),
	(91,'2021_04_27_155538_create_order_products_table',1),
	(92,'2021_05_04_112047_add_retail_price_to_products_table',2),
	(93,'2021_05_05_122404_add_retail_customer_column_to_customers_table',3),
	(94,'2021_05_05_182309_add_role_column_to_users_table',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table order_products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_products`;

CREATE TABLE `order_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `qty` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_products_order_id_foreign` (`order_id`),
  KEY `order_products_product_id_foreign` (`product_id`),
  CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`)
VALUES
	(23,24,1,10000,NULL,NULL),
	(24,25,3,5000,NULL,NULL),
	(25,26,4,5000,NULL,NULL),
	(26,27,15,1,NULL,NULL),
	(27,28,4,10000,NULL,NULL),
	(28,29,8,5000,NULL,NULL),
	(29,30,1,1000,NULL,NULL),
	(30,30,16,2,NULL,NULL),
	(31,31,1,3000,NULL,NULL),
	(32,32,8,1500,NULL,NULL),
	(33,33,1,5000,NULL,NULL),
	(34,33,16,0,NULL,NULL),
	(35,34,5,20000,NULL,NULL),
	(36,35,3,10000,NULL,NULL),
	(37,35,16,1,NULL,NULL),
	(38,36,9,2000,NULL,NULL),
	(39,36,16,0,NULL,NULL),
	(40,37,3,2000,NULL,NULL),
	(41,37,7,8000,NULL,NULL),
	(42,38,3,5000,NULL,NULL),
	(43,38,7,20000,NULL,NULL),
	(44,39,1,5000,NULL,NULL),
	(45,40,12,500,NULL,NULL),
	(46,40,1,500,NULL,NULL),
	(47,41,6,10000,NULL,NULL),
	(48,41,1,20000,NULL,NULL),
	(49,42,1,10000,NULL,NULL),
	(50,42,18,30,NULL,NULL),
	(51,43,5,10000,NULL,NULL),
	(52,43,7,30000,NULL,NULL),
	(53,43,3,15000,NULL,NULL),
	(54,43,20,5000,NULL,NULL),
	(55,43,19,5000,NULL,NULL),
	(56,44,21,5000,NULL,NULL),
	(57,44,22,80,NULL,NULL),
	(58,45,6,2500,NULL,NULL),
	(59,45,8,5000,NULL,NULL),
	(60,45,1,5000,NULL,NULL),
	(61,46,22,100,NULL,NULL),
	(62,46,16,1,NULL,NULL),
	(63,47,3,2000,NULL,NULL),
	(64,48,22,68,NULL,NULL),
	(65,49,3,5000,NULL,NULL),
	(66,50,22,80,NULL,NULL),
	(67,51,5,5000,NULL,NULL),
	(68,52,1,5000,NULL,NULL),
	(69,53,3,25000,NULL,NULL),
	(70,53,22,131,NULL,NULL),
	(71,54,8,2000,NULL,NULL),
	(72,54,1,3000,NULL,NULL),
	(73,55,16,1,NULL,NULL),
	(74,55,23,250,NULL,NULL),
	(75,56,24,5000,NULL,NULL),
	(76,57,14,10,NULL,NULL),
	(77,58,7,20000,NULL,NULL),
	(78,59,25,1,NULL,NULL),
	(79,60,5,3000,NULL,NULL),
	(80,60,16,1,NULL,NULL),
	(81,61,1,4000,NULL,NULL),
	(82,62,1,5000,NULL,NULL),
	(83,62,6,5000,NULL,NULL),
	(84,63,4,3000,NULL,NULL),
	(85,64,17,4,NULL,NULL),
	(86,65,17,1,NULL,NULL),
	(87,66,22,151,NULL,NULL),
	(88,67,17,1,NULL,NULL),
	(89,68,8,2500,NULL,NULL),
	(90,69,1,1000,NULL,NULL),
	(91,70,5,5000,NULL,NULL),
	(92,70,26,5000,NULL,NULL),
	(93,71,5,10000,NULL,NULL),
	(94,72,22,76,NULL,NULL),
	(95,72,16,1,NULL,NULL),
	(96,73,27,5000,NULL,NULL),
	(97,74,1,5000,NULL,NULL),
	(98,74,22,52,NULL,NULL),
	(99,75,22,71,NULL,NULL),
	(100,76,14,1,NULL,NULL),
	(101,76,16,0,NULL,NULL),
	(102,77,28,1000,NULL,NULL),
	(103,78,3,3000,NULL,NULL);

/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `customer_id` bigint(20) unsigned NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_id` bigint(20) unsigned DEFAULT NULL,
  `total_cost` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order_date` date NOT NULL DEFAULT '2021-04-29',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_customer_id_foreign` (`customer_id`),
  KEY `orders_delivery_id_foreign` (`delivery_id`),
  CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `user_id`, `customer_id`, `cart`, `delivery_id`, `total_cost`, `status`, `order_date`, `created_at`, `updated_at`)
VALUES
	(24,1,11,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:5:\"10000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:140000;}}}',NULL,140000,1,'2021-05-01','2021-05-01 11:45:14','2021-05-01 11:45:14'),
	(25,1,12,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:11;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.31;s:8:\"subtotal\";i:55000;}}}',NULL,55000,1,'2021-05-01','2021-05-01 11:57:05','2021-05-01 11:57:05'),
	(26,1,13,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";a:10:{s:5:\"rowId\";s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";s:2:\"id\";i:4;s:4:\"name\";s:49:\"9-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:13;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.73;s:8:\"subtotal\";i:65000;}}}',NULL,65000,1,'2021-05-01','2021-05-01 12:08:49','2021-05-01 12:08:49'),
	(27,1,14,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ab474a72475ea6ea54d2085e5cdacc28\";a:10:{s:5:\"rowId\";s:32:\"ab474a72475ea6ea54d2085e5cdacc28\";s:2:\"id\";i:15;s:4:\"name\";s:53:\"35-41(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:12000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:2520;s:8:\"subtotal\";i:12000;}}}',1,15000,1,'2021-05-03','2021-05-03 11:24:05','2021-05-03 11:24:05'),
	(28,1,15,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";a:10:{s:5:\"rowId\";s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";s:2:\"id\";i:4;s:4:\"name\";s:49:\"9-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:5:\"10000\";s:5:\"price\";i:13;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.73;s:8:\"subtotal\";i:130000;}}}',NULL,130000,1,'2021-05-03','2021-05-03 11:29:37','2021-05-03 11:29:37'),
	(29,1,16,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"18d6934483b994fb9943b43b7d7646bf\";a:10:{s:5:\"rowId\";s:32:\"18d6934483b994fb9943b43b7d7646bf\";s:2:\"id\";i:8;s:4:\"name\";s:49:\"8-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:12;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.52;s:8:\"subtotal\";i:60000;}}}',NULL,60000,1,'2021-05-03','2021-05-03 11:34:50','2021-05-03 11:34:50'),
	(30,1,17,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"1000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:14000;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:1:\"2\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:32000;}}}',NULL,46000,1,'2021-05-03','2021-05-03 11:38:01','2021-05-03 11:38:01'),
	(31,1,18,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"3000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:42000;}}}',2,45000,1,'2021-05-03','2021-05-03 11:50:34','2021-05-03 11:50:34'),
	(32,1,19,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"18d6934483b994fb9943b43b7d7646bf\";a:10:{s:5:\"rowId\";s:32:\"18d6934483b994fb9943b43b7d7646bf\";s:2:\"id\";i:8;s:4:\"name\";s:49:\"8-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"1500\";s:5:\"price\";i:12;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.52;s:8:\"subtotal\";i:18000;}}}',3,20000,1,'2021-05-03','2021-05-03 11:53:49','2021-05-03 11:53:49'),
	(33,1,20,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:70000;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:3:\"0.2\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:3200;}}}',NULL,73200,1,'2021-05-04','2021-05-04 13:11:12','2021-05-04 13:11:12'),
	(34,1,21,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"468399581342505c47f4615b81bedaa9\";a:10:{s:5:\"rowId\";s:32:\"468399581342505c47f4615b81bedaa9\";s:2:\"id\";i:5;s:4:\"name\";s:52:\"9-11(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"20000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:200000;}}}',NULL,200000,1,'2021-05-04','2021-05-04 13:12:17','2021-05-04 13:12:17'),
	(35,1,22,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"10000\";s:5:\"price\";i:11;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.31;s:8:\"subtotal\";i:110000;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:16000;}}}',NULL,126000,1,'2021-05-04','2021-05-04 13:13:38','2021-05-04 13:13:38'),
	(36,1,24,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"c42f6beec9c93fd6afea6eb0684aa99a\";a:10:{s:5:\"rowId\";s:32:\"c42f6beec9c93fd6afea6eb0684aa99a\";s:2:\"id\";i:9;s:4:\"name\";s:52:\"8-11(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"2000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:20000;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:3:\"0.1\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:1600;}}}',NULL,21600,1,'2021-05-05','2021-05-05 13:56:32','2021-05-05 13:56:32'),
	(37,1,25,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"2000\";s:5:\"price\";i:11;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.31;s:8:\"subtotal\";i:22000;}s:32:\"808821852042d8780b9f862c35c42c68\";a:10:{s:5:\"rowId\";s:32:\"808821852042d8780b9f862c35c42c68\";s:2:\"id\";i:7;s:4:\"name\";s:52:\"8-10(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"8000\";s:5:\"price\";i:8;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:1.68;s:8:\"subtotal\";i:64000;}}}',NULL,86000,1,'2021-05-05','2021-05-05 14:00:28','2021-05-05 14:00:28'),
	(38,1,26,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:50000;}s:32:\"808821852042d8780b9f862c35c42c68\";a:10:{s:5:\"rowId\";s:32:\"808821852042d8780b9f862c35c42c68\";s:2:\"id\";i:7;s:4:\"name\";s:52:\"8-10(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"20000\";s:5:\"price\";i:7;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:1.47;s:8:\"subtotal\";i:140000;}}}',NULL,190000,1,'2021-05-05','2021-05-05 14:04:27','2021-05-05 14:04:27'),
	(39,1,27,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:70000;}}}',NULL,70000,1,'2021-05-05','2021-05-05 14:07:14','2021-05-05 14:07:14'),
	(40,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"eef12573176125ce53e333e13d747a17\";a:10:{s:5:\"rowId\";s:32:\"eef12573176125ce53e333e13d747a17\";s:2:\"id\";i:12;s:4:\"name\";s:50:\"10-13(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:3:\"500\";s:5:\"price\";i:16;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:3.36;s:8:\"subtotal\";i:8000;}s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:3:\"500\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:7000;}}}',NULL,15000,1,'2021-05-05','2021-05-05 14:10:49','2021-05-05 14:10:49'),
	(41,1,29,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";a:10:{s:5:\"rowId\";s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";s:2:\"id\";i:6;s:4:\"name\";s:49:\"8-10(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:5:\"10000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:100000;}s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:5:\"20000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:280000;}}}',NULL,380000,1,'2021-05-05','2021-05-05 14:12:58','2021-05-05 14:12:58'),
	(42,1,29,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:5:\"10000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:140000;}s:32:\"303a7f02364f1e92dc60c05c9b15239f\";a:10:{s:5:\"rowId\";s:32:\"303a7f02364f1e92dc60c05c9b15239f\";s:2:\"id\";i:18;s:4:\"name\";s:65:\"31-41(-အဖြူ-အထူ-)-နိုင်ငံခြား\";s:3:\"qty\";s:2:\"30\";s:5:\"price\";i:300;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:63;s:8:\"subtotal\";i:9000;}}}',NULL,149000,1,'2021-05-05','2021-05-05 14:17:18','2021-05-05 14:17:18'),
	(43,1,26,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:5:{s:32:\"468399581342505c47f4615b81bedaa9\";a:10:{s:5:\"rowId\";s:32:\"468399581342505c47f4615b81bedaa9\";s:2:\"id\";i:5;s:4:\"name\";s:52:\"9-11(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"10000\";s:5:\"price\";i:9;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:1.89;s:8:\"subtotal\";i:90000;}s:32:\"808821852042d8780b9f862c35c42c68\";a:10:{s:5:\"rowId\";s:32:\"808821852042d8780b9f862c35c42c68\";s:2:\"id\";i:7;s:4:\"name\";s:52:\"8-10(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"30000\";s:5:\"price\";i:7;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:1.47;s:8:\"subtotal\";i:210000;}s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"15000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:150000;}s:32:\"4f2d2d0709b007102f7fe33cea201887\";a:10:{s:5:\"rowId\";s:32:\"4f2d2d0709b007102f7fe33cea201887\";s:2:\"id\";i:20;s:4:\"name\";s:51:\"7-9(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:6;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:1.26;s:8:\"subtotal\";i:30000;}s:32:\"193f632644e06a307cba18917ab13924\";a:10:{s:5:\"rowId\";s:32:\"193f632644e06a307cba18917ab13924\";s:2:\"id\";i:19;s:4:\"name\";s:56:\"9.5-12.5(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:11;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.31;s:8:\"subtotal\";i:55000;}}}',NULL,535000,1,'2021-05-03','2021-05-05 14:38:40','2021-05-05 14:38:40'),
	(44,1,31,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"8eb747b95b9862e9d83031beb9938720\";a:10:{s:5:\"rowId\";s:32:\"8eb747b95b9862e9d83031beb9938720\";s:2:\"id\";i:21;s:4:\"name\";s:49:\"9-12(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:16;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:3.36;s:8:\"subtotal\";i:80000;}s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:2:\"80\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:34400;}}}',NULL,114400,1,'2021-05-06','2021-05-06 11:25:15','2021-05-06 11:25:15'),
	(45,1,32,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:3:{s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";a:10:{s:5:\"rowId\";s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";s:2:\"id\";i:6;s:4:\"name\";s:49:\"8-10(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"2500\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:25000;}s:32:\"18d6934483b994fb9943b43b7d7646bf\";a:10:{s:5:\"rowId\";s:32:\"18d6934483b994fb9943b43b7d7646bf\";s:2:\"id\";i:8;s:4:\"name\";s:49:\"8-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:12;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.52;s:8:\"subtotal\";i:60000;}s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:70000;}}}',NULL,155000,1,'2021-05-06','2021-05-06 11:26:31','2021-05-06 11:26:31'),
	(46,1,33,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:3:\"100\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:43000;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:16000;}}}',4,64000,1,'2021-05-07','2021-05-07 15:01:42','2021-05-07 15:01:42'),
	(47,1,34,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"2000\";s:5:\"price\";i:11;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.31;s:8:\"subtotal\";i:22000;}}}',3,24000,1,'2021-05-07','2021-05-07 15:03:00','2021-05-07 15:03:00'),
	(48,1,35,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:2:\"68\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:29240;}}}',5,32240,1,'2021-05-07','2021-05-07 15:05:42','2021-05-07 15:05:42'),
	(49,1,36,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:11;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.31;s:8:\"subtotal\";i:55000;}}}',NULL,55000,1,'2021-05-07','2021-05-07 15:06:35','2021-05-07 15:06:35'),
	(50,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:2:\"80\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:34400;}}}',NULL,34400,1,'2021-05-07','2021-05-07 15:07:46','2021-05-07 15:07:46'),
	(51,1,37,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"468399581342505c47f4615b81bedaa9\";a:10:{s:5:\"rowId\";s:32:\"468399581342505c47f4615b81bedaa9\";s:2:\"id\";i:5;s:4:\"name\";s:52:\"9-11(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:50000;}}}',NULL,50000,1,'2021-05-07','2021-05-07 15:09:52','2021-05-07 15:09:52'),
	(52,1,38,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:70000;}}}',NULL,70000,1,'2021-05-06','2021-05-07 15:12:14','2021-05-07 15:12:14'),
	(53,1,26,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"25000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:250000;}s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"130.5\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:56115;}}}',NULL,306115,1,'2021-05-08','2021-05-08 12:26:57','2021-05-08 12:26:57'),
	(54,1,39,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"18d6934483b994fb9943b43b7d7646bf\";a:10:{s:5:\"rowId\";s:32:\"18d6934483b994fb9943b43b7d7646bf\";s:2:\"id\";i:8;s:4:\"name\";s:49:\"8-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"2000\";s:5:\"price\";i:12;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.52;s:8:\"subtotal\";i:24000;}s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"3000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:42000;}}}',NULL,66000,1,'2021-05-08','2021-05-08 12:28:21','2021-05-08 12:28:21'),
	(55,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:16000;}s:32:\"ba02b0dddb000b25445168300c65386d\";a:10:{s:5:\"rowId\";s:32:\"ba02b0dddb000b25445168300c65386d\";s:2:\"id\";i:23;s:4:\"name\";s:46:\"31-41(-Karki-အပါး-)-ဗားမား\";s:3:\"qty\";s:3:\"250\";s:5:\"price\";i:36;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:7.56;s:8:\"subtotal\";i:9000;}}}',NULL,25000,1,'2021-05-08','2021-05-08 12:30:42','2021-05-08 12:30:42'),
	(56,1,40,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"6aa0d4b8fac3c55a3e83b7e2b7d1cb97\";a:10:{s:5:\"rowId\";s:32:\"6aa0d4b8fac3c55a3e83b7e2b7d1cb97\";s:2:\"id\";i:24;s:4:\"name\";s:51:\"9.5-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:15;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:3.15;s:8:\"subtotal\";i:75000;}}}',NULL,75000,1,'2021-05-08','2021-05-08 12:32:33','2021-05-08 12:32:33'),
	(57,1,41,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"bb4a6db4295d6be8bd12791ed5650087\";a:10:{s:5:\"rowId\";s:32:\"bb4a6db4295d6be8bd12791ed5650087\";s:2:\"id\";i:14;s:4:\"name\";s:50:\"31-41(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:2:\"10\";s:5:\"price\";i:13000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:2730;s:8:\"subtotal\";i:130000;}}}',NULL,130000,1,'2021-05-08','2021-05-08 12:38:13','2021-05-08 12:38:13'),
	(58,2,42,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"808821852042d8780b9f862c35c42c68\";a:10:{s:5:\"rowId\";s:32:\"808821852042d8780b9f862c35c42c68\";s:2:\"id\";i:7;s:4:\"name\";s:52:\"8-10(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"20000\";s:5:\"price\";i:8;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:1.68;s:8:\"subtotal\";i:160000;}}}',NULL,160000,1,'2021-05-10','2021-05-10 14:55:51','2021-05-10 14:55:51'),
	(59,2,43,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"0d881817bb81e6017d2df92d0313f607\";a:10:{s:5:\"rowId\";s:32:\"0d881817bb81e6017d2df92d0313f607\";s:2:\"id\";i:25;s:4:\"name\";s:53:\"31-41(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:12000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:2520;s:8:\"subtotal\";i:12000;}}}',2,15000,1,'2021-05-10','2021-05-10 15:00:59','2021-05-10 15:00:59'),
	(60,2,44,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"468399581342505c47f4615b81bedaa9\";a:10:{s:5:\"rowId\";s:32:\"468399581342505c47f4615b81bedaa9\";s:2:\"id\";i:5;s:4:\"name\";s:52:\"9-11(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"3000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:30000;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:16000;}}}',6,51000,1,'2021-05-10','2021-05-10 15:05:40','2021-05-10 15:05:40'),
	(61,2,45,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"4000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:56000;}}}',NULL,56000,1,'2021-05-10','2021-05-10 15:07:43','2021-05-10 15:07:43'),
	(62,2,46,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:70000;}s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";a:10:{s:5:\"rowId\";s:32:\"8a48aa7c8e5202841ddaf767bb4d10da\";s:2:\"id\";i:6;s:4:\"name\";s:49:\"8-10(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:50000;}}}',NULL,120000,1,'2021-05-10','2021-05-10 15:09:14','2021-05-10 15:09:14'),
	(63,2,47,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";a:10:{s:5:\"rowId\";s:32:\"efb26e2c6ab6bd4d1323288923522d4e\";s:2:\"id\";i:4;s:4:\"name\";s:49:\"9-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"3000\";s:5:\"price\";i:13;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.73;s:8:\"subtotal\";i:39000;}}}',1,42000,1,'2021-05-10','2021-05-10 15:13:31','2021-05-10 15:13:31'),
	(64,1,48,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"a4e935a75812667a849f3dfef1c5940b\";a:10:{s:5:\"rowId\";s:32:\"a4e935a75812667a849f3dfef1c5940b\";s:2:\"id\";i:17;s:4:\"name\";s:53:\"35-41(-အဖြူ-အပါး-)-ဗားမား\";s:3:\"qty\";s:1:\"4\";s:5:\"price\";i:14000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:2940;s:8:\"subtotal\";i:56000;}}}',5,59000,1,'2021-05-11','2021-05-11 12:01:20','2021-05-11 12:01:20'),
	(65,1,49,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"a4e935a75812667a849f3dfef1c5940b\";a:10:{s:5:\"rowId\";s:32:\"a4e935a75812667a849f3dfef1c5940b\";s:2:\"id\";i:17;s:4:\"name\";s:53:\"35-41(-အဖြူ-အပါး-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:14000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:2940;s:8:\"subtotal\";i:14000;}}}',5,17000,1,'2021-05-11','2021-05-11 12:05:32','2021-05-11 12:05:32'),
	(66,1,50,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";i:151;s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:64930;}}}',NULL,64930,1,'2021-05-11','2021-05-11 12:08:20','2021-05-11 12:08:20'),
	(67,1,51,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"a4e935a75812667a849f3dfef1c5940b\";a:10:{s:5:\"rowId\";s:32:\"a4e935a75812667a849f3dfef1c5940b\";s:2:\"id\";i:17;s:4:\"name\";s:53:\"35-41(-အဖြူ-အပါး-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:14000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:2940;s:8:\"subtotal\";i:14000;}}}',3,16000,1,'2021-05-11','2021-05-11 12:10:47','2021-05-11 12:10:47'),
	(68,1,52,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"18d6934483b994fb9943b43b7d7646bf\";a:10:{s:5:\"rowId\";s:32:\"18d6934483b994fb9943b43b7d7646bf\";s:2:\"id\";i:8;s:4:\"name\";s:49:\"8-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"2500\";s:5:\"price\";i:12;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.52;s:8:\"subtotal\";i:30000;}}}',NULL,30000,1,'2021-05-11','2021-05-11 12:12:36','2021-05-11 12:12:36'),
	(69,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"1000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:14000;}}}',NULL,14000,1,'2021-05-11','2021-05-11 12:14:16','2021-05-11 12:14:16'),
	(70,1,53,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"468399581342505c47f4615b81bedaa9\";a:10:{s:5:\"rowId\";s:32:\"468399581342505c47f4615b81bedaa9\";s:2:\"id\";i:5;s:4:\"name\";s:52:\"9-11(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:50000;}s:32:\"addc525ce43f5cbb4517bfa51c9c08e5\";a:10:{s:5:\"rowId\";s:32:\"addc525ce43f5cbb4517bfa51c9c08e5\";s:2:\"id\";i:26;s:4:\"name\";s:49:\"8-11(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:15;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:3.15;s:8:\"subtotal\";i:75000;}}}',NULL,125000,1,'2021-05-11','2021-05-11 12:20:37','2021-05-11 12:20:37'),
	(71,1,13,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"468399581342505c47f4615b81bedaa9\";a:10:{s:5:\"rowId\";s:32:\"468399581342505c47f4615b81bedaa9\";s:2:\"id\";i:5;s:4:\"name\";s:52:\"9-11(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:5:\"10000\";s:5:\"price\";i:10;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.1;s:8:\"subtotal\";i:100000;}}}',NULL,100000,1,'2021-05-11','2021-05-11 12:21:48','2021-05-11 12:21:48'),
	(72,1,54,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:2:\"76\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:32680;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:3:\"0.5\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:8000;}}}',7,43680,1,'2021-05-11','2021-05-11 12:25:05','2021-05-11 12:25:05'),
	(73,1,55,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"bf93e0040190e2a2c89570e5152c7ce1\";a:10:{s:5:\"rowId\";s:32:\"bf93e0040190e2a2c89570e5152c7ce1\";s:2:\"id\";i:27;s:4:\"name\";s:52:\"10.5-14(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:23;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:4.83;s:8:\"subtotal\";i:115000;}}}',NULL,115000,1,'2021-05-11','2021-05-11 12:30:08','2021-05-11 12:30:08'),
	(74,1,56,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";a:10:{s:5:\"rowId\";s:32:\"027c91341fd5cf4d2579b49c4b6a90da\";s:2:\"id\";i:1;s:4:\"name\";s:49:\"9-12(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"5000\";s:5:\"price\";i:14;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.94;s:8:\"subtotal\";i:70000;}s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:2:\"52\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:22360;}}}',8,95360,1,'2021-05-12','2021-05-13 14:51:28','2021-05-13 14:51:28'),
	(75,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"564dd0ab34b63878ca2237c47a620cf2\";a:10:{s:5:\"rowId\";s:32:\"564dd0ab34b63878ca2237c47a620cf2\";s:2:\"id\";i:22;s:4:\"name\";s:50:\"63(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:2:\"71\";s:5:\"price\";i:430;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:90.3;s:8:\"subtotal\";i:30530;}}}',NULL,30530,1,'2021-05-13','2021-05-13 14:52:19','2021-05-13 14:52:19'),
	(76,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"bb4a6db4295d6be8bd12791ed5650087\";a:10:{s:5:\"rowId\";s:32:\"bb4a6db4295d6be8bd12791ed5650087\";s:2:\"id\";i:14;s:4:\"name\";s:50:\"31-41(-အညို-အထူ-)-ဗားမား\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";i:14000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:2940;s:8:\"subtotal\";i:14000;}s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";a:10:{s:5:\"rowId\";s:32:\"07cca15168b1a5e48e0f89d878fbf6ea\";s:2:\"id\";i:16;s:4:\"name\";s:50:\"31-41(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:3:\"0.2\";s:5:\"price\";i:16000;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";i:3360;s:8:\"subtotal\";i:3200;}}}',NULL,17200,1,'2021-05-13','2021-05-13 14:54:57','2021-05-13 14:54:57'),
	(77,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"8e5a44b7e8158839b0203ed7b9f2144b\";a:10:{s:5:\"rowId\";s:32:\"8e5a44b7e8158839b0203ed7b9f2144b\";s:2:\"id\";i:28;s:4:\"name\";s:49:\"9-11(-အဖြူ-အထူ-)-ဗားမား\";s:3:\"qty\";s:4:\"1000\";s:5:\"price\";i:15;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:3.15;s:8:\"subtotal\";i:15000;}}}',NULL,15000,1,'2021-05-13','2021-05-13 14:56:29','2021-05-13 14:56:29'),
	(78,1,28,'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"a775bac9cff7dec2b984e023b95206aa\";a:10:{s:5:\"rowId\";s:32:\"a775bac9cff7dec2b984e023b95206aa\";s:2:\"id\";i:3;s:4:\"name\";s:52:\"9-12(-အညို-အပါး-)-ဗားမား\";s:3:\"qty\";s:4:\"3000\";s:5:\"price\";i:11;s:6:\"weight\";i:0;s:7:\"options\";a:0:{}s:8:\"discount\";i:0;s:3:\"tax\";d:2.31;s:8:\"subtotal\";i:33000;}}}',NULL,33000,1,'2021-05-13','2021-05-13 14:56:54','2021-05-13 14:56:54');

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `size_id` bigint(20) unsigned NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_qty` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retail_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_color_id_foreign` (`color_id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_size_id_foreign` (`size_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `color_id`, `category_id`, `size_id`, `desc`, `total_qty`, `price`, `retail_price`, `created_at`, `updated_at`)
VALUES
	(1,'item-1',1,1,1,'d','0','14','13','2021-04-29 16:23:44','2021-04-29 16:23:44'),
	(3,'item-2',1,2,1,'d','0','11','10','2021-04-29 16:24:03','2021-04-29 16:24:03'),
	(4,'item-3',1,1,3,'d','0','13','12','2021-04-29 16:24:23','2021-04-29 16:24:23'),
	(5,'item-4',1,2,3,'d','0','10','9','2021-04-29 16:24:37','2021-04-29 16:24:37'),
	(6,'item-4',1,1,2,'d','0','10','9','2021-04-29 16:24:52','2021-04-29 16:24:52'),
	(7,'item-5',1,2,2,'d','0','8','7','2021-04-29 16:25:07','2021-04-29 16:25:07'),
	(8,'item-6',1,1,4,'d','0','12','11','2021-04-29 16:25:39','2021-04-29 16:25:39'),
	(9,'item-7',1,2,4,'d','0','10','9','2021-04-29 16:25:57','2021-04-29 16:25:57'),
	(10,'item-8',1,1,5,'d','0','12','11','2021-04-29 16:26:17','2021-04-29 16:26:17'),
	(11,'item-9',1,2,5,'d','0','10','9','2021-04-29 16:26:48','2021-04-29 16:26:48'),
	(12,'item-9',1,1,6,'d','0','16','15','2021-04-29 16:27:03','2021-04-29 16:27:03'),
	(13,'item-10',1,2,6,'d','0','14','13','2021-04-29 16:27:22','2021-04-29 16:27:22'),
	(14,'item-11',1,3,7,'d','0','14000','13000','2021-04-30 09:49:57','2021-04-30 09:49:57'),
	(15,'pattern-apr',1,4,9,'aaa','0','12000','12000','2021-05-03 11:21:04','2021-05-03 11:21:04'),
	(16,'pattern-paper',2,3,7,'a','0','16000','16000','2021-05-03 11:36:09','2021-05-03 11:36:09'),
	(17,'pattern-paper',2,4,9,'a','0','14000','13000','2021-05-03 11:36:47','2021-05-03 11:36:47'),
	(18,'Juplet',2,5,7,'q','0','300','300','2021-05-05 14:16:05','2021-05-05 14:16:05'),
	(19,'In gCard',1,2,10,'aaa','0','12','11','2021-05-05 14:35:19','2021-05-05 14:35:19'),
	(20,'In gCard',1,2,11,'aaa','0','7','6','2021-05-05 14:35:36','2021-05-05 14:35:36'),
	(21,'cloth cart',2,1,1,'ss','0','16','15','2021-05-06 11:19:55','2021-05-06 11:19:55'),
	(22,'Marker',1,6,12,'sd','0','430','429','2021-05-06 11:23:07','2021-05-06 11:23:07'),
	(23,'Karki',3,4,7,'ggg','0','36','35','2021-05-08 12:30:11','2021-05-08 12:30:11'),
	(24,'cloth cart',1,1,13,'ddd','0','15','14','2021-05-08 12:31:30','2021-05-08 12:31:30'),
	(25,'B Pyar',1,4,7,'nnn','0','12000','11999','2021-05-10 14:56:55','2021-05-10 14:56:55'),
	(26,'Ganung choe',1,7,4,'nn','0','15','14','2021-05-11 12:17:36','2021-05-11 12:17:36'),
	(27,'gang choe',1,7,14,'hhh','0','23','22','2021-05-11 12:18:19','2021-05-11 12:18:19'),
	(28,'hjhhj',2,1,3,'n','0','15','14','2021-05-13 14:56:06','2021-05-13 14:56:06');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sizes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sizes`;

CREATE TABLE `sizes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`)
VALUES
	(1,'9-12','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(2,'8-10','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(3,'9-11','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(4,'8-11','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(5,'9.5-10.5','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(6,'10-13','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(7,'31-41','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(8,'27-34','2021-04-29 16:22:34','2021-04-29 16:22:34'),
	(9,'35-41','2021-05-03 11:19:59','2021-05-03 11:19:59'),
	(10,'9.5-12.5','2021-05-05 14:34:24','2021-05-05 14:34:24'),
	(11,'7-9','2021-05-05 14:34:29','2021-05-05 14:34:29'),
	(12,'63','2021-05-06 11:21:28','2021-05-06 11:21:28'),
	(13,'9.5-12','2021-05-08 12:31:08','2021-05-08 12:31:08'),
	(14,'10.5-14','2021-05-11 12:17:52','2021-05-11 12:17:52');

/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'admin','admin@admin.com','admin',NULL,'$2y$10$IDg0qhFqeZgKWy2CGFolFuMKwCqWmys5R3z6KwzYI7YMiLZStatsW',NULL,'2021-04-29 16:22:54','2021-04-29 16:22:54'),
	(2,'arkar','arkar@superuser.com','super_user',NULL,'$2y$10$ETBsmJExNt7ePKyUbZWjuuxrM/mySHnIIZ5LeuCfCJxZLlviqP5ym',NULL,'2021-05-07 11:18:56','2021-05-07 11:18:56');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

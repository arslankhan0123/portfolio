-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2026 at 03:37 PM
-- Server version: 11.8.9-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u633175831_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('dev-arslankhan@gmail.com|127.0.0.1', 'i:2;', 1768339226),
('dev-arslankhan@gmail.com|127.0.0.1:timer', 'i:1768339226;', 1768339226);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Arslan khan', 'arslankhan.devsspace@gmail.com', 'Testing', 'Testing', '2026-01-15 00:52:58', '2026-01-15 00:52:58'),
(2, 'Ursula Meyer', 'maxy@mailinator.com', 'Irure nulla labore f', 'Fugit illo ipsum po', '2026-01-15 15:41:16', '2026-01-15 15:41:16'),
(3, 'Mollie Bailey', 'xyjutohiwy@mailinator.com', 'Quaerat qui et Nam i', 'Commodo esse perspi', '2026-01-15 15:42:33', '2026-01-15 15:42:33'),
(4, 'Haziq', 'mhaziqhameed@gmail.com', 'Test', 'Hey Arslan', '2026-06-20 14:16:36', '2026-06-20 14:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_14_000000_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('24YTNqi7q88Z6tgSQreztJKUi3KA4az4F5C4aLYP', NULL, '110.235.233.238', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT01XVTJEWGlJWlFnT3pwTWg4Z0hDYUxWZGRUZk1OeDNFeTBvUHpoeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790473676),
('2o8W3clldiqwiDfardBHoW9FIS39tCNnVIytPHpU', NULL, '198.244.226.110', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQUVwYmdFNmt1d3AzZ3l4cXdyUUwxd3htZFhIeWNJeDA1ZGE3MjdEQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790572474),
('5twXiSs82mU8tlLOPzv2ymDzmTgTgOZh1p9oRbji', NULL, '37.59.204.133', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3FnSVU2OGc4SmV5emJ2VGRJNWlYaGZ0MmdFVmdqMWFzdU0wZHpYdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790424324),
('63tVts2gskmnNkpcNw0EfOVEWJrhUNaP159wmbSP', NULL, '2a02:4780:27:c0de::3cc', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWG5pZjM4UG1DV0U0NHF6M240ZXVqSWFTdU83NnNuOWRmMXVKcXJJVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790417819),
('6krqekawaCNeZ97cj3MR3bvgeX5QJZ5sHxaVd3RC', NULL, '2a02:4780:27:c0de::3cc', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXd0cVJLMFNqdmpRQjNWcVpXQkN4dHV4aTNydUpoNEFZS08xaVBIayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790474286),
('7LQTuAn4Wuyl7ieIQ3DqAA86rAGyFY10Jp79EKyn', NULL, '134.209.161.248', 'Mozilla/5.0 (X11; Linux x86_64; rv:153.0) Gecko/20100101 Firefox/153.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVduaGZQR1VjcnFnSWJQQ2swZHdFUVh4bFNiUExVOVRya2FxT1dDVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790361677),
('9oj9fOapfZR2U7DQvlRevd4GIu9aMV8O4WSjo1uw', NULL, '104.224.65.252', 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Zoom 3.6.0; rv:11.0) like Gecko', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkFQNU5nY3VsRDhYRHF1VGRjUDM2T3BZejRneXQxMDZ5WDVZb3FnRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790570306),
('aqImpR5jckWYlnOICx28V6lbDtCbyLDHMg3CeBsA', NULL, '41.251.76.70', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWlDbHVyVmI2RFRXTUNpNkM4NG1aY0pFUEtiaWhGS1lHUWdtRWtvaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790391024),
('aXutx8zPr6qcYLaQMbrNs3km7Wq82c2rqkq4hmmr', NULL, '135.148.195.13', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3RXa1JpdUdDdzgzVTJlbU14bGp5MUt2OWFXYWdhRDVjN1VYWXp6diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790393167),
('djR2J8vIlvoPog1cONzASp4xo2uWDPonRgEeEl9x', NULL, '192.121.149.80', 'Mozilla/5.0 (X11; CrOS x86_64 14541.0.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiemVzMW13UGFBRVJBTk5JcVRUNEZNUDE2TmxnaExaNEJCc1M4MTNMcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790372520),
('e9OEgnqLlbc6aOZ7cukBObnSZfRSCsKa0bsrgVbA', NULL, '101.42.52.167', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXBhQmdvVDZJZ2xYd1VmcEJYb1Nsc01yNm40dnFFYllGZlpUTThlMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQvP3Ryaz1wdWJsaWNfcG9zdF9jb21tZW50LXRleHQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790395854),
('eIh01kTjTRn8lNmtiihp9UVbodoj7dB4NIWE04g7', NULL, '2a01:4f8:1c19:79a5::1', 'Mozilla/5.0 (compatible; webatlabot/1.0; +https://webatla.com/bot; abuse@webatla.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWdMRUhCakpBd0ZodmdZaE04VjNPVTFXNkNtTm9uanNJTlpjallWTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790521197),
('FKSnLOt2WpMAGBtSaYwjl0Lgpw6IRWKWhPP8tTmW', NULL, '180.153.236.105', 'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidkp0NUpDdjN3Q2JSWENhMXlPTGZTaXBlRm1JUUJLWmJzQ0FmQW04SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790538144),
('fkx9pEjErhPhRaQVpE3Th6EAp3NVVVYNHZEH0Rlw', NULL, '109.137.170.139', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUxSUUZzYWNBVUF5SjE0aUs0VUJVN2pFU1JPQnJPV2xjd0xvd0tCdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790477453),
('hrld9SP8sVSkAxFlfZpMdNxm3T9tsMj3xJqrCXYy', NULL, '184.195.62.32', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWpqR2Y2aG1ETDNBWmFQbWw5d3RwTTNiYjNFN3ZINkFUZzRDV1VKTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790602474),
('JGeL36MIm0YLE5wVR5hMksQ0PPlddG2eZrQ6ZSas', NULL, '82.139.195.10', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTW56UWZORW9XdzVtNklIczY2VHEyZzM2cEJYUU1FWmd6bUszN0sxRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790455270),
('jI5fofNpbBJkYOpVs0sGaa21zK2PLYuyNWTshItk', NULL, '159.65.206.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 ForestEngine/1.0 (+https://forestengine.net/#opt-out)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidVhtbU1wS3I3b2hRTVdoZGFnR05GZ2NRWUFzWlFEU3dWZVI4SWxIMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790433319),
('Jj0COhmmA4gJ2NfXOZs0jQl2nDKnrMy7vFBDtoKc', NULL, '2a02:4780:27:c0de::3cc', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1Vlb3lrTGUxRDM1Y0xPZ0lnRHcxT3RHNHdGclZySEhVV1dFeHBLRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790591225),
('jlBNqmNLXXeOaR19ZgssguGpBSKHK3osKjxqWTtb', NULL, '172.204.28.229', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibk5pSFV2SWFBZlZBV3JWVHFNUWp2SzBtZEt1UnN2eU45MEp6N1JRZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790561305),
('K8UzUBrbggsuXFi5O8Wl9jMT5kkcFNBZQjF2gVWj', NULL, '59.63.81.145', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.1 Safari/537.36 Edg/131.0.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2d3dDdrSDNheHdRWW5GQXZaSXVzZFliaEtRNkN2UXNheUdpQ1VxbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790502851),
('kI7GBfcEFBaxpTrnIGGkQKkZgHlaAlZYXUonmTLi', NULL, '180.153.236.186', 'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlFUdmFkRjQwSTAxQmo0YjBwYVpXa29ZUllKTVFVcmkxNVE4dE11YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790493458),
('kl0m3Y7Rk8EIFNLKBnUEkvfRKIhthIFurA9Z6X34', NULL, '34.235.112.52', 'Mozilla/5.0 (iPod; U; CPU iPhone OS 6_1 like Mac OS X; en-HK) AppleWebKit/534.35 (KHTML, like Gecko) Chrome/11.0.696.65 Safari/534.35 Puffin/3.9174IP Mobile', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVlubFhKbUozWU5FSmp2QUFXQVhyRlIwTDRyeHhzQ010MGFudUpFYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790554236),
('kTThAZEKsoVDNFr01ftFfNI9Ii3tkuQAoctqiGSP', NULL, '14.144.15.187', 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlZ5dDVXQUl4R3hZZHc5TmxaNmdERlBKSU5hZ0FuWVVRUWlPcXRZaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790542016),
('LBZOmZz0cEVR1MWXwY1HX5E7ynmTN8HkLU8wenBK', NULL, '180.153.236.159', 'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0tNTnNhd0RaQzlKTGQ1MHN5N2p4elQ4TlRreXBJaDhHejRFUU1TbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790493431),
('lGB5fXvVyP0vjSOzv9jma15HwvhBJgx8etsWpJJM', NULL, '112.113.132.97', 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid1o3NjMyU2pwUURuR3MwQXpaSjBXR0Q1MXk4czZGdksyS3B5WVJJdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790453194),
('NaUYXHgKVYFUywBPtLCGUwA8hpHTwaGzxfAJOkMF', NULL, '100.26.56.6', 'Mozilla/5.0 (Linux; Android 12; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.61 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMkVDQ2ZTWkt4VEpqQ0lGc1FJYUgxdnU1UEx4U1RZRGVtUWRBODlKUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790515197),
('NczWDKdIfnn4Jl8VgDICuXVeF30J5Ru1y3kFO85q', NULL, '161.35.153.217', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 ForestEngine/1.0 (+https://forestengine.net/#opt-out)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjJBRUpWVnRiWm5iOGNmTjhDcUdJeWNTWVk3UlllS0xNMmpEaUVQSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790432666),
('nV9m10LLkGdn8CvB0ty5IEWGzdNnIBLfrQTn1f3H', NULL, '151.245.205.79', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnU3VmhKTlRjRXg4NTFHMFNFcldqa21IZ3RkcTVod1VTYUlHQ0VzdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790358981),
('ovQi5Lg87sakfBL2sl3ScRoE1FGkPBKaLG0LEq58', NULL, '40.81.67.109', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkE1VW9nY1hIOXRGbVZsQ3doMFA2SkpFSVhvQmVua3JvY1ByRllFTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790437296),
('QPEO2Xt2FabXNGzyjreNa47Bvp6ps51Rv6i8sgCu', NULL, '103.67.78.155', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) FastCMS/3.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVBZRTMyQWNWbU9ldlNYRnd3NlBCbjF6Q2hsMjFnSjhESzg1YmdLUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790555871),
('QrR31PhfKydOmNDYhortd3dsTEbcgwZYU07VoiF0', NULL, '180.153.236.44', 'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzlST0FmbmlJb21qR1FyaFJLQ0Jzem1jV3dJUWExNkZqVE5RbnVDeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790502510),
('rmONOE0W3DacvQnUHEE4LwGzDdFFdQwKxMhswrrF', NULL, '223.73.106.156', 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmpBWjFiWWVUbHhuYVEwNEM2b1YxMXl2Z1VuVXpkeUpucXQxVTFwYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790538154),
('SCIWUGP57eVVkgnkIxfcht4rXzYm47evpMhGevJu', NULL, '180.153.236.165', 'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHFtYzRQNXBUZEFjT05lS1RxcFgzQVlkZmpRSFpPWEdmejNxMmJYViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790538148),
('VbIdOapXc9fITOta3tHtXIBpi0rQHDDxyQWQ9Pk0', NULL, '222.172.66.81', 'Mozilla/5.0 (Windows NT 11.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.1.0 Safari/537.36 Edg/128.1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaG8zZlpFWVRqWnNOeVB5dEpreGMwVVFFUjl3WGNDTEh6dkI0TFluNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790502858),
('vJwAgBRxluXq4QBGLwiP6W1tSxaEQPipt8qd5f8o', NULL, '2001:4860:7:b05::bc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2lFd0JMQ1VVdUwzUUJFOWE1a1c1VWhJakRKQll4VlZJTXNrblp5TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790578806),
('wmBZMR1I5Mype0hJvW0K8KYfPsntuuoI56FRs4Lw', NULL, '196.64.64.207', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0twSGR1b1lCSGl3SG5wMGEwOFlkSFhZTG9vcko0ZUczTGdTTWF2dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790564532),
('WTqJ2qwjCWGu5W5x2ykEiQS06kn8fxQMvppKXY6u', NULL, '147.182.217.128', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblVwVDF2V3FxOFhSNUJkcTFXSmFNNzhsbnkwM2FXSVpHME83MThXWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790539771),
('x0TpbV7oFqBqEyb6CNttgfprMcaMB0UaCjHZo6KN', NULL, '182.120.236.193', 'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEtWUkN2ZURiaUIwbzRFUVloa0JpUHZsM0laWVVnZ2NlUm9vRE9ldCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790363627),
('XA38FJl1MiwLL8Mv412aVCXabP40MWOJtjGbQaKD', NULL, '185.192.69.107', 'Go-http-client/2.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlFPZFo5U0hHZnpZUFhMZHc0a2hoN1FOS1RsVDZEVWVpSVZOQk5rMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQvcHVibGljL2luZGV4LnBocCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1790549385),
('xALCRu5xgzbDYWjQKyPVlF0GcQU9Y65djtQssj8x', NULL, '180.153.236.121', 'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXhVRHdwdlhpVFF6SVJ3dWRaWlNRT1d0TDB3cUUzcnV3amlZbEwzayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790502473),
('YqsqOhkoe7I07R4ZXw5HkILXjRXajhvclP1Z9koU', NULL, '40.81.67.99', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEVpOVdiS3dJb1kyaTlaeXN3ZXFzcld3ZXFkMUo1VGpMNjAxWWhWVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790584264),
('yUdCn8JqswGVzHbOBxmyR8nbs39yCRgSMUiPfp2M', NULL, '2001:4860:7:405::b9', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3FHaE5aZkRXbEZXUXVDc0wxQWE2T3hSa3JMZVZVYTVSbzhJbE5lcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmFyc2xhbmtoYW4ubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790391743),
('zIoFVSKOsA89ngsgv2Pm60OUzHEbeyG3voqSCCFW', NULL, '34.235.112.52', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2049.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzg2TDY4aEZBSXJmSTVPYmJ0VUNsVlJWNlczMU02UUNnb0RWUndBSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJzbGFua2hhbi5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1790554236);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arslan Khan', 'dev.arslankhan@gmail.com', NULL, '$2y$12$jJaY/Zwclb6VVzSq/SzkzeQD5.8whUXXy57UIkKdCcaKkKXj26xau', 'lS4stAafDT3630kRGFOQjFaFjBi7RgcgvYWGqsasJj5zZz5Wk5QnCqbpXKkV', '2026-01-13 16:18:23', '2026-01-15 17:52:41'),
(2, 'Rana Armstrong', 'kixicomava@mailinator.com', NULL, '$2y$12$Djc0QkfPNpi.Yc2MjyyJleP4mMs6fo1sHtycjX071NY8ITHXLVh6u', NULL, '2026-01-15 15:41:37', '2026-01-15 15:41:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

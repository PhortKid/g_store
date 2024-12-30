-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 11:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g_store`
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
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '0001_01_01_000000_create_users_table', 0),
(5, '1', 0),
(6, '0001_01_01_000000_create_users_table', 1),
(14, '2024_12_13_185707_create_product_types_table', 2),
(15, '2024_12_13_185708_create_products_table', 2),
(18, '2024_12_13_185709_create_sales_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_type_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `purchase_price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `is_approved` varchar(30) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `product_type_id`, `quantity`, `purchase_price`, `sale_price`, `description`, `is_approved`, `created_at`, `updated_at`) VALUES
(5400, 'SAMSUNG S8', 14, 1, 175000.00, 240000.00, '359039081002227/01', '0', '2024-12-29 04:04:30', '2024-12-29 04:06:13'),
(5401, 'SAMSUNG S8', 14, 1, 175000.00, 240000.00, '356358085545962/01', '0', '2024-12-29 04:04:30', '2024-12-29 04:07:37'),
(5402, 'SAMSUNG S8', 14, 1, 175000.00, 240000.00, '356356089983015/01', '0', '2024-12-29 04:04:30', '2024-12-29 04:08:41'),
(5403, 'SAMSUNG S8', 14, 1, 175000.00, 240000.00, '358332084008791/85', '0', '2024-12-29 04:04:30', '2024-12-29 04:10:50'),
(5404, 'SAMSUNG S9', 14, 1, 185000.00, 250000.00, '353302091847155/96', '0', '2024-12-29 04:12:34', '2024-12-29 04:25:06'),
(5405, 'SAMSUNG S9', 14, 1, 185000.00, 250000.00, '352713095411395/44', '0', '2024-12-29 04:12:34', '2024-12-29 04:30:54'),
(5406, 'SAMSUNG S9', 14, 1, 185000.00, 250000.00, '353753094329783/12', '0', '2024-12-29 04:12:34', '2024-12-29 04:32:23'),
(5407, 'SAMSUNG S9', 14, 1, 185000.00, 250000.00, '352713096896974/41', '0', '2024-12-29 04:12:34', '2024-12-29 04:35:12'),
(5408, 'SAMSUNG S9', 14, 1, 185000.00, 250000.00, '354258090444437/25', '0', '2024-12-29 04:12:34', '2024-12-29 04:37:49'),
(5409, 'SAMSUNG S9', 14, 1, 185000.00, 250000.00, '352713091024259/44', '0', '2024-12-29 04:12:34', '2024-12-29 04:43:42'),
(5410, 'SAMSUNG S9', 14, 1, 185000.00, 250000.00, '357171093766762/01', '0', '2024-12-29 04:12:34', '2024-12-29 04:49:35'),
(5411, 'SAMSUNG S10e', 14, 1, 235000.00, 300000.00, '352811102675901/82', '0', '2024-12-29 04:40:24', '2024-12-29 04:54:07'),
(5412, 'SAMSUNG S10e', 14, 1, 235000.00, 300000.00, '356032101359357/73', '0', '2024-12-29 04:40:24', '2024-12-29 04:55:54'),
(5413, 'SAMSUNG S10e', 14, 1, 235000.00, 300000.00, '352811101482259/84', '0', '2024-12-29 04:40:24', '2024-12-29 04:57:36'),
(5414, 'SAMSUNG S10e', 14, 1, 235000.00, 300000.00, '358628105326116/81', '0', '2024-12-29 04:40:24', '2024-12-29 04:58:46'),
(5415, 'SAMSUNG S10e', 14, 1, 235000.00, 300000.00, '352811101554552/84', '0', '2024-12-29 04:40:24', '2024-12-29 04:59:43'),
(5416, 'SAMSUNG S10', 14, 1, 265000.00, 350000.00, '352334105273756/81', '0', '2024-12-29 05:02:10', '2024-12-29 05:13:45'),
(5417, 'SAMSUNG S10', 14, 1, 265000.00, 350000.00, '352329100231296/81', '0', '2024-12-29 05:02:10', '2024-12-29 05:15:34'),
(5418, 'SAMSUNG S10', 14, 1, 265000.00, 350000.00, '354127117096050/34', '0', '2024-12-29 05:02:10', '2024-12-29 05:17:19'),
(5419, 'SAMSUNG S10', 14, 1, 265000.00, 350000.00, '352229117185099/01', '0', '2024-12-29 05:02:10', '2024-12-29 05:18:38'),
(5420, 'SAMSUNG S10', 14, 1, 265000.00, 350000.00, '358232103451180/46', '0', '2024-12-29 05:02:10', '2024-12-29 05:20:27'),
(5421, 'SAMSUNG S10+', 14, 1, 295000.00, 400000.00, '354416100459718/81', '0', '2024-12-29 05:04:11', '2024-12-29 05:30:54'),
(5422, 'SAMSUNG S10+', 14, 1, 295000.00, 400000.00, '357394100061858/15', '0', '2024-12-29 05:04:11', '2024-12-29 05:32:52'),
(5423, 'SAMSUNG S10+', 14, 1, 295000.00, 400000.00, '351751105601689', '0', '2024-12-29 05:04:11', '2024-12-29 05:34:39'),
(5424, 'SAMSUNG S10+', 14, 1, 295000.00, 400000.00, '357959102844707/81', '0', '2024-12-29 05:04:11', '2024-12-29 05:37:36'),
(5425, 'SAMSUNG S20 5G', 14, 1, 295000.00, 390000.00, '354268111936196/78', '0', '2024-12-29 05:06:32', '2024-12-29 05:39:05'),
(5426, 'SAMSUNG S20 5G', 14, 1, 295000.00, 390000.00, '355623110681616/21', '0', '2024-12-29 05:06:32', '2024-12-29 05:41:44'),
(5427, 'SAMSUNG S20 5G', 14, 1, 295000.00, 390000.00, '354266112977144/46', '0', '2024-12-29 05:06:32', '2024-12-29 05:45:43'),
(5428, 'SAMSUNG S21 5G', 14, 1, 325000.00, 420000.00, '351852151023081/62', '0', '2024-12-29 05:08:35', '2024-12-29 05:50:16'),
(5429, 'SAMSUNG S21 5G', 14, 1, 325000.00, 420000.00, '358136700178981/63', '0', '2024-12-29 05:08:35', '2024-12-29 05:51:16'),
(5430, 'SAMSUNG S21 5G', 14, 1, 325000.00, 420000.00, '359506141059769/72', '0', '2024-12-29 05:08:35', '2024-12-29 05:59:18'),
(5435, 'NOTE 8', 14, 1, 220000.00, 290000.00, '354075096899962/01', '0', '2024-12-29 05:47:49', '2024-12-29 05:53:22'),
(5436, 'EXPERIA XZ 01', 16, 1, 110000.00, 155000.00, '358158082038302', '0', '2024-12-29 06:01:14', '2024-12-29 06:09:52'),
(5437, 'EXPERIA XZ 01', 16, 1, 110000.00, 155000.00, '358158086293945', '0', '2024-12-29 06:01:14', '2024-12-29 06:12:03'),
(5438, 'EXPERIA XZ 01', 16, 1, 110000.00, 155000.00, '358158085840357', '0', '2024-12-29 06:01:14', '2024-12-29 06:15:48'),
(5439, 'EXPERIA XZ 01', 16, 1, 110000.00, 155000.00, '358158085212813', '0', '2024-12-29 06:01:14', '2024-12-29 06:14:29'),
(5440, 'EXPERIA XZ 01', 16, 1, 110000.00, 155000.00, '358158080912961', '0', '2024-12-29 06:01:14', '2024-12-29 06:19:20'),
(5441, 'EXPERIA XZ 01', 16, 1, 110000.00, 155000.00, '358158087201558', '0', '2024-12-29 06:01:14', '2024-12-29 06:21:36'),
(5442, 'EXPERIA 10ii', 16, 1, 150000.00, 205000.00, '351997116212715', '0', '2024-12-29 06:02:39', '2024-12-29 06:23:26'),
(5443, 'EXPERIA 10ii', 16, 1, 150000.00, 205000.00, '351997115447635', '0', '2024-12-29 06:02:39', '2024-12-29 06:25:30'),
(5444, 'EXPERIA 10ii', 16, 1, 150000.00, 205000.00, '351997116289739', '0', '2024-12-29 06:02:39', '2024-12-29 06:26:42'),
(5445, 'EXPERIA 10ii', 16, 1, 150000.00, 205000.00, '355495111662378/32', '0', '2024-12-29 06:02:39', '2024-12-29 06:29:18'),
(5446, 'EXPERIA 10iii', 16, 1, 185000.00, 250000.00, '354737862404356/06', '0', '2024-12-29 06:04:07', '2024-12-29 06:30:53'),
(5447, 'EXPERIA 10iii', 16, 1, 185000.00, 250000.00, '354737862416186/33', '0', '2024-12-29 06:04:07', '2024-12-29 06:32:36'),
(5448, 'EXPERIA 10iii', 16, 1, 185000.00, 250000.00, '354737862403887/06', '0', '2024-12-29 06:04:07', '2024-12-29 06:33:19'),
(5449, 'EXPERIA 10iii', 16, 1, 185000.00, 250000.00, '354737862278701/01', '0', '2024-12-29 06:04:07', '2024-12-29 06:34:38'),
(5450, 'IPHONE 13 PLAIN', 15, 1, 870000.00, 1000000.00, '352164236952865', '0', '2024-12-29 06:39:21', '2024-12-29 06:40:25'),
(5451, 'IPHONE 13 PLAIN', 15, 1, 870000.00, 1000000.00, '359175924264952', '0', '2024-12-29 06:39:21', '2024-12-29 06:41:44'),
(5452, 'IPHONE 13 PLAIN', 15, 1, 870000.00, 1000000.00, '355178161345769', '0', '2024-12-29 06:39:21', '2024-12-29 06:44:05'),
(5453, 'IPHONE 13 PLAIN', 15, 1, 870000.00, 1000000.00, '355178161858753', '0', '2024-12-29 06:39:21', '2024-12-29 06:50:14'),
(5454, 'SAMSUNG S9+', 14, 1, 220000.00, 300000.00, '354644091378965/93', '0', '2024-12-29 06:47:08', '2024-12-29 06:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(14, 'SAMSUNG', '2024-12-29 04:03:34', '2024-12-29 04:03:34'),
(15, 'IPHONE', '2024-12-29 05:19:31', '2024-12-29 05:27:36'),
(16, 'SONY', '2024-12-29 05:27:45', '2024-12-29 05:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `product_info` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
('3Vra310WtDKW4DkSdqMvMUvjgBZHWvNt5XldMqtC', NULL, '41.59.96.217', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQlRLdWJMb3Y2NDIwSm1BcTRBSEZHNjJhSjl3RUVLUGdEWGxYQUg3ZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cHM6Ly95YWt3ZXR1LmNvLnR6Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8veWFrd2V0dS5jby50ei9sb2dpbiI7fX0=', 1735471709),
('GnT9Vv1f5h3WWnNTuBO28ffMAkTHYeVz9KfIVB9d', 3, '41.59.96.217', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMXBYN3ByRHRXcm9CYXZBelMxbmpPSTBwTUEzMWc2SjBZUk1zT01EaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwczovL3lha3dldHUuY28udHovcHJvZHVjdHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1735476094),
('PaxljM7lhWOevKIZK6HOxZ4beXWtgjHN2QMRQrms', 2, '197.186.0.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieko5am9nSDF0STd5QUEyR3ZIaWlVRndMeXRFV2wxcHJlbGg1aGxCdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwczovL3lha3dldHUuY28udHovcHJvZHVjdHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1735476054),
('PBMEPY8n9ZLDgCSwem689ZWu8kNCvn6M23Dbr3om', NULL, '205.210.31.45', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWFOTFpsbWp4dHV6MDl1WWFmR3JXTkkyY285VTFBeXZTbHBhYXdIdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8veWFrd2V0dS5jby50ei9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1735470005),
('TJD05O0N5vjF4mLW4dN4FyFkzCIZgfXUj78j0saI', NULL, '205.210.31.45', '', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRUZwWTZQcmFZeU9mT3ZSazUycE83dFlMbGNmclcwQVh4UGp2MW9tcSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cHM6Ly95YWt3ZXR1LmNvLnR6Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8veWFrd2V0dS5jby50eiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1735470005),
('xgyvmJTiYXTVwFiOIeLG0HMm5zcYbOPJbNOLQ4s3', 3, '41.59.96.83', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNWw0Tk53ZW9ieGs2c3hwVXJ2MmoyczZFMEkzNzhEOEhwcnF6NTRaNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwczovL3lha3dldHUuY28udHovcHJvZHVjdF9yZXBvcnQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1735476473);

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
  `role` enum('SuperAdmin','Seller') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'phort_', 'middlephort@gmail.com', NULL, '$2y$12$IOqhO4vLSGWQLWFh0TE2ZO71y/dt0Nc10TjXa..2fviDZ.QBh8k3e', 'SuperAdmin', NULL, '2024-12-15 17:49:00', '2024-12-15 18:19:02'),
(3, 'jordan', 'jokerkisoma77@gmail.com', NULL, '$2y$12$Hii5XftwtCwYzVEysG3XzO42O.Sjmm513rfLflKSJQ02Ta5ipk63u', 'SuperAdmin', NULL, '2024-12-16 15:02:05', '2024-12-16 15:02:05'),
(4, 'zahoro', 'princesonga23@gmail.com', NULL, '$2y$12$7Z7eOJPujQBYyc4kNkk.6uus2EX2fmx3864ZfZp8phgZkBCHVnevG', 'Seller', NULL, '2024-12-29 04:20:38', '2024-12-29 04:20:38');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_type_id_foreign` (`product_type_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_product_id_foreign` (`product_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5455;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

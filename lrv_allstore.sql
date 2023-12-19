-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 09:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrv_allstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author_id`, `category_id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(31, 3, 1, 'The Personality Trait That Makes People Happier', 'blog-1.jpg', '', NULL, NULL),
(32, 3, 2, 'This was one of our first days in Hawaii last week.', 'blog-2.jpg', '', NULL, NULL),
(33, 3, 1, 'Last week I had my first work trip of the year to Sonoma Valley', 'blog-3.jpg', '', NULL, NULL),
(34, 3, 2, 'Happppppy New Year! I know I am a little late on this post', 'blog-4.jpg', '', NULL, NULL),
(35, 3, 2, 'Absolue collection. The Lancome team has been one…', 'blog-5.jpg', '', NULL, NULL),
(36, 3, 3, 'Writing has always been kind of therapeutic for me', 'blog-6.jpg', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Calvin Klein', NULL, NULL, NULL),
(2, 'Diesel', NULL, NULL, NULL),
(3, 'Polo', NULL, NULL, NULL),
(4, 'Tommy Hilfiger', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, NULL, NULL),
(2, 'Women', NULL, NULL, NULL),
(3, 'Kids', NULL, NULL, NULL),
(6, 'Underwears', 'Đây là chỗ bán đồ lót...', '2022-03-29 03:28:48', '2022-03-29 03:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2021_11_27_054448_create_orders_table', 1),
(18, '2014_10_12_000000_create_users_table', 2),
(19, '2014_10_12_100000_create_password_resets_table', 2),
(20, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(21, '2019_08_19_000000_create_failed_jobs_table', 2),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(23, '2021_11_27_060345_create_brands_table', 2),
(24, '2021_11_27_060559_create_categories_table', 2),
(25, '2021_12_07_024000_create_sessions_table', 2),
(26, '2021_11_27_055717_create_products_table', 3),
(27, '2021_11_27_060729_create_product_images_table', 4),
(28, '2021_11_27_060908_create_product_details_table', 4),
(29, '2021_11_27_061146_create_product_comments_table', 4),
(30, '2021_11_27_061458_create_blogs_table', 5),
(31, '2021_11_27_061736_create_blog_comments_table', 5),
(32, '2021_12_07_045343_create_orders_table', 6),
(33, '2021_11_27_055039_create_order_details_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `email`, `phone_number`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'client@gmail.com', '0989123456', 0, '2021-11-30 23:44:17', '2021-12-08 23:44:17'),
(2, 'Luom', 'NV', '123', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-01 00:27:07', '2021-12-09 00:27:07'),
(3, 'Luom', 'NV', '123', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-02 00:27:35', '2021-12-09 00:27:35'),
(4, 'Luom', 'NV', '123', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-03 00:31:18', '2021-12-09 00:31:18'),
(5, 'Luom', 'NV', '123', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-03 00:33:21', '2021-12-09 00:33:21'),
(6, 'Luom', 'NV', '123', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-04 00:34:03', '2021-12-09 00:34:03'),
(7, 'Luom', 'NV', '123', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-05 00:34:13', '2021-12-09 00:34:13'),
(8, 'Luom', 'NV', '123', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-06 00:34:48', '2021-12-09 00:34:48'),
(9, 'Teo', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-07 00:36:50', '2021-12-09 00:36:50'),
(10, 'Teo', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-07 00:39:37', '2021-12-09 00:39:37'),
(11, 'Teo', 'NV', '123', '123', 'ADDRESS 1', '123', '123', 'btoann.it@gmail.com', '0989123456', 1, '2021-12-08 00:48:47', '2021-12-09 00:48:47'),
(12, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456788', 1, '2021-12-09 00:52:07', '2021-12-09 00:52:07'),
(13, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456788', 1, '2021-12-09 00:53:11', '2021-12-09 00:53:11'),
(14, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456788', 1, '2021-12-09 00:54:19', '2021-12-09 00:54:19'),
(15, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456788', 1, '2021-12-09 00:54:59', '2021-12-09 00:54:59'),
(16, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456788', 1, '2021-12-09 00:56:00', '2021-12-09 00:56:00'),
(17, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456788', 1, '2021-12-09 00:57:43', '2021-12-09 00:57:43'),
(18, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456789', 1, '2021-12-09 01:00:12', '2021-12-09 01:00:12'),
(19, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0555555555', 1, '2021-12-09 02:19:13', '2021-12-09 02:19:13'),
(20, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0123456789', 1, '2021-12-09 11:46:54', '2021-12-09 11:46:54'),
(21, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'nguyenbaotoan2001@gmail.com', '0123456777', 1, '2021-12-09 11:49:03', '2021-12-09 11:49:03'),
(22, 'Luom', 'NV', 'company 1', 'COUNTRY 1', 'ADDRESS 1', '123', 'CITY 1', 'btoann.it@gmail.com', '0123456789', 1, '2022-03-29 04:08:02', '2022-03-29 04:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 1, 35, 35, '2021-12-08 23:44:17', '2021-12-08 23:44:17'),
(2, 1, 2, 1, 13, 13, '2021-12-08 23:44:17', '2021-12-08 23:44:17'),
(3, 1, 1, 1, 495, 495, '2021-12-08 23:44:18', '2021-12-08 23:44:18'),
(4, 2, 4, 1, 35, 35, '2021-12-09 00:27:08', '2021-12-09 00:27:08'),
(5, 3, 4, 1, 35, 35, '2021-12-09 00:27:35', '2021-12-09 00:27:35'),
(6, 4, 4, 1, 35, 35, '2021-12-09 00:31:18', '2021-12-09 00:31:18'),
(7, 5, 4, 1, 35, 35, '2021-12-09 00:33:21', '2021-12-09 00:33:21'),
(8, 6, 4, 1, 35, 35, '2021-12-09 00:34:03', '2021-12-09 00:34:03'),
(9, 7, 4, 1, 35, 35, '2021-12-09 00:34:13', '2021-12-09 00:34:13'),
(10, 8, 4, 1, 35, 35, '2021-12-09 00:34:48', '2021-12-09 00:34:48'),
(11, 9, 4, 1, 35, 35, '2021-12-09 00:36:50', '2021-12-09 00:36:50'),
(12, 10, 4, 1, 35, 35, '2021-12-09 00:39:37', '2021-12-09 00:39:37'),
(13, 11, 4, 1, 35, 35, '2021-12-09 00:48:47', '2021-12-09 00:48:47'),
(14, 12, 4, 1, 35, 35, '2021-12-09 00:52:07', '2021-12-09 00:52:07'),
(15, 13, 4, 1, 35, 35, '2021-12-09 00:53:11', '2021-12-09 00:53:11'),
(16, 14, 4, 1, 35, 35, '2021-12-09 00:54:19', '2021-12-09 00:54:19'),
(17, 15, 4, 1, 35, 35, '2021-12-09 00:54:59', '2021-12-09 00:54:59'),
(18, 16, 4, 1, 35, 35, '2021-12-09 00:56:00', '2021-12-09 00:56:00'),
(19, 17, 4, 1, 35, 35, '2021-12-09 00:57:43', '2021-12-09 00:57:43'),
(20, 18, 1, 1, 495, 495, '2021-12-09 01:00:12', '2021-12-09 01:00:12'),
(21, 19, 1, 1, 495, 495, '2021-12-09 02:19:13', '2021-12-09 02:19:13'),
(22, 19, 2, 2, 13, 26, '2021-12-09 02:19:13', '2021-12-09 02:19:13'),
(23, 20, 4, 1, 35, 35, '2021-12-09 11:46:54', '2021-12-09 11:46:54'),
(24, 21, 1, 1, 495, 495, '2021-12-09 11:49:03', '2021-12-09 11:49:03'),
(25, 22, 1, 1, 495, 495, '2022-03-29 04:08:02', '2022-03-29 04:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `quantity` bigint(20) NOT NULL DEFAULT 0,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `author_id`, `brand_id`, `name`, `description`, `content`, `price`, `quantity`, `discount`, `weight`, `sku`, `featured`, `tag`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'Pure Pineapple', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, 1.3, '00012', 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(2, 2, 4, 2, 'Guangzhou sweater', NULL, NULL, 35, 20, 13, NULL, NULL, 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(3, 2, 1, 3, 'Guangzhou sweater', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(4, 1, 1, 4, 'Microfiber Wool Scarf', NULL, NULL, 64, 20, 35, NULL, NULL, 1, 'Accessories', '2021-11-24 08:04:57', NULL),
(5, 3, 1, 1, 'Men\'s Painted Hat', NULL, NULL, 44, 20, 35, NULL, NULL, 0, 'Accessories', '2021-11-24 08:04:57', NULL),
(6, 2, 1, 1, 'Converse Shoes', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(7, 1, 1, 1, 'Pure Pineapple', NULL, NULL, 64, 20, 35, NULL, NULL, 1, 'HandBag', '2021-11-24 08:04:57', NULL),
(8, 1, 4, 1, '2 Layer Windbreaker', NULL, NULL, 44, 20, 35, NULL, NULL, 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(9, 1, 4, 1, 'Converse Shoes', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 'Shoes', '2021-11-24 08:04:57', NULL),
(10, 2, 4, 1, 'Pure Pineapple 2', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, 1.3, '00012', 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(11, 2, 4, 1, 'Pure Pineapple 3', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, 1.3, '00012', 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(12, 2, 4, 1, 'Pure Pineapple 4', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, 1.3, '00012', 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(13, 2, 1, 1, 'Pure Pineapple 5', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, 1.3, '00012', 1, 'Clothing', '2021-11-24 08:04:57', NULL),
(14, 1, 4, 1, 'Pure Pineapple 6', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, 1.3, '00012', 1, 'Clothing', '2021-11-24 08:04:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'BrandonKelley@gmail.com', 'Brandon Kelley', 'Nice !', 4, '2021-11-24 08:04:57', NULL),
(2, 1, 3, 'RoyBanks@gmail.com', 'Roy Banks', 'Nice !', 4, '2021-11-24 08:04:57', NULL),
(3, 4, NULL, 'Krishna2018@gmail.com', 'Dkienn', 'nice', 4, '2021-12-08 23:33:57', '2021-12-08 23:33:57'),
(4, 1, 25, 'btoann.it@gmail.com', 'toannb', 'nice', 2, '2021-12-09 02:17:19', '2021-12-09 02:17:19'),
(5, 1, 26, 'Krishna2018@gmail.com', 'Dkienn', 'Tệ', 5, '2022-03-29 04:06:54', '2022-03-29 04:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'blue', 'S', 5, NULL, NULL),
(2, 1, 'blue', 'M', 5, NULL, NULL),
(3, 1, 'blue', 'L', 5, NULL, NULL),
(4, 1, 'blue', 'XS', 5, NULL, NULL),
(5, 1, 'yellow', 'S', 0, NULL, NULL),
(6, 1, 'violet', 'S', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'product-1.jpg', NULL, NULL),
(2, 1, 'product-1-1.jpg', NULL, NULL),
(3, 1, 'product-1-2.jpg', NULL, NULL),
(4, 2, 'product-2.jpg', NULL, NULL),
(5, 3, 'product-3.jpg', NULL, NULL),
(6, 4, 'product-4.jpg', NULL, NULL),
(7, 5, 'product-5.jpg', NULL, NULL),
(8, 6, 'product-6.jpg', NULL, NULL),
(9, 7, 'product-7.jpg', NULL, NULL),
(10, 8, 'product-8.jpg', NULL, NULL),
(11, 9, 'product-9.jpg', NULL, NULL),
(12, 10, 'product-10.jpg', NULL, NULL),
(13, 11, 'product-11.jpg', NULL, NULL),
(14, 12, 'product-12.jpg', NULL, NULL),
(15, 13, 'product-13.jpg', NULL, NULL),
(16, 14, 'product-14.jpg', NULL, NULL),
(17, 14, 'product-14.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5cPbiLdZReXZryfZ2kVNWeogTrgjjEUz1mdBgMM2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 OPR/81.0.4196.61', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiejUwUzBiR25pcVdOV1htbWtxQm1SRDhkMzBOenlBMmtFaEIyTDVqRCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1638862904),
('BN7zpuw9f2eJVTwRjGjynDkKMaOAr1GZ81oHqxkV', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 OPR/81.0.4196.61', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTZya0NkZEdBdUFONW44OFp0dTMyN0JhbExodEhxcER0ckE3clQzYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODg4OC9XRUJfUEhQLTNfTGFyYXZlbC9Bc20vcHVibGljL2NhcnQvYWRkLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1638864364),
('LqgMiOII85WyYOlyUPnH3M7KZfMSWYxCHWJsulGw', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 OPR/81.0.4196.61', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjBoOG5NaXlGOFk5ZFd6Z3VPcE05R0NRNlVkU0RGWXZuU1loMmx2byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODg4OC9XRUJfUEhQLTNfTGFyYXZlbC9Bc21fMi9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1638877012),
('rjsKDSTPrbPNYJoTZmdu3POyJNJMQcoi163Xh6OF', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 OPR/81.0.4196.61', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZU1XQTFiZGpDNG9pYWFacGxHeXRVdXBoSlRMZjBCNG14WlBnaTJENiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODg4OC9XRUJfUEhQLTNfTGFyYXZlbC9Bc20vcHVibGljL2FkbWluaXN0cmF0b3IvY2F0ZWdvcmllcy92aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1638888978);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 0,
  `role` tinyint(4) NOT NULL DEFAULT 2,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone_number`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `gender`, `role`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Btoann', 'user1@gmail.com', NULL, '01123456789', '$2y$10$WEVNUF/TC1rNVm7W6.vv3.ARSmTI1HZcGVGzihdyOpdYgQFPyxgFu', NULL, NULL, NULL, NULL, NULL, 0, 0, 'I\'m host!', NULL, NULL),
(2, 'Nguyễn Bảo Toàn', 'user2@gmail.com', NULL, '01223456789', '$2y$10$GNAQ2KJVjxB5/jXRMeMGhOhEl8vAIuunYKPLxuXcYhyHkBJu5ryi2', NULL, NULL, NULL, NULL, 'avatar-clien-1.png', 0, 2, 'Client 1', NULL, NULL),
(3, 'Kim Jongin', 'user3@gmail.com', NULL, '01323456789', '$2y$10$0xIHXtyWZhTeSRgBKhUR3.08nRYwCqpMKruIiq02vlkDo2aDLhJa6', NULL, NULL, NULL, NULL, 'avatar-clien-2.png', 0, 2, 'Client 2', NULL, NULL),
(4, 'Admin', 'user4@gmail.com', NULL, '01423456789', '$2y$10$vxWjrrwS4Hj.G/sMtygOheUFNhyPNOXA7AJepA2OJQC99Zlf3YLpu', NULL, NULL, NULL, NULL, NULL, 0, 1, 'Admin 1', NULL, NULL),
(22, 'Dkienn', 'Krishna2018@gmail.com', NULL, '0123456777', '$2y$10$9EHN0YXzM5PmVMk7yNjvkee2hdqq/WpEMyKu7kGiv7xU9/bK0At1a', NULL, NULL, NULL, NULL, NULL, 0, 2, NULL, '2021-12-08 10:05:09', '2021-12-08 10:05:09'),
(23, 'toannb', 'pritirekhadas2018@gmail.com', NULL, '0123456788', '$2y$10$M6hTjzAULuVhQ8JxJnfp3e4u.luEHdCnyimpA0a4sxe5ZPx6HIyKe', NULL, NULL, NULL, NULL, NULL, 0, 2, NULL, '2021-12-08 10:06:39', '2021-12-08 10:06:39'),
(24, 'Client', 'client@gmail.com', NULL, '0989123456', '$2y$10$YXP4ntAHgBXInqiQKfkUSe4a8nzFfdkBW24suWBFrHlFG9jNg.aW6', NULL, NULL, NULL, NULL, NULL, 0, 2, NULL, '2021-12-08 10:22:33', '2021-12-08 10:22:33'),
(25, 'Admin', 'admin@gmail.com', NULL, '0555555555', '$2y$10$DCUo7kK0SulalABUjmwlZOEGG1diHQMtLNnBaSWmdZI/ai9SXusTi', NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, '2021-12-08 20:41:37', '2021-12-08 20:41:37'),
(26, 'toannb', 'admin2@gmail.com', NULL, '0989111333', '$2y$10$DCUo7kK0SulalABUjmwlZOEGG1diHQMtLNnBaSWmdZI/ai9SXusTi', NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, '2022-03-29 03:26:40', '2022-03-29 03:26:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_author_id_foreign` (`author_id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_author_id_foreign` (`author_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_comments_product_id_foreign` (`product_id`),
  ADD KEY `product_comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blog_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `product_comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

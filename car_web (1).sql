-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 06:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `category_id`, `car_name`, `modal`, `size`, `price`, `capacity`, `seats`, `fuel_card`, `description`, `created_at`, `updated_at`) VALUES
(64, 4, '200 Dream car', '2030', 'SUV', '300-4001 SAR', '20', '20000', 'ممتاز', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', '2022-10-02 08:54:17', '2022-10-03 06:15:36'),
(65, 5, 'Dream car', '2029', 'SEDAN', '300-4001 SAR', '20', '3200', 'جيد', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(66, 2, 'Dream car', '2030', 'SPORTS CAR', '300-4001 SAR', '20', '20000', 'ممتاز', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(67, 4, 'Dream car', '2023', 'STATION WAGON', '300-4001 SAR', '20', '20000', 'ممتاز', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(68, 5, 'Dream car', '2029', 'SUV', '300-4001 SAR', '20', '32000', 'ممتاز', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(69, 4, 'Dream car', '2029', 'SPORTS CAR', '300-4001 SAR', '20', '20000', 'معدل', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(70, 5, 'Dream car', '2019', 'SUV', '300-4001 SAR', '20', '32000', 'جيد', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', '2022-10-03 06:27:51', '2022-10-03 06:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Hondai', '/backend//category_image/1664282330.jpg', '2022-09-27 09:38:50', '2022-09-27 09:38:50'),
(4, 'Toyota', '/backend//category_image/1664285631.PNG', '2022-09-27 10:29:55', '2022-09-27 10:33:51'),
(5, 'BMW', '/backend//category_image/1664700982.jpg', '2022-10-02 05:56:22', '2022-10-02 05:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `engines`
--

CREATE TABLE `engines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `enngine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engines`
--

INSERT INTO `engines` (`id`, `car_id`, `enngine`, `created_at`, `updated_at`) VALUES
(33, 64, '/backend//Car//Engine/1664711658.png', '2022-10-02 08:54:17', '2022-10-02 08:54:17'),
(34, 64, '/backend//Car//Engine/1664717414.png', '2022-10-02 10:30:14', '2022-10-02 10:30:14'),
(35, 65, '/backend//Car//Engine/1664788814.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(36, 65, '/backend//Car//Engine/1664788815.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(37, 65, '/backend//Car//Engine/1664788816.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(38, 66, '/backend//Car//Engine/1664788884.jpg', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(39, 66, '/backend//Car//Engine/1664788885.jpg', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(40, 66, '/backend//Car//Engine/1664788886.jpg', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(41, 67, '/backend//Car//Engine/1664789002.jpg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(42, 67, '/backend//Car//Engine/1664789003.jpg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(43, 67, '/backend//Car//Engine/1664789004.jpg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(44, 68, '/backend//Car//Engine/1664789131.jpeg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(45, 68, '/backend//Car//Engine/1664789132.jpeg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(46, 68, '/backend//Car//Engine/1664789133.jpeg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(47, 69, '/backend//Car//Engine/1664789193.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(48, 69, '/backend//Car//Engine/1664789194.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(49, 69, '/backend//Car//Engine/1664789195.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(50, 70, '/backend//Car//Engine/1664789271.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51'),
(52, 70, '/backend//Car//Engine/1664789273.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51'),
(53, 70, '/backend//Car//Engine/1664796945.jpg', '2022-10-03 08:35:45', '2022-10-03 08:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inside_images`
--

CREATE TABLE `inside_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inside_images`
--

INSERT INTO `inside_images` (`id`, `car_id`, `in`, `created_at`, `updated_at`) VALUES
(45, 64, '/backend//Car//Inside/1664711658.jpg', '2022-10-02 08:54:17', '2022-10-02 08:54:17'),
(46, 64, '/backend//Car//Inside/1664717414.jpg', '2022-10-02 10:30:14', '2022-10-02 10:30:14'),
(47, 65, '/backend//Car//Inside/1664788814.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(48, 65, '/backend//Car//Inside/1664788815.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(49, 65, '/backend//Car//Inside/1664788816.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(50, 66, '/backend//Car//Inside/1664788884.jpg', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(51, 66, '/backend//Car//Inside/1664788885.jpg', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(52, 66, '/backend//Car//Inside/1664788930.jpg', '2022-10-03 06:22:10', '2022-10-03 06:22:10'),
(53, 67, '/backend//Car//Inside/1664789002.jpeg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(54, 67, '/backend//Car//Inside/1664789003.jpeg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(55, 68, '/backend//Car//Inside/1664789131.jpg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(56, 68, '/backend//Car//Inside/1664789132.jpg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(57, 69, '/backend//Car//Inside/1664789193.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(58, 69, '/backend//Car//Inside/1664789194.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(59, 69, '/backend//Car//Inside/1664789195.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(60, 70, '/backend//Car//Inside/1664789271.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51'),
(61, 70, '/backend//Car//Inside/1664789272.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51'),
(62, 70, '/backend//Car//Inside/1664789273.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51'),
(63, 67, '/backend//Car//Inside/1664796961.jpeg', '2022-10-03 08:36:01', '2022-10-03 08:36:01');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_09_27_084858_create_categories_table', 2),
(6, '2022_09_28_125718_create_cars_table', 3),
(8, '2022_09_28_132611_create_car_images_table', 4),
(9, '2022_09_29_091607_create_inside_images_table', 5),
(10, '2022_09_29_091659_create_outsides_table', 5),
(11, '2022_09_29_091733_create_engines_table', 5),
(12, '2022_10_02_134807_create_news_table', 6),
(13, '2022_10_02_151951_create_new_images_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `subject`, `date`, `content`, `keyword`, `created_at`, `updated_at`) VALUES
(7, 'الخادم لا يعمل البريد الإلكتروني أو موقع الاستضافة أو cpanel أيضًا .. يرجى إصلاحه الآن ...', '2022-10-04', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', 'مرحبًا ، مرحبًا ، جيد', '2022-10-03 04:25:49', '2022-10-03 05:57:54'),
(9, 'الخادم لا يعمل البريد الإلكتروني أو موقع الاستضافة أو cpanel أيضًا .. يرجى إصلاحه الآن ...', '2022-10-07', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', 'مرحبًا ، مرحبًا ، جيد', '2022-10-03 06:31:04', '2022-10-03 06:31:04'),
(10, 'الخادم لا يعمل البريد الإلكتروني أو موقع الاستضافة أو cpanel أيضًا .. يرجى إصلاحه الآن ...', '2022-10-08', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', 'مرحبًا ، مرحبًا ، جيد', '2022-10-03 06:33:32', '2022-10-03 06:33:32'),
(11, 'الخادم لا يعمل البريد الإلكتروني أو موقع الاستضافة أو cpanel أيضًا .. يرجى إصلاحه الآن ...', '2022-10-09', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', 'مرحبًا ، مرحبًا ، جيد', '2022-10-03 06:35:28', '2022-10-03 06:35:28'),
(12, 'الخادم لا يعمل البريد الإلكتروني أو موقع الاستضافة أو cpanel أيضًا .. يرجى إصلاحه الآن ...', '2022-10-11', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', 'مرحبًا ، مرحبًا ، جيد', '2022-10-03 06:36:41', '2022-10-03 06:36:41'),
(13, 'الخادم لا يعمل البريد الإلكتروني أو موقع الاستضافة أو cpanel أيضًا .. يرجى إصلاحه الآن ...', '2022-10-20', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', 'مرحبًا ، مرحبًا ، جيد', '2022-10-03 06:37:14', '2022-10-03 06:37:14'),
(14, 'الخادم لا يعمل البريد الإلكتروني أو موقع الاستضافة أو cpanel أيضًا .. يرجى إصلاحه الآن ...', '2022-10-30', 'خلافًا للاعتقاد الشائع ، فإن Lorem Ipsum ليس مجرد نص عشوائي. لها جذور في قطعة من الأدب اللاتيني الكلاسيكي من 45 قبل الميلاد ، مما يجعلها أكثر من 2000 عام. ريتشارد مكلينتوك ، أستاذ اللغة اللاتينية في كلية هامبدن سيدني في فيرجينيا', 'مرحبًا ، مرحبًا ، جيد', '2022-10-03 07:31:41', '2022-10-03 11:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `new_images`
--

CREATE TABLE `new_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_images`
--

INSERT INTO `new_images` (`id`, `news_id`, `image`, `created_at`, `updated_at`) VALUES
(10, 9, '/backend//news//news/1664789464.jpg', '2022-10-03 06:31:04', '2022-10-03 06:31:04'),
(11, 7, '/backend//news//news/1664789561.jpg', '2022-10-03 06:32:41', '2022-10-03 06:32:41'),
(12, 10, '/backend//news//news/1664789612.jpeg', '2022-10-03 06:33:32', '2022-10-03 06:33:32'),
(13, 10, '/backend//news//news/1664789613.jpeg', '2022-10-03 06:33:32', '2022-10-03 06:33:32'),
(14, 10, '/backend//news//news/1664789621.jpeg', '2022-10-03 06:33:41', '2022-10-03 06:33:41'),
(15, 9, '/backend//news//news/1664789632.jpg', '2022-10-03 06:33:52', '2022-10-03 06:33:52'),
(16, 9, '/backend//news//news/1664789640.jpg', '2022-10-03 06:34:00', '2022-10-03 06:34:00'),
(17, 7, '/backend//news//news/1664789652.jpg', '2022-10-03 06:34:12', '2022-10-03 06:34:12'),
(18, 7, '/backend//news//news/1664789672.jpg', '2022-10-03 06:34:32', '2022-10-03 06:34:32'),
(19, 11, '/backend//news//news/1664789728.jpg', '2022-10-03 06:35:28', '2022-10-03 06:35:28'),
(20, 11, '/backend//news//news/1664789729.jpg', '2022-10-03 06:35:28', '2022-10-03 06:35:28'),
(21, 11, '/backend//news//news/1664789730.jpg', '2022-10-03 06:35:28', '2022-10-03 06:35:28'),
(22, 12, '/backend//news//news/1664789801.jpg', '2022-10-03 06:36:41', '2022-10-03 06:36:41'),
(23, 12, '/backend//news//news/1664789802.jpg', '2022-10-03 06:36:41', '2022-10-03 06:36:41'),
(24, 13, '/backend//news//news/1664789834.jpg', '2022-10-03 06:37:14', '2022-10-03 06:37:14'),
(25, 13, '/backend//news//news/1664789835.jpg', '2022-10-03 06:37:14', '2022-10-03 06:37:14'),
(26, 13, '/backend//news//news/1664789836.jpg', '2022-10-03 06:37:14', '2022-10-03 06:37:14'),
(33, 14, '/backend//news//news/1664793101.jpeg', '2022-10-03 07:31:41', '2022-10-03 07:31:41'),
(34, 14, '/backend//news//news/1664793102.jpeg', '2022-10-03 07:31:41', '2022-10-03 07:31:41'),
(35, 14, '/backend//news//news/1664793176.jpeg', '2022-10-03 07:32:56', '2022-10-03 07:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `outsides`
--

CREATE TABLE `outsides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `out` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outsides`
--

INSERT INTO `outsides` (`id`, `car_id`, `out`, `created_at`, `updated_at`) VALUES
(62, 64, '/backend//Car//outside/1664788536.png', '2022-10-03 06:15:36', '2022-10-03 06:15:36'),
(63, 65, '/backend//Car//outside/1664788814.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(64, 65, '/backend//Car//outside/1664788815.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(65, 65, '/backend//Car//outside/1664788816.jpg', '2022-10-03 06:20:14', '2022-10-03 06:20:14'),
(66, 66, '/backend//Car//outside/1664788884.jpg', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(67, 66, '/backend//Car//outside/1664788885.jpg', '2022-10-03 06:21:24', '2022-10-03 06:21:24'),
(68, 66, '/backend//Car//outside/1664788930.jpg', '2022-10-03 06:22:10', '2022-10-03 06:22:10'),
(69, 67, '/backend//Car//outside/1664789002.jpg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(70, 67, '/backend//Car//outside/1664789003.jpg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(71, 67, '/backend//Car//outside/1664789004.jpg', '2022-10-03 06:23:22', '2022-10-03 06:23:22'),
(72, 68, '/backend//Car//outside/1664789131.jpg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(73, 68, '/backend//Car//outside/1664789132.jpg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(74, 68, '/backend//Car//outside/1664789133.jpg', '2022-10-03 06:25:31', '2022-10-03 06:25:31'),
(75, 69, '/backend//Car//outside/1664789193.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(76, 69, '/backend//Car//outside/1664789194.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(77, 69, '/backend//Car//outside/1664789195.jpg', '2022-10-03 06:26:33', '2022-10-03 06:26:33'),
(78, 70, '/backend//Car//outside/1664789271.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51'),
(79, 70, '/backend//Car//outside/1664789272.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51'),
(80, 70, '/backend//Car//outside/1664789273.jpg', '2022-10-03 06:27:51', '2022-10-03 06:27:51');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'مكتشف السيارة', 'carfinders@gmail.com', NULL, '$2y$10$8Lcf5k.TTX2i.jlqQVZ4be31tpW14rtZ05zhUMeOpcWK0k.6l/xti', NULL, NULL, '2022-10-03 06:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_category_id_foreign` (`category_id`);

--
-- Indexes for table `car_images`
--
ALTER TABLE `car_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_images_car_id_foreign` (`car_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engines`
--
ALTER TABLE `engines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `engines_car_id_foreign` (`car_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inside_images`
--
ALTER TABLE `inside_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inside_images_car_id_foreign` (`car_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_images`
--
ALTER TABLE `new_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `new_images_news_id_foreign` (`news_id`);

--
-- Indexes for table `outsides`
--
ALTER TABLE `outsides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `outsides_car_id_foreign` (`car_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `car_images`
--
ALTER TABLE `car_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `engines`
--
ALTER TABLE `engines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inside_images`
--
ALTER TABLE `inside_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `new_images`
--
ALTER TABLE `new_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `outsides`
--
ALTER TABLE `outsides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `car_images`
--
ALTER TABLE `car_images`
  ADD CONSTRAINT `car_images_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `engines`
--
ALTER TABLE `engines`
  ADD CONSTRAINT `engines_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inside_images`
--
ALTER TABLE `inside_images`
  ADD CONSTRAINT `inside_images_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `new_images`
--
ALTER TABLE `new_images`
  ADD CONSTRAINT `new_images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `outsides`
--
ALTER TABLE `outsides`
  ADD CONSTRAINT `outsides_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

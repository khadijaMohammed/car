-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 10:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` char(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USD',
  `locale` char(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `slug`, `remember_token`, `currency`, `locale`, `logo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'RUDOLPH', 'images/ykteKlV86dKA7PfGbVt4LdpeMgvwqpZELHEjw41C.jpg', 'rudolph', NULL, 'USD', 'en', NULL, NULL, 'active', '2021-07-17 20:27:24', '2021-08-07 07:46:18'),
(2, 'IGOR', 'images/nEDgKR8haofVZkwODnvsJ1AqepYkR77pp8uSYV4W.jpg', 'igor', NULL, 'USD', 'en', NULL, NULL, 'active', '2021-07-28 16:42:59', '2021-07-31 06:05:49'),
(3, 'THOR\'S', 'images/Pud1s73iHP8ltPt6JfrqgdIlzcaH3HvGZ8QoVsLF.jpg', 'thors', NULL, 'USD', 'en', NULL, NULL, 'active', '2021-07-28 16:43:08', '2021-07-31 06:06:43'),
(4, 'BREDATA', 'images/g9Dvbvx8gk6ZP38CGKKEA4T22OGDepZnIVXbfYiE.jpg', 'bredata', NULL, 'USD', 'en', NULL, NULL, 'active', '2021-07-28 16:49:47', '2021-07-31 06:06:55'),
(5, 'Sabotage', 'images/RTmMaUaiSOsRaacS7Z2rOsQ9OD78DWyk2OT8PQap.jpg', 'sabotage', NULL, 'USD', 'en', NULL, NULL, 'active', '2021-07-31 06:07:40', '2021-07-31 06:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licences_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_licences_date` date NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_number` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Available','Unavailable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `slug`, `licences_number`, `end_licences_date`, `color`, `description`, `image`, `car_number`, `status`, `parent_id`, `created_at`, `updated_at`) VALUES
(25, 'Mercedes-Benz', 'mercedes-benz', 'l5', '2021-07-08', 'Red', 'This odd looking X-shaped engine has two banks of four cylinders arranged around a central crankshaft. This X-8 layout fascinated Henry Ford and in 1920 he launched a secret project to build such an engine. But the X-8 turned out to be a flawed concept, and Ford finally abandoned the project in 1926.', NULL, 86, 'Available', 27, '2021-07-17 08:25:02', '2021-07-31 06:46:03'),
(27, 'Mercedes', 'mercedes', '63758', '2021-07-19', 'black', 'This odd looking X-shaped engine has two banks of four cylinders arranged around a central crankshaft. This X-8 layout fascinated Henry Ford and in 1920 he launched a secret project to build such an engine. But the X-8 turned out to be a flawed concept, and Ford finally abandoned the project in 1926.', NULL, 5445, 'Available', NULL, '2021-07-17 12:27:43', '2021-07-31 03:39:19'),
(28, 'Mercedes2016', 'mercedes2016', '955', '2021-07-13', 'blue', 'This odd looking X-shaped engine has two banks of four cylinders arranged around a central crankshaft. This X-8 layout fascinated Henry Ford and in 1920 he launched a secret project to build such an engine. But the X-8 turned out to be a flawed concept, and Ford finally abandoned the project in 1926.', NULL, 6528, 'Available', 27, '2021-07-17 12:29:57', '2021-07-31 04:07:14'),
(30, 'Ford-x8', 'ford-x8', '84532', '2021-07-22', 'Red', 'This odd looking X-shaped engine has two banks of four cylinders arranged around a central crankshaft. This X-8 layout fascinated Henry Ford and in 1920 he launched a secret project to build such an engine. But the X-8 turned out to be a flawed concept, and Ford finally abandoned the project in 1926.', NULL, 8752, 'Available', 25, '2021-07-26 06:27:05', '2021-07-31 03:39:38'),
(32, 'mercedes2', 'mercedes2', '8986532', '2021-07-20', 'blue', NULL, NULL, 9996, 'Available', 27, '2021-07-31 04:00:44', '2021-07-31 04:00:44');

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
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2014_7_9_9000000_create_users_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_07_06_180608_create_cars_table', 1),
(17, '2021_07_06_192126_create_brands_table', 1),
(18, '2021_07_07_184125_create_models_table', 1),
(19, '2021_07_9_070648_create_profiles_table', 2),
(20, '2021_07_10_164917_create_tags_table', 3),
(21, '2021_07_18_084646_create_model_tag_table', 3),
(22, '2021_07_07_184125_create_modells_table', 4),
(23, '2021_07_11_092556_create_model_tag_table', 5),
(24, '2021_07_15_080640_create_model_images_table', 5),
(25, '2021_07_20_065048_add_auth_to_brands_table', 6),
(26, '2021_07_21_075811_add_type_column_to_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `modells`
--

CREATE TABLE `modells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_year` date NOT NULL,
  `seats` int(10) UNSIGNED NOT NULL,
  `fuel_type` enum('solar','petrol','diesel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `motor_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specifications` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `sale_price` double(8,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('in-stock','sold-out','draft') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modells`
--

INSERT INTO `modells` (`id`, `name`, `slug`, `release_year`, `seats`, `fuel_type`, `motor_type`, `Specifications`, `brand_id`, `car_id`, `image`, `price`, `sale_price`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ford', 'car5', '2010-12-20', 5, 'petrol', 'diesel', 'A wonderful serenity has taken possession.', 1, 25, 'images/yjzkOjiQIlEHYrFBg94ZIbiRkyZohDJRcsQbO5GX.jpg', 500000.00, 22.10, 5, 'in-stock', '2021-07-19 18:21:33', '2021-07-26 04:38:15'),
(5, 'Car3', 'car3', '2021-07-15', 4, 'solar', 'cgh', 'A wonderful serenity has taken possession.', 2, 27, 'images/yhN4RUhBckgFUaMgXNSPDavvETNR7lrvKu4sn381.jpg', 5000.00, 0.00, 5, 'in-stock', '2021-07-19 20:58:15', '2021-08-04 04:34:51'),
(6, 'car6', 'cars', '2021-07-22', 2, 'solar', 'solar', 'A wonderful serenity has taken possession.', 3, 27, 'images/yhN4RUhBckgFUaMgXNSPDavvETNR7lrvKu4sn381.jpg', 3000.00, 1.00, 1, 'sold-out', '2021-07-20 01:57:13', '2021-07-20 02:04:45'),
(8, 'Ford', 'car4', '2021-07-21', 3, 'solar', 'petrol', 'A wonderful serenity has taken possession.', 3, 27, 'images/yjzkOjiQIlEHYrFBg94ZIbiRkyZohDJRcsQbO5GX.jpg', 30000.00, 1.00, 1, 'sold-out', '2021-07-20 04:46:05', '2021-07-26 13:56:59'),
(11, 'Ford', 'car', '2020-07-15', 4, 'solar', 'petrol', 'A wonderful serenity has taken possession.', 2, 25, 'images/5xR33BaJvcOG6Ge5QxL9xIiXiPxrFZ84vYYAcNxR.jpg', 520000.00, 1.00, 2, 'draft', '2021-07-20 05:48:57', '2021-07-31 04:03:06'),
(18, 'Benz', 'sxdcfvg', '2021-07-08', 4, 'solar', 'solar', 'A wonderful serenity has taken possession.', 1, 27, 'images/KTTxK2IPGRig2D1MWltMaoJ9qC0RcKfaQ0p5lXJ7.jpg', 12000.00, 845.00, 5, 'sold-out', '2021-07-20 07:17:21', '2021-07-31 04:08:56'),
(24, 'Ford X8', 'hbbjnkml', '2010-07-14', 5, 'solar', 'diesel', 'A wonderful serenity has taken possession.', 4, 25, 'images/go2PQ8df9E1aBb4BbAO6u2pvnewBgwGEl99ugIZy.jpg', 200000.00, 20.00, 8, 'in-stock', '2021-07-26 06:28:13', '2021-07-31 05:15:36'),
(25, 'Mercedes', 'mercedes', '2021-07-29', 5, 'solar', 'diesel', 'A wonderful serenity has taken possession.', 3, 27, 'images/KTTxK2IPGRig2D1MWltMaoJ9qC0RcKfaQ0p5lXJ7.jpg', 450000.00, 400.00, 4, 'in-stock', '2021-07-26 14:08:08', '2021-07-31 05:15:16'),
(26, 'Bens', 'mercedes-bens', '2021-08-03', 4, 'solar', 'diesel', 'A wonderful serenity has taken possession.', 2, 27, 'images/KDHMmJpxFncaMxI5iN1N6KJJN9XIZf0Y3jGUHGgc.jpg', 780000.00, 4.00, 4, 'sold-out', '2021-07-26 14:09:19', '2021-08-04 04:10:05'),
(30, 'Mercedes-Benz', 'ford-maverick', '2021-08-03', 4, 'solar', 'diesel', 'A wonderful serenity has taken possession.', 1, 27, 'images/cuYdaMpIoP1uMbHSWZ7mrNy4uSEANiIhTvjC4uFG.jpg', 780000.00, 4.00, 4, 'in-stock', '2021-07-26 14:11:16', '2021-07-31 07:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `model_images`
--

CREATE TABLE `model_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `modell_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_images`
--

INSERT INTO `model_images` (`id`, `modell_id`, `image_path`, `created_at`, `updated_at`) VALUES
(8, 30, 'images/L1LzYK46lTHKhvvvHCxCoS59DJ36gfNmmwRtHU3X.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55'),
(9, 30, 'images/6RzSwO4wPYsbsIj0wO6uXaY1jMhkWHHAPiP8o9pD.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55'),
(10, 30, 'images/sPihZAYDbcZFae6uw55j7I9jQSuBv1fWdg8oojTQ.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55'),
(11, 30, 'images/acd2yNhUNInLwe7p749ArmDTtxd60xS4LP3mazGR.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55'),
(12, 30, 'images/GyPq49eoKUda6fnBvv3AMYytmnpUWUjIhWQ8l4C6.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55'),
(13, 30, 'images/JysDT8WxqK1JiS7Q69PqYZhlPOMNzV87UqeiTHng.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55'),
(14, 30, 'images/cLZH2HCPPOiBTXfcDo24XRdUUwsuEZCNqb0WY67P.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55'),
(15, 30, 'images/9KL5kfWamP54z0sVJM8fXMnRvaOmYySQLhrYcIlc.jpg', '2021-07-31 07:00:55', '2021-07-31 07:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `model_tag`
--

CREATE TABLE `model_tag` (
  `modell_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_tag`
--

INSERT INTO `model_tag` (`modell_id`, `tag_id`) VALUES
(1, 22),
(1, 23),
(18, 25),
(24, 22),
(24, 23),
(25, 26),
(26, 26),
(30, 27);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `first_name`, `last_name`, `birthday`, `gender`, `address`, `avatar`, `created_at`, `updated_at`) VALUES
(5, 'Vada Pfannerstill ', 'PhD', '2021-07-14', 'male', NULL, NULL, '2021-07-17 20:07:11', '2021-07-17 20:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'LightYellow', 'lightyellow', '2021-07-18 06:42:29', '2021-07-18 06:42:29'),
(5, 'Plum', 'plum', '2021-07-18 06:42:29', '2021-07-18 06:42:29'),
(6, 'Gray', 'gray', '2021-07-18 06:42:29', '2021-07-18 06:42:29'),
(7, 'Coral', 'coral', '2021-07-18 06:42:29', '2021-07-18 06:42:29'),
(8, 'DimGrey', 'dimgrey', '2021-07-18 06:42:29', '2021-07-18 06:42:29'),
(9, 'BlanchedAlmond', 'blanchedalmond', '2021-07-18 06:42:29', '2021-07-18 06:42:29'),
(10, 'Purple', 'purple', '2021-07-18 06:42:29', '2021-07-18 06:42:29'),
(11, 'LightBlue', 'lightblue', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(12, 'Fuchsia', 'fuchsia', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(13, 'MediumAquaMarine', 'mediumaquamarine', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(14, 'CadetBlue', 'cadetblue', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(15, 'Thistle', 'thistle', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(16, 'Lavender', 'lavender', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(17, 'Cornsilk', 'cornsilk', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(18, 'SandyBrown', 'sandybrown', '2021-07-19 05:03:42', '2021-07-19 05:03:42'),
(21, 'vhbjnk', 'vhbjnk', '2021-07-24 05:30:28', '2021-07-24 05:30:28'),
(22, 'Ford x8', 'ford-x8', '2021-07-26 04:35:58', '2021-07-26 04:35:58'),
(23, 'Ford', 'ford', '2021-07-26 04:35:58', '2021-07-26 04:35:58'),
(24, 'jknml', 'jknml', '2021-07-26 06:28:13', '2021-07-26 06:28:13'),
(25, 'Benz', 'benz', '2021-07-26 13:40:07', '2021-07-26 13:40:07'),
(26, 'Mercedes', 'mercedes', '2021-07-26 14:08:08', '2021-07-26 14:08:08'),
(27, 'Ford Maverick', 'ford-maverick', '2021-07-26 14:11:16', '2021-07-26 14:11:16');

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
  `type` enum('user','brand','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vada Pfannerstill PhD', 'jayda.schmidt@example.com', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'vO8GZ0XrkW', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(2, 'Dr. Selmer Schoen DVM', 'samson.gorczany@example.net', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'V1CcuLjAQx', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(3, 'Prof. Roscoe Schmidt', 'charles44@example.com', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'fwJYILS3R4', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(4, 'Vida Feeney II', 'coralie.schowalter@example.com', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'zbr4pJhpBx', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(5, 'Dr. Elna Homenick', 'dach.idell@example.com', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'F2mVzjuscS', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(6, 'Shanny Greenfelder II', 'sfeeney@example.com', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', '0ifUlTBcnv', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(7, 'Neil Nicolas', 'rroob@example.com', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'yfgxllZAeq', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(8, 'Mrs. Catherine Hermann', 'goyette.lea@example.net', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'pRu6KVn2IH', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(9, 'Mrs. Hosea Ryan DVM', 'leilani.kertzmann@example.org', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'CBifxx1ITV', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(10, 'Lorenzo Beer', 'bette72@example.com', '2021-07-17 17:02:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', '4mhpHuBTgE', '2021-07-17 17:02:27', '2021-07-17 17:02:27'),
(11, 'khadija shafei', 'khadoj121998@gmail.com', '2021-08-06 12:57:36', '$2y$10$XRr7z2/ZiVrsQVmnKqpw7usmR3WFTKuSOox3f.wtQokyUmmynwCmG', 'admin', 'phsG3wVHsfKwF5pUEGAc77jun80WBD1jeKfbhwZYaI8OrU71YWpMHgELdVfY', '2021-07-23 16:38:11', '2021-08-06 12:57:36'),
(13, 'Ali', 'ali123@hotmail.com', NULL, '$2y$10$GqL84QzPOxpIYngBaGRt6.rIGajHXWPlQnRmYqNk556YhCNvz1eOG', 'user', NULL, '2021-07-23 18:38:55', '2021-07-23 18:38:55'),
(16, 'khadija shafei', 'khadoja1112@hotmail.com', NULL, '$2y$10$qfN1zOxFa5TAb5FAr2Il8ui7fJcRKiHMxExm7rj/dwIuDy4ybPwYS', 'user', NULL, '2021-08-06 12:45:30', '2021-08-06 12:45:30'),
(18, 'gg', 'kh@hotmail.com', '2021-08-06 12:55:58', '$2y$10$.kVDLcBZ3rqiDSpV5IbYf.KVkkp4d.0AhNqr3w8pD3iscZz/SAZ5.', 'user', NULL, '2021-08-06 12:51:50', '2021-08-06 12:55:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cars_slug_unique` (`slug`),
  ADD UNIQUE KEY `cars_licences_number_unique` (`licences_number`),
  ADD UNIQUE KEY `cars_car_number_unique` (`car_number`),
  ADD KEY `cars_parent_id_foreign` (`parent_id`);

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
-- Indexes for table `modells`
--
ALTER TABLE `modells`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modells_slug_unique` (`slug`),
  ADD KEY `modells_brand_id_foreign` (`brand_id`),
  ADD KEY `modells_car_id_foreign` (`car_id`);

--
-- Indexes for table `model_images`
--
ALTER TABLE `model_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_images_modell_id_foreign` (`modell_id`);

--
-- Indexes for table `model_tag`
--
ALTER TABLE `model_tag`
  ADD PRIMARY KEY (`modell_id`,`tag_id`),
  ADD KEY `model_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `modells`
--
ALTER TABLE `modells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `model_images`
--
ALTER TABLE `model_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `cars` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `modells`
--
ALTER TABLE `modells`
  ADD CONSTRAINT `modells_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `modells_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `model_images`
--
ALTER TABLE `model_images`
  ADD CONSTRAINT `model_images_modell_id_foreign` FOREIGN KEY (`modell_id`) REFERENCES `modells` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_tag`
--
ALTER TABLE `model_tag`
  ADD CONSTRAINT `model_tag_modell_id_foreign` FOREIGN KEY (`modell_id`) REFERENCES `modells` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `model_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

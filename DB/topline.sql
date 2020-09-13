-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 10:10 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topline`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `mobile`, `mobile2`, `telephone`, `email`, `license`, `web`, `address`, `image`, `created_at`, `updated_at`) VALUES
(6, 'TopLine', '0175557777', '55555555555', '5555555', 'abu@gmail.com', '5656', 'topline.com.bd', 'fggfgfhghg', 'public/image/5dada97abd4a459777608-software-development-programmer-working-on-computer-programming-mechanism-concept-.jpg', NULL, '2019-10-21 06:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oncall` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `vendor_id`, `name`, `qualification`, `speciality`, `time`, `onday`, `offday`, `image`, `oncall`, `chamber`, `free`, `created_at`, `updated_at`) VALUES
(1, 15, 'Dr Farhana', 'Ismail GS', 'surgery', '12PM - 2PM & 7PM - 9PM', NULL, NULL, 'public/image/5dc940948752edownload (1).jpg', '0', '1', NULL, '2019-11-11 11:05:56', '2019-11-14 14:27:58'),
(2, 15, 'Mr. Mamun', 'MBBS ,FCPS', 'orthopedic, medicine', 'friday 12-23', 'everyday', 'friday', 'public/image/5dc94c596fba2drkarim.jpg', '0', '1', NULL, '2019-11-11 11:11:48', '2019-11-11 15:33:08'),
(4, 10, 'Dr Monika BRB', 'Brb', 'heart, medicine,', 'friday 12-23', 'everyday', 'friday', 'public/image/5dc9677d3e9b7fff.jpg', '1', '1', NULL, '2019-11-11 13:51:57', '2019-11-11 13:52:40'),
(5, 10, 'Dr  Aasana BRB', 'Ismail', 'surgery', 'friday 12-23', 'everyday', 'friday', 'public/image/5dc9679cd4cb6rtrf.jpg', '0', '1', NULL, '2019-11-11 13:52:28', '2019-11-11 13:52:28'),
(6, 14, 'Dr Raihan SQR', 'MBBS', 'orthopedic, medicine', 'friday 12pm-3pm', 'Friday-Wednersday', 'Thursday', 'public/image/5dc9682e69c7brtrf.jpg', '0', '1', NULL, '2019-11-11 13:54:54', '2019-11-11 13:54:54'),
(7, 14, 'Dr sharif', 'MBBS ,FCPS', 'heart, medicine,', 'friday 12-23', 'everyday', NULL, 'public/image/5dc9684633d88drkarim.jpg', '0', '1', NULL, '2019-11-11 13:55:18', '2019-11-11 13:55:18'),
(8, 15, 'Dr. A K M Shafiqul Islam', 'MBBS (DMC), BCS (Health), MCPS (Medicine), FCPS (Medicine), MD (Gastroenterology). Member, American College of Physicians (USA)', 'Medicine & interventional gastroenterologist, Consultant, 250 Bed Zilla Sadar Hospital, Brahmanbaria', '6:00 AM - 7:00 AM and 2:00 PM - 8:00 PM', NULL, NULL, 'public/image/5dc97bb1ed8eefe.jpg', '1', '0', NULL, '2019-11-11 15:18:09', '2019-11-14 14:28:03'),
(9, 15, 'Mr.Symex It ltd.', 'MBBS', 'orthopedic, medicine', '12PM - 2PM & 7PM - 9PM', 'Friday-Wednersday', 'Thursday', 'public/image/5dc97f51554b5rtrf.jpg', '1', '1', NULL, '2019-11-11 15:33:37', '2019-11-11 15:33:59'),
(10, 16, 'DR.  ISLAM', 'MBBS (DMC), BCS (Health), MCPS (Medicine), FCPS (Medicine), MD (Gastroenterology).', 'Medicine & interventional gastroenterologist,', '12PM - 2PM & 7PM - 9PM', 'Monday-Friday', 'Saturday,Sunday', 'public/image/5dca970473585fe.jpg', '0', '0', NULL, '2019-11-12 11:27:00', '2019-11-12 11:33:09'),
(11, 16, 'Dr. Monir', 'MBBS, FCPS (Heart)', 'Heart', '6:00 AM - 7:00 AM and 2:00 PM - 8:00 PM', 'everyday', 'Thursday', 'public/image/5dca976ac6e78drkarim.jpg', '1', '1', NULL, '2019-11-12 11:28:42', '2019-11-12 11:53:05'),
(12, 16, 'Dr Raisa Ismail', 'MBBS ,FCPS, MD', 'Monologist', '12PM - 2PM & 7PM - 9PM', NULL, 'Thursday', 'public/image/5dca97a6cd70dfff.jpg', '0', '1', NULL, '2019-11-12 11:29:42', '2019-11-12 11:53:43'),
(13, 18, 'Mr. Mamun', 'MBBS (DMC),BCS (Health) ,MCPS (Medicine), FCPS(Medicine), MD (Gastroenterology).Member, American College of Physicians(USA)', 'orthopedic, medicine', '12PM - 2PM & 7PM - 9PM', 'everyday', NULL, 'public/image/5dcaa67880506fe.jpg', '0', '0', NULL, '2019-11-12 12:32:56', '2019-11-12 12:51:10'),
(14, 18, 'Dr Farhana', 'MBBS (DMC),BCS (Health) ,MCPS (Medicine), FCPS(Medicine), MD (Gastroenterology).Member, American College of Physicians(USA)', 'Medicine & interventional gastroenterologist, Consultant, 250 Bed Zilla Sadar Hospital, Brahmanbaria', '12PM - 2PM & 7PM - 9PM', NULL, 'friday', 'public/image/5dcaa6a163f83fff.jpg', '0', '1', NULL, '2019-11-12 12:33:37', '2019-11-12 12:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_categories`
--

CREATE TABLE `doctor_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_categories`
--

INSERT INTO `doctor_categories` (`id`, `doctor_category`, `created_at`, `updated_at`) VALUES
(1, 'Anesthesiology', '2019-11-21 09:38:47', '2019-11-21 09:39:40'),
(2, 'Dermatology', '2019-11-21 09:39:54', '2019-11-21 09:39:54'),
(3, 'medicine', '2019-11-21 09:40:09', '2019-11-21 09:40:09'),
(4, 'Neuroradiology', '2019-11-21 10:24:03', '2019-11-21 10:24:03'),
(5, 'Cardiothoracic', '2019-11-21 10:24:29', '2019-11-21 10:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_chambers`
--

CREATE TABLE `doctor_chambers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oncall` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_chambers`
--

INSERT INTO `doctor_chambers` (`id`, `doctor_id`, `hospital_id`, `time`, `onday`, `offday`, `chamber`, `oncall`, `free`, `created_at`, `updated_at`) VALUES
(3, '20', '14', '12PM - 2PM & 7PM - 9PM', 'Saturday,Sunday,Monday-Friday(3.00 PM)', 'Saturday', '0', '1', NULL, '2019-11-13 11:35:14', '2019-11-13 14:24:43'),
(4, '20', '18', 'friday 12-23', 'everyday', 'Saturday,Sunday', '0', '1', NULL, '2019-11-13 11:35:40', '2019-11-13 14:24:41'),
(5, '20', '10', 'friday 12pm-3pm', 'Saturday,Sunday,Monday-Friday(3.00 PM)', NULL, '0', '0', NULL, '2019-11-13 11:35:52', '2019-11-13 14:37:39'),
(6, '20', '15', 'friday 12pm-3pm', 'everyday', NULL, '0', '0', NULL, '2019-11-13 12:42:29', '2019-11-13 14:37:41'),
(7, '21', '18', 'friday 12-23', 'Friday-Wednersday', 'Thursday', '0', '1', NULL, '2019-11-13 16:19:04', '2019-11-13 16:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_categories`
--

CREATE TABLE `grocery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grocery_categories`
--

INSERT INTO `grocery_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Potatos', '2019-11-23 12:46:52', '2019-11-25 13:50:46'),
(3, 'Rice', '2019-11-23 12:47:04', '2019-11-25 13:47:27'),
(5, 'Drink', '2019-11-25 13:47:15', '2019-11-25 13:47:15'),
(6, 'Shap', '2019-11-25 13:48:20', '2019-11-25 13:48:20'),
(7, 'Cake', '2019-11-25 13:48:45', '2019-11-25 13:48:45'),
(8, 'Corn', '2019-11-25 13:48:58', '2019-11-25 13:48:58'),
(9, 'Egg', '2019-11-25 13:49:04', '2019-11-25 13:49:04'),
(10, 'Dairy', '2019-11-25 13:50:18', '2019-11-25 13:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_menus`
--

CREATE TABLE `grocery_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grocery_menus`
--

INSERT INTO `grocery_menus` (`id`, `menu`, `icon`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Rice', 'fa fa-cubes', '2', '2019-11-23 12:29:33', '2019-12-02 16:20:41'),
(3, 'Shoe', 'fa fa-database', '21', '2019-11-23 12:32:30', '2019-12-02 16:22:42'),
(4, 'Dal', 'fa fa-shopping-basket', '1', '2019-11-23 12:32:42', '2019-12-02 16:24:08'),
(6, 'Oil', 'fa fa-coffee', '2', '2019-11-23 12:34:12', '2019-12-02 16:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `grocery_products`
--

CREATE TABLE `grocery_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grocery_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grocery_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grocery_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortdescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longdescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grocery_products`
--

INSERT INTO `grocery_products` (`id`, `grocery_id`, `grocery_category`, `grocery_menu`, `product_name`, `price`, `sortdescription`, `longdescription`, `thumbnail`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '24', '3', '4', 'Basmoti Rice', '550', 'hello test', 'hello test hello test hello test', 'public/image/5ddbe3ecde054dd.PNG', 'public/image/5ddbe3ecddb61Beef-loin.jpg', '1', '2019-11-25 14:23:40', '2019-12-02 08:35:40'),
(3, '24', '6', '1', 'Vim bar', '23', 'hello', 'hi', 'public/image/5ddbf377edee5Beef-loin.jpg', 'public/image/5ddbf377edb76download (8).jpg', '1', '2019-11-25 15:29:59', '2019-11-25 15:32:16'),
(4, '22', '3', '1', 'Najirsal  5Kg', '250', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of \"what an entity is\" and thus defines both its essence and nature of its characteristics', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of \"what an entity is\" and thus defines both its essence and nature of its characteristi', 'public/image/5e202abf2ed8fdownload.jpg', 'public/image/5e202abf2eb8eimages.jpg', '1', '2020-01-16 09:19:59', '2020-01-16 09:19:59'),
(5, '22', '5', '6', 'Rupchada 5 liter', '550', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of \"what an entity is\" and thus defines both its essence and nature of its characteristics', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of \"what an entity is\" and thus defines both its essence and nature of its characteristics', 'public/image/5e202b3299581download (1).jpg', 'public/image/5e202b32992d8rupchada.jpg', '1', '2020-01-16 09:21:54', '2020-01-16 09:21:54'),
(6, '22', '8', '3', 'Leder Shoe', '2300', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of \"what an entity is\" and thus defines both its essence and nature of its characteristics', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of \"what an entity is\" and thus defines both its essence and nature of its characteristics', 'public/image/5e202b5d7ced9download (2).jpg', 'public/image/5e202b5d7c557dg-319-red-spider-sports-6-digitrendzz-red-original-imafehyf2gfpbuj4.jpeg', '1', '2020-01-16 09:22:37', '2020-01-16 09:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_services`
--

CREATE TABLE `hospital_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospital_services`
--

INSERT INTO `hospital_services` (`id`, `vendor`, `service_name`, `created_at`, `updated_at`) VALUES
(2, '15', 'Cyan Group', '2019-11-12 10:26:50', '2019-11-12 10:42:53'),
(3, '15', 'Test Lab', '2019-11-12 10:46:16', '2019-11-12 10:46:16'),
(4, '15', 'ICU', '2019-11-12 10:46:29', '2019-11-12 10:46:29'),
(5, '15', 'Vaccine Center', '2019-11-12 10:46:47', '2019-11-12 10:47:19'),
(6, '15', 'Pharmacy', '2019-11-12 10:47:09', '2019-11-12 10:47:09'),
(7, '15', 'Bed Category', '2019-11-12 10:47:29', '2019-11-12 10:47:29'),
(8, '15', 'Blood Bank', '2019-11-12 10:47:41', '2019-11-12 10:47:41'),
(9, '15', 'Surgery', '2019-11-12 10:47:50', '2019-11-12 10:47:50'),
(10, '10', 'Mr.Symex It ltd.', '2019-11-12 10:53:40', '2019-11-12 10:53:40'),
(11, '10', 'surgery', '2019-11-12 10:54:56', '2019-11-12 10:54:56'),
(12, '10', 'OT', '2019-11-12 10:55:04', '2019-11-12 10:55:04'),
(13, '10', 'Blood Bank', '2019-11-12 10:55:15', '2019-11-12 10:55:15'),
(14, '16', 'surgery', '2019-11-12 11:54:24', '2019-11-12 11:54:24'),
(15, '16', 'Lab Test', '2019-11-12 11:54:31', '2019-11-12 11:54:31'),
(16, '16', 'Pharmacy', '2019-11-12 11:54:43', '2019-11-12 11:54:43'),
(17, '18', 'Test Lab', '2019-11-12 12:34:16', '2019-11-12 12:34:16'),
(18, '18', 'Blood Bank', '2019-11-12 12:34:26', '2019-11-12 12:34:26'),
(19, '18', 'OT & Xray', '2019-11-12 12:34:38', '2019-11-12 12:35:21'),
(20, '18', 'ICU', '2019-11-12 12:34:44', '2019-11-12 12:34:44'),
(21, '18', 'NICU', '2019-11-12 12:34:56', '2019-11-12 12:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu`, `icon`, `sort`, `free`, `created_at`, `updated_at`) VALUES
(2, 'Lunch', 'fa fa-cutlery', '2', NULL, '2019-11-15 12:24:05', '2019-11-17 14:05:33'),
(3, 'Dinner', 'fa fa-coffee', '3', NULL, '2019-11-15 12:24:27', '2019-11-17 14:05:38'),
(4, 'Breakfast', 'fa fa-beer', '1', NULL, '2019-11-15 12:26:05', '2019-11-17 14:05:27');

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
(3, '2019_08_30_111027_create_permission_tables', 2),
(4, '2019_09_14_101605_create_companies_table', 3),
(5, '2019_10_19_135823_create_services_table', 4),
(6, '2019_10_22_092727_create_top_users_table', 5),
(7, '2019_10_22_092819_create_vendors_table', 5),
(8, '2019_10_22_103645_create_vendors_table', 6),
(9, '2019_10_22_111518_create_vendors_table', 7),
(10, '2016_06_01_000001_create_oauth_auth_codes_table', 8),
(11, '2016_06_01_000002_create_oauth_access_tokens_table', 8),
(12, '2016_06_01_000003_create_oauth_refresh_tokens_table', 8),
(13, '2016_06_01_000004_create_oauth_clients_table', 8),
(14, '2016_06_01_000005_create_oauth_personal_access_clients_table', 8),
(15, '2019_11_11_163723_create_doctors_table', 9),
(16, '2019_11_12_161613_create_hospital_services_table', 10),
(17, '2019_11_13_170236_create_doctor_chambers_table', 11),
(18, '2019_11_15_180916_create_menus_table', 12),
(19, '2019_11_15_194949_create_restaurent_categories_table', 13),
(20, '2019_11_17_150320_create_restaurent_products_table', 14),
(21, '2019_11_21_152712_create_doctor_categories_table', 15),
(22, '2019_11_23_181450_create_grocery_menus_table', 16),
(23, '2019_11_23_184144_create_grocery_categories_table', 17),
(24, '2019_11_25_200016_create_grocery_products_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'kefmwjZq0f9jB7YfOG9rfwaq9eXnGXis8lvfgE9e', 'http://localhost', 1, 0, 0, '2019-10-29 09:55:30', '2019-10-29 09:55:30'),
(2, NULL, 'Laravel Password Grant Client', 'bUtMkAqBmedf4Byldk0Kus2c0XZOzC52bBf3whge', 'http://localhost', 0, 1, 0, '2019-10-29 09:55:30', '2019-10-29 09:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-10-29 09:55:30', '2019-10-29 09:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nurul.sayeed.dev@gmail.com', '$2y$10$36CVLrX6vtjpU1N2RKbLkuwiXKpfcZ.dvlf/5FLvA1mIk5FKAgRxu', '2019-10-10 08:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurent_categories`
--

CREATE TABLE `restaurent_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurent_categories`
--

INSERT INTO `restaurent_categories` (`id`, `name`, `free`, `created_at`, `updated_at`) VALUES
(2, 'Barger', NULL, '2019-11-15 14:18:50', '2019-11-15 14:18:50'),
(3, 'Rice', NULL, '2019-11-15 14:18:57', '2019-11-15 14:18:57'),
(4, 'Meet', NULL, '2019-11-15 14:19:03', '2019-11-15 14:19:03'),
(5, 'FastFood', NULL, '2019-11-15 14:19:16', '2019-11-15 14:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent_products`
--

CREATE TABLE `restaurent_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurent_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortdescription` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longdescription` varchar(8255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurent_products`
--

INSERT INTO `restaurent_products` (`id`, `restaurent_id`, `product_category`, `menu`, `product_name`, `price`, `sortdescription`, `longdescription`, `thumbnail`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '12', '5', '2,4', 'Khachi', '150', NULL, NULL, 'public/image/5dd11bac3a68699629544-hen-heart-shape-vector-logo-design-logo-sign-icon-for-groceries-meat-stores-butcher-shop-farmer-mark.jpg', 'public/image/5dd11bac3a47666213448_2368675410057685_5221485204530528256_o.jpg', '1', '2019-11-17 10:06:36', '2019-11-22 12:36:42'),
(3, '12', '4', '2', 'Beef Cow', '550', 'Definition of detail (Entry 2 of 2) transitive verb. 1 : to report minutely and distinctly : to report with close attention to small elements : specify detailed their grievances wrote a letter detailing her vacation. 2 : to assign to a particular task was detailed to another unit during maneuvers', 'Definition of detail (Entry 2 of 2) transitive verb. 1 : to report minutely and distinctly : to report with close attention to small elements : specify detailed their grievances wrote a letter detailing her vacation. 2 : to assign to a particular task was detailed to another unit during maneuversDefinition of detail (Entry 2 of 2) transitive verb. 1 : to report minutely and distinctly : to report with close attention to small elements : specify detailed their grievances wrote a letter detailing her vacation. 2 : to assign to a particular task was detailed to another unit during maneuversDefinition of detail (Entry 2 of 2) transitive verb. 1 : to report minutely and distinctly : to report with close attention to small elements : specify detailed their grievances wrote a letter detailing her vacation. 2 : to assign to a particular task was detailed to another unit during maneuvers', 'public/image/5dd7d4a99c5b4download (8).jpg', 'public/image/5dd126af81475Beef-loin.jpg', '1', '2019-11-17 10:53:35', '2019-11-25 10:26:08'),
(4, '12', '3', '4', 'Basmoti Rice', '23', 'Its good Quality', 'Its Best Quality', 'public/image/5dd137739d9fadownload (9).jpg', 'public/image/5dd137739d6e3delish-u-rice-2-1529079587.jpg', '1', '2019-11-17 12:05:07', '2019-11-25 12:34:34'),
(11, '23', '3', '3,4', 'Barger', '123', 'fgsdgf', 'fggfgf', 'public/image/5dd1734469fe5Beef-loin.jpg', 'public/image/5dd1734469d56Capture.PNG', '1', '2019-11-17 16:20:20', '2019-11-17 16:20:20'),
(12, '23', '2', '2,3', 'tr', '123', 'rt', 'rt', 'public/image/5dd1738dd57d4Beef-loin.jpg', 'public/image/5dd1738dd55e7Capture.PNG', '0', '2019-11-17 16:21:33', '2019-11-17 16:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Restaurent=2 Groceries=7 Hospital=3 Doctors=4 Tour & Travels=5',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `slug`, `slider`, `sort`, `status`, `created_by`, `update_by`, `created_at`, `updated_at`) VALUES
(2, 'Restaurant', 'fa fa-coffee', 'restaurant', 'public/image/5dbd552bcffea3523-ACH-Restaurant-slider-images_0013.jpg', '2', '1', '1', '1', '2019-10-21 05:13:25', '2019-11-15 12:04:55'),
(3, 'Hospital', 'fa fa-bed', 'hospital', 'public/image/5dbd5520b674cslider_speciality.jpg', '3', '1', '1', '1', '2019-10-21 05:13:50', '2019-11-15 10:05:21'),
(4, 'Doctors', 'fa fa-stethoscope', 'Doctors', 'public/image/5dbd547cc24f2slider-doctors.jpg', '4', '1', '1', '1', '2019-10-21 08:11:55', '2019-11-15 10:12:01'),
(5, 'Tour & Travels', 'fa fa-map-marker', 'Tour&Travels', 'public/image/5dbd5534ea067slider4.jpg', '5', '1', '1', '1', '2019-10-24 12:05:57', '2019-11-15 10:05:35'),
(7, 'Groceries', 'fa fa-shopping-basket', NULL, 'public/image/5dce7844af102seth-g-online-grocery-store-jhotwara-jaipur-online-shopping-websites-r97og.jpg', '1', '1', '1', '1', '2019-11-15 10:04:52', '2019-11-15 10:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `top_users`
--

CREATE TABLE `top_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roleid` int(11) DEFAULT NULL COMMENT 'admin=1 vendor=2 guest=3 verify=4',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joindate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `top_users`
--

INSERT INTO `top_users` (`id`, `login_id`, `name`, `mobile`, `email`, `gender`, `address`, `password`, `type`, `roleid`, `status`, `customer_status`, `image`, `joindate`, `nid`, `free`, `free1`, `remember`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '20190653', 'BRB Hospital', '0131871278', 'admin@gmail.com', NULL, NULL, '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Vendor', 2, '1', NULL, NULL, '2019-10-22', '1234579564', NULL, NULL, NULL, 'admin', 'admin', '2019-10-22 15:06:53', '2019-10-31 15:50:07'),
(2, '20191002', 'Bangladesh Hospital', '01318712782', 'admin@gmail.com', NULL, NULL, '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Vendor', 2, '1', NULL, NULL, '2019-10-22', '1111111', NULL, NULL, NULL, 'admin', 'admin', '2019-10-22 15:10:03', '2019-11-01 12:57:54'),
(3, '20190431', 'Milon', '019', 'admin@gmail.com', NULL, NULL, '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Vendor', 2, '1', NULL, NULL, '2019-10-23', '1234579564', NULL, NULL, NULL, 'admin', 'admin', '2019-10-23 11:04:32', '2019-10-24 11:53:36'),
(4, '20190822', 'Nur Mia', '013187123782', 'admin@gmail.com', NULL, NULL, '$2y$10$GiYO/b.vqpbQMB0Ze0Ckt.dt72PkPw4KANDJnKXTRKhZpahTzQCui', 'Vendor', 2, '1', NULL, NULL, '2019-10-24', '1234579564', NULL, NULL, NULL, 'admin', 'admin', '2019-10-24 12:08:22', '2019-10-24 12:10:02'),
(6, '20190647', 'Ismail Sarker', '017', 'admin2@gmail.com', NULL, 'Dhaka-Uttara-1223', '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Admin', 1, '1', NULL, 'public/image/5dcd262f54c8edownload (6).jpg', '2019-10-24', NULL, NULL, NULL, NULL, 'admin', 'admin', '2019-10-24 13:06:47', '2019-11-14 10:05:02'),
(13, '20193309', 'Sayeed', '234562345', 'admin@gmail.com', NULL, 'mirpur 1212 house', '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Vendor', 2, '1', NULL, NULL, '2019-10-27', '43546545', NULL, NULL, NULL, 'admin', 'admin', '2019-10-27 10:33:09', '2019-11-10 15:19:11'),
(14, '51472019', 'Ismail Sarker', '01876354387', 'ismail@gmail.com', 'Male', NULL, '$2y$10$JHQ3Xdo.Fpr6tK3ElPVOh.e6juXV9WZ6eV/AoyrkTNu3vMshtNgEi', 'Guest', 3, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-31 08:51:48', '2019-10-31 08:51:48'),
(15, '38352019', 'New User', NULL, 'new@gmail.com', 'Male', NULL, '$2y$10$oSZBxH3Y1B7b4E8OqgPyS.qhUaPkqz7rPjFyGcnOkro05pmV0iN.e', 'Guest', 3, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-01 11:38:36', '2019-11-01 11:38:36'),
(16, '39412019', 'Ismail Sarker', '3333333333333', 'admin@gmail.com', 'Male', NULL, '$2y$10$ADd9AleESTFpWb6aTHJUrO3hQ1VuKROo30AJHjVX0sX5rmL4uDqDG', 'Guest', 3, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-01 11:39:41', '2019-11-01 11:39:41'),
(17, '41522019', 'Cyan Group', '3434545', 'admin@gmail.com', 'Male', NULL, '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Guest', 3, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-01 13:41:52', '2019-11-01 13:41:52'),
(22, '20192130', 'Malik Mollik', '0198345643', 'admin@gmail.com', NULL, 'Green Road, Dhaka 1212', '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Vendor', 2, '1', NULL, NULL, '2019-11-02', '1111', NULL, NULL, NULL, 'admin', 'admin', '2019-11-02 10:21:30', '2019-11-02 10:21:30'),
(23, '09572019', 'sarkar', '111', 'admin@gmail.com', 'Male', NULL, '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Guest', 3, '1', NULL, 'public/image/5dcaa330abcc1drkarim.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2019-11-09 12:09:57', '2019-11-12 12:18:56'),
(28, '20192650', 'Tofial Islam', '01720121932', 'info@gmail.com', NULL, 'paikpara, B.Baria', '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Vendor', 2, '1', NULL, NULL, '2019-11-12', '1111', NULL, NULL, NULL, 'admin', 'admin', '2019-11-12 12:26:50', '2019-11-12 12:26:50'),
(30, '20195508', 'Ismail', '1414', 'new@gmail.com', NULL, 'Dhaka-Uttara-1223', '$2y$10$HrhZXn6NbXlIj7NHBjUPbupyGX8urml/vRY47/VjmQYM3hrsjwqu6', 'Vendor', 2, '1', NULL, NULL, '2019-11-12', '434', NULL, NULL, NULL, 'admin', 'admin', '2019-11-12 13:55:09', '2019-11-12 13:55:09'),
(31, '20191050', 'Mahmud Islam', '1515', 'mahnud@gmail.com', NULL, 'Dhaka-Uttara-1223', '$2y$10$7R0fp4.d.Dr4DyGVHKlKGu5820RJTYPbsuG500JsvmIL1i4xFG9J2', 'Vendor', 2, '1', NULL, NULL, '2019-11-13', '54545', NULL, NULL, NULL, 'admin', 'admin', '2019-11-13 16:10:50', '2019-11-13 16:10:50'),
(32, '20190334', 'Mohsin', '01720', 'admin@gmail.com', NULL, 'Dhaka-Uttara-1223', '$2y$10$1pmXl9dM.pzmLvwVL9pyc.eqwi3wuldjo.b1XVz17mTjAefQBnrI2', 'Admin', 1, '1', NULL, 'public/image/5dcd2676525e5download (6).jpg', '2019-11-14', NULL, NULL, NULL, NULL, 'admin', 'admin', '2019-11-14 10:03:34', '2019-11-14 10:03:34'),
(35, '58392019', 'sayeed', '1616', 'admin@gmail.com', 'Male', NULL, '$2y$10$I8UdFBGDcuJ30nKHZ0JY3uFYlD9mqa9kTLtMIdAkw25F.GALlwVqO', 'Guest', 3, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-14 10:58:39', '2019-11-14 10:58:39'),
(36, '20192208', 'Azad Khan', '77', 'admin@gmail.com', NULL, 'Dhaka-Uttara-1223', '$2y$10$KXYSdBvmZ3n25NwuCuYI2.17HXhsy4JEEXTPoedlfrTkiWTG5SifK', 'Vendor', 2, '1', NULL, NULL, '2019-11-15', '1111111', NULL, NULL, NULL, 'admin', 'admin', '2019-11-15 10:22:08', '2019-11-15 10:22:08'),
(37, '20190951', 'Sayeed', '01798', 'new@gmail.com', NULL, 'mirpur 1212 house', '$2y$10$jMnyT8NH6440OHhzvJ4qV.JIMjCeWYo3tS44woGciGwlbVUFr5sUW', 'Vendor', 2, '1', NULL, NULL, '2019-11-17', '434', NULL, NULL, NULL, '32', '32', '2019-11-17 14:09:51', '2019-11-17 14:09:51'),
(39, '20191001', 'Sayeed', '2121', 'admin@gmail.com', NULL, 'mirpur 1212 house', '$2y$10$Z/RPiEMetH.DgeXSJARUfuDsYgeQK.rmohwyRjY7jrqGTvSP2eMDC', 'Vendor', 2, '1', NULL, NULL, '2019-11-18', '43546545', NULL, NULL, NULL, '32', '32', '2019-11-18 10:10:01', '2019-11-18 10:10:01'),
(40, '22282019', 'TopLine', '34443', 'admin@gmail.com', 'Female', 'mirpur 1212 house', '$2y$10$W67Fwz.3MgrS2LhZxLXmpe2sjQv97d0Kmsvxmg3r9V2tMetC/QiV6', 'Verified', 3, '1', NULL, 'public/image/5de536380fce899629544-hen-heart-shape-vector-logo-design-logo-sign-icon-for-groceries-meat-stores-butcher-shop-farmer-mark.jpg', NULL, '3565656', NULL, NULL, NULL, NULL, NULL, '2019-11-18 10:22:28', '2019-12-02 16:05:12'),
(41, '51302019', 'Dr Farhana', '444', NULL, 'Female', 'Dhaka-Uttara-1223', '$2y$10$e.GV9zW0paKBrtgjLeOMbuXQqwVIJxi5Y98iNhHND69gmGMHI7jqu', 'Verified', 3, '1', NULL, 'public/image/5de52b3c97590A0322422.jpg', '2019-12-02', '43546545', NULL, NULL, NULL, NULL, NULL, '2019-12-02 14:51:30', '2019-12-23 10:15:59');

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
(1, 'Symex It ltd.', 'admin@gmail.com', NULL, '$2y$10$JqnfsWRB8dZ2.sATMtOf8uK0qrh11cONT8TuXuBmJ3Vkye9DNzsTS', 'PGYb7Ah1g31IPREbbxnwnTfm5vDMznRRicM9HMRFKVxv2ZPoNymYVKUDSkA1', '2019-08-30 05:18:55', '2019-08-30 05:18:55'),
(2, 'Sayeed khan', 'nurul.sayeed.dev@gmail.com', NULL, '$2y$10$jDlZHsm6dpqnabnCiAPpK.QnXUz/hRcRdTRkIoP1pUo9HlIp0o8I2', NULL, '2019-10-10 08:40:22', '2019-10-10 08:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agr_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Contact_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joindate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `openday` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opentime` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closeday` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closetime` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sortdescription` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longdescription` varchar(4000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `service_id`, `vendor_name`, `vendor_logo`, `Pro_name`, `mobile`, `email`, `user_id`, `nid`, `tin`, `bank`, `address`, `agreement`, `agr_date`, `contact_name`, `Contact_mobile`, `slider`, `map`, `joindate`, `password`, `created_by`, `updated_by`, `total_view`, `vendor_id`, `slug`, `special`, `openday`, `opentime`, `closeday`, `closetime`, `sortdescription`, `longdescription`, `created_at`, `updated_at`) VALUES
(10, '3', 'BRB Hospital', 'public/image/5dbc25e46de46download (1).jpg', 'BRB Hospital', '01318712782', 'admin@gmail.com', '1', '1234579564', '1', '121314', 'dhanmondi dhaka', 'public/image/5daf1b0d0ff48fortune.png', '2019-10-22', 'BRB Hos', '4444444444', 'public/image/5dc96721be5a0fff.jpg', NULL, '2019-10-22', '$2y$10$EdppV6a.Gfa7p8G6YSpU..6H2pF53tR0BeRwJh.48FOXLGp73uoNe', '6', '6', NULL, '20190653', 'brbhospital', 'head,cergary,medichine brb', 'mon-friday', '9AM-5PM', 'Hotline', '01750758262', 'BRB', 'Hello BRB', '2019-10-22 15:06:53', '2019-11-11 13:50:57'),
(11, '4', 'Mahmudul islam', 'public/image/5dcab8d9a84dfA0322422.jpg', 'Bangladesh Hospital', '01318712782', 'admin@gmail.com', '2', '111166', '12', '1214565', 'Dhaka-Uttara-1223', 'public/image/5db07ae2a44a6mirzapore.png', '2019-10-22', 'BRB Hos', '37', 'public/image/5dcc2e9d2b4ddimages (3).jpg', NULL, '2019-10-22', '$2y$10$lcOzTWdQveHOmYLplD5jjO/l1zofOFxes2Pzjjm7KTSvUyyBHV/Wa', '6', '6', NULL, '20191002', 'drmahmudul', 'Heart Specialist', 'mon-friday', NULL, NULL, NULL, 'Find website slider stock images in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new Find website slider stock images in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new', 'Find website slider stock images in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new Find website slider stock images in HD and millions of other royalty-free stock photos, illustrations and vectors in the Shutterstock collection. Thousands of new', '2019-10-22 15:10:03', '2019-11-18 13:44:22'),
(12, '2', 'Silver Fork', 'public/image/5dcfca54e425c99629544-hen-heart-shape-vector-logo-design-logo-sign-icon-for-groceries-meat-stores-butcher-shop-farmer-mark.jpg', 'Milon', '01968949468', 'admin@gmail.com', '3', '1234579564', '2', '12131466', 'Green Road, Dhaka 1212', 'public/image/5db033bfde035pdf.pdf', '2019-10-23', 'Reza', '14', 'public/image/5dcfcca122bc8wp1874156.jpg', NULL, '2019-10-23', '$2y$10$xJDQVq3qjOAKGh3OkD4z0uH73jSL83u/VC1Gy4wPaIIZMPndJ6vD.', '6', '6', NULL, '20190431', 'sliverfork', 'Fastfood & Bakery', 'EveryDay', '9AM-5PM', 'Hotline', '01750758262', 'Breakfast Restaurants in Dhaka Division. Lunch Restaurants in Dhaka Division. Dinner Restaurants in Dhaka Division. Bakeries in Dhaka Division.', 'Breakfast Restaurants in Dhaka Division. Lunch Restaurants in Dhaka Division. Dinner Restaurants in Dhaka Division. Bakeries in Dhaka Division. Buffet Restaurants in Dhaka Division. Coffee & Tea in Dhaka Division. Desserts in Dhaka Division. Food Delivery Restaurants in Dhaka Division.', '2019-10-23 11:04:32', '2019-11-18 13:48:42'),
(13, '5', 'Nur\'s Tour & Travels', 'public/image/5db1943600e35alu.png', 'Nur Mia', '01318712782', 'admin@gmail.com', '4', '1234579564', NULL, '121314', 'Green Road, Dhaka 1212', 'public/image/5db1943600be1nido.png', '2019-10-24', NULL, NULL, NULL, NULL, '2019-10-24', '$2y$10$OtLoPx0JFfjoRx613A7NTOGxCUAgJ7/el0S1G44n3hgN.Rzg8PSCu', '6', '6', NULL, '20190822', 'noortour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-24 12:08:22', '2019-11-02 11:45:31'),
(14, '3', 'Square Hospital', 'public/image/5dc82a7aab66edownload.png', 'Sayeed', '234562345', 'admin@gmail.com', '13', '43546545', NULL, NULL, 'mirpur 1212 house', 'public/image/5db57265429c159777608-software-development-programmer-working-on-computer-programming-mechanism-concept-.jpg', '2019-10-10', 'Saiful', NULL, 'public/image/5dc834563c04c3523-ACH-Restaurant-slider-images_0013.jpg', NULL, '2019-10-27', '$2y$10$is4Isw4RM5IJP1I0wivWqumbo6FDg91Gyr5aX4hNf7pWokbH.1rIC', '6', '6', NULL, '20193309', 'Square', 'head,cergary,medichine', 'mon-friday', '9AM-5PM', 'Hotline', '01750758262', 'A hospital is a health care institution providing patient treatment with specialized medical and nursing staff and medical equipment.', 'A hospital is a health care institution providing patient treatment with specialized medical and nursing staff and medical equipment.A hospital is a health care institution providing patient treatment with specialized medical and nursing staff and medical equipment.A hospital is a health care institution providing patient treatment with specialized medical and nursing staff and medical equipment.', '2019-10-27 10:33:09', '2019-11-15 15:47:42'),
(15, '3', 'Ibn sina hospital', 'public/image/5dbd58aa3f5dfddddd.jpg', 'Malik Mollik', '0198345643', 'admin@gmail.com', '22', '1111', NULL, '121314', 'Green Road, Dhaka 1212', 'public/image/5dbd58aa3f38cddddd.jpg', '2019-11-02', 'Saiful', '14', 'public/image/5dc976dd63728images (1).jpg', NULL, '2019-11-02', '$2y$10$nFy10K3xEpDYMwJMluCG7edXNr/PvdyfoghwnAqWmB3NzJYXjVsy2', '6', '6', NULL, '20192130', 'ibnsina', 'head,cergary,medichine brb', 'mon-friday', '9AM-5PM', 'Hotline', '01750758262', 'patient treatment with specialized medical and nursing staff and medical equipment.', 'patient treatment with specialized medical and nursing staff and medical equipment.', '2019-11-02 10:21:30', '2019-11-11 14:57:45'),
(18, '3', 'ShahJalal Diagonistic Center', 'public/image/5dcaa50a090dforganic-corn.jpg', 'Tofial Islam', '01720121932', 'info@gmail.com', '28', '1111', NULL, '121314', 'paikpara, B.Baria', 'public/image/5dcaa50a08e04fe.jpg', '2019-11-12', 'Mohsin', '01720121932', 'public/image/5dcaa72b227e4images (2).jpg', NULL, '2019-11-12', '$2y$10$OxZqFtQOkYNn1Y4b2keFkedbtnxz80tZh8urvMXlBc61b.BvCqVWO', '6', '6', NULL, '20192650', 'ShahjalalDC', NULL, 'EveryDay', '24 Hours', 'Hotline', '01750758262', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis qui aspernatur ad eaque reiciendis ipsum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis qui aspernatur ad eaque reiciendis ipsum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis qui aspernatur ad eaque reiciendis ipsum.', '2019-11-12 12:26:50', '2019-11-12 12:35:55'),
(20, '4', 'Ismail Sarker', 'public/image/5dcad52f227a6download (5).jpg', 'Ismail', '1414', 'new@gmail.com', '30', '434', NULL, '01670078232', 'Dhaka-Uttara-1223', 'public/image/5dcab9bcdbc7fCapture.PNG', '2019-11-12', 'Saiful', '10', 'public/image/5dcac99b904e9Capture.PNG', NULL, '2019-11-12', '$2y$10$vdgtDO1JBiFilSCejphAJuovUgv5ZFzyu6WGhQ21KzMgIW2yBNhhO', '6', '6', NULL, '20195508', 'ismailsarker', 'medicine,Neuroradiology,Cardiothoracic', 'MBBS', NULL, NULL, NULL, 'Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor.', 'Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor.Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor.', '2019-11-12 13:55:09', '2019-11-25 10:46:44'),
(21, '4', 'Dr.Md Mahmud Ahmad', 'public/image/5dcc2b0a31cf1doddwnload.jpg', 'Mahmud Islam', '1515', 'mahnud@gmail.com', '31', '54545', NULL, '01670078232', 'Dhaka-Uttara-1223', 'public/image/5dcc2b0a318f2Capture.PNG', '2019-11-13', 'Saiful', '9', 'public/image/5dcc2b9489d57images (2).jpg', NULL, '2019-11-13', '$2y$10$qWH56AEBR3m1MpibsdjRT.irwO.PojxMA2t8wbkvy2cARnkKNaaQ6', '6', '6', NULL, '20191050', 'mahmud', 'Heart Specialist & Cardilojist', 'MBBS', NULL, NULL, NULL, 'If you would like to perform a \"left join\" or \"right join\" instead of an \"inner join\", use the leftJoin or rightJoin methods. These methods have the same signature as the join', 'If you would like to perform a \"left join\" or \"right join\" instead of an \"inner join\", use the leftJoin or rightJoin methods. These methods have the same signature as the joinIf you would like to perform a \"left join\" or \"right join\" instead of an \"inner join\", use the leftJoin or rightJoin methods. These methods have the same signature as the join', '2019-11-13 16:10:50', '2019-11-13 16:14:04'),
(22, '7', 'Azad Super Store', 'public/image/5dce7c501baa199629544-hen-heart-shape-vector-logo-design-logo-sign-icon-for-groceries-meat-stores-butcher-shop-farmer-mark.jpg', 'Azad Khan', '77', 'admin@gmail.com', '36', '1111111', NULL, '01670078232', 'Dhaka-Uttara-1223', 'public/image/5dce7c501b7ebattachment_68562158.jpg', '2019-11-15', 'sayeed', '13', 'public/image/5e20296e30207banner_01_1.jpg', NULL, '2019-11-15', '$2y$10$KVR90UhtqNWqrUGinbwMLuXY1eMkq9E.LfZ4AzeZ7uQr9XfqfaDNq', '6', '6', NULL, '20192208', 'AzadSuperStore', 'Azad Super Store', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-15 10:22:08', '2020-01-16 09:14:22'),
(23, '2', 'Simana Coffe House', 'public/image/5dd154af35fff66213448_2368675410057685_5221485204530528256_o.jpg', 'Sayeed', '01798', 'new@gmail.com', '37', '434', NULL, '019', 'mirpur 1212 house', 'public/image/5dd154af35d3066213448_2368675410057685_5221485204530528256_o.jpg', '2019-11-17', 'Saiful', '21', 'public/image/5dd155459f8da3523-ACH-Restaurant-slider-images_0013.jpg', NULL, '2019-11-17', '$2y$10$FgTOj3sO6EeCocHkjAbG6eLJwzTh51NzNEhioJgIjaVnp0P6FlIOe', '32', '6', NULL, '20190951', 'simanaj', 'Coffe & Snack', 'EveryDay', '9AM-5PM', 'Hotline', '01750758262', '\"Good Game\" 1. A polite remark uttered after the end of a round, game, or other measured interval to indicate that a match was fair and enjoyable. Usually', '\"Good Game\" 1. A polite remark uttered after the end of a round, game, or other measured interval to indicate that a match was fair and enjoyable. Usually \"Good Game\" 1. A polite remark uttered after the end of a round, game, or other measured interval to indicate that a match was fair and enjoyable. Usually', '2019-11-17 14:09:51', '2019-11-18 14:02:03'),
(24, '7', 'Sayeed Super Store', 'public/image/5dd26df9175e066213448_2368675410057685_5221485204530528256_o.jpg', 'Sayeed', '2121', 'admin@gmail.com', '39', '43546545', NULL, '01720', 'mirpur 1212 house', 'public/image/5dd26df91731199629544-hen-heart-shape-vector-logo-design-logo-sign-icon-for-groceries-meat-stores-butcher-shop-farmer-mark.jpg', '2019-11-18', 'Saiful', '10', 'public/image/5dd9423aaa30cBeef-loin.jpg', NULL, '2019-11-18', '$2y$10$6ryo1IXn0RDEqYvVsEUdHeYtSBGTzVvLFAi2C/VNclLgK56qSdk2G', '32', '32', NULL, '20191001', 'SSS', 'Truest Online Shop', 'EveryDay', '9AM-9PM', 'Hotline', '01750758262', 'Middleware functions are functions that have access to the request object (req), the response object (res), and the next middleware function in the application’s request-response cycle. These functions are used to modify req and res objects for tasks like parsing request bodies, adding response headers, etc.', 'Middleware functions are functions that have access to the request object (req), the response object (res), and the next middleware function in the application’s request-response cycle. These functions are used to modify req and res objects for tasks like parsing request bodies, adding response headers, etc.Middleware functions are functions that have access to the request object (req), the response object (res), and the next middleware function in the application’s request-response cycle. These functions are used to modify req and res objects for tasks like parsing request bodies, adding response headers, etc.', '2019-11-18 10:10:01', '2019-11-23 14:31:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_categories`
--
ALTER TABLE `doctor_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_chambers`
--
ALTER TABLE `doctor_chambers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery_categories`
--
ALTER TABLE `grocery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery_menus`
--
ALTER TABLE `grocery_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grocery_products`
--
ALTER TABLE `grocery_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_services`
--
ALTER TABLE `hospital_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurent_categories`
--
ALTER TABLE `restaurent_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurent_products`
--
ALTER TABLE `restaurent_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_users`
--
ALTER TABLE `top_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_id` (`login_id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendor_id` (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor_categories`
--
ALTER TABLE `doctor_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_chambers`
--
ALTER TABLE `doctor_chambers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grocery_categories`
--
ALTER TABLE `grocery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grocery_menus`
--
ALTER TABLE `grocery_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grocery_products`
--
ALTER TABLE `grocery_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospital_services`
--
ALTER TABLE `hospital_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurent_categories`
--
ALTER TABLE `restaurent_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restaurent_products`
--
ALTER TABLE `restaurent_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `top_users`
--
ALTER TABLE `top_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

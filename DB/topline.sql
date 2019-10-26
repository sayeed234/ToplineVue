-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 04:37 PM
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
(9, '2019_10_22_111518_create_vendors_table', 7);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `services` (`id`, `name`, `icon`, `sort`, `status`, `created_by`, `update_by`, `created_at`, `updated_at`) VALUES
(2, 'Restaurant', 'fa fa-coffee', '2', '1', '1', '1', '2019-10-21 05:13:25', '2019-10-21 08:17:57'),
(3, 'Hospital', 'fa fa-hospital', '1', '1', '1', '1', '2019-10-21 05:13:50', '2019-10-21 05:42:24'),
(4, 'Doctors', 'fa fa-shopping-basket', '3', '1', '1', '1', '2019-10-21 08:11:55', '2019-10-21 08:17:33'),
(5, 'Tour & Travels', 'fa fa-map-marker', '1', '1', '1', '1', '2019-10-24 12:05:57', '2019-10-24 12:05:57');

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

INSERT INTO `top_users` (`id`, `login_id`, `name`, `mobile`, `email`, `address`, `password`, `type`, `roleid`, `status`, `customer_status`, `image`, `joindate`, `nid`, `free`, `free1`, `remember`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '20190653', 'BRB Hospital', '01318712782', 'admin@gmail.com', NULL, '$2y$10$yn1t7BcLdGFSA3MgGhh8D.x0QjZk1uI6T7QFtbWsmL67M6yGozPRq', 'Vendor', 2, '0', NULL, NULL, '2019-10-22', '1234579564', NULL, NULL, NULL, 'admin', 'admin', '2019-10-22 15:06:53', '2019-10-24 11:55:17'),
(2, '20191002', 'Bangladesh Hospital', '01318712782', 'admin@gmail.com', NULL, '$2y$10$Vg9cpqSa/QLGJMebNApMoeNX6WSTI3pl.HEynvUBpWOPvooASOP4K', 'Vendor', 2, '1', NULL, NULL, '2019-10-22', '1111111', NULL, NULL, NULL, 'admin', 'admin', '2019-10-22 15:10:03', '2019-10-24 12:10:04'),
(3, '20190431', 'Milon', '01968949468', 'admin@gmail.com', NULL, '$2y$10$SfRdGgQeKQk6xi6ypwjbf.E56mYuPKMZ2l4nX9HpTjl71GK1Pq0Y6', 'Vendor', 2, '1', NULL, NULL, '2019-10-23', '1234579564', NULL, NULL, NULL, 'admin', 'admin', '2019-10-23 11:04:32', '2019-10-24 11:53:36'),
(4, '20190822', 'Nur Mia', '01318712782', 'admin@gmail.com', NULL, '$2y$10$GiYO/b.vqpbQMB0Ze0Ckt.dt72PkPw4KANDJnKXTRKhZpahTzQCui', 'Vendor', 2, '1', NULL, NULL, '2019-10-24', '1234579564', NULL, NULL, NULL, 'admin', 'admin', '2019-10-24 12:08:22', '2019-10-24 12:10:02'),
(5, '20190442', 'Mr. Mamun', '01318712782', 'admin1@gmail.com', 'Green Road, Dhaka 1212', '$2y$10$tJ5kT2qrZMCaThu4wULgX.a.CPRxMzJPCXSCZts4Tz.GQ5nrcOnwC', 'Admin', 1, '1', NULL, 'public/image/5db1a16ae47b3cat4.png', '2019-10-24', NULL, NULL, NULL, NULL, 'admin', 'admin', '2019-10-24 13:04:43', '2019-10-24 13:27:27'),
(6, '20190647', 'Ismail Sarker', '010101010101', 'admin2@gmail.com', 'Dhaka-Uttara-1223', '$2y$10$n6lUWtmwPeLQalNf5IVMx.ZggriG9LqL0KXFzy1hdXMr7iYsTV6jC', 'Admin', 1, '1', NULL, 'public/image/5db1a6970c6aalays.png', '2019-10-24', NULL, NULL, NULL, NULL, 'admin', 'admin', '2019-10-24 13:06:47', '2019-10-24 13:54:31');

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
(1, 'Symex It ltd.', 'admin@gmail.com', NULL, '$2y$10$JqnfsWRB8dZ2.sATMtOf8uK0qrh11cONT8TuXuBmJ3Vkye9DNzsTS', 'I1E4rmldvdQxvpQIU7oHhZL0lYKKQcs04W724QbxcD06vfic6hBeeb1hvWQK', '2019-08-30 05:18:55', '2019-08-30 05:18:55'),
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
  `free1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `service_id`, `vendor_name`, `vendor_logo`, `Pro_name`, `mobile`, `email`, `user_id`, `nid`, `tin`, `bank`, `address`, `agreement`, `agr_date`, `contact_name`, `Contact_mobile`, `slider`, `map`, `joindate`, `password`, `created_by`, `updated_by`, `total_view`, `vendor_id`, `free1`, `created_at`, `updated_at`) VALUES
(10, '3', 'BRB', 'public/image/5db079f57833bharpic.png', 'BRB Hospital', '01318712782', 'admin@gmail.com', '1', '1234579564', '1', '121314', 'dhanmondi dhaka', 'public/image/5daf1b0d0ff48fortune.png', '2019-10-22', 'BRB Hos', '4444444444', NULL, NULL, '2019-10-22', '$2y$10$EdppV6a.Gfa7p8G6YSpU..6H2pF53tR0BeRwJh.48FOXLGp73uoNe', 'admin', 'admin', NULL, '20190653', NULL, '2019-10-22 15:06:53', '2019-10-23 16:04:05'),
(11, '4', 'Azad Store', 'public/image/5db17f6a2454ccat7.png', 'Bangladesh Hospital', '01318712782', 'admin@gmail.com', '2', '1111', '12', '1214565', 'Dhaka-Uttara-1223', 'public/image/5db07ae2a44a6mirzapore.png', '2019-10-22', 'BRB Hos', '37', NULL, NULL, '2019-10-22', '$2y$10$lcOzTWdQveHOmYLplD5jjO/l1zofOFxes2Pzjjm7KTSvUyyBHV/Wa', 'admin', 'admin', NULL, '20191002', NULL, '2019-10-22 15:10:03', '2019-10-24 10:40:49'),
(12, '2', 'Mohammad Store', 'public/image/5db033bfde2b3ddanish.png', 'Milon', '01968949468', 'admin@gmail.com', '3', '1234579564', '2', '121314', 'Green Road, Dhaka 1212', 'public/image/5db033bfde035pdf.pdf', '2019-10-23', 'Reza', NULL, NULL, NULL, '2019-10-23', '$2y$10$xJDQVq3qjOAKGh3OkD4z0uH73jSL83u/VC1Gy4wPaIIZMPndJ6vD.', 'admin', 'admin', NULL, '20190431', NULL, '2019-10-23 11:04:32', '2019-10-23 11:04:32'),
(13, '5', 'Nur\'s Tour & Travels', 'public/image/5db1943600e35alu.png', 'Nur Mia', '01318712782', 'admin@gmail.com', '4', '1234579564', NULL, '121314', 'Green Road, Dhaka 1212', 'public/image/5db1943600be1nido.png', '2019-10-24', NULL, NULL, NULL, NULL, '2019-10-24', '$2y$10$OtLoPx0JFfjoRx613A7NTOGxCUAgJ7/el0S1G44n3hgN.Rzg8PSCu', 'admin', 'admin', NULL, '20190822', NULL, '2019-10-24 12:08:22', '2019-10-24 12:08:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
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
  ADD UNIQUE KEY `login_id` (`login_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `top_users`
--
ALTER TABLE `top_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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

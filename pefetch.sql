-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 10:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pefetch`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `through` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_point` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_staff` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bill` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ware_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `name`, `delivery`, `through`, `last_point`, `shipping_staff`, `status_bill`, `created_at`, `updated_at`, `ware_staff`) VALUES
(9, 'Bill 2266666', '4', '4', '3', '8', 5, '2021-01-24 21:19:52', '2021-01-24 22:07:19', '7'),
(10, 'Bill 4sdsadsadsa', '4', '4', '3', '8', 4, '2021-01-25 00:38:32', '2021-01-25 00:38:32', '7'),
(11, 'Bill 22222266666666', '4', '4', '3', '9', 4, '2021-01-25 00:51:18', '2021-01-25 00:51:18', '7');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2021_01_12_095834_creat_warehouse_table', 1),
(3, '2021_01_15_065812_creat_bill_table', 1),
(4, '2021_01_18_072605_create_roles_table', 1),
(5, '2021_01_21_030601_creat_status_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Quản lý hệ thống', NULL, NULL),
(2, 'Manager Warehouse', 'Quản lý kho', NULL, NULL),
(3, 'Staff Warehouse', 'Nhân viên kho', NULL, NULL),
(4, 'Shipping Staff', 'Nhân viên vận chuyển', NULL, NULL),
(5, 'Customer', 'Khách hàng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_status` int(11) NOT NULL,
  `label` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `id_status`, `label`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đã nhập kho', NULL, NULL),
(2, 2, 'Đang nhập kho', NULL, NULL),
(3, 3, 'Chờ giao hàng', NULL, NULL),
(4, 4, 'Đang giao hàng', NULL, NULL),
(5, 5, 'Đã nhận hàng', NULL, NULL),
(6, 0, 'Hủy đơn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `id_role`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(3, 'admin', 'khacquyit93@gmail.com', '$2y$10$nOIB/nUbOfbdLXzJmRm42OV4tRGHcOa4VwF5qF9J6Li7vpVffLdi.', 1, '36rM4lPcaruNmT1HWNyhJRzQ4EekXzvzPLJ8FFhn50q3zjLtzKquFsifDaO8', NULL, '2021-01-18 20:38:12', 1),
(4, 'custommer', 'custommer@gmail.com', '$2y$10$CtFmSKbe6z0fygujhhayeuYmIZZuA4jkLU78wNm622.1Fku04j3ya', 5, 'OpfNIBGYx9lR8h0gAEr0rI43jzHyjtohNW5nFercOJ8kVyeqwvWUzHvQjL81', NULL, '2021-01-18 20:38:11', 1),
(6, 'warehouse manager 1', 'warehouse_manager@gmail.com', '$2y$10$trK6zGE.LgrmLwcbMq.G9OUX.69eusPEc9..kfO2Yaz3.x5rRR5/C', 2, NULL, NULL, '2021-01-18 21:50:47', 0),
(7, 'warehouse staff 1', 'warehouse_staff@gmail.com', '$2y$10$R80RTsppFb8/vdtNPbGZc.BuA0aK5VaPmfSj71iyV4ASZqIu7XiO2', 3, '3JZTUe1kAHKJ9lxsqxABtOxIZycBPobfhVjNlx3dHhtvoCIDUoJRr8XFF3nh', NULL, '2021-01-18 21:50:47', 0),
(8, 'shipping staff 1', 'shipping_staff1@gmail.com', '$2y$10$ytnSqFEWwnpxdZaf6u9A1.jwbSdtSxfhUQk6DcrjawxD1kCqUr/cq', 4, NULL, NULL, NULL, 1),
(9, 'shipping staff 2', 'shipping_staff2@gmail.com', '$2y$10$XZsTVzd3NkBehHjtoleBWeMzNk9ETBxcJ3cAcZzfQh92.DXj8hs9a', 4, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_manager` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_staff` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `name`, `name_manager`, `name_staff`, `created_at`, `updated_at`) VALUES
(3, 'Kho Mỹ Đình 1', 'warehouse manager 1', 'warehouse staff 1', '2021-01-19 01:05:15', '2021-01-19 01:05:15'),
(4, 'Kho Hoan Kiem', 'warehouse manager 1', 'warehouse staff 1', '2021-01-24 21:17:11', '2021-01-24 21:17:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

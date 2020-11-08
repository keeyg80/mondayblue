-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 02:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mondaybl_blue`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activestatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagewidth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cover_image`, `created_at`, `updated_at`, `activestatus`, `imagewidth`) VALUES
(1, 'Graphic Designer', 'C1_1603596031.jpg', '2020-09-19 21:15:15', '2020-10-27 12:44:33', 'yes', '3'),
(2, 'Video Editing', 'C2_1603596119.jpg', '2020-09-19 21:17:17', '2020-10-27 12:44:39', 'yes', '3'),
(3, 'Social Media Advertising', 'C3_1603596128.jpg', '2020-09-19 21:18:24', '2020-10-27 12:44:44', 'yes', '6'),
(4, '2D / 3D Editor', 'C4_1603596135.jpg', '2020-09-19 21:20:21', '2020-10-27 12:44:54', 'yes', '3'),
(5, 'Copywriting', 'C5_1603596145.jpg', '2020-09-19 21:21:06', '2020-10-27 12:45:00', 'yes', '6'),
(6, 'Marketing Campaign Manager', 'C6_1603596239.jpg', '2020-09-19 21:21:28', '2020-10-27 12:49:34', 'yes', '3'),
(7, 'Translator', 'C7_1603596249.jpg', '2020-09-19 21:22:10', '2020-10-27 13:05:40', 'yes', '6'),
(8, 'Web Developer', 'C8_1603596259.jpg', '2020-09-19 21:23:03', '2020-10-27 13:05:47', 'yes', '3'),
(9, 'App Developer', 'C9_1603596283.jpg', '2020-09-19 21:23:21', '2020-10-27 13:05:54', 'yes', '3'),
(10, 'Online Store Campaign Manager', 'C10_1603596295.jpg', '2020-09-19 21:23:21', '2020-10-27 13:06:00', 'yes', '12');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_06_012437_create_posts_table', 2),
(5, '2020_09_20_040550_add_cover_image_to_posts', 3),
(6, '2020_09_20_045555_create_categories', 4),
(7, '2020_10_24_215901_add_cover_image_to_categories', 5),
(8, '2020_10_25_090859_add_activestatus_to_categories', 6),
(9, '2020_10_25_091638_add_activestatus_to_posts', 7),
(10, '2020_10_25_150139_add_profile_fields_to_users', 8),
(11, '2020_10_25_151838_add_cover_image_to_users', 9),
(12, '2020_10_27_201242_add_imagewidth_to_categories', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('keeyg80@gmail.com', '$2y$10$24CAfHfGkFRnPTsh08nvSe79VNLVSAZLXmLxrR.pC1tDqdt5DmyrC', '2020-10-25 14:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(9,2) NOT NULL,
  `priceunit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` int(11) NOT NULL,
  `deliveryunit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activestatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankaccount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankswiftcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activestatus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `contactno`, `address1`, `address2`, `postcode`, `city`, `country`, `bankname`, `bankaccount`, `bankswiftcode`, `bankaddress`, `activestatus`, `cover_image`) VALUES
(1, 'Kee Yew Gin', 'keeyewgin@gmail.com', '2020-10-25 13:09:09', '$2y$10$Y7NAg8KhCn7UdXCOOerHxe248cuLb1FT1mxSnI8QchSHlnshxUqfO', NULL, '2020-09-13 02:16:12', '2020-10-25 13:09:09', 'admin', '0123020921', NULL, NULL, '71700', 'Mantin', 'Malaysia', 'Public Bank Bhd.', NULL, NULL, NULL, 'yes', 'profile_1603624453.jpg'),
(2, 'Kee 2', 'keeyg80@gmail.com', '2020-10-25 14:02:17', '$2y$10$l6A3vpmZb2Jm.LORL6lKPeBAPbiKvLdO/R2quzapRyzDgHvGo0d1C', NULL, '2020-10-25 14:01:04', '2020-10-25 14:02:17', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'noimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

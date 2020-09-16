-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 11:12 AM
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
(4, '2020_09_06_012437_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(9,2) NOT NULL,
  `puom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `quom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `description`, `body`, `price`, `puom`, `quantity`, `quom`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'Web Designer', 'we are hiring web designer for front end.', '<p>knowledge of html, css, jquery, PS, Ill, Adobe XD, Figma, (Node js, Angular framework will be bonus)</p>\r\n\r\n<p>min 2 years experience.</p>', 9550.00, 'Month', 3, 'Vacancies', 1, '2020-09-05 21:44:20', '2020-09-16 01:04:56'),
(2, 'Web Development', 'Laravel Application Data controller', 'create controller,model and database migration job for 2 projects (Nov 20  - Jan 21) .', '<p>Laravel, php, MySqL. only needed for 3 months</p>', 5600.00, 'month', 5, 'vacancies', 1, '2020-09-06 00:25:48', '2020-09-16 01:05:12'),
(3, 'Web Development', 'Web Application - Puchase Order Tracking System', 'Need a web system with administrator function total around 6 modules, estimate project development period 6 months .', '<p>Totally fresh development, can use any framework, MYSQL or MSSQL. Hosting and domain registered.</p>', 35500.00, 'project', 1, 'project', 1, '2020-09-06 00:36:15', '2020-09-16 01:05:26'),
(4, 'etc', 'Windows Application - Packing System', 'Packing System with Master module and thermal barcode label printing on Honeywell  function total around 5 modules, estimate project development period 18 months .', '<p>Totally fresh development, production label printing, daily production, good transfer, dispatch. Users number around 10 to 30, may expand to 50 users. local database MS SQL Server provided.</p>', 50000.00, 'project', 1, 'project', 1, '2020-09-08 03:36:15', '2020-09-16 01:05:57'),
(5, 'Web Development', 'Web Application - Packing Reporting System', 'Packing reporting and daily production tracking function total around 5 modules, estimate project development period 10 months .', '<p>Totally fresh development, production management users 10 to 20. linking with local production database MS SQL Server.</p>', 15000.00, 'project', 1, 'project', 1, '2020-09-08 09:44:15', '2020-09-16 01:09:55'),
(6, 'Graphic Designer', 'Packaging Designer', 'I Need someone to handle my products packaging design.', '<p>Bottle lable, package sticker label. must know photoshop and illustrator. printer configuration. logo design and bonus if good in photograpghy.</p>', 3550.00, 'month', 1, 'person', 1, '2020-09-09 03:44:20', '2020-09-16 01:10:21'),
(7, 'etc', 'System Developer', 'develop windows application', '<p>vb.net c# , ms sql, thermal printer knowledge. development period 6 to 9 months. 6 modules.</p>', 25000.00, 'job', 1, 'project', 1, '2020-09-09 04:25:48', '2020-09-16 01:09:22'),
(8, 'etc', 'Delivery Guy', 'delivery job around Klang Valley', '<p>must have motorcycle and car licence. on call 24/7 working hour between 5AM to 8PM</p>', 3600.00, 'month', 5, 'vacancies', 1, '2020-09-08 06:38:48', '2020-09-16 01:08:56'),
(9, 'Web Development', 'Web Application - Service and Invoicing System', 'Need a web system with administrator function total around 12 modules, estimate project development period 9 to 12 months .', '<p>Totally fresh development, can use any framework, MYSQL or MSSQL. Hosting and domain registered.</p>', 45500.55, 'project', 1, 'project', 1, '2020-09-09 05:36:15', '2020-09-16 01:08:18'),
(10, 'Graphic Designer', 'Leaflet Designer', 'we are hiring leaflet designer for cosmetic product.', '<p>photoshop , illustrator, lightroom,</p>', 3500.00, 'month', 1, 'person', 1, '2020-09-07 01:10:20', '2020-09-16 01:07:06'),
(11, 'etc', 'E Documentation clerk', 'scan paper documents', '<p>ms office knowledge, know how to use printer and scanner.</p>', 1200.65, 'Month', 3, 'vacancies', 1, '2020-09-12 01:03:53', '2020-09-16 01:06:30'),
(12, 'etc', '1 day body guard', 'I need a body guard on my birthday 21st Sep 2020.', '<p>Here&#39;s my <em><ins><strong>minimum requirements</strong></ins></em>. Female or Male are welcome to request.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><em><strong>Attribute</strong></em></td>\r\n			<td><em><strong>Value</strong></em></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Height</td>\r\n			<td>155cm(female) 170cm(Male),&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>shape</td>\r\n			<td>muscular(male), fit(female)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Skill</td>\r\n			<td>Martial Art</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>- 10 hours closed protection on vip</p>', 250.55, 'Day', 1, 'Person', 2, '2020-09-12 06:21:46', '2020-09-16 00:57:17'),
(14, 'etc', 'Marketing Planner', 'I need someone to market my development software', '<p>I have 3 Applications to sell.</p>', 3000.95, 'Job', 1, 'Job', 1, '2020-09-13 02:19:49', '2020-09-16 01:06:15'),
(16, 'Graphic Designer', 'Advertisement board graphic designer', 'I need someone take care of designing job for HQ Outlet and branches advertisement board.', '<p>All Banners, promotion leaflet. monthly advertisement.</p>', 3500.89, 'Month', 1, 'Person', 2, '2020-09-16 00:14:39', '2020-09-16 01:11:25');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kee Yew Gin', 'keeyg80@gmail.com', NULL, '$2y$10$Y7NAg8KhCn7UdXCOOerHxe248cuLb1FT1mxSnI8QchSHlnshxUqfO', NULL, '2020-09-13 02:16:12', '2020-09-13 02:16:12'),
(2, 'helen', 'helen@gmail.com', NULL, '$2y$10$zRmCtwfRBWuYhfyMMcXG3e4Y3b6UEgae1M4KpuTmuoixluvvInv6C', NULL, '2020-09-13 21:01:32', '2020-09-13 21:01:32');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

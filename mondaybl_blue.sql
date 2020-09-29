-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 01:11 AM
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
(4, '2020_09_06_012437_create_posts_table', 2),
(5, '2020_09_20_040550_add_cover_image_to_posts', 3),
(6, '2020_09_20_045555_create_categories', 4);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `description`, `body`, `price`, `puom`, `quantity`, `quom`, `user_id`, `created_at`, `updated_at`, `cover_image`) VALUES
(18, 'Graphic Designer', 'Product Advertisement Designer', 'Full time designer for our products including advertisement banner, leaflet and product labels.', '<p>Photodhop Illustrator and Lightroom</p>', 3500.89, 'Month', 1, 'Vacancy', 1, '2020-09-19 22:54:29', '2020-09-20 00:40:23', 'pexels-anthony-shkraba-4348401_1600591223.jpg'),
(19, 'Graphic Designer', 'Banner Designer', 'Product Advertisement Banner Designer', '<p>Monthly Promotion Banner and leaflet design</p>', 3580.50, 'Month', 1, 'Vacancy', 1, '2020-09-19 23:00:01', '2020-09-19 23:00:01', 'noimage.jpg'),
(20, 'Translator', 'E Documentation clerk', 'scan paper documents', '<p>scan company documents</p>', 2200.65, 'Month', 2, 'vacancies', 1, '2020-09-19 23:11:38', '2020-09-20 00:40:43', 'pexels-andrea-piacquadio-3831873_1600591243.jpg'),
(21, 'Website Development', 'Story Editor', 'Need someone to edit my story', '<p>All in English</p>', 2000.00, 'Job', 1, 'Job', 1, '2020-09-19 23:18:39', '2020-09-20 00:46:08', 'pexels-cottonbro-4708905_1600591568.jpg'),
(22, 'Social Media Advertising', 'I need someone to advertise my product in social media', 'All stationary and printers supplies', '<p>I need to have 200 orders on first month and atleast 7000 orders on fifth months onward.</p>', 15000.00, 'project', 2, 'vacancies', 1, '2020-09-20 00:37:58', '2020-09-20 00:43:19', 'pexels-anthony-shkraba-4348401_1600591399.jpg'),
(23, 'Website Development', 'Web Application Developer', 'Company Intranet developer', '<p>Html, Javascript, CSS, JQuery, AJAX, API,</p>\r\n\r\n<p>our common web developed in php, asp, aspx.</p>\r\n\r\n<p>Framework: .NET, Angular, Laravel, React, Vues, Python, Spring Tools Suites.</p>\r\n\r\n<p>Dev Env: Visual Studio, Git</p>\r\n\r\n<p>DB: MySQL, MS SQL, Firebase, MongoDB</p>', 6500.00, 'Month', 1, 'Person', 2, '2020-09-23 07:48:46', '2020-09-23 07:48:46', 'pexels-ketut-subiyanto-4126724_1600868926.jpg'),
(24, 'Website Development', 'Web Application Manager', 'Incharge of Web Development Team of 5 persons', '<ul>\r\n	<li>Keep track on project progress.</li>\r\n	<li>Keep Teams knowledge and skill up to date.</li>\r\n	<li>Teams motivation.</li>\r\n	<li>Backup projects.</li>\r\n	<li>Report to Management, Daily , Weekly, and Monthly</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 9500.00, 'Month', 1, 'person', 2, '2020-09-23 13:54:36', '2020-09-23 13:55:24', 'pexels-energepiccom-288477_1600869324.jpg'),
(25, 'Website Development', 'create web app', 'company web intranet', '<ul>\r\n	<li>HR Portal</li>\r\n	<li>Accident Reporting</li>\r\n	<li>Purchase tracking</li>\r\n	<li>Service Tracking</li>\r\n	<li>Warehouse reporting</li>\r\n	<li>despatch tracking</li>\r\n</ul>', 10000.00, 'Project', 1, 'Project', 3, '2020-09-27 03:46:43', '2020-09-27 03:46:43', 'pexels-anthony-shkraba-4348401_1601178403.jpg'),
(26, 'Graphic Designer', 'Company Desginer', 'Banner Desgin', '<ol>\r\n	<li>Photoshop</li>\r\n	<li>Illustrator</li>\r\n	<li>Ligthroom</li>\r\n	<li>swist</li>\r\n	<li>Adebe Acrobat</li>\r\n</ol>', 15000.00, 'Month', 2, 'Person', 4, '2020-09-27 03:57:22', '2020-09-27 03:57:22', 'pexels-energepiccom-288477_1601179042.jpg'),
(27, 'Copywriting', 'Copywriter', 'Office Copywriter', '<ol>\r\n	<li>MS Word</li>\r\n	<li>MS Excel</li>\r\n	<li>MS planner</li>\r\n	<li>Adebe</li>\r\n</ol>', 1200.00, 'Month', 1, 'Person', 5, '2020-09-27 04:06:02', '2020-09-27 04:06:02', 'pexels-bongkarn-thanyakij-3740679_1601179562.jpg');

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
(2, 'helen', 'helen@gmail.com', NULL, '$2y$10$zRmCtwfRBWuYhfyMMcXG3e4Y3b6UEgae1M4KpuTmuoixluvvInv6C', NULL, '2020-09-13 21:01:32', '2020-09-13 21:01:32'),
(3, 'guest', 'guest@email.com', NULL, '$2y$10$T25pYb2q2BfqqRHvi5mpU.0QtwBPC3XIhPXLahmKAlDLUmnF43Ax.', NULL, '2020-09-27 03:44:50', '2020-09-27 03:44:50'),
(4, 'test', 'test@email.com', NULL, '$2y$10$j7z5YyFwgnyI31dpj7g2D.vhPj1whigmSdDBplRLgOYT2vgs0/eWO', NULL, '2020-09-27 03:55:55', '2020-09-27 03:55:55'),
(5, 'testme', 'testme@email.com', NULL, '$2y$10$9FN2pDUWjGj1B0GFaBOnxOPK0G33rpenDaolhFM3QosVs75gwNgP6', NULL, '2020-09-27 04:04:29', '2020-09-27 04:04:29');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

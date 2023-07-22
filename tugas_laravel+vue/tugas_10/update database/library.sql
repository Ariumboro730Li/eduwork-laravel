-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 09:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_a` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` char(14) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name_a`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Oda Gaylord III', 'reyna99@yahoo.com', '089182908286', '4612 McCullough Stream Apt. 089\nLake Thalia, NJ 27588', '2023-07-12 21:55:05', '2023-07-12 21:55:05'),
(2, 'Jules Jacobi', 'corkery.abel@erdman.com', '089142230594', '18077 Upton Ridges Suite 239\nRusselside, ID 98528-8589', '2023-07-12 21:55:05', '2023-07-12 21:55:05'),
(3, 'Nelda Veum', 'schuster.providenci@yahoo.com', '08918495766', '3215 D\'Amore Rapids Suite 081\nPort Magdalena, UT 01572-9786', '2023-07-12 21:55:05', '2023-07-12 21:55:05'),
(4, 'Reilly Lind', 'dorris12@littel.com', '089185210163', '27501 Pagac Forge\nWest Rodrick, CO 75416', '2023-07-12 21:55:05', '2023-07-12 21:55:05'),
(5, 'Makenzie Schoen DVM', 'florencio52@hotmail.com', '089183053489', '3541 Schroeder Valleys\nLarissaville, AK 75414-9339', '2023-07-12 21:55:05', '2023-07-12 21:55:05'),
(6, 'Mr. Dusty Bruen', 'bledner@yahoo.com', '089158716352', '456 Schneider Overpass Apt. 109\nAnkundingshire, WA 40682-0615', '2023-07-12 21:55:05', '2023-07-12 21:55:05'),
(7, 'Leonardo Kirlin', 'mohamed.pollich@hotmail.com', '089143384385', '577 Anderson Course Suite 136\nDomenicktown, NM 04450-0479', '2023-07-12 21:55:06', '2023-07-12 21:55:06'),
(8, 'Freddy Jakubowski', 'cordell61@dooley.com', '089183057291', '1992 Esta Ways Suite 798\nNew Danikatown, AK 15392-9310', '2023-07-12 21:55:06', '2023-07-12 21:55:06'),
(9, 'Randall Klocko', 'dulce.raynor@hotmail.com', '08914982314', '817 Dorothea Camp\nSimonisside, WI 52131-4316', '2023-07-12 21:55:06', '2023-07-12 21:55:06'),
(10, 'Etha Johns', 'fabshire@denesik.com', '089174900454', '50585 Gleason Canyon Suite 740\nEstefaniaton, MN 07596', '2023-07-12 21:55:06', '2023-07-12 21:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `year` int(11) NOT NULL,
  `publisher_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `catalog_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `year`, `publisher_id`, `author_id`, `catalog_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 47871722, 'Maeve Boyle', 2022, 10, 10, 3, 13, 15578, '2023-07-12 21:56:17', '2023-07-12 21:56:17'),
(2, 964928320, 'Miss Jaclyn Wilkinson', 2020, 10, 7, 3, 19, 17332, '2023-07-12 21:56:17', '2023-07-12 21:56:17'),
(3, 872696974, 'Constantin Pollich', 2020, 4, 8, 1, 11, 17620, '2023-07-12 21:56:17', '2023-07-12 21:56:17'),
(4, 667508730, 'Nova Kautzer', 2022, 4, 1, 9, 17, 17001, '2023-07-12 21:56:17', '2023-07-12 21:56:17'),
(5, 869595005, 'Alyson Mueller', 2020, 2, 6, 4, 13, 18380, '2023-07-12 21:56:17', '2023-07-12 21:56:17'),
(6, 213552770, 'Prof. Horacio Lang Jr.', 2022, 8, 2, 4, 17, 10634, '2023-07-12 21:56:17', '2023-07-12 21:56:17'),
(7, 635194744, 'Sibyl Murphy', 2020, 3, 9, 4, 17, 16811, '2023-07-12 21:56:18', '2023-07-12 21:56:18'),
(8, 570159463, 'Dr. Otis Dietrich PhD', 2022, 6, 10, 1, 16, 15898, '2023-07-12 21:56:18', '2023-07-12 21:56:18'),
(9, 649554499, 'Destini Strosin', 2022, 1, 7, 4, 14, 12021, '2023-07-12 21:56:18', '2023-07-12 21:56:18'),
(10, 432169531, 'Maximo Gottlieb', 2023, 3, 5, 2, 14, 14404, '2023-07-12 21:56:18', '2023-07-12 21:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_c` varchar(64) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `name_c`, `created_at`, `updated_at`) VALUES
(1, 'Kelsi Rolfson', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(2, 'Kaitlyn Waelchi', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(3, 'Randi Hintz', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(4, 'Jaren Zemlak', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(5, 'Kareem Heller IV', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(6, 'Twila Kub', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(7, 'Bernie Homenick', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(8, 'Roxane Volkman', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(9, 'Angeline Bashirian', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(10, 'Dr. Koby Bradtke', '2023-07-12 21:55:57', '2023-07-12 21:55:57'),
(11, 'laravelx', '2023-07-19 21:05:01', '2023-07-20 19:13:52');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `gender` char(1) NOT NULL,
  `phone_number` char(15) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `gender`, `phone_number`, `address`, `email`, `created_at`, `updated_at`) VALUES
(11, 'M.Khozin Khoirul Zaki', 'M', '089165473573', 'Bandung', 'khozinkz49@gmail.com', '2023-06-12 21:54:18', '2023-07-12 21:54:18'),
(12, 'Cindy Christiansen', 'M', '089116942923', 'Gunung Batu, Bandung', 'brown.kasandra@yost.com', '2023-06-12 21:54:18', '2023-07-12 21:54:18'),
(13, 'Kane Johns', 'F', '089177475700', 'Sukawarna, Bandung', 'astokes@kohler.info', '2023-07-12 21:54:18', '2023-07-12 21:54:18'),
(14, 'Angus Hane PhD', 'F', '089190535563', '6130 Keyshawn Parkway\nLake Alexfort, IA 09933-6752', 'mdoyle@gmail.com', '2023-07-12 21:54:18', '2023-07-12 21:54:18'),
(15, 'Kaley Rice', 'F', '089179604736', '712 Quitzon Crescent Suite 791\nKayleighville, MT 36712', 'beahan.bobby@gmail.com', '2023-07-12 21:54:18', '2023-07-12 21:54:18'),
(16, 'Torrance Runte Jr.', 'F', '089185682308', '4578 Schroeder Port\nBahringerside, DE 90714', 'odell.ritchie@wuckert.info', '2023-07-12 21:54:18', '2023-07-12 21:54:18'),
(17, 'Tyreek Bradtke', 'F', '089127673292', '9289 Amie Streets Suite 834\nSouth Pearline, AL 34877', 'shayna.bradtke@hotmail.com', '2023-07-12 21:54:18', '2023-07-12 21:54:18'),
(18, 'Wayne Volkman IV', 'F', '089170398626', '66688 Goodwin Expressway Suite 775\nSouth Jorge, SD 11662-1157', 'doyle.jane@gulgowski.com', '2023-07-12 21:54:18', '2023-07-12 21:54:18'),
(19, 'Major Hane', 'F', '089175816480', '8312 Cummerata Stravenue\nBeershire, UT 37788-3407', 'wlemke@fisher.com', '2023-07-12 21:54:19', '2023-07-12 21:54:19'),
(20, 'Mr. Erwin Cruickshank', 'M', '089185612839', '4553 Doyle Summit Apt. 527\nRolfsonchester, TX 64871-8601', 'fredrick47@gmail.com', '2023-07-12 21:54:19', '2023-07-12 21:54:19');

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
(12, '2010_07_12_144036_create_members_table', 1),
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_07_12_144314_create_publishers_table', 1),
(18, '2023_07_12_144515_create_authors_table', 1),
(19, '2023_07_12_144745_create_catalogs_table', 1),
(20, '2023_07_12_144902_create_books_table', 1),
(21, '2023_07_12_145021_create_transactions_table', 1),
(22, '2023_07_12_145132_create_transaction_details_table', 1),
(23, '2023_07_20_041540_update_catalogs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_p` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` char(14) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name_p`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Morton Erdman I', 'lschmitt@yahoo.com', '089175984733', '1142 Patsy Skyway\nIvorychester, MT 58323', '2023-07-12 21:55:37', '2023-07-12 21:55:37'),
(2, 'Mrs. Zetta Bechtelar III', 'nella20@gulgowski.com', '089149726239', '1388 Hill Junction\nLake Carlottaville, CA 23341', '2023-07-12 21:55:37', '2023-07-12 21:55:37'),
(3, 'Lionel Ortiz Sr.', 'velma.nicolas@hermiston.com', '089130724391', '4970 Wisozk Rue Suite 086\nGavinland, WV 69544-8336', '2023-07-12 21:55:37', '2023-07-12 21:55:37'),
(4, 'Tiara Cummings', 'suzanne08@streich.com', '089176184924', '74986 Darryl Crescent\nPort Howell, WV 33003-4431', '2023-07-12 21:55:37', '2023-07-12 21:55:37'),
(5, 'Sophie Murray I', 'vbeahan@hotmail.com', '089187497652', '62949 Luettgen Street\nNew Kaela, NE 75918-8344', '2023-07-12 21:55:37', '2023-07-12 21:55:37'),
(6, 'Cheyanne Walter', 'matt24@kris.net', '089163005045', '108 Bert View\nNorth Destini, NE 98774', '2023-07-12 21:55:38', '2023-07-12 21:55:38'),
(7, 'Mr. Harry Heidenreich', 'ocorwin@yahoo.com', '089147328046', '67711 Dolores Trace Suite 643\nJuwanfurt, WV 22766-2723', '2023-07-12 21:55:38', '2023-07-12 21:55:38'),
(8, 'Ora Gleichner PhD', 'kirstin.kuhlman@miller.com', '089163963633', '247 Isaias Trail Suite 311\nWest Cristal, AK 83695', '2023-07-12 21:55:38', '2023-07-12 21:55:38'),
(9, 'Dr. Ervin Sauer', 'olga34@gmail.com', '089151341410', '816 Oberbrunner Street Apt. 598\nWest Angel, VA 35363-4006', '2023-07-12 21:55:38', '2023-07-12 21:55:38'),
(10, 'Isadore Effertz', 'bogan.antoinette@hill.com', '08917896231', '81050 Bruen Isle\nSterlington, NV 55106', '2023-07-12 21:55:38', '2023-07-12 21:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `member_id`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(1, 11, '2023-06-16', '2023-06-19', '2023-07-12 21:54:18', '2023-07-12 21:54:18'),
(3, 20, '2023-06-16', '2023-06-26', '2023-07-16 00:56:58', '2023-07-16 00:56:58'),
(4, 13, '2023-06-16', '2023-06-20', '2023-07-16 00:56:59', '2023-07-16 00:56:59'),
(5, 20, '2023-05-16', '2023-05-17', '2023-07-16 00:56:59', '2023-07-16 00:56:59'),
(6, 15, '2023-05-20', '2023-05-26', '2023-07-16 00:56:59', '2023-07-16 00:56:59'),
(7, 12, '2023-07-16', '2023-07-16', '2023-07-16 00:56:59', '2023-07-16 00:56:59'),
(8, 14, '2023-07-16', '2023-07-16', '2023-07-16 00:57:00', '2023-07-16 00:57:00'),
(9, 11, '2023-07-16', '2023-07-16', '2023-07-16 00:57:00', '2023-07-16 00:57:00'),
(10, 15, '2023-07-16', '2023-07-16', '2023-07-16 00:57:00', '2023-07-16 00:57:00'),
(11, 15, '2023-07-16', '2023-07-16', '2023-07-16 00:57:00', '2023-07-16 00:57:00'),
(12, 14, '2023-07-16', '2023-07-16', '2023-07-16 00:57:01', '2023-07-16 00:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `book_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, '2023-07-17 20:52:12', '2023-07-17 20:52:12'),
(2, 3, 5, 2, '2023-07-17 20:52:12', '2023-07-17 20:52:12'),
(3, 3, 10, 2, '2023-07-17 20:52:12', '2023-07-17 20:52:12'),
(4, 10, 2, 1, '2023-07-17 20:52:13', '2023-07-17 20:52:13'),
(5, 8, 6, 2, '2023-07-17 20:52:13', '2023-07-17 20:52:13');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 'M.Khozin Khoirul Zaki', 'khozinkz49@gmail.com', NULL, '$2y$10$G6Xq79ClT.3z1LudEfSTZeUfnJ94zFECwE.LaYraexIWET/ScvECG', NULL, 11, '2023-07-14 06:29:55', '2023-07-14 06:29:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_catalog_id_foreign` (`catalog_id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_member_id_foreign` (`member_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_book_id_foreign` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_member_id_foreign` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

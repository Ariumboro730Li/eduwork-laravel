-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jun 2023 pada 05.13
-- Versi server: 8.0.30
-- Versi PHP: 8.0.28

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
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Rubye Effertz', 'vstoltenberg@reynolds.com', '082166306972', '9229 Imelda Knoll\nNolanfurt, CO 18933-1669', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(2, 'Axel Schroeder PhD', 'dino.bartoletti@hotmail.com', '082111229695', '626 Satterfield Vista\nFlatleyland, MI 77482-7194', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(3, 'Prof. Fay Stehr DDS', 'itzel42@ankunding.biz', '082170970993', '23976 Bosco Passage Suite 713\nWest Santaborough, ID 94372-1937', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(4, 'Deonte Simonis', 'brigitte87@gmail.com', '082158372046', '98695 Stoltenberg Spurs\nAnnamariefort, NH 26438-3139', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(5, 'Prof. Taurean Reynolds Sr.', 'lquigley@hotmail.com', '082119930382', '4454 Runte Lake Suite 116\nSouth Haroldshire, CT 02986-7221', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(6, 'Miss Alaina Krajcik', 'stiedemann.duncan@bosco.info', '082146561661', '95436 Jarrod Burg\nWest Annabelside, SD 46786-1397', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(7, 'Ewald Cole', 'lamont54@bernhard.com', '082123147546', '77837 Easter Streets\nNorth Stanfort, WY 23797-9704', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(8, 'Mrs. Selena Swaniawski', 'schinner.carissa@sawayn.com', '082154991948', '1761 Schaefer Spurs Apt. 692\nNew Daphnebury, UT 93631-2324', '2023-06-23 22:11:05', '2023-06-23 22:11:05'),
(9, 'Daniella Funk', 'tierra04@yahoo.com', '082118301336', '8428 Sydnee Square\nNew Andresburgh, IL 80081', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(10, 'Lonzo Effertz', 'kkutch@stoltenberg.com', '082158978572', '100 Leanna Squares Apt. 227\nGreenshire, MD 96694-7723', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(11, 'Birdie Schaden', 'jschoen@gmail.com', '082146646244', '5755 Sammy Forest Suite 520\nKohlerton, PA 38140-8933', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(12, 'Juliana Schroeder', 'xblanda@gmail.com', '082154508179', '27338 Eldon Estates\nPort Sanfordland, WY 40453', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(13, 'Oleta Gerlach', 'atorp@prosacco.com', '08218482200', '3274 Beahan Knoll Suite 257\nPort Demondfort, NE 44801-9512', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(14, 'Vincent Ryan I', 'carleton.bergnaum@walker.com', '082191907135', '43799 Helene Islands Suite 370\nEast Onie, DC 20279', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(15, 'Dr. Lowell Rippin', 'bailey.florencio@lang.org', '082142591492', '9505 Dennis Crossing\nNorth Shanelle, CT 38152-2578', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(16, 'Mike Tremblay', 'gretchen.smith@wehner.com', '082172323924', '5622 Glover Walks\nEast Patrickside, DC 21330', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(17, 'Richard Farrell', 'lmorar@hotmail.com', '082149890390', '58142 Hartmann Ramp\nNorth Demario, KS 78657-4277', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(18, 'Miss Eliza Buckridge', 'dicki.agnes@smith.biz', '082168474777', '34861 Quigley Divide Suite 622\nMarinaton, WY 28104-0334', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(19, 'Garfield Stanton', 'crenner@gmail.com', '082156635501', '5970 Ferry Gateway Suite 162\nRollinchester, AL 69150', '2023-06-23 22:11:06', '2023-06-23 22:11:06'),
(20, 'Prof. Hiram Gusikowski PhD', 'hmckenzie@yahoo.com', '082179525690', '13200 Langworth Mills\nKeelingland, NE 13724', '2023-06-23 22:11:06', '2023-06-23 22:11:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `isbn` int NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `publisher_id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `catalog_id` bigint UNSIGNED NOT NULL,
  `qty` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `year`, `publisher_id`, `author_id`, `catalog_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 673955062, 'Facilis eos dolor.', 2020, 19, 17, 3, 18, 14397, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(2, 788174036, 'Culpa natus quisquam accusamus.', 2019, 18, 8, 3, 14, 19098, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(3, 350299443, 'Libero et debitis.', 2012, 7, 13, 3, 13, 14383, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(4, 776370316, 'Voluptas sed sit.', 2012, 4, 16, 2, 19, 11246, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(5, 675476654, 'Animi est culpa.', 2021, 11, 14, 3, 11, 15162, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(6, 389743092, 'Et odit aut.', 2013, 11, 1, 1, 19, 18060, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(7, 670404672, 'Totam vel nulla illum.', 2011, 19, 4, 3, 12, 10790, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(8, 99697264, 'Error laudantium distinctio sint.', 2012, 7, 4, 2, 15, 13861, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(9, 561881828, 'Eligendi incidunt incidunt.', 2012, 18, 2, 3, 18, 13264, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(10, 229108293, 'Consequatur molestiae quia.', 2013, 6, 17, 2, 13, 17892, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(11, 353733721, 'Laborum ea dolores ab.', 2010, 20, 18, 3, 14, 17927, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(12, 982761339, 'Enim et ratione dignissimos.', 2016, 5, 20, 2, 17, 11627, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(13, 727151679, 'Repudiandae vero cupiditate asperiores.', 2013, 19, 20, 1, 13, 11741, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(14, 424937826, 'Libero nemo rem dolore.', 2013, 5, 16, 2, 11, 13432, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(15, 287078128, 'Recusandae dolor architecto.', 2020, 10, 9, 2, 10, 16742, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(16, 78928350, 'Nemo id molestias sed.', 2020, 10, 1, 2, 19, 15840, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(17, 531324650, 'Eum est qui et minima.', 2017, 7, 5, 1, 11, 13962, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(18, 107714460, 'Accusantium aut et aliquid.', 2010, 5, 5, 2, 15, 10350, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(19, 819469774, 'Accusamus ut voluptas.', 2015, 4, 16, 1, 18, 12158, '2023-06-23 22:12:18', '2023-06-23 22:12:18'),
(20, 90121918, 'Nobis est ipsum voluptatem.', 2016, 15, 16, 4, 18, 11426, '2023-06-23 22:12:18', '2023-06-23 22:12:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fiction', '2023-06-23 22:11:31', '2023-06-23 22:11:31'),
(2, 'Non-Fiction', '2023-06-23 22:11:32', '2023-06-23 22:11:32'),
(3, 'Science', '2023-06-23 22:11:32', '2023-06-23 22:11:32'),
(4, 'Biography', '2023-06-23 22:11:32', '2023-06-23 22:11:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `name`, `gender`, `phone_number`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Caleigh Murazik', 'male', '082150851331', '7270 Deondre Ridge Apt. 444\nWest Montanaport, TX 82064', 'andreane.haag@huels.biz', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(2, 'Micheal Labadie III', 'female', '082153281055', '64707 Kub Avenue Apt. 161\nBartellburgh, VT 61457-6241', 'isaac19@hotmail.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(3, 'Turner Hammes', 'male', '082184115862', '29087 Haven Junctions Apt. 969\nNew Madgeville, ME 11541', 'marcella38@gmail.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(4, 'Miss Rossie Dooley', 'female', '082134154151', '1491 Wilbert Forges\nDachberg, AL 41889', 'annetta.cummings@renner.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(5, 'Bo Koelpin', 'female', '082175099803', '313 McLaughlin Square Apt. 534\nPort Haileeview, KS 10945', 'bschoen@yahoo.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(6, 'Lurline Jast', 'male', '082136467912', '328 Zelda Brook\nVonburgh, MI 38017', 'hconroy@gmail.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(7, 'Mrs. Pamela Larson', 'female', '082108760478', '69358 Barrows Summit Suite 229\nMcClureburgh, DC 36638', 'leland.bednar@treutel.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(8, 'Jude Hettinger Jr.', 'male', '082193343962', '7069 Pinkie Mount Suite 144\nRandalville, NM 80419-4625', 'sammy35@gmail.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(9, 'Mrs. Roslyn Blanda DVM', 'male', '082193732603', '6094 Ernest Prairie Suite 625\nEast Rowena, CT 31724', 'khagenes@pfeffer.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(10, 'Randy Spencer', 'male', '082131989014', '54794 Dicki Gardens\nNew Polly, UT 69124-8706', 'casper.stephan@mertz.net', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(11, 'Zoila Pollich', 'female', '082141330620', '13390 Conroy Glen Apt. 309\nNew Eribertoville, NV 66446', 'alford46@gmail.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(12, 'Marques Kuhic', 'female', '082189819443', '8489 Hermann Crescent Apt. 292\nDejaville, WY 63343', 'shanelle.block@hotmail.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(13, 'Mrs. Gloria Weber', 'female', '082170890997', '789 Abbey Camp\nCarletonland, ID 90724', 'shields.kellie@kemmer.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(14, 'Fae Mraz', 'female', '082106140410', '167 Efrain Way Suite 940\nNelsonshire, PA 95373', 'hardy.runte@wehner.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(15, 'Candelario Koch', 'female', '082186565210', '6101 Graham Skyway\nNew Jakob, MI 65708-7978', 'hill.saul@frami.biz', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(16, 'Elisha Koepp', 'male', '082177496546', '95604 Scot Hollow Suite 691\nErlingfort, MD 62903', 'jbecker@goldner.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(17, 'Bradly Lebsack', 'male', '082134736667', '928 Quincy Street Suite 774\nEast Modesta, WI 09378', 'wyman.connor@pfannerstill.biz', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(18, 'Janelle Willms', 'female', '082167232483', '323 Upton Pines\nGiovannaberg, CO 49123-9646', 'gwendolyn.anderson@schuster.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(19, 'Prof. Emory Ruecker', 'female', '082172923404', '415 Fredy Heights Suite 293\nSchusterberg, IL 17714-9030', 'corwin.christop@gmail.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08'),
(20, 'Monique Fisher', 'female', '082158343272', '7750 Jacobson Mill\nStantonburgh, CO 57433', 'jack.paucek@kutch.com', '2023-06-23 22:12:08', '2023-06-23 22:12:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(49, '2010_06_19_152959_create_members_table', 1),
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(54, '2023_06_19_153224_create_publishers_table', 1),
(55, '2023_06_19_153256_create_authors_table', 1),
(56, '2023_06_19_153313_create_catalogs_table', 1),
(57, '2023_06_19_153325_create_books_table', 1),
(58, '2023_06_19_153355_create_transactions_table', 1),
(59, '2023_06_19_153416_create_transaction_details_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Turcotte and Sons', 'lind.patricia@frami.org', '082137380453', '731 Aufderhar Tunnel Suite 906\nLake Kristinafurt, MI 87670-0553', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(2, 'Weissnat, Quitzon and Reinger', 'barton.okuneva@gmail.com', '082175013812', '93106 Frida Throughway Suite 522\nSaigeburgh, AL 16074', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(3, 'Littel-Abbott', 'mdoyle@conroy.com', '0821201712', '1666 Maggio Field\nEstellville, NY 07210', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(4, 'Heller LLC', 'crohan@gusikowski.info', '082185522907', '916 Mary Keys Apt. 170\nNew Neva, MT 86439', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(5, 'Prosacco, Tremblay and Kassulke', 'zpurdy@wunsch.net', '08211697491', '7556 Destiny Pines\nPort Abbie, ND 92291', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(6, 'Hickle PLC', 'ignacio.moore@gmail.com', '082129763658', '870 Gutmann Garden\nShieldsberg, OK 04067-8776', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(7, 'Raynor, McDermott and Bartoletti', 'schamberger.marisa@hotmail.com', '082125431761', '897 Christopher Fords Suite 588\nKihnborough, CA 67288-6369', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(8, 'Sauer-Hudson', 'tpaucek@hotmail.com', '082126054990', '672 Kathryn Island\nNew Vanessamouth, ID 01769', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(9, 'Fritsch, Wisoky and Brown', 'yjenkins@moen.info', '082183852480', '37894 Howell Street Apt. 586\nEast Maximuschester, HI 25627-3363', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(10, 'Cronin, Hand and Hintz', 'dana02@yahoo.com', '082175761326', '2046 Zetta Isle Suite 467\nBartellbury, WV 70438-1708', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(11, 'Little-Paucek', 'luettgen.prince@yahoo.com', '082146810030', '97931 Imogene Plaza\nMekhihaven, FL 47158-4725', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(12, 'Bernier and Sons', 'rosamond.schumm@carroll.org', '082138658834', '60355 Estrella Hollow Apt. 241\nMarleyborough, MA 17417-5254', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(13, 'Bradtke-Ruecker', 'faye41@hotmail.com', '082198649036', '8315 Lois Street Apt. 850\nNew Jett, SC 34070', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(14, 'Erdman PLC', 'anissa.lockman@yahoo.com', '082171725415', '273 April Island\nMoorehaven, GA 68980-6189', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(15, 'Deckow, Grant and Weissnat', 'purdy.asia@okuneva.org', '082173749157', '6059 Upton Light\nVicentabury, IA 54398', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(16, 'Smitham Group', 'adams.heath@will.com', '082196888712', '685 Davis Street\nWiegandmouth, IN 44018', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(17, 'Kassulke, Hand and Barton', 'jules90@gmail.com', '082195672871', '629 Ernestine Hollow\nNorth Arishire, NJ 76894', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(18, 'Halvorson-Lynch', 'ryan.abigale@hotmail.com', '082174750045', '6522 Bogisich Underpass\nNew Ebony, MD 04312-2512', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(19, 'Turner Group', 'syble99@pfannerstill.com', '082161234649', '35337 Leopoldo Shores\nSouth Gerson, HI 39628-3212', '2023-06-23 22:11:56', '2023-06-23 22:11:56'),
(20, 'Leuschke-Hyatt', 'odie.rice@bartoletti.com', '082143055872', '223 Izabella Summit Suite 954\nNew Maci, FL 86257-3531', '2023-06-23 22:11:56', '2023-06-23 22:11:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `member_id` bigint UNSIGNED NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint UNSIGNED NOT NULL,
  `transaction_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `qty` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_catalog_id_foreign` (`catalog_id`);

--
-- Indeks untuk tabel `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_member_id_foreign` (`member_id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_book_id_foreign` (`book_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_member_id_foreign` (`member_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

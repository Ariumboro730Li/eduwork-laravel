-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 01:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(6, 'Kesehatan', '2022-07-29 11:03:40', '2022-07-29 11:03:40'),
(7, 'Aksesoris Fashion', '2022-07-29 11:03:55', '2022-07-29 11:04:37'),
(8, 'Elektronik', '2022-07-29 11:04:53', '2022-07-29 11:04:53'),
(9, 'Pakaian Pria', '2022-07-29 11:05:10', '2022-07-29 11:05:10'),
(10, 'Sepatu Pria', '2022-07-29 11:05:17', '2022-07-29 11:05:17'),
(11, 'Handphone & Aksesoris', '2022-07-29 11:05:47', '2022-07-29 11:05:47'),
(12, 'Fashion Muslim', '2022-07-29 11:06:00', '2022-07-29 11:06:00'),
(13, 'Koper & Tas Travel', '2022-07-29 11:06:28', '2022-07-29 11:06:28'),
(14, 'Tas Wanita', '2022-07-29 11:06:39', '2022-07-29 11:06:39'),
(15, 'Pakaian Wanita', '2022-07-29 11:06:48', '2022-07-29 11:06:48'),
(16, 'Sepatu Wanita', '2022-07-29 11:07:02', '2022-07-29 11:07:02'),
(17, 'Tas Pria', '2022-07-29 11:07:12', '2022-07-29 11:07:12'),
(18, 'Jam Tangan', '2022-07-29 11:07:21', '2022-07-29 11:07:21'),
(19, 'Audio', '2022-07-29 11:08:07', '2022-07-29 11:08:07'),
(20, 'Makanan & Minuman', '2022-07-29 11:08:23', '2022-07-29 11:08:23'),
(21, 'Perawatan & Kecantikan', '2022-07-29 11:08:42', '2022-07-29 11:08:42'),
(22, 'Ibu & Bayi', '2022-07-29 11:09:07', '2022-07-29 11:09:07'),
(23, 'Fashion Bayi & Anak', '2022-07-29 11:09:48', '2022-07-29 11:09:48'),
(24, 'Kamera & Drone', '2022-07-29 11:10:00', '2022-07-29 11:10:00'),
(25, 'Perlengkapan Rumah', '2022-07-29 11:10:16', '2022-07-29 11:10:16'),
(26, 'Olahraga & Outdoor', '2022-07-29 11:10:42', '2022-07-29 11:10:42'),
(27, 'Buku & Alat Tulis', '2022-07-29 11:10:56', '2022-07-29 11:10:56'),
(28, 'Hobi & Koleksi', '2022-07-29 11:11:10', '2022-07-29 11:11:10'),
(29, 'Mobil', '2022-07-29 11:11:17', '2022-07-29 11:11:17'),
(30, 'Sepeda Motor', '2022-07-29 11:11:29', '2022-07-29 11:11:29'),
(31, 'Tiket & Voucher', '2022-07-29 11:11:57', '2022-07-29 11:11:57'),
(32, 'Buku & Majalah', '2022-07-29 11:12:10', '2022-07-29 11:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(10) UNSIGNED NOT NULL,
  `kode_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `kode_member`, `nama`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(9, '00001', 'Ansel Howe', '667 Monahan Highway\r\nSchuylerton, TX 53861', 'Ansel Howe', '2022-07-29 11:50:31', '2022-07-29 11:50:31'),
(10, '00002', 'Lucinda Farrell', '76237 William Greens Apt. 381\r\nPfefferland, IN 18837-2964', 'Lucinda Farrell', '2022-07-29 11:51:02', '2022-07-29 11:51:02'),
(11, '00003', 'Mrs. Ruthe Ebert I', '45954 Pacocha Creek\r\nPort Gust, AZ 82274-1427', 'Mrs. Ruthe Ebert I', '2022-07-29 11:51:23', '2022-07-29 11:51:23'),
(12, '00004', 'Jaylan Jaskolski', '8309 Oliver Keys Apt. 738\r\nLoweborough, FL 52792', 'Jaylan Jaskolski', '2022-07-29 11:51:47', '2022-07-29 11:51:47'),
(13, '00005', 'Dasia Koepp', '48614 Weldon Heights\r\nNorth Ed, OK 16564', '082172610662', '2022-07-29 11:52:20', '2022-07-29 11:52:20'),
(14, '00006', 'Herman Braun II', '35139 Ruby Causeway\r\nSouth Kaceyhaven, VT 64689-4889', '082148970342', '2022-07-29 11:52:40', '2022-07-29 11:52:40'),
(15, '00007', 'Meaghan Jast', '514 Gusikowski Cape\r\nNorth Johnathon, OH 12219', '082165436809', '2022-07-29 11:53:07', '2022-07-29 11:53:07'),
(16, '00008', 'Julien Wiza MD', '75019 Donna Shoal Apt. 818\r\nSusieton, ND 60323-0103', '082154916973', '2022-07-29 11:53:31', '2022-07-29 11:53:31'),
(17, '00009', 'Miss Kaycee Wehner Sr.', '72710 Schmeler Port\r\nPort Halieborough, VA 45221', '082197489253', '2022-07-29 11:53:57', '2022-07-29 11:53:57'),
(18, '00010', 'Prof. Reuben Morar', '929 Lindgren Estates\r\nKristyhaven, NC 60739-1953', '082186549788', '2022-07-29 11:54:31', '2022-07-29 11:54:31'),
(19, '00011', 'Wilfred Hamill', '3792 Greenholt Rapids\r\nLake Zionhaven, AR 73749-8358', '082167227734', '2022-07-29 11:54:52', '2022-07-29 11:54:52'),
(20, '00012', 'Prof. Hans Berge PhD', '727 Kenton Pine\r\nWeimannport, DE 03038-8520', '082111992188', '2022-07-29 11:55:18', '2022-07-29 11:55:18'),
(21, '00013', 'Mrs. Kara Deckow', '6256 Rhianna Road\r\nKobebury, AR 37654-3414', '082144339446', '2022-07-29 11:55:43', '2022-07-29 11:55:43'),
(22, '00014', 'Mr. Tom Kuhn', '77018 Patricia Rapid Apt. 029\r\nEast Dinafort, WY 35479', '082184892866', '2022-07-29 11:56:05', '2022-07-29 11:56:05'),
(23, '00015', 'Lera Osinski', '965 Edythe Freeway\r\nLake Nonabury, SC 78260', '082152182485', '2022-07-29 11:56:27', '2022-07-29 11:56:27'),
(24, '00016', 'Lauren Koch', '082139229177', '082139229177', '2022-07-29 11:56:56', '2022-07-29 11:56:56'),
(25, '00017', 'Mr. Neil Cummings IV', '8393 Mayert Lock Apt. 100\r\nJerrellfurt, IA 75673', '082175452147', '2022-07-29 11:57:15', '2022-07-29 11:57:15'),
(26, '00018', 'Prof. Rosella Cronin III', '68576 Goyette Green\r\nElliottown, HI 04891-7473', '082183239558', '2022-07-29 11:57:38', '2022-07-29 11:57:38'),
(27, '00019', 'Jonathon Bergnaum', '968 Ed Mills\r\nJosianeburgh, VA 67623-2367', '082163846562', '2022-07-29 11:58:06', '2022-07-29 11:58:06'),
(28, '00020', 'Urban Mayer DVM', '869 Nellie Cliff Apt. 321\r\nNorth Conner, SC 81995', '08215530926', '2022-07-29 11:58:28', '2022-07-29 11:58:28');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_05_194740_tambah_kolom_baru_to_users_table', 1),
(7, '2021_03_05_195441_buat_kategori_table', 1),
(8, '2021_03_05_195949_buat_produk_table', 1),
(9, '2021_03_05_200515_buat_member_table', 1),
(10, '2021_03_05_200706_buat_supplier_table', 1),
(11, '2021_03_05_200841_buat_pembelian_table', 1),
(12, '2021_03_05_200845_buat_pembelian_detail_table', 1),
(13, '2021_03_05_200853_buat_penjualan_table', 1),
(14, '2021_03_05_200858_buat_penjualan_detail_table', 1),
(15, '2021_03_05_200904_buat_setting_table', 1),
(16, '2021_03_05_201756_buat_pengeluaran_table', 1),
(17, '2021_03_11_225128_create_sessions_table', 1),
(18, '2021_03_24_115009_tambah_foreign_key_to_produk_table', 1),
(19, '2021_03_24_131829_tambah_kode_produk_to_produk_table', 1),
(20, '2021_05_08_220315_tambah_diskon_to_setting_table', 1),
(21, '2021_05_09_124745_edit_id_member_to_penjualan_table', 1);

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
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(10) UNSIGNED NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `diskon` tinyint(4) NOT NULL DEFAULT 0,
  `bayar` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_supplier`, `total_item`, `total_harga`, `diskon`, `bayar`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 90000, 50, 45000, '2022-06-27 03:32:26', '2022-06-27 03:33:25'),
(2, 2, 50, 1600000, 2, 1568000, '2022-07-29 12:46:07', '2022-07-29 12:47:50'),
(3, 9, 1, 20000, 0, 20000, '2022-07-29 12:55:14', '2022-07-29 12:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_detail`
--

CREATE TABLE `pembelian_detail` (
  `id_pembelian_detail` int(10) UNSIGNED NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelian_detail`
--

INSERT INTO `pembelian_detail` (`id_pembelian_detail`, `id_pembelian`, `id_produk`, `harga_beli`, `jumlah`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 90000, 1, 90000, '2022-06-27 03:32:51', '2022-06-27 03:32:51'),
(2, 2, 11, 20000, 10, 200000, '2022-07-29 12:46:29', '2022-07-29 12:47:23'),
(3, 2, 4, 10000, 10, 100000, '2022-07-29 12:46:43', '2022-07-29 12:47:30'),
(4, 2, 12, 50000, 10, 500000, '2022-07-29 12:47:01', '2022-07-29 12:47:35'),
(5, 2, 8, 70000, 10, 700000, '2022-07-29 12:47:06', '2022-07-29 12:47:37'),
(6, 2, 9, 10000, 10, 100000, '2022-07-29 12:47:12', '2022-07-29 12:47:40'),
(7, 3, 11, 20000, 1, 20000, '2022-07-29 12:55:43', '2022-07-29 12:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(10) UNSIGNED NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `deskripsi`, `nominal`, `created_at`, `updated_at`) VALUES
(1, 'Listrik', 100000, '2022-06-27 03:32:14', '2022-07-29 12:54:50'),
(3, 'Listrik', 150000, '2022-07-29 16:05:22', '2022-07-29 16:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(10) UNSIGNED NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `total_item` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `diskon` tinyint(4) NOT NULL DEFAULT 0,
  `bayar` int(11) NOT NULL DEFAULT 0,
  `diterima` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_member`, `total_item`, `total_harga`, `diskon`, `bayar`, `diterima`, `id_user`, `created_at`, `updated_at`) VALUES
(31, 14, 2, 55000, 5, 52250, 100000, 1, '2022-07-29 12:50:17', '2022-07-29 12:51:20'),
(32, 9, 1, 114000, 5, 108300, 120000, 1, '2022-07-29 12:52:02', '2022-07-29 12:52:41'),
(37, 19, 1, 949050, 5, 901598, 950000, 1, '2022-07-29 15:35:26', '2022-07-29 15:36:13'),
(39, 9, 7, 1197980, 5, 1138081, 1150000, 1, '2022-07-29 15:42:27', '2022-07-29 15:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `id_penjualan_detail` int(10) UNSIGNED NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `diskon` tinyint(4) NOT NULL DEFAULT 0,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`id_penjualan_detail`, `id_penjualan`, `id_produk`, `harga_jual`, `jumlah`, `diskon`, `subtotal`, `created_at`, `updated_at`) VALUES
(20, 31, 11, 30000, 1, 5, 30000, '2022-07-29 12:50:24', '2022-07-29 12:51:20'),
(21, 31, 13, 25000, 1, 5, 25000, '2022-07-29 12:51:02', '2022-07-29 12:51:21'),
(22, 32, 8, 120000, 1, 5, 114000, '2022-07-29 12:52:13', '2022-07-29 12:52:13'),
(23, 37, 10, 999000, 1, 5, 949050, '2022-07-29 15:35:41', '2022-07-29 15:35:41'),
(24, 39, 10, 999000, 1, 5, 949050, '2022-07-29 15:42:35', '2022-07-29 15:42:35'),
(25, 39, 5, 6000, 1, 5, 5940, '2022-07-29 15:42:41', '2022-07-29 15:44:07'),
(26, 39, 8, 120000, 1, 5, 114000, '2022-07-29 15:42:45', '2022-07-29 15:42:45'),
(27, 39, 12, 70000, 1, 5, 68600, '2022-07-29 15:42:49', '2022-07-29 15:44:07'),
(28, 39, 4, 11000, 1, 5, 10890, '2022-07-29 15:42:53', '2022-07-29 15:44:07'),
(29, 39, 6, 25000, 1, 5, 24500, '2022-07-29 15:42:57', '2022-07-29 15:44:07'),
(30, 39, 13, 25000, 1, 5, 25000, '2022-07-29 15:43:01', '2022-07-29 15:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `kode_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_beli` int(11) NOT NULL,
  `diskon` tinyint(4) NOT NULL DEFAULT 0,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `kode_produk`, `nama_produk`, `merk`, `harga_beli`, `diskon`, `harga_jual`, `stok`, `created_at`, `updated_at`) VALUES
(4, 6, 'P000001', 'Hand Sanitizer', 'Dettol', 10000, 1, 11000, 129, '2022-07-29 12:28:19', '2022-07-29 15:44:07'),
(5, 7, 'P000005', 'Masker', 'Fitcare KN95', 5000, 1, 6000, 49, '2022-07-29 12:29:37', '2022-07-29 15:44:07'),
(6, 7, 'P000006', 'Topi', 'Under Armor', 20000, 2, 25000, 59, '2022-07-29 12:30:38', '2022-07-29 15:44:07'),
(7, 8, 'P000007', 'Saklar', 'Philips', 6000, 0, 9000, 40, '2022-07-29 12:31:40', '2022-07-29 12:42:59'),
(8, 9, 'P000008', 'Hoodie', 'Erigo', 70000, 5, 120000, 128, '2022-07-29 12:33:42', '2022-07-29 15:44:07'),
(9, 9, 'P000009', 'Mantel', 'Axio', 10000, 0, 15000, 80, '2022-07-29 12:34:39', '2022-07-29 12:49:43'),
(10, 10, 'P000010', 'Sneakers', 'Nike', 500000, 5, 999000, 18, '2022-07-29 12:35:56', '2022-07-29 15:44:07'),
(11, 11, 'P000011', 'Casing', 'Adidas Mobile', 20000, 0, 30000, 71, '2022-07-29 12:37:04', '2022-07-29 15:37:46'),
(12, 12, 'P000012', 'Hijab', 'Rabbani', 50000, 2, 70000, 129, '2022-07-29 12:38:48', '2022-07-29 15:44:07'),
(13, 14, 'P000013', 'Tote Bag', 'Uniqlo', 20000, 0, 25000, 108, '2022-07-29 12:40:05', '2022-07-29 15:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5neVxoIxwx4dUAVrr4i2Yh9cEK1JBf9gaSUaPjEo', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoielluSjBTeDhmTGEyeFltSlhaV1NFbmZxRTZRYUhGNTBGN2I5bFI3bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3QvZWR1d29ya190ZXN0ZXIvcG9zL3Blbmp1YWxhbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkS2NZT2hLY0N6S3Btd1BMY2JSOFR3ZUpTZW1obGo5cXJNZXJPMjU0czR4cjZmd1JxVloybEsiO3M6MTI6ImlkX3Blbmp1YWxhbiI7aTo0Mzt9', 1659137452),
('BrBwYi6UqsXcGRZzjR6UULTGIJoYk3VjzC6e2wMx', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUG13WDVma2kzcnd1YzJSMzlWQXRDbTZSSXhUNVRpU0NwTW92MjlJbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3QvZWR1d29ya190ZXN0ZXIvcG9zL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRLY1lPaEtjQ3pLcG13UExjYlI4VHdlSlNlbWhsajlxck1lck8yNTRzNHhyNmZ3UnFWWjJsSyI7czoxMjoiaWRfcGVuanVhbGFuIjtpOjQxO30=', 1659136828),
('c4cg0WlBCh8R1KziL2iJS50NiV5hAfoF10PwGVw0', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNUNjdWtPaVp0NTRyNmtJZnQzUTg4Nk1qVzRVRUxMWmtmUUs2MWc5ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3QvZWR1d29ya190ZXN0ZXIvcG9zL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRLY1lPaEtjQ3pLcG13UExjYlI4VHdlSlNlbWhsajlxck1lck8yNTRzNHhyNmZ3UnFWWjJsSyI7fQ==', 1659137152),
('pc1fKGfhF4NTDs34ZYdJR9JMJRuFg4T3Qs8nzTu2', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiV045Z0xhWldUTWF6NDhGaGlwOFJCRHgzYlJhMmdOQlptOEZjclI4NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkS2NZT2hLY0N6S3Btd1BMY2JSOFR3ZUpTZW1obGo5cXJNZXJPMjU0czR4cjZmd1JxVloybEsiO3M6MTI6ImlkX3Blbmp1YWxhbiI7aTozOTtzOjEyOiJpZF9wZW1iZWxpYW4iO2k6MztzOjExOiJpZF9zdXBwbGllciI7czoxOiI5Ijt9', 1659137059);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(10) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_nota` tinyint(4) NOT NULL,
  `diskon` smallint(6) NOT NULL DEFAULT 0,
  `path_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_kartu_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_perusahaan`, `alamat`, `telepon`, `tipe_nota`, `diskon`, `path_logo`, `path_kartu_member`, `created_at`, `updated_at`) VALUES
(1, 'Adi Store', 'Jl. Kibandang Samaran Ds. Slangit', '081234779987', 2, 5, '/img/logo-20220629171211.png', '/img/member.png', NULL, '2022-06-30 06:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(2, 'Tillman Herzog', '2028 Rosina Land Suite 281', '082901183920', '2022-07-29 12:15:27', '2022-07-29 12:15:27'),
(3, 'Laron Gerlach', '9835 Noe Ville Apt. 086', '082391256661', '2022-07-29 12:15:57', '2022-07-29 12:15:57'),
(4, 'Evangeline Rath', '481 Donald Divide', '082266386847', '2022-07-29 12:16:25', '2022-07-29 12:16:25'),
(5, 'Berenice McDermott', '9711 Virginia Fall Suite 244', '082538489309', '2022-07-29 12:17:05', '2022-07-29 12:17:05'),
(6, 'Mrs. Ramona Luettgen', '309 Hudson Terrace Suite 648', '082193608729', '2022-07-29 12:17:36', '2022-07-29 12:17:36'),
(7, 'Mrs. Elfrieda Morar', '63141 Kari Underpass Apt. 834', '082273413833', '2022-07-29 12:18:02', '2022-07-29 12:18:02'),
(8, 'Dr. Vinnie Kovacek', '459 Elias Ridges Suite 841', '082872540066', '2022-07-29 12:18:26', '2022-07-29 12:18:26'),
(9, 'Prof. Otha Kunde III', '1743 O\'Kon Forks', '082565674007', '2022-07-29 12:18:57', '2022-07-29 12:18:57'),
(10, 'Dr. Alessandra Douglas V', '4827 Tillman Grove', '082789393408', '2022-07-29 12:19:16', '2022-07-29 12:19:16'),
(11, 'Jordy Kerluke', '42612 Prohaska Springs Apt. 956', '082322681587', '2022-07-29 12:19:39', '2022-07-29 12:19:39');

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
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `foto`, `level`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$KcYOhKcCzKpmwPLcbR8TweJSemhlj9qrMerO254s4xr6fwRqVZ2lK', '/img/logo-20220629180006.jpeg', 1, NULL, NULL, NULL, NULL, NULL, '2022-06-25 03:49:28', '2022-06-29 11:00:06'),
(2, 'Cashier', 'cashier@gmail.com', NULL, '$2y$10$dsHEMw4qB31vZfiEUQmNl.rFlwnYIXTcja6A..tLroOAoKbw/rHIq', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-06-25 03:49:28', '2022-06-25 03:49:28'),
(3, 'test', 'xiyare5415@doerma.com', NULL, '$2y$10$nGXR1SwcLb1owsow7donyuSF92xMLjfTvHfL.KWeudLGp52OcF5KS', NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-30 07:54:53', '2022-07-14 19:31:16'),
(5, 'Fausto Koch', 'savanna.ohara@nienow.com', NULL, '$2y$10$unXBz9J6K9VATwpCewJj4.zmlpSRCg03iuhDrWyhJY0.OJXsDPwWC', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:22:43', '2022-07-29 12:22:43'),
(6, 'Kurt Steuber PhD', 'karina93@hermiston.com', NULL, '$2y$10$E213RK3aZUwhXb2cZKXNZOoqowp3qAnmxfPmNoAJTUSTe/NmV02H2', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:23:12', '2022-07-29 12:23:12'),
(7, 'Maximus Williamson V', 'vbartell@wunsch.com', NULL, '$2y$10$BKqoI4zAm2DSQwpvvIuyB.p72Mm7xLtXFavw2ZRJVCr9wleaaKrOW', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:23:52', '2022-07-29 12:23:52'),
(8, 'Pauline Pacocha', 'adalberto87@gmail.com', NULL, '$2y$10$GnIbsii//j9CJr0wLKwuQ.TuWNd.YMNwfNQ.kcH/8Dn5iULAlubB2', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:24:25', '2022-07-29 12:24:25'),
(9, 'Prof. Tracey Bayer I', 'phowell@gmail.com', NULL, '$2y$10$MnmHoSASsdzWbPzS9.3W.OYJsqtR8VPtKDKWfRR4i0ACeBzlyKZf6', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:24:51', '2022-07-29 12:24:51'),
(10, 'Jan Weimann V', 'nakia.hirthe@yahoo.com', NULL, '$2y$10$3wIlp5s/e3NIYpOBupQ1vu5P4MuBsuP88MXe7w2b8rz4MEylfPKkq', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:25:37', '2022-07-29 12:25:37'),
(11, 'Mrs. Chanel Gibson I', 'donnell87@hotmail.com', NULL, '$2y$10$UU0mnmbDdMwgh/3Ik1OJ.OEqQhGQZ5IUXjzrvYdMpKKkrhip6m7nq', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:26:03', '2022-07-29 12:26:03'),
(12, 'Carley Erdman', 'shaina30@gmail.com', NULL, '$2y$10$gqzIUI7g1hip0VCe7Byov.JBoJclmhN9ewSQ/6X.S26WLMYs3B5HW', '/img/user.jpg', 2, NULL, NULL, NULL, NULL, NULL, '2022-07-29 12:26:34', '2022-07-29 12:26:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `kategori_nama_kategori_unique` (`nama_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `member_kode_member_unique` (`kode_member`);

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
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  ADD PRIMARY KEY (`id_pembelian_detail`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`id_penjualan_detail`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `produk_nama_produk_unique` (`nama_produk`),
  ADD UNIQUE KEY `produk_kode_produk_unique` (`kode_produk`),
  ADD KEY `produk_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

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
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelian_detail`
--
ALTER TABLE `pembelian_detail`
  MODIFY `id_pembelian_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `id_penjualan_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

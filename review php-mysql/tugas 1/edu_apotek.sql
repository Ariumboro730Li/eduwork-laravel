-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.24-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table edu_apotek.produsen_obat
CREATE TABLE IF NOT EXISTS `produsen_obat` (
  `id` varchar(50) NOT NULL,
  `nama_produsen` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel edu_apotek.produsen_obat: ~5 rows (lebih kurang)
INSERT INTO `produsen_obat` (`id`, `nama_produsen`, `status`, `alamat`, `kontak`) VALUES
	('prod1', 'Mammo Farma', 'produsen utama', 'jl. lobak 619, Jakarta Utara', 'marketing@mammofarma.com'),
	('prod2', 'Bang Medica ', 'produsen kedua', 'jl. puhart no 19, Jakarta Utara', 'contact@bangmedica.com'),
	('prod3', 'Winner Indonesia', 'produsen kedua', 'jl. inseo no 88, Jakarta Pusat', 'marketingwinina@winnerina.com'),
	('prod4', 'Bethop Pharma', 'produsen ketiga', 'jl. melodi indah no 123, Bekasi', 'market@bethoppharma.com'),
	('prod5', 'Ungu Pharma', 'produsen keempat', 'jl. pukis manis no 777, Bekasi', 'marketingungu@ungupharmacy.com');

-- membuang struktur untuk table edu_apotek.staff_eduapotek
CREATE TABLE IF NOT EXISTS `staff_eduapotek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(75) NOT NULL DEFAULT '',
  `shift` enum('pagi','sore','malam') DEFAULT NULL,
  `tahun_kerja` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel edu_apotek.staff_eduapotek: ~10 rows (lebih kurang)
INSERT INTO `staff_eduapotek` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `email`, `shift`, `tahun_kerja`) VALUES
	(1, 'Inka Fazarillah', 'wanita', '1995-12-20', 'fazarillah@gmail.com', 'pagi', '2017'),
	(2, 'Bulan sabintang', 'wanita', '1992-12-20', 'bulbin@gmail.com', 'pagi', '2014'),
	(3, 'Yogi Minara', 'pria', '1993-03-09', 'augustd@yahoo.com', 'sore', '2013'),
	(4, 'Raphy Montreal', 'pria', '1994-09-12', 'rapmon@hotmail.com', 'sore', '2013'),
	(5, 'Maria Hasibuan', 'wanita', '1995-07-23', 'mariamaria@yahoo.com', 'pagi', '2014'),
	(6, 'Matahari Sinaga', 'wanita', '1991-02-21', 'sinagam@yahoo.com', 'malam', '2014'),
	(7, 'Windi Juniar', 'wanita', '1995-04-17', 'magnolia@yahoo.com', 'malam', '2014'),
	(8, 'Sonnie Minata', 'pria', '1993-03-30', 'Sonmin@gmail.com', 'malam', '2014'),
	(9, 'Yuki Mori', 'wanita', '2002-11-06', 'koyuchan@yahoo.com', 'sore', '2021'),
	(10, 'Ramona April', 'wanita', '2003-12-24', 'April@yahoo.com', NULL, '2022');

-- membuang struktur untuk table edu_apotek.stok_eduapotek
CREATE TABLE IF NOT EXISTS `stok_eduapotek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_staffinput` int(11) DEFAULT NULL,
  `nama_produk` varchar(50) NOT NULL DEFAULT '',
  `jenis` varchar(50) NOT NULL DEFAULT '',
  `produsen` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 1,
  `waktu_input` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_staffinput` (`id_staffinput`),
  KEY `fk_stok_produsen` (`produsen`),
  CONSTRAINT `fk_staffinput` FOREIGN KEY (`id_staffinput`) REFERENCES `staff_eduapotek` (`id`),
  CONSTRAINT `fk_stok_produsen` FOREIGN KEY (`produsen`) REFERENCES `produsen_obat` (`id`),
  CONSTRAINT `cekjumlah` CHECK (`jumlah` > 0)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel edu_apotek.stok_eduapotek: ~31 rows (lebih kurang)
INSERT INTO `stok_eduapotek` (`id`, `id_staffinput`, `nama_produk`, `jenis`, `produsen`, `harga`, `jumlah`, `waktu_input`) VALUES
	(1, 1, 'Albendazol suspensi 200 mg', 'Obat cair', 'prod1', 45000, 15, '2022-05-13 22:22:32'),
	(2, 1, 'Alopurinnol tablet 100 mg', 'tablet', 'prod1', 18500, 20, '2022-05-13 22:24:02'),
	(3, 3, 'Ambroxol 30 mg', 'tablet', 'prod2', 17000, 20, '2022-05-13 22:24:51'),
	(4, 2, 'Aminofilin 200 mg', 'tablet', 'prod1', 15000, 10, '2022-05-13 22:25:42'),
	(5, 2, 'Atropin Sulfat 0,5%', 'tetes mata', 'prod3', 7500, 12, '2022-05-13 22:27:25'),
	(6, 9, 'Benzatin Benzil 2,4 jua IU', 'obat vial', 'prod3', 155000, 20, '2022-05-13 22:36:07'),
	(7, 3, 'Betametason 0,1%', 'krim', 'prod2', 6500, 25, '2022-05-13 22:37:08'),
	(8, 5, 'Bisoprolol 5 mg', 'tablet', 'prod2', 95000, 24, '2022-05-13 22:38:05'),
	(9, 3, 'Cetirizin Sirup 5 ml', 'sirup', 'prod3', 15000, 20, '2022-05-13 22:44:03'),
	(10, 3, 'Betametason 0,5 mg', 'tablet', 'prod3', 10000, 12, '2022-05-13 22:44:59'),
	(11, 3, 'Cetirizine 10 mg', 'tablet', 'prod2', 14000, 12, '2022-05-13 22:45:53'),
	(12, 4, 'Clobetasol 0,05%', 'krim', 'prod2', 17500, 24, '2022-05-13 22:46:51'),
	(13, 5, 'Dapson 100 mg', 'tablet', 'prod4', 45000, 30, '2022-05-13 22:47:44'),
	(14, 4, 'Dekstran 70 - larutan infus 6% steril', 'cairan infus', 'prod4', 50000, 20, '2022-05-13 22:49:34'),
	(15, 2, 'Deksametason 0,5 mg', 'tablet', 'prod2', 12000, 12, '2022-05-13 22:51:42'),
	(16, 4, 'diltiazem HCL', 'tablet', 'prod4', 21000, 20, '2022-05-13 22:52:17'),
	(17, 4, 'Etambutol 250 mg (HCl)', 'tablet', 'prod4', 95000, 30, '2022-05-13 22:53:56'),
	(18, 5, 'Etoposid 100 mg', 'kapsul', 'prod3', 90000, 20, '2022-05-13 22:55:11'),
	(19, 5, 'Famotidine 40 mg', 'tablet', 'prod2', 12000, 24, '2022-05-13 23:13:09'),
	(20, 7, 'Fenibutason 200 mg', 'tablet', 'prod1', 110000, 12, '2022-05-13 23:13:53'),
	(21, 7, 'Fenobarbital 30 mg', 'tablet ', 'prod2', 64000, 30, '2022-05-13 23:14:12'),
	(22, 6, 'Fenoksimetil Penisilin 500 mg', 'tablet', 'prod4', 64000, 36, '2022-05-13 23:16:30'),
	(23, 6, 'Fenol Gliserol 10%', 'tetes telinga', 'prod4', 33000, 24, '2022-05-13 23:17:22'),
	(24, 1, 'Menadion (Vit.K3) 10 mg', 'tablet', 'prod3', 45000, 24, '2022-05-13 23:19:09'),
	(25, 1, 'Flukonazol 150 mg', 'tablet', 'prod2', 290000, 36, '2022-05-13 23:20:13'),
	(26, 9, 'Furosemid 40 mg ', 'tablet', 'prod4', 28000, 12, '2022-05-13 23:23:08'),
	(27, 8, 'Isonazid 300 mg', 'tablet', 'prod3', 131000, 24, '2022-05-13 23:23:41'),
	(28, 8, 'Ibuprofen 200 mg', 'tablet', 'prod2', 7500, 12, '2022-05-13 23:25:31'),
	(29, 9, 'Itrakonazol 100 mg', 'kapsul', 'prod4', 60000, 24, '2022-05-13 23:26:33'),
	(30, 7, 'Hidrokortison 2,5%', 'krim', 'prod3', 6500, 12, '2022-05-13 23:28:19'),
	(31, NULL, 'Apacin 25 mg', 'kapsul', 'prod1', 17000, 20, '2022-05-14 14:29:04');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

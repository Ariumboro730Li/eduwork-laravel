-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.24-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table apotek.apoteker
CREATE TABLE IF NOT EXISTS `apoteker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` int(11) DEFAULT NULL,
  `no_telp` char(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.apoteker: ~10 rows (lebih kurang)
/*!40000 ALTER TABLE `apoteker` DISABLE KEYS */;
INSERT INTO `apoteker` (`id`, `nama`, `tanggal_lahir`, `alamat`, `no_telp`) VALUES
	(3, 'Achmad', '1994-09-12', 0, '085233235815'),
	(4, 'Achmad', '1994-09-12', 0, '085233235815'),
	(6, 'Achmad', '1994-03-31', 0, '041321541555'),
	(7, 'Achmad', '1994-09-12', 0, '085233235815'),
	(8, 'Fathoni', '1994-09-12', 0, '085233235815'),
	(9, 'Achmad', '1994-09-12', 0, '085233235815'),
	(10, 'Achmad', '1994-09-12', 0, '085233235815'),
	(11, 'Achmad', '1994-09-12', 0, '085233235815'),
	(12, 'Achmad', '1994-09-12', 0, '085233235815'),
	(13, 'Achmad', '1994-09-12', 0, '085233235815');
/*!40000 ALTER TABLE `apoteker` ENABLE KEYS */;

-- membuang struktur untuk table apotek.detail-apoteker
CREATE TABLE IF NOT EXISTS `detail-apoteker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domisili` varchar(32) NOT NULL,
  `agama` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `facebook` varchar(64) NOT NULL,
  `instragram` varchar(64) NOT NULL,
  `twitter` varchar(64) NOT NULL,
  `linked-in` varchar(64) NOT NULL,
  `blog` varchar(64) NOT NULL,
  `youtube` varchar(64) NOT NULL,
  `id_apoteker` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_apoteker` (`id_apoteker`),
  CONSTRAINT `detail-apoteker_ibfk_1` FOREIGN KEY (`id_apoteker`) REFERENCES `apoteker` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.detail-apoteker: ~10 rows (lebih kurang)
/*!40000 ALTER TABLE `detail-apoteker` DISABLE KEYS */;
INSERT INTO `detail-apoteker` (`id`, `domisili`, `agama`, `email`, `facebook`, `instragram`, `twitter`, `linked-in`, `blog`, `youtube`, `id_apoteker`) VALUES
	(1, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(2, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(3, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(4, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(5, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(6, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(7, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(8, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(9, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3),
	(10, 'LUMAJANG', 'ISLAM', 'fathoniachmad43@gmail.com', 'Achmad Fathoni', 'tonihwoarang', '', '', '', '', 3);
/*!40000 ALTER TABLE `detail-apoteker` ENABLE KEYS */;

-- membuang struktur untuk table apotek.detail-transaksi
CREATE TABLE IF NOT EXISTS `detail-transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_obat` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detail-transaksi_ibfk_1` (`id_transaksi`),
  KEY `id_obat` (`id_obat`),
  CONSTRAINT `detail-transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`),
  CONSTRAINT `detail-transaksi_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.detail-transaksi: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `detail-transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail-transaksi` ENABLE KEYS */;

-- membuang struktur untuk table apotek.obat
CREATE TABLE IF NOT EXISTS `obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(64) NOT NULL,
  `manfaat` text DEFAULT NULL,
  `perusahaan` varchar(32) NOT NULL,
  `tahun produksi` int(11) DEFAULT NULL,
  `id_apoteker` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_apoteker` (`id_apoteker`),
  CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_apoteker`) REFERENCES `apoteker` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.obat: ~11 rows (lebih kurang)
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
INSERT INTO `obat` (`id`, `jenis`, `manfaat`, `perusahaan`, `tahun produksi`, `id_apoteker`) VALUES
	(1, 'Belajar Laravel', 'melatih keahlian programmer', 'Toni', 2022, 3),
	(2, 'javasdript', NULL, 'Toni', 2021, 3),
	(3, 'HTML', NULL, 'Toni', 2021, 4),
	(4, 'CSS', NULL, 'Toni', 2021, 3),
	(5, 'PHP', NULL, 'Toni', 2021, 3),
	(6, 'RUBY', NULL, 'Toni', 2022, 3),
	(7, 'PYTHON', NULL, 'Toni', 2022, 3),
	(9, 'JAVA', NULL, 'Toni', 2021, 3),
	(10, 'GO', NULL, 'Toni', 2022, 3),
	(11, 'SASS', NULL, 'Toni', 2022, 3),
	(12, 'SQL', NULL, 'Toni', 2021, 3);
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;

-- membuang struktur untuk table apotek.pembeli
CREATE TABLE IF NOT EXISTS `pembeli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `alamat` int(11) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.pembeli: ~10 rows (lebih kurang)
/*!40000 ALTER TABLE `pembeli` DISABLE KEYS */;
INSERT INTO `pembeli` (`id`, `nama`, `alamat`, `no_telp`) VALUES
	(1, 'Achmad', 0, '085233235815'),
	(2, 'Achmad', 0, '085233235815'),
	(3, 'Achmad', 0, '085233235815'),
	(4, 'Achmad', 0, '085233235815'),
	(5, 'Fathoni', 0, '085233235815'),
	(6, 'Fathoni', 0, '085233235815'),
	(7, 'Achmad', 0, '085233235815'),
	(8, 'Achmad', 0, '085233235815'),
	(9, 'Achmad', 0, '085233235815'),
	(10, 'Achmad', 0, '085233235815');
/*!40000 ALTER TABLE `pembeli` ENABLE KEYS */;

-- membuang struktur untuk table apotek.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_beli` date NOT NULL,
  `total` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pembeli` (`id_pembeli`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.transaksi: ~10 rows (lebih kurang)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id`, `tanggal_beli`, `total`, `id_pembeli`) VALUES
	(1, '2022-03-01', 10, 1),
	(2, '2022-03-02', 10, 9),
	(3, '2022-03-03', 10, 8),
	(4, '2022-03-04', 10, 7),
	(5, '2022-03-07', 10, 10),
	(6, '2022-03-08', 10, 4),
	(7, '2022-03-10', 10, 3),
	(8, '2022-03-14', 10, 2),
	(9, '2022-03-15', 10, 5),
	(10, '2022-03-18', 10, 6);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.apoteker: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `apoteker` DISABLE KEYS */;
INSERT INTO `apoteker` (`id`, `nama`, `tanggal_lahir`, `alamat`, `no_telp`) VALUES
	(3, 'Achmad', '1994-09-12', 0, '085233235815'),
	(4, 'Achmad', '1994-09-12', 0, '085233235815'),
	(6, 'Achmad', '1994-03-31', 0, '041321541555');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.detail-apoteker: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `detail-apoteker` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.obat: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
INSERT INTO `obat` (`id`, `jenis`, `manfaat`, `perusahaan`, `tahun produksi`, `id_apoteker`) VALUES
	(1, 'Belajar Laravel', 'melatih keahlian programmer', 'Toni', 2022, 3);
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;

-- membuang struktur untuk table apotek.pembeli
CREATE TABLE IF NOT EXISTS `pembeli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `alamat` int(11) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.pembeli: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `pembeli` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel apotek.transaksi: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

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


-- Membuang struktur basisdata untuk perpus
CREATE DATABASE IF NOT EXISTS `perpus` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `perpus`;

-- membuang struktur untuk table perpus.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `sex` char(1) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(12) NOT NULL DEFAULT 'USER',
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpus.anggota: ~15 rows (lebih kurang)
INSERT INTO `anggota` (`id_anggota`, `nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`, `tgl_entry`, `role`) VALUES
	(1, 'Administrator', 'admin', 'admin', 'P', '0891281111', 'Bandung', 'admin@gmail.com', '2022-01-19 06:10:23', 'ADMIN'),
	(2, 'Pelita', 'pelita', 'pelita', 'P', '087821505412', 'Gunung Batu, Bandung', 'pelita@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(3, 'Ayu', 'ayu', 'ayu', 'P', '08112121222', 'Sukawarna, Bandung', 'ayu@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(4, 'Fadhli', 'fadhli', 'fadhli', 'L', '08133613111', 'Cilandak, Jakarta', 'fadhli@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(5, 'Nur', 'nur', 'nur', 'P', '08212221311', 'Sunter, Jakarta', 'nur@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(6, 'Bagus', 'bagus', 'bagus', 'L', '0827379111', 'Sarijadi, Bandung', 'bagus@gmail.com\r\n', '2022-01-19 06:10:23', 'USER'),
	(7, 'Mahendra', 'mahendra', 'mahendra', 'P', '08772191811', 'Sariwangi, Bandung', 'mahendra@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(8, 'Najmin', 'najmin', 'najmin', 'P', '08712911991', 'Sukaraja, Bandung', 'najmina@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(9, 'Putri', 'putri', 'putri', 'P', '0827191811', 'Cimahi', 'putri@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(10, 'Ridwan', 'ridwan', 'ridwan', 'L', '0898188191', 'Baros, Cimahi', 'ridwan@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(11, 'Feby', 'feby', 'feby', 'P', '08991717711', 'Sukajadi, Bandung', 'feby@gmail.com\r\n', '2022-01-19 06:10:23', 'USER'),
	(12, 'Cindy', 'cindy', 'cindy', 'P', '08272772791', 'Sentral, Cimahi', 'cindy@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(13, 'Farid', 'farid', 'farid', 'P', '0876637911', 'Buah Batu, Bandung', 'farid@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(14, 'Bayu', 'bayu', 'bayu', 'L', '0887639199', 'Sunter, Jakarta', 'bayu@gmail.com', '2022-01-19 06:10:23', 'USER'),
	(15, 'Deni', 'deni', 'deni', 'L', '0876619111', 'Cikutra, Subang', 'deni@gmail.com', '2022-01-19 06:10:23', 'USER');

-- membuang struktur untuk table perpus.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `isbn` varchar(25) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `id_penerbit` varchar(8) DEFAULT NULL,
  `id_pengarang` varchar(8) DEFAULT NULL,
  `id_katalog` varchar(3) DEFAULT NULL,
  `qty_stok` int(11) DEFAULT 0,
  `harga_pinjam` int(11) NOT NULL,
  PRIMARY KEY (`isbn`),
  KEY `penerbit` (`id_penerbit`),
  KEY `pengarang` (`id_pengarang`),
  KEY `katalog` (`id_katalog`),
  CONSTRAINT `katalog` FOREIGN KEY (`id_katalog`) REFERENCES `katalog` (`id_katalog`),
  CONSTRAINT `penerbit` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  CONSTRAINT `pengarang` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpus.buku: ~24 rows (lebih kurang)
INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES
	('002-291', 'Lancar Javascript', 2018, 'PN02', 'PG05', 'KG2', 8, 5000),
	('009-281', 'Basic PHP', 2021, 'PN04', 'PG01', 'KG1', 19, 7500),
	('092-111', 'Belajar PHP', 2010, 'PN01', 'PG01', 'KG0', 12, 12000),
	('126-717', 'Mencoba Lagi', 2018, 'PN03', 'PG05', 'KG1', 12, 3000),
	('127-840', 'Laravel vue for dummies', 2014, 'PN02', 'PG03', 'KG2', 15, 2500),
	('129-291', 'Atlas Dunia', 2020, 'PN06', 'PG07', 'KG2', 16, 2000),
	('131-151', 'Alice in Wonderland', 2019, 'PN05', 'PG10', 'KG1', 6, 4000),
	('221-292', 'stretches 101', 2019, 'PN02', 'PG02', 'KG4', 5, 4000),
	('377-482', 'MySQL Dasar', 2020, 'PN04', 'PG04', 'KG0', 20, 4000),
	('381-561', 'Basic Vue.js', 2014, 'PN03', 'PG01', 'KG2', 5, 5000),
	('667-121', 'HTML CSS Javascript', 2021, 'PN07', 'PG04', 'KG2', 26, 5000),
	('667-777', 'Java', 2021, 'PN07', 'PG06', 'KG1', 5, 4000),
	('767-909', 'Wayne Enterprise', 2021, 'PN05', 'PG10', 'KG2', 12, 8000),
	('774-210', 'Laravel Master', 2021, 'PN03', 'PG05', 'KG1', 7, 6500),
	('774-211', 'Laravel Part 1', 2018, 'PN03', 'PG05', 'KG1', 5, 4500),
	('777-380', 'Mongo DB Lanjut', 2020, 'PN01', 'PG03', 'KG2', 5, 10000),
	('777-381', 'MySQL Lanjut', 2021, 'PN01', 'PG04', 'KG0', 9, 8000),
	('882-191', 'Belajar CSS', 2020, 'PN03', 'PG05', 'KG0', 8, 12000),
	('882-291', 'Belajar Laravel', 2020, 'PN03', 'PG05', 'KG1', 2, 11500),
	('902-191', 'CSS Part 2', 2020, 'PN04', 'PG05', 'KG0', 8, 15000),
	('929-181', 'Basic JQuery', 2019, 'PN05', 'PG05', 'KG0', 11, 5500),
	('977-381', 'CSS Part 1', 2018, 'PN01', 'PG01', 'KG0', 9, 8000),
	('991-119', 'Sanctuary', 2018, 'PN03', 'PG06', 'KG1', 20, 14),
	('999-281', 'Laravel Part 2', 2020, 'PN04', 'PG05', 'KG1', 11, 13000);

-- membuang struktur untuk table perpus.detail_peminjaman
CREATE TABLE IF NOT EXISTS `detail_peminjaman` (
  `id_pinjam` int(11) NOT NULL DEFAULT 0,
  `isbn` varchar(25) NOT NULL DEFAULT '',
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pinjam`,`isbn`),
  KEY `id_pinjam` (`id_pinjam`),
  KEY `isbn` (`isbn`),
  CONSTRAINT `id_pinjam` FOREIGN KEY (`id_pinjam`) REFERENCES `peminjaman` (`id_pinjam`),
  CONSTRAINT `isbn` FOREIGN KEY (`isbn`) REFERENCES `buku` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpus.detail_peminjaman: ~26 rows (lebih kurang)
INSERT INTO `detail_peminjaman` (`id_pinjam`, `isbn`, `qty`) VALUES
	(1, '092-111', 1),
	(1, '777-381', 3),
	(1, '999-281', 1),
	(2, '777-381', 1),
	(3, '009-281', 1),
	(3, '381-561', 1),
	(3, '777-381', 2),
	(3, '882-291', 1),
	(4, '009-281', 1),
	(4, '377-482', 1),
	(5, '381-561', 1),
	(5, '999-281', 2),
	(6, '002-291', 1),
	(6, '377-482', 2),
	(6, '777-381', 1),
	(6, '902-191', 1),
	(7, '882-291', 1),
	(8, '777-380', 2),
	(8, '929-181', 1),
	(9, '009-281', 1),
	(9, '377-482', 1),
	(9, '929-181', 1),
	(10, '381-561', 1),
	(10, '882-291', 1),
	(10, '902-191', 1),
	(10, '977-381', 2);

-- membuang struktur untuk table perpus.katalog
CREATE TABLE IF NOT EXISTS `katalog` (
  `id_katalog` varchar(5) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_katalog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpus.katalog: ~6 rows (lebih kurang)
INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES
	('KG0', 'Buku Dewasa'),
	('KG1', 'Buku Anak'),
	('KG2', 'Buku Belajar'),
	('KG3', 'Buku Belajar Agama'),
	('KG4', 'Buku Kesehatan'),
	('KG5', 'Buku Remaja');

-- membuang struktur untuk table perpus.peminjaman
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_pinjam`),
  KEY `anggota` (`id_anggota`),
  CONSTRAINT `anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpus.peminjaman: ~10 rows (lebih kurang)
INSERT INTO `peminjaman` (`id_pinjam`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`) VALUES
	(1, 4, '2021-05-26', '2021-05-31'),
	(2, 2, '2021-05-27', '2021-05-29'),
	(3, 3, '2021-05-10', '2021-05-12'),
	(4, 7, '2021-05-27', '2021-05-31'),
	(5, 5, '2021-06-01', '2021-06-05'),
	(6, 10, '2021-06-01', '2021-06-03'),
	(7, 3, '2021-05-04', '2021-05-06'),
	(8, 4, '2021-06-03', '2021-06-09'),
	(9, 11, '2021-06-02', '2021-06-08'),
	(10, 5, '2021-05-25', '2021-06-02');

-- membuang struktur untuk table perpus.penerbit
CREATE TABLE IF NOT EXISTS `penerbit` (
  `id_penerbit` varchar(8) NOT NULL,
  `nama_penerbit` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpus.penerbit: ~8 rows (lebih kurang)
INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES
	('PN01', 'Penerbit 01', 'penerbit01@perpus.co.id', '02199993331', 'Depok'),
	('PN02', 'Penerbit 02', 'penerbit2@gmail.com', '08765158111', 'Bandung'),
	('PN03', 'Penerbit 03', 'penerbit3@gmail.com', '021343467846', 'Jakarta Barat'),
	('PN04', 'Penerbit 04', 'penerbit4@gmail.com', '08972017209', 'Jakarta Selatan'),
	('PN05', 'Penerbit 05', 'penerbit05@gmail.com', '08972187205', 'Jakarta Selatan'),
	('PN06', 'Penerbit 06', 'penerbit6@gmail.com', '08112187209', 'Jakarta Barat'),
	('PN07', 'Penerbit 07', 'penerbit007@perpus.co.id', '0871752525', 'Jepara'),
	('PN08', 'Penerbit 08', 'Penerbit008@gmail.com', '088888184848', 'Jember');

-- membuang struktur untuk table perpus.pengarang
CREATE TABLE IF NOT EXISTS `pengarang` (
  `id_pengarang` varchar(8) NOT NULL,
  `nama_pengarang` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel perpus.pengarang: ~8 rows (lebih kurang)
INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES
	('PG01', 'Pengarang 01', 'pengarang1@perpus.co.id', '929211', 'Jerman'),
	('PG02', 'Pengarang 02', 'pengarang2@perpus.co.id', '929211222', 'Yogyakarta'),
	('PG03', 'Pengarang 03', 'pengarang3@perpus.co.id', '092921199', 'Banten'),
	('PG04', 'Pengarang 04', 'pengarang4@perpus.co.id', '093938199', 'Jakarta'),
	('PG05', 'Pengarang 05', 'pengarang5@perpus.co.id', '93938199', 'Cimahi'),
	('PG06', 'Pengarang 06', 'pengarang6@perpus.co.id', '0818176111', 'Cimahi'),
	('PG07', 'Pengarang 07', 'pengarang0707@yahoo.co.id', '02192497482', 'Semarang'),
	('PG10', 'Bruce Wayne Jr', 'Batman@wayne.com', '88322874286', 'Bat Caves');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

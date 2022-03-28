-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2022 pada 17.44
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(32) NOT NULL,
  `harga_beli` varchar(20) NOT NULL,
  `harga_jual` varchar(20) NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `harga_beli`, `harga_jual`, `satuan`, `stok`, `id_obat`) VALUES
(14, 'Bodrex', 'Rp7.000,00', 'Rp9.000,00', 'botol', 34, 3),
(15, 'Rebozet', 'Rp278.000', 'Rp280.000', 'tablet', 10, 2),
(16, 'postinor', 'Rp55.000', 'Rp60.000', 'tablet', 5, 4),
(17, 'Thiamycin', 'Rp10.000', 'Rp15.000', 'kapsul', 23, 5),
(18, 'levocin', 'Rp85.000', 'Rp90.000', 'tablet', 41, 5),
(19, 'Minyak Angin Cap Kapak', 'Rp100.000', 'Rp108.000', 'botol', 12, 8),
(20, 'cetaphil daily', 'Rp280.000', 'Rp288.000', 'botol', 1, 5),
(21, 'CDR Orange', 'Rp45.000', 'Rp49.000', 'kotak', 12, 4),
(22, 'Lactamil', 'Rp175.000', 'Rp400.000', 'botol', 12, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(32) NOT NULL,
  `kode_obat` int(13) NOT NULL,
  `kode_transaksi` varchar(32) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `harga_jual` varchar(20) NOT NULL,
  `jumlah_keluar` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat_keluar`
--

INSERT INTO `obat_keluar` (`id`, `nama_obat`, `kode_obat`, `kode_transaksi`, `tanggal_keluar`, `harga_jual`, `jumlah_keluar`) VALUES
(1, 'Promag', 12345, 'e123345', '2017-03-14', 'Rp10.000,00', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(32) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `kode_obat` int(13) NOT NULL,
  `jumlah_masuk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat_masuk`
--

INSERT INTO `obat_masuk` (`id`, `kode_transaksi`, `tanggal_masuk`, `kode_obat`, `jumlah_masuk`) VALUES
(1, 'h9567834', '2022-03-07', 12345, 100),
(2, 'a12298', '2021-04-05', 1223097, 100),
(3, 'b32156', '2022-03-07', 98765, 150),
(4, 'm567801', '2021-04-05', 540392346, 25),
(5, 'b457809', '2022-03-01', 457302358, 45),
(6, 'w45627', '2022-03-08', 789576, 45),
(7, 'c45738', '2022-03-09', 546847, 52),
(8, 'b346373', '2022-03-03', 4353627, 25),
(9, 'd68583', '2022-03-16', 23546272, 34),
(10, 'd45256', '2022-03-08', 235754, 78);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_obat_masuk` (`id_obat`);

--
-- Indeks untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_obat_masuk` FOREIGN KEY (`id_obat`) REFERENCES `obat_masuk` (`id`);

--
-- Ketidakleluasaan untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD CONSTRAINT `obat_keluar` FOREIGN KEY (`id`) REFERENCES `obat_masuk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

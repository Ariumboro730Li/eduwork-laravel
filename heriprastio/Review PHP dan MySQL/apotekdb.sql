-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2022 pada 16.40
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyedia_obat`
--

CREATE TABLE `penyedia_obat` (
  `id` int(11) NOT NULL,
  `nama_perusahaan_penyedia_obat` varchar(20) DEFAULT NULL,
  `alamat_perusahaan` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyedia_obat`
--

INSERT INTO `penyedia_obat` (`id`, `nama_perusahaan_penyedia_obat`, `alamat_perusahaan`, `telepon`) VALUES
(1, 'Kimia Farna', 'Jl. Data Kimia', '0892111'),
(2, 'Sido', 'Jl. Muncul', '08123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persediaan_obat`
--

CREATE TABLE `persediaan_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(45) DEFAULT NULL,
  `jenis_obat` varchar(25) DEFAULT NULL,
  `jumlah_obat` int(11) DEFAULT NULL,
  `id_penyedia_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `persediaan_obat`
--

INSERT INTO `persediaan_obat` (`id`, `nama_obat`, `jenis_obat`, `jumlah_obat`, `id_penyedia_obat`) VALUES
(1, 'Promag', 'Seduh', 10, 1),
(2, 'Tolak Linu', 'Cair', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penyedia_obat`
--
ALTER TABLE `penyedia_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `persediaan_obat`
--
ALTER TABLE `persediaan_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_penyedia_obat` (`id_penyedia_obat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penyedia_obat`
--
ALTER TABLE `penyedia_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `persediaan_obat`
--
ALTER TABLE `persediaan_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `persediaan_obat`
--
ALTER TABLE `persediaan_obat`
  ADD CONSTRAINT `fk_id_penyedia_obat` FOREIGN KEY (`id_penyedia_obat`) REFERENCES `penyedia_obat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 05.22
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
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `stok_awal_persediaan_produk_obat` int(11) DEFAULT NULL,
  `stok_akhir_persediaan_produk` int(11) DEFAULT NULL,
  `tanggal_laporan` timestamp NOT NULL DEFAULT current_timestamp(),
  `fk_id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyedia_obat`
--

CREATE TABLE `penyedia_obat` (
  `id_penyedia_obat` int(11) NOT NULL,
  `nama_perusahaan_farmasi_obat` varchar(35) DEFAULT NULL,
  `alamat_perusahaan_farmasi` text DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyedia_obat`
--

INSERT INTO `penyedia_obat` (`id_penyedia_obat`, `nama_perusahaan_farmasi_obat`, `alamat_perusahaan_farmasi`, `no_telepon`) VALUES
(1, 'Sido Muncul', 'Jl. Manjur Kota', '283993'),
(2, 'Kimia Farma', 'Jl. Kimia Farma Jakarta', '2211339'),
(3, 'Indo Farma', 'Jl. Tibet Selatan Jakarta', '2116639'),
(4, 'Kalbe Farma', 'Jl. Letjend Sup', '2136777'),
(5, 'Tempo Scan', 'Jl. HR Said Jakarta', '21133888'),
(6, 'Sanbe Farma', 'Jl. Taman Sari Bandung', '2777777'),
(7, 'PT Pharis', 'Jl. Limo Jakarta', '2172888'),
(8, 'Dexa Medica', 'Jl. Bintaro Tangerang', '211117'),
(9, 'Atra Farma', 'Jl. Euro Jakarta', '2111388'),
(10, 'Astrea Farma', 'Jl. Astrea Farma Jakarta', '2999998');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persediaan_obat`
--

CREATE TABLE `persediaan_obat` (
  `id_persediaan_obat` int(11) NOT NULL,
  `nama_obat` varchar(35) DEFAULT NULL,
  `jenis_obat` varchar(15) DEFAULT NULL,
  `jumlah_persediaan_obat` int(11) DEFAULT NULL,
  `fk_id_penyedia_obat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `persediaan_obat`
--

INSERT INTO `persediaan_obat` (`id_persediaan_obat`, `nama_obat`, `jenis_obat`, `jumlah_persediaan_obat`, `fk_id_penyedia_obat`) VALUES
(1, 'Tolak Linu', 'Cair', 90, 1),
(2, 'Tolak Angin', 'Cair', 90, 1),
(3, 'Paksin Virus', 'Cair', 190, 10),
(4, 'Paksin Paracetamol', 'Cair', 190, 10),
(5, 'Generik', 'Kapsul', 120, 2),
(6, 'Sirup Batuk', 'Cair', 180, 8),
(7, 'Paradol', 'Kapsul', 100, 7),
(8, 'Pfiver', 'Cair', 200, 10),
(9, 'Tremenza Sirup', 'Cair', 60, 6),
(10, 'Tradosik Kapsul', 'Cair', 50, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persediaan_transaksi`
--

CREATE TABLE `persediaan_transaksi` (
  `persediaan_id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_produk_obat` varchar(25) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `fk_transaksi` (`fk_id_transaksi`);

--
-- Indeks untuk tabel `penyedia_obat`
--
ALTER TABLE `penyedia_obat`
  ADD PRIMARY KEY (`id_penyedia_obat`);

--
-- Indeks untuk tabel `persediaan_obat`
--
ALTER TABLE `persediaan_obat`
  ADD PRIMARY KEY (`id_persediaan_obat`),
  ADD KEY `fk_penyedia_obat` (`fk_id_penyedia_obat`);

--
-- Indeks untuk tabel `persediaan_transaksi`
--
ALTER TABLE `persediaan_transaksi`
  ADD PRIMARY KEY (`persediaan_id`,`transaksi_id`),
  ADD KEY `transaksi_id` (`transaksi_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penyedia_obat`
--
ALTER TABLE `penyedia_obat`
  MODIFY `id_penyedia_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `persediaan_obat`
--
ALTER TABLE `persediaan_obat`
  MODIFY `id_persediaan_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`fk_id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `persediaan_obat`
--
ALTER TABLE `persediaan_obat`
  ADD CONSTRAINT `fk_penyedia_obat` FOREIGN KEY (`fk_id_penyedia_obat`) REFERENCES `penyedia_obat` (`id_penyedia_obat`);

--
-- Ketidakleluasaan untuk tabel `persediaan_transaksi`
--
ALTER TABLE `persediaan_transaksi`
  ADD CONSTRAINT `persediaan_transaksi_ibfk_1` FOREIGN KEY (`persediaan_id`) REFERENCES `persediaan_obat` (`id_persediaan_obat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `persediaan_transaksi_ibfk_2` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id_transaksi`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Simple query mysql ( Bagian 1 )	Membuat simple query
-- create table persediaan_obat (id_persediaan_obat int not null auto_increment primary key, nama_obat varchar(35), jenis_obat varchar(15), jumlah_persediaan_obat int, id_penyedia_obat varchar(20));
-- create table penyedia_obat (id_penyedia_obat int not null auto_increment primary key, nama_perusahaan_farmasi_obat varchar(35), alamat_perusahaan_farmasi text, no_telepon varchar(20));
-- desc penyedia_obat;
-- alter table persediaan_obat modify id_penyedia_obat int;
-- alter table persediaan_obat add constraint fk_penyedia_obat foreign key (id_penyedia_obat) references penyedia_obat (id_penyedia_obat);
-- insert into penyedia_obat values (' ',"Sido Muncul","Jl. Manjur Kota", 0283993);
-- alter table persediaan_obat drop foreign key fk_penyedia_obat;
-- alter table persediaan_obat change id_penyedia_obat fk_id_penyedia_obat int;
-- alter table persediaan_obat add constraint fk_penyedia_obat foreign key (fk_id_penyedia_obat) references penyedia_obat (id_penyedia_obat);
-- insert into penyedia_obat values (' ',"Kimia Farma", "Jl. Kimia Farma Jakarta", 02211339);
-- select * from penyedia_obat;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 05:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(15) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `username`, `password`, `sex`, `tlp`, `alamat`, `email`, `tgl_entry`, `role`) VALUES
('121112974', 'Agung Hermana', 'Agung', 'Agung11', 'Laki-Laki', '309333553', 'Jakarta', 'agung11@gmail.com', '2020-06-12 16:07:45', 'Admin'),
('121112975', 'Mawar Sari', 'Sari', 'sari01@gmail.com', 'Perempuan', '434343233', 'Jl.Anggur', 'sari02@gmail.com', '2023-05-17 09:22:24', 'User'),
('121112976', 'Pelita', 'pelita', '087821505412', 'Perempuan', '353505945', 'Jl.Purnama', 'pelita@gmail.com', '2023-05-17 12:10:23', 'User'),
('121112977', 'ayu', 'Ayu02', '08112121222', 'Perempuan', '39204904', 'Jl.Kenari', 'ayu03@gmail.com', '2023-05-17 09:24:30', 'User'),
('Albert03', 'Alberto Menarto', 'Menarto04', 'Menarto@gmail.com', 'Laki-Laki', '0839483948', 'Jl.Angkasa', 'Menarto@gmail.com', '2020-07-10 02:59:22', 'User'),
('Anita54', 'Anita Anugrah', 'Anita055', 'AnitaAnugrah1411165', 'Perempuan', '022552555', 'Jl.Anatasyah', 'Anitaanugrah@gmail.com', '2015-02-09 23:34:47', 'Admin'),
('astrit32', 'Astrit Melani', 'Astrit23', 'Astrit32324', 'Perempuan', '0430353535', 'Bandung', 'astrit32@gmail.com', '2023-03-14 03:22:05', 'User'),
('betris05', 'Betris Anggreani', 'Angreani043', 'Angreani24', 'Perempuan', '07979686', 'Jl.Nangka', 'betris02@gmail.com', '2023-09-21 06:02:13', 'User'),
('Cindy04', 'Cindy Mesawara', 'Mesawara04', 'Mesawara0432', 'Perempuan', '092049424', 'Jl.Messi', 'Mesawara@gmail.com', '2023-06-02 00:17:09', 'User'),
('Lumin12', 'Lumina Ader', 'Luminar02', 'Luminar03', 'Perempuan', '0430839533', 'Jl.Mangga', 'Luminar02@gmail.com', '2016-07-14 08:58:00', 'User'),
('Mahendra11', 'mahendra', 'Mahendra11', 'mahendra@gmail11', 'Laki-Laki', '0245555454', 'Jl.Jambu', 'mahendra@gmail.com', '2015-08-20 02:55:16', 'User'),
('Mesaya54', 'Mesaya Aditya', 'Mesaya032', '4304305353', 'Laki-Laki', '093053535', 'Jl.Sempurna', 'Mesya@gmil.com', '2017-09-20 02:23:20', 'User'),
('Satria74', 'Satria Mahesa', 'satria84', 'Satria@mahesa', 'Laki-Laki', '083958353', 'Jl.Melati Jauh', 'Mahesa@gmail.com', '2022-10-12 05:15:34', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_penerbit` varchar(15) NOT NULL,
  `id_pengarang` varchar(15) NOT NULL,
  `id_katalog` varchar(10) NOT NULL,
  `Jmh_Stok` int(10) NOT NULL,
  `harga_pinjam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `Jmh_Stok`, `harga_pinjam`) VALUES
('002-291-035-2', 'Belajar PHP', 2013, 'PN03', 'PG02', 'KG2', 420, 25000),
('002-291-035-3', 'Belajar Larevel', 2014, 'PN01', 'PG02', 'KG2', 300, 45000),
('032-215-215-3', 'Cinta Dalam Hati', 2015, 'PN04', 'PG04', 'KG0', 500, 50000),
('035-515-250-5', 'Cinta yang Berkelana', 2015, 'PN05', 'PG03', 'KG0', 2500, 6000),
('120-254-025-5', 'Belajar Menulis', 2015, 'PN03', 'PG03', 'KG1', 300, 20000),
('201-549-256-2', 'Merawat bayi Baru Lahir', 2019, 'PN02', 'PG01', 'KG4', 600, 8000),
('213-055-488-2', 'Buku Agama Kristen 4', 2016, 'PN02', 'PG05', 'KG2', 600, 1500),
('252-153-158-5', 'Buku Agama Kristen 5', 2016, 'PN05', 'PG05', 'KG3', 300, 20000),
('532-256-152', 'Etika Perawat', 2000, 'PN02', 'PG01', 'KG4', 3000, 6000),
('625-242-025-0', 'Buku Gambar anak PAUD', 2020, 'PN01', 'PG04', 'KG1', 150, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_katalog`
--

CREATE TABLE `detail_katalog` (
  `id_katalog` varchar(10) NOT NULL,
  `katalog` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_katalog`
--

INSERT INTO `detail_katalog` (`id_katalog`, `katalog`) VALUES
('KG0', 'Buku Dewasa'),
('KG1', 'Buku Anak'),
('KG2', 'Belajar'),
('KG3', 'Buku Agama '),
('KG4', 'Belajar Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_pinjam` int(15) NOT NULL,
  `id_peminjam` int(15) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `jmh_stok` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_pinjam`, `id_peminjam`, `isbn`, `jmh_stok`) VALUES
(211, 121, '002-291-035-2', 10),
(212, 122, '120-254-025-5', 100),
(213, 123, '032-215-215-3', 250),
(214, 124, '035-515-250-5', 5),
(215, 125, '002-291-035-2', 10),
(216, 126, '252-153-158-5', 25),
(217, 127, '002-291-035-3', 5),
(218, 128, '032-215-215-3', 5),
(219, 129, '213-055-488-2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(15) NOT NULL,
  `id_anggota` varchar(15) NOT NULL,
  `tgl_peminjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `id_anggota`, `tgl_peminjam`, `tgl_kembali`) VALUES
(121, '121112975', '2023-03-15', '2023-03-22'),
(122, '121112976', '2023-01-11', '2023-05-17'),
(123, 'Anita54', '2023-04-10', '2023-04-19'),
(124, 'Anita54', '2023-04-04', '2023-04-12'),
(125, '121112975', '2023-04-03', '2023-04-11'),
(126, 'betris05', '2023-05-26', '2023-06-08'),
(127, 'astrit32', '2023-04-10', '2023-05-12'),
(128, 'Lumin12', '2022-06-06', '2022-06-15'),
(129, 'Mesaya54', '2022-06-14', '2022-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(15) NOT NULL,
  `penerbit` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `penerbit`, `email`, `tlp`, `alamat`) VALUES
('PN01', 'Yudistira', 'yudistira01@gmail.com', '08248243439', 'Jl.Bandung'),
('PN02', 'Erlangga', 'erlangga02@yahoo.com', '0843433535', 'Jl. Mekar'),
('PN03', 'Gramedia', 'gramedia03@yahoo.com', '0505405905', 'Jl.Belimbing'),
('PN04', 'Kaktus', 'kaktus04@gmail.com', '08978675575', 'Jl.Kerupuk'),
('PN05', 'Medistra', 'medistra05@gmail.com', '0400493049', 'Jl.Medistra');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` varchar(15) NOT NULL,
  `pengarang` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `pengarang`, `email`, `tlp`, `alamat`) VALUES
('PG01', 'Pengarang 01', 'pengarang1@perpus.co.id', '0320320392', 'Riau'),
('PG02', 'Pengarang 02', 'pengarang2@perpus.co.id', '08204494948', 'Medan'),
('PG03', 'Pengarang 03', 'pengarang3@perpus.co.id', '0430493442', 'Jambi'),
('PG04', 'Pengarang 04', 'pengarang4@perpus.co.id', '08493489353', 'Manado'),
('PG05', 'Pengarang', 'pengarang5@perpus.co.id', '08897868668', 'Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `id_katalog` (`id_katalog`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_pengarang` (`id_pengarang`);

--
-- Indexes for table `detail_katalog`
--
ALTER TABLE `detail_katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `isbn` (`isbn`),
  ADD KEY `id_peminjam` (`id_peminjam`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_katalog`) REFERENCES `detail_katalog` (`id_katalog`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  ADD CONSTRAINT `buku_ibfk_3` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`);

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `detail_peminjaman_ibfk_3` FOREIGN KEY (`isbn`) REFERENCES `buku` (`isbn`),
  ADD CONSTRAINT `detail_peminjaman_ibfk_4` FOREIGN KEY (`id_peminjam`) REFERENCES `peminjam` (`id_peminjam`);

--
-- Constraints for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD CONSTRAINT `peminjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

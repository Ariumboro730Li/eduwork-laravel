-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 01:46 PM
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
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(15) NOT NULL,
  `kode_anggota` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `hp` int(15) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `kode_anggota`, `nama`, `jurusan`, `hp`, `Alamat`) VALUES
(211, '143112974', 'Mooi', 'Teknik Mesin', 843434343, 'jl. teman'),
(212, '121113932', 'melati', 'Teknik Komputer', 38383953, 'Jl. bisa ajah deh'),
(213, '1421111234', 'Dean', 'Teknik Elektro', 204204924, 'jl. siapa tau'),
(214, '1421111233', 'Alex', 'Teknik Elektro', 43058305, 'jl. saya'),
(215, '1531123343', 'Riski', 'Teknik Mesin', 824842425, 'jl. aku sayang'),
(216, '1531114353', 'Bima', 'Teknik Mesin', 4383535, 'jl.Mikro'),
(217, '1421111236', 'Agus', 'Teknik Elektro', 32402442, 'Jl. Sasa'),
(218, '141115644', 'Diana', 'Teknik Komputer', 43434353, 'Jl. Mau tau aja'),
(219, '151115454', 'Messi', 'Teknik Komputer', 24304349, 'Jl. Gunung Agung'),
(220, '151119349', 'Ririn', 'Teknik Komputer', 434353646, 'Jln. Abu ajah');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(15) NOT NULL,
  `id_penulis` varchar(30) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `judul buku` varchar(30) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `Penerbit` varchar(32) NOT NULL,
  `Tahun_terbit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_penulis`, `kode_buku`, `judul buku`, `penulis`, `Penerbit`, `Tahun_terbit`) VALUES
(123, '978-979-202-839-3', 'IT23', 'Panduan Menguasai PHP&MySQL Se', 'Ridwan Sanjaya', 'erlangga', '2015-03-03'),
(124, '978-979-271-363-3', 'IT24', 'Student Excercise Series - Pem', 'Arief Ramadhan', 'Roro beauty', '2017-03-22'),
(125, '979-794-241-4', 'IT25', 'BPI: Aplikasi W@P dgn PHP', 'Anhar,ST', 'erlangga', '2005-07-14'),
(126, '978-602-430-359-4', 'Ank01', 'Ketika Cican Marah', 'Wahyu Aditya, Indah Julianti, Tadiga K.', 'Noura', '2018-09-09'),
(128, '978-602-126-749-3', 'Ank02', 'Smart Big Book 365 Aktivitas A', 'Yurinda Dini', 'Cikal Aksara', '2017-03-20'),
(129, '978-979-905-187-5', 'Ank03', 'Mudah & Cepat Belajar Bahasa I', 'Evi Nopiyanti, S.Pd., M.Pd', 'Tangga Pustaka', '2019-10-01'),
(130, '978-979-229-943-4', 'Ank04', 'Anak-anak revolusi', 'Budiman Sudjatmiko', 'PT Gramedia Pustaka Utama', '2013-01-01'),
(131, '978-150-136-187-6', 'Nov01', 'The American Novel After Ideol', 'Laurie Rodrigues', 'Bloomsbury Publishing', '2020-12-10'),
(132, '978-979-110-246-9', 'nov02', 'Rembulan tenggelam di wajahmu', 'Tere-Liye', 'Penerbit Republika', '2009-02-01'),
(133, '78-623-235-068-7', 'nov5', 'Tadabbur Cinta Nyanyian Cinta ', 'H. Ahmad Zacky El-Syafa', 'Genta Hidayah', '2020-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(15) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_buku` int(15) NOT NULL,
  `id_anggota` int(15) NOT NULL,
  `id_petugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`, `id_buku`, `id_anggota`, `id_petugas`) VALUES
('411', '2023-05-10', '2023-05-17', 126, 212, 21),
('412', '2023-05-01', '2023-05-08', 128, 218, 11),
('413', '2023-05-02', '2023-05-09', 128, 211, 12),
('414', '2023-05-03', '2023-05-10', 129, 219, 11),
('415', '2023-05-04', '2023-05-11', 124, 217, 21),
('416', '2023-05-04', '2023-05-11', 133, 217, 12),
('417', '2023-05-05', '2023-05-12', 125, 212, 21),
('418', '2023-05-08', '2023-05-17', 125, 215, 12),
('419', '2023-05-09', '2023-05-16', 124, 213, 11),
('420', '2023-05-08', '2023-05-17', 133, 216, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(15) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `denda` varchar(10) NOT NULL,
  `id_buku` int(15) NOT NULL,
  `id_anggota` int(15) NOT NULL,
  `id_petugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` varchar(30) NOT NULL,
  `judul buku` varchar(30) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `No_tlp` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `judul buku`, `penulis`, `Tanggal_Lahir`, `Alamat`, `No_tlp`) VALUES
('78-623-235-068-7', 'Tadabbur Cinta Nyanyian Cinta ', 'H. Ahmad Zacky El-Syafa', '1977-09-22', NULL, '089546336'),
('978-150-136-187-6', 'The American Novel After Ideol', 'Laurie Rodrigues', '1899-03-04', NULL, '0079685585857'),
('978-602-126-749-3', 'Smart Big Book 365 Aktivitas A', 'Yurinda Dini', NULL, 'jl. kidul agung', '0798675657'),
('978-602-430-359-4', 'Ketika Cican Marah', 'Wahyu Aditya, Indah Julianti, Tadiga K.', '1988-02-15', NULL, '0786768'),
('978-979-110-246-9', 'Rembulan tenggelam di wajahmu', 'Tere-Liye', '1979-05-21', NULL, '079996858'),
('978-979-202-839-3', 'BPI: Aplikasi W@P dgn PHP', 'Ridwan Sanjaya', '1987-01-06', NULL, '7879979989'),
('978-979-229-943-4', 'Anak-anak revolusi', 'Budiman Sudjatmiko', '2013-01-01', NULL, '078557466'),
('978-979-271-363-3', 'Student Excercise Series - Pem', 'Arief Ramadhan', '1983-04-06', NULL, '9786767878'),
('978-979-905-187-5', 'Mudah & Cepat Belajar Bahasa I', 'Evi Nopiyanti, S.Pd., M.Pd', '1994-07-08', NULL, '089796869'),
('979-794-241-4', 'Panduan Menguasai PHP&MySQL Se', 'Anhar,ST', '1984-03-12', 'jl. Moh. Kahfi II No.12 A', '078565545665');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(15) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `hp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `Nama`, `jabatan`, `hp`, `alamat`) VALUES
(11, 'Rika', 'Staf', 44242424, 'Jl. Baru'),
(12, 'Robin', 'Staf', 4245522, 'jl. Darma Agung'),
(21, 'Refki', 'Kepala Perpus', 434354353, 'Jl. Perpus');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(5) NOT NULL,
  `lokasi rak` varchar(30) NOT NULL,
  `nama_rak` varchar(30) NOT NULL,
  `id_buku` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `lokasi rak`, `nama_rak`, `id_buku`) VALUES
(311, 'Lorong Kedua', 'Nov', 132),
(312, 'Lorong Kedua', 'Nov', 132),
(313, 'Lorong Kedua', 'Nov', 131),
(314, 'Lorong Kedua', 'Nov', 133),
(315, 'Lorong Pertama', 'Ank', 126),
(316, 'Lorong Pertama', 'Ank', 128),
(317, 'Lorong Pertama', 'Ank', 129),
(318, 'Lorong Pertama', 'Ank', 130),
(319, 'Lorong Ketiga Baris 1', 'IT', 123),
(320, 'Lorong Ketiga Baris 1', 'IT', 124),
(321, 'Lorong Ketiga Baris 1', 'IT', 125);

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
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `buku_ibfk_1` (`id_penulis`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `peminjaman_ibfk_1` (`id_anggota`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `pengembalian_ibfk_1` (`id_anggota`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `rak`
--
ALTER TABLE `rak`
  ADD CONSTRAINT `rak_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

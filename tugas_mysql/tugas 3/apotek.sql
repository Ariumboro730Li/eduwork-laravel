-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 10:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_detail` int(11) NOT NULL,
  `id_pasien` varchar(20) NOT NULL,
  `id_obat` varchar(20) NOT NULL,
  `id_sakit` int(11) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`id_detail`, `id_pasien`, `id_obat`, `id_sakit`, `total`) VALUES
(1, 'P001', 'OB001', 1, '10000'),
(2, 'P002', 'OB003', 2, '15000'),
(3, 'P003', 'OB010', 3, '12500'),
(4, 'P004', 'OB003', 4, '30000'),
(5, 'P005', 'OB009', 5, '9000'),
(6, 'P006', 'OB006', 6, '3000'),
(7, 'P003', 'OB006', 7, '20000'),
(8, 'P005', 'OB007', 8, '26000'),
(9, 'P009', 'OB003', 9, '20000'),
(10, 'P008', 'OB004', 10, '34000');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE `jenis_obat` (
  `kode_jenis` varchar(20) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_obat`
--

INSERT INTO `jenis_obat` (`kode_jenis`, `nama_jenis`) VALUES
('J001', 'Obat Bebas'),
('J002', 'Obat Bebas Terbatas'),
('J003', 'Obat Keras');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(20) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `kode_jenis` varchar(20) NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `kode_jenis`, `tanggal_kadaluarsa`, `stok`, `harga`) VALUES
('OB001', 'Paracetamol', 'J001', '2025-05-07', 20, '5000'),
('OB002', 'Combi', 'J003', '2027-05-12', 12, '18000'),
('OB003', 'Decolgen', 'J002', '2031-05-15', 24, '5000'),
('OB004', 'Vice Lemon', 'J001', '2025-05-08', 50, '1700'),
('OB005', 'Bodrex Migra', 'J002', '2027-05-27', 30, '3000'),
('OB006', 'Amoksiline', 'J003', '2026-05-28', 40, '5000'),
('OB007', 'Acetylcystein', 'J003', '2025-05-22', 28, '26000'),
('OB008', 'Asam mefenamat ', 'J003', '2024-05-16', 18, '10000'),
('OB009', 'Betadine', 'J002', '2026-05-07', 20, '7000'),
('OB010', 'Kalpanax', 'J002', '2032-05-13', 30, '12500');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `umur`, `jenis_kelamin`) VALUES
('P001', 'Ahmad', 25, 'L'),
('P002', 'Annur', 29, 'L'),
('P003', 'Aziz', 20, 'L'),
('P004', 'Siti', 22, 'P'),
('P005', 'Nisa', 25, 'P'),
('P006', 'Sutaji', 33, 'L'),
('P007', 'Suparto', 39, 'L'),
('P008', 'Dewi', 31, 'P'),
('P009', 'Ratih', 35, 'P'),
('P010', 'Astin', 30, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` varchar(20) NOT NULL,
  `id_obat` varchar(20) NOT NULL,
  `id_pasien` varchar(20) NOT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_obat`, `id_pasien`, `tanggal_beli`) VALUES
('PM001', 'OB001', 'P001', '2023-05-24'),
('PM002', 'OB003', 'P002', '2023-05-25'),
('PM003', 'OB010', 'P003', '2023-05-24'),
('PM004', 'OB003', 'P004', '2023-05-25'),
('PM005', 'OB009', 'P005', '2023-05-25'),
('PM006', 'OB006', 'P003', '2023-05-26'),
('PM007', 'OB007', 'P005', '2023-05-26'),
('PM008', 'OB003', 'P009', '2023-05-27'),
('PM009', 'OB004', 'P008', '2023-05-27'),
('PM010', 'OB005', 'P006', '2023-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `sakit`
--

CREATE TABLE `sakit` (
  `id_sakit` int(11) NOT NULL,
  `id_pasien` varchar(20) NOT NULL,
  `keluhan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sakit`
--

INSERT INTO `sakit` (`id_sakit`, `id_pasien`, `keluhan`, `solusi`) VALUES
(1, 'P001', 'demam dan nyeri bagian badan', 'selalu jaga pola makan dan teratur dalam minum obat'),
(2, 'P002', 'flu hidung tersumbat', 'jauhi minuman berdingin dan istirahat dengan teratur'),
(3, 'P003', 'panu dan kadas, seperti rasa gatal dan kemerahan pada kulit.', 'Selalu jaga kebersihan'),
(4, 'P004', 'gejala flu hidung tersumbat', 'mencegah sesuatu yang dingin'),
(5, 'P005', 'Luka kecil disebabkan jatuh', 'jaga kebersihan pada luka tersebut'),
(6, 'P006', 'gejala flu dan hidung tersumbat, sakit kepala', 'jaga kebersihan dan cegah dari sesuatu yang dingin'),
(7, 'P003', 'Mual, muntah, diare ', 'jaga pola makan dan cuci tangan dengan sabun yang baik'),
(8, 'P005', 'Hipersensitif atau gangguan saluran cerna ', 'jaga pola makan yang baik'),
(9, 'P009', 'flue, hidung tersumbat', 'selalu mencegah dari sesuatu yang dingin'),
(10, 'P008', 'lemas ', 'kurang vitamin dan makanan yang bergizi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_pasien_pembelian` (`id_pasien`),
  ADD KEY `fk_obat_pembelian` (`id_obat`),
  ADD KEY `fk_sakit_p` (`id_sakit`);

--
-- Indexes for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `fk_jenis_obat` (`kode_jenis`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `fk_obat` (`id_obat`),
  ADD KEY `fk_pasien` (`id_pasien`);

--
-- Indexes for table `sakit`
--
ALTER TABLE `sakit`
  ADD PRIMARY KEY (`id_sakit`),
  ADD KEY `fk_pasien_sakit` (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sakit`
--
ALTER TABLE `sakit`
  MODIFY `id_sakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `fk_obat_pembelian` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `fk_pasien_pembelian` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `fk_sakit_p` FOREIGN KEY (`id_sakit`) REFERENCES `sakit` (`id_sakit`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_jenis_obat` FOREIGN KEY (`kode_jenis`) REFERENCES `jenis_obat` (`kode_jenis`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `fk_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `sakit`
--
ALTER TABLE `sakit`
  ADD CONSTRAINT `fk_pasien_sakit` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

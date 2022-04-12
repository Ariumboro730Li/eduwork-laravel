-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 09:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `nama`, `alamat`, `nomor_telepon`) VALUES
(1, 'Fadil', 'Purwokerto', NULL),
(2, 'Andre', 'Bekasi', NULL),
(3, 'Zio', 'Malang', NULL),
(4, 'Nico', 'Klaten', NULL),
(5, 'Hansen', 'Tangerang Selatan', NULL),
(6, 'Rian', 'Serang', NULL),
(7, 'Mega', 'Magelang', NULL),
(8, 'Shania', 'Purwakarta', NULL),
(9, 'Nabila', 'Malang', NULL),
(10, 'Ariyanto', 'Makassar', NULL),
(11, 'Frans', 'Depok', NULL),
(12, 'Febri', 'Jakarta Pusat', NULL),
(13, 'Eko', 'Malang', NULL),
(14, 'Herman', 'Bekasi', NULL),
(15, 'Agus', 'Bandung', NULL),
(16, 'Ricky', 'Tangerang', NULL),
(17, 'Junaidi', 'Bogor', NULL),
(18, 'Nanda', 'Surabaya', NULL),
(19, 'Arif', 'Semarang', NULL),
(20, 'Vina', 'Klaten', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `fungsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama`, `harga`, `fungsi`) VALUES
(1, 'Paracetamol', '10000', 'Demam'),
(2, 'Panadol', '5000', 'Pusing'),
(3, 'Ambroxol', '7500', 'Batuk berdahak'),
(4, 'Amfetamin', '11500', 'Stimulan'),
(5, 'Antangin', '5000', 'Masuk angin'),
(6, 'Captopril', '15000', 'Hipertensi'),
(7, 'Decolgen', '4500', 'Flu'),
(8, 'Dulcolax', '4000', 'Sembelit'),
(9, 'Imboost', '9000', 'Imun'),
(10, 'Insto', '12000', 'Iritasi mata');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_handphone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `nomor_handphone`) VALUES
(1, 'Ayu', 'Tangerang', NULL),
(2, 'Sari', 'Jakarta Barat', NULL),
(3, 'Ridwan', 'Tangerang', NULL),
(4, 'Desi', 'Semarang', NULL),
(5, 'Rani', 'Bandung', NULL),
(6, 'Aini', 'Yogyakarta', NULL),
(7, 'Faisal', 'Tangerang', NULL),
(8, 'Reza', 'Bandung', NULL),
(9, 'Septian', 'Depok', NULL),
(10, 'Rizal', 'Bekasi', NULL),
(11, 'Ade', 'Tangerang', NULL),
(12, 'Andi', 'Semarang', NULL),
(13, 'Dewi', 'Bandung', NULL),
(14, 'Resa', 'Yogyakarta', NULL),
(15, 'Nana', 'Tangerang', NULL),
(16, 'Manda', 'Bandung', NULL),
(17, 'Hadi', 'Depok', NULL),
(18, 'Putra', 'Bekasi', NULL),
(19, 'Fahrul', 'Semarang', NULL),
(20, 'Atiqah', 'Depok', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `stok` varchar(5) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `stok`, `id_obat`) VALUES
(1, '50', 1),
(2, '25', 2),
(3, '40', 3),
(4, '35', 4),
(5, '52', 5),
(6, '16', 6),
(7, '62', 7),
(8, '29', 8),
(9, '70', 9),
(10, '18', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `jumlah_transaksi` varchar(5) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `jumlah_transaksi`, `tanggal_transaksi`, `id_obat`, `id_pelanggan`, `id_kasir`) VALUES
(1, '1', '2022-04-01', 1, 1, 1),
(2, '1', '2022-04-02', 2, 1, 1),
(3, '1', '2022-04-02', 2, 2, 1),
(4, '5', '2022-04-03', 7, 15, 18),
(5, '2', '2022-04-01', 10, 6, 8),
(6, '4', '2022-04-05', 6, 20, 6),
(7, '8', '2022-04-03', 8, 13, 10),
(8, '1', '2022-04-01', 5, 10, 13),
(9, '6', '2022-04-07', 3, 11, 16),
(10, '6', '2022-04-08', 4, 19, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_stok_obat` (`id_obat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pelanggan` (`id_pelanggan`),
  ADD KEY `fk_obat` (`id_obat`),
  ADD KEY `fk_kasir` (`id_kasir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `fk_stok_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_kasir` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id`),
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

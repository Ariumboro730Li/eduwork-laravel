-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 06:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id`, `id_penjualan`, `id_obat`, `jumlah`, `total_harga`) VALUES
(11, 1, 1, 1, 7000),
(12, 1, 2, 2, 16000),
(13, 1, 3, 3, 36000),
(14, 2, 1, 1, 7000),
(15, 2, 5, 3, 35000),
(16, 3, 4, 1, 5000),
(17, 3, 10, 2, 44000),
(18, 4, 2, 2, 16000),
(19, 5, 9, 1, 15000),
(20, 6, 7, 2, 34000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE `jenis_obat` (
  `id` int(11) NOT NULL,
  `kategori_obat` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_obat`
--

INSERT INTO `jenis_obat` (`id`, `kategori_obat`) VALUES
(1, 'obat cair'),
(2, 'tablet'),
(3, 'kapsul'),
(4, 'obat oles'),
(5, 'suppositoria'),
(6, 'obat tetes'),
(7, 'inhaler'),
(8, 'obat suntik'),
(9, 'implan'),
(10, 'antibiotik');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(64) NOT NULL,
  `kd_kategori` int(6) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kd_kategori`, `harga_beli`, `harga_jual`) VALUES
(1, 'amoxillin', 1, 5000, 7000),
(2, 'ampicillin', 3, 6000, 8000),
(3, 'anastrozole', 4, 10000, 12000),
(4, 'antangin', 1, 3000, 5000),
(5, 'betadine', 6, 12000, 15000),
(6, 'betaxolon', 8, 10000, 12000),
(7, 'biotin', 8, 15000, 17000),
(8, 'captopril', 7, 20000, 22000),
(9, 'cepfirome', 5, 13000, 15000),
(10, 'cefotaxim', 6, 20000, 22000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
(1, 'yodi', 'L', '081234', 'bantul'),
(2, 'ira', 'P', '098876', 'bantul'),
(3, 'samsul', 'L', '087654', 'sleman'),
(4, 'bahri', 'L', '084736', 'sleman'),
(5, 'susan', 'P', '088975', 'jogja kota'),
(6, 'ranti', 'P', '0348384', 'sleman'),
(7, 'sinta', 'P', '087654', 'bantul'),
(8, 'vivi', 'P', '07656', 'bantul'),
(9, 'rehan', 'L', '084534', 'bantul'),
(10, 'yohan', 'L', '087668', 'sleman');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan_jual`
--

CREATE TABLE `pelanggan_jual` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan_jual`
--

INSERT INTO `pelanggan_jual` (`id`, `id_pelanggan`, `id_penjualan`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 2, 1),
(4, 7, 3),
(5, 5, 3),
(6, 7, 5),
(7, 8, 3),
(8, 8, 3),
(9, 7, 9),
(10, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `tgl_penjualan`) VALUES
(1, '2022-03-15'),
(2, '2022-03-15'),
(3, '2022-03-15'),
(4, '2022-03-16'),
(5, '2022-03-16'),
(6, '2022-03-16'),
(7, '2022-03-16'),
(8, '2022-03-17'),
(9, '2022-03-17'),
(10, '2022-03-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penjualan` (`id_penjualan`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`kd_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan_jual`
--
ALTER TABLE `pelanggan_jual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggan_jual`
--
ALTER TABLE `pelanggan_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id`),
  ADD CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`kd_kategori`) REFERENCES `jenis_obat` (`id`);

--
-- Constraints for table `pelanggan_jual`
--
ALTER TABLE `pelanggan_jual`
  ADD CONSTRAINT `pelanggan_jual_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `pelanggan_jual_ibfk_2` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

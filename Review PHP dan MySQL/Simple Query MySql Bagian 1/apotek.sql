-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 09:12 AM
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
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `barcode` varchar(11) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `id_jenis` varchar(128) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `qty_stock` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `barcode`, `nama_obat`, `id_jenis`, `id_harga`, `id_penjual`, `qty_stock`, `tahun`) VALUES
(1, '909-181', 'Panadol', 'Sakit Kepala', 2500, 1, 100, 2020),
(2, '929 -181', 'Paramex', 'Sakit Kepala', 3000, 2, 50, 2021),
(3, '009-281', 'antangin', 'Masuk Angin', 2250, 3, 60, 2022),
(4, '361-561', 'Antimo Anak', 'Masuk Angin Anak', 950, 4, 10, 2019),
(5, '882-191', 'bodrex Dewasa', 'flu dan batuk', 1500, 5, 15, 2020),
(6, '882-291', 'Diapet', 'Diare', 2000, 6, 36, 2022),
(7, '082-111', 'Insto', 'Obat mata', 9900, 7, 43, 2019),
(8, '977-381', 'Inzana Anak', 'Demam Anak', 2900, 8, 71, 2021),
(9, '902-191', 'Procold Dewasa', 'flu', 3500, 9, 55, 2022),
(10, '002-291', 'Promag', 'mag', 1550, 10, 48, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `no_tlp` char(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id`, `nama`, `no_tlp`, `alamat`) VALUES
(1, 'Si A', '08551234567', 'JakBar'),
(2, 'Si B', '08561234567', 'JakTim'),
(3, 'Si C', '08441234567', 'JakUt'),
(4, 'Si D', '08331234567', 'JakSel'),
(5, 'Si E', '08331234567', 'JakPus'),
(6, 'Si F', '08221234567', 'Bekasi'),
(7, 'Si G', '08111234567', 'Tangerang'),
(8, 'Si H', '08991234567', 'Depok'),
(9, 'Si I', '08881234567', 'Bogor'),
(10, 'Si J', '08771234567', 'Tangerang Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_penjual` (`id_penjual`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_penjual` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 02:08 PM
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
  `nama_obat` varchar(128) NOT NULL,
  `jenis_obat` varchar(128) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `jenis_obat`, `harga_obat`, `id_penjual`) VALUES
(1, 'Panadol', 'Sakit Kepala', 2500, 1),
(2, 'Paramex', 'Sakit Kepala', 3000, 2);

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
(2, 'Si B', '08561234567', 'JakTim');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

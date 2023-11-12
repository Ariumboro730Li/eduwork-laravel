-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 05:25 AM
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
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(40) NOT NULL,
  `Jenis_Obat` varchar(30) NOT NULL,
  `Nama_Obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `Jenis_Obat`, `Nama_Obat`) VALUES
('OB_3224', 'Obat Demam', 'Parasetamol'),
('ok_3234', 'Obat Keras', 'Amplodipine');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlpn` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `Nama`, `Jenis_Kelamin`, `Alamat`, `tgl_lahir`, `no_tlpn`) VALUES
(123, 'mooi', 'perempuan', 'jalan bengkalis No. 32', '1998-05-07', '0814464524'),
(124, 'Ramp Monster', 'Laki-laki', 'melati No. 23', '1996-05-15', '08492424242');

-- --------------------------------------------------------

--
-- Table structure for table `pejualan`
--

CREATE TABLE `pejualan` (
  `id_transaksi` char(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_obat` varchar(40) NOT NULL,
  `jumlah_obat` decimal(15,0) NOT NULL,
  `total` decimal(15,0) NOT NULL,
  `bayar` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pejualan`
--

INSERT INTO `pejualan` (`id_transaksi`, `id_pelanggan`, `id_pegawai`, `id_obat`, `jumlah_obat`, `total`, `bayar`) VALUES
('12114', 11334, 123, 'OB_3224', '5', '50', '1200000'),
('12115', 11335, 124, 'ok_3234', '6', '78', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` char(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Nama_Obat` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `Nama`, `Jenis_Kelamin`, `Alamat`, `Nama_Obat`) VALUES
(11334, 'cesper', 'Laki-laki', 'jl.kebumi no.44', 'Amplodipine'),
(11335, 'scobidue', 'Laki-laki', 'jl.pintar', 'Parasetamol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `Jenis_Obat` (`Jenis_Obat`),
  ADD KEY `Nama_Obat` (`Nama_Obat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pejualan`
--
ALTER TABLE `pejualan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `obat` (`id_obat`),
  ADD KEY `pejualan_ibfk_1` (`id_pegawai`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pejualan`
--
ALTER TABLE `pejualan`
  ADD CONSTRAINT `obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pejualan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pejualan_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

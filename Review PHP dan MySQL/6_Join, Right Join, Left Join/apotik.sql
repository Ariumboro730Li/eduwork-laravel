-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 05:00 PM
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
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `id_customer`) VALUES
(1, 'admin1', 'bebas123', 7),
(2, 'admin2', '321bebas', 1),
(3, 'admin1', 'bebas123', 9),
(4, 'admin2', '321bebas', 4),
(5, 'admin1', 'bebas123', 5),
(6, 'admin2', '321bebas', 3),
(7, 'admin1', 'bebas123', 2),
(8, 'admin2', '321bebas', 6),
(9, 'admin1', 'bebas123', 8),
(10, 'admin2', '321bebas', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `gen` varchar(11) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tgl_purchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `gen`, `telp`, `alamat`, `email`, `tgl_purchase`) VALUES
(1, 'rojak', 'male', '08551234567', 'jakut', 'rojak@gmail.com', '2022-03-09'),
(2, 'jaenab', 'female', '08441234567', 'jaksel', 'jaenab@gamil.com', '2022-03-23'),
(3, 'benyamin', 'male', '08331234567', 'jaktim', 'benyamin@gmail.com', '2022-02-18'),
(4, 'tuti', 'female', '08221234567', 'jakbar', 'tuti@gmail.com', '2022-02-20'),
(5, 'bowo', 'male', '08111234567', 'jakpus', 'bowo@gmail.com', '2022-03-26'),
(6, 'wati', 'female', '08001234567', 'depok', 'wati@gmail.com', '2022-03-31'),
(7, 'bokir', 'male', '08661234567', 'tangerang', 'bokir@gmail.com', '2022-02-28'),
(8, 'royani', 'female', '08771234567', 'bekasi', 'royani@gmail.com', '2022-02-04'),
(9, 'daus', 'male', '08881234567', 'jakbar', 'daus@gmail.com', '2022-03-22'),
(10, 'dewi', 'female', '08991234567', 'jaktim', 'dewi@gmail.com', '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `detail box`
--

CREATE TABLE `detail box` (
  `id_perbox` int(11) NOT NULL,
  `barcode` int(11) NOT NULL,
  `qty_box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail box`
--

INSERT INTO `detail box` (`id_perbox`, `barcode`, `qty_box`) VALUES
(3, 4, 39),
(7, 6, 23),
(5, 3, 43),
(9, 7, 86),
(7, 8, 79),
(8, 6, 93),
(10, 1, 73),
(9, 10, 36),
(4, 2, 86),
(2, 9, 42);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `jenis`) VALUES
(1, 'dewasa'),
(2, 'anak');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `barcode` int(11) NOT NULL,
  `nama_obat` varchar(25) DEFAULT NULL,
  `tahun` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `qty_pcs` int(11) NOT NULL,
  `harga_pcs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`barcode`, `nama_obat`, `tahun`, `id_penjual`, `id_supplier`, `id_harga`, `qty_pcs`, `harga_pcs`) VALUES
(1, 'antangin', 2020, 3, 1, 1, 100, 1700),
(2, 'antimo', 2019, 5, 2, 2, 150, 800),
(3, 'bodrex', 2022, 7, 4, 1, 77, 1500),
(4, 'decolgen', 2021, 8, 3, 1, 53, 1500),
(5, 'inzana', 2020, 4, 2, 2, 10, 800),
(6, 'komix', 2021, 1, 1, 2, 69, 500),
(7, 'fatigon', 2020, 2, 2, 1, 145, 2300),
(8, 'konidin', 2021, 6, 3, 2, 102, 1500),
(9, 'mixagrip', 2022, 10, 4, 1, 38, 1500),
(10, 'neozep', 2021, 9, 2, 1, 25, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama_penjual` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `email`, `no_tlp`, `alamat`) VALUES
(1, 'Si A', 'a@gmail.com', '0211234567', 'jl. ahmad yani'),
(2, 'Si B', 'b@gmail.com', '0221234567', 'jl. stasiun wonokromo'),
(3, 'Si C', 'c@gmail.com', '0231234567', 'jl. gunung sari'),
(4, 'Si D', 'd@gmail.com', '0241234567', 'jl.joyoboyo'),
(5, 'Si E', 'e@gamil.com', '0251234567', 'jl. menganti'),
(6, 'Si F', 'f@gmail.com', '0261234567', 'jl. hayam wuruk'),
(7, 'Si G', 'g@gmail.com', '0271234567', 'jl. gajah mada'),
(8, 'Si H', 'h@gmail.com', '0281234567', 'jl.adityawarman'),
(9, 'Si I', 'i@gmail.com', '0291234567', 'jl.ciliwung'),
(10, 'Si J', 'j@gmail.com', '02101234567', 'jl.kutai');

-- --------------------------------------------------------

--
-- Table structure for table `perbox`
--

CREATE TABLE `perbox` (
  `id_box` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tgl_jual` date NOT NULL,
  `tgl_restock` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perbox`
--

INSERT INTO `perbox` (`id_box`, `id_customer`, `tgl_jual`, `tgl_restock`) VALUES
(1, 9, '2022-03-23', '2022-04-03'),
(2, 5, '2022-03-07', '2022-04-02'),
(3, 10, '2022-03-23', '2022-04-03'),
(4, 7, '2022-02-16', '2022-04-02'),
(5, 4, '2022-03-26', '2022-04-02'),
(6, 2, '2022-03-07', '2022-04-03'),
(7, 3, '2022-03-20', '2022-04-02'),
(8, 1, '2022-03-18', '2022-04-02'),
(9, 8, '2022-03-12', '2022-04-03'),
(10, 6, '2022-03-03', '2022-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `email`, `telp`, `alamat`) VALUES
(1, 'kaef', 'kaef@gmail.com', '08121234567', 'bekasi selatan'),
(2, 'klbf', 'klbf@gmail.com', '08131234567', 'bekasi utara'),
(3, 'inaf', 'inaf@gmail.com', '08141234567', 'bekasi timur'),
(4, 'pyfa', 'pyfa@gmail.com', '08151234567', 'bekasi barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail box`
--
ALTER TABLE `detail box`
  ADD KEY `id_perbox` (`id_perbox`),
  ADD KEY `barcode` (`barcode`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`barcode`),
  ADD KEY `id_harga` (`id_harga`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `perbox`
--
ALTER TABLE `perbox`
  ADD PRIMARY KEY (`id_box`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `barcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perbox`
--
ALTER TABLE `perbox`
  MODIFY `id_box` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail box`
--
ALTER TABLE `detail box`
  ADD CONSTRAINT `detail box_ibfk_1` FOREIGN KEY (`id_perbox`) REFERENCES `perbox` (`id_box`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail box_ibfk_2` FOREIGN KEY (`barcode`) REFERENCES `obat` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_harga`) REFERENCES `harga` (`id_harga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `obat_ibfk_2` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `obat_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perbox`
--
ALTER TABLE `perbox`
  ADD CONSTRAINT `perbox_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

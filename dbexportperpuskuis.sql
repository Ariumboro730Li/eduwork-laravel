-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: perpus_kuis
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anggota`
--

DROP TABLE IF EXISTS `anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `sex` char(1) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_entry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` varchar(12) NOT NULL DEFAULT 'USER',
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota`
--

LOCK TABLES `anggota` WRITE;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` VALUES (1,'Administrator','admin','admin','P','0891281111','Bandung','admin@gmail.com','2022-01-19 06:10:23','ADMIN'),(2,'Pelita','pelita','pelita','P','087821505412','Gunung Batu, Bandung','pelita@gmail.com','2022-01-19 06:10:23','USER'),(3,'Ayu','ayu','ayu','P','08112121222','Sukawarna, Bandung','ayu@gmail.com','2022-01-19 06:10:23','USER'),(4,'Fadhli','fadhli','fadhli','L','08133613111','Cilandak, Jakarta','fadhli@gmail.com','2022-01-19 06:10:23','USER'),(5,'Nur','nur','nur','P','08212221311','Sunter, Jakarta','nur@gmail.com','2022-01-19 06:10:23','USER'),(6,'Bagus','bagus','bagus','L','0827379111','Sarijadi, Bandung','bagus@gmail.com\r\n','2022-01-19 06:10:23','USER'),(7,'Mahendra','mahendra','mahendra','P','08772191811','Sariwangi, Bandung','mahendra@gmail.com','2022-01-19 06:10:23','USER'),(8,'Najmin','najmin','najmin','P','08712911991','Sukaraja, Bandung','najmina@gmail.com','2022-01-19 06:10:23','USER'),(9,'Putri','putri','putri','P','0827191811','Cimahi','putri@gmail.com','2022-01-19 06:10:23','USER'),(10,'Ridwan','ridwan','ridwan','L','0898188191','Baros, Cimahi','ridwan@gmail.com','2022-01-19 06:10:23','USER'),(11,'Feby','feby','feby','P','08991717711','Sukajadi, Bandung','feby@gmail.com\r\n','2022-01-19 06:10:23','USER'),(12,'Cindy','cindy','cindy','P','08272772791','Sentral, Cimahi','cindy@gmail.com','2022-01-19 06:10:23','USER'),(13,'Farid','farid','farid','P','0876637911','Buah Batu, Bandung','farid@gmail.com','2022-01-19 06:10:23','USER'),(14,'Bayu','bayu','bayu','L','0887639199','Sunter, Jakarta','bayu@gmail.com','2022-01-19 06:10:23','USER'),(15,'Deni','deni','deni','L','0876619111','Cikutra, Subang','deni@gmail.com','2022-01-19 06:10:23','USER');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `isbn` varchar(25) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `id_penerbit` varchar(8) DEFAULT NULL,
  `id_pengarang` varchar(8) DEFAULT NULL,
  `id_katalog` varchar(3) DEFAULT NULL,
  `qty_stok` int(11) DEFAULT 0,
  `harga_pinjam` int(11) NOT NULL,
  PRIMARY KEY (`isbn`),
  KEY `penerbit` (`id_penerbit`),
  KEY `pengarang` (`id_pengarang`),
  KEY `katalog` (`id_katalog`),
  CONSTRAINT `katalog` FOREIGN KEY (`id_katalog`) REFERENCES `katalog` (`id_katalog`),
  CONSTRAINT `penerbit` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  CONSTRAINT `pengarang` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES ('002-291','Lancar Javascript',2018,'PN02','PG05','KG2',8,5000),('009-281','Basic PHP',2021,'PN04','PG01','KG1',19,7500),('092-111','Belajar PHP',2010,'PN01','PG01','KG0',12,12000),('377-482','MySQL Dasar',2020,'PN04','PG04','KG0',20,4000),('381-561','Basic Vue.js',2014,'PN03','PG01','KG2',5,5000),('774-210','Laravel Master',2021,'PN03','PG05','KG1',7,6500),('774-211','Laravel Part 1',2018,'PN03','PG05','KG1',5,4500),('777-380','Mongo DB Lanjut',2020,'PN01','PG03','KG2',7,10000),('777-381','MySQL Lanjut',2021,'PN01','PG04','KG0',9,8000),('882-191','Belajar CSS',2020,'PN03','PG05','KG0',8,12000),('882-291','Belajar Laravel',2020,'PN03','PG05','KG1',3,11500),('902-191','CSS Part 2',2020,'PN04','PG05','KG0',8,15000),('929-181','Basic JQuery',2019,NULL,'PG05','KG0',11,5500),('977-381','CSS Part 1',2018,'PN01','PG01','KG0',9,8000),('999-281','Laravel Part 2',2020,'PN04','PG05','KG1',11,13000);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_peminjaman`
--

DROP TABLE IF EXISTS `detail_peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_peminjaman` (
  `id_pinjam` int(11) NOT NULL DEFAULT 0,
  `isbn` varchar(25) NOT NULL DEFAULT '',
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pinjam`,`isbn`),
  KEY `id_pinjam` (`id_pinjam`),
  KEY `isbn` (`isbn`),
  CONSTRAINT `id_pinjam` FOREIGN KEY (`id_pinjam`) REFERENCES `peminjaman` (`id_pinjam`),
  CONSTRAINT `isbn` FOREIGN KEY (`isbn`) REFERENCES `buku` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_peminjaman`
--

LOCK TABLES `detail_peminjaman` WRITE;
/*!40000 ALTER TABLE `detail_peminjaman` DISABLE KEYS */;
INSERT INTO `detail_peminjaman` VALUES (1,'092-111',1),(1,'777-381',3),(1,'999-281',1),(2,'777-381',1),(3,'009-281',1),(3,'381-561',1),(3,'777-381',2),(3,'882-291',1),(4,'009-281',1),(4,'377-482',1),(5,'381-561',1),(5,'999-281',2),(6,'002-291',1),(6,'377-482',2),(6,'777-381',1),(6,'902-191',1),(7,'882-291',1),(8,'777-380',2),(8,'929-181',1),(9,'009-281',1),(9,'377-482',1),(9,'929-181',1),(10,'381-561',1),(10,'882-291',1),(10,'902-191',1),(10,'977-381',2);
/*!40000 ALTER TABLE `detail_peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `katalog`
--

DROP TABLE IF EXISTS `katalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `katalog` (
  `id_katalog` varchar(3) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_katalog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `katalog`
--

LOCK TABLES `katalog` WRITE;
/*!40000 ALTER TABLE `katalog` DISABLE KEYS */;
INSERT INTO `katalog` VALUES ('KG0','Buku Dewasa'),('KG1','Buku Anak'),('KG2','Buku Belajar'),('KG3','Buku Belajar Agama'),('KG4','Buku Kesehatan');
/*!40000 ALTER TABLE `katalog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminjaman`
--

DROP TABLE IF EXISTS `peminjaman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` int(11) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_pinjam`),
  KEY `anggota` (`id_anggota`),
  CONSTRAINT `anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminjaman`
--

LOCK TABLES `peminjaman` WRITE;
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
INSERT INTO `peminjaman` VALUES (1,4,'2021-05-26','2021-05-31'),(2,2,'2021-05-27','2021-05-29'),(3,3,'2021-05-10','2021-05-12'),(4,7,'2021-05-27','2021-05-31'),(5,5,'2021-06-01','2021-06-05'),(6,10,'2021-06-01','2021-06-03'),(7,3,'2021-05-04','2021-05-06'),(8,4,'2021-06-03','2021-06-09'),(9,11,'2021-06-02','2021-06-08'),(10,5,'2021-05-25','2021-06-02');
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerbit`
--

DROP TABLE IF EXISTS `penerbit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerbit` (
  `id_penerbit` varchar(8) NOT NULL,
  `nama_penerbit` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerbit`
--

LOCK TABLES `penerbit` WRITE;
/*!40000 ALTER TABLE `penerbit` DISABLE KEYS */;
INSERT INTO `penerbit` VALUES ('PN01','Penerbit 01','penerbit@perpus.co.id','0219999333','Surabaya'),('PN02','Penerbit 02','penerbit2@gmail.com','08765158111','Bandung'),('PN03','Penerbit 03','penerbit3@gmail.com',NULL,'Jakarta Barat'),('PN04','Penerbit 04','penerbit4@gmail.com','08972017209','Jakarta Selatan'),('PN05','Penerbit 05','penerbit5@gmail.com','08972187209','Jakarta Selatan'),('PN06','Penerbit 06','penerbit6@gmail.com','08112187209','Jakarta Barat');
/*!40000 ALTER TABLE `penerbit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengarang`
--

DROP TABLE IF EXISTS `pengarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengarang` (
  `id_pengarang` varchar(8) NOT NULL,
  `nama_pengarang` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pengarang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengarang`
--

LOCK TABLES `pengarang` WRITE;
/*!40000 ALTER TABLE `pengarang` DISABLE KEYS */;
INSERT INTO `pengarang` VALUES ('PG01','Pengarang 01','pengarang1@perpus.co.id','0929211','Bandung'),('PG02','Pengarang 02','pengarang2@perpus.co.id','0929211222','Yogyakarta'),('PG03','Pengarang 03','pengarang3@perpus.co.id','092921199','Banten'),('PG04','Pengarang 04','pengarang4@perpus.co.id','93938199','Jakarta'),('PG05','Pengarang 05','pengarang5@perpus.co.id','93938199','Cimahi'),('PG06','Pengarang 06','pengarang6@perpus.co.id','0818176111','Cimahi'),('PG07','Pengarang 07','pengarang7@perpus.co.id','08181762291','Semarang');
/*!40000 ALTER TABLE `pengarang` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-13 17:42:18

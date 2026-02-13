-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2026 at 05:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbukk26`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE `tbkategori` (
  `idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`idkategori`, `nama_kategori`) VALUES
(1, 'sarana lingkungan'),
(2, 'sarana kelas'),
(3, 'sarana lab'),
(4, 'sarana eskul');

-- --------------------------------------------------------

--
-- Table structure for table `tbpengaduan`
--

CREATE TABLE `tbpengaduan` (
  `idpengaduan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_kategori` int(30) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('proses','selesai','','') NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpengaduan`
--

INSERT INTO `tbpengaduan` (`idpengaduan`, `iduser`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) VALUES
(1, 2, 2, 'XII RPL 1', 'asdasdasd', 'proses', 'Sedang Perbaikan'),
(2, 2, 3, 'XII RPL 2', 'Tampil', 'selesai', 'sdfsdf'),
(3, 2, 1, 'XII RPL 1', 'sdasd', 'proses', ''),
(4, 2, 1, 'dasd', 'asdasd', 'proses', ''),
(5, 2, 1, 'XII RPL 1', 'Atap Bocor', 'proses', ''),
(6, 2, 2, 'XII RPL 1', 'asdasdasd', 'proses', ''),
(7, 2, 2, 'XII RPL 2', 'Bangku Patah', 'selesai', 'BANGKU SUDAH DIGANTI'),
(8, 2, 1, 'XII RPL 1', 'asdasd', 'proses', ''),
(9, 2, 1, 'XII RPL 2', 'Atap Bocor', 'proses', ''),
(10, 2, 1, 'XII RPL 2', 'Atap Bocor', 'proses', ''),
(11, 2, 1, 'XII RPL 2', 'asdasd', 'proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','siswa','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`, `password`, `role`) VALUES
(1, 'aoel', 'aoel', 'admin'),
(2, 'rahman', 'rahman', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tbpengaduan`
--
ALTER TABLE `tbpengaduan`
  ADD PRIMARY KEY (`idpengaduan`),
  ADD KEY `iduser` (`iduser`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpengaduan`
--
ALTER TABLE `tbpengaduan`
  MODIFY `idpengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbpengaduan`
--
ALTER TABLE `tbpengaduan`
  ADD CONSTRAINT `tbpengaduan_ibfk_4` FOREIGN KEY (`id_kategori`) REFERENCES `tbkategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbpengaduan_ibfk_5` FOREIGN KEY (`iduser`) REFERENCES `tbuser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

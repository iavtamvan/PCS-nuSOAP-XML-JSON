-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 11:49 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori_buku` int(11) NOT NULL,
  `kategori_buku` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori_buku`, `kategori_buku`) VALUES
(1, 'cetak'),
(2, 'cetak'),
(3, 'cetak'),
(4, 'cetak'),
(5, 'cetak'),
(6, 'cetak'),
(7, 'cetak'),
(8, 'cetak'),
(9, 'cetak'),
(10, 'cetak'),
(11, 'cetak'),
(12, 'cetak'),
(13, 'cetak'),
(14, 'cetak'),
(15, 'cetak'),
(16, 'cetak'),
(17, 'cetak'),
(18, 'cetak'),
(19, 'cetak'),
(20, 'cetak'),
(21, 'cetak'),
(22, 'cetak'),
(23, 'cetak'),
(24, 'cetak'),
(25, 'cetak'),
(26, 'cetak'),
(27, 'cetak'),
(28, 'cetak'),
(29, 'cetak'),
(30, 'cetak'),
(31, 'cetak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 12:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `password`, `hak_akses`) VALUES
(42, 'manajer@kopianjis.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(43, 'deas@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kasir'),
(44, 'manajer@admourcafe.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(45, 'manajer@deacafe.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(46, 'budi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'supervisor'),
(47, 'aldi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'supervisor'),
(48, 'ega@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kasir'),
(49, 'manajer@tedicafe.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'manager'),
(50, 'kasir1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_profil`
--

CREATE TABLE `tb_user_profil` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_usaha` varchar(255) NOT NULL,
  `jenis_usaha` varchar(255) DEFAULT NULL,
  `asal_kota` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_profil`
--

INSERT INTO `tb_user_profil` (`id`, `email`, `nama_usaha`, `jenis_usaha`, `asal_kota`, `status`, `alamat`) VALUES
(22, 'manajer@kopianjis.com', 'Kopi Anjis', 'restoran', NULL, '0', NULL),
(23, 'deas@gmail.com', 'Kopi Anjis', '', NULL, '0', NULL),
(24, 'manajer@admourcafe.com', 'Armour Cafe', 'restoran', NULL, '0', NULL),
(25, 'manajer@deacafe.com', 'Dea Cafe', 'restoran', NULL, '0', NULL),
(26, 'budi@gmail.com', 'Dea Cafe', '', NULL, '0', NULL),
(27, 'aldi@gmail.com', 'Dea Cafe', '', NULL, '0', NULL),
(28, 'ega@gmail.com', 'Dea Cafe', '', NULL, '0', NULL),
(29, 'manajer@tedicafe.com', 'Teday Cafe', 'restoran', NULL, '0', NULL),
(30, 'kasir1@gmail.com', 'Teday Cafe', '', NULL, '0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tb_user_profil`
--
ALTER TABLE `tb_user_profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_user_profil`
--
ALTER TABLE `tb_user_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

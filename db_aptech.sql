-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 08:53 AM
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
(1, 'Bersama@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'user'),
(2, 'Bersama@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'user'),
(3, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user'),
(4, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user'),
(5, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user'),
(6, 'jay@gmail.com', '643ed01699e225a0ecb815943fbf13ba640f95a9', 'user'),
(7, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'user'),
(8, 'alsagunadi@gmail.com', '87f28627f995ef7d9583024c8698cc81f3a7da35', 'user'),
(9, 'tedi.suryadi77@gmail.com', '6a72154a058b8838d0f7e3434561b4edf29a4f61', 'user'),
(10, 'alsagunad2i@gmail.com', 'f1de9ccbd284855cf5af7d80ba5fd31d5d797843', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_profil`
--

CREATE TABLE `tb_user_profil` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `jenis_usaha` varchar(255) NOT NULL,
  `asal_kota` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_profil`
--

INSERT INTO `tb_user_profil` (`id`, `email`, `nama_perusahaan`, `jenis_usaha`, `asal_kota`, `status`, `alamat`, `website`) VALUES
(1, '1', 'PT. Bersama', 'Mini-Market', NULL, '0', NULL, NULL),
(2, '2', 'PT. Bersama', 'Mini-Market', NULL, '0', NULL, NULL),
(3, '3', '', '', NULL, '0', NULL, NULL),
(4, '4', '', '', NULL, '0', NULL, NULL),
(5, '5', '', '', NULL, '0', NULL, NULL),
(6, '6', 'Pt. Jaya', 'Mini-Market', NULL, '0', NULL, NULL),
(7, '7', '', '', NULL, '0', NULL, NULL),
(8, '', 'PT. Nusabangsa', 'Mini-Market', NULL, '0', NULL, NULL),
(9, 'tedi.suryadi77@gmail.com', 'PT. Nusabangsa', 'Mini-Market', NULL, '0', NULL, NULL),
(10, 'alsagunad2i@gmail.com', 'Subangjaya', 'niomaos', NULL, '0', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user_profil`
--
ALTER TABLE `tb_user_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

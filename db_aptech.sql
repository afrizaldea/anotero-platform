-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 06:19 AM
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
-- Table structure for table `tb_app`
--

CREATE TABLE `tb_app` (
  `id` int(11) NOT NULL,
  `kode_app` char(255) NOT NULL,
  `nama_app` varchar(255) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `kode_supplier` char(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `harga_barang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_app`
--

CREATE TABLE `tb_detail_app` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kode_app` char(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_head_jual`
--

CREATE TABLE `tb_head_jual` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `no_faktur` char(255) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `no_faktur` char(255) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_pembelian`
--

CREATE TABLE `tb_log_pembelian` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok_min`
--

CREATE TABLE `tb_stok_min` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `stok_min` int(11) NOT NULL,
  `kontrabon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `id_supplier` char(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat_supplier` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email_supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_item`
--

CREATE TABLE `tb_tmp_item` (
  `id` int(11) NOT NULL,
  `kode_detail` char(255) NOT NULL,
  `no_faktur` char(255) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `tb_app`
--
ALTER TABLE `tb_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_detail_app`
--
ALTER TABLE `tb_detail_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_head_jual`
--
ALTER TABLE `tb_head_jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_log_pembelian`
--
ALTER TABLE `tb_log_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_stok_min`
--
ALTER TABLE `tb_stok_min`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tmp_item`
--
ALTER TABLE `tb_tmp_item`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tb_app`
--
ALTER TABLE `tb_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_app`
--
ALTER TABLE `tb_detail_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_head_jual`
--
ALTER TABLE `tb_head_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_log_pembelian`
--
ALTER TABLE `tb_log_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_stok_min`
--
ALTER TABLE `tb_stok_min`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tmp_item`
--
ALTER TABLE `tb_tmp_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

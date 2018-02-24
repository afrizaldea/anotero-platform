-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 12:16 PM
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
-- Database: `db_aptech_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `harga_barang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_head_jual`
--

CREATE TABLE `tb_head_jual` (
  `id` int(11) NOT NULL,
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
  `no_faktur` char(255) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_pembelian`
--

CREATE TABLE `tb_log_pembelian` (
  `id` int(11) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok_min`
--

CREATE TABLE `tb_stok_min` (
  `id` int(11) NOT NULL,
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
  `no_faktur` char(255) NOT NULL,
  `kode_barang` char(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

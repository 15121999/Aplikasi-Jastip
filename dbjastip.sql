-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 12:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjastip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id` int(11) NOT NULL,
  `id_pesanan` int(128) NOT NULL,
  `n_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `n_pemilik` varchar(128) NOT NULL,
  `jumlah_tf` int(50) NOT NULL,
  `up_bukti` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna_user`
--

CREATE TABLE `tbl_pengguna_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `n_lengkap` varchar(128) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna_user`
--

INSERT INTO `tbl_pengguna_user` (`id`, `username`, `email`, `password`, `n_lengkap`, `no_hp`, `alamat`) VALUES
(1, 'luzaad', 'luthfi@gmail.com', '123', '', 0, '0'),
(2, 'adit', 'aditya@gmail.com', '12344', 'Muhammad FIkri Aditya', 81, 'jl bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `id_barang` int(128) NOT NULL,
  `n_barang` varchar(128) NOT NULL,
  `hrg_barang` int(128) NOT NULL,
  `stok` int(128) NOT NULL,
  `gbr_barang` varchar(128) NOT NULL,
  `berat` varchar(128) NOT NULL,
  `hrg_cargo` int(128) NOT NULL,
  `total_harga` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `id_barang`, `n_barang`, `hrg_barang`, `stok`, `gbr_barang`, `berat`, `hrg_cargo`, `total_harga`) VALUES
(1, 1, 'qqqq', 1, 1, '', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_pembelian`
--

CREATE TABLE `tbl_status_pembelian` (
  `id` int(11) NOT NULL,
  `n_customer` varchar(128) NOT NULL,
  `n_barang` varchar(128) NOT NULL,
  `jmlh` int(128) NOT NULL,
  `harga` int(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_pembelian`
--

INSERT INTO `tbl_status_pembelian` (`id`, `n_customer`, `n_barang`, `jmlh`, `harga`, `status`) VALUES
(1, 'adit', 'kondom', 10, 10, 'on going');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_traveler`
--

CREATE TABLE `tbl_traveler` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(25) NOT NULL,
  `jeniskelamin` varchar(12) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `norek` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1:Admin , 2:User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna_user`
--
ALTER TABLE `tbl_pengguna_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_pembelian`
--
ALTER TABLE `tbl_status_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_traveler`
--
ALTER TABLE `tbl_traveler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna_user`
--
ALTER TABLE `tbl_pengguna_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_status_pembelian`
--
ALTER TABLE `tbl_status_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_traveler`
--
ALTER TABLE `tbl_traveler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

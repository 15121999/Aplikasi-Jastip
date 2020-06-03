-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 06:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` bigint(20) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Acer', 'Acer'),
(2, 'Asus', 'Asus'),
(3, 'HP', 'HP'),
(4, 'Dell', 'Dell'),
(5, 'Lenovo', 'Lenovo'),
(6, 'Msi', 'Msi'),
(7, 'Toshiba', 'Toshiba');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pay_id` bigint(20) NOT NULL,
  `pay_name` varchar(200) NOT NULL,
  `pay_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pay_id`, `pay_name`, `pay_description`) VALUES
(1, 'Finpay', 'Finpay'),
(2, 'Ipaymu', 'Ipaymu'),
(3, 'Veritrans', 'Veritrans'),
(4, 'Doku', 'Doku');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` bigint(20) NOT NULL,
  `cat_id` bigint(20) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_description` varchar(200) NOT NULL,
  `prod_image` varchar(200) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_created` datetime DEFAULT NULL,
  `prod_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `cat_id`, `prod_name`, `prod_description`, `prod_image`, `prod_price`, `prod_created`, `prod_updated`) VALUES
(1, 5, 'Lenovo 123 AA T', '-', 'files/products/asus.jpg', 4500, '0000-00-00 00:00:00', '2019-04-17 13:25:39'),
(2, 4, 'Dell ABC', '-', 'files/products/lenovo.jpg', 6550, '0000-00-00 00:00:00', '2019-03-20 05:16:19'),
(3, 2, 'Asus XZY', '-', 'files/products/asus.jpg', 6000, '0000-00-00 00:00:00', '2019-03-20 05:16:13'),
(4, 3, 'HP Pavilion 15X', '-', 'files/products/hp.jpg', 3000, '2019-03-13 04:21:37', '2019-03-20 05:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `ship_id` bigint(20) NOT NULL,
  `ship_name` varchar(200) NOT NULL,
  `ship_description` varchar(200) NOT NULL,
  `ship_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`ship_id`, `ship_name`, `ship_description`, `ship_image`) VALUES
(1, 'JNE Express', 'JNE Express', 'files/shipping/JNE.jpg'),
(2, 'J&T Express', 'J&T Express', 'files/shipping/J&T.png'),
(3, 'Pos Indonesia', 'Pos Indonesia', 'files/shipping/POS.png'),
(4, 'Tiki Online', 'Tiki Online', ''),
(5, 'Pandu Logistic', 'Pandu Logistic', ''),
(6, 'Wahana', 'Wahana', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `id` int(11) NOT NULL,
  `n_kegiatan` varchar(128) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`id`, `n_kegiatan`, `waktu`, `tanggal`, `tempat`) VALUES
(9, 'Bhakti Sosial', '08:00:00', '2019-05-22', 'Kel. Sarijadi'),
(10, 'Buka Bersama', '17:00:00', '2019-05-24', 'Masjid'),
(11, 'Agustusan', '08:00:00', '2019-08-17', 'Lapangan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`ship_id`);

--
-- Indexes for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pay_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `ship_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

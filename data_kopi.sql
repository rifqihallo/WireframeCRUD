-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 06:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_kopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `nomor` text NOT NULL,
  `produk` text NOT NULL,
  `jumlah` text NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`nama`, `alamat`, `nomor`, `produk`, `jumlah`, `foto`) VALUES
('Rifqi achmad fadhilla', 'Jl.Dwijaya IX/No.4', '088888888888', 'Kopi Robusta Rp.15.000', '3', 0),
('Testing saja', 'Jl.Dwijaya IX/No.4', '088888888888', 'Kopi Robusta Rp.15.000', '2', 0),
('Rifqi achmad fadhilla', 'JL.THAMRIN 10', '088888888888', 'Kopi Robusta Rp.15.000', '3', 0),
('ajeng pratiwi', 'Jl.Dwijaya IX/04', '0893232339443', 'Kopi Arabica Rp.30.000', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `admin` varchar(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`admin`, `nama`, `deskripsi`, `foto`) VALUES
('Baskara', 'Kaos Distro Originale', 'Kaos Originale desain jepang hanya Rp.75000!!!', 'Screenshot 2021-09-30 231216.jpg'),
('Rifqi', 'Kaos Distro Originale', 'Dapatkan Kaos Distro Originale dengan potongan sebesar 25%!!!\r\n', 'Screenshot 2021-09-30 230956.jpg'),
('rifqihallo', 'Kaos Distro Originale', 'Dapatkan Kaos Distro Originale hanya dengan harga Rp.75.000..!!!', 'Screenshot 2021-09-30 230758.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `level`, `password`) VALUES
(69, 'rifqihallo', 'rifqihallo@gmail.com', 'Admin', 'e88390fb061fde8f6642a6e5a017edd9'),
(70, 'yuanda', 'yuanda@gmail.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e'),
(71, 'tiara', 'tiaraput2001@gmail.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e'),
(72, 'user1', 'user@yahoo.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e'),
(73, 'rifqi25', 'rifqiachmadfadhilla@student.uns.ac.id', '', 'e88390fb061fde8f6642a6e5a017edd9'),
(74, 'rifqi30', 'rifqiachmad@student.uns.ac.id', '', 'e88390fb061fde8f6642a6e5a017edd9'),
(75, 'p3577011003handa_smart', 'rifqihallo2@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`admin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

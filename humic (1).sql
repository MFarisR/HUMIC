-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 09:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humic`
--

-- --------------------------------------------------------

--
-- Table structure for table `buktidata`
--

CREATE TABLE `buktidata` (
  `no` int(11) NOT NULL,
  `bukti` text,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buktidata`
--

INSERT INTO `buktidata` (`no`, `bukti`, `link`) VALUES
(2, 'YouTube', 'https://www.youtube.com'),
(3, 'Google', 'https://www.google.com'),
(4, 'Facebook', 'https://www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `no` int(11) NOT NULL,
  `responsibility` text,
  `unit` text,
  `btw1` varchar(11) DEFAULT NULL,
  `ttw1` varchar(11) DEFAULT NULL,
  `btw2` varchar(11) DEFAULT NULL,
  `ttw2` varchar(11) DEFAULT NULL,
  `btw3` varchar(11) DEFAULT NULL,
  `ttw3` varchar(11) DEFAULT NULL,
  `btw4` varchar(11) DEFAULT NULL,
  `ttw4` varchar(11) DEFAULT NULL,
  `strategi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`no`, `responsibility`, `unit`, `btw1`, `ttw1`, `btw2`, `ttw2`, `btw3`, `ttw3`, `btw4`, `ttw4`, `strategi`) VALUES
(0, 'Kepuasan Pelanggan terhadap hasil kajian / kerja', '%', '0', '0', '5', '10', '10', '40', '5', '77', ''),
(3, 'Pembentukan Tim Penelitian', 'jumlah tim', '25', '1', '10', '3', '10', '5', '5', '7', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buktidata`
--
ALTER TABLE `buktidata`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buktidata`
--
ALTER TABLE `buktidata`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

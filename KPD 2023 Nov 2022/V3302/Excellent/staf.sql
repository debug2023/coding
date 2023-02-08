-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 07, 2019 at 05:13 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_staf`
--
CREATE DATABASE IF NOT EXISTS `sistem_staf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistem_staf`;

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `idstaf` varchar(50) NOT NULL,
  `namastaf` varchar(100) NOT NULL,
  `nokp` varchar(14) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jadual staf';

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`idstaf`, `namastaf`, `nokp`, `jabatan`) VALUES
('A001', 'ABD HADEY BIN JAAFAR', '770511045371', 'ICT'),
('K043', 'DELAILAH BT MASKERI', '850101015514', 'HR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`idstaf`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

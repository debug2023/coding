-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 10:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kvsepang`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `idstudent` varchar(12) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `Jantina` varchar(10) NOT NULL,
  `No_Telefon` varchar(12) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Tahun_Graduat` varchar(4) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`idstudent`, `student_name`, `Jantina`, `No_Telefon`, `Alamat`, `Tahun_Graduat`, `Status`) VALUES
('AL001', 'reh', 're', '', 'KAJANG SELANGOR', '', ''),
('AL002', 'SITI ALEYA BINTI MUSTAFA', 'PEREMPUAN', '01251826523', 'BANDAR BARU SALAK TINGGI, SELANGOR', '2016', 'SAMBUNG PELAJARAN'),
('AL003', 'WANG LIM YAT', 'LELAKI', '0135631248', 'SEMENYIH SELANGOR', '2019', 'BELUM BEKERJA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`idstudent`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 09:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasepelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `studnum` varchar(255) NOT NULL,
  `studname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `hpnm` varchar(255) NOT NULL,
  `studpa` varchar(255) NOT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `studnum`, `studname`, `phone`, `program`, `hpnm`, `studpa`, `submittedby`) VALUES
(1, '2022-04-01 08:21:50', '03DDT19F1118', 'KHOR HWEE SHIAN', '0164643995', 'DDT', '3.0', 'PUAN NOORHEEZA', 'khor'),
(14, '2022-04-01 09:37:36', '03DDT19F1119', 'ALI', '0164643995', 'DDT', '4.0', 'PUAN HIDAYA', 'khor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('khor', 'f1118');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

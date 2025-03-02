-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 07:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabeljocuri`
--
CREATE DATABASE IF NOT EXISTS `tabeljocuri` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tabeljocuri`;

-- --------------------------------------------------------

--
-- Table structure for table `jocuri`
--

CREATE TABLE `jocuri` (
  `ID` int(11) NOT NULL,
  `nume` varchar(40) NOT NULL,
  `joc` varchar(40) NOT NULL,
  `info` text NOT NULL,
  `image` varchar(75) DEFAULT NULL,
  `data_adaugare` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jocuri`
--

INSERT INTO `jocuri` (`ID`, `nume`, `joc`, `info`, `image`, `data_adaugare`) VALUES
(25, 'Tifrea Raul', 'God Of War', 'Super poveste!', '646bab1db56f0.jpg', '2023-05-22 20:49:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jocuri`
--
ALTER TABLE `jocuri`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jocuri`
--
ALTER TABLE `jocuri`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

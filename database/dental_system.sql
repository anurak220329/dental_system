-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 04:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `dentalitems`
--

CREATE TABLE `dentalitems` (
  `idDental` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dentalname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDoctor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `congenitaldisease` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allergic` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergencycontract` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergencyphone` int(11) NOT NULL,
  `level` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `name`, `lname`, `gender`, `email`, `password`, `phone`, `congenitaldisease`, `allergic`, `blood`, `emergencycontract`, `emergencyphone`, `level`) VALUES
(3, 'Admin', 'sa', 'ชาย', 'admin@mail.com', '1234', 984812229, '', '', '', '', 0, '1'),
(4, 'นายแพทย์2', 'klakphet', 'ชาย', 'doc@mail.com', '1234', 984812229, '', '', '', '', 0, '3'),
(10, 'test', 'sa', 'หญิง', 'test@mail.com', '1234', 984812229, '', '', '', '', 0, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dentalitems`
--
ALTER TABLE `dentalitems`
  ADD PRIMARY KEY (`idDental`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dentalitems`
--
ALTER TABLE `dentalitems`
  MODIFY `idDental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 02:35 AM
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
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `idDental` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `dentalname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameDoctor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`idDental`, `idUser`, `date`, `time`, `dentalname`, `nameDoctor`, `status`) VALUES
(33, 10, '2021-07-17', '10:30:00', 'ฝอกสีฟัน', 'นายแพทย์1', 'ชำระเงินแล้ว');

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
  `nameDoctor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dentalitems`
--

INSERT INTO `dentalitems` (`idDental`, `idUser`, `date`, `time`, `dentalname`, `nameDoctor`, `status`) VALUES
(32, 10, '2021-07-17', '09:30:00', 'อุดฟัน', 'รอเจ้าหน้าที่ระบุ', 'รอเจ้าหน้าที่ตรวจสอบ'),
(34, 10, '2021-07-13', '09:30:00', 'อุดฟัน', 'รอเจ้าหน้าที่ระบุ', 'รอเจ้าหน้าที่ตรวจสอบ'),
(35, 10, '2021-07-18', '10:00:00', 'อุดฟัน', 'รอเจ้าหน้าที่ระบุ', 'รอเจ้าหน้าที่ตรวจสอบ'),
(36, 10, '2021-07-14', '09:30:00', 'จัดฟัน', 'รอเจ้าหน้าที่ระบุ', 'รอเจ้าหน้าที่ตรวจสอบ'),
(37, 10, '2021-07-19', '10:00:00', 'จัดฟัน', 'รอเจ้าหน้าที่ระบุ', 'รอเจ้าหน้าที่ตรวจสอบ'),
(38, 10, '2021-07-19', '13:00:00', 'จัดฟัน', 'รอเจ้าหน้าที่ระบุ', 'รอเจ้าหน้าที่ตรวจสอบ');

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
(4, 'นายแพทย์2', '', 'ชาย', 'doc@mail.com', '1234', 984812229, '', '', '', '', 0, '3'),
(10, 'test', 'sa', 'ชาย', 'test@mail.com', '1234', 984812229, '-', '-', 'A', '-', 654879878, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dentalitems`
--
ALTER TABLE `dentalitems`
  ADD PRIMARY KEY (`idDental`),
  ADD KEY `idUser` (`idUser`);

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
  MODIFY `idDental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dentalitems`
--
ALTER TABLE `dentalitems`
  ADD CONSTRAINT `dentalitems_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 03:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwd_info`
--

CREATE TABLE `pwd_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `middlename` varchar(191) NOT NULL,
  `lastname` varchar(191) NOT NULL,
  `age` varchar(191) NOT NULL,
  `barangay` varchar(191) NOT NULL,
  `purok` varchar(191) NOT NULL,
  `contactinfo` varchar(191) NOT NULL,
  `birthdate` varchar(191) NOT NULL,
  `birthplace` varchar(191) NOT NULL,
  `bloodtype` varchar(191) NOT NULL,
  `disabilitytype` varchar(191) NOT NULL,
  `philhealth` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `statusemployment` varchar(191) NOT NULL,
  `occupation` varchar(191) NOT NULL,
  `emergencycontact` varchar(191) NOT NULL,
  `relationshipcontact` varchar(191) NOT NULL,
  `addresscontact` varchar(191) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `remarks` varchar(191) NOT NULL,
  `join_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwd_info`
--
ALTER TABLE `pwd_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwd_info`
--
ALTER TABLE `pwd_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

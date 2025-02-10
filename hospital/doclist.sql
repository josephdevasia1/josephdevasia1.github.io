-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 11:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doclist`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `category`, `role`, `name`) VALUES
(5, NULL, NULL, NULL),
(6, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ent_doctors`
--

CREATE TABLE `ent_doctors` (
  `id` int(11) NOT NULL,
  `MO` varchar(255) DEFAULT NULL,
  `PG` varchar(255) DEFAULT NULL,
  `HS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ent_doctors`
--

INSERT INTO `ent_doctors` (`id`, `MO`, `PG`, `HS`) VALUES
(1, 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_doctors`
--

CREATE TABLE `medicine_doctors` (
  `id` int(11) NOT NULL,
  `MO` varchar(255) DEFAULT NULL,
  `JR3` varchar(255) DEFAULT NULL,
  `JR2` varchar(255) DEFAULT NULL,
  `JR1` varchar(255) DEFAULT NULL,
  `HS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_doctors`
--

INSERT INTO `medicine_doctors` (`id`, `MO`, `JR3`, `JR2`, `JR1`, `HS`) VALUES
(1, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `omfs_doctors`
--

CREATE TABLE `omfs_doctors` (
  `id` int(11) NOT NULL,
  `MO` varchar(255) DEFAULT NULL,
  `PG` varchar(255) DEFAULT NULL,
  `HS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `omfs_doctors`
--

INSERT INTO `omfs_doctors` (`id`, `MO`, `PG`, `HS`) VALUES
(1, 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `oph_doctors`
--

CREATE TABLE `oph_doctors` (
  `id` int(11) NOT NULL,
  `MO` varchar(255) DEFAULT NULL,
  `PG` varchar(255) DEFAULT NULL,
  `HS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oph_doctors`
--

INSERT INTO `oph_doctors` (`id`, `MO`, `PG`, `HS`) VALUES
(1, 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `orthopedics_doctors`
--

CREATE TABLE `orthopedics_doctors` (
  `id` int(11) NOT NULL,
  `MO` varchar(255) DEFAULT NULL,
  `JR3` varchar(255) DEFAULT NULL,
  `JR2` varchar(255) DEFAULT NULL,
  `JR1` varchar(255) DEFAULT NULL,
  `NAJR` varchar(255) DEFAULT NULL,
  `HS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orthopedics_doctors`
--

INSERT INTO `orthopedics_doctors` (`id`, `MO`, `JR3`, `JR2`, `JR1`, `NAJR`, `HS`) VALUES
(1, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `redzone_doctors`
--

CREATE TABLE `redzone_doctors` (
  `id` int(11) NOT NULL,
  `emergency_physician` varchar(255) DEFAULT NULL,
  `PG` varchar(255) DEFAULT NULL,
  `HS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `redzone_doctors`
--

INSERT INTO `redzone_doctors` (`id`, `emergency_physician`, `PG`, `HS`) VALUES
(1, 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `surgery_doctors`
--

CREATE TABLE `surgery_doctors` (
  `id` int(11) NOT NULL,
  `MO` varchar(255) DEFAULT NULL,
  `JR3` varchar(255) DEFAULT NULL,
  `JR2` varchar(255) DEFAULT NULL,
  `JR1` varchar(255) DEFAULT NULL,
  `HS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surgery_doctors`
--

INSERT INTO `surgery_doctors` (`id`, `MO`, `JR3`, `JR2`, `JR1`, `HS`) VALUES
(1, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ent_doctors`
--
ALTER TABLE `ent_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_doctors`
--
ALTER TABLE `medicine_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `omfs_doctors`
--
ALTER TABLE `omfs_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oph_doctors`
--
ALTER TABLE `oph_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orthopedics_doctors`
--
ALTER TABLE `orthopedics_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redzone_doctors`
--
ALTER TABLE `redzone_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgery_doctors`
--
ALTER TABLE `surgery_doctors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ent_doctors`
--
ALTER TABLE `ent_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine_doctors`
--
ALTER TABLE `medicine_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `omfs_doctors`
--
ALTER TABLE `omfs_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oph_doctors`
--
ALTER TABLE `oph_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orthopedics_doctors`
--
ALTER TABLE `orthopedics_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `redzone_doctors`
--
ALTER TABLE `redzone_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surgery_doctors`
--
ALTER TABLE `surgery_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

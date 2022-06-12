-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220605.3bb0712d47
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 01:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkreserv`
--

-- --------------------------------------------------------

--
-- Table structure for table `setup`
--

CREATE TABLE `setup` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `No_ID` varchar(100) NOT NULL,
  `Phone_Number` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Room_Name` varchar(100) NOT NULL,
  `Requirement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setup`
--

INSERT INTO `setup` (`id`, `Name`, `No_ID`, `Phone_Number`, `Date`, `Faculty`, `Room_Name`, `Requirement`) VALUES
(8, 'Ahmad Sulaiman Bin Zurkifli', 'CF12345', '01121795641', '24/10/2022', 'FKOM', 'LH1131', 'Set projector'),
(14, 'Siti Maryam Binti Zurkifli', 'CF12345', '01121795641', '24/09/2022', 'FKOM', 'LH1142', 'Set projector');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setup`
--
ALTER TABLE `setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




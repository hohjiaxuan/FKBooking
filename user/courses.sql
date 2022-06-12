-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220605.3bb0712d47
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 01:21 AM
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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tic` varchar(255) NOT NULL,
  `requiredset` varchar(44) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category`, `roomname`, `status`, `location`, `date`, `tic`, `requiredset`, `reg_date`) VALUES
(11, 'LECTURE HALL', 'LH1142', 'Available', 'BLOCK C', '2022-06-06 16:00:00', 'JIMMY', '', '2022-06-06 15:08:12'),
(12, 'LECTURE HALL', 'LH1131', 'Booked', 'BLOCK A', '2022-06-07 16:00:00', 'AMIR', '', '2022-06-06 15:08:12'),
(13, 'MEETING ROOM', 'MR03', 'Available', 'BLOCK E', '2022-06-24 16:00:00', 'JIMMY', '', '2022-06-06 15:08:12'),
(14, 'MEETING ROOM', 'LH1131', 'Booked', 'BLOCK A', '2022-06-14 16:00:00', 'SALEHA', 'set projection', '2022-06-06 15:08:12'),
(15, 'LAB', 'LB65', 'Available', 'BLOCK B', '2022-06-07 02:50:49', 'SULAI', '', '2022-06-07 02:50:49'),
(16, 'LAB', 'LB75', 'Available', 'BLOCK A', '2022-06-07 02:52:25', 'SYAZA', '', '2022-06-07 02:52:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




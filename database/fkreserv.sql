-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 04:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admintest@gmail.com', 'admintest1234', '2016-04-04 20:31:45', '2016-04-17'),
(16, 'khairul16', 'khairul16@gmail.com', 'khai123456', '2022-06-05 03:03:10', '2022-06-05'),
(17, 'SyazaEyka', 'syazlaikha8@gmail.com', 'syaza123', '2022-06-12 06:24:05', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `complaintType` char(100) NOT NULL,
  `complaintDes` varchar(200) NOT NULL,
  `complaintStatus` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `date`, `complaintType`, `complaintDes`, `complaintStatus`) VALUES
(4, '2022-05-30 19:54:17', 'Damaged Equipment', 'The door was damaged', 'Solved'),
(8, '2022-05-31 01:25:13', 'Damaged Equipment', 'Damaged equipment', 'In Investigation'),
(9, '2022-06-04 14:19:49', 'Improper Setup', 'Aircond not function', 'In Investigation'),
(11, '2022-06-04 17:10:11', 'Improper Setup', 'ERROR', 'Solved'),
(12, '2022-06-06 09:16:19', 'Other Type', 'Table damaged', 'Solved'),
(13, '2022-06-06 15:40:46', 'Other Type', 'College facilities ', 'Resolved'),
(14, '2022-06-06 16:29:12', 'Damaged Equipment', 'Chair damaged ', 'Resolved'),
(16, '2022-06-06 17:51:21', 'Improper Setup', 'College facilities', 'Solved'),
(18, '2022-06-06 18:07:10', 'Damaged Equipment', 'Machine cannot detect our matric card and the machine of matric card is damaged', 'In Investigation'),
(20, '2022-06-06 18:18:57', 'Damaged Equipment', 'whiteboard is damaged', 'Solved'),
(21, '2022-06-11 18:15:35', 'Improper Setup', 'Lamp cannot be opened. ', ''),
(22, '2022-06-11 18:16:20', 'Damaged Equipment', 'Fans not function well.', ''),
(23, '2022-06-11 22:51:37', 'Other Type', 'Syaza comel lagi cantik', ''),
(24, '2022-06-12 13:23:37', 'Damaged Equipment', 'ERROR', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `category` varchar(255) CHARACTER SET latin1 NOT NULL,
  `roomname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `location` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `tic` varchar(255) CHARACTER SET latin1 NOT NULL,
  `setup` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `category`, `roomname`, `status`, `location`, `date`, `tic`, `setup`) VALUES
(7, 'LECTURE HALL', 'LH1134', 'ASSIGNED', 'BLOCK A', '2022-06-04', 'JIMMY', 'setup tv and speaker'),
(8, 'LAB', 'LB62', 'ASSIGNED', 'BLOCK D', '2022-06-18', 'FARIS', ''),
(9, 'LECTURE HALL', 'LH1131', 'AVAILABLE', 'BLOCK A', '2022-06-14', 'NO ONE', '');

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
(18, 'XUAN', 'AS12345', '01156536854', '2022-06-04', 'FK', 'LH1134', 'setup tv and speaker');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(300) CHARACTER SET latin1 NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'technichum19', 'tehcnichum@gmail.com', 'technichum1234', '2022-06-05 19:27:17', '2022-06-01'),
(19, 'zunnur19', 'zunnurafzan@gmail.com', '12345678', '2022-06-01 00:37:25', '2022-06-06'),
(20, 'faris24', 'faris@gmail.com', 'faris123', '2022-06-07 03:52:43', '0000-00-00'),
(21, 'Zakwan05', 'zakwan@gmail.com', 'zakwan1234', '2022-06-07 03:59:25', '0000-00-00'),
(22, 'syazatul', 'syaaaza@gmail.com', 'syaza1234', '2022-06-12 06:21:55', '0000-00-00'),
(24, 'jimmy', 'jimmy@gmail.com', 'jim123', '2022-06-12 06:27:27', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'Benjamin@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-11 21:40:36'),
(8, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-11 21:47:35'),
(9, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-11 21:56:35'),
(10, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-11 22:16:45'),
(11, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-11 22:22:23'),
(12, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-11 22:49:33'),
(13, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:06:23'),
(14, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:08:55'),
(15, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:34:00'),
(16, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:36:44'),
(17, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:39:30'),
(18, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:40:58'),
(19, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:42:42'),
(20, 10, 'test@gmail.com', 0x3a3a31, '', '', '2022-06-12 06:45:08'),
(21, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 08:22:13'),
(22, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 09:00:34'),
(23, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 09:07:08'),
(24, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 09:08:16'),
(25, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 09:21:14'),
(26, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 09:22:49'),
(27, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 09:26:24'),
(28, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 11:01:38'),
(29, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 12:34:00'),
(30, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 13:20:44'),
(31, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 14:09:23'),
(32, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 14:18:21'),
(33, 21, 'xuan@gmail.com', 0x3a3a31, '', '', '2022-06-12 14:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(21, '12345', 'HOH', 'JIA', 'XUAN', 'female', 1156536854, 'xuan@gmail.com', 'xuan123', '2022-06-12 08:21:40', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `setup`
--
ALTER TABLE `setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

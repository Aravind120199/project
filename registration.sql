-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 04:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `cource_material`
--

CREATE TABLE `cource_material` (
  `id` int(20) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `module1` longblob NOT NULL,
  `module2` longblob NOT NULL,
  `module3` longblob NOT NULL,
  `module4` longblob NOT NULL,
  `module5` longblob NOT NULL,
  `module6` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cource_material`
--

INSERT INTO `cource_material` (`id`, `class`, `subject`, `module1`, `module2`, `module3`, `module4`, `module5`, `module6`) VALUES
(36, 'Plusone', 'Botany', 0x2f574542534954452f75706c6f6164732f313636363638373733322e706466, 0x2f574542534954452f75706c6f6164732f313636363638373733322e70707478, 0x2f574542534954452f75706c6f6164732f313636363638373733322e706466, 0x2f574542534954452f75706c6f6164732f313636363638373733322e70707478, 0x2f574542534954452f75706c6f6164732f313636363638373733322e706466, 0x2f574542534954452f75706c6f6164732f313636363638373733322e706466);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `lastname`, `batch`, `email`, `feedback`) VALUES
(13, 'anton', 'toms', 'plus 1', 'anton@gmail.com', 'good teaching');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `name`, `type`, `descr`, `fromdate`, `todate`, `status`, `user`) VALUES
(81, 'Ashwathy', 'Sick', 'not well', '2022-10-27', '2022-10-27', 'Pending', 'teacher'),
(82, 'Ashwathy', 'Sick', 'not good', '2022-10-21', '2022-10-21', 'Pending', 'teacher'),
(83, 'Aparna', 'Sick', 'not well', '2022-10-27', '2022-10-28', 'Pending', 'student'),
(84, 'navya', 'Others', '', '2025-10-29', '2022-10-24', 'Pending', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `regteacher`
--

CREATE TABLE `regteacher` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `quali` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Pass` varchar(11) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regteacher`
--

INSERT INTO `regteacher` (`id`, `Name`, `Lastname`, `Date`, `Address`, `quali`, `batch`, `exp`, `sub`, `role`, `email_id`, `phone`, `Pass`, `status`) VALUES
(142, 'ashwathy', 'm', '0000-00-00', 'aaaaaaaaaaaaaa', 'btech', 'plus_one', '1', 'physics', 'teacher', 'teacher@gmail.com', '8958746856', 'teacher', b'0'),
(144, 'binu', 's', '0000-00-00', 'bbbbbbbbb', 'mca', 'plus_one', '1', 'chemistry', 'tec', 'binu@gmail.com', '7874757655', '123', b'0'),
(146, 'aby', 'jose', '0000-00-00', 'ffffffff', 'mca', 'plus_one', '2', 'biology', 'tec', 'aby@gmail.com', '8556656655', '123', b'0'),
(148, 'albin', 'm', '0000-00-00', 'uuuuuuu', 'mca', 'plus_one', '2', 'maths', 'tec', 'abin@gmail.com', '7855555554', '123', b'0'),
(150, 'aradhina', 'c', '0000-00-00', 'ttttttt', 'btech', 'plus_two', '1', 'physics', 'tec', 'aradina@gmail.com', '7859685745', '123', b'0'),
(152, 'aleena', 'joseph', '0000-00-00', 'rrrrrrr', 'mtech', 'plus_two', '2', 'chemistry', 'tec', 'aleena@gmail.com', '6282141791', '123', b'0'),
(154, 'Rijo', 'm', '0000-00-00', 'iiiiiiiii', 'btech', 'plus_two', '2', 'biology', 'tec', 'rijo@gmail.om', '8567452255', '123', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `reguser`
--

CREATE TABLE `reguser` (
  `ID` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `pemail_id` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'student',
  `status` bit(20) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reguser`
--

INSERT INTO `reguser` (`ID`, `Name`, `Lastname`, `Date`, `Fname`, `Occupation`, `number`, `pemail_id`, `Address`, `batch`, `Gender`, `Email_id`, `Password`, `role`, `status`) VALUES
(16, 'aravind', 'a', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 1', '', 'aravinda@mca.ajce.in', '123', 'student', b'00000000000000000001'),
(17, 'arun', 'ajay', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 1', '', 'arun@gmail.com', '123', 'student', b'00000000000000000001'),
(18, 'abit', 'mon', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 1', '', 'abit@gmail.com', '123', 'student', b'00000000000000000001'),
(19, 'amal', 'biju', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 1', '', 'amal@gmail.com', '123', 'student', b'00000000000000000001'),
(20, 'anton', 'toms', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 1', '', 'anton@gmail.com', '123', 'student', b'00000000000000000001'),
(21, 'adeena', 'vs', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 2', '', 'adeena@gmail.com', '123', 'student', b'00000000000000000001'),
(22, 'aparna', 'ts', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 2', '', 'aparna@gmail.com', '123', 'student', b'00000000000000000001'),
(23, 'arya', 'rajeev', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 2', '', 'arya@gmail.com', '123', 'student', b'00000000000000000001'),
(24, 'noorjahan', 's', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 2', '', 'noorjahan@gmail.com', '123', 'student', b'00000000000000000001'),
(25, 'arya', 'biju', '0000-00-00 00:00:00.000000', '', '', '', '', '', 'plus 2', '', 'aryabiju@gmail.com', '123', 'student', b'00000000000000000001');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `batch`, `subject`, `teacher`) VALUES
(9, 'Plus one', 'physics', 'ashwathy'),
(10, 'Plus one', 'chemisry', 'Binu'),
(11, 'Plus one', 'Biology', 'Aby'),
(12, 'Plus one', 'Maths', 'Albin');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(6) NOT NULL,
  `day` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `from` time(6) NOT NULL,
  `to` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `day`, `batch`, `subject`, `teacher`, `from`, `to`) VALUES
(28, 'Monday', 'Plus one', 'Chemistry', 'Binu', '09:00:00.000000', '12:00:00.000000'),
(29, 'Tuesday', 'Plus one', 'Physics', 'Ashwathy', '09:00:00.000000', '12:00:00.000000'),
(30, 'Wednesday', 'Plus one', 'Biology', 'Aby', '09:00:00.000000', '12:00:00.000000'),
(31, 'Friday', 'Plus one', 'Maths', 'Albin', '09:00:00.000000', '12:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `ID` int(11) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `fid` int(20) NOT NULL,
  `staus` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`ID`, `Email_id`, `Password`, `role`, `fid`, `staus`) VALUES
(487, 'admin@gmail.com', 'admin', 'admin', 16, 1),
(488, 'office@gmail.com', 'office', 'office', 17, 1),
(490, 'amal@gmail.com', '123', 'student', 19, 1),
(491, 'anton@gmail.com', '123', 'student', 20, 1),
(492, 'adeena@gmail.com', '123', 'student', 21, 1),
(493, 'aparna@gmail.com', '123', 'student', 22, 1),
(494, 'arya@gmail.com', '123', 'student', 23, 1),
(495, 'noorjahan@gmail.com', '123', 'student', 24, 1),
(496, 'aryabiju@gmail.com', '123', 'student', 25, 1),
(513, 'teacher@gmail.com', 'teacher', 'teacher', 142, 1),
(515, 'binu@gmail.com', '123', 'tec', 144, 1),
(517, 'aby@gmail.com', '123', 'tec', 146, 1),
(519, 'abin@gmail.com', '123', 'tec', 148, 1),
(521, 'aradina@gmail.com', '123', 'tec', 150, 1),
(523, 'aleena@gmail.com', '123', 'tec', 152, 1),
(525, 'rijo@gmail.om', '123', 'tec', 154, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cource_material`
--
ALTER TABLE `cource_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regteacher`
--
ALTER TABLE `regteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reguser`
--
ALTER TABLE `reguser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cource_material`
--
ALTER TABLE `cource_material`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `regteacher`
--
ALTER TABLE `regteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `reguser`
--
ALTER TABLE `reguser`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2020 at 10:30 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airlinedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `nname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ssubject` varchar(25) NOT NULL,
  `ddescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nname`, `email`, `ssubject`, `ddescription`) VALUES
(1, 'Sakil Khan', 'sakilk130@gmail.com', 'Nothing', 'jdhbdnsmcksdcvbsnd'),
(2, 'Sakil Khan', 'sakilk13nbxn0@gmail.com', 'No', 'kjsxnjsxnjsxn');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `fid` int(10) NOT NULL,
  `flightid` varchar(20) NOT NULL,
  `ttime` varchar(12) NOT NULL,
  `ffrom` varchar(20) NOT NULL,
  `tto` varchar(20) NOT NULL,
  `ddate` date NOT NULL,
  `seat` varchar(10) NOT NULL,
  `fare` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`fid`, `flightid`, `ttime`, `ffrom`, `tto`, `ddate`, `seat`, `fare`) VALUES
(6, 'F1002', '01:00', 'Chittagong', 'Dhaka', '2020-04-11', '20', '3500'),
(7, 'F1001', '14:00', 'Rajshahi', 'Chittagong', '2020-04-11', '20', '4000'),
(8, 'F1003', '17:30', 'Dhaka', 'Rajshahi', '2020-05-09', '20', '3200');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `ddate` varchar(25) NOT NULL,
  `notice` text NOT NULL,
  `ttype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `ddate`, `notice`, `ttype`) VALUES
(5, '2020-04-17 16:36:35', 'adshnm', 'user'),
(8, '2020-04-17 17:37:16', 'sakil', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `tid` int(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `flightid` int(10) NOT NULL,
  `sseat` varchar(11) NOT NULL,
  `phonen` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`tid`, `uname`, `flightid`, `sseat`, `phonen`) VALUES
(170, 'sakil', 8, 'A1', '01721214996');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(20) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `lname` varchar(11) NOT NULL,
  `uname` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `bdate` date NOT NULL,
  `pass` varchar(11) NOT NULL,
  `utype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `uname`, `email`, `phone`, `gender`, `bdate`, `pass`, `utype`) VALUES
(1, 'Sakil', 'Khan', 'sakil', 'sakilk130@gmail.com', 1721214996, 'male', '2020-03-03', 'sakil', 'user'),
(3, 'fdd', 'fdd', 'dffd', 'dsfs@gmail.com', 121, 'Male', '2020-03-10', 'cc', 'user'),
(4, 'dffddf', 'fddffd', 'fdffd', 'jhfjd0@gmail.com', 51515, 'Male', '2020-03-10', 'ff', 'user'),
(5, 'gg', 'gfgf', 'jdhjkdf', 'djhfdjfmdf@gmail.com', 111, 'Male', '2020-03-11', '11', 'user'),
(6, 'rt', 'ttrtr', 'jhjbj', 'jhjfbf@gmail.com', 1221, 'Male', '2020-03-04', '11', 'user'),
(7, 'dd', 'ddv', 'dvd', 'dihjdb@gmail.com', 21212, 'Male', '2020-03-23', '11', 'user'),
(8, 'Super', 'Admin', 'superadmin', 'ksony13000@gmail.com', 1721214996, 'male', '2020-03-10', 'superadmin', 'superadmin'),
(10, '123', '12', '3', 'sakilk130@gmail.com', 1721214996, 'Female', '2020-03-19', '123', 'user'),
(11, 'test', 'test', 'test1', 'sakilk130@gmail.com', 1721214996, 'Male', '2020-03-04', '123', 'user'),
(12, 'kk', 'nn', 'nnn', 'nnn@gmail.com', 455454, 'Male', '2020-03-19', '12', 'user'),
(13, 'jjjjj', 'dddd', 'dddd', 'dd@gmail.com', 12121, 'Male', '2020-03-10', '11', 'user'),
(14, 'udshjbsdch', 'dsjhdjasd', 'hhdhd', 'gg@gmail.com', 625515, 'Male', '2020-03-18', '12', 'user'),
(15, 'udshjbsdch', 'dsjhdjasd', 'hhdhd', 'gg@gmail.com', 625515, 'Male', '2020-03-18', '222', 'user'),
(16, 'Sakil', 'Khan', 'aaaa', 'sakilk130@gmail.com', 1721214996, 'Male', '2020-03-12', '111', 'user'),
(17, 'Sakil', 'Khan', 'aa', 'sakilk130@gmail.com', 1721214996, 'Male', '2020-03-11', '11', 'user'),
(18, 'iucckhcc', 'ifuefhwef', 'ifuefhfe', 'hjh@gmail.com', 888488, 'Male', '2020-03-11', '111', 'user'),
(19, 'Admin', '_1', 'admin1', 'admin1@gmail.com', 111111, 'Male', '2020-04-01', 'admin1', 'admin'),
(22, 'name', '-1', 'name1', 'name@gmail.com', 1725242996, 'Male', '2020-04-16', 'name1', 'user'),
(26, 'Admin', '_2', 'admin2', 'admin2@gmail.com', 1721214997, 'Male', '2020-04-21', 'admin2', 'admin'),
(28, 'Admin', '_3', 'admin3', 'admin3@gmail.com', 1721214998, 'Male', '2020-04-23', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `flightid` (`flightid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`,`uname`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

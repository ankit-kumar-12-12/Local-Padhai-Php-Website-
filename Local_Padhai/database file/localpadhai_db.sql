-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 04:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localpadhai_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `aid` int(11) NOT NULL,
  `aname` varchar(30) COLLATE utf8_bin NOT NULL,
  `aemail` varchar(30) COLLATE utf8_bin NOT NULL,
  `apassword` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `aname`, `aemail`, `apassword`) VALUES
(1, 'Ankit Kumar', 'admin@ak', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `id` int(11) NOT NULL,
  `srequestid` int(11) NOT NULL,
  `sname` text COLLATE utf8_bin NOT NULL,
  `spno` text COLLATE utf8_bin NOT NULL,
  `semail` varchar(50) COLLATE utf8_bin NOT NULL,
  `sclass` varchar(20) COLLATE utf8_bin NOT NULL,
  `sstate` text COLLATE utf8_bin NOT NULL,
  `scity` text COLLATE utf8_bin NOT NULL,
  `saddr` text COLLATE utf8_bin NOT NULL,
  `sreq` text COLLATE utf8_bin NOT NULL,
  `tname` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`id`, `srequestid`, `sname`, `spno`, `semail`, `sclass`, `sstate`, `scity`, `saddr`, `sreq`, `tname`, `date`) VALUES
(11, 9, 'test', '0000000000', 'test@gmail.com', '12th', 'testsate', 'testcity', 'testaddress', 'testrequirement', 'teacherak', '2021-02-26'),
(12, 10, 'Rohit', '35435', 'kdgk@khsdg', 'fwsf', 'sfd', 'sdfd', 'sdfdf', 'sdfsdfsd', 'jony', '2021-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `sub` text COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `about` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `sub`, `email`, `about`) VALUES
(5, 'Test_teacher', 'Regarding_teaching', 'teacher@gmail.com', 'test1\r\ntest2\r\ntest3\r\ntest4\r\ntest5\r\ntest6\r\ntest7');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `srequestid` int(11) NOT NULL,
  `sname` varchar(30) COLLATE utf8_bin NOT NULL,
  `spno` varchar(10) COLLATE utf8_bin NOT NULL,
  `semail` varchar(50) COLLATE utf8_bin NOT NULL,
  `sclass` varchar(10) COLLATE utf8_bin NOT NULL,
  `sstate` varchar(30) COLLATE utf8_bin NOT NULL,
  `scity` varchar(30) COLLATE utf8_bin NOT NULL,
  `saddr` varchar(50) COLLATE utf8_bin NOT NULL,
  `sreq` varchar(60) COLLATE utf8_bin NOT NULL,
  `srequestdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) COLLATE utf8_bin NOT NULL,
  `semail` varchar(30) COLLATE utf8_bin NOT NULL,
  `spassword` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`sid`, `sname`, `semail`, `spassword`) VALUES
(14, 'test', 'test@gmail.com', 'test'),
(15, 'rohit raj', 'r@gmail.com', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `tname` text COLLATE utf8_bin NOT NULL,
  `temail` varchar(30) COLLATE utf8_bin NOT NULL,
  `tabout` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`srequestid`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allocation`
--
ALTER TABLE `allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `srequestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

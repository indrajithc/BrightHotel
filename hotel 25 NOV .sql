-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2018 at 11:15 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `amount` float NOT NULL,
  `cardno` int(5) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`amount`, `cardno`, `month`, `year`, `cvv`) VALUES
(21000, 1100, 'january', 2020, '222');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookno` int(15) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `custid` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookno`, `checkindate`, `checkoutdate`, `custid`, `roomno`, `amount`) VALUES
(2, '2018-10-02', '2017-12-12', 12, 2, NULL),
(11, '2018-10-10', '2018-11-01', 2, 2, NULL),
(17, '2018-11-07', '2018-11-30', 2, 2, NULL),
(18, '2018-11-15', '2018-11-30', 2, 4, NULL),
(19, '2018-11-15', '2018-11-30', 2, 4, NULL),
(20, '2018-11-15', '2018-11-30', 2, 4, 36000);

-- --------------------------------------------------------

--
-- Table structure for table `duty`
--

CREATE TABLE `duty` (
  `taskid` int(10) NOT NULL,
  `task` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `rno` int(10) NOT NULL,
  `empid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty`
--

INSERT INTO `duty` (`taskid`, `task`, `date`, `rno`, `empid`) VALUES
(1, 'cleaning', '2018-02-11', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(20) NOT NULL,
  `salary` float NOT NULL,
  `designation` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dateofjoin` date NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `salary`, `designation`, `address`, `dateofjoin`, `dob`, `password`, `username`, `name`) VALUES
(12, 10000, 'Reciptionist', 'Pynadath(h)\r\nAngamali', '2010-12-02', '1994-11-06', 'cerine123', 'cerine@gmail.com', 'cerine'),
(14, 10000, 'Accountant', 'puthiyaoth', '2006-02-10', '1994-12-04', 'meenu123', 'meenu@gmail.com', 'Meenakshi'),
(17, 40000, 'Ass. Manager', 'thattipadiyil(h)', '2003-02-01', '1986-11-21', '', 'abdhu@gmail.com', 'Abdhu'),
(24, 12000, 'Reciptionist', 'mundackala', '2018-12-08', '1995-12-08', '12345', 'arathi@gmail.com', 'arathi'),
(26, 2111, 'porters', 'aaaa', '2015-04-12', '1998-12-03', '22222', 'seetha@gmail.com', 'seethaa'),
(28, 100000, 'Manager', 'xdfcghj', '2010-05-04', '2000-01-20', '145', 't@gmail.com', 'k joy'),
(29, 15000, 'Reciptionist', 'yuthil', '2018-02-10', '1994-07-08', 'rudra123', 'rudra@gmail.com', 'rudra');

-- --------------------------------------------------------

--
-- Table structure for table `log2`
--

CREATE TABLE `log2` (
  `logid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log2`
--

INSERT INTO `log2` (`logid`, `username`, `password`) VALUES
(29, 'rudra@gmail.com', 'rudra123'),
(28, 't@gmail.com', '145');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(20) NOT NULL,
  `type` varchar(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `type`, `username`, `password`) VALUES
(16, 'u', 'ammalu@gmail.com', 'ammalu123'),
(19, 'u', 'jishmakpkappur@gmail.com', '11'),
(12, 'u', 'kaverysuresh45@gmail.com', '999'),
(20, 'u', 'll@uijf', '12'),
(2, 'u', 'nithin34@gmail.com', 'nithin123'),
(18, 'u', 's9@gmail.com', 's999');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `custid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `adhaar` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noofcustomers` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`custid`, `name`, `address`, `phno`, `adhaar`, `email`, `noofcustomers`, `password`) VALUES
(2, 'NITHIN M', 'kundukalam(h)\r\npathanamthitta', 9461235748, 64384512674, 'nithin34@gmail.com', 0, 'nithin123'),
(12, 'Kavery', 'heera house', 845712365, 9874123654789, 'kaverysuresh45@gmail.com', 0, '999'),
(16, 'ammalu', 'yghjkglhn', 7541236984, 8475693210, 'ammalu@gmail.com', 0, 'ammalu123'),
(18, 'siddiq', 'hfjekwj', 7845120366, 784512369854, 's9@gmail.com', 0, 's999'),
(19, 'rose', ' ghj', 12348, 4563, 'jishmakpkappur@gmail.com', 0, '11'),
(20, 'k joy', 'ghjkl', 12348, 4563, 'll@uijf', 0, '12');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `date` date NOT NULL,
  `requirement` varchar(50) NOT NULL,
  `empid` int(20) NOT NULL,
  `reqid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rno` int(10) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `availability` char(5) NOT NULL,
  `amount` float NOT NULL,
  `offer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rno`, `rtype`, `availability`, `amount`, `offer`) VALUES
(1, 'nonac', 'notav', 1000, ''),
(2, 'ac', 'avail', 1500, ''),
(3, 'double', 'avail', 500, ''),
(4, 'ac', 'avail', 2400, ''),
(5, 'double', 'avail', 1000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookno`),
  ADD KEY `custid` (`custid`),
  ADD KEY `roomno` (`roomno`);

--
-- Indexes for table `duty`
--
ALTER TABLE `duty`
  ADD PRIMARY KEY (`taskid`),
  ADD KEY `empid` (`empid`),
  ADD KEY `rno` (`rno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `log2`
--
ALTER TABLE `log2`
  ADD PRIMARY KEY (`username`),
  ADD KEY `logid` (`logid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `loginid` (`loginid`),
  ADD KEY `loginid_2` (`loginid`),
  ADD KEY `loginid_3` (`loginid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookno` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `duty`
--
ALTER TABLE `duty`
  MODIFY `taskid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `custid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`custid`) REFERENCES `register` (`custid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`roomno`) REFERENCES `room` (`rno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `duty`
--
ALTER TABLE `duty`
  ADD CONSTRAINT `duty_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `romno` FOREIGN KEY (`rno`) REFERENCES `room` (`rno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirement`
--
ALTER TABLE `requirement`
  ADD CONSTRAINT `requirement_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 05:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdriver`
--

CREATE TABLE `bdriver` (
  `bdid` varchar(20) NOT NULL,
  `bdname` varchar(30) DEFAULT NULL,
  `bdphoneno` bigint(10) DEFAULT NULL,
  `bdemail` varchar(30) NOT NULL,
  `bdpassword` varchar(20) NOT NULL DEFAULT 'BDriver@2020'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdriver`
--

INSERT INTO `bdriver` (`bdid`, `bdname`, `bdphoneno`, `bdemail`, `bdpassword`) VALUES
('2001', 'harsha', 8901302286, 'bdriver2001@gmail.com', 'Harsha@2001'),
('2002', 'ashwin', 8905302286, 'bdriver2002@gmail.com', 'Ashwin@2002'),
('2003', 'pavan', 9801302286, 'bdriver2003@gmail.com', 'Pavan@2003'),
('2004', 'suresh', 9805302286, 'bdriver2004@gmail.com', 'Suresh@2004'),
('2005', 'jagadeesh', 9901302286, 'bdriver2005@gmail.com', 'Jagadeesh@2005');

-- --------------------------------------------------------

--
-- Table structure for table `binfo`
--

CREATE TABLE `binfo` (
  `bno` varchar(10) NOT NULL,
  `currentlocation` varchar(30) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `nextlocation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `binfo`
--

INSERT INTO `binfo` (`bno`, `currentlocation`, `status`, `nextlocation`) VALUES
('UB1001', 'BHAWARKUA', 'WAITING', 'C21MALL'),
('UB1002', 'INSTITUTE', 'WAITING', 'BHAWARKUA'),
('UB1003', 'INSTITUTE', 'STARTED', 'BHAWARKUA'),
('UB1004', 'BHAWARKUA', 'WAITING', 'C21MALL');

-- --------------------------------------------------------

--
-- Table structure for table `blocation`
--

CREATE TABLE `blocation` (
  `blocname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blocation`
--

INSERT INTO `blocation` (`blocname`) VALUES
('BHAWARKUA'),
('C21MALL'),
('INSTITUTE');

-- --------------------------------------------------------

--
-- Table structure for table `bmanage`
--

CREATE TABLE `bmanage` (
  `bno` varchar(10) NOT NULL,
  `bdid` varchar(30) DEFAULT NULL,
  `mexpectedmovetime` time DEFAULT NULL,
  `eexpectedmovetime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmanage`
--

INSERT INTO `bmanage` (`bno`, `bdid`, `mexpectedmovetime`, `eexpectedmovetime`) VALUES
('UB1001', '2001', '10:00:00', '12:00:00'),
('UB1002', '2002', '11:00:00', '13:00:00'),
('UB1003', '2003', '12:00:00', '14:00:00'),
('UB1004', '2004', '17:00:00', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bno`) VALUES
('UB1001'),
('UB1002'),
('UB1003'),
('UB1004');

-- --------------------------------------------------------

--
-- Table structure for table `cady`
--

CREATE TABLE `cady` (
  `cno` int(11) NOT NULL,
  `ctype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cady`
--

INSERT INTO `cady` (`cno`, `ctype`) VALUES
(1, 'small'),
(2, 'small'),
(3, 'large'),
(4, 'large'),
(5, 'large');

-- --------------------------------------------------------

--
-- Table structure for table `citybus`
--

CREATE TABLE `citybus` (
  `time` time NOT NULL,
  `rtime` time NOT NULL,
  `busno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citybus`
--

INSERT INTO `citybus` (`time`, `rtime`, `busno`) VALUES
('08:25:00', '10:44:00', 'MP091003'),
('08:26:00', '11:17:00', 'MP091001'),
('08:48:00', '11:50:00', 'MP091004'),
('09:11:00', '12:23:00', 'MP091005'),
('09:34:00', '12:56:00', 'MP091006'),
('09:57:00', '14:02:00', 'MP091007'),
('10:03:00', '14:35:00', 'MP091002'),
('10:20:00', '15:08:00', 'MP091008'),
('10:43:00', '15:41:00', 'MP091009'),
('11:06:00', '16:14:00', 'MP091010'),
('11:29:00', '16:47:00', 'MP091011'),
('11:52:00', '16:54:00', 'MP091012'),
('11:57:00', '15:01:00', 'MP091020'),
('14:10:00', '17:32:00', 'MP091018'),
('14:33:00', '18:05:00', 'MP091001'),
('14:56:00', '18:15:00', 'MP091002'),
('15:19:00', '18:27:00', 'MP091003'),
('15:42:00', '18:39:00', 'MP091004'),
('16:05:00', '18:53:00', 'MP091005'),
('16:28:00', '19:09:00', 'MP091006'),
('16:51:00', '19:23:00', 'MP091007'),
('17:14:00', '19:44:00', 'MP091008'),
('17:37:00', '20:17:00', 'MP091009'),
('18:00:00', '20:43:00', 'MP091010'),
('18:23:00', '21:50:00', 'MP091011'),
('18:46:00', '22:23:00', 'MP091012'),
('19:09:00', '22:39:00', 'MP091013'),
('19:32:00', '22:57:00', 'MP091014');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `did` varchar(20) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `demail` varchar(30) DEFAULT NULL,
  `dphoneno` bigint(10) DEFAULT NULL,
  `dpassword` varchar(20) NOT NULL DEFAULT 'Driver@2020'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`did`, `dname`, `demail`, `dphoneno`, `dpassword`) VALUES
('1001', 'ram', 'ram1001@gmail.com', 9999999999, 'Ram@1001'),
('1002', 'shyam', 'shyam1002@gmail.com', 9999999998, 'Shyam@1002'),
('1003', 'sunil', 'sunil1003@gmail.com', 9999999997, 'Sunil@1003'),
('1004', 'anuj', 'anuj1004@gmail.com', 9999999996, 'Anuj@1004'),
('1005', 'desai', 'desai1005@gmail.com', 9999999995, 'Desai@1005'),
('1006', 'rakesh', 'rakesh1006@gmail.com', 9999999994, 'Rakesh@1006');

-- --------------------------------------------------------

--
-- Table structure for table `expectedtime`
--

CREATE TABLE `expectedtime` (
  `routeno` int(11) NOT NULL,
  `loc1` varchar(30) NOT NULL,
  `loc2` varchar(30) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expectedtime`
--

INSERT INTO `expectedtime` (`routeno`, `loc1`, `loc2`, `time`) VALUES
(1, 'BUSSTOP', 'JCBOSE', 6),
(1, 'GATE', 'BUSSTOP', 8),
(1, 'HOSPITAL', 'SCHOOL', 7),
(1, 'HUB', 'GATE', 10),
(1, 'JCBOSE', 'HOSPITAL', 3),
(1, 'SCHOOL', 'HUB', 5),
(2, 'BUSSTOP', 'GATE', 8),
(2, 'GATE', 'HUB', 10),
(2, 'HOSPITAL', 'JCBOSE', 3),
(2, 'HUB', 'SCHOOL', 5),
(2, 'JCBOSE', 'BUSSTOP', 6),
(2, 'SCHOOL', 'HOSPITAL', 7),
(3, 'BUSSTOP', 'JCBOSE', 6),
(3, 'HOSPITAL', 'SCHOOL', 7),
(3, 'HUB', 'BUSSTOP', 4),
(3, 'JCBOSE', 'HOSPITAL', 3),
(3, 'SCHOOL', 'HUB', 5),
(4, 'BUSSTOP', 'HUB', 4),
(4, 'HOSPITAL', 'JCBOSE', 3),
(4, 'HUB', 'SCHOOL', 5),
(4, 'JCBOSE', 'BUSSTOP', 6),
(4, 'SCHOOL', 'HOSPITAL', 7);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `cno` int(11) NOT NULL,
  `seatsavail` int(11) DEFAULT NULL,
  `currentloc` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`cno`, `seatsavail`, `currentloc`) VALUES
(1, 8, 'HOSPITAL'),
(2, 2, 'HUB'),
(3, 3, 'BUSSTOP'),
(4, 3, 'SCHOOL'),
(5, 13, 'GATE');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locname`) VALUES
('BUSSTOP'),
('GATE'),
('HOSPITAL'),
('HUB'),
('JCBOSE'),
('SCHOOL');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `mname` varchar(30) DEFAULT NULL,
  `mid` varchar(20) NOT NULL,
  `mphoneno` bigint(10) DEFAULT NULL,
  `memail` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mname`, `mid`, `mphoneno`, `memail`) VALUES
('krishna', '1000', 8888888888, 'manager1000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `cno` int(11) NOT NULL,
  `did` varchar(20) DEFAULT NULL,
  `routeno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`cno`, `did`, `routeno`) VALUES
(1, '1001', 2),
(2, '1002', 3),
(3, '1003', 4),
(4, '1005', 1),
(5, '1004', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `phoneno` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`email`, `password`, `fname`, `lname`, `phoneno`) VALUES
('abhi@gmail.com', '$2y$10$o5By/bArXQkiqjqlUXlJNe5sFxU7ROOn61gIL5r0uoP64SIH9Z1ce', 'abhiram', 'K', 630292228),
('anuj1004@gmail.com', '$2y$10$LYG0XAg1E2SnbABmQpJx5uFVliSeseak/6PMNRXvvHWxERF2kAle6', 'anuj', 'Z', 9999999996),
('bdriver2001@gmail.com', '$2y$10$e8yCnraYjexTXKfhdqzkrOWWpbKGsp5HBA9kCa.y6M6JT8NI6zT/u', 'harsha', 'A', 8901302286),
('bdriver2002@gmail.com', '$2y$10$jeoe17mDDPxpnyyVXZFpfedC87VRKkyV5gLt8H.UD24wGEBn0moOi', 'ashwin', 'B', 8905302286),
('bdriver2003@gmail.com', '$2y$10$NlTSmIp9rHPuJkDSodxgKOzVAiBIx.Jy1aoGJw3IaKUlJShrblye.', 'pavan', 'C', 9801302286),
('bdriver2004@gmail.com', '$2y$10$7D/2nNb17cIWeID4wjh7jeV.yZZIEpL6Zg8dJpKDEJjfQFJpR/rzG', 'suresh', 'D', 9805302286),
('bdriver2005@gmail.com', '$2y$10$8fX2JRRPLPKTX.8VyDGFautgUJL.T75r9yps4lOoFhCL/9BGrtGJK', 'jagadeesh', 'E', 9901302286),
('desai1005@gmail.com', '$2y$10$wU/Cgyli3pd3d6dgXR6eI.RY.Cd6ct2lgALl7pGdhF//rUCh.Qb12', 'desai', 'XY', 9999999995),
('manager1000@gmail.com', '$2y$10$V/6c8O5/my4EQSVcotgltOecTa20.hmm5w.dZyX0Ol5d8oJhChv2i', 'krishna', 'A', 8888888888),
('pradeepreddythathireddy@gmail.', '$2y$10$p7aF.lnt3qHvsaNR1hhUn.sd7hJN0/4XM52dL75rQFAm3h7HxXB0G', 'pradeep', 'T', 9949188203),
('rakesh1006@gmail.com', '$2y$10$udb9WFKP1fn1rf7aKsN1M.NFgek9x2fogNV.e9Z9xzkctgM4Tb9oO', 'rakesh', 'YZ', 9999999994),
('ram1001@gmail.com', '$2y$10$Mswj9U77PdHxRRbQHY.zHunss9jq7H00OBrp0E0Oqm7LfNlBiax2a', 'ram', 'X', 9999999999),
('ravi@gmail.com', '$2y$10$4CECWcoWWoxEEqZggDXWsOEM4NEXF3aY6nZPYpyGbgruDTySCddCq', 'ravi', 'B', 8688220720),
('shyam1002@gmail.com', '$2y$10$xZmbAsajtRHy/dEgYffU.OUKXGd.wOWbPOy8EY/DCIph3NYoA29wa', 'shyam', 'Y', 9999999998),
('sunil1003@gmail.com', '$2y$10$trvHDmXrDsF00vwIeDji3Oi6tmoRLKFaG1zxcl3aePzT4yOJnqRHa', 'sunil', 'Z', 9999999997);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `routeno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`routeno`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `universityservices`
--

CREATE TABLE `universityservices` (
  `servicename` varchar(40) NOT NULL,
  `usdid` varchar(20) NOT NULL,
  `usdname` varchar(30) DEFAULT NULL,
  `usdphoneno` bigint(10) DEFAULT NULL,
  `officephoneno` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universityservices`
--

INSERT INTO `universityservices` (`servicename`, `usdid`, `usdname`, `usdphoneno`, `officephoneno`) VALUES
('Ambulance Service', 'USA101', 'rishikesh', 8796578847, 108),
('Ambulance Service', 'USA102', 'hemanth', 8793578847, 108),
('Fire Station Service', 'USF101', 'jogesh', 9796578847, 101),
('Fire Station Service', 'USF102', 'praveen', 9793578847, 101),
('Shifting Service', 'USS101', 'sarath', 8996578847, 9949188200),
('Shifting Service', 'USS102', 'akhil', 8993578847, 9949188200),
('Shifting Service', 'USS103', 'ravi', 8996578947, 9949188200),
('Shifting Service', 'USS104', 'nani', 8796578867, 9949188200),
('Shifting Service', 'USS105', 'deekshith', 9976578847, 9949188200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdriver`
--
ALTER TABLE `bdriver`
  ADD PRIMARY KEY (`bdid`);

--
-- Indexes for table `binfo`
--
ALTER TABLE `binfo`
  ADD PRIMARY KEY (`bno`),
  ADD KEY `currentlocation` (`currentlocation`),
  ADD KEY `nextlocation` (`nextlocation`);

--
-- Indexes for table `blocation`
--
ALTER TABLE `blocation`
  ADD PRIMARY KEY (`blocname`);

--
-- Indexes for table `bmanage`
--
ALTER TABLE `bmanage`
  ADD PRIMARY KEY (`bno`),
  ADD KEY `bdid` (`bdid`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `cady`
--
ALTER TABLE `cady`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `citybus`
--
ALTER TABLE `citybus`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `expectedtime`
--
ALTER TABLE `expectedtime`
  ADD PRIMARY KEY (`routeno`,`loc1`),
  ADD KEY `loc1` (`loc1`),
  ADD KEY `loc2` (`loc2`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`cno`),
  ADD KEY `currentloc` (`currentloc`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locname`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`cno`),
  ADD UNIQUE KEY `did` (`did`),
  ADD KEY `routeno` (`routeno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`routeno`);

--
-- Indexes for table `universityservices`
--
ALTER TABLE `universityservices`
  ADD PRIMARY KEY (`servicename`,`usdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cady`
--
ALTER TABLE `cady`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binfo`
--
ALTER TABLE `binfo`
  ADD CONSTRAINT `binfo_ibfk_1` FOREIGN KEY (`bno`) REFERENCES `bus` (`bno`),
  ADD CONSTRAINT `binfo_ibfk_2` FOREIGN KEY (`currentlocation`) REFERENCES `blocation` (`blocname`),
  ADD CONSTRAINT `binfo_ibfk_3` FOREIGN KEY (`nextlocation`) REFERENCES `blocation` (`blocname`);

--
-- Constraints for table `bmanage`
--
ALTER TABLE `bmanage`
  ADD CONSTRAINT `bmanage_ibfk_1` FOREIGN KEY (`bno`) REFERENCES `bus` (`bno`),
  ADD CONSTRAINT `bmanage_ibfk_2` FOREIGN KEY (`bdid`) REFERENCES `bdriver` (`bdid`);

--
-- Constraints for table `expectedtime`
--
ALTER TABLE `expectedtime`
  ADD CONSTRAINT `expectedtime_ibfk_1` FOREIGN KEY (`routeno`) REFERENCES `route` (`routeno`),
  ADD CONSTRAINT `expectedtime_ibfk_2` FOREIGN KEY (`loc1`) REFERENCES `location` (`locname`),
  ADD CONSTRAINT `expectedtime_ibfk_3` FOREIGN KEY (`loc2`) REFERENCES `location` (`locname`);

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`cno`) REFERENCES `cady` (`cno`),
  ADD CONSTRAINT `info_ibfk_2` FOREIGN KEY (`currentloc`) REFERENCES `location` (`locname`);

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`cno`) REFERENCES `cady` (`cno`),
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`did`) REFERENCES `driver` (`did`),
  ADD CONSTRAINT `manages_ibfk_3` FOREIGN KEY (`routeno`) REFERENCES `route` (`routeno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

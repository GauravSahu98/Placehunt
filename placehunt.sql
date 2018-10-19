-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 11:32 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placehunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE `applies` (
  `sid` int(50) NOT NULL,
  `jid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applies`
--

INSERT INTO `applies` (`sid`, `jid`) VALUES
(10, 1),
(10, 3),
(12, 2),
(12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `email` varchar(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` int(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`email`, `cid`, `name`, `contactno`, `password`) VALUES
('aa@gmail.df', 2, 'IVP', 1253737470, '1234'),
('asd@f.df', 3, 'JP Morgan', 1736247498, '234'),
('mn@gmail.com', 4, 'Media.net', 1234567890, '$2y$10$zJPxA.rR1nWuxceP29vOPuDDArQenWENOgM5/nqdOevdoaRTM0URq'),
('zu@uber.com', 6, 'Uber', 1264722878, '$2y$10$NPm2BTgm7UMggRyuWpHMBu8PspuZPQQfWFmisUdGBRpr5b/KojIji');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `skills` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `position`, `skills`) VALUES
(1, 'Frontend web dev', 'HTML, CSS, JS'),
(2, 'Android dev', 'Ionic'),
(3, 'Backend web dev', 'Django, PHP');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `cid` int(50) NOT NULL,
  `jid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sid` int(50) NOT NULL,
  `cgpa` double DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `admittedyear` int(100) DEFAULT '2014',
  `contact` int(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `sid`, `cgpa`, `address`, `admittedyear`, `contact`, `password`) VALUES
('Sam', 'sam@kk.com', 10, NULL, NULL, 2014, NULL, '$2y$10$dDXiYNi6ewcMTnbi/g9FYeEG/bZJjl15GlqWvN6o/xUj34VMHxqzG'),
('Sam123', 'sam1@kk.com', 11, NULL, NULL, 2014, NULL, '$2y$10$Z4G/UooGPBUIQWV49hvzWORkGd.v.o7spyNPEj/zg1PDUgRD.fj5i'),
('gs98', 'gauravsahu.gs.98@gmail.com', 12, NULL, NULL, 2014, NULL, '$2y$10$EBFA3EVDger1Nx31fbhEYuKGeGhMHJdoCzSJixGAJSJjeF5WWhliS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`sid`,`jid`),
  ADD KEY `Applies_fk1` (`jid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`cid`,`jid`),
  ADD KEY `Posts_fk1` (`jid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applies`
--
ALTER TABLE `applies`
  ADD CONSTRAINT `Applies_fk0` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`),
  ADD CONSTRAINT `Applies_fk1` FOREIGN KEY (`jid`) REFERENCES `job` (`jid`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Posts_fk0` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`),
  ADD CONSTRAINT `Posts_fk1` FOREIGN KEY (`jid`) REFERENCES `job` (`jid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2015 at 01:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shambhavi`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `name` text,
  `email` text,
  `phone` text,
  `place` text,
  `qa` int(11) DEFAULT NULL,
  `q` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `email`, `phone`, `place`, `qa`, `q`) VALUES
('Shambhavi Jha', 'igitshambhavi@gmail.com', '8860451680', 'NEW DELHI', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `localcomment`
--

CREATE TABLE IF NOT EXISTS `localcomment` (
  `idc` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `user` text,
  `comment` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localcomment`
--

INSERT INTO `localcomment` (`idc`, `id`, `user`, `comment`) VALUES
(1, 1, 'demo', 'Thank you.');

-- --------------------------------------------------------

--
-- Table structure for table `localquestion`
--

CREATE TABLE IF NOT EXISTS `localquestion` (
  `id` int(11) NOT NULL,
  `user` text,
  `question` text,
  `answer` text,
  `place` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localquestion`
--

INSERT INTO `localquestion` (`id`, `user`, `question`, `answer`, `place`) VALUES
(1, 'demo', 'How to reach India Gate?', 'Get down at Hauz khas metro station.', 'NEW DELHI'),
(2, 'rahul', 'Which food should we try?', NULL, 'NEW DELHI');

-- --------------------------------------------------------

--
-- Table structure for table `localreview`
--

CREATE TABLE IF NOT EXISTS `localreview` (
  `id` int(11) NOT NULL,
  `rec` text,
  `food` text,
  `shop` text,
  `place` text,
  `misc` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localreview`
--

INSERT INTO `localreview` (`id`, `rec`, `food`, `shop`, `place`, `misc`) VALUES
(1, 'Red fort and India Gate.', 'Gtb Nagar and HKV.', 'Sarojini Nagar and janpath', 'NEW DELHI', 'Clubs at HKV.');

-- --------------------------------------------------------

--
-- Table structure for table `visitedcomment`
--

CREATE TABLE IF NOT EXISTS `visitedcomment` (
  `idc` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `user` text,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitedquestion`
--

CREATE TABLE IF NOT EXISTS `visitedquestion` (
  `id` int(11) NOT NULL,
  `user` text,
  `question` text,
  `answer` text,
  `place` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitedreview`
--

CREATE TABLE IF NOT EXISTS `visitedreview` (
  `id` int(11) NOT NULL,
  `rec` text,
  `food` text,
  `shop` text,
  `place` text,
  `misc` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitedreview`
--

INSERT INTO `visitedreview` (`id`, `rec`, `food`, `shop`, `place`, `misc`) VALUES
(1, 'Rafting, cliff jumping.', 'maggi', 'Haridwar', 'RISHIKESH', 'Do camping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `localcomment`
--
ALTER TABLE `localcomment`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `localquestion`
--
ALTER TABLE `localquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localreview`
--
ALTER TABLE `localreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitedcomment`
--
ALTER TABLE `visitedcomment`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `visitedquestion`
--
ALTER TABLE `visitedquestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitedreview`
--
ALTER TABLE `visitedreview`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `localcomment`
--
ALTER TABLE `localcomment`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `localquestion`
--
ALTER TABLE `localquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `localreview`
--
ALTER TABLE `localreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitedcomment`
--
ALTER TABLE `visitedcomment`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visitedquestion`
--
ALTER TABLE `visitedquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visitedreview`
--
ALTER TABLE `visitedreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2015 at 01:14 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `main`
--

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `place` text NOT NULL,
  `experience` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local`
--

INSERT INTO `local` (`id`, `username`, `place`, `experience`, `date`) VALUES
(1, 'gaurav', 'NEW DELHI', 'Very Busy Place.', '2010-10-17'),
(2, 'rahul', 'NEW DELHI', 'It is a nice place to stay and have fun.', '2014-01-08'),
(3, 'shambhavi', 'NEW DELHI', 'Delhi is a Vibrant city with its share of pros and ons. From amazing night life to rich cultural heritage, You name it, You have it :) I have been living here for last 19 years and hope to live for many more ;) Feel free to contact for any assistance :) I will be happy to help!\r\nHey Happy Travelling btw :)', '1997-03-02'),
(5, 'demo', 'EGYPT', 'niceee', '2015-10-16'),
(6, 'stuti', 'KANPUR', 'very peace', '2015-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `username`, `password`) VALUES
(1, 'Anmol9107', '123'),
(2, 'gaurav', '123'),
(3, 'rahul', '123'),
(4, 'shambhavi', '123'),
(5, 'demo', '123'),
(6, 'stuti', '123');

-- --------------------------------------------------------

--
-- Table structure for table `visited`
--

CREATE TABLE IF NOT EXISTS `visited` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `place` text NOT NULL,
  `experience` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visited`
--

INSERT INTO `visited` (`id`, `username`, `place`, `experience`, `date`) VALUES
(1, 'Anmol9107', 'KOLKATA', 'phenomenol', '2015-10-07'),
(2, 'gaurav', 'MYSORE', 'Very peaceful place.', '2015-07-16'),
(3, 'rahul', 'RISHIKESH', 'very nice', '2015-10-06'),
(4, 'shambhavi', 'RISHIKESH', 'Very nice to hang out with friends.', '2015-08-13'),
(5, 'demo', 'ITALY', 'very nice', '2015-10-06'),
(6, 'stuti', 'NEW DELHI', 'have a nice stay', '2015-10-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visited`
--
ALTER TABLE `visited`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `visited`
--
ALTER TABLE `visited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

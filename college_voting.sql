-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 07:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(20) NOT NULL,
  `party_name` varchar(20) NOT NULL,
  `party_symbol` tinytext NOT NULL,
  `election` varchar(25) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `education_qualification` text NOT NULL,
  `election_status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_name`, `party_name`, `party_symbol`, `election`, `gender`, `dob`, `age`, `address`, `education_qualification`, `election_status`) VALUES
(1, 'Jake', 'SFI', '2025-01-14-02-55-56download (1).png', '1', 'Male', '1998-10-13', '25', 'Pathanamthitta', 'Degree', ''),
(2, 'Rahul', 'KSU', '2025-01-14-02-57-14images.jpg', '1', 'Male', '1998-08-12', '25', 'Pathanamthitta', 'Degree', '');

-- --------------------------------------------------------

--
-- Table structure for table `display_vote`
--

CREATE TABLE IF NOT EXISTS `display_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE IF NOT EXISTS `election` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `election_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `voter_status` varchar(50) NOT NULL,
  `result_status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`id`, `election_name`, `status`, `voter_status`, `result_status`) VALUES
(1, 'Union Election', 'active', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`) VALUES
(1, 'Union Election', 'Union Election is on 20 Jan 2025', '2025-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voter`
--

CREATE TABLE IF NOT EXISTS `tbl_voter` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `voter_id` varchar(15) NOT NULL,
  `adhar_no` varchar(15) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` tinytext NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `voter_id` (`voter_id`),
  UNIQUE KEY `adhar_no` (`adhar_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_voter`
--

INSERT INTO `tbl_voter` (`id`, `name`, `address`, `dob`, `father_name`, `gender`, `voter_id`, `adhar_no`, `mobile_no`, `email`, `password`, `photo`, `status`) VALUES
(1, 'mike john', 'Mylapra', '2006-01-01', 'John', 'Male', 'KL23ABC12345', '345678909287', '7558083475', 'roshanjose23@gmail.com', '975335', '2025-01-14-09-13-43Mohanlal_Viswanathan_BNC.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE IF NOT EXISTS `voting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voter_id` varchar(20) NOT NULL,
  `election_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `casted` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `voter_id`, `election_id`, `date`, `casted`) VALUES
(1, 'KL23ABC12345', '1', '2025-01-19', '04f5467911254912d9f0be7ab15797e14ada85a6d104acce193b1b92fe68e3a716778d5ce033d00bc8b67db987fdf56b0637fcf8994365937f97f1b314d8de70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

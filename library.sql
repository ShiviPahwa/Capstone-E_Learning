-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 03:10 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `name`, `image`) VALUES
(1, 'An Introduction to Formal Languages and Automata - 5th Edition - 2011 (1).pdf', 'image-02.jpg'),
(2, 'Bhagavad-gita_As_It_Is.pdf', 'P1000069_Bhagavadgita_s.jpg'),
(3, 'dan-brown-digital-fortress.pdf', 'digi.jpg'),
(4, 'Data_Communications_and_Networking_By_Behrouz_A.Forouzan.pdf', 'image-04.jpg'),
(5, 'deception_point_-_dan_brown.pdf', 'deception-point-9780743497466_lg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Messages` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `Name`, `Messages`, `date`) VALUES
(3, 'Tanmay Jain', 'fsivb', ''),
(4, 'cdsc', 'weichb', '17/11/21'),
(5, 'fecdb', 'ckajsn', '21/11/17'),
(6, 'dac', 'c', '21/11/17'),
(7, 'ss', 'ss', '21/11/17'),
(8, 'acb', 'csb', '21/11/17');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`ID`, `name`, `image`) VALUES
(1, 'Networks ( MAP, Wireless LAN ).pdf', 'Capture.PNG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

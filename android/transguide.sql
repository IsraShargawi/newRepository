-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2018 at 03:07 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `transguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `password` text NOT NULL,
  `imgsrc` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `userID` (`userID`),
  KEY `userID_2` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userID`, `username`, `phonenumber`, `password`, `imgsrc`) VALUES
(18, 'isra', '0903001006', 'zzzzzz', 'isra.png'),
(23, 'fado', '0997983067', 'fado', 'fado.png');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `posttext` text NOT NULL,
  `likenum` int(11) NOT NULL,
  `pDate` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `imgsrc` varchar(255) NOT NULL,
  PRIMARY KEY (`postID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `userID`, `posttext`, `likenum`, `pDate`, `username`, `imgsrc`) VALUES
(10, 1, 'araby studium haven''t any transportation hhhhhhhhhhhhhhh', 9, '2018-07-01 00:00:00', 'israshargawi', 'newname.jpg'),
(11, 1, 'what''s up guys it''s wornderfull day ,, don''t be upset pleaseeee :)', 2, '2018-07-26 00:00:00', 'israshargawi', 'gghh.jpg'),
(20, 18, 'hello ', 0, '0000-00-00 00:00:00', 'isra', 'isra.png'),
(21, 23, 'hy every body ðŸ˜ðŸ˜ðŸ˜˜ðŸ˜˜', 0, '0000-00-00 00:00:00', 'fado', 'index.png'),
(22, 23, 'Ø§Ù„Ø³Ù„Ø§Ù… Ø¹Ù„ÙŠÙƒÙ…', 0, '0000-00-00 00:00:00', 'fado', 'index.png');

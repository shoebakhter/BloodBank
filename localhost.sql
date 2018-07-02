-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2017 at 05:36 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodbank`
--
CREATE DATABASE `bloodbank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bloodbank`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('shoeb', 'akhter');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `donorname` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`donorname`, `department`) VALUES
('aaaaa', 'bbb'),
('', ''),
('', ''),
('', ''),
('33', '33'),
('we', 'aq'),
('cdcdwc', 'cdcew'),
('AAA', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `infotable`
--

CREATE TABLE IF NOT EXISTS `infotable` (
  `donorname` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `bgroup` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infotable`
--

INSERT INTO `infotable` (`donorname`, `department`, `sex`, `bgroup`, `phone`, `address`, `email`, `password`) VALUES
('shoebc', 'cse', 'male', 'op', '777578', 'ccbhbh', 'edwcbh', 'whbcwgb'),
('Ff', 'sn', 'Male', 'B-', '01719177878', '767', '', '96e79218965eb72c92a549dd5a3301'),
('SD', 'FFFF', 'Male', 'B+', '01719177878', 'xxxxxx', 'mdrezaulislamanik@gmail.com', '96e79218965eb72c92a549dd5a3301'),
('SD', 'DS', 'Female', 'O+', '01719177878', 'zbhsdbhsb', 'shoebakhter21@gmail.com', '96e79218965eb72c92a549dd5a3301'),
('SD', 'sn', 'Female', 'AB+', '01719177878', 'n ', 'shoebakhte2r21@gmail.com', '7fa8282ad93047a4d6fe6111c93b30'),
('erett', 'yyry', 'Female', 'O+', '35556897999', 'et57rtyttu', 'shoebakhter2122222@gmail.com', 'e10adc3949ba59abbe56e057f20f88'),
('hgjdgdn', 'j njs', 'Others', 'B-', '764534455656', 'kjjnjnm', '2456yughbvcvbv', 'e10adc3949ba59abbe56e057f20f88'),
('yuyuyu', 'yuuggh', 'Male', 'A-', '01719177878', 'ghvgbvcc', 'sdbfgd', 'e10adc3949ba59abbe56e057f20f88'),
('hyuryuseh', '7665yd', 'Male', 'AB+', '01728234567', 'yweyhabbhuhfsfdh', 'fgbc', '00c66aaf5f2c3f49946f15c1ad2ea0'),
('gh', 'asd', 'Female', 'A+', '01719177878', 'xxxxxx', 'AAA11', '96e79218965eb72c92a549dd5a3301'),
('ywtdywdy', 'dwdfe', '', 'B+', '233u721723764', '2nhsdb', 's21@gmail.com', 'e10adc3949ba59abbe56e057f20f88');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `bloodgroup` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `last_donateblood_date` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`firstname`, `lastname`, `sex`, `username`, `password`, `bloodgroup`, `mobile`, `email`, `address`, `location`, `last_donateblood_date`, `type`) VALUES
('shoeb', 'akhter', 'male', 'shoeb', '1234', 'o+', '01', '02', 'bsmrstu', 'gp', '23-10-20', 'dfgggg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `email`, `phone`, `msg`) VALUES
('Shoeb Akhter', 'shoebakhter21@gmail.com', '01737498044', 'I need your phone number'),
('r3gggg', 'dedwfwdf', 'bdhcbhsb', 'hdsbfhcnW DHGevff wefgggvsdagvhsd ghwefvghfv egyTFGHF GYFGyf wefgyfgywe dgeyfgyw wdgwyegfywew dygfywegyf ygfyuegw weygefyyef ygwyefwG'),
('dsfsdvb shoeb', 'czchgv hsh', 'zgsghdh', 'sdgzzhdgh'),
('', '', '', ''),
('sfbgh', 'shoebakhter21@gmail.com', '01719177878', 'dcgndcndhfh'),
('dsfsdvb shoeb', 'czchgv hsh', 'zgsghdh', 'sdgzzhdgh'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

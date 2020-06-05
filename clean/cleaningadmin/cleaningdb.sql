-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2020 at 02:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cleaningdb`
--
CREATE DATABASE IF NOT EXISTS `cleaningdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cleaningdb`;

-- --------------------------------------------------------

--
-- Table structure for table `cleaning`
--

CREATE TABLE IF NOT EXISTS `cleaning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rooms` int(2) NOT NULL,
  `bathrooms` int(2) NOT NULL,
  `Balcony` varchar(5) NOT NULL,
  `Kitchen_Cupboards` varchar(5) NOT NULL,
  `Fridge` varchar(5) NOT NULL,
  `Oven` varchar(5) NOT NULL,
  `Pantry` varchar(5) NOT NULL,
  `After_Party` varchar(5) NOT NULL,
  `Carpet_Steam_Clean` varchar(5) NOT NULL,
  `Internal_Windows` varchar(5) NOT NULL,
  `dateof` date NOT NULL,
  `timeof` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `enteredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cleaning`
--

INSERT INTO `cleaning` (`id`, `rooms`, `bathrooms`, `Balcony`, `Kitchen_Cupboards`, `Fridge`, `Oven`, `Pantry`, `After_Party`, `Carpet_Steam_Clean`, `Internal_Windows`, `dateof`, `timeof`, `name`, `phone`, `email`, `address`, `type`, `enteredby`) VALUES
(1, 21, 21, '21', '21', '21', '31', '31', 'no1', 'no1', 'no1', '2020-05-10', '101', 'test11', '9019019011', 'test@sdhf.nom1', 'asd1', 'asad1', 'GSB1');

-- --------------------------------------------------------

--
-- Table structure for table `ims_usrpass`
--

CREATE TABLE IF NOT EXISTS `ims_usrpass` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ims_usrpass`
--

INSERT INTO `ims_usrpass` (`sno`, `name`, `phno`, `username`, `password`, `status`, `service`, `remarks`) VALUES
(12, 'admin', '9018824507', 'admin', 'admin', NULL, 'admin', NULL),
(19, 'Gurmeet SIngh', '222', '2222', '22222', NULL, 'Telecaller', NULL),
(16, 'gurmeet singh', '9018824507`', 'gurmeet', '12345', NULL, 'Sales', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `dt` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`sno`, `user`, `dt`) VALUES
(58, 'admin', '31-05-2020 01:35:45 PM'),
(59, 'admin', '31-05-2020 07:06:32 PM');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `producttype` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `producttype` (`producttype`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`sno`, `producttype`) VALUES
(10, 'Annotation 2020-05-31 205629.jpg'),
(15, 'nta.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

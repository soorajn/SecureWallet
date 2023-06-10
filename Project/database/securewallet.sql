-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2022 at 01:26 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `securewallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `ac_name` varchar(100) NOT NULL,
  `ac_age` int(11) NOT NULL,
  `ac_addr` text NOT NULL,
  `ac_sex` varchar(100) NOT NULL,
  `ac_dob` date NOT NULL,
  `ac_mob` varchar(100) NOT NULL,
  `ac_adhar` varchar(100) NOT NULL,
  `ac_email` varchar(100) NOT NULL,
  `ac_nat` varchar(100) NOT NULL,
  `ac_account_no` varchar(100) NOT NULL,
  `n_name` varchar(100) NOT NULL,
  `n_age` int(11) NOT NULL,
  `n_sex` varchar(100) NOT NULL,
  `n_rel` varchar(100) NOT NULL,
  `n_occ` varchar(100) NOT NULL,
  `n_adhar` varchar(100) NOT NULL,
  `n_mob` varchar(100) NOT NULL,
  `n_email` varchar(100) NOT NULL,
  `n_addr` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `ac_stat` varchar(200) NOT NULL,
  `ac_account_nopass` text NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `ac_name`, `ac_age`, `ac_addr`, `ac_sex`, `ac_dob`, `ac_mob`, `ac_adhar`, `ac_email`, `ac_nat`, `ac_account_no`, `n_name`, `n_age`, `n_sex`, `n_rel`, `n_occ`, `n_adhar`, `n_mob`, `n_email`, `n_addr`, `photo1`, `photo2`, `ac_stat`, `ac_account_nopass`) VALUES
(2, 'SHAMEER', 25, 'PALAKKAD', 'Female', '2022-02-02', '7979464646', 'SLAHSAFKASGF', 'sg@gmail.com', 'INDIA', 'SBI139539919', 'RAS', 26, 'Female', 'WIFE', 'CLERK', '415454545454', '6464646464', 'sh@gmail.com', 'PALAKKAD', 'Desert.jpg', 'Tulips.jpg', 'Accept', '02b0adfbd668aa47b39eb3131678d1b7'),
(4, 'SHAMEER', 25, 'PALAKKAD', 'Female', '2022-02-02', '7979464646', 'SLAHSAFKASGF', 'sg@gmail.com', 'INDIA', 'SBI139539916', 'RAS', 26, 'Female', 'WIFE', 'CLERK', '415454545454', '6464646464', 'sh@gmail.com', 'PALAKKAD', 'Desert.jpg', 'Tulips.jpg', 'Accept', '02b0adfbd668aa47b39eb3131678d1b7');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `Log_Id` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Log_Id`, `username`, `password`) VALUES
(1, 'WALKOJH00236', 'wallet', 'wallet');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cnt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cuedclick`
--

CREATE TABLE IF NOT EXISTS `cuedclick` (
  `cuid` int(11) NOT NULL AUTO_INCREMENT,
  `accountno` varchar(100) NOT NULL,
  `x1` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `x3` int(11) NOT NULL,
  `y3` int(11) NOT NULL,
  `x4` int(11) NOT NULL,
  `y4` int(11) NOT NULL,
  PRIMARY KEY (`cuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cuedclick`
--

INSERT INTO `cuedclick` (`cuid`, `accountno`, `x1`, `y1`, `x2`, `y2`, `x3`, `y3`, `x4`, `y4`) VALUES
(2, 'SBI139539919', 105, 117, 316, 117, 172, 237, 305, 44);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE IF NOT EXISTS `deposit` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`dep_id`, `account_no`, `name`, `contactno`, `email`, `amount`, `total`, `date`) VALUES
(1, 'SBI139539919', 'SHAMEER', '7979464646', 'sg@gmail.com', 2500, 2500, '2022-02-06'),
(2, 'SBI139539919', 'SHAMEER', '7979464646', 'sg@gmail.com', 1000, 1500, '2022-02-06'),
(3, 'SBI139539916', 'SHAMEER', '7979464646', 'sg@gmail.com', 1000, 1000, '2022-02-06'),
(4, 'SBI139539919', 'SHAMEER', '7979464646', 'sg@gmail.com', 100, 1400, '2022-02-06'),
(5, 'SBI139539916', 'SHAMEER', '7979464646', 'sg@gmail.com', 100, 1100, '2022-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fbk_id` int(11) NOT NULL AUTO_INCREMENT,
  `pinno` varchar(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subj` varchar(100) NOT NULL,
  `desp` text NOT NULL,
  `date` date NOT NULL,
  `replay` text NOT NULL,
  PRIMARY KEY (`fbk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE IF NOT EXISTS `server` (
  `server_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`server_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`server_id`, `username`, `password`) VALUES
(1, 'server', 'server');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE IF NOT EXISTS `transfer` (
  `transfer_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `frmpinn` varchar(25) NOT NULL,
  `topinn` varchar(25) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`transfer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`transfer_id`, `account_no`, `name`, `contactno`, `email`, `frmpinn`, `topinn`, `amount`, `date`) VALUES
(1, 'SBI139539916', 'SHAMEER', '7979464646', 'sg@gmail.com', 'SBI139539919', 'SBI139539916', 1000, '2022-02-06'),
(2, 'SBI139539916', 'SHAMEER', '7979464646', 'sg@gmail.com', 'SBI139539919', 'SBI139539916', 100, '2022-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `walletotp`
--

CREATE TABLE IF NOT EXISTS `walletotp` (
  `otp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `accountno` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `stat` varchar(100) NOT NULL,
  `otp` varchar(25) NOT NULL,
  `tm` varchar(200) NOT NULL,
  PRIMARY KEY (`otp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `walletotpchk`
--

CREATE TABLE IF NOT EXISTS `walletotpchk` (
  `otp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `accountno` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `stat` varchar(100) NOT NULL,
  `otp` varchar(25) NOT NULL,
  `tm` varchar(200) NOT NULL,
  PRIMARY KEY (`otp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `walletotpchk`
--

INSERT INTO `walletotpchk` (`otp_id`, `name`, `mobileno`, `email`, `accountno`, `date`, `stat`, `otp`, `tm`) VALUES
(1, 'SHAMEER', '7979464646', 'sg@gmail.com', 'SBI139539919', '2022-02-06', 'Accept', '2431960', '06:13:52 AM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

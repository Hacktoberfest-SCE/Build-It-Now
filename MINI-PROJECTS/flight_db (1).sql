-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2020 at 09:49 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passenger_detail`
--

DROP TABLE IF EXISTS `passenger_detail`;
CREATE TABLE IF NOT EXISTS `passenger_detail` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(50) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `dist` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_detail`
--

INSERT INTO `passenger_detail` (`p_id`, `user_type`, `last_name`, `first_name`, `address1`, `dist`, `state`, `country`, `mobile`, `email`) VALUES
(31, 'Admin', 'Sawarn', 'Mayank', 'New Proffesors Colony', 'Begusarai', 'Bihar', 'India', '7760794782', 'mayank.sawarn88@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_logo` varchar(255) NOT NULL,
  `f_number` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_from` varchar(255) NOT NULL,
  `f_to` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`f_id`, `f_logo`, `f_number`, `f_name`, `f_from`, `f_to`, `date`, `departure`, `arrival`, `price`) VALUES
(1, 'icon/indigo.png', '', 'IndiGo', 'Pune', 'Hyderabad', 'Aug 02 2021', '15:40:00', '20:05:00', '6490'),
(2, 'icon/airindia.png', '', 'AirIndia', 'Pune', 'Hyderabad', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(3, 'icon/spicejet.png', '', 'SpiceJet', 'Pune', 'Hyderabad', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(4, 'icon/airasia.png', '', 'AirAsia', 'Pune', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(5, 'icon/indigo.png', '', 'IndiGo', 'Pune', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(6, 'icon/Goair.png', '', 'Goair', 'Pune', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '5380'),
(7, 'icon/airindia.png', '', 'AirIndia', 'Pune', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(8, 'icon/Goair.png', '', 'Goair', 'Pune', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '5380'),
(9, 'icon/airasia.png', '', 'AirAsia', 'Pune', 'Goa', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(10, 'icon/spicejet.png', '', 'SpiceJet', 'Pune', 'Goa', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(11, 'icon/airasia.png', '', 'AirAsia', 'Aurangabad', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(12, 'icon/indigo.png', '', 'IndiGo', 'Aurangabad', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(13, 'icon/Goair.png', '', 'Goair', 'Aurangabad', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '5380'),
(14, 'icon/spicejet.png', '', 'SpiceJet', 'Aurangabad', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(15, 'icon/airasia.png', '', 'AirAsia', 'Aurangabad', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(16, 'icon/airasia.png', '', 'AirAsia', 'Aurangabad', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(17, 'icon/airindia.png', '', 'AirIndia', 'Aurangabad', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(18, 'icon/airasia.png', '', 'AirAsia', 'Mumbai', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(19, 'icon/Goair.png', '', 'Goair', 'Mumbai', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '5380'),
(20, 'icon/indigo.png', '', 'IndiGo', 'Mumbai', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(21, 'icon/spicejet.png', '', 'SpiceJet', 'Mumbai', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(22, 'icon/spicejet.png', '', 'SpiceJet', 'Mumbai', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(23, 'icon/airindia.png', '', 'AirIndia', 'Mumbai', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(24, 'icon/airasia.png', '', 'AirAsia India', 'Mumbai', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(25, 'icon/airasia.png', '', 'AirAsia', 'New Delhi', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(26, 'icon/airindia.png', '', 'AirIndia', 'New Delhi', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(27, 'icon/spicejet.png', '', 'SpiceJet', 'New Delhi', 'Bengaluru', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(28, 'icon/Goair.png', '', 'Goair', 'New Delhi', 'Bengaluru', 'Aug 27 2021', '17:40:00', '20:05:00', '5380'),
(29, 'icon/indigo.png', '', 'IndiGo', 'New Delhi', 'Goa', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(30, 'icon/airindia.png', '', 'AirIndia', 'New Delhi', 'Goa', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(31, 'icon/airasia.png', '', 'AirAsia', 'Hyderabad', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(32, 'icon/airindia.png', '', 'AirIndia', 'Hyderabad', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(33, 'icon/indigo.png', '', 'IndiGo', 'Hyderabad', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(34, 'icon/Goair.png', '', 'Goair', 'Hyderabad', 'Mumbai', 'Aug 27 2021', '17:40:00', '20:05:00', '5380'),
(35, 'icon/airasia.png', '', 'AirAsia', 'Hyderabad', 'delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(36, 'icon/spicejet.png', '', 'SpiceJet', 'Hyderabad', 'delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(37, 'icon/airasia.png', '', 'AirAsia', 'Bengaluru', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(38, 'icon/spicejet.png', '', 'SpiceJet', 'Bengaluru', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(39, 'icon/spicejet.png', '', 'SpiceJet', 'Bengaluru', 'Delhi', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(40, 'icon/airasia.png', '', 'AirAsia', 'Bengaluru', 'Goa', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(41, 'icon/indigo.png', '', 'IndiGo', 'Bengaluru', 'Goa', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(42, 'icon/airasia.png', '', 'AirAsia', 'Goa', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '5720'),
(43, 'icon/airindia.png', '', 'AirIndia', 'Goa', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '9594'),
(44, 'icon/indigo.png', '', 'IndiGo', 'Goa', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '6490'),
(45, 'icon/spicejet.png', '', 'SpiceJet', 'Goa', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '3950'),
(46, 'icon/Goair.png', '', 'Goair', 'Goa', 'Pune', 'Aug 27 2021', '17:40:00', '20:05:00', '5380'),
(47, 'icon/airindia.png', '', 'AirIndia', 'Pune', 'Bengaluru', '', '00:00:00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_detail`
--

DROP TABLE IF EXISTS `ticket_detail`;
CREATE TABLE IF NOT EXISTS `ticket_detail` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_from` varchar(255) NOT NULL,
  `f_to` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `seat_num` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

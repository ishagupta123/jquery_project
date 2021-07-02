-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2021 at 10:24 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

DROP TABLE IF EXISTS `interest`;
CREATE TABLE IF NOT EXISTS `interest` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `interest` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `interest`) VALUES
(1, 'Other'),
(4, 'Waxing and hair removal'),
(3, 'Easy craft'),
(5, 'Face and skin treatment'),
(6, 'Mehndi'),
(7, 'Manicure Padicure'),
(11, 'Facial, Bleach'),
(9, 'Nail Treatment'),
(10, 'Makeup');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `email`, `contact`, `interest`, `description`) VALUES
(1, 'Isha Gupta', 'guptaisha350@gmail.com', '8218626363', 'Face and skin treatment', 'description'),
(12, 'Isha Gupta', 'gupta@gmail.com', '9775664589', 'Easy craft', 'hello'),
(11, 'Isha Gupta', 'guptaish@gmail.com', '123', 'Easy craft', 'hhujhkj'),
(5, 'ijdjdjs', 'isha350@gmail.com', '9775664589', 'Waxing and hair removal', 'hiii i'),
(10, 'Isha Gupta', 'guptaisha@gmail.com', '8127747466', 'Other', 'jkj'),
(9, 'Isha Gupta', 'guptaisha350@gmail.com', '1234567890', 'Other', 'n,n,m'),
(13, 'hiii', 'h@gmail.com', '1234567890', 'Nail Treatment', 'want nails');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2022 at 10:12 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twinkle`
--

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `offer_id` int(9) NOT NULL AUTO_INCREMENT,
  `request_id` int(9) NOT NULL,
  `user_id` int(9) NOT NULL,
  `price` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `request_id`, `user_id`, `price`, `status`) VALUES
(2, 6, 30, '200', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `kidsName` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `age` varchar(500) NOT NULL,
  `TypeOfServese` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `Duration` varchar(500) NOT NULL,
  `comments` text NOT NULL,
  `parentName` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `kidsName`, `Gender`, `age`, `TypeOfServese`, `startDate`, `Duration`, `comments`, `parentName`, `status`) VALUES
(6, 'ali', 'boy', '3-5 years old', 'others', '2022-11-17', '3-4 hours', '  no ff f', '29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `rate_id` int(5) NOT NULL AUTO_INCREMENT,
  `Rate` int(11) NOT NULL,
  `feedBack` varchar(500) NOT NULL,
  `Date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `offer_id` int(5) NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `location` varchar(500) DEFAULT NULL,
  `photo` varchar(500) NOT NULL,
  `age` float DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `bio` text,
  `role` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `password`, `email`, `city`, `location`, `photo`, `age`, `gender`, `phone`, `bio`, `role`) VALUES
(29, 'mona', 'ahmed', '123456', 'mona@gmail.com', 'makkah', 'afif', '4118-123.jpg', NULL, NULL, NULL, NULL, 1),
(30, 'rawan', 'mahdi', '123456', 'eee@gmail.com', 'makkah', NULL, '13684-female.png', 45, 'F', '055966936', ' i am lov playing football', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

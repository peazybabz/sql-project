-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2018 at 01:17 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlinject-proof`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `product_name` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `qty`, `img`, `price`) VALUES
(1, 'Novelty Blouse', 10, 'cc.jpg', '135.00'),
(2, 'New Arrival Blouse', 10, 'uu.jpg', '85.00'),
(3, 'New Arrival Beach Blouse', 25, 'jj.jpg', '65.00'),
(4, 'New Arrival Blouse', 20, 'ii.jpg', '85.00'),
(5, 'New Arrival Blouse', 30, 'gg.jpg', '75.00'),
(6, 'New Arrival Blouse 2018', 25, 'kk.jpg', '75.00'),
(7, 'New Arrival Blouse', 28, 'nn.jpg', '85.00'),
(8, 'New Arrival Suit 2018', 24, 'nn.jpg', '85.00'),
(9, 'New Jean for Men', 26, 'n.jpg', '74.00'),
(10, 'New Arrival Blouse', 32, 'bb.jpg', '85.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `username` varchar(255) NOT NULL COMMENT 'User Name',
  `password` varchar(255) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `credit_card_no` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `user_role`, `email`, `credit_card_no`) VALUES
(1, 'Carl', 'Carl', 'admin', 'carl@fashionstore.com', '111222333444'),
(2, 'Fred', 'Fred', 'user', 'fred@fashionstore.com', '222333444555'),
(3, 'Lemato', 'lema', 'user', 'lemato@fashionstore.com', '333444555666'),
(4, 'Peace', 'peace', 'user', 'peace@fashionstore.com', '444555666777');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

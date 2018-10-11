-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2018 at 11:12 AM
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
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `product_price` decimal(10,2) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`product_price`, `product_name`, `username`) VALUES
('75.00', 'New Arrival Blouse', 'Fred'),
('65.00', 'New Arrival Beach Blouse', 'Fred');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `buyer` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_name`, `order_date`, `buyer`) VALUES
(1, 'New Jean for Men', '28th May 2018', 'Fred'),
(2, 'New Jean for Men', 'Wednesday 9th of December 2018', 'Peace'),
(3, 'New Arrival Blouse', '14th July 2018', 'Fred'),
(4, 'Novelty Blouse', '14th July 2018', 'Fred'),
(5, 'Novelty Blouse', '18th May 2018', 'Fred'),
(6, 'New Arrival Blouse', '18th May 2018', 'Fred'),
(7, 'New Arrival Blouse', '18th May 2018', 'Fred'),
(8, 'New Arrival Beach Blouse', '18th May 2018', 'Fred'),
(9, 'Novelty Blouse', '18th May 2018', 'Fred'),
(10, 'New Arrival Blouse 2018', '18th May 2018', 'Fred'),
(11, 'Spicy Blouse', '11th May 2018', 'Fred'),
(12, 'New Trending Suit 2018', '14th July 2018', 'Fred'),
(13, 'New Arrival Blouse', '18th May 2018', 'Fred'),
(14, 'Magnifico Spiced Blouse', '14th July 2018', 'Fred'),
(15, 'New Arrival Blouse', '12th June 2018', 'Fred'),
(22, 'Novelty Blouse', '12th June 2018', 'joe'),
(17, 'New Trending Suit 2018', '14th July 2018', 'Fred'),
(18, 'New Arrival Blouse', '11th october 2018', 'Gerard'),
(21, 'New Arrival Blouse', '11th october 2018', 'joe'),
(23, 'Novelty Blouse', '11th october 2018', 'Fred');

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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
(7, 'New Arrival Blouse', 28, '8.jpg', '85.00'),
(8, 'New Arrival Suit 2018', 24, 'nn.jpg', '85.00'),
(9, 'New Jean for Men', 26, 'n.jpg', '74.00'),
(10, 'New Arrival Blouse', 32, 'bb.jpg', '85.00'),
(11, 'New Trending Suit 2018', 30, '00.jpg', '180.00'),
(12, 'New Jolly Suit 2018', 50, 'h.jpg', '200.00'),
(13, 'Mega Suit', 10, 'nn.jpg', '40.00'),
(14, 'Spicy Blouse', 10, 'cc.jpg', '80.00'),
(15, 'Magnifico Spiced Blouse', 20, 'e.jpg', '85.00');

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
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `user_role`, `email`) VALUES
(1, 'Carl', 'Carl', 'admin', 'carl@fashionstore.com'),
(2, 'Fred', 'Fred', 'user', 'fred@fashionstore.com'),
(4, 'Peace', 'peace', 'user', 'peace@fashionstore.com'),
(5, 'Jane', 'jane', 'user', 'jane@fashionstore.com'),
(6, 'Mark', 'mark', 'user', 'mark@fashionstore.com'),
(7, 'Gerard', 'gerard', 'user', 'gerard@fashionstore.com'),
(8, 'joe', 'joe', 'user', 'joe@fashionstore.com'),
(9, 'jenifer', 'jenifer', 'user', 'jenifer@fashionstore.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

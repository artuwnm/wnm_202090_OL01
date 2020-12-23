-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2020 at 12:07 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WNM608_Ashley_Yeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `description`, `thumbnail`, `image`) VALUES
(10, 'bento_deluxe', '', 14.99, 'food', 'served with meat, rice, salad, and soup.', 'bento.jpg', 'bento.jpg'),
(13, 'tempura ', '', 12.99, 'appetizer', 'shrimp tempura or vegatable tempura', 'tempura.jpg', 'tempura.jpg'),
(12, 'donburi', '', 14.99, 'rice bowl', 'meat served over rice', 'donburi.jpg', 'donburi.jpg'),
(17, 'nigiri', '', 16.99, 'sushi', 'fish on top of sushi rice', 'nigiri.jpg', 'nigiri.jpg'),
(16, 'udon', '', 12.99, 'noodles', 'refreshing udon noodle soup', 'noodle.jpg', 'noodle.jpg'),
(18, 'ichiban_special_roll', '', 16.99, 'sushi ', 'fried shrimp tempura and unagi sauce over sushi roll', 'sushiroll.jpg', 'sushiroll.jpg'),
(19, 'katsudon', '', 11.99, 'noodles', 'batter fried pork cutlet over sushi rice', 'katsu.jpg', 'katsu.jpg'),
(20, 'mochi', '', 8.50, 'dessert', 'ice cream in the ricecakes', 'mochi.jpg', 'mochi.jpg'),
(21, 'ichiban_sashimi_combo', '', 25.99, 'sushi', 'chef\'s choice of sashimi plate', 'sashimi.jpg', 'sashimi.jpg'),
(22, 'ichiban_rainbow_roll', '', 16.99, 'sushi', 'ichiban special rainbow roll', 'rainbowroll.jpg', 'rainbowroll.jpg'),
(23, 'ramen', '', 13.99, 'noodles', 'Japanese traditional ramen noodle soup', 'ramen.jpg', 'ramen.jpg'),
(24, 'chirashi', '', 25.99, 'sushi', 'assorted sashimi over sushi rice', 'chirashi.jpg', 'chirashi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

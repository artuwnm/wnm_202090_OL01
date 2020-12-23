-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2020 at 05:05 PM
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
  `date_create` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `date_create`, `price`, `category`, `description`, `thumbnail`, `image`) VALUES
(10, 'bento deluxe', '2020-11-24', 14.99, 'entree', 'served with meat, rice, salad, and soup.', 'bento.jpg', 'bento.jpg,donburi.jpg'),
(13, 'tempura ', '2020-11-24', 12.99, 'appetizer', 'shrimp tempura or vegatable tempura', 'tempura.jpg', 'tempura.jpg'),
(12, 'donburi', '2020-11-24', 14.99, 'entree', 'meat served over rice', 'donburi.jpg', 'donburi.jpg'),
(17, 'nigiri', '2020-11-24', 16.99, 'entree', 'fish on top of sushi rice', 'nigiri.jpg', 'nigiri.jpg'),
(16, 'udon', '2020-11-24', 12.99, 'entree', 'refreshing udon noodle soup', 'noodle.jpg', 'noodle.jpg'),
(18, 'ichiban special roll', '2020-11-24', 16.99, 'entree', 'fried shrimp tempura and unagi sauce over sushi roll', 'sushiroll.jpg', 'sushiroll.jpg'),
(19, 'katsudon', '2020-11-24', 11.99, 'entree', 'batter fried pork cutlet over sushi rice', 'katsu.jpg', 'katsu.jpg'),
(20, 'mochi', '2020-11-24', 8.50, 'dessert', 'ice cream in the ricecakes', 'mochi.jpg', 'mochi.jpg'),
(21, 'ichiban sashimi combo', '2020-11-24', 25.99, 'entree', 'chef\'s choice of sashimi plate', 'sashimi.jpg', 'sashimi.jpg'),
(22, 'ichiban rainbow roll', '2020-11-24', 16.99, 'entree', 'ichiban special rainbow roll', 'rainbowroll.jpg', 'rainbowroll.jpg'),
(23, 'ramen', '2020-11-24', 13.99, 'entree', 'Japanese traditional ramen noodle soup', 'ramen.jpg', 'ramen.jpg'),
(24, 'chirashi', '2020-11-24', 25.99, 'entree', 'assorted sashimi over sushi rice', 'chirashi.jpg', 'chirashi.jpg');

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

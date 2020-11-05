-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2020 at 02:53 AM
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
  `image` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `description`, `image`) VALUES
(1, 'Lunch Special ', '', 0.00, 'Lunch Specials', 'Lunch Specials (Served from 11:30am to 2:30pm)', 'bento.jpg'),
(2, 'Dinner Special', '', 0.00, 'Dinner Specials', 'Grilled Entrees, Crispy dinners, Kid\'s Menu, Bento Boxes.', 'katsu.jpg'),
(3, 'Sushi and Sashimi', '', 0.00, 'Sushi and Sashimi', 'Fresh fish of your choice!', 'sushiroll.jpg'),
(4, 'Donburi', '', 0.00, 'Donburi', 'Meat of choice over rice served in a bowl.', 'img/donburi.jpg'),
(5, 'Noodles', '', 0.00, 'Noodles', 'Stirfried noodles, noodle soups, hot and cold noodles. ', 'noodle.jpg'),
(6, 'Hand Roll and makimono', '', 0.00, 'Hand Roll and Makimono', '1 pc to 6 pcs. ', 'makimono.jpg'),
(7, 'Nigiri and Hosomaki', '', 0.00, 'Nigiri and Hosomaki', 'Raw fish over rice. ', 'nigiri.jpg'),
(8, 'Drinks and Desserts', '', 0.00, 'Drinks and Desserts', 'Favorite sake to sweet ice cream!', 'mochi.jpg'),
(9, 'Appetizers', '', 0.00, 'Appetizers', 'Salad, Rice, Tempera, Raw Appetizers', 'tempura.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

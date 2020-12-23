-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2020 at 04:19 PM
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
-- Database: `michael_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `size` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `size`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Monstera Deliciosa', 50.00, 'Plants', 'Medium', '2020-11-07 18:36:51', '2020-11-07 18:36:51', 'We present you a Monstera Deliciosa (one of our most popular plants!). This is a medium size plant. This lovely plant likes direct sunlight. The direct sunlight will help with growth. ', '1.jpg', '1.jpg', 10),
(2, 'Calathea Rattlesnake', 40.00, 'Plants', 'Small', '2020-11-07 18:38:21', '2020-11-07 18:38:21', 'We present you a Calathea Rattlesnake. This is a small size plant. Don\'t have too much sunlight? No worries! This lovely plant likes indirect sunlight.', '2.jpg', '2.jpg', 20),
(3, 'Snake Plant', 40.00, 'Plants', 'Small', '2020-11-07 18:39:21', '2020-11-07 18:39:21', 'We present you a Snake Plant. This is a small size plant. Don\'t have too much sunlight? No worries! This lovely plant likes indirect sunlight.', '3.jpg', '3.jpg', 5),
(4, 'Pink Anthurium', 55.00, 'Plants', 'Medium', '2020-11-07 18:41:29', '2020-11-07 18:41:29', 'We present you a Pink Anthurium. This is a medium size plant. This lovely plant likes direct sunlight. The sun will help with growth. ', '4.jpg', '4.jpg', 16),
(5, 'Fiddle Leaf Fig', 45.00, 'Plants', 'Small', '2020-11-07 18:43:31', '2020-11-07 18:43:31', 'We present you a Fiddle Leaf Fig. This is a small size plant. Don\'t have too much sunlight? No worries! This lovely plant likes indirect sunlight.', '5.jpg', '5.jpg', 5),
(6, 'Bird Of Paradise', 50.00, 'Plants', 'Medium', '2020-11-07 18:44:27', '2020-11-07 18:44:27', 'We present you a Bird of Paradise. This is a medium size plant. This lovely plant likes direct sunlight. The sun will help with growth. \r\n', '6.jpg', '6.jpg', 17),
(7, 'Snake Zeylanica', 70.00, 'Plants', 'Large', '2020-11-07 18:46:12', '2020-11-07 18:46:12', 'We present you a Snake Zeylanica. This is a large size plant. Don\'t have too much sunlight? No worries! This lovely plant likes indirect sunlight.', '7.jpg', '7.jpg', 2),
(8, 'Birds Nest Fern', 40.00, 'Plants', 'Small', '2020-11-07 18:47:32', '2020-11-07 18:47:32', 'We present you a Bird\'s Nest Fern. This is a small size plant. This lovely plant likes direct sunlight. The sun will help with growth. \r\n', '8.jpg', '8.jpg', 6),
(9, 'White Anthurium ', 55.00, 'Plants', 'Large', '2020-11-07 18:48:26', '2020-11-07 18:48:26', 'We present you a White Anthurium. This is a large size plant. This lovely plant likes direct sunlight. The sun will help with growth. \r\n', '9.png', '9.png', 11),
(10, 'Snake Plant', 75.00, 'Plants', 'Large', '2020-11-07 18:49:27', '2020-11-07 18:49:27', 'We present you a Snake Plant. This is a large size plant. Don\'t have too much sunlight? No worries! This lovely plant likes indirect sunlight.', 'plant10.jpg', 'plant10.jpg', 23),
(11, 'Pilea Peperomioides', 45.00, 'Plants', 'Small', '2020-11-07 18:50:30', '2020-11-07 18:50:30', 'We present you a Pilea peperomioides. This is a small size plant. This lovely plant likes direct sunlight. The sun will help with growth. \r\n', 'plant11.jpg', 'plant11.jpg', 16),
(12, 'Calathea Medallion', 120.00, 'Plants', 'XL', '2020-11-07 18:51:50', '2020-11-07 18:51:50', 'We present you a Calathea Medallion. This is an extra-large size plant. Don\'t have too much sunlight? No worries! This lovely plant likes indirect sunlight.', 'plant12.jpg', 'plant12.jpg', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

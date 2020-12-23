-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2020 at 08:34 PM
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
-- Database: `danyaxie_aau`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `color` varchar(32) NOT NULL,
  `size` varchar(32) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `size`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Verna Double Hoops Earrings', 'Multi-color', 'One size', 150, 'Earrings', '2020-11-06 22:02:19', '2020-11-06 22:02:19', '925 Sterling Silver in 14K Yellow/White Gold Plated. Earring length 46mm, width 20mm.', '1_thumb.jpg', '1_1.jpg,1_2.jpg'),
(2, 'Marjorie Double Ring', 'Silver, Gold', 'Small, Medium, Large', 166, 'Rings', '2020-11-06 22:04:26', '2020-11-06 22:04:26', '925 Sterling Silver in 14K Yellow/White Gold Plated; AAA Grade Freshwater Pearl 7.5-8mm.', '2_thumb.jpg', '2_1.jpg,2_2.jpg,3_3.jpg'),
(3, 'Alexa Cross Ring', 'Silver', 'Small, Medium, Large', 110, 'Rings', '2020-11-06 22:06:08', '2020-11-06 22:06:08', '925 Sterling Sliver in 14K Yellow/White Gold Plated.', '3_thumb.jpg', '3_1.jpg,3_2.jpg'),
(4, 'Riley Earrings', 'Gold', 'One size', 120, 'Earrings', '2020-11-06 22:07:20', '2020-11-06 22:07:20', '925 Sterling Silver in 14K Yellow/White Gold Plated; AAA Grade Freshwater Pearl 4-4.5mm;Earring length 35mm, width 8mm.', '4_thumb.jpg', '4_1.jpg,4_2.jpg'),
(5, 'Verna Basic Earrings', 'Silver, Gold', 'One size', 85, 'Earrings', '2020-11-06 22:08:21', '2020-11-06 22:08:21', '925 Sterling Silver in 14K Yellow/White Gold Plated. Earring length 24mm.', '5_thumb.jpg', '5_1.jpg,5_2.jpg,5_3.jpg'),
(6, 'Vee Pearl Earrings', 'Silver, Gold', 'One size', 200, 'Earrings', '2020-11-06 22:09:33', '2020-11-06 22:09:33', '925 Sterling Silver in 14K Yellow/White Gold Plated; AAA Grade Freshwater Pearl 6-6.5mm; Earring length 25mm.', '6_thumb.jpg', '6_1.jpg,6_2.jpg,6_3.jpg'),
(7, 'Marjorie Curvy Necklace', 'Gold', 'One size', 198, 'Necklace', '2020-11-06 22:11:07', '2020-11-06 22:11:07', '925 Sterling Silver in 14K Yellow/White Gold Plated; AAA Grade Freshwater Pearl 6-6.5mm; Pendant length 2.4cm, necklace length (without the pendant) approx. 38cm, necklace extender length 5cm (2.5 + 2.5cm).', '7_thumb.jpg', '7_1.jpg,7_2.jpg'),
(8, 'Olivia Pearl Necklace', 'Silver, Gold', 'One size', 200, 'Necklace', '2020-11-06 22:12:05', '2020-11-06 22:12:05', '925 Sterling Silver in 14K Gold Plated; AAA Grade Freshwater Pearl 7-7.5mm; Pendant length 3.5cm, necklace length (without the pendant) approx. 38cm, necklace extender length 5cm (2.5 + 2.5cm).', '8_thumb.jpg', '8_1.jpg,8_2.jpg,8_3.jpg'),
(9, 'Alexa Chain Bracelet', 'Silver, Gold', 'One size', 180, 'Bracelet', '2020-11-06 22:24:20', '2020-11-06 22:24:20', '925 Sterling Silver in 14K Gold Plated.', '9_thumb.jpg', '9_1.jpg,9_2.jpg,9_3.jpg'),
(10, 'Marjorie Twining Ring', 'Silver', 'Small, Medium, Large', 168, 'Rings', '2020-11-06 22:26:06', '2020-11-06 22:26:06', '925 Sterling Silver in 14K Yellow/White Gold Plated; AAA Grade Freshwater Pearl 6-6.5mm.', '10_thumb.jpg', '10_1.jpg,10_2.jpg'),
(11, 'Alexa Double Ring', 'Silver, Gold', 'Small, Medium, Large', 158, 'Rings', '2020-11-06 22:27:10', '2020-11-06 22:27:10', '925 Sterling Silver in 14K Yellow/White Gold Plated.', '11_thumb.jpg', '11_1.jpg,11_2.jpg,11_3.jpg'),
(12, 'Marjorie Curvy Ring', 'Silver', 'Small, Medium, Large', 224, 'Rings', '2020-11-06 22:29:00', '2020-11-06 22:29:00', '925 Sterling Silver in 14K Yellow/White Gold Plated; AAA Grade Freshwater Pearl 7.5-8mm.', '12_thumb.jpg', '12_1.jpg,12_2.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
